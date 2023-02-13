<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'database-connection.php';
     $sql = 'INSERT INTO `data` (`q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`) 
                VALUES ('.$_POST["data"][1].', '.$_POST["data"][2].', '. $_POST["data"][3].', '.$_POST["data"][4].', '.$_POST["data"][5].','.$_POST["data"][6].', '.$_POST["data"][7].');'; 
    $result = mysqli_query($connectionquery, $sql); 
    print_r($result);   
    if ($result){
        echo "done";
    }
    else{
    }
}
?>