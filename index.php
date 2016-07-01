<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>hello world</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>  
  <script src="http://mysqljs.com/mysql.js"></script>
</head>
<body>
    
    

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
        
         <div class="one-half column category">
          <img class="u-max-full-width" src="https://helloworldmackay.files.wordpress.com/2014/12/helloworld-logo-horizontal.jpg">
        </div>
      </div>
        
        
    <pre id="output"></pre>

     <?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7126177";
$password = "nx9iUH6zIm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO prova (test)
VALUES ('5')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
      
    </div>
  </div>
<script>
    MySql.Execute(
        "sql7.freemysqlhosting.net",
        "sql7126177", 
        "nx9iUH6zIm", 
        "sql7126177", 
        "select * from prova", 
        function (data) {
        document.getElementById("output").innerHTML = JSON.stringify(data,null,2);
    });
</script>

</body>
    

</html>