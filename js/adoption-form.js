// Author: Kelsey Lorenz Amyotte
// regex taken from various parts of the internet, otherwise everything else is mine

$( document ).ready(function() {

    $(".explain").hide();
    $(".additional-rent-questions").hide();
    $(".previous-pets").hide();

    previousPet();

    // revealing new input on "if yes" questions
    $('input:radio[name="RentOwn"]').change(function() {

        if($(this).val() == "Rent") {
            //reveal next label/input pair
            $(".additional-rent-questions").show();
        }
        else {
            $(".additional-rent-questions").hide();
        }
    });

    $('input:radio[name="Move"]').change(function() {

        if($(this).val() == "No") {
            //reveal next label/input pair
            $(this).siblings(".explain").show();
        }
        else {
            $(this).siblings(".explain").hide();
        }
    });

    $('input:radio[name="Euthanized"], input:radio[name="Surrendered"], input:radio[name="FencedYard"], input:radio[name="Garage"], input:radio[name="TiedUp"], input:radio[name="AppliedBefore"], input:radio[name="Volunteer"]').change(function() {

        if($(this).val() == "Yes") {
            //reveal next label/input pair
            $(this).siblings(".explain").show();
        }
        else {
            $(this).siblings(".explain").hide();
        }
    });

    $('input:radio[name="CompanionAnimal"]').change(function() {

        if($(this).val() == "Yes") {
            //reveal next label/input pair
            $(".previous-pets").show();
        }
        else {
            $(".previous-pets").hide();
        }
    });
});

function previousPet() {
    var count = $(".previous-pet").length;
    $(".form-previous-pets").append(
        "<div class='previous-pet'>" +
        "<input type='text' class='form-control previous-pet-item type-of-animal' name='previous-pet-type-" + count + "' id='previous-pet-type-" + count + "'>" +
        "<input type='text' class='form-control previous-pet-item previous-pet-name' name='previous-pet-name-" + count + "' id='previous-pet-name-" + count + "'>" +
        "<div class='previous-pet-sex previous-pet-radio'>" +
        "<input type='radio' class='form-check-label' name='previous-pet-sex-" + count + "' value='Male' id='previous-pet-sex-m" + count + "'>" +
        "<label for='previous-pet-sex-m" + count + "'>M</label>" +
        "<input type='radio' class='form-check-label' value='Female' name='previous-pet-sex-"  + count + "' id='previous-pet-sex-f" + count + "'>" +
        "<label for='previous-pet-sex-f" + count + "'>F</label>" +
        "</div>" +
        "<div class='spay-neuter previous-pet-radio'>" +
        "<input type='radio' class='form-check-label pet-spay-neuter' name='previous-pet-spay" + count + "' value='Male' id='previous-pet-spay-y" + count + "'>" +
        "<label for='previous-pet-spay-y" + count + "'>Yes</label>" +
        "<input type='radio' class='form-check-label pet-spay-neuter' value='Female' name='previous-pet-spay" + count + "' id='previous-pet-spay-n" + count + "'>" +
        "<label for='previous-pet-spay-n" + count + "'>No</label>" +
        "</div>" +
        "<input type='text' class='form-control previous-pet-item previous-pet-age' name='previous-pet-age" + count + "' id='previous-pet-age" + count + "'>" +
        "<input type='radio' class='form-check-label pet-have' name='previous-pet-have" + count + "' value='Male' id='previous-pet-have-y" + count + "'>" +
        "<label for='previous-pet-have-y" + count + "'>Yes</label>" +
        "<input type='radio' class='form-check-label pet-have' value='Female' name='previous-pet-have" + count + "' id='previous-pet-have-n" + count + "'>" +
        "<label for='previous-pet-have-n" + count + "'>No</label>" +
        "<input type='text' class='form-control previous-pet-item previous-pet-why' name='previous-pet-why0' id='previous-pet-why" + count + "'>" +
        "<span class='glyphicon glyphicon-plus previous-pet-add' onclick='previousPet()'></span>"
    );

    if (count != 0) {
        $("<span class='glyphicon glyphicon-minus previous-pet-minus' onclick='deletePreviousPet(this)'></span>").appendTo(".previous-pet:last-child");
    }
    $("</div>").appendTo(".form-previous-pets");
}


function deletePreviousPet(pet) {
    $(pet).parent().remove();
}

function validateForm() {
    var zip = $('#zip').val();
    var middleInitial = $('#middle-initial').val();
    var email = $('#email').val();

    var zipRegEx = /^[0-9]{5}(?:-[0-9]{4})?$/i;
    var initialRegEx = /^[A-Z]$/i;
    var emailRegEx = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (!initialRegEx.test(middleInitial)) {
        $("#middle-initial").removeClass("is-valid").addClass("is-invalid");
        $("#middle-initial").focus();
        return false;
    }
    else {
        $("#middle-initial").removeClass("is-invalid").addClass("is-valid");
    }
    if (!zipRegEx.test(zip)) {
        $("#zip").removeClass("is-valid").addClass("is-invalid");
        $("#zip").focus();
        return false;
    }
    else {
        $("#zip").removeClass("is-invalid").addClass("is-valid");
    }
    if (!emailRegEx.test(email)) {
        $("#email").removeClass("is-valid").addClass("is-invalid");
        $("#email").focus();
        return false;
    }
    else {
        $("#email").removeClass("invalid").addClass("valid");
    }
    return true;
}