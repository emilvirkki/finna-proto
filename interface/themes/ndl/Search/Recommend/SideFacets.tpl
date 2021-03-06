<!-- START of: Search/Recommend/SideFacets.tpl -->

<div class="sidegroup">
  {if $recordCount > 0}<h4>{translate text=$sideFacetLabel}</h4>{/if}
  {if isset($checkboxFilters) && count($checkboxFilters) > 0}
      {foreach from=$checkboxFilters item=current}
        <div class="checkboxFilter{if $recordCount < 1 && !$current.selected && !$current.alwaysVisible} hide{/if}">
              <input type="checkbox" name="filter[]" value="{$current.filter|escape}"
                {if $current.selected}checked="checked"{/if} id="{$current.desc|replace:' ':''|escape}"
                onclick="document.location.href='{$current.toggleUrl|escape}';" />
              <label for="{$current.desc|replace:' ':''|escape}">{translate text=$current.desc}</label>
        </div>
      {/foreach}
  {/if}
  {if $filterList}
    <ul class="filters">
    {foreach from=$filterList item=filters key=field}
      {foreach from=$filters item=filter}
        {assign var=facetPrefix value=$filter.display|substr:0:2}
        {if $facetPrefix == '0/' || $facetPrefix == '1/' || $facetPrefix == '2/' || $facetPrefix == '3/'}
        <li><a class="roundButton deleteButton" href="{$filter.removalUrl|escape}">X</a><span title="{$filter.display|escape}">{translate text=$field}: {$filter.display|substr:2|escape}</span></li>
        {else} 
        <li><a class="roundButton deleteButton" href="{$filter.removalUrl|escape}">X</a><span>{translate text=$field}: {$filter.display|escape}</span></li>
        {/if}
      {/foreach}
    {/foreach}
    </ul>
  {/if}
  {if $collectionKeywordFilters}
    <dl class="narrowList navmenu">
      <dt>{translate text="Keyword Filter"}</dt>
      <dd>
        <form method="get" action="{$url}/Collection/{$id}/{$collectionAction}" name="keywordFilterForm" id="keywordFilterForm" class="keywordFilterForm">
          <input id="keywordFilter_lookfor" type="text" name="lookfor" value="{$keywordLookfor|escape}"/>
          {foreach from=$collectionKeywordFilterList item=filters key=field}
            {foreach from=$filters item=filter}
              <input type="text" name="filter[]" value="{$filter.field}:&quot;{$filter.display}&quot;" style="display:none;"/>
            {/foreach}
          {/foreach}
          <input type="submit" name="submit" value="{translate text="Apply"}"/>
        </form>
      </dd>
    </dl>
  {/if}
  {if $sideFacetSet && $recordCount > 0}
    {foreach from=$sideFacetSet item=cluster key=title}
    {if isset($dateFacets.$title)}
      <form action="" name="{$title|escape}Filter" id="{$title|escape}Filter">
        {* keep existing search parameters as hidden inputs *}
        {foreach from=$smarty.get item=paramValue key=paramName}
          {if is_array($smarty.get.$paramName)}
            {foreach from=$smarty.get.$paramName item=paramValue2}
              {if strpos($paramValue2, $title) !== 0}
                <input type="hidden" name="{$paramName}[]" value="{$paramValue2|escape}" />
              {/if}
            {/foreach}
          {else}
            {if (strpos($paramName, $title)   !== 0)
                && (strpos($paramName, 'module') !== 0)
                && (strpos($paramName, 'action') !== 0)
                && (strpos($paramName, 'page')   !== 0)}
              <input type="hidden" name="{$paramName}" value="{$paramValue|escape}" />
            {/if}
          {/if}
        {/foreach}
        <input type="hidden" name="daterange[]" value="{$title|escape}"/>
        <fieldset class="publishDateLimit" id="{$title|escape}">
          <legend>{translate text=$cluster.label}</legend>
          <div class="publishDateFrom">
          <label for="{$title|escape}from">{translate text='date_from'}</label>
          <input type="text" size="4" maxlength="4" class="yearbox" name="{$title|escape}from" id="{$title|escape}from" value="{if $dateFacets.$title.0}{$dateFacets.$title.0|escape}{/if}" />
          </div>
          <div class="publishDateTo">
          <label for="{$title|escape}to">{translate text='date_to'}</label>
          <input type="text" size="4" maxlength="4" class="yearbox" name="{$title|escape}to" id="{$title|escape}to" value="{if $dateFacets.$title.1}{$dateFacets.$title.1|escape}{/if}" />
          </div>
          <div id="{$title|escape}Slider" class="dateSlider"></div>
          <input type="submit" value="{translate text='Set'}" id="{$title|escape}goButton"/>
        </fieldset>
      </form>
      {elseif is_array($hierarchicalFacets) && in_array($title, $hierarchicalFacets)}
      <dl class="narrowList navmenu">
        <dt>{translate text=$cluster.label}</dt>
      </dl>
{literal}
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
{/literal}
  enableDynatree('#facet_{$title}', '{$title}', '{$fullPath}');
{literal}  
});
//]]>
</script>
{/literal}
      <div id="facet_{$title}" class="dynatree-facet">
        <span class="facet_loading hide"></span>
      </div>
    {else}
      <dl class="narrowList navmenu">
        <dt>{translate text=$cluster.label}</dt>
        {foreach from=$cluster.list item=thisFacet name="narrowLoop"}
          {if $smarty.foreach.narrowLoop.iteration == 6}
          <dd id="more{$title}"><a href="#" onclick="moreFacets('{$title}'); return false;">{translate text='more'} ...</a></dd>
        </dl>
        <dl class="narrowList navmenu offscreen" id="narrowGroupHidden_{$title}">
          {/if}
          {if $thisFacet.isApplied}
            <dd>{$thisFacet.value|escape} <img src="{$path}/images/silk/tick.png" alt="Selected"/></dd>
          {else}
            <dd><a href="{$thisFacet.url|escape}">{$thisFacet.value|escape}&nbsp;<span class="facetCount">({$thisFacet.count})</span></a></dd>
          {/if}
        {/foreach}
        {if $smarty.foreach.narrowLoop.total > 5}<dd><a href="#" onclick="lessFacets('{$title}'); return false;">{translate text='less'} ...</a></dd>{/if}
      </dl>
    {/if}
    {/foreach}
  {/if}
</div>

<!-- END of: Search/Recommend/SideFacets.tpl -->
