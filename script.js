$("form").submit(function (e) {
    var error = "";        
    if ( $("#email").val() == "") {
        error += "Please insert your email address.<br>";          
    }
    if ($("#subject").val() =="") {
        error += "Insert the subject of the email.<br>";
    }
    if (chekError == 0 && $("#textMail").val() == "") {
        error += "Insert some text inside the email."
    }            
    if(error != "") {
        $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>there were error(s) in your form:</strong></p>' + error + '</div>');
        return false;
      } else {
        return true;
    }
});