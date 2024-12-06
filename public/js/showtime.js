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

document.addEventListener('DOMContentLoaded', () => {
    const showtimeHours = document.querySelectorAll('.showtime-hour');
    const chooseSeatButton = document.getElementById('choose-seat-button');

    function resetSelection() {
        showtimeHours.forEach(el => el.classList.remove('active'));
        chooseSeatButton.classList.add('disabled');
        chooseSeatButton.href = "javascript:void(0)";
    }

    showtimeHours.forEach(showtime => {
        showtime.addEventListener('click', () => {
            resetSelection();

            const cinemaId = showtime.getAttribute('data-cinema-id');
            const movieId = showtime.getAttribute('data-movie-id');
            const showtimeId = showtime.getAttribute('data-showtime-id');
            const showtimeHour = showtime.getAttribute('data-showtime-hour');
            const showtimeDate = showtime.getAttribute('data-showtime-date');

            showtime.classList.add('active');

            chooseSeatButton.href = `/seats?cinema_id=${cinemaId}&showtime_date=${encodeURIComponent(showtimeDate)}&showtime_hour=${encodeURIComponent(showtimeHour)}`;
            chooseSeatButton.classList.remove('disabled');
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const showtimeHours = document.querySelectorAll('.showtime-hour');
    const chooseSeatButton = document.getElementById('choose-seat-button');

    function resetSelection() {
        showtimeHours.forEach(el => el.classList.remove('active'));
        chooseSeatButton.classList.add('disabled');
        chooseSeatButton.href = "javascript:void(0)";
    }

    showtimeHours.forEach(showtime => {
        showtime.addEventListener('click', () => {
            resetSelection();

            const cinemaId = showtime.getAttribute('data-cinema-id');
            const movieId = showtime.getAttribute('data-movie-id');
            const showtimeId = showtime.getAttribute('data-showtime-id');
            const showtimeHour = showtime.getAttribute('data-showtime-hour');
            const showtimeDate = showtime.getAttribute('data-showtime-date');

            showtime.classList.add('active');

            chooseSeatButton.href = `/seats?cinema_id=${cinemaId}&movie_id=${movieId}&showtime_id=${showtimeId}&showtime_date=${encodeURIComponent(showtimeDate)}&showtime_hour=${encodeURIComponent(showtimeHour)}`;

            chooseSeatButton.classList.remove('disabled');
        });
    });
});

document.getElementById('seat').addEventListener('submit', function (e) {
    const seatCount = document.getElementById('seat-count').innerText;
    if (!seatCount) {
        e.preventDefault();
        alert("Please select at least one seat.");
    }
});
