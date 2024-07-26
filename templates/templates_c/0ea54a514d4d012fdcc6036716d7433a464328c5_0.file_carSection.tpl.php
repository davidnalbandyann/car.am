<?php
/* Smarty version 5.3.1, created on 2024-07-23 15:11:43
  from 'file:carSection.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669fac0fd7b791_17358992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea54a514d4d012fdcc6036716d7433a464328c5' => 
    array (
      0 => 'carSection.tpl',
      1 => 1721740254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669fac0fd7b791_17358992 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website/templates';
?><div class="car-item">
    <button class="remove-button" onclick="location.href='../controllerSQL/deleteCar.php?index=<?php echo $_smarty_tpl->getValue('car')->getIndex();?>
'">Remove car</button>
    <button class="modify-button" onclick="location.href='../viewSQL/modifyForm.php?index=<?php echo $_smarty_tpl->getValue('car')->getIndex();?>
'">Modify car</button>
    <h1 class="model"><?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h1>
    <img class="car-img" src="<?php echo $_smarty_tpl->getValue('car')->getImgSrc();?>
" alt="<?php echo $_smarty_tpl->getValue('car')->getModel();?>
">
    <p class="year">Year: <?php echo $_smarty_tpl->getValue('car')->getYear();?>
</p>
    <p class="price">Price: <?php echo $_smarty_tpl->getValue('car')->getPrice();?>
$</p>
</div>
<?php }
}
