<?php /* Smarty version 2.6.26, created on 2012-10-16 12:29:56
         compiled from bricks/allscreenshots.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'bricks/allscreenshots.tpl', 7, false),)), $this); ?>
<?php echo 'var lv_screenshots = ['; ?><?php $_from = $this->_tpl_vars['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['number'] => $this->_tpl_vars['screenshot']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ''; ?>{<?php echo 'number:'; ?><?php echo $this->_tpl_vars['screenshot']['number']; ?><?php echo ',user:\''; ?><?php echo $this->_tpl_vars['screenshot']['user']; ?><?php echo '\',date:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['screenshot']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M:%S")); ?><?php echo '\',body:\''; ?><?php echo $this->_tpl_vars['screenshot']['body']; ?><?php echo '\',width:'; ?><?php echo $this->_tpl_vars['screenshot']['width']; ?><?php echo ',height:'; ?><?php echo $this->_tpl_vars['screenshot']['height']; ?><?php echo ',type:'; ?><?php echo $this->_tpl_vars['screenshot']['type']; ?><?php echo ',typeId:'; ?><?php echo $this->_tpl_vars['screenshot']['typeId']; ?><?php echo ',id:'; ?><?php echo $this->_tpl_vars['screenshot']['id']; ?><?php echo ''; ?>}<?php echo ''; ?><?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '];'; ?>
