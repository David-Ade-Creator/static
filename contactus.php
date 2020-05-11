<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Bank</title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
    // Checking For Blank Fields..
    if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
    echo "Fill All Fields..";
    }else{
    // Check if the "Sender's Email" input field is filled out
    $email=$_POST['email'];
    // Sanitize E-mail Address
    $email =filter_var($email, FILTER_SANITIZE_EMAIL);
    // Validate E-mail Address
    $email= filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email){
    echo "Invalid Sender's Email";
    }
    else{
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From:'. $email2 . "rn"; // Sender's Email
    $headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
    // Message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // Send Mail By PHP Mail Function
    mail("jesselingz50@gmail.com", $subject, $message, $headers);
    echo "Thank you for contacting us";
    }
    }
    }
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Industry</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="#">SERVICE</a></li>
        <li><a href="contactus.html">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 contactus">
        <div class="con"><h2>CONTACT US</h2></div>
      </div>
    </div>
  </div>
</section>
  <div class="container-fluid">
  <div class="row form">
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <h3>Contact Form</h3>
      <hr>
      <form id="contact-form" action="#" method="post" role="form">
        <div class="messages"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
               <input id="name" type="text" name="name" class="form-control" placeholder="NAME*" required="required">
               <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
             <input id="email" type="text" name="name" class="form-control" placeholder="EMAIL*" required="required">
             <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
           <input id="subject" type="text" name="subject" class="form-control" placeholder="SUBJECT*" required="required">
           <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
           <textarea id="form_message" type="text" name="name" class="form-control" placeholder="ENTER MESSAGE*" required="required"></textarea>
           <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
      </form>
    </div>
  </div>
  </div>

  <div class="container-fluid footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
          <h2>About Us</h2>
          <p>hgjfsjjjsjkkkjskfj jfj jfjsjdfs jkfkf
          ckjmvm kknmxncm kcvmmc jhefjkdfj.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
          <h2>Quick Links</h2>
          <p>About</p>
          <p>Services</p>
          <p>Contact Us</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
          <h2>Contact</h2>
          <p>23 Abedi street</p>
          <p>Somewhere in the world</p>
          <p>somewhere round the world</p>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
