window.addEventListener('load', () => {
    new WOW().init();

    let blockDays = document.querySelector(".timer__days");
    let blockHours = document.querySelector(".timer__hours");
    let blockMinutes = document.querySelector(".timer__minutes");
    let blockSeconds = document.querySelector(".timer__seconds");

    let date = new Date("01 Nov, 2025 11:30:00").getTime();

    setInterval(function () {
        let now = new Date().getTime();

        let distance = date - now;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        blockDays.innerHTML = days;
        blockHours.innerHTML = hours;
        blockMinutes.innerHTML = minutes;
        blockSeconds.innerHTML = seconds;
    }, 1000);

});