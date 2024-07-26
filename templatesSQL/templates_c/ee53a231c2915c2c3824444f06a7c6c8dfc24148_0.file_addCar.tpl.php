<?php
/* Smarty version 5.3.1, created on 2024-07-19 16:04:59
  from 'file:../templates/addCar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669a728bc56a80_02244149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee53a231c2915c2c3824444f06a7c6c8dfc24148' => 
    array (
      0 => '../templates/addCar.tpl',
      1 => 1721397259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669a728bc56a80_02244149 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website/templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
    <link rel="stylesheet" href="styles.css">
    <?php echo '<script'; ?>
 src="view/script.js"><?php echo '</script'; ?>
>

</head>
<body>
    <header>
        <div class="container">
            <div class="branding">
                <h1>Add New Car</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <form method="post" action="../controller/addCarToJson.php">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model"required>
            <label for="price">Price:</label>
            <input type="number" min = "0" step="1" id="price" name="price"  required>
            <label for="year">Year:</label>
            <input type="number" min="1970" max="2024" id="year" name="year" required>
            <label for="img">Img(URL):</label>
            <input type="text" id="img" name="img" required>
            <button type="submit">Add Car</button>
        </form>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')) > 0) {?>
            <div class="errors">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
                    <p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('error'), ENT_QUOTES, 'UTF-8', true);?>
</p>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>        
        <a class="back-link" href="index.php">Back to List</a>
    </div>
</body>
</html>
<?php }
}
