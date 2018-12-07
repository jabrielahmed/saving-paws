<?php
include("functions/adoption-form-functions.php");
include("shared/header.php");
// Author: Kelsey Lorenz Amyotte
// have some form helper classes from bootstrap
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css">
<link rel="stylesheet" href="css/adoption-form.css">
<?php include("shared/navbar.php"); ?>
<?php if (isset($_POST) && !empty($_POST)) {
    
    $_POST["dog"] = true;
    processForm();
}?>
<div class="container">
    <div class="row">
        <h1>Dog Adoption Form</h1>
    </div>
    <form id="adoption-form.php" onSubmit="return validateForm(this)" method="post">
        <div class="row">
            <fieldset>
                <legend>General Information</legend>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="first-name">First Name:</label><br>
                        <input required type="text" class="form-control" name="FirstName" id="first-name"><br>
                    </div>

                    <div class="col-xs-12 col-md-2">
                        <label class="label-question" for="middle-initial">Middle Initial:</label><br>
                        <input type="text" class="form-control" name="MiddleInitial" id="middle-initial"><br>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <label class="label-question" for="last-name">Last Name:</label><br>
                        <input required type="text" class="form-control" name="LastName" id="last-name"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="home-phone">Home Phone:</label><br>
                        <input type="text" class="form-control bfh-phone" data-format="(ddd) ddd-dddd" name="HomePhone" id="home-phone"><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="cell-phone">Cell Phone:</label><br>
                        <input required type="text" class="form-control bfh-phone" data-format="(ddd) ddd-dddd" name="CellPhone" id="cell-phone"><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label class="label-question" for="street-address1">Street Address 1:</label><br>
                        <input required type="text" class="form-control" name="StreetAddress1" id="street-address1"><br>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="street-address2">Street Address 2:</label><br>
                        <input type="text" class="form-control" name="StreetAddress2" id="street-address2"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <label class="label-question" for="city">City:</label><br>
                        <input required type="text" class="form-control" name="City" id="city"><br>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <label class="label-question" for="state">State:</label><br>
                        <select required name="State" id="state" class="form-control bfh-states" data-country="US" data-state="WI">
                            <option value="">Select a State</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <label class="label-question" for="zip">ZIP Code:</label><br>
                        <input required type="text" class="form-control" name="ZIP" id="zip"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <label class="label-question" for="email">Email:</label><br>
                        <input required type="text" class="form-control" name="Email" id="email"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <label class="label-question" for="occupation">Occupation:</label><br>
                        <input type="text" class="form-control" name="Occupation" id="occupation"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="employer-name">Employer Name:</label><br>
                        <input required type="text" class="form-control" name="EmployerName" id="employer-name"><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="employer-address">Employer Address:</label><br>
                        <input type="text" class="form-control" name="EmployerAddress" id="employer-address"><br>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Property Information</legend>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="label-question">What type of home do you live in?</label><br>
                        <div class="form-radio-home-type">
                            <input type="radio" name="HomeType" class="form-check-label" id="home-type-house" value="House" />
                            <label for="home-type-house">House</label>
                            <input type="radio" name="HomeType" class="form-check-label" id="home-type-duplex" value="Duplex" />
                            <label for="home-type-duplex">Duplex</label>
                            <input type="radio" name="HomeType" class="form-check-label" id="home-type-apartment" value="Apartment" />
                            <label for="home-type-apartment">Apartment</label>
                            <input type="radio" name="HomeType" class="form-check-label" id="home-type-condo" value="House" />
                            <label for="home-type-condo">Condo</label>
                            <input type="radio" name="HomeType" class="form-check-label" id="home-type-mobile-home" value="Duplex" />
                            <label for="home-type-mobile-home">Mobile Home</label><br>
                        </div>
                        <br>
                        <div class="form-radio-additional-home-info">
                            <label class="label-question">Do you rent/own your home?</label><br>
                            <input type="radio" name="RentOwn" class="form-check-label" id="rent-own-parents-rent" value="Rent" />
                            <label for="rent-own-parents-rent">Rent</label>
                            <input type="radio" name="RentOwn" class="form-check-label" id="rent-own-parents-own" value="Own" />
                            <label for="rent-own-parents-own">Own</label>
                            <input type="radio" name="RentOwn" class="form-check-label" id="rent-own-parents-parents" value="Lives with parents" />
                            <label for="rent-own-parents-parents">Live with parents</label><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row additional-rent-questions">
                    <div class="col-xs-12 col-md-3">
                        <label for="home-manager-name" class="label-question">Landlord/Condo manager's name:</label><br>
                        <input type="text" class="form-control" name="HomeManager" id="home-manager-name"><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label for="home-manager-phone" class="label-question">Landlord/Condo manager's phone:</label><br>
                        <input type="text" class="form-control" name="HomeManagerPhone" id="home-manager-phone"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <label for="adult-occupants" class="label-question">Name(s) of additional occupants over 18:</label><br>
                        <input type="text" class="form-control" name="AdditionalOccupants" id="adult-occupants"><br>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <label for="child-occupants" class="label-question">Names and ages of children (if applicable):</label><br>
                        <input type="text" class="form-control" name="Children" id="child-occupants"><br>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Pet Information</legend>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="dogs-chosen" class="label-question">Cat(s) Chosen:</label>
                        First Choice:
                        <select name="PetChosen1" id="dogs-chosen">
                            <?php foreach (getAllDogs() as $dog) { ?>
                                <option value="<?=$dog["Name"]?>"><?=$dog["Name"]?></option>
                            <?php } ?>
                        </select>

                        Second Choice:
                        <select name="PetChosen2">
                            <?php foreach (getAllDogs() as $dog) { ?>
                                <option value="<?=$dog["Name"]?>"><?=$dog["Name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-12">
                        <br><label for="describe-personality" class="label-question">Describe in detail the type of personality you're looking for in a dog:</label><br>
                        <textarea name="Personality" class="form-control" id="describe-personality"></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-radio-who-is-dog-for">
                            <label class="label-question">Who is the dog for?</label><br>
                            <input type="radio" name="WhoIsPetFor" class="form-check-label" id="who-is-dog-for-me" value="Me" />
                            <label for="who-is-dog-for-me">Me</label>
                            <input type="radio" name="WhoIsPetFor" class="form-check-label" id="who-is-dog-for-family" value="My family" />
                            <label for="who-is-dog-for-family">My family</label>
                            <input type="radio" name="WhoIsPetFor" class="form-check-label" id="who-is-dog-for-relative" value="Relative" />
                            <label for="who-is-dog-for-relative">Relative</label>
                            <input type="radio" name="WhoIsPetFor" class="form-check-label" id="who-is-dog-for-friend" value="Friend" />
                            <label for="who-is-dog-for-friend">Friend</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-radio-indoors-outdoors">
                            <label class="label-question">Dog will be kept:</label><br>
                            <input type="radio" name="IndoorsOutdoors" class="form-check-label" id="indoors-outdoors-indoors" value="Indoors" />
                            <label for="indoors-outdoors-indoors">Indoors</label>
                            <input type="radio" name="IndoorsOutdoors" class="form-check-label" id="indoors-outdoors-outdoors" value="Outdoors" />
                            <label for="indoors-outdoors-outdoors">Outdoors</label>
                            <input type="radio" name="IndoorsOutdoors" class="form-check-label" id="indoors-outdoors-both" value="Both" />
                            <label for="indoors-outdoors-both">Both indoors and outdoors</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-radio-companion">
                            <label class="label-question">Have you ever had a companion animal before?</label><br>
                            <input type="radio" name="CompanionAnimal" class="form-check-label" id="companion-yes" value="Yes" />
                            <label for="companion-yes">Yes</label>
                            <input type="radio" name="CompanionAnimal" class="form-check-label" id="companion-no" value="No" />
                            <label for="companion-no">No</label><br>
                        </div>
                    </div>
                </div>
                <div class="row previous-pets">
                    <div class="col-xs-12">
                        <label class="type-of-animal previous-pet-label label-question">Type of Animal</label>
                        <label class="pet-name previous-pet-label label-question">Pet's Name</label>
                        <label class="previous-pet-sex previous-pet-label label-question">Sex</label>
                        <label class="pet-spay-neuter previous-pet-label label-question">Spay/Neuter</label>
                        <label class="pet-age previous-pet-label label-question">Age</label>
                        <label class="pet-still-have previous-pet-label label-question">Still have?</label>
                        <label class="pet-still-have-if-no-why previous-pet-label label-question">If no, why not?</label>
                        <div class="form-previous-pets">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-surrender">
                            <label class="label-question">Have you ever had to surrender a dog to a shelter?</label><br>
                            <input type="radio" name="Surrendered" class="form-check-label" id="surrender-yes" value="Yes" />
                            <label for="surrender-yes">Yes</label>
                            <input type="radio" name="Surrendered" class="form-check-label" id="surrender-no" value="No" />
                            <label for="surrender-no">No</label><br>
                            <div class="explain">
                                <label class="label-question" for="surrendered-pet-explain">Please explain:</label><br>
                                <input type="text" class="form-control" name="SurrenderedExplain" id="surrendered-pet-explain"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-euthanized">
                        Have you ever had a pet euthanized?<br>
                        <input type="radio" name="Euthanized" class="form-check-label" id="euthanized-yes" value="Yes" />
                        <label for="euthanized-yes">Yes</label>
                        <input type="radio" name="Euthanized" class="form-check-label" id="euthanized-no" value="No" />
                        <label for="euthanized-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="euthanized-pet-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="EuthanizedExplain" id="euthanized-pet-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-adjust">
                        If you have other pet(s) will they adjust to a new pet entering the household?<br>
                        <input type="radio" name="AdjustNewPet" class="form-check-label" id="adjust-yes" value="Yes" />
                        <label for="adjust-yes">Yes</label>
                        <input type="radio" name="AdjustNewPet" class="form-check-label" id="adjust-no" value="No" />
                        <label for="adjust-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-obedience">
                        Was your last dog obedience trained?<br>
                        <input type="radio" name="Obedience" class="form-check-label" id="obedience-yes" value="Yes" />
                        <label for="obedience-yes">Yes</label>
                        <input type="radio" name="Obedience" class="form-check-label" id="obedience-no" value="No" />
                        <label for="obedience-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-why">
                        <label class="label-question" for="why">Why do you want this dog?</label><br>
                        <textarea class="form-control" name="WhyDoYouWant" id="why"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-allergies">
                        Does any member in your house have allergies to dogs?<br>
                        <input type="radio" name="Allergies" class="form-check-label" id="allergies-yes" value="Yes" />
                        <label for="allergies-yes">Yes</label>
                        <input type="radio" name="Allergies" class="form-check-label" id="allergies-no" value="No" />
                        <label for="allergies-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-someone-home">
                        Is someone home during the day?<br>
                        <input type="radio" name="SomeoneHome" class="form-check-label" id="someone-home-yes" value="Yes" />
                        <label for="someone-home-yes">Yes</label>
                        <input type="radio" name="SomeoneHome" class="form-check-label" id="someone-home-no" value="No" />
                        <label for="someone-home-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-hours">
                        <label class="label-question" for="hours">How many hours each day will the dog be without human company?</label><br>
                        <input type="text" class="form-control" name="HoursWithoutHumans" id="hours"><br>
                        <label class="label-question" for="hours-explain">Please explain:</label><br>
                        <textarea class="form-control" name="HoursWithoutHumansExplain" id="hours-explain"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-fence">
                        Do you have a completely fenced yard?<br>
                        <input type="radio" name="FencedYard" class="form-check-label" id="fence-yes" value="Yes" />
                        <label for="fence-yes">Yes</label>
                        <input type="radio" name="FencedYard" class="form-check-label" id="fence-no" value="No" />
                        <label for="fence-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="fence-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="FencedYardExplain" id="fence-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-tied">
                        Are there times when the dog will be tied up?<br>
                        <input type="radio" name="TiedUp" class="form-check-label" id="tied-yes" value="Yes" />
                        <label for="tied-yes">Yes</label>
                        <input type="radio" name="TiedUp" class="form-check-label" id="tied-no" value="No" />
                        <label for="tied-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="tied-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="TiedUpExplain" id="tied-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-garage">
                        Will the dog spend any time in the garage?<br>
                        <input type="radio" name="Garage" class="form-check-label" id="garage-yes" value="Yes" />
                        <label for="garage-yes">Yes</label>
                        <input type="radio" name="Garage" class="form-check-label" id="garage-no" value="No" />
                        <label for="garage-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="garage-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="GarageExplain" id="garage-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-housebroken">
                        <label class="label-question" for="housebroken">If your dog/puppy is not housebroken, what method will you use to train it?</label><br>
                        <textarea class="form-control" name="Housebroken" id="housebroken"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-vaccinations">
                        Will you keep the dog up-to-date on vaccinations?<br>
                        <input type="radio" name="Vaccinations" class="form-check-label" id="vaccinations-yes" value="Yes" />
                        <label for="vaccinations-yes">Yes</label>
                        <input type="radio" name="Vaccinations" class="form-check-label" id="vaccinations-no" value="No" />
                        <label for="vaccinations-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-exercise">
                        Will you be able to exercise the dog on a regular basis?<br>
                        <input type="radio" name="Exercise" class="form-check-label" id="exercise-yes" value="Yes" />
                        <label for="exercise-yes">Yes</label>
                        <input type="radio" name="Exercise" class="form-check-label" id="exercise-no" value="No" />
                        <label for="exercise-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-method-exercise">
                        <label class="label-question" for="method-exercise">What is the method of exercise you plan to use?</label><br>
                        <textarea class="form-control" name="ExerciseMethod" id="method-exercise"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-kept-during-day">
                        <label class="label-question" for="kept-during-day">Where will this dog be kept during the day?</label><br>
                        <input type="text" class="form-control" name="KeptDuringDay" id="kept-during-day" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-kept-during-night">
                        <label class="label-question" for="kept-during-night">Where will this dog be kept during the night?</label><br>
                        <input type="text" class="form-control" name="KeptDuringNight" id="kept-during-night" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-pickup">
                        If you drive a pickup truck, would you allow the dog to ride in the back?<br>
                        <input type="radio" name="Pickup" class="form-check-label" id="pickup-yes" value="Yes" />
                        <label for="pickup-yes">Yes</label>
                        <input type="radio" name="Pickup" class="form-check-label" id="pickup-no" value="No" />
                        <label for="pickup-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-vacation">
                        <label class="label-question" for="vacation">If you go away for a few days, or on a vacation, who will take care of the dog?</label><br>
                        <textarea class="form-control" name="Vacation" id="vacation"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-move">
                        If you move, will you take the dog with you?<br>
                        <input type="radio" name="Move" class="form-check-label" id="move-yes" value="Yes" />
                        <label for="move-yes">Yes</label>
                        <input type="radio" name="Move" class="form-check-label" id="move-no" value="No" />
                        <label for="move-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="move-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="MoveExplain" id="move-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-medical-bills">
                        <label class="label-question" for="medical-bills">How much are you willing to spend on medical bills for your dog?</label><br>
                        <input type="text" class="form-control" name="MedicalBills" id="medical-bills" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-bills">
                        <label class="label-question" for="bills">What would you do if the vet bills go over this amount?</label><br>
                        <textarea class="form-control" name="MedicalBillsGoOver" id="bills" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-applied">
                        Have you ever applied to adopt from Saving Paws Animal Rescue in the past?<br>
                        <input type="radio" name="AppliedBefore" class="form-check-label" id="applied-yes" value="Yes" />
                        <label for="applied-yes">Yes</label>
                        <input type="radio" name="AppliedBefore" class="form-check-label" id="applied-no" value="No" />
                        <label for="applied-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="applied-explain">When?</label><br>
                            <input type="text" class="form-control" name="AppliedBeforeExplain" id="applied-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-responsibility">
                        Are you willing to take responsibility for this dog for the next 10 to 15 years?<br>
                        <input type="radio" name="Responsibility" class="form-check-label" id="responsibility-yes" value="Yes" />
                        <label for="responsibility-yes">Yes</label>
                        <input type="radio" name="Responsibility" class="form-check-label" id="responsibility-no" value="No" />
                        <label for="responsibility-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-unable">
                        <label class="label-question" for="unable">What is your plan if you are unable to care for this dog?</label><br>
                        <textarea class="form-control" name="UnableToCare" id="unable" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-vets">
                        <label class="label-question">Please list your current veterinarian and any vets you have used in the past 10 years.</label><br>
                        <label for="past-vets">Vet Clinic and Vet Name(s): </label>
                        <textarea class="form-control" name="VetClinicAndVet" id="past-vets" ></textarea><br>
                        <label for="vet-phone">Current Veterinarian Phone: </label>
                        <input type="text" class="form-control bfh-phone" data-format="(ddd) ddd-dddd" name="VetPhone" id="vet-phone"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="form-vets col-xs-12">
                        <label class="label-question">Please provide two non-related references: </label><br>
                        <div class="col-3">
                            Name: 
                            <input class="form-control" name="Reference1" id="ref-name1" ><br>
                            <input class="form-control" name="Reference2" id="ref-name2" ><br>
                        </div>
                        <div class="col-3">
                            Number and Best Time to Call: 
                            <input class="form-control" name="ReferencePhone1" id="ref-num1" ><br>
                            <input class="form-control" name="ReferencePhone2" id="ref-num2" ><br>
                        </div>
                        <div class="col-4">
                            Email: 
                            <input class="form-control" name="ReferenceEmail1" id="ref-email1" ><br>
                            <input class="form-control" name="ReferenceEmail2" id="ref-email2" ><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-applied">
                        Have you ever volunteered for a shelter before?<br>
                        <input type="radio" name="Volunteer" class="form-check-label" id="volunteer-yes" value="Yes" />
                        <label for="volunteer-yes">Yes</label>
                        <input type="radio" name="Volunteer" class="form-check-label" id="volunteer-no" value="No" />
                        <label for="volunteer-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="volunteer-explain">Where and for how long?</label><br>
                            <input type="text" class="form-control" name="VolunteerExplain" id="volunteer-explain"><br>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Additional Information</legend>
                <div class="row">
                    <div class="col-xs-12">
                        <p>If you rent, a copy of your lease and addendum for pets must be presented to Saving Paws Animal Rescue.</p>
                        <br>
                        <br>
                        <p>By submitting this adoption application, you agree to provide vaccinations, health checkups and any additional veterinary care, by a qualified veterinarian, on a yearly or as-needed basis.</p>
                        <br>
                        <p>By submitting this adoption application, you agree to have this pet spayed or neutered if he/she is not already sterilized. A deposit may be required for non-sterilized animals, which will
                        be returned to you upon receipt of a signed letter from your veterinarian indicating date of spay/neuter surgery.</p>
                        <br>
                        <p>Your adoption fee is a donation to Saving Paws Animal Rescue and is nonrefundable.</p><br>
                        <p>When adopting a dog or puppy, please bring a collar and leash along when picking up your new pet.</p>
                        <br>
                        <p>By submitting this form, I/we acknowledge that the information on this form is true and correct. I/we agree to all
                            provisions indicated on this form. I/we understand that any misrepresentation of fact may result in Saving Paws
                            Animal Rescue Inc. refusing adoption privileges to me/us. If my/our request for adoption is approved and later
                            Saving Paws Animal Rescue Inc. discovers the above information is not true or correct, this application becomes
                            null and void, and because of my breach of contract, Saving Paws Animal Rescue Inc. reserves the right to remove
                            the adopted pet from my home, and I will be held responsible for any associated legal costs incurred as part of said
                            reclamation process. In order to ensure the best homes for our rescued pets, we reserve the right to deny any
                            adoption application</p><br>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </fieldset>
        </div>
    </form>
</div>
<script src="js/adoption-form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>
<?php include('shared/footer.php'); ?>
