<?php
/* Smarty version 3.1.30, created on 2017-01-19 07:28:34
  from "/Users/Ray/project/laravelcl/smarty/template/login/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58806aa2935012_11281644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '840514e923a2c86379672b93a96c4c210e4c284e' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/login/register.tpl',
      1 => 1484810913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58806aa2935012_11281644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_897034758806aa29341f0_37624716', "title");
}
/* {block "title"} */
class Block_897034758806aa29341f0_37624716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
		<h1 style="width:100%; text-align: center; margin-top: 50px;font-size: 30px;">
			注册系统
		</h1>
		<form method="POST" action="/api/register">

			<div>
				用户名
				<input type="text" name="name"">
			</div>

			<div>
				Email
				<input type="email" name="email"">
			</div>

			<div>
				密码
				<input type="password" name="password">
			</div>

			<div>
				确认密码
				<input type="password" name="password_confirmation">
			</div>

			<div>
				<button type="submit">注册</button>
			</div>
		</form>

	</div>
<?php
}
}
/* {/block "title"} */
}
