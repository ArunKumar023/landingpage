document.addEventListener("DOMContentLoaded", function () {
    const ctaButton = document.querySelector(".cta-button");
    const contactSection = document.getElementById("contact");

    if (ctaButton && contactSection) {
        ctaButton.addEventListener("click", function (e) {
            e.preventDefault();
            const contactSectionPosition = contactSection.offsetTop;

            window.scrollTo({
                top: contactSectionPosition,
                behavior: "smooth",
            });
        });
    }
});
