<div class="car-item">
    <button class="remove-button" onclick="location.href='../controller/deleteCar.php?index={$car.index}'">Remove car</button>
    <button class="modify-button" onclick="location.href='../view/modifyForm.php?index={$car.index}'">Modify car</button>
    <h1 class="model">{$car.model}</h1>
    <img class="car-img" src="{$car.imgSrc}" alt="{$car.model}">
    <p class="year">year: {$car.year}</p>
    <p class="price">price: {$car.price}$</p>
</div>
