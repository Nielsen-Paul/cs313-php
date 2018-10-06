
var totalPrice = 0;
var cardCount = 0;
var sockCount = 0;
var ballCount = 0;
var catchCount = 0;
var jerseyCount = 0;

function onload() {
    totalPrice = 0;
}

function rookieCardCount() {
    cardCount++;
    addItem(2000, cardCount);
}

function bloodySockCount() {
    sockCount++;
    addItem(50000, sockCount);
}

function asteriskBallCount() {
    ballCount++;
    addItem(1500000, ballCount);
}

function theCatchCount() {
    catchCount++;
    addItem(400, catchCount);
}

function wornJerseyCount() {
    jerseyCount++;
    addItem(300, jerseyCount);
}


function addItem(itemPrice, count) {

    if (count % 2 == 1) {
        totalPrice = totalPrice + itemPrice;
        document.getElementById("totalPrice").innerHTML = "Total Price: $" + totalPrice;
    } else {
        totalPrice = totalPrice - itemPrice;
        document.getElementById("totalPrice").innerHTML = "Total Price: $" + totalPrice;
    }
}
