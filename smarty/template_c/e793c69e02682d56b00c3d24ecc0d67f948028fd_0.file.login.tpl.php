<?php
/* Smarty version 3.1.30, created on 2017-01-19 07:11:00
  from "/Users/Ray/project/laravelcl/smarty/template/login/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58806684054d76_14363889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e793c69e02682d56b00c3d24ecc0d67f948028fd' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/login/login.tpl',
      1 => 1484809859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58806684054d76_14363889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1563545358806684053d44_14303350', "title");
}
/* {block "title"} */
class Block_1563545358806684053d44_14303350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
		<h1 style="width:100%; text-align: center; margin-top: 50px;font-size: 30px;">
			欢迎登陆
		</h1>
		<form method="POST" action="/api/login">

			<div>
				Email
				<input type="email" name="email">
			</div>

			<br>
			<div>
				密码
				<input type="password" name="password" id="password">
			</div>

			<br>
			<div>
				<input type="checkbox" name="remember"> 记住我
			</div>

			<br>
			<div>
				<button type="submit">登录</button>
				<a type="button" href="http://172.16.21.233:8888/register" target="_blank">注册</a>
			</div>
		</form>

	</div>
<?php
}
}
/* {/block "title"} */
}
