<?php 
    $error = "";
    $successMessage = "";
    if ($_POST) {
    
        if (!$_POST['email']){ 
          $error .= "Please insert your email address.<br>";
        }
    
        if (!$_POST['textMail']){ 
            $error .= "The content field is required.<br>";
        }
    
        if (!$_POST['subject']){ 
          $error .= "Insert the subject of the email.<br>";
        }
    
        if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
          $error .= "The email address is invalid.<br>";
        }
        
        if ($error != "") {
          $error = '<div class="alert alert-danger" role="alert"><p><strong>there were error(s) in your form:</strong></p>'.$error.'</div>';
        } else {
          $emailTo = "andrea.agosta85@gmail.com";
          $subject = $_POST['subject'];
          $content = $_POST['textMail'];
          $headers = "From ".$_POST['email'];
          if (mail($emailTo, $subject, $content, $headers)) {
            $successMessage = '<div class="alert alert-success" role="alert"> your message was sent, we\'ll get back to to you ASAP!</div>';
          } else {
            $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - please try again later</div>';
          }
        }
    }  
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="text/javascript" src="jquery.min.js"></script>
	<script src="./jquery.min.js"></script>
	<link href="./jquery-ui.css" rel="stylesheet">
    <title>Contact us</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>     
        <div class="container"><p class="h-25"></p></div>        
        <div id="error" class="container"><? echo $error.$successMessage; ?></div>        
        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
            <p><h3 id="titlePage">Contact US</h3></p>
            </div>
        </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="container" id="formMail">
                <div class="jumbotron" id="bgjumbotron">
                    <form method="post"> 
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="email" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </div>
                        <div class="mb3">
                            <label class="form-label">What would you like to ask us?</label>
                            <textarea class="form-control" aria-label="With textarea" id="textMail" name="textMail"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="buttonSubmit">Submit</button>
                    </form> 
                </div>
            </div>
        </div>  
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>