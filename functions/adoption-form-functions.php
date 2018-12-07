<?php

// Author: Kelsey Lorenz Amyotte

include '/var/www/students/team8/saving-paws/database/database.php';

function getAllCats() {
    $conn = db_connect();
    $result = $conn->query("SELECT Name, Id FROM Animals WHERE IsDog = 0");
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

function getAllDogs() {
    $conn = db_connect();
    $result = $conn->query("SELECT Name, Id FROM Animals WHERE IsDog = 1");
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

function processForm() {

    if (!isset($_POST["SurrenderedExplain"]) || empty($_POST["SurrenderedExplain"])) {
        $_POST["SurrenderedExplain"] = "-";
    }

    if (!isset($_POST["MoveExplain"]) || empty($_POST["VolunteerExplain"])) {
        $_POST["MoveExplain"] = "-";
    }

    if (!isset($_POST["AppliedBeforeExplain"]) || empty($_POST["AppliedBeforeExplain"])) {
        $_POST["AppliedBeforeExplain"] = "-";
    }


    if (!isset($_POST["EuthanizedExplain"]) || empty($_POST["EuthanizedExplain"])) {
        $_POST["EuthanizedExplain"] = "-";
    }

    if (!isset($_POST["FencedYardExplain"]) || empty($_POST["FencedYardExplain"])) {
        $_POST["FencedYardExplain"] = "-";
    }

    if (!isset($_POST["TiedUpExplain"]) || empty($_POST["TiedUpExplain"])) {
        $_POST["TiedUpExplain"] = "-";
    }

    if (!isset($_POST["GarageExplain"]) || empty($_POST["GarageExplain"])) {
        $_POST["GarageExplain"] = "-";
    }

    if (!isset($_POST["VolunteerExplain"]) || empty($_POST["VolunteerExplain"])) {
        $_POST["VolunteerExplain"] = "-";
    }

    if (!isset($_POST["HomeManager"]) || empty($_POST["HomeManager"])) {
        $_POST["HomeManager"] = "-";
    }

    if (!isset($_POST["HomeManagerPhone"]) || empty($_POST["HomeManagerPhone"])) {
        $_POST["HomeManagerPhone"] = "-";
    }

    $to = "lorenk45@uwosh.edu";
    $subject = "Application - " . $_POST["PetChosen1"] . " or " . $_POST["PetChosen2"];
    $message = "
        New Application
        General Information
        First Name: " . $_POST["FirstName"] . "
        Middle Initial: " . $_POST["MiddleInitial"] . "
        Last Name: " . $_POST["LastName"] . "
        Home Phone: " . $_POST["HomePhone"] . "
        Cell Phone: " . $_POST["CellPhone"] . "
        Street Address 1: " . $_POST["StreetAddress1"] . "
        Street Address 2: " . $_POST["StreetAddress2"] . "
        City: " . $_POST["City"] . "
        State: " . $_POST["State"] . "
        ZIP: " . $_POST["ZIP"] . "
        Email: " . $_POST["Email"] . "
        Occupation: " . $_POST["Occupation"] . "
        Employer Name: " . $_POST["EmployerName"] . "
        Employer Address: " . $_POST["EmployerAddress"] . "
        Property Information
        What type of home do you live in? " . $_POST["HomeType"] . "
        Do you rent/own your home? " . $_POST["RentOwn"] . "
        Landlord/Condo manager's name: " . $_POST["HomeManager"] . "
        Landlord/Condo manager's phone: " . $_POST["HomeManagerPhone"] . "
        Name(s) of additional occupants over 18: " . $_POST["AdditionalOccupants"] . "
        Names and ages of children (if applicable): " . $_POST["Children"] . "

        Pet Information
        First Pet Chosen: " . $_POST["PetChosen1"] . "
        Second Pet Chosen: " . $_POST["PetChosen2"] . "
        
        
        Have you ever had a companion animal before? " . $_POST["CompanionAnimal"] . "
        Have you ever had a pet euthanized? " . $_POST["Euthanized"] . "
        Please explain: " . $_POST["EuthanizedExplain"] . "
        If you have other pet(s) will they adjust to a new pet entering the household? " . $_POST["AdjustNewPet"] . "";


    if ($_POST["dog"] == true) {
        $message = $message . "Was your last dog obedience trained? " . $_POST["Obedience"] . "
        Who is the dog for? " . $_POST["WhoIsPetFor"] . "
        Dog will be kept: " . $_POST["IndoorsOutdoors"] . "
        Have you ever had to surrender a dog to a shelter? " . $_POST["Surrendered"] . "
        Please explain: " . $_POST["SurrenderedExplain"] . "
        Describe in detail the type of personality you're looking for in a dog: " . $_POST["Personality"] . "
        Why do you want this dog? " . $_POST["WhyDoYouWant"] . "
        Does any member in your house have allergies to dogs? " . $_POST["Allergies"] . "
        Is someone home during the day? " . $_POST["LastName"] . "
        How many hours each day will the dog be without human company? " . $_POST["HoursWithoutHumans"] . "
        Please explain: " . $_POST["HoursWithoutHumansExplain"] . "
        Do you have a completely fenced yard? " . $_POST["FencedYard"] . "
        Please explain: " . $_POST["FencedYardExplain"] . "
        Are there times when the dog will be tied up? " . $_POST["TiedUp"] . "
        Please explain: " . $_POST["TiedUpExplain"] . "
        Will the dog spend any time in the garage? " . $_POST["Garage"] . "
        Please explain: " . $_POST["GarageExplain"] . "
        If your dog/puppy is not housebroken, what method will you use to train it? " . $_POST["Housebroken"] . "
        Will you keep the dog up-to-date on vaccinations? " . $_POST["Vaccinations"] . "
        Will you be able to exercise the dog on a regular basis? " . $_POST["Exercise"] . "
        What is the method of exercise you plan to use? " . $_POST["ExerciseMethod"] . "
        Where will this dog be kept during the day? " . $_POST["KeptDuringDay"] . "
        Where will this dog be kept during the night? " . $_POST["KeptDuringNight"] . "
        If you drive a pickup truck, would you allow the dog to ride in the back? " . $_POST["Pickup"] . "
        If you go away for a few days, or on a vacation, who will take care of the dog? " . $_POST["Vacation"] . "
        If you move, will you take the dog with you? " . $_POST["Move"] . "
        Please explain: " . $_POST["MoveExplain"] . "
        How much are you willing to spend on medical bills for your dog? " . $_POST["MedicalBills"] . "
        What would you do if the vet bills go over this amount? " . $_POST["MedicalBillsGoOver"] . "
        Are you willing to take responsibility for this dog for the next 10 to 15 years? " . $_POST["Responsibility"] . "
        What is your plan if you are unable to care for this dog? " . $_POST["UnableToCare"] . "";
    }
    else {
        $message = $message . "
        Who is the cat for? " . $_POST["WhoIsPetFor"] . "
        Cat will be kept: " . $_POST["IndoorsOutdoors"] . "
        Have you ever had to surrender a pet to a shelter? " . $_POST["Surrendered"] . "
        Please explain: " . $_POST["SurrenderedExplain"] . "
        Describe in detail the type of personality you're looking for in a cat: " . $_POST["Personality"] . "
        Why do you want this cat? " . $_POST["WhyDoYouWant"] . "
        Does any member in your house have allergies to cats? " . $_POST["Allergies"] . "
        How many hours each day will the cat be without human company? " . $_POST["HoursWithoutHumans"] . "
        Please explain: " . $_POST["HoursWithoutHumansExplain"] . "
        Will you keep the cat up-to-date on vaccinations? " . $_POST["Vaccinations"] . "
        If you go away for a few days, or on a vacation, who will take care of the cat? " . $_POST["Vacation"] . "
        If you move, will you take the cat with you? " . $_POST["Move"] . "
        Please explain: " . $_POST["MoveExplain"] . "
        How much are you willing to spend on medical bills for your cat? " . $_POST["MedicalBills"] . "
        What would you do if the vet bills go over this amount? " . $_POST["MedicalBillsGoOver"] . "
        Are you willing to take responsibility for this cat for the next 15 to 20 years? " . $_POST["Responsibility"] . "
        What is your plan if you are unable to care for this cat? " . $_POST["UnableToCare"] . "";
    }

    $message = $message .
        "Have you ever applied to adopt from Saving Paws Animal Rescue in the past? " . $_POST["AppliedBefore"] . "
        When? " . $_POST["AppliedBeforeExplain"] . "
        Please list your current veterinarian and any vets you have used in the past 10 years. " . $_POST["VetClinicAndVet"] . "
        Current Veterinarian Phone: " . $_POST["VetPhone"] . "
        Reference 1's Name: " . $_POST["Reference1"] . "
        Reference 1's Phone and Availability: " . $_POST["ReferencePhone1"] . "
        Reference 1's Email: " . $_POST["ReferenceEmail1"] . "
        Reference 2's Name: " . $_POST["Reference2"] . "
        Reference 2's Phone and Availability: " . $_POST["ReferencePhone2"] . "
        Reference 2's Email: " . $_POST["ReferenceEmail2"] . "
        Have you ever volunteered for a shelter before? " . $_POST["Volunteer"] . "
        Where and for how long? " . $_POST["VolunteerExplain"];

    mail($to,$subject,$message);
    ?><div class="alert alert-success">Form successfully submitted!</div>
<?php }

function processFormIfIHadMoreTime() {
    if (isset($_POST["dog"])) {
        $catOrDog = 1;
        try {

            if (!isset($_POST["SurrenderedExplain"]) || empty($_POST["SurrenderedExplain"])) {
                $_POST["SurrenderedExplain"] = "-";
            }

            if (!isset($_POST["MoveExplain"]) || empty($_POST["VolunteerExplain"])) {
                $_POST["MoveExplain"] = "-";
            }

            if (!isset($_POST["AppliedBeforeExplain"]) || empty($_POST["AppliedBeforeExplain"])) {
                $_POST["AppliedBeforeExplain"] = "-";
            }


            if (!isset($_POST["EuthanizedExplain"]) || empty($_POST["EuthanizedExplain"])) {
                $_POST["EuthanizedExplain"] = "-";
            }

            if (!isset($_POST["FencedYardExplain"]) || empty($_POST["FencedYardExplain"])) {
                $_POST["FencedYardExplain"] = "-";
            }

            if (!isset($_POST["TiedUpExplain"]) || empty($_POST["TiedUpExplain"])) {
                $_POST["TiedUpExplain"] = "-";
            }

            if (!isset($_POST["GarageExplain"]) || empty($_POST["GarageExplain"])) {
                $_POST["GarageExplain"] = "-";
            }

            if (!isset($_POST["VolunteerExplain"]) || empty($_POST["VolunteerExplain"])) {
                $_POST["VolunteerExplain"] = "-";
            }

            if (!isset($_POST["HomeManager"]) || empty($_POST["HomeManager"])) {
                $_POST["HomeManager"] = "-";
            }

            if (!isset($_POST["HomeManagerPhone"]) || empty($_POST["HomeManagerPhone"])) {
                $_POST["HomeManagerPhone"] = "-";
            }

            /* todo: add/format list of companion animals */
            /* tables are in database but this 70-variable insert statement isn't working */
            $conn = db_connect();
            $insert = $conn->prepare("INSERT INTO Applications (FirstName,LastName,MiddleInitial,HomePhone,CellPhone,StreetAddress1," . // good
                "StreetAddress2,City,State,ZIP,Email,Occupation,EmployerName,EmployerAddress,HomeType,RentOwn,AdditionalOccupants,Children,PetChosen1,PetChosen2," . //good
                "Personality,CatOrDog,CompanionAnimal,Surrendered,SurrenderedExplain,Euthanized,EuthanizedExplain," . // good
                "OtherPetsAdjust,ObedienceTraining,WhyDoYouWant,SomeoneHome,HoursWithoutHumans,HoursWithoutHumansExplain," . // good
                "FencedYard,FencedYardExplain,TiedUp,TiedUpExplain,Garage,GarageExplain,Housebroken,Vaccinations,Exercise,ExerciseMethod," . // good
                "KeptDuringDay,KeptDuringNight,Pickup,Move,MoveExplain,Vacation,MedicalBills,MedicalBillsGoOver,AppliedBefore,AppliedBeforeWhen" . // good
                "Responsibility,UnableToCare,VetClinicAndVet,CurrentVetPhone,Reference1,Reference2,ReferencePhone1,ReferencePhone2," . // good
                "ReferenceEmail1,ReferenceEmail2,Volunteered,VolunteeredExplain,HomeManagerName,HomeManagerPhone,WhoIsPetFor,IndoorsOutdoors,VetPhone)" .
                " VALUES (:firstname,:lastname,:middleinitial,:homephone,:cellphone,:streetaddress1,:streetaddress2,:city,:state,:zip," . // good
                ":email,:occupation,:employername,:employeraddress,:hometype,:rentown,:additionaloccupants,:children," . // good
                ":petchosen1,:petchosen2,:personality,:isdog,:companionanimal,:surrendered,:surrenderedexplain, " . // good
                ":euthanized,:euthanizedexplain,:otherpetsadjust,:obediencetraining,:whydoyouwant,:someonehome,:hourswithouthumans,:hourswithouthumansexplain," . // good
                ":fencedyard,:fencedyardexplain,:tiedup,:tiedupexplain,:garage,:garageexplain,:housebroken,:vaccinations," . // good
                ":exercise,:exercisemethod,:keptduringday,:keptduringnight,:pickup,:move,:moveexplain,:vacation, " . // good
                ":medicalbills,:medicalbillsgoover,:appliedbefore,:appliedbeforewhen,:responsibility,:unabletocare,:vetclinicandvet,:currentvetphone," . // good
                ":ref1,:ref2,:refp1,:refp2,:refe1,:refe2,:volunteered,:volunteeredexplain,:hmname,:hmphone,:who,:inout,:vetphone)");
            $insert->bindParam(":firstname", $_POST["FirstName"], PDO::PARAM_STR);
            $insert->bindParam(":lastname", $_POST["LastName"], PDO::PARAM_STR);
            $insert->bindParam(":middleinitial", $_POST["MiddleInitial"], PDO::PARAM_STR);
            $insert->bindParam(":homephone", $_POST["HomePhone"], PDO::PARAM_STR);
            $insert->bindParam(":cellphone", $_POST["CellPhone"], PDO::PARAM_STR);
            $insert->bindParam(":streetaddress1", $_POST["StreetAddress1"], PDO::PARAM_STR);
            $insert->bindParam(":streetaddress2", $_POST["StreetAddress2"], PDO::PARAM_STR);
            $insert->bindParam(":city", $_POST["City"], PDO::PARAM_STR);
            $insert->bindParam(":state", $_POST["State"], PDO::PARAM_STR);
            $insert->bindParam(":zip", $_POST["ZIP"], PDO::PARAM_STR);
            $insert->bindParam(":email", $_POST["Email"], PDO::PARAM_STR);
            $insert->bindParam(":occupation", $_POST["Occupation"], PDO::PARAM_STR);
            $insert->bindParam(":employername", $_POST["EmployerName"], PDO::PARAM_STR);
            $insert->bindParam(":employeraddress", $_POST["EmployerAddress"], PDO::PARAM_STR);
            $insert->bindParam(":hometype", $_POST["HomeType"], PDO::PARAM_STR);
            $insert->bindParam(":rentown", $_POST["RentOwn"], PDO::PARAM_STR);
            $insert->bindParam(":additionaloccupants", $_POST["AdditionalOccupants"], PDO::PARAM_STR);
            $insert->bindParam(":children", $_POST["Children"], PDO::PARAM_STR);
            $insert->bindParam(":petchosen1", $_POST["PetChosen1"], PDO::PARAM_INT);
            $insert->bindParam(":petchosen2", $_POST["PetChosen2"], PDO::PARAM_INT);
            $insert->bindParam(":personality", $_POST["Personality"], PDO::PARAM_STR);
            $insert->bindParam(":isdog", $isDog, PDO::PARAM_STR);
            $insert->bindParam(":companionanimal", $_POST["CompanionAnimal"], PDO::PARAM_STR);
            $insert->bindParam(":surrendered", $_POST["Surrendered"], PDO::PARAM_STR);
            $insert->bindParam(":surrenderedexplain", $_POST["SurrenderedExplain"], PDO::PARAM_STR);
            $insert->bindParam(":euthanized", $_POST["Euthanized"], PDO::PARAM_STR);
            $insert->bindParam(":euthanizedexplain", $_POST["EuthanizedExplain"], PDO::PARAM_STR);
            $insert->bindParam(":otherpetsadjust", $_POST["AdjustNewPet"], PDO::PARAM_STR);
            $insert->bindParam(":obediencetraining", $_POST["Obedience"], PDO::PARAM_STR);
            $insert->bindParam(":whydoyouwant", $_POST["WhyDoYouWant"], PDO::PARAM_STR);
            $insert->bindParam(":someonehome", $_POST["SomeoneHome"], PDO::PARAM_STR);
            $insert->bindParam(":hourswithouthumans", $_POST["HoursWithoutHumans"], PDO::PARAM_STR);
            $insert->bindParam(":hourswithouthumansexplain", $_POST["HoursWithoutHumansExplain"], PDO::PARAM_STR);
            $insert->bindParam(":fencedyard", $_POST["FencedYard"], PDO::PARAM_STR);
            $insert->bindParam(":fencedyardexplain", $_POST["FencedYardExplain"], PDO::PARAM_STR);
            $insert->bindParam(":tiedup", $_POST["TiedUp"], PDO::PARAM_STR);
            $insert->bindParam(":tiedupexplain", $_POST["TiedUpExplain"], PDO::PARAM_STR);
            $insert->bindParam(":garage", $_POST["Garage"], PDO::PARAM_STR);
            $insert->bindParam(":garageexplain", $_POST["GarageExplain"], PDO::PARAM_STR);
            $insert->bindParam(":housebroken", $_POST["Housebroken"], PDO::PARAM_STR);
            $insert->bindParam(":vaccinations", $_POST["Vaccinations"], PDO::PARAM_STR);
            $insert->bindParam(":exercise", $_POST["Exercise"], PDO::PARAM_STR);
            $insert->bindParam(":exercisemethod", $_POST["ExerciseMethod"], PDO::PARAM_STR);
            $insert->bindParam(":keptduringday", $_POST["KeptDuringDay"], PDO::PARAM_STR);
            $insert->bindParam(":keptduringnight", $_POST["KeptDuringNight"], PDO::PARAM_STR); // new
            $insert->bindParam(":pickup", $_POST["Pickup"], PDO::PARAM_STR);
            $insert->bindParam(":move", $_POST["Move"], PDO::PARAM_STR);
            $insert->bindParam(":moveexplain", $_POST["MoveExplain"], PDO::PARAM_STR);
            $insert->bindParam(":vacation", $_POST["Vacation"], PDO::PARAM_STR);
            $insert->bindParam(":medicalbills", $_POST["MedicalBills"], PDO::PARAM_STR);
            $insert->bindParam(":medicalbillsgoover", $_POST["MedicalBillsGoOver"], PDO::PARAM_STR);
            $insert->bindParam(":appliedbefore", $_POST["AppliedBefore"], PDO::PARAM_STR);
            $insert->bindParam(":appliedbeforewhen", $_POST["AppliedBeforeExplain"], PDO::PARAM_STR);
            $insert->bindParam(":responsibility", $_POST["Responsibility"], PDO::PARAM_STR);
            $insert->bindParam(":unabletocare", $_POST["UnableToCare"], PDO::PARAM_STR);
            $insert->bindParam(":vetclinicandvet", $_POST["VetClinicAndVet"], PDO::PARAM_STR);
            $insert->bindParam(":currentvetphone", $_POST["CurrentVetPhone"], PDO::PARAM_STR);
            $insert->bindParam(":ref1", $_POST["Reference1"], PDO::PARAM_STR);
            $insert->bindParam(":ref2", $_POST["Reference2"], PDO::PARAM_STR); // new
            $insert->bindParam(":refp1", $_POST["ReferencePhone1"], PDO::PARAM_STR);
            $insert->bindParam(":refp2", $_POST["ReferencePhone2"], PDO::PARAM_STR);
            $insert->bindParam(":refe1", $_POST["ReferenceEmail1"], PDO::PARAM_STR);
            $insert->bindParam(":refe2", $_POST["ReferenceEmail2"], PDO::PARAM_STR);
            $insert->bindParam(":volunteered", $_POST["Volunteer"], PDO::PARAM_STR);
            $insert->bindParam(":volunteeredexplain", $_POST["VolunteerExplain"], PDO::PARAM_STR);
            $insert->bindParam(":hmname", $_POST["HomeManager"], PDO::PARAM_STR);
            $insert->bindParam(":hmphone", $_POST["HomeManagerPhone"], PDO::PARAM_STR);
            $insert->bindParam(":who", $_POST["WhoIsPetFor"], PDO::PARAM_STR);
            $insert->bindParam(":inout", $_POST["IndoorsOutdoors"], PDO::PARAM_STR);
            $insert->bindParam(":vetphone", $_POST["VetPhone"], PDO::PARAM_STR);
            $insert->execute();

            if ($insert) {
                echo 'ok';
            }
            else {
                echo 'err';
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }
    else {

    }
}

function formatMiddleInitial($middleInitial) {
    return strtoupper($middleInitial);
}

function formatPhone($phone) {
    $phone = str_replace("(","",$phone);
    $phone = str_replace(")","",$phone);
    $phone = str_replace("-","",$phone);
    return $phone;
}

function formatYesNo($response) {
    return $response == "Yes"?1:0;
}