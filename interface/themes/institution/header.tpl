<!-- START of: header.tpl -->

{js filename="jquery.cookie.js"}
{if $bookBag}
  {js filename="cart.js"}
  {assign var=bookBagItems value=$bookBag->getItems()}
{/if}
<div id="loginHeader" class="last right small">
  {if !$hideLogin}
  <div id="logoutOptions"{if !$user} class="hide"{/if}>
    {if $catalogAccounts}
    <form method="post" action="">
    {/if} 
    <a class="account" href="{$path}/MyResearch/Home">{translate text="Your Account"}</a>
    {if $catalogAccounts}
    <select id="catalogAccount" name="catalogAccount" title="{translate text="Selected Library Card"}" class="jumpMenu">
      {foreach from=$catalogAccounts item=account}
      <option value="{$account.id|escape}"{if $account.cat_username == $currentCatalogAccount} selected="selected"{/if}>{$account.account_name|escape}</option>
      {/foreach}
      <option value="new">{translate text="Add"}...</option>
    </select>
    <noscript><input type="submit" value="{translate text="Set"}" /></noscript>
    {/if}
    {if $mozillaPersonaCurrentUser}
    <a id="personaLogout" class="logout" href="">{translate text="Log Out"}</a>
    {else}
    <a class="logout" href="{$path}/MyResearch/Logout">{translate text="Log Out"}</a>
    {/if}
    {if $catalogAccounts}
    </form>
    {/if}
  </div>
  <div id="loginOptions"{if $user} class="hide"{/if}>
  {if $authMethod == 'Shibboleth'}
    <a class="login" href="{$sessionInitiator}">{translate text="Institutional Login"}</a>
  {else}
    <a href="{$path}/MyResearch/Home">{translate text="Login"}</a>
  {/if}
  </div>
  {/if}
{*
<!--
  {* if $bookBagItems|@count > 0 can be used below to show only when items exist but visibility needs to be taken care of somehow to show the bookbag without hitting refresh *}
  {*
  {if $bookBag} 
    <span id="cartSummary" class="cartSummary clear">
      <a id="cartItems" title="{translate text='View Book Bag'}" class="bookbag" href="{$url}/Cart/Home"><span class="strong">{$bookBagItems|@count}</span> {translate text='items'} {if $bookBag->isFull()}({translate text='bookbag_full'}){/if}</a>
      <a id="viewCart" title="{translate text='View Book Bag'}" class="viewCart bookbag offscreen" href="{$url}/Cart/Home"><span id="cartSize" class="strong">{$bookBagItems|@count}</span> {translate text='items'}<span id="cartStatus">{if $bookBag->isFull()}({translate text='bookbag_full'}){else}&nbsp;{/if}</span></a>
    </span>
  {/if}
-->
<!-- 2 columns TEST
</div>
<div style="padding-top:.5em;">
    <span class="strong account small">{translate text="Guest"}</span>
</div>
--> *}
</div>

{include file="homelogo.tpl" assign=logoUrl}

{if $showTopSearchBox}

{* This is a temporary solution: assign specific id for MetaLib, all others can use the default logo *}
<div id="logoHeader{if $module=='MetaLib'}MetaLib{/if}">
  <a id="logo{if $module=='MetaLib'}MetaLib{/if}" class="searchLogo" href="{$url}{if $module=='MetaLib'}/MetaLib/Home{/if}" title="{translate text="Home"}">
    {image src=$logoUrl}
  </a>
</div>
<div id="searchFormHeader">
  <div class="searchbox">
  {if $pageTemplate != 'advanced.tpl'}
    {if $module=="Summon" || $module=="EBSCO" || $module=="PCI" || $module=="WorldCat" || $module=="Authority" || $module=="MetaLib"}
      {include file="`$module`/searchbox.tpl"}
    {else}
      {include file="Search/searchbox.tpl"}
    {/if}
  {/if}
  </div>
</div>

{else}

<div class="searchHome">
  <div class="searchHomeContent">
    {if $offlineMode == "ils-offline"}
      <div class="sysInfo">
      <h2>{translate text="ils_offline_title"}</h2>
      <p><strong>{translate text="ils_offline_status"}</strong></p>
      <p>{translate text="ils_offline_home_message"}</p>
      <p><a href="mailto:{$supportEmail}">{$supportEmail}</a></p>
      </div>
    {/if}
    <div id="logo" class="searchHomeLogo{if $module=='MetaLib'} searchHomeLogoMetaLib{/if}">
      {image src=$logoUrl }
    </div>
    <div class="searchHomeForm">
      <div class="searchbox">
    {if $module=="Summon" || $module=="EBSCO" || $module=="PCI" || $module=="WorldCat" || $module=="Authority" || $module=="MetaLib"}
      {include file="`$module`/searchbox.tpl"}
    {else}
      {include file="Search/searchbox.tpl"}
    {/if}
      </div>
    </div>
  </div>
</div>

{/if}

<!-- END of: header.tpl -->
