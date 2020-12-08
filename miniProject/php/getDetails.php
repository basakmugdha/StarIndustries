<?php
$host = "localhost";
$user="root";
$password="";
$dbname = "cardb";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['load'])){

$query = "SELECT * FROM `product`";
$stmt = $conn->prepare($query);
$stmt->execute();

while ($row = $stmt->fetchObject()) {
    $data["productno"] = $row->productno;
    $data["cartype"] = $row->cartype;
    $data["rate"] = $row->rate;
    $data["availability"] = $row->availability;
    $data["description"] = $row->description;
    $data["branch"] = $row->branch;
    $data["productname"] = $row->productname;
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