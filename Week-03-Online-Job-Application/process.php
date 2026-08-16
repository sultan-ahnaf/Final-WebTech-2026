<?php


if ($_SERVER["REQUEST_METHOD"] != "POST") {

    echo "Invalid request.";
    exit;
}




$applicant_id = trim($_POST["applicant_id"] ?? "");
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$password = $_POST["password"] ?? "";
$gender = $_POST["gender"] ?? "";
$job_position = $_POST["job_position"] ?? "";
$qualification = trim($_POST["qualification"] ?? "");
$address = trim($_POST["address"] ?? "");




$errors = [];



if ($applicant_id == "") {
    $errors[] = "Applicant ID is required.";
}



if ($name == "") {
    $errors[] = "Name is required.";
}



if ($email == "") {

    $errors[] = "Email is required.";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = "Please enter a valid email address.";
}


if ($phone == "") {

    $errors[] = "Phone number is required.";

} elseif (!preg_match("/^[0-9]{11}$/", $phone)) {

    $errors[] = "Phone number must contain exactly 11 digits.";
}



if ($password == "") {

    $errors[] = "Password is required.";

} elseif (strlen($password) < 6) {

    $errors[] = "Password must contain at least 6 characters.";
}



if ($gender == "") {

    $errors[] = "Please select your gender.";
}



if ($job_position == "") {

    $errors[] = "Please select a job position.";
}


if ($qualification == "") {

    $errors[] = "Qualification is required.";
}



if ($address == "") {

    $errors[] = "Address is required.";
}




if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] == UPLOAD_ERR_NO_FILE) {

    $errors[] = "Please upload your CV.";

} else {

    $cv = $_FILES["cv"];

    $fileName = $cv["name"];
    $fileSize = $cv["size"];
    $fileTmpName = $cv["tmp_name"];


    $fileExtension = strtolower(
        pathinfo($fileName, PATHINFO_EXTENSION)
    );

   
    $allowedExtensions = ["pdf", "doc", "docx"];

  
    if (!in_array($fileExtension, $allowedExtensions)) {

        $errors[] = "Only PDF, DOC, and DOCX files are allowed.";
    }

    if ($fileSize > 2 * 1024 * 1024) {

        $errors[] = "CV file size must not exceed 2 MB.";
    }
}




if (!empty($errors)) {

    echo "<h1>Application Failed!</h1>";

    foreach ($errors as $error) {

        echo "<p>$error</p>";
    }

    echo '<br>';
    echo '<a href="index.php">Go Back</a>';

    exit;
}




$uploadFolder = "uploads/";



$newFileName = time() . "_" . basename($fileName);



$destination = $uploadFolder . $newFileName;



if (!move_uploaded_file($fileTmpName, $destination)) {

    echo "<h1>Application Failed!</h1>";
    echo "<p>Unable to upload the CV.</p>";
    exit;
}




$resultURL = "result.php?"
    . "id=" . urlencode($applicant_id)
    . "&name=" . urlencode($name)
    . "&cv=" . urlencode($newFileName);

header("Location: $resultURL");

exit;

?> 