<?php
/* Smarty version 3.1.30, created on 2017-01-18 12:12:31
  from "/Users/Ray/project/laravelcl/smarty/template/common/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587f5bafef8718_75228887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3c4f9ac1a6e4ae13d783672507fce8cad50fd5' => 
    array (
      0 => '/Users/Ray/project/laravelcl/smarty/template/common/layout.tpl',
      1 => 1479953647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587f5bafef8718_75228887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Yunniao"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['csrf_token'];?>
"/>
    <base href="/new/"/>
    <link rel="icon" href="/webstatic/css/img/fav.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/webstatic/css/img/fav.ico" type="image/x-icon"/>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2021420224587f5bafee50e7_61210146', "title");
?>

    <link rel="stylesheet" type="text/css" href="../../webstatic/css/common/base.less"/>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_429650919587f5bafee6ce5_02587908', "css");
?>

</head>
<body>

<div class="wrap">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1389650078587f5bafee8751_98199087', "main");
?>

    <div class="bottom_wrap">
        <p><a href="/new/article/yn_services" target="_blank" class="yn_services">云鸟服务协议</a>&nbsp;©2016&nbsp;YUNNIAO&nbsp;京ICP备16001633号-1
        </p>
    </div>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['is_prod_env'];?>
" id="env"/>
</div>
<?php echo '<script'; ?>
 src="/webstatic/js/lib/jquery.js"><?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149651796587f5bafeeba55_47682268', "scriptLib");
?>

<?php echo '<script'; ?>
 src="/webstatic/js/lib/esl.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    if (window.jQuery) {
        define('jquery', function () {
            return window.jQuery;
        });
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var resource = {};
    // 发布环境按照映射表加载js文件;
    <?php if (!$_smarty_tpl->tpl_vars['info']->value['user']['is_localenv']) {?>
        var reg = new RegExp("webstatic\/js\/");
        var moye = new RegExp("lib\/moye\/src\/ui\/");

        $.each(__RESOURCE_MAP__.res || {}, function (key, item) {
            if (item.type == 'js' && item.uri.indexOf('webstatic') > -1) {
                key = key.replace(reg, '');
                key = key.replace(moye, 'moye/');
                resource[key.slice(0,-3)] = item.uri.slice(0, -3);
            }
        });
    <?php }?>

    require.config({
        baseUrl: '/webstatic/js/',
        paths: resource,
        packages: [{
            name: 'moye',
            main: 'main',
            location: 'lib/moye/src/ui'
        }]
    });

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>

    // 线上环境才添加百度统计
    var _hmt = _hmt || [];
    <?php if ($_smarty_tpl->tpl_vars['info']->value['is_prod_env'] && $_smarty_tpl->tpl_vars['info']->value['is_prod_env'] == 1) {?>
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?c826cdaef09818aa7217bc9cebb7064f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    <?php }
echo '</script'; ?>
>



<?php echo '<script'; ?>
>
   require(['common/main']);
<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_939960412587f5bafef5ea3_52776510', "script");
?>


</body>
</html>
<?php }
/* {block "title"} */
class Block_2021420224587f5bafee50e7_61210146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_429650919587f5bafee6ce5_02587908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "main"} */
class Block_1389650078587f5bafee8751_98199087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "scriptLib"} */
class Block_1149651796587f5bafeeba55_47682268 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scriptLib"} */
/* {block "script"} */
class Block_939960412587f5bafef5ea3_52776510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "script"} */
}
