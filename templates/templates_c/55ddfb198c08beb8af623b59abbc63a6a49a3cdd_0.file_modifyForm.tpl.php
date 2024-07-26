<?php
/* Smarty version 5.3.1, created on 2024-07-18 15:16:50
  from 'file:../templates/modifyForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669915c27845e0_37968563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ddfb198c08beb8af623b59abbc63a6a49a3cdd' => 
    array (
      0 => '../templates/modifyForm.tpl',
      1 => 1721308390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669915c27845e0_37968563 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/car-selling-website-2/templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Modify Car</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="branding">
                <h1>Modify Car</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <form method="post" action="../controller/modify_car.php">
            <input type="hidden" id="index" name="index" value="<?php echo $_smarty_tpl->getValue('index');?>
">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="<?php echo $_smarty_tpl->getValue('car')['model'];?>
" required>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="<?php echo $_smarty_tpl->getValue('car')['price'];?>
" required>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" value="<?php echo $_smarty_tpl->getValue('car')['year'];?>
" required>
            <label for="img">Img(URL):</label>
            <input type="text" id="img" name="img" value="<?php echo $_smarty_tpl->getValue('car')['imgSrc'];?>
" required>
            <button type="submit">Modify Car</button>
        </form>
        <a class="back-link" href="index.php">Back to List</a>
    </div>
</body>
</html>
<?php }
}
