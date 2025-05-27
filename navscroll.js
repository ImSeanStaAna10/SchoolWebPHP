
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        if (window.scrollY > 50) { // If user scrolls 50px down
            header.classList.add("scrolled"); // Apply the scrolled effect
        } else {
            header.classList.remove("scrolled"); // Remove it when back to top
        }
    });
