// import './bootstrap';

// NProgress loading bar
document.addEventListener('DOMContentLoaded', function () {
    if (typeof NProgress !== 'undefined') {
        NProgress.start();
        window.onload = function () {
            NProgress.done();
        };
    }
});

// Set initial theme on page load
document.addEventListener('DOMContentLoaded', function () {
    if (
        localStorage.theme === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    updateDarkModeIcons();
});

// Update icons based on theme
function updateDarkModeIcons() {
    const isDark = document.documentElement.classList.contains('dark');
    const icon = document.getElementById('darkModeIcon');
    const iconMobile = document.getElementById('darkModeIconMobile');
    if (icon) {
        icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
    }
    if (iconMobile) {
        iconMobile.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
    }
}

// Toggle dark mode and save preference
window.setDarkMode = function () {
    const html = document.documentElement;
    const isDark = html.classList.toggle('dark');
    localStorage.theme = isDark ? 'dark' : 'light';
    updateDarkModeIcons();
};















// Pop-in animation observer
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".pop-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate");
                entry.target.addEventListener("animationend", () => {
                    entry.target.classList.remove("animate");
                });
            }
        });
    });

    elements.forEach((el) => observer.observe(el));
});