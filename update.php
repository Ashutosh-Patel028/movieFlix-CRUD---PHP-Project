<?php
    function updateRecord(){
        //calling dbConnection File
        include "dbConnection.php";

        //store userInput inside variables
        $id=$_POST['update-id'];
        $movieTitle=$_POST['update-title'];
        $movieGenre=$_POST['update-genre'];
        $movieDirector=$_POST['update-director'];

        //update query
        $sql="UPDATE movieflix_table SET title='$movieTitle',genre='$movieGenre',director='$movieDirector' WHERE id='$id'";
        $updateQuery=mysqli_query($con,$sql);
        
        //This code output is not visible becaz of header leading to index.php very fast.
        // if($updateQuery){
        //     echo "<script>alert('Updation Successful!!');</script>";
        // }
        // else{
        //     $errorMsg=$sql.mysqli_error($con);
        //     echo "<script>alert('Failed to Update : $errorMsg');</script>";
        // }
        
        //closing connection with database
        mysqli_close($con);

        header('location: index.php'); //Directly redirects to index.php
    }
    
    if(isset($_POST['submit-update-button'])){
        updateRecord();
    }
    else{
        echo 'error';
    }

?>