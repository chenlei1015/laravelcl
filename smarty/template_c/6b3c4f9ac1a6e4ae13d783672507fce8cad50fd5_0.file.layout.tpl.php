<?php
/* Smarty version 3.1.30, created on 2017-03-28 03:06:35
  from "/Users/Ray/project/laravelcl/smarty/template/common/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d9d33b7c9531_41295912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3c4f9ac1a6e4ae13d783672507fce8cad50fd5' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/common/layout.tpl',
      1 => 1490670392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d9d33b7c9531_41295912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="author" content="Yunniao"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
   <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
   <meta name="csrf-token" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['csrf_token'];?>
"/>
   <link rel="icon" href="/srcstatic/css/image/favicon.ico" type="image/x-icon"/>
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204022674458d9d33b7b0c16_11648410', "title");
?>

   <link href="/srcstatic/css/common.less" rel="stylesheet">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103669739758d9d33b7b2c51_03646418', "css");
?>


</head>
<body>
    <div class="header">
        <div class="main">
            <p class="title">云鸟线索管理系统</p>
            <a class="logout" title="退出云鸟线索管理系统" href="/do_logout" id="logout"> <i></i></a>
            <?php $_smarty_tpl->_assignInScope('len', mb_strlen($_smarty_tpl->tpl_vars['info']->value['user']['name'],'utf-8'));
?>
            <p class="user" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['user']['name'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['info']->value['user']['name'],0,4);
echo $_smarty_tpl->tpl_vars['end']->value;?>
</p>
        </div>
    </div>
    <div class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48859854058d9d33b7c5728_36254949', "content");
?>


    </div>
    <p class="footer">©2016 YUNNIAO 京ICP备16001667号-1</p>

    <?php echo '<script'; ?>
 src="/srcstatic/js/lib/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/srcstatic//js/lib/esl.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100691165458d9d33b7c7a97_93272771', "script");
?>

</body>
</html>
<?php }
/* {block "title"} */
class Block_204022674458d9d33b7b0c16_11648410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_103669739758d9d33b7b2c51_03646418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "content"} */
class Block_48859854058d9d33b7c5728_36254949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_100691165458d9d33b7c7a97_93272771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "script"} */
}
