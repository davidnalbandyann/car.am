<?php
/* Smarty version 5.3.1, created on 2024-07-18 14:21:54
  from 'file:carSection.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669908e2507354_81671262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7caf64b947d6d33984580938742455a0e1e5f8b' => 
    array (
      0 => 'carSection.tpl',
      1 => 1721305265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669908e2507354_81671262 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website-2/templates';
?><div class="car-item">
    <button class="remove-button" onclick="location.href='../controller/delete_car.php?index=<?php echo $_smarty_tpl->getValue('index');?>
'">Remove car</button>
    <button class="modify-button" onclick="location.href='../view/modify_form.php?index=<?php echo $_smarty_tpl->getValue('index');?>
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
