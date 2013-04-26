<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- START of: layout.tpl -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Finna - Hakutulokset - <?php print $_GET[''] ?></title>
    <link rel="shortcut icon" href="/finna/interface/themes/national/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/finna/interface/themes/national/images/apple-touch-icon.png">

    
    <link rel="search" type="application/opensearchdescription+xml" title="Library Catalog Search" href="/finna/Search/OpenSearch?method=describe">

    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery-ui-1.css">

        <link rel="stylesheet" type="text/css" media="screen" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery.css">

        <link rel="stylesheet" type="text/css" media="screen" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/style.css">

        <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/screen.css">
    <link rel="stylesheet" type="text/css" media="print" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/print.css">
    <!--[if lt IE 8]><link rel="stylesheet" type="text/css" media="screen, projection" href="/finna/interface/themes/ndl/css/blueprint/ie.css" /><![endif]-->
        <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/blueprint-adjust.css">

        <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/grid.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/ui.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/datatables.css">
    
        <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/typography.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/default.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/layout.css">
    
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/icons.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/home.css">
    
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/breadcrumbs.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/footer.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/default_custom.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/home_custom.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/768tablet.css">
    <link rel="stylesheet" type="text/css" media="screen, projection" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/settings.css">
    
    <link rel="stylesheet" type="text/css" media="print" href="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/print_002.css">
            <!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen, projection" href="/finna/interface/themes/ndl/css/ie.css" /><![endif]-->
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="screen, projection" href="/finna/interface/themes/ndl/css/iepngfix/iepngfix.css" /><![endif]-->

        <script type="text/javascript">
    <!--//--><![CDATA[//><!--
      var path = '/finna';
      var userLang = 'fi';
    //--><!]]>
    </script>
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery-1.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery-ui-1.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_008.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_009.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_005.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_010.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_006.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_014.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_004.js"></script>   
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_002.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_013.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_003.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/custom.js"></script>

        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_011.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/facets.js"></script>

        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/tmpl.js"></script>

        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/lightbox.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/common.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/slides.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/ndl.js"></script>
    
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/qrcode.js"></script> 

        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/dropdown.js"></script>

            <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/include.js"></script>
    <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/persona.js"></script>
    
    
        <script type="text/javascript">
        // Long field truncation
        $(document).ready(function() {
            $('.truncateField').not('.recordSummary').collapse({maxLength: 150, more: "lisää", less: "vähemmän"});
            $('.recordSummary.truncateField').collapse({maxLength: 150, maxRows: 5, more: " ", less: " "});
                            mozillaPersonaSetup(null, false);
                        
        });
        // Load child theme custom functions
        customInit();
        </script>
    
    
    <script type="text/javascript">
    
        $(function(){
            $('#searchFormLabel').labelOver('labelOver')
            setMainFocus();
        });
    
    </script>
    
            <!--[if lt IE 7]><script type="text/javascript" src="/interface/themes/ndl/js/../css/iepngfix/iepngfix_tilebg.js"></script><![endif]-->
        <!--[if lt IE 9]>
      <script type="text/javascript" src="/interface/themes/ndl/js/html5.js"></script>
    <![endif]-->

   
        <meta name="viewport" content="width=720">
                <?php include('common.php') ?>
  </head>
  <body class="theme-custom theme-national theme-ndl  ">
                <a href="#results" class="hidden-visually">Siirry suoraan hakutuloksiin</a>
        <div id="lightboxLoading" style="display: none;">Lataa...</div>
    <div id="lightboxError" style="display: none;">Virhe: Ponnahdusikkunan lataaminen epäonnistui.</div>
    <div id="lightbox" onclick="hideLightbox(); return false;"></div>
    <div id="popupbox" class="popupBox"><b class="btop"><b></b></b></div>
        <div style="display: block; background-image: url(&quot;/finna/interface/themes/national/images/header_background_1.jpg&quot;);" class="backgroundContainer"></div>
    <div id="page-wrapper" class="module-Search">

                        <!--[If lt IE 8]>
        <div class="ie">Valitettavasti palvelu ei tue vanhentuneiden selainten - kuten Internet Explorer 6 ja 7 - käyttöä.<br/>Suosittelemme ajanmukaisempia selaimia tai lisäosaa <a href='http://www.google.com/chromeframe'>Chrome Frame</a>.</div>
      <![endif]-->
      <!--
      <div id="beta-wrapper">
          <a id="beta-banner" href="https://www.finna.fi" title="Koti"></a>
      </div>
      -->

      <div id="nav" class="nav">
        <div class="content">
          <h2 class="hidden-visually">Valikko</h2>
          <ul id="headerMenu" class="grid_19">
            <!-- START of: header-menu.fi.tpl -->

<li class="menuHome"><a href="/finna/"><span></span></a></li>

<li class="menuAbout"><a href="/finna/Content/about"><span>Tietoa</span></a></li>

<li class="menuSearch menuSearch_fi"><a href="#"><span>Haku</span></a>
  <ul class="subNav">
    <li>
      <a href="/finna/Search/Advanced">
        <span>Tarkennettu haku</span>
        <span>Tarkemmat hakuehdot ja karttahaku</span>
      </a>
    </li>
    <li>
      <a href="/finna/Browse/Home">
        <span>Selaa luetteloa</span>
        <span>Selaa tagien, tekijän, aiheen, genren, alueen tai aikakauden mukaan.</span>
      </a>
    </li>
    <li>
      <a href="/finna/Search/History">
        <span>Hakuhistoria</span>
        <span>Istuntokohtainen hakuhistoriasi. Kirjautumalla voit tallentaa hakusi.</span>
      </a>    
    </li>
  </ul>
</li>

<li class="menuHelp menuHelp_fi"><a href="#"><span>Apua</span></a>
  <ul class="subNav">
    <li>
      <a href="/finna/Content/searchhelp">
        <span>Hakuohje</span>

        <span>Yksityiskohtaiset ohjeet hakuun.</span>

      </a>
    </li>
  </ul> 
</li>

<li class="menuFeedback"><a href="/finna/Feedback/Home"><span>Palaute</span></a></li>

<!-- START of: login-element.tpl -->

<li class="menuLogin menuLogin_fi"><a href="/finna/MyResearch/Home">
    <span id="userId">Kirjaudu sisään</span></a>
    <ul class="subNav">
        </ul>
</li>

<!-- END of: login-element.tpl -->
<!-- END of: header-menu.fi.tpl -->          </ul>
          <div class="lang">
            <h2 class="hidden-visually">Kielen valinta</h2>
                        <ul>
                                                                              <li><a href="/finna/Search/Results?lookfor=muumi&amp;prefilter=-&amp;SearchForm_submit=Hae&amp;lng=sv">
                    Svenska</a>
                  </li>
                                                                <li><a href="/finna/Search/Results?lookfor=muumi&amp;prefilter=-&amp;SearchForm_submit=Hae&amp;lng=en-gb">
                    English</a>
                  </li>
                                          </ul>
                      </div>
        </div>
      </div>

      <div id="header" class="header  clearfix">
        <div class="header-inner">
          <div class="content">
          <!-- START of: header.tpl -->



  <div class="grid_24 drop">
    <a id="logo" href="/finna/" title="Koti">
      <img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/customhomelogo.png" alt="">
    </a>
  </div>

<div id="headerSeparator" class="grid_24"></div>

<div id="headerBottom" class="grid_24">
    <div class="content">
    <div class="grid_24">
      <div class="breadcrumbs">
        <div class="breadcrumbinner">
          <a href="/finna/">Koti</a><span></span>
          <!-- START of: Search/breadcrumbs.tpl -->
<em>Haku: <?php print $_GET['lookfor'] ?></em>

<!-- END of: Search/breadcrumbs.tpl -->        </div>
      </div>
    </div>
  </div>
    
    <div id="searchFormHeader">
    <div class="searchbox">
               
          <!-- START of: Search/searchbox.tpl -->

<div id="searchFormContainer" class="searchform last content">

  <form method="get" action="/finna/hakutulokset_muumi" name="searchForm" id="searchForm" class="search">
    <h2 class="hidden-visually" id="haku">Haku</h2>
    <div class="searchFormWrapper grid_16">
      <div class="overLabelWrapper">
        <label style="text-indent: -10000px;" for="searchForm_input" id="searchFormLabel" class="labelOver normal">Hae…</label>
        <div style="position: relative;" class="undefined_div"><input aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" id="searchForm_input" name="lookfor" value="<?php print $_GET['lookfor'] ?>" class="last autocomplete typeSelector:searchForm_type clearable ui-autocomplete-input" title="Hae…" type="text"><a style="position: absolute; cursor: pointer; top: 7.5px; left: 341.5px;" class="clear_input">×</a></div>
      </div>
              <div class="styled_select">
        <dl id="styled_searchForm_filter0" class="dropdown searchForm_filter"><dt><a href="#">Koko tietokannasta<span class="value">-</span></a></dt><dd><ul style="display: none;"><li><a href="#" class="big">Koko tietokannasta<span class="value">-</span></a></li><li><a href="#" class="big">Arkistoista<span class="value">archives</span></a></li><li><a href="#" class="big">Kirjastoista<span class="value">libraries</span></a></li><li><a href="#" class="big">Museoista<span class="value">museums</span></a></li><li><a href="#" class="big">Asiakirja<span class="value">format_Document</span></a></li><li><a href="#" class="big">Esine<span class="value">format_PhysicalObject</span></a></li><li><a href="#" class="big">Kartta<span class="value">format_Map</span></a></li><li><a href="#" class="big">Kirja<span class="value">format_Book</span></a></li><li><a href="#" class="big">Kuva<span class="value">format_Image</span></a></li><li><a href="#" class="big">Lehti/Artikkeli<span class="value">format_Journal</span></a></li><li><a href="#" class="big">Muu<span class="value">format_Other</span></a></li><li><a href="#" class="big">Opinnäyte<span class="value">format_Thesis</span></a></li><li><a href="#" class="big">Taideteos<span class="value">format_WorkOfArt</span></a></li><li><a href="#" class="big">Tietokanta<span class="value">format_Database</span></a></li><li><a href="#" class="big">Video<span class="value">format_Video</span></a></li><li><a href="#" class="big">Ääni<span class="value">format_Sound</span></a></li></ul></dd></dl><select style="display: none;" id="searchForm_filter" class="searchForm_styled stylingDone" name="prefilter">
        
          <option value="-" selected="selected">Koko tietokannasta</option>
        
          <option value="archives">Arkistoista</option>
        
          <option value="libraries">Kirjastoista</option>
        
          <option value="museums">Museoista</option>
        
          <option value="format_Document">Asiakirja</option>
        
          <option value="format_PhysicalObject">Esine</option>
        
          <option value="format_Map">Kartta</option>
        
          <option value="format_Book">Kirja</option>
        
          <option value="format_Image">Kuva</option>
        
          <option value="format_Journal">Lehti/Artikkeli</option>
        
          <option value="format_Other">Muu</option>
        
          <option value="format_Thesis">Opinnäyte</option>
        
          <option value="format_WorkOfArt">Taideteos</option>
        
          <option value="format_Database">Tietokanta</option>
        
          <option value="format_Video">Video</option>
        
          <option value="format_Sound">Ääni</option>
            </select>
      </div>

        <input id="searchForm_searchButton" name="SearchForm_submit" value="Hae" type="submit">
      <div class="clear"></div>
    </div>
    <div class="advanced-link-wrapper grid_7 push_1  ">
      <a href="/finna/Search/Advanced" class="small advancedLink">Tarkennettu haku</a>
            </div>
    <div class="searchContextHelp">
          <!-- START of: Content/searchboxhelp.fi.tpl -->

      <div class="hideSearchHelp"><a href="#" title="sulje"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/exit.png" alt="sulje" height="13" width="13"></a></div>
      <p>Voit kirjoittaa hakukenttään esimerkiksi hakemasi teoksen <strong>nimen</strong>, <strong>tekijän</strong>, <strong>aiheen</strong>
 tai muita asiaan liittyviä hakusanoja. Viereisestä alasvetovalikosta 
haun voi rajata koskemaan vain osaa aineistosta. Haun jälkeen käytössä 
on enemmän rajaustyökaluja.</p> 
      <p>Hakukentässä voi käyttää mm. hakumerkkejä <strong>?</strong>&nbsp;(mikä tahansa kirjain), <strong>*</strong>&nbsp;(useampia
 kirjaimia) sekä boolean-operaattoreita AND, OR ja NOT. Tarkan 
fraasihaun voi tehdä kirjoittamalla hakusanat lainausmerkkeihin.</p>
      <p class="last"><a href="/finna/Content/searchhelp">Laajempi hakuohje</a></p>
      
<!-- END of: Content/searchboxhelp.fi.tpl -->        </div>
    
      
  
  
      
  </form>

</div>

<!-- END of: Search/searchbox.tpl -->                  </div>
  </div>
</div>
    
<!-- END of: header.tpl -->        </div>
      </div>
      </div>

      <div id="main" class="main clearfix">
                <!-- START of: Search/list.tpl -->

<div class="resultHeader">
  <div class="resultTerms">
    <div class="content">
            <h1 class="searchTerms grid_24" id="results">
              <span class="hidden-visually">Hakutulokset: </span><?php print $_GET['lookfor'] ?><span class="hidden-visually">, yhteensä 907, näytetään 1-20</span>
                            </h1>
          </div>   </div>   
          <a href="#rajaa" class="hidden-visually">Siirry rajaamaan hakua</a>
          <a href="#haku" class="hidden-visually">Siirry tekemään uusi haku</a>
  <div class="resultRecommendations">
    <div class="content">
      <div class="grid_24">
                                       
            <!-- START of: Search/Recommend/TopFacets.tpl -->

    <div id="suggestedTopics" class="suggestedTopics span-3 right last">
        <strong>Aihe-ehdotuksia</strong><br>                
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22lastenkirjallisuus%22&amp;view=list">lastenkirjallisuus</a> <span class="facetCount">(118)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22lastenlaulut%22&amp;view=list">lastenlaulut</a> <span class="facetCount">(67)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22muumit%22&amp;view=list">muumit</a> <span class="facetCount">(55)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kirjallisuudentutkimus%22&amp;view=list">kirjallisuudentutkimus</a> <span class="facetCount">(38)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22suomenruotsalainen+kirjallisuus%22&amp;view=list">suomenruotsalainen kirjallisuus</a> <span class="facetCount">(36)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kirjailijat%22&amp;view=list">kirjailijat</a> <span class="facetCount">(33)</span></div>
      
                        <br class="clear">
        <a id="moretopic_facet" href="#" onclick="moreFacets('topic_facet'); return false;">lisää...</a>
        <div class="offscreen suggestedTopicsHidden" id="narrowGroupHidden_topic_facet">
        
                    
            
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kuvitus%22&amp;view=list">kuvitus</a> <span class="facetCount">(26)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22sitaatit%22&amp;view=list">sitaatit</a> <span class="facetCount">(24)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kirja-arvostelut%22&amp;view=list">kirja-arvostelut</a> <span class="facetCount">(22)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22aforismit%22&amp;view=list">aforismit</a> <span class="facetCount">(21)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kokoelmat%22&amp;view=list">kokoelmat</a> <span class="facetCount">(21)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22sadut%22&amp;view=list">sadut</a> <span class="facetCount">(21)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22aiheet%22&amp;view=list">aiheet</a> <span class="facetCount">(20)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22lastenkirjailijat%22&amp;view=list">lastenkirjailijat</a> <span class="facetCount">(20)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22n%C3%A4yttelyjulkaisut%22&amp;view=list">näyttelyjulkaisut</a> <span class="facetCount">(20)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kaunokirjallisuus%22&amp;view=list">kaunokirjallisuus</a> <span class="facetCount">(17)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22lapset%22&amp;view=list">lapset</a> <span class="facetCount">(17)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22children%27s+literature%22&amp;view=list">children's literature</a> <span class="facetCount">(16)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22lastenmusiikki%22&amp;view=list">lastenmusiikki</a> <span class="facetCount">(16)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22taiden%C3%A4yttelyt%22&amp;view=list">taidenäyttelyt</a> <span class="facetCount">(15)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22historia%22&amp;view=list">historia</a> <span class="facetCount">(14)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22postimerkit%22&amp;view=list">postimerkit</a> <span class="facetCount">(14)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22rock%22&amp;view=list">rock</a> <span class="facetCount">(14)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22k%C3%A4%C3%A4nt%C3%A4minen%22&amp;view=list">kääntäminen</a> <span class="facetCount">(13)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22ruotsin+kieli%22&amp;view=list">ruotsin kieli</a> <span class="facetCount">(13)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22suomen+kieli%22&amp;view=list">suomen kieli</a> <span class="facetCount">(13)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kirjallisuus%22&amp;view=list">kirjallisuus</a> <span class="facetCount">(12)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22kuvittajat%22&amp;view=list">kuvittajat</a> <span class="facetCount">(12)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22k%C3%A4%C3%A4nn%C3%B6kset%22&amp;view=list">käännökset</a> <span class="facetCount">(10)</span></div>
      
                      
            
              <div class="facetWrapper"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=topic_facet%3A%22matkailu%22&amp;view=list">matkailu</a> <span class="facetCount">(10)</span></div>
      
                <br class="clear">
          <a href="#" onclick="lessFacets('topic_facet'); return false;">vähemmän...</a>
        </div>
              <div class="clear"></div>
  </div>
  
<!-- END of: Search/Recomment/TopFacets.tpl -->
                       
            <!-- START of: Search/Recommend/TopPubDateVisAjax.tpl -->

  <div class="resultDates ">
    <div class="content">
                <!--[if IE]><script type="text/javascript" src="/interface/themes/ndl/js/flot/excanvas.min.js"></script><![endif]--> 
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_012.js"></script>
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/jquery_007.js"></script>
        <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/pubdate_vis.js"></script>

                  <div id="topPubDateVis" class="">
              <div style="padding: 0px;" class="dateVis" id="datevismain_date_strx"><canvas height="110" width="950" class="flot-base"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" height="110" width="950" class="flot-overlay"></canvas></div>
              <div id="clearButtonText" style="display: none">x</div>  
          </div>
                
        <script type="text/javascript">
          //<![CDATA[
           function loadVisNow() { 
          loadVis('main_date_str', 'lookfor=muumi&type=AllFields&view=list', '/finna', true);
          //]]>
           } 
        </script>
        </div>
    </div>


<!-- END of: Search/Recommend/TopPubDateVisAjax.tpl -->
                        </div>
    </div>
  </div>
  <div class="resultDatesHeader ">
    <div class="content">
      <span class="dateVisHandle">Tulokset aikajanalla<span class="dateVisHelp "><span class="infoIndicator">i</span>Voit tarkentaa hakua rajaamalla kauden aikajanalla</span></span>
      <div class="dateVisHandle dateVisOpen visible"></div>
      <div class="dateVisHandle dateVisClose "></div>
    </div>
  </div>
<div class="resultViewOptions">
    <div class="content">
      <div class="resultNumbers">
        <span class="paginationMove paginationBack "><span>◄</span></span>        <span class="currentPage"><span>Hakutulokset</span> 1 - 20 / </span>
        <span class="resultTotals">907</span>
         <span class="paginationMove paginationNext visible"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=2&amp;view=list" title="next page">Seuraavat 20 »</a><span>▶</span></span>      </div>
      <div class="resultOptions">
        <!--
        <div class="viewButtons">
                  </div>
        -->
        <div class="resultOptionSort">
          <form action="/Search/SortResults" method="post">
            <label for="sort_options_1">Järjestä</label>
            <dl id="styled_sort_options_11" class="dropdown sort_options_1"><dt><a href="#">Relevanssi<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list</span></a></dt><dd><ul style="display: none;"><li><a href="#" class="big">Relevanssi<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list</span></a></li><li><a href="#" class="big">Aika (uusimmat ensin)<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=main_date_str+desc&amp;view=list</span></a></li><li><a href="#" class="big">Aika (vanhimmat ensin)<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=main_date_str+asc&amp;view=list</span></a></li><li><a href="#" class="big">Tekijä<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=author&amp;view=list</span></a></li><li><a href="#" class="big">Nimeke<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=title&amp;view=list</span></a></li><li><a href="#" class="big">Viimeksi lisätty<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=last_indexed+desc&amp;view=list</span></a></li></ul></dd></dl><select style="display: none;" id="sort_options_1" name="sort" class="jumpMenu stylingDone">
                              <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list" selected="selected">Relevanssi</option>
                              <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=main_date_str+desc&amp;view=list">Aika (uusimmat ensin)</option>
                              <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=main_date_str+asc&amp;view=list">Aika (vanhimmat ensin)</option>
                              <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=author&amp;view=list">Tekijä</option>
                              <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=title&amp;view=list">Nimeke</option>
                              <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;sort=last_indexed+desc&amp;view=list">Viimeksi lisätty</option>
                          </select>
            <noscript><input type="submit" value="Aseta" /></noscript>
          </form>
        </div>

        <div class="resultOptionLimit"> 
                      <form action="/Search/LimitResults" method="post">
              <label for="limit">Tuloksia sivulla</label>
              <dl id="styled_limit2" class="dropdown limit"><dt><a href="#">20<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list</span></a></dt><dd><ul style="display: none;"><li><a href="#" class="big">20<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list</span></a></li><li><a href="#" class="big">50<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list&amp;limit=50</span></a></li><li><a href="#" class="big">100<span class="value">/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list&amp;limit=100</span></a></li></ul></dd></dl><select style="display: none;" class="jumpMenu stylingDone" id="limit" name="limit">
                                  <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list" selected="selected">20</option>
                                  <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list&amp;limit=50">50</option>
                                  <option value="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=list&amp;limit=100">100</option>
                              </select>
              <noscript><input type="submit" value="Aseta" /></noscript>
            </form>
                  </div>

      </div>     </div>   </div> </div> <script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/init_fancybox.js"></script>
<div class="resultListContainer">
  <div class="content">
    <div id="resultList" class=" grid_17">
              <!-- START of: Search/list-list.tpl -->

<script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/check_item_statuses.js"></script>
<script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/check_save_statuses.js"></script>
<script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/search_hierarchyTree.js"></script>
<script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/openurl.js"></script>
<script type="text/javascript" src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/preview.js"></script>

<!-- START of: Search/rsi.tpl -->


<!-- END of: Search/rsi.tpl --><!-- START of: Search/openurl_autocheck.tpl -->


<!-- END of: Search/openurl_autocheck.tpl -->

  <ul class="recordSet">
      <li class="result">
      <span class="recordNumber">1</span>
            <div class="result recordId" id="recordjykdok.358930">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatjournal formatjournaljournal"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/saatavuustiedot_muumi?lookfor=<?php print $_GET['lookfor'] ?>" class="title"><span class="highlight">Muumi</span>
        <span class="hidden-visually">, Aikakauslehti, 1991</span>
      </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatjournal formatjournaljournal">Aikakauslehti</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 1991       -               <div class="resultClassification">
                        Luokitus:
            udk 087.5, udk 741.5        </div>
                                </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...<span class="highlight">muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/saatavuustiedot_muumi?lookfor=<?php print $_GET['lookfor'] ?>" class="title">Jykdok</a> (Muut: <a href="/finna/Record/fennica.232936" class="title">Fennica</a>)        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationjykdok.358930">
                      <div style="display: none;" class="hide noLoad" id="statusjykdok.358930"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationjykdok.358930"> </span>
        <div class="hide" id="locationDetailsjykdok.358930"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsjykdok.358930">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordjykdok.358930" href="/finna/Record/jykdok.358930/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi&amp;rft.issn=0789-7936&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Semic&amp;rft.format=Journal&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">2</span>
            <div class="result recordId" id="recordjykdok.182069">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatjournal formatjournaljournal"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/jykdok.182069" class="title"><span class="highlight">Muumi</span>
        <span class="hidden-visually">, Aikakauslehti, 1984 - 1985</span>
      </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatjournal formatjournaljournal">Aikakauslehti</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 1984       - 1985              <div class="resultClassification">
                        Luokitus:
            udk 087.5, udk 741.5        </div>
                                </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...<span class="highlight">muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/jykdok.182069" class="title">Jykdok</a> (Muut: <a href="/finna/Record/fennica.179639" class="title">Fennica</a>)        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationjykdok.182069">
                      <div style="display: none;" class="hide noLoad" id="statusjykdok.182069"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationjykdok.182069"> </span>
        <div class="hide" id="locationDetailsjykdok.182069"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsjykdok.182069">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordjykdok.182069" href="/finna/Record/jykdok.182069/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi&amp;rft.issn=0784-0144&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Lehtimiehet&amp;rft.format=Journal&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">3</span>
            <div class="result recordId" id="recordviola.1158419">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsoundcassette"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.1158419" class="title"><span class="highlight">Muumi</span>
        <span class="hidden-visually">, Äänikasetti</span>
      </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsoundcassette">Äänikasetti</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu:                                       </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...<span class="highlight">muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.1158419" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.1158419">
                      <div style="display: block;" class="hide noLoad" id="statusviola.1158419"></div>
                 <span style="display: none;" class="hide" id="locationviola.1158419"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.1158419"><div class="groupLocation"><span>Suomen Jazz &amp; Pop Arkisto</span> </div><div class="groupCallnumber">0391Mk008B</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.1158419">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.1158419" href="/finna/Record/viola.1158419/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi&amp;rft.date=&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.format=Sound%2FSoundCassette&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">4</span>
            <div class="result recordId" id="recordviola.218830">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.218830" class="title">
        <span class="highlight">Muumi</span> <span class="highlight">muumi</span> ; Hei mies -räp
        <span class="hidden-visually">, Äänilevy, 1987</span>
        </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 1987                                      </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...<span class="highlight">Muumi</span> <span class="highlight">muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.218830" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.218830">
                      <div style="display: block;" class="hide noLoad" id="statusviola.218830"></div>
                 <span style="display: none;" class="hide" id="locationviola.218830"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.218830"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">s870364</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.218830">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.218830" href="/finna/Record/viola.218830/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi+muumi+%3B+Hei+mies+-r%C3%A4p&amp;rft.date=1987&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Unitor&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">5</span>
            <div class="result recordId" id="recordviola.212721">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.212721" class="title">
        <span class="highlight">Muumi</span> 2 : 14 uutta <span class="highlight">Muumi</span> laulua
        <span class="hidden-visually">, Äänilevy, 1993</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 1993                                      </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...Muuan <span class="highlight">Muumi</span>pappa ; Pikku Myyn haaveet ; <span class="highlight">Muumi</span>maailma ; Kun laiskottaa ; Nipsu unelmoi ; Onnea...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.212721" class="title">Viola</a>        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationviola.212721">
                      <div style="display: none;" class="hide noLoad" id="statusviola.212721"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationviola.212721"> </span>
        <div class="hide" id="locationDetailsviola.212721"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.212721">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.212721" href="/finna/Record/viola.212721/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi+2+%3A+14+uutta+Muumi+laulua&amp;rft.date=1993&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.format=Sound%2FSoundDisc"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">6</span>
            <div class="result recordId" id="recordviola.200583">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.200583" class="title">
        Lasten ikioma <span class="highlight">muumi</span> : 14 alkuperäistä <span class="highlight">Muumi</span> laulua
        <span class="hidden-visually">, Äänilevy, 1992</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Tekijä:
      <a href="/finna/Search/Results?lookfor=T%C3%B6rnroos%2C%20Benny&amp;type=Author">Törnroos, Benny, esitt.</a>
            Julkaistu: 1992                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...<span class="highlight">Muumit</span> <span class="highlight">Muumit</span>! ; Nuuskamuikkusen laulu ; <span class="highlight">Muumi</span>tanssi ; Nipsu on kultainen ; Käy <span class="highlight">Muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.200583" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.200583">
                      <div style="display: block;" class="hide noLoad" id="statusviola.200583"></div>
                 <span style="display: none;" class="hide" id="locationviola.200583"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.200583"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c920285</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.200583">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.200583" href="/finna/Record/viola.200583/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Lasten+ikioma+muumi+%3A+14+alkuper%C3%A4ist%C3%A4+Muumi+laulua&amp;rft.date=1992&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=T%C3%B6rnroos%2C+Benny%2C+esitt.&amp;rft.pub=K-tel+International+%28Finland%29&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">7</span>
            <div class="result recordId" id="recordarto.1391554">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatjournal formatjournalarticle"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/arto.1391554" class="title">
        <span class="highlight">Muumi</span>-buumissa hiljaisempi kausi
        <span class="hidden-visually">, Artikkeli, 1994</span>
        </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatjournal formatjournalarticle">Artikkeli</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 1994                    <div class="resultClassification">
                        Luokitus:
            udk 741.5        </div>
                                <div>
            Sisältyy julkaisuun:
                          <a href="/finna/Record/arto.1386585">Sarjismedia</a>
                        1994 : 1, s. 28          </div>
                    </div>
    
    <div class="resultItemLine3">
                          <span class="tiny">
        <a href="/finna/Record/arto.1391554" class="title">Arto</a>        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationarto.1391554">
                      <div style="display: none;" class="hide noLoad" id="statusarto.1391554"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationarto.1391554"> </span>
        <div class="hide" id="locationDetailsarto.1391554"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsarto.1391554">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordarto.1391554" href="/finna/Record/arto.1391554/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.date=1994&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.issn=1237-4717&amp;rft.isbn=&amp;rft.volume=&amp;rft.issue=1&amp;rft.spage=28&amp;rft.jtitle=Sarjismedia&amp;rft.atitle=Muumi-buumissa+hiljaisempi+kausi&amp;rft.au=&amp;rft.format=Article&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">8</span>
            <div class="result recordId" id="recordarto.954374">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatjournal formatjournalarticle"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/arto.954374" class="title">
        <span class="highlight">Muumi</span>-postiemerkki on nukkapintainen ja pehmeä
        <span class="hidden-visually">, Artikkeli, 2004</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatjournal formatjournalarticle">Artikkeli</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2004                                      <div>
            Sisältyy julkaisuun:
                          <a href="/finna/Record/arto.88768">Suomen postimerkkilehti</a>
                        85 (2004) : 4, s. 6          </div>
                    </div>
    
    <div class="resultItemLine3">
              Aiheet:       <span class="quotestart">“</span>...postimerkit aiheet <span class="highlight">muumit</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/arto.954374" class="title">Arto</a>        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationarto.954374">
                      <div style="display: none;" class="hide noLoad" id="statusarto.954374"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationarto.954374"> </span>
        <div class="hide" id="locationDetailsarto.954374"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsarto.954374">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordarto.954374" href="/finna/Record/arto.954374/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.date=2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.issn=0355-7731&amp;rft.isbn=&amp;rft.volume=85&amp;rft.issue=4&amp;rft.spage=6&amp;rft.jtitle=Suomen+postimerkkilehti&amp;rft.atitle=Muumi-postiemerkki+on+nukkapintainen+ja+pehme%C3%A4&amp;rft.au=&amp;rft.format=Article&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">9</span>
            <div class="result recordId" id="recordarto.1320113">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatjournal formatjournalarticle"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/arto.1320113" class="title"><span class="highlight">Muumi</span> ja muut peikot
        <span class="hidden-visually">, Artikkeli, 2007</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatjournal formatjournalarticle">Artikkeli</span></div>
    
        
    <div class="resultItemLine2">
            Tekijä:
      <a href="/finna/Search/Results?lookfor=M%C3%A4lki%C3%A4%2C%20Lahja&amp;type=Author">Mälkiä, Lahja</a>
            Julkaistu: 2007                                      <div>
            Sisältyy julkaisuun:
                          <a href="/finna/Record/arto.88348">Apollo : [postikorttilehti]</a>
                        26 (2007) : 3, s. 13          </div>
                    </div>
    
    <div class="resultItemLine3">
              Aiheet:       <span class="quotestart">“</span>...satuolennot <span class="highlight">muumit</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/arto.1320113" class="title">Arto</a>        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationarto.1320113">
                      <div style="display: none;" class="hide noLoad" id="statusarto.1320113"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationarto.1320113"> </span>
        <div class="hide" id="locationDetailsarto.1320113"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsarto.1320113">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordarto.1320113" href="/finna/Record/arto.1320113/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.date=2007&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.issn=0358-3694&amp;rft.isbn=&amp;rft.volume=26&amp;rft.issue=3&amp;rft.spage=13&amp;rft.jtitle=Apollo+%3A+%5Bpostikorttilehti%5D&amp;rft.atitle=Muumi+ja+muut+peikot&amp;rft.au=M%C3%A4lki%C3%A4%2C+Lahja&amp;rft.format=Article&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">10</span>
            <div class="result recordId" id="recordviola.655400">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.655400" class="title">Parhaat <span class="highlight">Muumi</span> laulut
        <span class="hidden-visually">, Äänilevy, 2002</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2002                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...Käy <span class="highlight">Muumi</span>laaksoon...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.655400" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.655400">
                      <div style="display: block;" class="hide noLoad" id="statusviola.655400"></div>
                 <span style="display: none;" class="hide" id="locationviola.655400"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.655400"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c012805</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.655400">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.655400" href="/finna/Record/viola.655400/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Parhaat+Muumi+laulut&amp;rft.date=2002&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Edel+Records+Finland&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">11</span>
            <div class="result recordId" id="recordviola.712816">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.712816" class="title">Uusia <span class="highlight">Muumi</span>-lauluja. 1.
        <span class="hidden-visually">, Äänilevy, 2006</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2006                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...Kaksi laulua (<span class="highlight">Muumi</span>talon asukkaat ja Lauttamatkalla seikkailuun) sekä niiden karaoke-versiot. Sekä...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.712816" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.712816">
                      <div style="display: block;" class="hide noLoad" id="statusviola.712816"></div>
                 <span style="display: none;" class="hide" id="locationviola.712816"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.712816"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c015401</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.712816">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.712816" href="/finna/Record/viola.712816/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Uusia+Muumi-lauluja.+1.&amp;rft.date=2006&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Rubato+Music&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">12</span>
            <div class="result recordId" id="recordviola.712817">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.712817" class="title">Uusia <span class="highlight">Muumi</span>-lauluja. 2.
        <span class="hidden-visually">, Äänilevy, 2006</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2006                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...-tietokoneiden selaimen avulla selattavissa olevat tiedostot, joilla tietoa <span class="highlight">Muumeista</span> ja Tove Janssonista...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.712817" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.712817">
                      <div style="display: block;" class="hide noLoad" id="statusviola.712817"></div>
                 <span style="display: none;" class="hide" id="locationviola.712817"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.712817"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c015402</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.712817">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.712817" href="/finna/Record/viola.712817/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Uusia+Muumi-lauluja.+2.&amp;rft.date=2006&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Rubato+Music&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">13</span>
            <div class="result recordId" id="recordviola.712818">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.712818" class="title">Uusia <span class="highlight">Muumi</span>-lauluja. 3.
        <span class="hidden-visually">, Äänilevy, 2006</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2006                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...Kaksi laulua (<span class="highlight">Muumi</span>pappa ja muistelmat, Piisamirotta) sekä niiden karaoke-versiot. Sekä Mac- tai PC...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.712818" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.712818">
                      <div style="display: block;" class="hide noLoad" id="statusviola.712818"></div>
                 <span style="display: none;" class="hide" id="locationviola.712818"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.712818"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c015403</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.712818">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.712818" href="/finna/Record/viola.712818/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Uusia+Muumi-lauluja.+3.&amp;rft.date=2006&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Rubato+Music&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">14</span>
            <div class="result recordId" id="recordviola.712819">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.712819" class="title">Uusia <span class="highlight">Muumi</span>-lauluja. 4.
        <span class="hidden-visually">, Äänilevy, 2006</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2006                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...Kaksi laulua (Pannaria luolassa, <span class="highlight">Muumi</span>mamma tietää) sekä niiden karaoke-versiot. Sekä Mac- tai PC...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.712819" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.712819">
                      <div style="display: block;" class="hide noLoad" id="statusviola.712819"></div>
                 <span style="display: none;" class="hide" id="locationviola.712819"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.712819"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c015404</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.712819">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.712819" href="/finna/Record/viola.712819/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Uusia+Muumi-lauluja.+4.&amp;rft.date=2006&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Rubato+Music&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">15</span>
            <div class="result recordId" id="recordviola.712820">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.712820" class="title">Uusia <span class="highlight">Muumi</span>-lauluja. 5.
        <span class="hidden-visually">, Äänilevy, 2006</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2006                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
              Sisällysluettelo:       <span class="quotestart">“</span>...Kaksi laulua (Reipas <span class="highlight">Muumi</span>peikko, Myrkkypensas) sekä niiden karaoke-versiot. Sekä Mac- tai PC...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.712820" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.712820">
                      <div style="display: block;" class="hide noLoad" id="statusviola.712820"></div>
                 <span style="display: none;" class="hide" id="locationviola.712820"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.712820"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c015405</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.712820">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.712820" href="/finna/Record/viola.712820/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Uusia+Muumi-lauluja.+5.&amp;rft.date=2006&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Rubato+Music&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">16</span>
            <div class="result recordId" id="recordviola.832999">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatsound formatsoundsounddisc"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/viola.832999" class="title"><span class="highlight">Muumi</span>-musiikkia Juniorilta
        <span class="hidden-visually">, Äänilevy, 2008</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatsound formatsoundsounddisc">Äänilevy</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2008                    <div class="resultClassification">
                        Luokitus:
            ykl 78.3112        </div>
                                </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...Niiskuneiti ja <span class="highlight">Muumi</span>peikko...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/viola.832999" class="title">Viola</a>        <br>
        </span>
            <div id="callnumAndLocationviola.832999">
                      <div style="display: block;" class="hide noLoad" id="statusviola.832999"></div>
                 <span style="display: none;" class="hide" id="locationviola.832999"> </span>
        <div style="display: block;" class="hide" id="locationDetailsviola.832999"><div class="groupLocation"><span>Kansalliskirjasto Äänitteet</span> </div><div class="groupCallnumber">c024357</div></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsviola.832999">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordviola.832999" href="/finna/Record/viola.832999/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi-musiikkia+Juniorilta&amp;rft.date=2008&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Rubato+Music&amp;rft.format=Sound%2FSoundDisc&amp;rft.language=fin"></span>
    </li>
      <li class="result">
      <span class="recordNumber">17</span>
            <div class="result recordId" id="recordjykdok.1078228">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatother formatotherkit"></div>
        <div class="resultImage"><a href="/finna/bookcover.php?isn=9512881314&amp;size=large" onclick="launchFancybox(this); return false;" rel="jykdok.1078228"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/bookcover_002.gif" class="summcover" alt="Kansikuva"></a></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/jykdok.1078228" class="title"><span class="highlight">Muumi</span>
        <span class="hidden-visually">, Kooste, 2008</span>
      </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatother formatotherkit">Kooste</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 2008                    <div class="resultClassification">
                        Luokitus:
            udk 820, udk 894.541, udk 379.8, udk 820        </div>
                                </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...<span class="highlight">muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/jykdok.1078228" class="title">Jykdok</a> (Muut: <a href="/finna/Record/fennica.878724" class="title">Fennica</a>)        <br>
        </span>
            <div id="callnumAndLocationjykdok.1078228">
                      <div style="display: block;" class="hide noLoad" id="statusjykdok.1078228"><span class="available">Saatavissa</span></div>
                 <span style="display: none;" class="hide" id="locationjykdok.1078228"> </span>
        <div style="display: block;" class="hide" id="locationDetailsjykdok.1078228"><div class="groupLocation"><span class="availableLoc">Pääkirjasto. Vapaakappaleet. Varasto. Ei kotilainaan</span> </div><div class="groupCallnumber">P JAV f20084545</div></div>
            </div>

            
      
      
    </div>

                <div>
                                <span class="previewBibkeys ISBN9512881314"></span>
      </div>
          
        <div class="savedLists info hide" id="savedListsjykdok.1078228">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordjykdok.1078228" href="/finna/Record/jykdok.1078228/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi&amp;rft.date=2008&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Adc&amp;rft.creator=&amp;rft.pub=Egmont%2FKirjalito&amp;rft.format=Other%2FKit&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">18</span>
            <div class="result recordId" id="recordfennica.1002824">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatbook formatbookbook"></div>
        <div class="resultImage"><a href="/finna/bookcover.php?isn=9512852012&amp;size=large" onclick="launchFancybox(this); return false;" rel="fennica.1002824"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/bookcover_003.gif" class="summcover" alt="Kansikuva"></a></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/fennica.1002824" class="title">Vaunukaveri : <span class="highlight">muumi</span>
        <span class="hidden-visually">, Kirja, 2011</span>
      </a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatbook formatbookbook">Kirja</span></div>
    
        
    <div class="resultItemLine2">
            Tekijä:
      <a href="/finna/Search/Results?lookfor=Rasi%2C%20Jari&amp;type=Author">Rasi, Jari</a>
            Julkaistu: 2011                    <div class="resultClassification">
                        Luokitus:
            udk 379.8        </div>
                                </div>
    
    <div class="resultItemLine3">
            <span class="quotestart">“</span>...<span class="highlight">Muumi</span>...<span class="quoteend">”</span><br>              <span class="tiny">
        <a href="/finna/Record/fennica.1002824" class="title">Fennica</a>        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationfennica.1002824">
                      <div style="display: none;" class="hide noLoad" id="statusfennica.1002824"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationfennica.1002824"> </span>
        <div class="hide" id="locationDetailsfennica.1002824"></div>
            </div>

            
      
      
    </div>

                <div>
                                <span class="previewBibkeys ISBN9512852012"></span>
      </div>
          
        <div class="savedLists info hide" id="savedListsfennica.1002824">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordfennica.1002824" href="/finna/Record/fennica.1002824/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Vaunukaveri+%3A+muumi&amp;rft.date=2011&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Vaunukaveri+%3A+muumi&amp;rft.au=Rasi%2C+Jari&amp;rft.pub=Kirjalito&amp;rft.edition=&amp;rft.isbn=9512852012"></span>
    </li>
      <li class="result">
      <span class="recordNumber">19</span>
            <div class="result recordId" id="recordarto.697034">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatjournal formatjournalarticle"></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/arto.697034" class="title"><span class="highlight">Muumi</span>, josta tuli Robin Hood
        <span class="hidden-visually">, Artikkeli, 1994</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatjournal formatjournalarticle">Artikkeli</span></div>
    
        
    <div class="resultItemLine2">
            Tekijä:
      <a href="/finna/Search/Results?lookfor=Lappalainen%2C%20Tuomo&amp;type=Author">Lappalainen, Tuomo</a>
            Julkaistu: 1994                    <div class="resultClassification">
                        Luokitus:
            udk 324, ykl 32.182        </div>
                                <div>
            Sisältyy julkaisuun:
                          <a href="/finna/Record/arto.1388941">Suomen kuvalehti</a>
                        78(1994) : 5, s. 18-23          </div>
                    </div>
    
    <div class="resultItemLine3">
                          <span class="tiny">
        <a href="/finna/Record/arto.697034" class="title">Arto</a>        <br>
        </span>
            <div style="display: none;" id="callnumAndLocationarto.697034">
                      <div style="display: none;" class="hide noLoad" id="statusarto.697034"><span class="checkedout">Ei saatavissa</span></div>
                 <span style="display: inline;" class="hide" id="locationarto.697034"> </span>
        <div class="hide" id="locationDetailsarto.697034"></div>
            </div>

            
      
      
    </div>

              
        <div class="savedLists info hide" id="savedListsarto.697034">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordarto.697034" href="/finna/Record/arto.697034/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.date=1994&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.issn=&amp;rft.isbn=&amp;rft.volume=78&amp;rft.issue=5&amp;rft.spage=18&amp;rft.jtitle=Suomen+kuvalehti&amp;rft.atitle=Muumi%2C+josta+tuli+Robin+Hood&amp;rft.au=Lappalainen%2C+Tuomo&amp;rft.format=Article&amp;rft.language=fin"></span>
    </li>
      <li class="result alt">
      <span class="recordNumber">20</span>
            <div class="result recordId" id="recordjykdok.378755">

<div class="resultColumn1">

<div class="resultCheckbox">
  </div>

    <div class="coverDiv">
  
           
     
        <div class="resultNoImage formatbook formatbookbook"></div>
        <div class="resultImage"><a href="/finna/bookcover.php?isn=9518754519&amp;size=large" onclick="launchFancybox(this); return false;" rel="jykdok.378755"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/bookcover.gif" class="summcover" alt="Kansikuva"></a></div>
  
  </div> 

</div>
    
  <div class="resultColumn2 grid_11">

    <h2 class="resultItemLine1">
      <a href="/finna/Record/jykdok.378755" class="title"><span class="highlight">Muumi</span> : tarra-albumi
        <span class="hidden-visually">, Kirja, 1992</span></a>
    </h2>
   
    <div class="resultItemFormat"><span class="iconlabel formatbook formatbookbook">Kirja</span></div>
    
        
    <div class="resultItemLine2">
            Julkaistu: 1992                    <div class="resultClassification">
                        Luokitus:
            udk 820/89, udk 379.8        </div>
                                </div>
    
    <div class="resultItemLine3">
                          <span class="tiny">
        <a href="/finna/Record/jykdok.378755" class="title">Jykdok</a> (Muut: <a href="/finna/Record/fennica.292997" class="title">Fennica</a>)        <br>
        </span>
            <div id="callnumAndLocationjykdok.378755">
                      <div style="display: block;" class="hide noLoad" id="statusjykdok.378755"><span class="available">Saatavissa</span></div>
                 <span style="display: none;" class="hide" id="locationjykdok.378755"> </span>
        <div style="display: block;" class="hide" id="locationDetailsjykdok.378755"><div class="groupLocation"><span class="availableLoc">Pääkirjasto. Vapaakappaleet. Varasto. Ei kotilainaan</span> </div><div class="groupCallnumber"></div></div>
            </div>

            
      
      
    </div>

                <div>
                                <span class="previewBibkeys ISBN9518754519"></span>
      </div>
          
        <div class="savedLists info hide" id="savedListsjykdok.378755">
      <strong>Tallennettuna:</strong>
    </div>
    </div>
  <div class="last addToFavLink">
    <a id="saveRecordjykdok.378755" href="/finna/Record/jykdok.378755/Save" class="fav tool saveRecord" title="Lisää suosikkeihin"></a>
  </div>
  <div class="clear"></div>
</div>

<span class="Z3988" title="ctx_ver=Z39.88-2004&amp;ctx_enc=info%3Aofi%2Fenc%3AUTF-8&amp;rfr_id=info%3Asid%2Ffinna.fi%3Agenerator&amp;rft.title=Muumi+%3A+tarra-albumi&amp;rft.date=1992&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Muumi+%3A+tarra-albumi&amp;rft.au=&amp;rft.pub=Sanomaprint&amp;rft.edition=&amp;rft.isbn=9518754519"></span>
    </li>
    </ul>
  

<!-- END of: Search/list-list.tpl -->          </div>
    <div id="sidebarFacets" class="last grid_6">
                        <!-- START of: Search/Recommend/SideFacets.tpl -->

<div class="sidegroup">
  <h2 id="rajaa">Rajaa hakua</h2>                      <dl class="narrowList navmenu collapsed open collapsible">
        <dt>Sijainti</dt>
      </dl>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {

  enableDynatree('#facet_building', 'building', '/Search/Results?lookfor=muumi&prefilter=-&SearchForm_submit=Hae');
  
});
//]]>
</script>

      <div id="facet_building" class="dynatree-facet">
        <span style="display: none;" class="facet_loading hide"></span>
      <ul class="dynatree-container"><li class=""><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-exp-cd dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=building%3A%220%2FNLF%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Kansalliskirjasto">Kansalliskirjasto</span><span class="facetCount"> (883)</span></a></span></li><li class="dynatree-lastsib"><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-lastsib dynatree-exp-cdl dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=building%3A%220%2FJYU%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Jyväskylän yliopisto">Jyväskylän yliopisto</span><span class="facetCount"> (385)</span></a></span></li></ul></div>
                  <dl class="narrowList navmenu collapsed open collapsible">
        <dt>Aineistotyyppi</dt>
      </dl>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {

  enableDynatree('#facet_format', 'format', '/Search/Results?lookfor=muumi&prefilter=-&SearchForm_submit=Hae');
  
});
//]]>
</script>

      <div id="facet_format" class="dynatree-facet">
        <span style="display: none;" class="facet_loading hide"></span>
      <ul class="dynatree-container"><li class=""><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-exp-cd dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FBook%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Kirja">Kirja</span><span class="facetCount"> (489)</span></a></span></li><li class=""><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-exp-cd dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FJournal%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Lehti/Artikkeli">Lehti/Artikkeli</span><span class="facetCount"> (196)</span></a></span></li><li class=""><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-exp-cd dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FSound%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Äänitallenne">Äänitallenne</span><span class="facetCount"> (129)</span></a></span></li><li class=""><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-exp-cd dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FOther%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Muu">Muu</span><span class="facetCount"> (61)</span></a></span></li><li class=""><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-exp-cd dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FThesis%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Opinnäyte">Opinnäyte</span><span class="facetCount"> (15)</span></a></span></li><li class=""><span class="dynatree-node dynatree-exp-c dynatree-ico-c"><span class="dynatree-connector"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FMusicalScore%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Nuotti">Nuotti</span><span class="facetCount"> (13)</span></a></span></li><li class="dynatree-lastsib"><span class="dynatree-node dynatree-has-children dynatree-lazy dynatree-lastsib dynatree-exp-cdl dynatree-ico-c"><span class="dynatree-expander"></span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=format%3A%220%2FVideo%22&amp;view=list" class="dynatree-title"><span class="facetTitle" title="Video">Video</span><span class="facetCount"> (4)</span></a></span></li></ul></div>
                  <dl class="narrowList navmenu collapsible">
        <dt>Tekijä</dt>
                                        <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Jansson%2C+Tove%22&amp;view=list">Jansson, Tove&nbsp;<span class="facetCount">(146)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Sonesson%2C+Harald%22&amp;view=list">Sonesson, Harald&nbsp;<span class="facetCount">(16)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Bagge%2C+Tapani%22&amp;view=list">Bagge, Tapani&nbsp;<span class="facetCount">(12)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Malila%2C+Sami%22&amp;view=list">Malila, Sami&nbsp;<span class="facetCount">(11)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Saarinen%2C+Teemu%22&amp;view=list">Saarinen, Teemu&nbsp;<span class="facetCount">(11)</span></a></dd>
                                      <dd id="moreauthorStr"><a href="#" onclick="moreFacets('authorStr'); return false;">lisää ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen collapsible" id="narrowGroupHidden_authorStr">
                                <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Alan%2C+Clive%22&amp;view=list">Alan, Clive&nbsp;<span class="facetCount">(10)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Harkkila%2C+Johanna%22&amp;view=list">Harkkila, Johanna&nbsp;<span class="facetCount">(10)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Kivi%2C+Mirja%22&amp;view=list">Kivi, Mirja&nbsp;<span class="facetCount">(9)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Happonen%2C+Sirke%22&amp;view=list">Happonen, Sirke&nbsp;<span class="facetCount">(8)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Korolainen%2C+Tuula%22&amp;view=list">Korolainen, Tuula&nbsp;<span class="facetCount">(8)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Hihnala%2C+Paula%22&amp;view=list">Hihnala, Paula&nbsp;<span class="facetCount">(7)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Rasi%2C+Jari%22&amp;view=list">Rasi, Jari&nbsp;<span class="facetCount">(6)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Harris%2C+Martin%22&amp;view=list">Harris, Martin&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Kaarla%2C+Riina%2C+1970-%22&amp;view=list">Kaarla, Riina, 1970-&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22M%C3%A4kel%C3%A4%2C+Tuomas%22&amp;view=list">Mäkelä, Tuomas&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Sinisalo%2C+Johanna%22&amp;view=list">Sinisalo, Johanna&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Tolvanen%2C+Juhani%22&amp;view=list">Tolvanen, Juhani&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Bruhn%2C+Heidi%22&amp;view=list">Bruhn, Heidi&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Kaarla%2C+Riina%22&amp;view=list">Kaarla, Riina&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Laajarinne%2C+Jukka%22&amp;view=list">Laajarinne, Jukka&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Ruusuvuori%2C+Juha%22&amp;view=list">Ruusuvuori, Juha&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Volotinen%2C+Teresia%22&amp;view=list">Volotinen, Teresia&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Ahola%2C+Suvi%22&amp;view=list">Ahola, Suvi&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Bertills%2C+Yvonne%22&amp;view=list">Bertills, Yvonne&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Karilas%2C+Tauno%22&amp;view=list">Karilas, Tauno&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Kylm%C3%A4nen%2C+Marjo%22&amp;view=list">Kylmänen, Marjo&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22M%C3%A4nnist%C3%B6%2C+Tiina%22&amp;view=list">Männistö, Tiina&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Niemi%2C+Juhani%22&amp;view=list">Niemi, Juhani&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Sarmavuori%2C+Katri%22&amp;view=list">Sarmavuori, Katri&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=authorStr%3A%22Saukkola%2C+Mirva%22&amp;view=list">Saukkola, Mirva&nbsp;<span class="facetCount">(3)</span></a></dd>
                          <dd><a href="#" onclick="lessFacets('authorStr'); return false;">vähemmän ...</a></dd>      </dl>
                  <dl class="narrowList navmenu collapsible">
        <dt>Kieli</dt>
                                        <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22fin%22&amp;view=list">suomi&nbsp;<span class="facetCount">(768)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22swe%22&amp;view=list">ruotsi&nbsp;<span class="facetCount">(44)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22eng%22&amp;view=list">englanti&nbsp;<span class="facetCount">(26)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22jpn%22&amp;view=list">japani&nbsp;<span class="facetCount">(8)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22est%22&amp;view=list">viro&nbsp;<span class="facetCount">(7)</span></a></dd>
                                      <dd id="morelanguage"><a href="#" onclick="moreFacets('language'); return false;">lisää ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen collapsible" id="narrowGroupHidden_language">
                                <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22hun%22&amp;view=list">unkari&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22pol%22&amp;view=list">puola&nbsp;<span class="facetCount">(4)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22fre%22&amp;view=list">ranska&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22nor%22&amp;view=list">norja&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22___%22&amp;view=list">tieto puuttuu&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22dut%22&amp;view=list">hollanti&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22ger%22&amp;view=list">saksa&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=language%3A%22rus%22&amp;view=list">venäjä&nbsp;<span class="facetCount">(1)</span></a></dd>
                          <dd><a href="#" onclick="lessFacets('language'); return false;">vähemmän ...</a></dd>      </dl>
                  <dl class="narrowList navmenu collapsible">
        <dt>Vuosi</dt>
                                        <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222010%22&amp;view=list">2010&nbsp;<span class="facetCount">(77)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221993%22&amp;view=list">1993&nbsp;<span class="facetCount">(51)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222009%22&amp;view=list">2009&nbsp;<span class="facetCount">(48)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222011%22&amp;view=list">2011&nbsp;<span class="facetCount">(47)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222000%22&amp;view=list">2000&nbsp;<span class="facetCount">(46)</span></a></dd>
                                      <dd id="moremain_date_str"><a href="#" onclick="moreFacets('main_date_str'); return false;">lisää ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen collapsible" id="narrowGroupHidden_main_date_str">
                                <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221994%22&amp;view=list">1994&nbsp;<span class="facetCount">(42)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221996%22&amp;view=list">1996&nbsp;<span class="facetCount">(42)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222007%22&amp;view=list">2007&nbsp;<span class="facetCount">(38)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222001%22&amp;view=list">2001&nbsp;<span class="facetCount">(34)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222005%22&amp;view=list">2005&nbsp;<span class="facetCount">(34)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222008%22&amp;view=list">2008&nbsp;<span class="facetCount">(34)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221992%22&amp;view=list">1992&nbsp;<span class="facetCount">(33)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222006%22&amp;view=list">2006&nbsp;<span class="facetCount">(32)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221999%22&amp;view=list">1999&nbsp;<span class="facetCount">(31)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222004%22&amp;view=list">2004&nbsp;<span class="facetCount">(31)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221995%22&amp;view=list">1995&nbsp;<span class="facetCount">(30)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222003%22&amp;view=list">2003&nbsp;<span class="facetCount">(29)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221997%22&amp;view=list">1997&nbsp;<span class="facetCount">(28)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221998%22&amp;view=list">1998&nbsp;<span class="facetCount">(26)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222002%22&amp;view=list">2002&nbsp;<span class="facetCount">(24)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221991%22&amp;view=list">1991&nbsp;<span class="facetCount">(21)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222012%22&amp;view=list">2012&nbsp;<span class="facetCount">(20)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221987%22&amp;view=list">1987&nbsp;<span class="facetCount">(17)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%222013%22&amp;view=list">2013&nbsp;<span class="facetCount">(9)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221989%22&amp;view=list">1989&nbsp;<span class="facetCount">(8)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221990%22&amp;view=list">1990&nbsp;<span class="facetCount">(8)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221988%22&amp;view=list">1988&nbsp;<span class="facetCount">(6)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221979%22&amp;view=list">1979&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221986%22&amp;view=list">1986&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=main_date_str%3A%221962%22&amp;view=list">1962&nbsp;<span class="facetCount">(4)</span></a></dd>
                          <dd><a href="#" onclick="lessFacets('main_date_str'); return false;">vähemmän ...</a></dd>      </dl>
                  <dl class="narrowList navmenu collapsible">
        <dt>Genre</dt>
                                        <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Kokoelmat%22&amp;view=list">Kokoelmat&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Kirja-arvostelut%22&amp;view=list">Kirja-arvostelut&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Singlet%22&amp;view=list">Singlet&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Albumit%22&amp;view=list">Albumit&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Asiakaslehdet%22&amp;view=list">Asiakaslehdet&nbsp;<span class="facetCount">(1)</span></a></dd>
                                      <dd id="moregenre_facet"><a href="#" onclick="moreFacets('genre_facet'); return false;">lisää ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen collapsible" id="narrowGroupHidden_genre_facet">
                                <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Haastattelut%22&amp;view=list">Haastattelut&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Sarjakuvalehdet%22&amp;view=list">Sarjakuvalehdet&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Sarjakuvat%22&amp;view=list">Sarjakuvat&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=genre_facet%3A%22Tiedotuslehdet%22&amp;view=list">Tiedotuslehdet&nbsp;<span class="facetCount">(1)</span></a></dd>
                          <dd><a href="#" onclick="lessFacets('genre_facet'); return false;">vähemmän ...</a></dd>      </dl>
                  <dl class="narrowList navmenu collapsible">
        <dt>Aikakausi</dt>
                                        <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221990-luku%22&amp;view=list">1990-luku&nbsp;<span class="facetCount">(36)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222000-2009%22&amp;view=list">2000-2009&nbsp;<span class="facetCount">(26)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221980-luku%22&amp;view=list">1980-luku&nbsp;<span class="facetCount">(18)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221970-luku%22&amp;view=list">1970-luku&nbsp;<span class="facetCount">(8)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221950-luku%22&amp;view=list">1950-luku&nbsp;<span class="facetCount">(5)</span></a></dd>
                                      <dd id="moreera_facet"><a href="#" onclick="moreFacets('era_facet'); return false;">lisää ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen collapsible" id="narrowGroupHidden_era_facet">
                                <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221960-luku%22&amp;view=list">1960-luku&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221900-luku%22&amp;view=list">1900-luku&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221940-luku%22&amp;view=list">1940-luku&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221994%22&amp;view=list">1994&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222009%22&amp;view=list">2009&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221900s%22&amp;view=list">1900s&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221910-%22&amp;view=list">1910-&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221930-luku%22&amp;view=list">1930-luku&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221950-1980-luku%22&amp;view=list">1950-1980-luku&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221950-1980s%22&amp;view=list">1950-1980s&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221990s%22&amp;view=list">1990s&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221993%22&amp;view=list">1993&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%221998%22&amp;view=list">1998&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222000-luku%22&amp;view=list">2000-luku&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222003%22&amp;view=list">2003&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222004%22&amp;view=list">2004&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222005%22&amp;view=list">2005&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222007%22&amp;view=list">2007&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=era_facet%3A%222011%22&amp;view=list">2011&nbsp;<span class="facetCount">(1)</span></a></dd>
                          <dd><a href="#" onclick="lessFacets('era_facet'); return false;">vähemmän ...</a></dd>      </dl>
                  <dl class="narrowList navmenu collapsible">
        <dt>Alue</dt>
                                        <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Suomi%22&amp;view=list">Suomi&nbsp;<span class="facetCount">(116)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Tampere%22&amp;view=list">Tampere&nbsp;<span class="facetCount">(17)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Finland%22&amp;view=list">Finland&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Naantali%22&amp;view=list">Naantali&nbsp;<span class="facetCount">(5)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Norja%22&amp;view=list">Norja&nbsp;<span class="facetCount">(4)</span></a></dd>
                                      <dd id="moregeographic_facet"><a href="#" onclick="moreFacets('geographic_facet'); return false;">lisää ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen collapsible" id="narrowGroupHidden_geographic_facet">
                                <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Japani%22&amp;view=list">Japani&nbsp;<span class="facetCount">(3)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Helsinki%22&amp;view=list">Helsinki&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Porvoo%22&amp;view=list">Porvoo&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Ruotsi%22&amp;view=list">Ruotsi&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Turku%22&amp;view=list">Turku&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22%C3%85bo%22&amp;view=list">Åbo&nbsp;<span class="facetCount">(2)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Alankomaat%22&amp;view=list">Alankomaat&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Belgia%22&amp;view=list">Belgia&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Bryssel%22&amp;view=list">Bryssel&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Dalsbruk%22&amp;view=list">Dalsbruk&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Dragsfj%C3%A4rd%22&amp;view=list">Dragsfjärd&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Englanti%22&amp;view=list">Englanti&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Eurooppa%22&amp;view=list">Eurooppa&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Gdansk%22&amp;view=list">Gdansk&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Glosholm%22&amp;view=list">Glosholm&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Iso-Britannia%22&amp;view=list">Iso-Britannia&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Japan%22&amp;view=list">Japan&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Korkeasaari%22&amp;view=list">Korkeasaari&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Lappeenranta%22&amp;view=list">Lappeenranta&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Mumindalen%22&amp;view=list">Mumindalen&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Muumilaakso%22&amp;view=list">Muumilaakso&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Pellinki%22&amp;view=list">Pellinki&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Pietari%22&amp;view=list">Pietari&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Pohjois-Eurooppa%22&amp;view=list">Pohjois-Eurooppa&nbsp;<span class="facetCount">(1)</span></a></dd>
                                                  <dd><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;filter%5B%5D=geographic_facet%3A%22Puola%22&amp;view=list">Puola&nbsp;<span class="facetCount">(1)</span></a></dd>
                          <dd><a href="#" onclick="lessFacets('geographic_facet'); return false;">vähemmän ...</a></dd>      </dl>
          </div>

<!-- END of: Search/Recommend/SideFacets.tpl -->                          </div>
  </div>
</div>
          
   
  <div class="resultPagination">
    <div class="content">
      <div id="bottomPagination">
        <span class="paginationMove paginationBack "><span>◄</span></span>
        <span class="paginationPages"><span>1</span><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=2&amp;view=list" title="page 2">2</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=3&amp;view=list" title="page 3">3</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=4&amp;view=list" title="page 4">4</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=5&amp;view=list" title="page 5">5</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=6&amp;view=list" title="page 6">6</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=7&amp;view=list" title="page 7">7</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=8&amp;view=list" title="page 8">8</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=9&amp;view=list" title="page 9">9</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=10&amp;view=list" title="page 10">10</a><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=11&amp;view=list" title="page 11">11</a></span>
        <span class="paginationMove paginationNext visible"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;page=2&amp;view=list" title="next page">Seuraavat 20 »</a><span>▶</span></span>
      </div>
    </div>
  </div>
  <div class="resultSearchTools">
  <div class="content">
    <div class="searchtools">
      <ul>
        <li class="toolSavedSearch">
                      <span class="searchtoolsHeader"><a href="/finna/MyResearch/SaveSearch?save=1086907">Tallenna haku</a></span>
            <span class="searchtoolsText">
            </span>
                  </li>
        <li class="toolRssLink">
          <span class="searchtoolsHeader"><a href="/finna/Search/Results?lookfor=muumi&amp;type=AllFields&amp;view=rss">RSS-syöte</a></span>
          <span class="searchtoolsText">
          </span>
        </li>
        <li class="toolMailSearch">
          <span class="searchtoolsHeader"><a href="/finna/Search/Email" class="mailSearch mail" id="mailSearch1086907" title="Lähetä haku sähköpostilla">Lähetä haku sähköpostilla</a></span>
          <span class="searchtoolsText">
          </span>
        </li>
      </ul>  
    </div>
  </div>
</div>
        
<div class="clear"></div>

<!-- END of: Search/list.tpl -->              </div>

      <div id="footer" class="clearfix">
        <div class="content">
          <!-- START of: footer.tpl -->

<div class="grid_8">
  <h4>Tietoa</h4>
  <ul>
    <li><a href="/finna/Content/about">Tietoa Finnasta</a></li>
    <li><a href="/finna/Content/terms_conditions">Käyttöehdot</a></li>
    <li><a href="/finna/Content/register_details">Rekisteriseloste</a></li>
  </ul>
</div>

<div class="grid_8">
  <h4>Haku</h4>
  <ul>
    <li><a href="/finna/Search/History">Hakuhistoria</a></li>
    <li><a href="/finna/Search/Advanced">Tarkennettu haku</a></li>
    <li><a href="/finna/Browse/Home">Selaa luetteloa</a></li>
  </ul>
</div>

 <div class="grid_8">
  <h4>Ohje</h4>
  <ul>
    <li><a href="/finna/Content/searchhelp">Hakuohje</a></li>
    <li><a href="/finna/Feedback/Home">Palaute</a></li>
  </ul>
</div>

<div id="footerSeparator"></div>

<div class="grid_8">
   <a href="http://finna.fi/" class="footerLogo"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/finna_logo_small.png" alt="Koti"></a>
</div>
<div class="grid_8">
            <a href="http://www.kdk.fi/" target="_blank" class="footerLogo"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/kdk_logo_fi.png" alt="KDK-logo"></a>
  </div>
<div class="grid_8">
  <a href="http://www.vufind.org/" target="_blank" class="footerLogo"><img src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/vufind_logo_small.png" alt="vufind-logo"></a>
  
    </div>

  

<script type="text/javascript">   
  $(document).ready(function(){
    $('.toggleHeader').parent().next().hide();
    $('.toggleHeader').click(function(){
      $(this).parent().next().toggle('fast');
      return false;
    });
  });
</script>


<!-- END of: footer.tpl -->        </div>
      </div>

    </div> 
     
<script type="text/javascript">
$(document).ready(function() {
    // poll every 60 seconds
    var refreshTime = 60000;
    window.setInterval(function() {
        $.getJSON("/finna/AJAX/JSON_KeepAlive",
               {method: 'keepAlive'});
    }, refreshTime);
});
</script>
  
    


<ul style="z-index: 5; top: 0px; left: 0px; display: none;" aria-activedescendant="ui-active-menuitem" role="listbox" class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"></ul><table id="contextHelp" cellpadding="0" cellspacing="0"><tbody><tr class="top"><td class="left"></td><td class="center"><div class="arrow up"></div></td><td class="right"></td></tr><tr class="middle"><td></td><td class="body"><div id="closeContextHelp"></div><div id="contextHelpContent"></div></td><td></td></tr><tr class="bottom"><td class="left"></td><td class="center"><div class="arrow down"></div></td><td class="right"></td></tr></tbody></table><iframe src="Finna%20-%20Hakutulokset%20-%20muumi_tiedostot/communication_iframe.html" style="display: none;"></iframe></body></html>
<!-- END of: layout.tpl -->