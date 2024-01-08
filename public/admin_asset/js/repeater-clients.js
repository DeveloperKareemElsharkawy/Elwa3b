$(document).ready(function () {

    var destinationsLoop = 1;
    $("body").on("click", "#add-destination", function () {
        console.log("add-destination");
        $(".destination-item-0").clone().appendTo(".destinations-group").removeClass("destination-item-0")
            .removeClass("d-none").addClass("destination-item-" + destinationsLoop)
            .find("input[type='text']").val("");

        $('.destination-item-' + destinationsLoop + ' .delete-destination-button').removeClass("d-none");

        $('.destination-item-' + destinationsLoop + ' .price').attr("name", "destinations[" + destinationsLoop + "][price]");
        $('.destination-item-' + destinationsLoop + ' .from_where').attr("name", "destinations[" + destinationsLoop + "][from_where]");
        $('.destination-item-' + destinationsLoop + ' .to_where').attr("name", "destinations[" + destinationsLoop + "][to_where]");

        destinationsLoop++;

        $(".percent_input").inputmask('Regex', {regex: "^[1-9][0-9]?$|^100$"});
    });

    $("body").on("click", ".delete-destination-button", function () {
        $(this).parent().remove();
    });
});


$(document).ready(function () {
    $("#percent_input").inputmask('Regex', {regex: "^[1-9][0-9]?$|^100$"});
    $("#car_capital").inputmask('Regex', {regex: "^[0-9]{1,8}(\\.\\d{1,2})?$"});
});
