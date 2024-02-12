document.addEventListener("DOMContentLoaded", function () {
    let maxLength = 100;
    let descriptionElements = document.querySelectorAll(
        ".card-text.description"
    );

    descriptionElements.forEach(function (element) {
        let description = element.textContent.trim();
        if (description.length > maxLength) {
            let truncatedText = description.substring(0, maxLength) + "...";
            element.textContent = truncatedText;
        }
    });
});
