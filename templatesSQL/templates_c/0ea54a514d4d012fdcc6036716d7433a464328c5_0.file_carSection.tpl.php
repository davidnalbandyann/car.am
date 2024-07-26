<?php
/* Smarty version 5.3.1, created on 2024-07-19 16:04:51
  from 'file:carSection.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669a72838bd225_18053576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea54a514d4d012fdcc6036716d7433a464328c5' => 
    array (
      0 => 'carSection.tpl',
      1 => 1721397790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669a72838bd225_18053576 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website/templates';
?><div class="car-item">
    <button class="remove-button" onclick="location.href='../controller/deleteCar.php?index=<?php echo $_smarty_tpl->getValue('car')['index'];?>
'">Remove car</button>
    <button class="modify-button" onclick="location.href='../view/modifyForm.php?index=<?php echo $_smarty_tpl->getValue('car')['index'];?>
'">Modify car</button>
    <h1 class="model"><?php echo $_smarty_tpl->getValue('car')['model'];?>
</h1>
    <img class="car-img" src="<?php echo $_smarty_tpl->getValue('car')['imgSrc'];?>
" alt="<?php echo $_smarty_tpl->getValue('car')['model'];?>
">
    <p class="year">year: <?php echo $_smarty_tpl->getValue('car')['year'];?>
</p>
    <p class="price">price: <?php echo $_smarty_tpl->getValue('car')['price'];?>
$</p>
</div>
<?php }
}
