<!-- START of: Search/Recommend/TopPubDateVisAjax.tpl -->

{if $visFacets}

    {* load jQuery flot *}
    <!--[if IE]>{js filename="flot/excanvas.min.js"}<![endif]--> 
    {js filename="flot/jquery.flot.js"}
    {js filename="flot/jquery.flot.selection.js"}
    {js filename="pubdate_vis.js"}

    {foreach from=$visFacets item=facetRange key=facetField}
      <div id="topPubDateVis" class="{if $facetRange.label == "adv_search_year"}span-10{if $sidebarOnLeft} last{/if}{/if}">
        {* $facetRange.label *}
        <strong>{translate text=$facetRange.label}</strong>
        {* space the flot visualisation *}     
        <div id="datevis{$facetField}x" style="margin:0;padding:0;width:auto;height:80px;cursor:crosshair;position:relative;left:5px;"></div>
        <div id="clearButtonText" style="display: none">{translate text="Clear"}</div>  
      </div>
    {/foreach}
    <script type="text/javascript">
      //<![CDATA[
      loadVis('{$facetFields|escape:'javascript'}', '{$searchParams|escape:'javascript'}', '{$url}', {$zooming}{if $collectionName}, '{$collectionID|urlencode}', '{$collectionAction}'{/if});
      //]]>
    </script>

{/if}

<!-- END of: Search/Recommend/TopPubDateVisAjax.tpl -->
