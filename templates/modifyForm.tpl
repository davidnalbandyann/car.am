<!DOCTYPE html>
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
        <form method="post" action="../controllerSQL/modifyCar.php">
            <input type="hidden" id="index" name="index" value="{$index}">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" value="{$car->getModel()}" required>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="{$car->getPrice()}" required>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" value="{$car->getYear()}" required>
            <label for="img">Img(URL):</label>
            <input type="text" id="img" name="img" value="{$car->getImgSrc()}" required>
            <button type="submit">Modify Car</button>
        </form>
        <a class="back-link" href="index.php">Back to List</a>
    </div>
</body>
</html>
