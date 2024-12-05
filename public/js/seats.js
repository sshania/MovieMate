const container = document.querySelector(".main-container");
const takenContainer = document.querySelector(".taken");
const inputContainer = document.querySelector("input[name='seat_number']");
const priceContainer = document.getElementById("price");
const inputPriceContainer = document.querySelector("input[name='sub_total']");
const seatContainer = document.getElementById("seat-count");
const inputSeatContainer = document.querySelector("input[name='seat-total']");

const selectedSeats = [];
let priceCount = 0;
let seatCount = 0;

container.addEventListener("click", (e) => {
    if (e.target.classList.contains("seat")) {
        e.target.classList.toggle("select");
        const seatChosen = e.target.textContent;
        const price = 60000;
        const n = selectedSeats.indexOf(seatChosen);

        if (n === -1){
            selectedSeats.push(seatChosen);
            priceCount += price;
            seatCount += 1;
        } else{
            const seatIndex = selectedSeats.indexOf(seatChosen);
            selectedSeats.splice(seatIndex, 1);
            priceCount -= price;
            seatCount -= 1;
        }

        seatChosenIdx();
        totalPrice();
        totalSeats();
    }
});

function seatChosenIdx(){
    const seatsText = selectedSeats.length > 0 ? selectedSeats.join(" ") : "";
    takenContainer.textContent = seatsText;
    inputContainer.value = seatsText;
}

function totalPrice(){
    priceContainer.textContent = priceCount.toLocaleString();
    inputPriceContainer.value = priceCount.toLocaleString();
}

function totalSeats(){
    seatContainer.textContent = seatCount.toLocaleString();
    inputSeatContainer.value = seatCount.toLocaleString();
}
