<div class="car-item">
    <button class="remove-button" onclick="location.href='../controllerSQL/deleteCar.php?index={$car->getIndex()}'">Remove car</button>
    <button class="modify-button" onclick="location.href='../viewSQL/modifyForm.php?index={$car->getIndex()}'">Modify car</button>
    <h1 class="model">{$car->getModel()}</h1>
    <img class="car-img" src="{$car->getImgSrc()}" alt="{$car->getModel()}">
    <p class="year">Year: {$car->getYear()}</p>
    <p class="price">Price: {$car->getPrice()}$</p>
</div>
