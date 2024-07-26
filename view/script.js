function getCarsFromJSON(filename){
    const cars = JSON.parse(filename);
    return cars;
}


function createCarSection(car, index) {
    return `
        <div class="car-item">
            <button class="remove-button" onclick="location.href='deleteCar.php?index=${index}'">Remove car</button>
            <button class="modify-button" onclick="location.href='modifyForm.php?index=${index}'">Modify car</button>
            <h1 class="model">${car.model}</h1>
            <img class="car-img" src="${car.imgSrc}" alt="${car.model}">
            <p class="year">year: ${car.year}</p>
            <p class="price">price: ${car.price}$</p>
        </div>
    `;
}

function displayCarData(cars) {
    const container = document.querySelector('.cars-container');
    container.innerHTML = '';
    cars.forEach((car, index) => {
        const carItem = document.createElement('li');
        carItem.innerHTML = createCarSection(car, index);
        container.appendChild(carItem);
    });
}