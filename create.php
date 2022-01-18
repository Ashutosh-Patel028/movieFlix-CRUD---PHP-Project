<?php
            function createRecord(){
                //calling dbConnection File
                include "dbConnection.php";
                                
                //storing userinput into vars
                $movieTitle=$_POST['create-title'];
                $movieGenre=$_POST['create-genre'];
                $movieDirector=$_POST['create-director'];
                // echo $movieTitle." ".$movieGenre." ".$movieDirector;

                //inserting into database
                $sql="INSERT INTO movieflix_table (title,genre,director) VALUES ('$movieTitle','$movieGenre','$movieDirector')";
                $insertQuery=mysqli_query($con,$sql);
                //check if insertion was successful
                //This code output is not visible becaz of header leading to index.php very fast.
                // if($insertQuery){
                //     echo "<script>alert('Insertion Successful!!');</script>";
                // }
                // else{
                //     $errorMsg=$sql.mysqli_error($con);
                //     echo "<script>alert('Error Inserting : $errorMsg');</script>";
                // }
                mysqli_close($con);

                header('location: index.php'); //Directly redirects to index.php

            }

            if(isset($_POST['create-button'])) {
                createRecord();
            }
        ?>