<?php /* Smarty version 2.6.26, created on 2011-07-13 19:16:03
         compiled from npcs.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main">
			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">
				<script type="text/javascript">
					g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
);
				</script>

				<div id="lv-npcs" class="listview"></div>

				<script type="text/javascript">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'npcs','data' => $this->_tpl_vars['npcs'],'num_npcs' => $this->_tpl_vars['npc_tot'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</script>

				<div class="clear"></div>
			</div>
		</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>