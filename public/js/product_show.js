$(document).ready(function () {
    $(".quantity_input").on("input", function () {
        let value = parseInt($(this).val(), 10);
        let maxValue = 99; // You can adjust the maximum value as needed

        // Check if the entered value is greater than the maximum allowed
        if (value > maxValue) {
            $(this).val(maxValue);
        }
    });

    $(".quantity_input").on("keypress", function (event) {
        let allowedKeys = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57]; // Allowed key codes for numbers
        let keyCode = event.which;

        // Check if the pressed key is not in the allowedKeys array
        if (!allowedKeys.includes(keyCode)) {
            event.preventDefault();
        }
    });

    // Ensures that when the input field loses focus, the value will be set to one if it's empty or zero
    $(".quantity_input").on("blur", function () {
        let value = parseInt($(this).val(), 10);

        if (isNaN(value) || value <= 0) {
            $(this).val(1);
        }
    });
    $("#add_to_cart_button").click(function () {
        $("#add_to_cart_message").text("Item added to cart!");
    });

    $(".deduct_button").click(function () {
        $menu_id = $(this).prop("id").replace("deduct_", "");
        $new_val = Number($("#order_" + $menu_id).val()) - 1;
        if ($new_val >= 1) {
            $("#order_" + $menu_id).val($new_val);
        }
    });

    $(".add_button").click(function () {
        $menu_id = $(this).prop("id").replace("add_", "");
        $new_val = Number($("#order_" + $menu_id).val()) + 1;
        if ($new_val <= 99) {
            $("#order_" + $menu_id).val($new_val);
        }
    });
});
