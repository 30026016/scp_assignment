<?php

    //Common Username and password with DB name
    $user = "a3002601_Akshay";
    $password = "(Toiohomai1234)**";
    $dbname = "a3002601_scp";

    //DB Connection
    $connection = new mysqli('localhost', $user, $password, $dbname) or die(mysqli_error($connection));

    //Get entire Subject table data for use
    $result = $connection->query("select * from Subject") or die($connection->error);

    //If Post click occures than below code will execute
    if(isset($_POST['Item_No']))
    {
        $Item_No = $_POST['Item_No'];

        //Check if Item Number already exist in DB
        $check = mysqli_query($connection,"select * from Subject where Item_No='$Item_No'");
        $checkrows = mysqli_num_rows($check);

        //If Item Number already exist than show warning message.
        if($checkrows > 0) {
            include 'template/insert_header.php';

            echo "<div class='alert alert-warning' role='alert'>
                    <strong>Subject already exists!</strong> Please enter new Subject.
                  </div>
                  <p><a href='index.php' class='btn btn-warning'>Back to SCP App</a></p>";
                  
            include 'template/footer.php';
        }
        else{
            //Set all $_POST values into separate variables to insert in DB
            $Object_class = $_POST['Object_class'];
            $Subject_image_path = $_POST['Subject_image_path'];
            $Description = $_POST['Description'];
            $Procedures = $_POST['Procedures'];
            $Reference = $_POST['Reference'];
            $Additional_Notes = $_POST['Additional_Notes'];
            $Appendix = $_POST['Appendix'];

            $Description = str_replace("'", "''", $Description);
            $Procedures = str_replace("'", "''", $Procedures);
            $Reference = str_replace("'", "''", $Reference);
            $Additional_Notes = str_replace("'", "''", $Additional_Notes);
            $Appendix = str_replace("'", "''", $Appendix);

            //Insert record into DB
            $sql = "insert into Subject(Item_No, Object_class, Subject_image_path, Description, Procedures, Reference, Additional_Notes, Appendix) values('$Item_No', '$Object_class', '$Subject_image_path', '$Description', '$Procedures', '$Reference', '$Additional_Notes', '$Appendix')"; 

            if ($connection->query($sql) === TRUE) {
                //If Insert statement execute without error than show successfully message
                include 'template/insert_header.php';

                echo "<div class='alert alert-success' role='alert'>
                        <strong>Subject created successfully</strong>
                      </div>
                      <p><a href='index.php' class='btn btn-success'>Back to SCP App</a></p>";

                include 'template/footer.php';
            }
            else 
            {
                //If Insert statement execute without error than show error message
                include 'template/insert_header.php';

                echo "<div class='alert alert-danger' role='alert'>
                        <strong>Error! </strong>{$connection->error}
                      </div>
                      <p><a href='index.php' class='btn btn-danger'>Back to SCP App</a></p>";

                include 'template/footer.php';
            }
        }
    }
?>