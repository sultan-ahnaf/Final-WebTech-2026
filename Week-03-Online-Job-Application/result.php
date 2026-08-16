 <?php



$applicant_id = $_GET["id"] ?? "";
$name = $_GET["name"] ?? "";
$cv = $_GET["cv"] ?? "";




$request_id = $_REQUEST["id"] ?? "";
$request_name = $_REQUEST["name"] ?? "";

?>

<!DOCTYPE html>
<html>

<head>

    <title>Application Successful</title>

</head>

<body>

<h1>=================================</h1>

<h2>APPLICATION SUCCESSFUL</h2>

<h1>=================================</h1>

<p>
    <strong>Applicant ID:</strong>
    <?php echo htmlspecialchars($applicant_id); ?>
</p>

<p>
    <strong>Name:</strong>
    <?php echo htmlspecialchars($name); ?>
</p>

<p>
    <strong>Email:</strong>
    Information received successfully.
</p>

<p>
    <strong>Applicant ID from REQUEST:</strong>
    <?php echo htmlspecialchars($request_id); ?>
</p>

<p>
    <strong>Name from REQUEST:</strong>
    <?php echo htmlspecialchars($request_name); ?>
</p>

<p>
    <strong>Uploaded CV:</strong>
    <?php echo htmlspecialchars($cv); ?>
</p>

<p>
    Application submitted successfully.
</p>

<h3>Download/View CV</h3>

<a href="uploads/<?php echo urlencode($cv); ?>" target="_blank">
    View Uploaded CV
</a>

</body>

</html>