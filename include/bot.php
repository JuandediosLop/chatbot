<?php
// server = localhost
// username = root
// password = "" (blank)
// database Name = your database name

$conn = mysqli_connect("localhost","root","","chatuvg");

if($conn){ 
    $user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);

    $query = "SELECT * FROM chatbot WHERE mensaje LIKE '%$user_messages%'";

    $runQuery = mysqli_query($conn, $query);

        if(mysqli_num_rows($runQuery) > 0){
            // fetch result
            $result = mysqli_fetch_assoc($runQuery);
            // echo result
            echo $result['respuesta'];
        }else{
            echo "¡Lo siento, no puedo entenderte! Intentalo de nuevo.";
        }
}else{
    echo "connection Failed " . mysqli_connect_errno();
}
?>