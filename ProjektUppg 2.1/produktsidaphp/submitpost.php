<?php
session_start();

$db = new SQLite3("../produktsidaphp/databas/gymdatabas.db");
$id = $_POST['id'];
$productID = $_POST['productID'];
$commentID = $_POST['commentID'];
$customerID = $_SESSION['customerID'];

$sql = "INSERT INTO Comments (customerID, Text, productID) VALUES (:customerID, :Text, :productID)";
$statement = $db->prepare($sql);
$statement->bindParam(':customerID', $customerID, SQLITE3_TEXT);
$statement->bindParam(':Text', $commentID, SQLITE3_TEXT);
$statement->bindParam(':productID', $productID, SQLITE3_TEXT);

if ($statement->execute()) {
  $db->close();
  header("location: ./produkt_detail.php?id=$id");
  /*return true;*/
}
?>