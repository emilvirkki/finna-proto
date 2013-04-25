<!-- START of: Search/rss.tpl -->

{* requires XML_RSS (pear install XML_RSS) *}

{php}
$confArray = $this->get_template_vars('rssFeeds');
$feed = $confArray[$this->get_template_vars('rssId')];
$type = $feed['type'];
$items = $feed['items'];
$itemsPerPage = $feed['itemsPerPage'];
$direction = isset($feed['direction']) ? $feed['direction'] : 'left';
$height = (!isset($feed['height']) || $feed['height'] == 0) ? false : $feed['height'];

require_once "XML/RSS.php";
$rss =& new XML_RSS($feed['url']);
$rss->parse();


if ($items>0) {
    $rssItems = array_slice($rss->getItems(), 0, $items);
} else {
    $rssItems = $rss->getItems();
}

if(($type == "carousel") ||
   ($type == "carousel-small") ||
   ($type == "carousel-notext")) {
    echo "<div class=\"carousel-direction-$direction\">";
    echo "<ul id=\"NDLCarousel\"";

    $classes = "";
    if($type == "carousel-notext") {
        $classes .= "noText ";
    } elseif($type == "carousel-small") {
        $classes .= "small ";
    } elseif($type == "carousel") {
        $classes .= "includeDescription ";
        $includeDescription = true;
    }

    if($classes != "") {
        echo " class=\"" . trim($classes) . "\"";
    }

    echo ">\n";

    foreach ($rssItems as $item) {
        $title = $item['title'];
        $content = strip_tags($item['description']);
        $imageUrl = false;
        if(count($item['enclosures'])>0) {
            foreach($item['enclosures'] as $enclosure) {
                if(is_int(stripos($enclosure['type'], "image"))) {
                    $imageUrl = $enclosure['url'];
                    break;
                }
            }
        }
        if(!$imageUrl) {
            preg_match("/src=\"([^\"]*)/", $item['description'], $matches);
            $imageUrl = $matches[1];
        }
        $url   = $item['link'];
        echo "<li>";
        echo "<img src=\"$imageUrl\" alt=\"\" />";
        echo "<h4><a href=\"$url\">$title</a></h4>";
        if($includeDescription) {
            echo "<p>" . $content . "</p>";
        }
        echo "</li>\n";
    }
    echo "</ul>";

    $this->assign("itemsPerPage", $itemsPerPage);
    $this->assign("direction", $direction);
    $this->assign("height", $height);

    {/php}
    
    <ul id="NDLCarouselNavi"><li id="prev" /><li id="next" /></ul>

    {literal}

    <script>
        $(document).ready(function(){
            
            // Determine height if it is not set
            {/literal}{php}
                if (!$height) :
            {/php}{literal}
            var carouselContainer = $('#carouselContainer .content');
            var carouselWidth = carouselContainer.width();
            var carouselHeight = 
                (carouselWidth - ({/literal}{$itemsPerPage}{literal} * 10))  / 
                {/literal}{$itemsPerPage}{literal} * 1.36;
                    
            // If height is set
            {/literal}{php}
                else : 
            {/php}{literal}
                var carouselHeight = {/literal}{$height}{literal};
            {/literal}{php}
                endif;
            {/php}{literal} 
            
            $('#NDLCarousel').carouFredSel({
                responsive: true,
                direction:{/literal}'{$direction}'{literal},
                auto: 80000,
                width: "100%",
                items: {/literal}{$itemsPerPage}{literal},
                height: carouselHeight,
                prev: "#NDLCarouselNavi #prev",
                next: "#NDLCarouselNavi #next",
                scroll: {
                  items: 1,
                  duration: 300,
                  swipe: true,
                  fx: "directscroll"
                }
            });
            
            // Also set height to individual list items
            $('#NDLCarousel li').css({
                'height': carouselHeight,
                'line-height' : carouselHeight + 'px'
            });
                
            // Function to refresh carousel when layout changes
            prevWidth = carouselWidth;
            refreshCarousel = function() {
                if(carouselContainer.width()!=prevWidth){
                    prevWidth = carouselContainer.width();
                    calculateCarouselDimensions();
                }
            }
            $(window).resize(refreshCarousel());
            
            
            calculateCarouselDimensions = function() {
                
                var containerWidth = $('#NDLCarousel.includeDescription li').width();
                var containerHeight = $('#NDLCarousel.includeDescription li').height();
                var containerRatio = containerWidth / containerHeight;

                $('#NDLCarouselNavi li').css({
                    'top'         : -(containerHeight / 2) - $('#NDLCarouselNavi #prev').height() / 2
                });

                $('#NDLCarousel.includeDescription img').each(function(){

                    var imgWidth = $(this).width();
                    var imgHeight = $(this).height();
                        
                    var imgRatio = imgWidth / imgHeight;
                    var newWidth = 0;
                    var newHeight = 0;
                      
                    if(containerRatio < imgRatio) {
                        newWidth = containerHeight * imgRatio;
                        newHeight = containerHeight;
                    } else {
                        newWidth = containerWidth;
                        newHeight = containerWidth / imgRatio;
                    }
                        
                    var verticalPosition = (newHeight - containerHeight) / 2;
                    var horizontalPosition = (newWidth - containerWidth) / 2;
                    
                    $(this).css({
                        'height'      : newHeight,
                        'width'       : newWidth,
                        'position'    : 'absolute',
                        'left'        : - horizontalPosition,
                        'top'         : - verticalPosition,
                        'display'     : 'none',
                        'visibility'  : 'visible'
                    });
                      
                    $(this).fadeIn(300);
                });
            };
                
            calculateCarouselDimensions();
              

            $('#NDLCarousel').css(
                "visibility",
                "visible"
            );
            
            // Make individual pick-ups clickable
            $('#NDLCarousel li').click(function() {
                var href = $(this).find('a').attr('href');
                window.location.href = href;
            });
            
            // Set title and text position
            $('#NDLCarousel.includeDescription h4').each(function() {
                var thisHeight = $(this).find('a').height() + 12; // 6px + 6px padding
                var topPosition = carouselHeight - thisHeight;

                $(this).css('top', topPosition);
                $(this).siblings('p').css('top', thisHeight);
                
            });
            
            $('#NDLCarousel.includeDescription li').mouseenter(function() {
                 $(this).children('h4').stop().animate({
                    top: 0
                    }, 50, function() {
                        $(this).siblings('p').stop(true,true).delay(50).fadeIn(200);
                        });
            });
             
            $('#NDLCarousel.includeDescription li').mouseleave(function() {
                h4Height = $(this).find('a').height() + 12;
                 $(this).children('h4').stop().animate({
                    top: carouselHeight - h4Height
                }, 100);
                $(this).children('p').stop(true, true).fadeOut(200);
            });
         });
    </script>
    {/literal}{php}
} else {
    echo "<ul>";
    foreach ($rssItems as $item ) {
			$dateTime = DateTime::createFromFormat('Y-m-d\TH:i:s\Z', $item['dc:date']);
			$date = $dateTime->format('j.n.');
            $title = $item['title'];
            $url   = $item['link'];
            echo "<li><span class=\"date\">$date</span><a href=\"$url\">$title</a></li>\n";
    }
    echo "</ul></div>";

}

{/php}


<!-- END of: Search/rss.tpl -->
