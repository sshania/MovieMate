const menuIcon = document.getElementById("menu-icon");
const menu = document.getElementById("menu");

menuIcon.addEventListener("click", () => {
    menuIcon.classList.toggle("active"); // Toggle animasi "X" pada tombol
    menu.classList.toggle("open"); // Menampilkan/menyembunyikan menu
});
