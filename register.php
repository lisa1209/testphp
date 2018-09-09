<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color:  #ffccdd;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background:#ffb3cc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: 	#ffe6e6;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color:  #ff8080;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
<img src="img/03be70b6f28cb5a50a4543cc7d8df957.png" width="360" height="297" >
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="register.php" target="_blank">สมัคร Run</a></li>
      <li><a href="report2.php" target="_blank">หน้ารายงานผล</a></li>
      
    </ul>
  </nav>
  
  <article> 
  
   <form method="POST" action="result2.php">
  First name:&nbsp

  <input type="text" name="firstname" value="">&nbsp;
 Last name:
  <input type="text" name="lastname" value="">
   <br><br>
   E-mail:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="email" value="">&nbsp;&nbsp;
 password:
  <input type="text" name="password" value="">
  <br><br>
  Tel:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="tel" value="">&nbsp;&nbsp;&nbsp;&nbsp;
 size:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="size" value="">
  <br><br>
 Age:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="age" value="">&nbsp;&nbsp;&nbsp;&nbsp;

  <br><br>
  Gender:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
 
<input   type="submit" value="register">
</form> 
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>