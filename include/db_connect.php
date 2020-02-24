<?php
//     $servername = "a0395733.xsph.ru";
//     $username = "a0395733";
//     $password = "epazegviuc";
//     $database = "a0395733_products_db";

    $servername = "127.0.0.1";
    $username = "root";
    $password = "newpassword";
    $database = "a0395733_products_db";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if (!$conn) {
        echo("Connection failed: " .mysqli_error());
    }
    echo "Жопа";
    
//    $sql = "SELECT id, firstname, lastname FROM MyGuests";

// ------working-----

//     $sql = "SELECT * FROM Categories";
// $result = mysqli_query($conn, $sql);
// 
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo '<p>'.$row["title"].'</p>';
//     }
// } else {
//     echo "0 results";
// }


// $result = mysqli_query("SELECT * FROM Categories",$conn);
// 		
// 		if (mysqli_num_rows($result) > 0){
// 			$row = mysqli_fetch_array($result);
// 			
// 			do{
// 				echo '<p>'.$row["title"].'</p>';
// 			}
// 			while($row = mysqli_fetch_array($result));	
// 		}
// 			

//mysqli_close($conn);
    ?>
