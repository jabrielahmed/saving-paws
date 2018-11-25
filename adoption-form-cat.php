<?php
include("functions/adoption-form-functions.php");
include("shared/header.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css">
<link rel="stylesheet" href="css/adoption-form.css">
<?php include("shared/navbar.php");
?>
<div class="container">
    <div class="row">
        <h1>Cat Adoption Form</h1>
    </div>
    <form action="/adoption-form-cat.php" id="adoption-form-cat" onSubmit="return validateForm(this)" method="post">
        <div class="row">
            <fieldset>
                <legend>General Information</legend>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="first-name">First Name:</label><br>
                        <input required type="text" class="form-control" name="first-name" id="first-name"><br>
                    </div>

                    <div class="col-xs-12 col-md-2">
                        <label class="label-question" for="middle-initial">Middle Initial:</label><br>
                        <input type="text" class="form-control" name="middle-initial" id="middle-initial"><br>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <label class="label-question" for="last-name">Last Name:</label><br>
                        <input required type="text" class="form-control" name="last-name" id="last-name"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="home-phone">Home Phone:</label><br>
                        <input type="text" class="form-control bfh-phone" data-format="(ddd) ddd-dddd" name="home-phone" id="home-phone"><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="cell-phone">Cell Phone:</label><br>
                        <input required type="text" class="form-control bfh-phone" data-format="(ddd) ddd-dddd" name="cell-phone" id="cell-phone"><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label class="label-question" for="street-address1">Street Address 1:</label><br>
                        <input required type="text" class="form-control" name="street-address1" id="street-address1"><br>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="street-address2">Street Address 2:</label><br>
                        <input type="text" class="form-control" name="street-address2" id="street-address2"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <label class="label-question" for="city">City:</label><br>
                        <input required type="text" class="form-control" name="city" id="city"><br>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <label class="label-question" for="state">State:</label><br>
                        <select required name="state" id="state" class="form-control bfh-states" data-country="US" data-state="WI"></select>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <label class="label-question" for="zip">ZIP Code:</label><br>
                        <input required type="zip" class="form-control" name="zip" id="zip"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <label class="label-question" for="email">Email:</label><br>
                        <input required type="text" class="form-control" name="email" id="email"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <label class="label-question" for="occupation">Occupation:</label><br>
                        <input type="text" class="form-control" name="occupation" id="occupation"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="employer-name">Employer Name:</label><br>
                        <input required type="text" class="form-control" name="employer-name" id="employer-name"><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label class="label-question" for="employer-address">Employer Address:</label><br>
                        <input type="text" class="form-control" name="employer-address" id="employer-address"><br>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Property Information</legend>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="label-question">What type of home do you live in?</label><br>
                        <div class="form-radio-home-type">
                            <input type="radio" name="home-type" class="form-check-label" id="home-type-house" value="House" />
                            <label for="home-type-house">House</label>
                            <input type="radio" name="home-type" class="form-check-label" id="home-type-duplex" value="Duplex" />
                            <label for="home-type-duplex">Duplex</label>
                            <input type="radio" name="home-type" class="form-check-label" id="home-type-apartment" value="Apartment" />
                            <label for="home-type-apartment">Apartment</label>
                            <input type="radio" name="home-type" class="form-check-label" id="home-type-condo" value="House" />
                            <label for="home-type-condo">Condo</label>
                            <input type="radio" name="home-type" class="form-check-label" id="home-type-mobile-home" value="Duplex" />
                            <label for="home-type-mobile-home">Mobile Home</label><br>
                        </div>
                        <br>
                        <div class="form-radio-additional-home-info">
                            <label class="label-question">Do you rent/own your home?</label><br>
                            <input type="radio" name="rent-own-parents" class="form-check-label" id="rent-own-parents-rent" value="Rent" />
                            <label for="rent-own-parents-rent">Rent</label>
                            <input type="radio" name="rent-own-parents" class="form-check-label" id="rent-own-parents-own" value="Own" />
                            <label for="rent-own-parents-own">Own</label>
                            <input type="radio" name="rent-own-parents" class="form-check-label" id="rent-own-parents-parents" value="Lives with parents" />
                            <label for="rent-own-parents-parents">Live with parents</label><br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row additional-rent-questions">
                    <div class="col-xs-12 col-md-3">
                        <label for="home-manager-name" class="label-question">Landlord/Condo manager's name:</label><br>
                        <input type="text" class="form-control" name="home-manager-name" id="home-manager-name"><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label for="home-manager-phone" class="label-question">Landlord/Condo manager's phone:</label><br>
                        <input type="text" class="form-control" name="home-manager-phone" id="home-manager-phone"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-7">
                        <label for="adult-occupants" class="label-question">Name(s) of additional occupants over 18:</label><br>
                        <input type="text" class="form-control" name="adult-occupants" id="adult-occupants"><br>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <label for="child-occupants" class="label-question">Names and ages of children (if applicable):</label><br>
                        <input type="text" class="form-control" name="child-occupants" id="child-occupants"><br>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Pet Information</legend>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="cats-chosen" class="label-question">Cat(s) Chosen:</label>
                        First Choice:
                        <select id="cats-chosen">
                            <?php foreach (getAllCats() as $cat) { ?>
                                <option value="<?=$cat["Id"]?>"><?=$cat["Name"]?></option>
                            <?php } ?>
                        </select>

                        Second Choice:
                        <select>
                            <?php foreach (getAllCats() as $cat) { ?>
                                <option value="<?=$cat["Id"]?>"><?=$cat["Name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-12">
                        <br><label for="describe-personality" class="label-question">Describe in detail the type of personality you're looking for in a cat:</label><br>
                        <textarea name="describe-personality" class="form-control" id="describe-personality"></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-radio-who-is-cat-for">
                            <label class="label-question">Who is the cat for?</label><br>
                            <input type="radio" name="who-is-cat-for" class="form-check-label" id="who-is-cat-for-me" value="Me" />
                            <label for="who-is-cat-for-me">Me</label>
                            <input type="radio" name="who-is-cat-for" class="form-check-label" id="who-is-cat-for-family" value="My family" />
                            <label for="who-is-cat-for-family">My family</label>
                            <input type="radio" name="who-is-cat-for" class="form-check-label" id="who-is-cat-for-relative" value="Relative" />
                            <label for="who-is-cat-for-relative">Relative</label>
                            <input type="radio" name="who-is-cat-for" class="form-check-label" id="who-is-cat-for-friend" value="Friend" />
                            <label for="who-is-cat-for-friend">Friend</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-radio-indoors-outdoors">
                            <label class="label-question">Cat will be kept:</label><br>
                            <input type="radio" name="indoors-outdoors" class="form-check-label" id="indoors-outdoors-indoors" value="Me" />
                            <label for="indoors-outdoors-indoors">Indoors</label>
                            <input type="radio" name="indoors-outdoors" class="form-check-label" id="indoors-outdoors-outdoors" value="Outdoors" />
                            <label for="indoors-outdoors-outdoors">Outdoors</label>
                            <input type="radio" name="indoors-outdoors" class="form-check-label" id="indoors-outdoors-both" value="Both" />
                            <label for="indoors-outdoors-both">Both indoors and outdoors</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-radio-companion">
                            <label class="label-question">Have you ever had a companion animal before?</label><br>
                            <input type="radio" name="companion" class="form-check-label" id="companion-yes" value="Yes" />
                            <label for="companion-yes">Yes</label>
                            <input type="radio" name="companion" class="form-check-label" id="companion-no" value="No" />
                            <label for="companion-no">No</label><br>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                            <label class="label-question">Have you ever had to surrender a pet to a shelter?</label><br>
                            <input type="radio" name="surrendered" class="form-check-label" id="surrender-yes" value="Yes" />
                            <label for="surrender-yes">Yes</label>
                            <input type="radio" name="surrendered" class="form-check-label" id="surrender-no" value="No" />
                            <label for="surrender-no">No</label><br>
                            <div class="explain">
                                <label class="label-question" for="surrendered-pet-explain">Please explain:</label><br>
                                <input type="text" class="form-control" name="surrendered-pet-explain" id="surrendered-pet-explain"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-euthanized">
                        <label class="label-question" for="euthanized">Have you ever had a pet euthanized?</label><br>
                        <input type="radio" name="euthanized" class="form-check-label" id="euthanized-yes" value="Yes" />
                        <label for="euthanized-yes">Yes</label>
                        <input type="radio" name="euthanized" class="form-check-label" id="euthanized-no" value="No" />
                        <label for="euthanized-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="euthanized-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="euthanized-pet-explain" id="euthanized-pet-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-why">
                        <label class="label-question" for="why">Why do you want this cat?</label><br>
                        <textarea class="form-control" name="why" id="why"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-allergies">
                        <label class="label-question" for="allergies">Does any member in your house have allergies to cats?</label><br>
                        <input type="radio" name="allergies" class="form-check-label" id="allergies-yes" value="Yes" />
                        <label for="allergies-yes">Yes</label>
                        <input type="radio" name="allergies" class="form-check-label" id="allergies-no" value="No" />
                        <label for="allergies-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-hours">
                        <label class="label-question" for="hours">How many hours each day will the cat be without human company?</label><br>
                        <input type="text" class="form-control" name="hours" id="hours"><br>
                        <label class="label-question" for="hours-explain">Please explain:</label><br>
                        <textarea type="text" class="form-control" name="hours-explain" id="hours-explain"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-vaccinations">
                        <label class="label-question" for="vaccinations">Will you keep the cat up-to-date on vaccinations?</label><br>
                        <input type="radio" name="vaccinations" class="form-check-label" id="vaccinations-yes" value="Yes" />
                        <label for="allergies-yes">Yes</label>
                        <input type="radio" name="vaccinations" class="form-check-label" id="vaccinations-no" value="No" />
                        <label for="allergies-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-vacation">
                        <label class="label-question" for="vacation">If you go away for a few days, or on a vacation, who will take care of the cat?</label><br>
                        <textarea type="text" class="form-control" name="vacation" id="vacation"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-move">
                        <label class="label-question" for="move">If you move, will you take the cat with you?</label><br>
                        <input type="radio" name="move" class="form-check-label" id="move-yes" value="Yes" />
                        <label for="move-yes">Yes</label>
                        <input type="radio" name="move" class="form-check-label" id="move-no" value="No" />
                        <label for="move-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="move-explain">Please explain:</label><br>
                            <input type="text" class="form-control" name="move-explain" id="move-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-declaw">
                        <label class="label-question" for="declaw">Will you declaw this cat/kitten?</label><br>
                        <input type="radio" name="declaw" class="form-check-label" id="declaw-yes" value="Yes, front only" />
                        <label for="declaw-yes">Yes</label>
                        <input type="radio" name="declaw" class="form-check-label" id="declaw-no" value="No" />
                        <label for="declaw-no">No</label><br>
                        <div class="disclaimer">
                            <p>*Please Note: By signing this form, I agree that I will NOT four-paw declaw. Saving Paws Animal Rescue
                                does not allow four-paw declawing of any cat adopted from this organization.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-medical-bills">
                        <label class="label-question" for="medical-bills">How much are you willing to spend on medical bills for your cat?</label><br>
                        <input type="text" class="form-control" name="medical-bills" id="medical-bills" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-bills">
                        <label class="label-question" for="bills">What would you do if the vet bills go over this amount?</label><br>
                        <textarea class="form-control" name="bills" id="bills" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-applied">
                        <label class="label-question" for="applied">Have you ever applied to adopt from Saving Paws Animal Rescue in the past?</label><br>
                        <input type="radio" name="applied" class="form-check-label" id="applied-yes" value="Yes" />
                        <label for="applied-yes">Yes</label>
                        <input type="radio" name="applied" class="form-check-label" id="applied-no" value="No" />
                        <label for="applied-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="applied-explain">When?</label><br>
                            <input type="text" class="form-control" name="applied-explain" id="applied-explain"><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-responsibility">
                        <label class="label-question" for="responsibility">Are you willing to take responsibility for this cat for the next 15 to 20 years?</label><br>
                        <input type="radio" name="responsibility" class="form-check-label" id="responsibility-yes" value="Yes" />
                        <label for="responsibility-yes">Yes</label>
                        <input type="radio" name="responsibility" class="form-check-label" id="responsibility-no" value="No" />
                        <label for="responsibility-no">No</label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-unable">
                        <label class="label-question" for="unable">What is your plan if you are unable to care for this cat?</label><br>
                        <textarea class="form-control" name="unable" id="unable" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-vets">
                        <label class="label-question"">Please list your current veterinarian and any vets you have used in the past 10 years.</label><br>
                        <label for="past-vets">Vet Clinic and Vet Name(s): </label>
                        <textarea class="form-control" name="past-vets" id="past-vets" ></textarea><br>
                        <label for="vet-phone">Current Veterinarian Phone: </label>
                        <input type="text" class="form-control bfh-phone" data-format="(ddd) ddd-dddd" name="vet-phone" id="vet-phone"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="form-vets col-xs-12">
                        <label class="label-question"">Please provide two non-related references: </label><br>
                        <div class="col-3">
                            <label for="ref-name">Name: </label>
                            <input class="form-control" name="ref-name1" id="ref-name1" ><br>
                            <input class="form-control" name="ref-name2" id="ref-name2" ><br>
                        </div>
                        <div class="col-3">
                            <label for="ref-num">Number and Best Time to Call: </label>
                            <input class="form-control" name="ref-num1" id="ref-num1" ><br>
                            <input class="form-control" name="ref-num2" id="ref-num2" ><br>
                        </div>
                        <div class="col-4">
                            <label for="ref-email">Email: </label>
                            <input class="form-control" name="ref-email1" id="ref-email1" ><br>
                            <input class="form-control" name="ref-email2" id="ref-email2" ><br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-applied">
                        <label class="label-question" for="volunteer">Have you ever volunteered for a shelter before?</label><br>
                        <input type="radio" name="volunteer" class="form-check-label" id="volunteer-yes" value="Yes" />
                        <label for="volunteer-yes">Yes</label>
                        <input type="radio" name="volunteer" class="form-check-label" id="volunteer-no" value="No" />
                        <label for="volunteer-no">No</label><br>
                        <div class="explain">
                            <label class="label-question" for="volunteer-explain">Where and for how long?</label><br>
                            <input type="text" class="form-control" name="volunteer-explain" id="volunteer-explain"><br>
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
                        <p>When adopting a cat or puppy, please bring a collar and leash along when picking up your new pet.</p>
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
