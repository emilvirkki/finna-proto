<!-- START of: PCI/list-list.tpl -->
{js filename="openurl.js"}
{if $showPreviews}
{js filename="preview.js"}
{/if}
{if $metalibEnabled}
{js filename="metalib_links.js"}
{/if}
{include file="Search/rsi.tpl"}
{include file="Search/openurl_autocheck.tpl"}
{js filename="check_save_statuses.js"}
<ul class="recordSet">
{foreach from=$recordSet item=record name="recordLoop"}
{assign var="id" value=$record.id}
<li class="result">
<span class="recordNumber">{$recordStart+$smarty.foreach.recordLoop.iteration-1}</span>
<div class="result recordId" id="record{$id|escape:"html"}">
    <div class="resultColumn1">
        <div class="coverDiv">
            {* Cover image *}
            <div class="resultNoImage"><p>{translate text='No image'}</p></div>
            <div class="resultImage"><img src="{$path}/images/NoCover2.gif" alt="No image" /></div>
        </div>
        <div class="resultItemFormat"><span class="iconlabel format{$record.format|lower|regex_replace:"/[^a-z0-9]/":""} format{$record.format|lower|regex_replace:"/[^a-z0-9]/":""}">{translate text=$record.format prefix='format_PCI_'}</span>
        </div>
    </div>
    
    <div class="resultColumn2">
        <div class="resultItemLine1">
            <a href="{$url}/PCI/Record?id={$id|escape:"url"}"
            class="title">{if !$record.title}{translate text='Title not available'}{else}{$record.title|highlight}{/if}</a>
        </div>
        <div class="resultItemLine2">
        {if !empty($record.author)}
            {translate text='by'}:
        {foreach from=$record.author item=author name="loop"}
            <a href="{$url}/PCI/Search?type=Author&amp;lookfor={$author|unhighlight|trim|escape:"url"}">{$author|trim|highlight}</a>{if !$smarty.foreach.loop.last}, {/if} 
        {/foreach}
        {/if}
        </div>
        <div class="resultItemLine2">
        {foreach from=$record.url item=recordLink}
            <a href="{$recordLink|proxify|escape}">{$recordLink|escape:"html"|truncate:60:"...":true:true}</a><br />
        {/foreach}
        </div>
        <div class="resultItemLine4">
        {if $record.openUrl}
          <br>
          {include file="Search/openurl.tpl" openUrl=$record.openUrl}
        {/if}
        </div>
    
        {* Display the lists that this record is saved to *}
        <div class="savedLists info hide" id="savedLists{$id|escape}">
          <strong>{translate text="Saved in"}:</strong>
        </div>
    </div>

    <div class="last addToFavLink">
        <a id="saveRecord{$id|escape}" href="{$url}/PCI/Save?id={$id|escape:"url"}" class="tool savePCIRecord PCIRecord fav" title="{translate text='Add to favorites'}"></a>
    </div>
    <div class="clear"></div>
</div>
</li>
{/foreach}
</ul>