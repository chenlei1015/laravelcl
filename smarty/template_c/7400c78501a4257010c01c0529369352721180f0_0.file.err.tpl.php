<?php
/* Smarty version 3.1.30, created on 2017-01-19 06:26:51
  from "/Users/Ray/project/laravelcl/smarty/template/err.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58805c2b66fd87_14053258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7400c78501a4257010c01c0529369352721180f0' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/err.tpl',
      1 => 1484807209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58805c2b66fd87_14053258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35650734758805c2b66efb8_37189851', "title");
}
/* {block "title"} */
class Block_35650734758805c2b66efb8_37189851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
		<h1 style="width:100%; text-align: center; margin-top: 50px;font-size: 30px;">
			页面错误...
		</h1>
	</div>
<?php
}
}
/* {/block "title"} */
}
