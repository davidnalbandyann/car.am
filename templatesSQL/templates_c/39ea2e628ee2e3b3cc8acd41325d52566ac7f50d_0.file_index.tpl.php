<?php
/* Smarty version 5.3.1, created on 2024-07-18 15:01:26
  from 'file:../templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669912260099e4_63997833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ea2e628ee2e3b3cc8acd41325d52566ac7f50d' => 
    array (
      0 => '../templates/index.tpl',
      1 => 1721305399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carSection.tpl' => 1,
  ),
))) {
function content_669912260099e4_63997833 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website-2/templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Car Selling Website</title>
    <link rel="stylesheet" href="../view/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="branding">
                <h1>Car Selling Website</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="view/index.php">Home</a></li>
                    <li><a href="add_car.php">Add New Car</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <section class="showcase">
            <div class="container">
                <h1>Welcome to Our Car Selling Website</h1>
                <p>Find your dream car today!</p>
            </div>
        </section>
        <div class="cars">
            <ul class="cars-container">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cars'), 'car');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('car')->value) {
$foreach0DoElse = false;
?>
                <li>
                    <?php $_smarty_tpl->renderSubTemplate('file:carSection.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('car'=>$_smarty_tpl->getValue('car'),'index'=>$_smarty_tpl->getValue('index')), (int) 0, $_smarty_current_dir);
?>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul
        </div>
    </main>
</body>
</html>
<?php }
}
