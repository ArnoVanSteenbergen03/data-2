<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST["naam"]));
        $email = htmlspecialchars(trim($_POST["email"]));
        $tel = htmlspecialchars(trim($_POST["telefoon"]));
        $date = htmlspecialchars(trim($_POST["datum"]));
        $time = htmlspecialchars(trim($_POST["tijd"]));
        $people = htmlspecialchars(trim($_POST["personen"]));
        $wishes = htmlspecialchars(trim($_POST["wensen"]));
    }

    $errors = [];

    if (empty($name)) {
        $errors[] = "Naam is verplicht";
    }

    if (empty($email)) {
        $errors[] = "E-mail is verplicht";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $errors[] = "E-mail is niet correct ingevoerd";
    }

    if (empty($tel)) {
        $errors[] = "Telefoon is verplicht";
    } elseif (!preg_match('/^\d{10}$/', $tel)) { 
        //preg_match checkt of de pattern ('/^\d{10}$/' =  regular expression) klopt van de string ($tel)
        //'/^\d{10}$/' is een soort filter dat checkt op 10 nummers 
        // source (https://www.w3schools.com/php/php_regex.asp#:~:text=A%20regular%20expression%20is%20a,or%20a%20more%20complicated%20pattern.)
        $errors[] = "Het telefoonnummer moet precies 10 cijfers bevatten";
    }

    if (empty($date)) {
        $errors[] = "Datum is verplicht";
    }

    if (empty($time)) {
        $errors[] = "Tijd is verplicht";
    }

    if (empty($people)) {
        $errors[] = "Aantal personen is verplicht";
    } elseif (!filter_var($people, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
        $errors[] = "Aantal personen moet minimaal 1 zijn";
    }
    

    if (empty($wishes)) {
        $wishes = "Er zijn geen wensen meegegeven";
    }

    if (empty($errors)) {
        echo "<h1>reservering op naam: $name</h1>";
        echo "<p>reservering op email: $email</p>";
        echo "<p>reservering op telefoon nummer: $tel</p>";
        echo "<p>reservering op datum: $date</p>";
        echo "<p>reservering op tijdsstip: $time</p>";
        echo "<p>reservering voor: $people mensen</p>";
        echo "<p>extra wensen: $wishes</p>";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
    ?>
</body>

</html>