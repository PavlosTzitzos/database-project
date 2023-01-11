<!doctype html>
<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="foufoutos12345#";
$dbname="ergasia";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Company</title>
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
      <a href="sample.html" class="btn btn-info" role="button">Back</a>
   </div>
  </header>

  <main>
    <h1>Company</h1>
    <p class="fs-5 col-md-8">Description of company. Choose to input new data , change data or export data. </p>

    <div class="container">
      <h2>Login as Company</h2>
      <form>
        <div class="form-group">
          <label for="email">Company Name:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter company name">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        
        <p></p>
      </form>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    </div>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
    Created by Moustakas Thomas, Papadopoulos Aristidis, Tzitzos Pavlos &copy; 2023
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
