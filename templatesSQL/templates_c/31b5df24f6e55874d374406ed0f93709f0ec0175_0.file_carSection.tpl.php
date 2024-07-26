<?php
/* Smarty version 5.3.1, created on 2024-07-19 16:03:32
  from 'file:carSection.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669a7234155db2_87293089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b5df24f6e55874d374406ed0f93709f0ec0175' => 
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
function content_669a7234155db2_87293089 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website-psr/templates';
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
