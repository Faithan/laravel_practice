document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".pop-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate");

                // Remove the class after the animation ends
                entry.target.addEventListener("animationend", () => {
                    entry.target.classList.remove("animate");
                });
            }
        });
    });

    elements.forEach((el) => observer.observe(el));
});