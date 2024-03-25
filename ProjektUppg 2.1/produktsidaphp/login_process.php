<?php

$Password = $_POST['password'];
$Username = $_POST['username'];

$db = new SQLite3("./databas/gymdatabas.db");
$sql = "SELECT * FROM Customers WHERE Username=:Username";
$stmt = $db->prepare($sql);

$stmt->bindParam(':Username', $Username, SQLITE3_TEXT);
$result = $stmt->execute();

$Customer = $result->fetchArray();

$hashed = $Customer['Password'];
$auth = password_verify($Password, $hashed);

//MEDDELA ANVÄNDAREN OM INLOGGNINGEN LYCKADES ELLER INTE 
if($auth)
{
    session_start();
    $_SESSION['customerID'] = $Customer['customerID'];
    header("Location: home.php");
}
else if(!$auth)
{
    header("Location: index.php");
    
    
}
?>