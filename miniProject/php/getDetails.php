<?php
$host = "localhost";
$user="root";
$password="";
$dbname = "carsdb";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['load'])){

$query = "SELECT * FROM `products`";
$stmt = $conn->prepare($query);
$stmt->execute();

while ($row = $stmt->fetchObject()) {
    $data["product_id"] = $row->product_id;
    $data["product_name"] = $row->product_name;
    $data["rate"] = $row->rate;
    $data["availability"] = $row->availability;
    $data["type"] = $row->type;
    $data["description"] = $row->description;
    $data["branch_id"] = $row->branch_id;
    $result[] = $data;
}
// Encoding array in JSON format
if (!isset($result))
    echo "Failed";
else
    echo(json_encode($result));
} else {
    echo "Failed";
}
$conn = null;
exit;