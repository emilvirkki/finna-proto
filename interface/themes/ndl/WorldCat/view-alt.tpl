<div class="record">
  <a href="{$url}/WorldCat/Record?id={$id|escape:"url"}" class="backtosearch">&laquo; {translate text="Back to Record"}</a>

  {assign var=marcField value=$marc->getField('245')}
  <h1>{$marcField|getvalue:'a'|escape} {$marcField|getvalue:'b'|escape}</h1>
  {include file="WorldCat/$subTemplate"}

</div>
