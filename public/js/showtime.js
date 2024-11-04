const container = document.querySelector(".movie-page");

container.addEventListener("click", (e) => {
    console.log("debug");
    const selectDate = e.target.closest('.showtime-date');
    const selectHour = e.target.closest('.showtime-hour');

    if (selectDate) {
        selectDate.classList.toggle("select");
    }

    if (selectHour) {
        selectHour.classList.toggle("select");
    }
});
