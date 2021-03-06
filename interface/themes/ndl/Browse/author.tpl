<div class="browseHeader"><div class="content"><h1>{translate text='Choose a Column to Begin Browsing'}:</h1></div></div>
<div class="content">
<div id="list1container" class="grid_6 browseNav">
  {include file="Browse/top_list.tpl" currentAction="Author"}
</div>

<div id="list2container" class="grid_6 browseNav">
  <ul class="browse" id="list2">
    <li><a href="{$url}/Browse/Author" class="loadAlphabet query_field:authorStr facet_field:author-letter target:list3container">{translate text="By Alphabetical"}</a></li>
    {if $lccEnabled}<li><a href="{$url}/Browse/Author" class="loadSubjects query_field:authorStr facet_field:callnumber-first target:list3container">{translate text="By Call Number"}</a></li>{/if}
    {if $topicEnabled}<li><a href="{$url}/Browse/Author" class="loadSubjects query_field:authorStr facet_field:topic_facet target:list3container">{translate text="By Topic"}</a></li>{/if}
    {if $genreEnabled}<li><a href="{$url}/Browse/Author" class="loadSubjects query_field:authorStr facet_field:genre_facet target:list3container">{translate text="By Genre"}</a></li>{/if}
    {if $regionEnabled}<li><a href="{$url}/Browse/Author" class="loadSubjects query_field:authorStr facet_field:geographic_facet target:list3container">{translate text="By Region"}</a></li>{/if}
    {if $eraEnabled}<li><a href="{$url}/Browse/Author" class="loadSubjects query_field:authorStr facet_field:era_facet target:list3container">{translate text="By Era"}</a></li>{/if}
  </ul>
</div>

<div id="list3container" class="grid_6">
</div>

<div id="list4container" class="grid_6">
</div>

<div class="clear"></div>
</div>
