<style>
  .facet_loading.hide,
  .dropdown dt a span {
    display: none !important
  }
  .hidden-visually, .recordNumber {
    position: absolute;
    display: block !important;
    width: 0;
    height: 0;
    margin: 0;
    padding: 0;
    border: 0;
    overflow: hidden;
  }
  .offscreen {
    display: none !important
  }
  select {
    visibility: visible !important
  }
  
  .autodropdown {
    display: inline-block;
    height: auto;
    width: auto;
    border: 1px solid red;
    padding-right: 1em;
    background: white;
    position: relative;
    z-index: 1000;
  }
  
  .autodropdown div,
  .autodropdown a {
    display: block;
  }
  .autodropdown a {
    height: 0;
    overflow: hidden;
  }
  .autodropdown:hover a,
  .autodropdown a:hover {
    height: auto;
  }
</style>
<script>
  $(function() {
    $('.jumpMenu').each(function() {
      function findLabel(elem) {
        return $('label[for=' + elem.attr('id') + ']');
      }
      var parentTitle = findLabel($(this)).text()
      var div = $('<div class="autodropdown" />');
      var selected = $('<div class="selected" aria-role="presentation"></div>');
      selected.append($(this).find('option:selected').text());
      div.append(selected);
      var list = $('<ul/>');
      div.append(list);
      $(this).find('option').each(function() {
        console.log($(this).text());
        var link = $('<a />');
        var text = '<span class="hidden-visually">' + parentTitle + ': </span>' + $(this).text();
        if($(this).is(':selected')) {
          text = text + '<span class="hidden-visually"> (valittu)</span>';
        }
        link.html(text);
        link.attr('href', $(this).attr('value'));
        var option = $('<li/>');
        option.append(link);
        list.append(option)
      });
      $(this).parent().append(div);
      $(this).hide();
    });
  })
</script>