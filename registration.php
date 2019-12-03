<?php
include "_header.php";
include_once "model.php";
include_once "userToDB"


?>
<br>
<div class="page-wrapper  p-t-150 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
         <div class="card card-3 p-t-20 "> 
         
           <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Info</h2>
          
            <form method="POST" action="userToDB.php">
            <div class="card-body">
            <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" value="<?php $name ?>" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Surname" name="surname" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Login" name="login" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="confirmpasword" required>
                        </div>
                        <div class="p-t-10">
                            <button name="register" class="btn btn--pill btn--green">Registration</button>
                        </div>
             </div> 

                <div class="card-body">                 
                   
                        
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                            <i class="zmdi  input-icon js-btn-calendar">
                            <img src=/icon/calend.png width="30" height="30">
                            </i>
                        </div>                     
                       
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="City" name="city">
                        </div>
                    
                        <div id="captcha" > <img name="captcha" src= captcha.php> &nbsp; <a href="/"  name="refresh"><img  src=/icon/refresh.png width="30" height="30"></a> </div>
                    
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Text from img" name="captchaText">
                        </div>
                    
                </div>
          </div>
          </form>
        </div>
</div>

<?php

include "_footer.php";
?>

<script>
function refre(){
   $(".refresh").on("click", function() {
    $("#captcha").load("registration.php #captcha");
    });
}
</script>