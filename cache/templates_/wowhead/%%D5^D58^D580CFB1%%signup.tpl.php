<?php /* Smarty version 2.6.26, created on 2011-07-06 03:01:39
         compiled from signup.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="main">
				<div id="main-precontents"></div>
				<div id="main-contents">
					<div class="pad3"></div>
					<script type="text/javascript">
						function inputBoxValidate(f)
						{
							var _ = f.elements[0];
							if(_.value.length == 0)
							{
								ge('inputbox-error').innerHTML = LANG.message_enterusername;
								_.focus();
								return false;
							}

							_ = f.elements[1];
							if(_.value.length == 0)
							{
								ge('inputbox-error').innerHTML = LANG.message_enterpassword;
								_.focus();
								return false;
							}

							_ = f.elements[2];
							if(_.value.length == 0)
							{
								ge('inputbox-error').innerHTML = message_passwordsdonotmatch;
								_.focus();
								return false;
							}
						}
					</script>

					<form action="?account=signup" method="post" onsubmit="return inputBoxValidate(this)">
						<div class="inputbox" style="position: relative">
							<h1><?php echo $this->_config[0]['vars']['Create_your_account']; ?>
</h1>
							<div id="inputbox-error"><?php echo $this->_tpl_vars['signup_error']; ?>
</div>

							<table align="center">
								<tr>
									<td align="right"><?php echo $this->_config[0]['vars']['Username']; ?>
:</td>
									<td><input type="text" name="username" value="" maxlength="16" id="username-generic" style="width: 10em" /></td>
								</tr>
								<tr>
									<td align="right"><?php echo $this->_config[0]['vars']['Password']; ?>
:</td>
									<td><input type="password" name="password" style="width: 10em" /></td>
								</tr>
								<tr>
									<td align="right"><?php echo $this->_config[0]['vars']['Confirm_password']; ?>
:</td>
									<td><input type="password" name="c_password" style="width: 10em" /></td>
								</tr>
								<tr>
								<tr>
									<td align="right"><?php echo $this->_config[0]['vars']['Email']; ?>
:</td>
									<td><input type="text" name="email" style="width: 10em" /></td>
								</tr>
									<td align="right" valign="top"><input type="checkbox" name="remember_me" id="remember_me" value="yes" /></td>
									<td>
										<label for="remember_me"><?php echo $this->_config[0]['vars']['Remember_me_on_this_computer']; ?>
</label>
										<div class="pad2"></div>
										<input type="submit" name="signup" value="<?php echo $this->_config[0]['vars']['Signup']; ?>
" />
									</td>
								</tr>
							</table>
						</div>
					</form>

					<script type="text/javascript">ge('username-generic').focus()</script>
					<div class="clear"></div>
				</div>

			</div>
		</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>