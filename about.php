<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

      
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 10px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 5px;
  text-align: center;
  color: #474e5d;
}

.container {
  padding: 0 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 500px) {
  .column {
    width: 80%;
    display: block;
  }
}
</style>

<body>
<?php include 'navbar.php' ?>
<h1><center>About us</center></h1>
<br>
<h3><center>Danao Technological College (DTC) was established in the year 2017 and</center></h3>
<h3><center>operated at year 2021. DTC was built with the unwavering support of our locality,</center></h3>
<h3><center>the Municipality of Danao. Danao Technological College offers four programs; BSIS, BTVTED, BSCRIM, and BSTM.</center></h3>
</br>

<br>
<center>
<h3>"Danao Technological College has helped many students because many students in Danao</h3>
<h3>have been able to study for free, especially those students who lack financial resources.</h3>
<h3>Many students have been given the opportunity to study at Danao Technological College because,</h3>
<h3>aside from offering free tuition, it is unique and affordable."</h3>
</center>
</br>

</br>
</body>
</html>
