<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SCP - Subject Files</title>
  </head>

  <body class="container" style="background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);">
    <nav class="navbar navbar-light bg-light" style="background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);">
      <a class="navbar-brand" href="index.php">
        <img src="images/SCP_Foundation_Logo.svg" alt="" width="50" height="50" class="d-inline-block align-top">
        <strong>SCP Foundation</strong>
      </a>
    </nav>

  <?php include 'connection.php'; ?>
  
<!-- Common menu -->
    <div class="row">
        <div  class="col">
            <ul class="nav navbar-light bg-light">
            
             <?php foreach($result as $menu_item): ?>

                <li class="nav-item active">
                    <a class="nav-link" href="index.php?subject='<?php echo $menu_item['Item_No']; ?>'">
                    <?php echo $menu_item['Item_No']; ?>
                    </a>
                </li>

              <?php endforeach; ?>

              <li class="nav-item active">
                    <a class="nav-link" href="insert.php">
                    ENTER NEW SUBJECT
                    </a>
              </li>

            </ul>
            <hr width="100%">
        </div>
    </div>