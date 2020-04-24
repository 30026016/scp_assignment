
<!-- include header.php this contains html code above our main content -->
<?php include 'template/header.php'; ?>
<style type='text/css'>
    .clsH1{
        color: whitesmoke;
    }
</style>
<!-- Display record in div below -->
    <div class="row">
        <div  class="col">
        <?php
        // check subject has valid value
        if(isset($_GET['subject']))
        {
            //trim single quotes from subject query string
            $item_number = trim($_GET['subject'], "'");

            //get selected subject value based on primary key
            $record = $connection->query("select * from Subject where Item_No = '$item_number'") or die($connection->error);

            $row = $record->fetch_assoc();
            
            //Store DB Fields Value in Unique Variable
            $item = $row['Item_No'];
            $Object_class = $row['Object_class'];
            $Procedures = $row['Procedures'];
            $Description = $row['Description'];
            $Subject_image_path = empty($row['Subject_image_path']) ? '' : $row['Subject_image_path'];
            $Reference = empty($row['Reference']) ? '' : $row['Reference'];
            $Additional_Notes = empty($row['Additional_Notes']) ? '' : $row['Additional_Notes'];
            $Appendix = empty($row['Appendix']) ? '' : $row['Appendix'];
            
            $Procedures = str_replace('/n', '<br/><br/>', $Procedures);
            $Description = str_replace('/n', '<br/><br/>', $Description);
            $Reference = str_replace('/n', '<br/><br/>', $Reference);
            $Additional_Notes = str_replace('/n', '<br/><br/>', $Additional_Notes);
            $Appendix = str_replace('/n', '<br/><br/>', $Appendix);

            // Display DB fields
            echo "<h1 class='clsH1'>SCP Subject</h1>
            <h2 class='clsH1'>Item_#: {$item}</h2>
            <h3 class='clsH1'>Class: {$Object_class}</h3>
            <p><img class='img-fluid rounded d-block' src='{$Subject_image_path}'></p>
            <h3 class='clsH1'>Special Containment Procedures:</h3>
            <p class='clsH1'>{$Procedures}</p>
            <h3 class='clsH1'>Description:</h3>
            <p class='clsH1'>{$Description}</p>";

            if($Reference != ''){
              echo "<h3 class='clsH1'>Reference:</h3>
              <p class='clsH1'>{$Reference}</p>";
            }

            if($Additional_Notes != ''){
              echo "<h3 class='clsH1'>Additional Notes:</h3>
              <p class='clsH1'>{$Additional_Notes}</p>";
            }

            if($Appendix != ''){
              echo "<h3 class='clsH1'>Appendix:</h3>
              <p class='clsH1'>{$Appendix}</p>";
            }
            
        }
        else
        {
          //If subject has not value than display common content
          echo "<p class='text-center clsH1'>Welcome, Use the above links to view subject files or enter new subject data</p>
              <p><img src='images/scp_back.jpg' class='img-fluid rounded mx-auto d-block'></p>";
        }
        ?>
        </div>
    </div>
    <?php include 'template/footer.php'; ?>