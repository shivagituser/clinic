<!DOCTYPE HTML>
<html>
<head>
<title>Contact Details | Clinic</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</script>
</head>
<body>
<div class="header">
  <div class="container">
    <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="Nova"></a> </div>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="current"><a href="contact.html">Contact</a></li>
		        <li><a href="contact.html">Login</a></li>
        <div class="clear"></div>
      </ul>
      <script type="text/javascript" src="js/responsive-nav.js"></script> 
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <section class="title-section">
      <h1 class="title-header">Contact Requests</h1>
    </section>
  </div>
</div>
<!--<div class="contact">
  <div class="container">
    <div class="row contact_top">
      <div class="col-md-4 contact_details">
        <h5>Mailing address:</h5>
        <div class="contact_address"> 321 Laoreet quis risus nec, Donec eget</div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address"> +1 800 123 1234<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail"> info@companyname.com</div>
      </div>
    </div>
    <div class="contact_bottom">
      <h3>Contact Form</h3>
      <p>Mauris a vulputate lectus at blandit nisi. Donec eleifend vel felis vitae auctor aenean rhoncus sapien sollicitudin leo interdum.</p>
      <form method="post" action="test-local.php">
        <div class="contact-to">
		 <input type="text" name="name" id="name" value="Name"/>
		 <input type="text" name="email" id="email" value="Email" />
		 <input type="text" name="subject" id="subject" value="subject" />
		
    <p align="left"><textarea name="msg" rows="3" cols="155" value="Message :" id="msg">Message</textarea></p>
	<br/>
	<p align="center"> <input type="submit" value="send message" /></p>
          <!--<input type="text" class="text" id="name" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
          <input type="text" class="text" id="email" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px">
          <input type="text" class="text" id="subject" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px">
        </div>
        <div class="text2">
          <textarea value="Message:" id="message" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
        </div>
        <div> <input type="submit" value="Send Message"></div> -->
     <div class="contact"> <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
echo "<table border='1' cellpading='5' cellspacing='5' width='75%' align='center'>";
echo "<tr>";
echo "<th align='center'> NAME </th><th align='center'> EMAIL </th><th align='center'> SUBJECT </th><th align='center'> MESSAGE </th>";
echo "</tr>";
     while($row = $result->fetch_array()) {
          echo "<tr>";
         echo "<td align='center'>", $row["Name"],"</td><td align='center'>",$row["Email"],"</td><td align='center'>",$row["Subject"],"</td><td align='center'>",$row["Message"],"</td>" ;
		 echo "</tr>";
     }
} else {
     echo "0 results";
}
echo "</table>";
$conn->close();
?>  
</div>
    </div>
  </div>
</div> 
<div class="footer">
  <div class="footer_midle">
    <div class='container'>
      <div class="row">
        <div class="col-md-3">
          <ul class="social_left">
            <li class="facebook"><a href="#"><i class="fa fa-facebook-square fa-3x"></i></a></li>
            <li class="fb_text">
              <h4><a href="#">Follow us on Facebook</a></h4>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="social_left">
            <li class="facebook"><a href="#"><i class="fa fa-twitter-square fa-3x"></i></a></li>
            <li class="fb_text">
              <h4><a href="#">Follow us on Twitter</a></h4>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="social_left">
            <li class="facebook"><a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
            <li class="fb_text">
              <h4><a href="#">Follow us on Google +</a></h4>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="social_left">
            <li class="facebook"><a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
            <li class="fb_text">
              <h4><a href="#">Follow us on LinkedIn</a></h4>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="copy">
      <p>Copyright &copy; 2015 Clinic. Design by <a href="#" rel="nofollow">Social</a></p>
    </div>
  </div>
</div>
</body>
</html>
