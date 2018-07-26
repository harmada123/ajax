<?php
//$conn = mysqli_connect('localhost','root','','ajax');
$conn = new PDO('mysql:host=localhost;dbname=ajax','root','');

$cars = $_POST['search'];


if(!empty($cars)){
    $stmt = $conn->prepare("SELECT * FROM CARS WHERE cars LIKE '%' :cars '%'");
    $stmt->bindParam(':cars',$cars);
    $stmt->execute();
    echo "<ul class='list-unstyled text-center'>";
    foreach($stmt as $stmts){
        echo "<li>". $stmts['cars'] . "<li>";
    }
    echo "</ul>";
}

