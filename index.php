<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movieflix CRUD App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-div">
        <?php require_once('create.php') ?>
        <div>
            <h2>Movieflix CRUD Application</h2>
            <?php
                //calling dbConnection File
                include "dbConnection.php";
                //check for successful connection
                if($con){
                    echo "<script>alert('Connected to Database successfully !!')</script>";
                }
                else{
                    $connError=mysqli_connect_error();
                    echo "<script>alert('Error connecting Database : $connError')</script>";   
                }
                
                //query the table for the records
                $sql="SELECT * FROM movieflix_table";
                $result=mysqli_query($con,$sql);
                $rowCount=mysqli_num_rows($result);
                if($rowCount>0){
                    echo "
                        <table>
                            <thead>
                                <tr>
                                    <th>Record ID</th>
                                    <th>Title</th>
                                    <th>Genre</th>
                                    <th>Director</th>
                                </tr>

                            </thead>
                    ";
                }
            ?>
            <?php
                while($row=$result->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['genre'] ?></td>
                <td><?php echo $row['director'] ?></td>
            </tr>
            <?php endwhile ?>
            </table>
        </div>
        <div class="content-wrapper">
            <button id="create-button">Create Record</button>
            <button id="update-button">Edit Record</button>
            <button id="delete-button">Delete Record</button>

            <form action="create.php" method="POST" id="create-form">
                <input type="text" placeholder="Enter movie title" name="create-title" id="">
                <input type="text" placeholder="Enter movie genre" name="create-genre" id="">
                <input type="text" placeholder="Enter movie director" name="create-director" id=""><br>
                <input type="submit" value="Save" name="create-button" class="small-button">
            </form>

            <form action="update.php" method="POST" id="update-form">
                <input type="text" placeholder="Enter record id" name="update-id" id="">
                <input type="text" placeholder="Enter movie title" name="update-title" id="">
                <input type="text" placeholder="Enter movie genre" name="update-genre" id="">
                <input type="text" placeholder="Enter movie director" name="update-director" id="">
                <input type="submit" value="Save" name="submit-update-button" class="small-button">
            </form>

            <form action="delete.php" method="POST" id="delete-form">
                <input type="text" placeholder="Enter Record ID" name="delete-id" id=""> <br>
                <input type="submit" value="Save" name="submit-delete-button" class="small-button">
            </form>
            
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
