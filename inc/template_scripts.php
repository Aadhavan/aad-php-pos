<?php
/**
 * template_scripts.php
 *
 * Author: pixelcave
 *
 * All vital JS scripts are included here
 *
 */
?>

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="../js/vendor/jquery.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/app.js"></script>
<script type="text/javascript">
    $(function(){
    $("#adminupdate").click(function() {  
var email = $("#adminEmail").val();
var upassw = $("#user_password").val();
//alert(email+'      '+upassw);
   $.ajax({
           type: "POST",
           url: "updateprofile.php",
           data: "email="+email+"&pass="+upassw,
           success: function(msg){  
          if(msg != 0)
          {
             
            $("#modal-user-settings").close(); 
          
          }
          
           }
         }); 

}); 
    });
</script>
