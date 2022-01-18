<?php

    function deleteRecord(){
        //calling dbConnection File
        include "dbConnection.php";

        //storing user ID
        $id=$_POST['delete-id'];

        //delete query
        $sql="DELETE FROM movieflix_table WHERE id='$id'";
        $deleteQuery=mysqli_query($con,$sql);
        
        //This code output is not visible becaz of header leading to index.php very fast.
        // if($deleteQuery){
        //     echo "<script>alert('Deletion Successful!!')</script>";
        // }
        // else{
        //     $errorMsg=$sql.mysqli_error($con);
        //     echo "<script>alert('Error Deleting : $errorMsg')</script>";
        // }

        //close connection with database
        mysqli_close($con);

        header('location: index.php');  //Directly redirects to index.php
    }

    if(isset($_POST['submit-delete-button'])){
        deleteRecord();
    }
    else{
        echo 'error';
    }
?>