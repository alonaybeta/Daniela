
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h1{
        text-align: center;
        font-size: 10em !important;
    }
    body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
.avatar {
  
  width: 1500px;
  height: 500px;
  border-radius: 0%;
}

.navbar a {
  float: left;
  padding: 15px;
  color: white;   
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}


.header-right {
  float: right;
}
</style>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="header">
    <div class="navbar">
    </div>
    <div class="header-right">
   <a href="index.php"><i class="fa fa-fw fa-home"></i> BSIS-2 INFO</a> 
  <a href="dtchome.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="bsis2list.php"><i class="fa fa-fw fa-user"></i>BSIS NAMES</a>
<a href="about.php"><i class="fa fa-fw fa-search"></i> About</a> 
 <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="dex.php"><i class="fa fa-fw fa-user"></i>Log out</a>
    </ul>
  </div>
</nav>


</body>
</html>
