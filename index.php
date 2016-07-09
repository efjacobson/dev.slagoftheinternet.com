<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>PHP, yo</title>
    
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/dev.slagoftheinternet.com/inc/includes-header.php";
      include($path);
    ?>
    
  </head> 

  <body>

    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h2>DB Test</h2>
              <?php


                if($connection->connect_errno > 0){
                  die('Unable to connect to database [' . $connection->connect_error . ']');
                }
                else {

                  $query = "CALL Thing_SelectAll";

                  if(!$result = $connection->query($query)){
                    die('There was an error running the query [' . $connection->error . ']');
                  }
                  else {
                    while($row = $result->fetch_assoc()){
                      echo $row['name'] . $row['description'] . '<br />';
                    }
                  }
                }

              ?>
          </div>
        </div>
      </div>
    </div>

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/dev.slagoftheinternet.com/inc/includes-footer.php";  
      include($path);
    ?>
  
  </body>
</html>


