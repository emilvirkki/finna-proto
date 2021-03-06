<!-- START of: PCI/record-metadata.tpl -->

<div id="recordMetadata">
  {* Display Title *}
  <h1 class="recordTitle">{$record.title|escape:"html"}</h1>
  {* End Title *}

  {* Display Main Details *}
  <table cellpadding="2" cellspacing="0" border="0" class="citation" summary="{translate text='Bibliographic Details'}">
    <tr valign="top" class="recordAuthors">
      <th>{translate text='Authors'}: </th>
      <td>
        <div class="truncateField">
            {if $record.author}
            {foreach from=$record.author item=author name="loop"}
              <a href="{$url}/MetaLib/Search?type=Author&amp;lookfor={$author|unhighlight|escape:"url"}">{$author|highlight}</a>{if !$smarty.foreach.loop.last},{/if} 
            {/foreach}
            <br/>
            {/if}
        </div>
      </td>
    </tr>
    {if $record.snippet}
    <tr valign="top" class="recordDescription">
        <th>{translate text='Description'}: </th>
        <td>
            <div class="truncateField">
                {$record.snippet}
            </div>
        </td>
    </tr>
    {/if}
    {if !empty($record.format)}
    <tr valign="top" class="recordFormat">
      <th>{translate text='Format'}: </th>
        <td>
            <span class="iconlabel format{$record.format|lower|regex_replace:"/[^a-z0-9]/":""} format{$displayFormat|lower|regex_replace:"/[^a-z0-9]/":""}">{translate text=$record.format prefix='format_PCI_'}</span>                         
        </td>
    </tr>
    {/if}
    
    {if $record.language}
    <tr valign="top" class="recordLanguage">
      <th>{translate text='Language'}: </th>
      <td>{translate text=$record.language prefix='facet_'}</td>
    </tr>
    {/if}

    {if !empty($record.publicationTitle)}
    <tr valign="top" class="recordPublications">
      <th>{translate text='Published in'}: </th>
      <td>{$record.publicationTitle}</td>
    </tr>
    {/if}

    {if !empty($record.subjectTerms)}
    <tr valign="top" class="recordSubjects">
      <th>{translate text='Subjects'}: </th>
      <td>
        <div class="truncateField">
        {foreach from=$record.subjectTerms item=subject name=loop}
        <div class="subjectLine">
            <a title="{$subject|escape}" href="{$url}/PCI/Results?lookfor=%22{$subject|escape:"url"}%22&amp;type=Subject" class="subjectHeading">{$subject|escape}</a>
        </div>
        {/foreach}
        </div>
      </td>
    </tr>
    {/if}
    {assign var="idPrefix" value=$id|substr:0:8}
    {if !empty($record.url) || $record.openUrl || $idPrefix == 'metalib_'}
    <tr valign="top" class="recordURLs">
      <th>{translate text='Online Access'}: </th>
      <td>
        {foreach from=$record.url item=currentUrl name=loop}
          <a href="{$currentUrl|proxify|escape}" target="_blank">{$currentUrl|escape}</a><br/>
        {/foreach}
        {if $record.openUrl}
          {include file="Search/openurl.tpl" openUrl=$record.openUrl}
          {include file="Search/rsi.tpl"}
          {include file="Search/openurl_autocheck.tpl"}
        {/if}
        {if $idPrefix == 'metalib_'}
          <span class="metalib_link">
            <span id="metalib_link_{$id|escape}" class="hide"><a href="{$path}/MetaLib/Home?set=_ird%3A{$id|regex_replace:'/^.*?\./':''|escape}">{translate text='Search in this database'}</a></span>
            <span id="metalib_link_na_{$id|escape}" class="hide">{translate text='metalib_not_authorized_single'}<br/></span>
          </span>
        {/if}
      </td>
    </tr>
    {/if}
    {if $toc}
    <tr valign="top" class="recordTOC">
      <th>{translate text='Table of Contents'}: </th>
      <td>
        <div class="truncateField">
      {foreach from=$toc item=line}
        {$line|escape}<br />
      {/foreach}
        </div>
      </td>
    </tr>
    {/if}
    <tr valign="top" class="recordTags">
      <th>{translate text='Tags'}: </th>
      <td>
        <span style="float:right;">
          <a href="{$url}/Record/{$id|escape:"url"}/AddTag" class="tool add tagRecord" title="{translate text='Add Tag'}" id="tagRecord{$id|escape}">{translate text='Add Tag'}</a>
        </span>
        <div id="tagList">
          {if $tagList}
            {foreach from=$tagList item=tag name=tagLoop}
          <a href="{$url}/Search/Results?tag={$tag->tag|escape:"url"}">{$tag->tag|escape:"html"}</a> ({$tag->cnt}){if !$smarty.foreach.tagLoop.last}, {/if}
            {/foreach}
          {else}
            {translate text='No Tags'}
          {/if}
        </div>
      </td>
    </tr>
  </table>
  {* End Main Details *}
</div>

<div class="span-4 last">

  {* Display the lists that this record is saved to *}
  <div class="savedLists info hide" id="savedLists{$id|escape}">
    <strong>{translate text="Saved in"}:</strong>
  </div>

  {if $showPreviews && (!empty($holdingLCCN) || !empty($isbn) || !empty($holdingArrOCLC))}
    {if $googleOptions}
      <div class="googlePreviewDiv__{$googleOptions}">
        <a title="{translate text='Preview from'} Google Books" class="hide previewGBS{if $isbn} ISBN{$isbn}{/if}{if $holdingLCCN} LCCN{$holdingLCCN}{/if}{if $holdingArrOCLC} OCLC{$holdingArrOCLC|@implode:' OCLC'}{/if}" target="_blank">
          <img src="https://www.google.com/intl/en/googlebooks/images/gbs_preview_button1.png" alt="{translate text='Preview'}"/>
        </a>
      </div>
    {/if}
    {if $olOptions}
      <div class="olPreviewDiv__{$olOptions}">
        <a title="{translate text='Preview from'} Open Library" href="" class="hide previewOL{if $isbn} ISBN{$isbn}{/if}{if $holdingLCCN} LCCN{$holdingLCCN}{/if}{if $holdingArrOCLC} OCLC{$holdingArrOCLC|@implode:' OCLC'}{/if}" target="_blank">
          <img src="{$path}/images/preview_ol.gif" alt="{translate text='Preview'}"/>
        </a>
      </div>
    {/if}
    {if $hathiOptions}
      <div class="hathiPreviewDiv__{$hathiOptions}">
        <a title="{translate text='Preview from'} HathiTrust" class="hide previewHT{if $isbn} ISBN{$isbn}{/if}{if $holdingLCCN} LCCN{$holdingLCCN}{/if}{if $holdingArrOCLC} OCLC{$holdingArrOCLC|@implode:' OCLC'}{/if}" target="_blank">
          <img src="{$path}/images/preview_ht.gif" alt="{translate text='Preview'}"/>
        </a>
      </div>
    {/if}
    <span class="previewBibkeys{if $isbn} ISBN{$isbn}{/if}{if $holdingLCCN} LCCN{$holdingLCCN}{/if}{if $holdingArrOCLC} OCLC{$holdingArrOCLC|@implode:' OCLC'}{/if}"></span>
  {/if}
</div>

<div class="clear"></div>

<!-- END of: PCI/core-metadata.tpl -->
