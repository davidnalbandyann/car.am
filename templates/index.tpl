<!DOCTYPE html>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addCar.php">Add New Car</a></li>
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
            {foreach from=$cars item=car}
                <li>
                    {include file='carSection.tpl' car=$car}
                </li>
            {/foreach}
            </ul>
        </div>
    </main>
</body>
</html>
