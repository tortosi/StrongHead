<?php /* Smarty version 2.6.26, created on 2012-10-07 15:33:54
         compiled from zone.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'zone.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div id="main">

		<div id="main-precontents"></div>
		<div id="main-contents" class="main-contents">

			<script type="text/javascript">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allcomments.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allscreenshots.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				var g_pageInfo = {type: <?php echo $this->_tpl_vars['page']['type']; ?>
, typeId: <?php echo $this->_tpl_vars['page']['typeid']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['zone']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'};
				g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
);
			</script>

			<div class="text">

				<a href="http://es.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" target="_blank" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
				<h1><?php echo $this->_tpl_vars['zone']['name']; ?>
</h1>

<?php if ($this->_tpl_vars['zone']['position']): ?>
				<div>
<?php echo '<span id="locations">'; ?><?php $_from = $this->_tpl_vars['zone']['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['zoneitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['zoneitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['zoneitem']):
        $this->_foreach['zoneitem']['iteration']++;
?><?php echo '<a href="javascript:;" onclick="myMapper.update('; ?>{<?php echo ''; ?><?php if ($this->_tpl_vars['zoneitem']['atid']): ?><?php echo 'zone:'; ?><?php echo $this->_tpl_vars['zoneitem']['atid']; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['zoneitem']['points'] )): ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo 'show:false'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['zoneitem']['points'] )): ?><?php echo 'coords:['; ?><?php $_from = $this->_tpl_vars['zoneitem']['points']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['point'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['point']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['point']):
        $this->_foreach['point']['iteration']++;
?><?php echo '['; ?><?php echo $this->_tpl_vars['point']['x']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['point']['y']; ?><?php echo ','; ?>{<?php echo 'label:\''; ?><?php if (isset ( $this->_tpl_vars['point']['name'] )): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['point']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?><?php echo ''; ?><?php else: ?><?php echo '$'; ?><?php endif; ?><?php echo '<br>'; ?><?php if (isset ( $this->_tpl_vars['point']['r']['h'] ) || isset ( $this->_tpl_vars['point']['r']['m'] ) || isset ( $this->_tpl_vars['point']['r']['s'] ) || isset ( $this->_tpl_vars['point']['events'] )): ?><?php echo '<div class=q0><small>'; ?><?php echo $this->_config[0]['vars']['Respawn']; ?><?php echo ':'; ?><?php if (isset ( $this->_tpl_vars['point']['r']['h'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['h']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['hr']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['r']['m'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['m']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['min']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['r']['s'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['s']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['sec']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['events'] )): ?><?php echo '<br>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['point']['events'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo ''; ?><?php endif; ?><?php echo '</small></div>'; ?><?php endif; ?><?php echo '\','; ?><?php if (isset ( $this->_tpl_vars['point']['url'] )): ?><?php echo 'url:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['point']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo '\','; ?><?php endif; ?><?php echo 'type:\''; ?><?php echo $this->_tpl_vars['point']['type']; ?><?php echo '\''; ?>}<?php echo ']'; ?><?php if (! ($this->_foreach['point']['iteration'] == $this->_foreach['point']['total'])): ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ']'; ?><?php endif; ?><?php echo ''; ?>}<?php echo ');g_setSelectedLink(this, \'mapper\'); return false" onmousedown="return false">'; ?><?php echo $this->_tpl_vars['zoneitem']['name']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['zoneitem']['population'] > 1): ?><?php echo '&nbsp;('; ?><?php echo $this->_tpl_vars['zoneitem']['population']; ?><?php echo ')'; ?><?php endif; ?><?php echo ''; ?><?php if (($this->_foreach['zoneitem']['iteration'] == $this->_foreach['zoneitem']['total'])): ?><?php echo ''; ?><?php else: ?><?php echo ', '; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span></div>'; ?>

				<div id="mapper-generic"></div>
				<div class="clear"></div>

				<script type="text/javascript">
					var myMapper = new Mapper({parent: 'mapper-generic', zone: '<?php echo $this->_tpl_vars['zone']['position'][0]['atid']; ?>
'});
					gE(ge('locations'), 'a')[0].onclick();
				</script>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['zone']['parentname'] ) && isset ( $this->_tpl_vars['zone']['parent'] )): ?>
				<div class="pad"></div>
				<div><?php echo $this->_config[0]['vars']['This_zone_is_part_of']; ?>
 <a href="?zone=<?php echo $this->_tpl_vars['zone']['parent']; ?>
"><?php echo $this->_tpl_vars['zone']['parentname']; ?>
</a>.</div>
<?php endif; ?>
				<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>
			</div>

			<div id="tabs-generic"></div>
			<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['zone']['fishing'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'fishing','name' => 'fishing','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['zone']['fishing'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['zone']['subzones'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/zone_table.tpl', 'smarty_include_vars' => array('id' => 'zones','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['zone']['subzones'],'name' => 'zones')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>

new Listview({template: 'comment', id: 'comments', name: LANG.tab_comments, tabs: tabsRelated, parent: 'listview-generic', data: lv_comments});
new Listview({template: 'screenshot', id: 'screenshots', name: LANG.tab_screenshots, tabs: tabsRelated, parent: 'listview-generic', data: lv_screenshots});
tabsRelated.flush();
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/contribute.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			</div>
		</div>
	</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>