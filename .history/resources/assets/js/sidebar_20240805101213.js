// sidebar.js
document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.querySelector('.sidebar');
    const color = sidebar.getAttribute('data-color');
    const activeColor = sidebar.getAttribute('data-active-color');

    if (color) {
        sidebar.style.backgroundColor = color;
    }

    if (activeColor) {
        const activeLinks = sidebar.querySelectorAll('.nav a.active');
        activeLinks.forEach(link => {
            link.style.backgroundColor = activeColor;
        });
    }
});