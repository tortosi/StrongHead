{include file='header.tpl'}
<div id="main">
	<div id="main-precontents"></div>
	<div class="main-contents" id="main-contents">
{if $found}
		<div class="text">
			<a href="http://es.wowhead.com/?{$query}" target="_blank" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
			<h1>{#Search_results_for#} <i>{$search|escape:"html"}</i></h1>
		</div>
		<div id="tabs-generic"></div>
		<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var myTabs = new Tabs({ldelim}parent: ge('tabs-generic'){rdelim});
{if $found.item}{include	file='bricks/item_table.tpl'		id='items'		name='items'				tabsid='myTabs' data=$found.item	}{/if}
{if $found.npc}{include		file='bricks/creature_table.tpl'	id='npcs'		name='npcs'					tabsid='myTabs' data=$found.npc		}{/if}
{if $found.object}{include	file='bricks/object_table.tpl'		id='objects'	name='objects'				tabsid='myTabs' data=$found.object	}{/if}
{if $found.quest}{include	file='bricks/quest_table.tpl'		id='quests'		name='quests'				tabsid='myTabs' data=$found.quest	}{/if}
{if $found.itemset}{include	file='bricks/itemset_table.tpl'		id='itemsets'	name='itemsets'				tabsid='myTabs' data=$found.itemset	}{/if}
{if $found.spell}{include	file='bricks/spell_table.tpl'		id='spells'		name='uncategorizedspells'	tabsid='myTabs' data=$found.spell	}{/if}
myTabs.flush();
</script>
		<div class="clear"></div>
	{else}
		<div class="text">
			<a href="http://es.wowhead.com/?{$query}" target="_blank" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
			{if $search|escape:"html" == ''}<h1>{#No_results_empty#}</h1>{else}<h1>{#No_results_for#} <i>{$search|escape:"html"}</i></h1>{/if}

			{#Please_try_some_different_keywords_or_check_your_spelling#}
		</div>
		{/if}
		</div>
	</div>
{include file='footer.tpl'}
