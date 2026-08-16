 <?php


$studentName = "Ahnaf Tahmid Imroj";
$studentID = "22-48147-2";


$choice = 1;
$quantity = 6;


switch ($choice) {
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;

    default:
        $foodItem = "Invalid Food Item";
        $price = 0;
        break;
}


$subtotal = $price * $quantity;


if ($subtotal >= 30) {
    $discountRate = 20;
} elseif ($subtotal >= 20) {
    $discountRate = 10;
} else {
    $discountRate = 0;
}


$discountAmount = ($subtotal * $discountRate) / 100;


$finalBill = $subtotal - $discountAmount;


echo "================================<br>";
echo "       UNIVERSITY CAFETERIA<br>";
echo "================================<br><br>";

echo "Student Name : " . $studentName . "<br>";
echo "Student ID   : " . $studentID . "<br>";
echo "Food Item    : " . $foodItem . "<br>";
echo "Price        : $" . $price . "<br>";
echo "Quantity     : " . $quantity . "<br><br>";

echo "Ordered Items:<br>";

for ($i = 1; $i <= $quantity; $i++) {
    echo "Item " . $i . ": " . $foodItem . "<br>";
}

echo "<br>";

echo "Subtotal     : $" . $subtotal . "<br>";
echo "Discount     : " . $discountRate . "%<br>";
echo "Discount Amt : $" . $discountAmount . "<br>";
echo "Final Bill   : $" . $finalBill . "<br><br>";

echo "Thank you for visiting!<br>";

echo "================================";

?>
