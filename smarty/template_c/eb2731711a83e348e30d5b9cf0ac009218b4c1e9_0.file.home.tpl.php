<?php
/* Smarty version 3.1.30, created on 2017-03-28 02:43:45
  from "/Users/Ray/project/laravelcl/smarty/template/home/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d9cde167ddb6_98149794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2731711a83e348e30d5b9cf0ac009218b4c1e9' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/home/home.tpl',
      1 => 1490669007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/layout.tpl' => 1,
  ),
),false)) {
function content_58d9cde167ddb6_98149794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149201468258d9cde167cf03_79317212', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../common/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_149201468258d9cde167cf03_79317212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="loginmsg">
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
/* {/block "content"} */
}
