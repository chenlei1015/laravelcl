<?php
/* Smarty version 3.1.30, created on 2017-01-19 07:09:44
  from "/Users/Ray/project/laravelcl/smarty/template/home/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58806638050e92_05179312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2731711a83e348e30d5b9cf0ac009218b4c1e9' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/home/home.tpl',
      1 => 1484809783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58806638050e92_05179312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2112686219588066380500e7_51372371', "title");
}
/* {block "title"} */
class Block_2112686219588066380500e7_51372371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
		<h1 style="width:100%; text-align: center; margin-top: 50px;font-size: 30px;">
			首页
		</h1>
		<p>登录信息:
			<div>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['user']) {?>
					<p1>欢迎<?php echo $_smarty_tpl->tpl_vars['info']->value['user']['name'];?>
</p1>
				<?php } else { ?>
					<p1>尚未登录</p1>
				<?php }?>
			</div>
		</p>
		<a type="button" href="http://172.16.21.233:8888/login">登录</a>
		<a type="button" href="http://172.16.21.233:8888/api/logout">退出</a>
	</div>
<?php
}
}
/* {/block "title"} */
}
