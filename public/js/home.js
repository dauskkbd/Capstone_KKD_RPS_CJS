$(document).ready(function () {
    // on click event function that changes pictures whenever one of the four images were clicked
    $(".image-1").click(function () {
        $(".main-image").attr("src", $(this).attr("src"));
    });
    $(".image-2").click(function () {
        $(".main-image").attr("src", $(this).attr("src"));
    });
    $(".image-3").click(function () {
        $(".main-image").attr("src", $(this).attr("src"));
    });
    $(".image-4").click(function () {
        $(".main-image").attr("src", $(this).attr("src"));
    });

    //prevents user from typing a number larger than 9
    $(".order-number").on("input", function () {
        let value = parseInt($(this).val(), 10);
        let maxValue = 9;
        if (value > maxValue) {
            $(this).val(maxValue);
        }
    });

    //ensures that the user only types numbers and not letters
    $(".order-number").on("keypress", function (event) {
        let allowedKeys = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8];
        let keyCode = event.which;
        if (!allowedKeys.includes(keyCode)) {
            event.preventDefault();
        }
    });

    //ensures that when the input form is out of focus, the value zero will be displayed again
    $(".order-number").on("blur", function () {
        if ($(this).val().trim() === "") {
            $(this).val("0");
        }
    });

    //click event function that decreases the value of the input form
    $(".decrease-btn").click(function () {
        let inputField = $(this).siblings(".order-number");
        let value = parseInt(inputField.val(), 10);
        if (value > 0) {
            inputField.val(value - 1);
        }
    });

    //click event function that increases the value of the input form
    $(".increase-btn").click(function () {
        let inputField = $(this).siblings(".order-number");
        let value = parseInt(inputField.val(), 10);
        let maxValue = 9;
        if (value < maxValue) {
            inputField.val(value + 1);
        }
    });
});
