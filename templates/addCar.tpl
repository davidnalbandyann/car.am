<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
    <link rel="stylesheet" href="styles.css">
    <script src="view/script.js"></script>

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
        <form method="post" action="../controllerSQL/addCar.php">
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
        {if $errors|@count > 0}
            <div class="errors">
                {foreach from=$errors item=error}
                    <p>{$error|escape:'html'}</p>
                {/foreach}
            </div>
        {/if}        
        <a class="back-link" href="index.php">Back to List</a>
    </div>
</body>
</html>
