<?php
session_start();
include_once "_header.php";

$_SESSION['bad_capt']="style='display:none;'";
$_SESSION['bad_login']="style='display:none;'";

if(isset($_POST["loginBTN"]))
{
   if(isset($_SESSION['login_count']))
{
  
}



  {
  $_SESSION['bad_login']='';
  }
   if($_SESSION['login_count']>5 & $_POST["captchaText"]!= $_SESSION['captText'])
    {
        $_SESSION['bad_capt']='';
     
    }

}
?>
<br>

<div class="container col-5">
  <div class="page-wrapper font-poppins"> 
         
    <div class="card card-3 p-t-20 ">  
         
      <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</h2>
           
        <form method="POST">                
                        
                <div class="input-group">
                  <input class="input--style-3" type="text" placeholder="Login" name="login" required>
                </div>
                <div class="input-group">
                  <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                </div> 

              <div <?php echo $_SESSION['bad_login'] ?>>
                <div> <img name="captcha" src=captcha.php> &nbsp; <a href="#" name="refresh"><img  src=/icon/refresh.png width="30" height="30"></a> </div>
                    
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Text from img" name="captchaText">
                        </div>
                    
                        <div class="alert alert-danger" role="alert" <?php echo $_SESSION['bad_capt'] ?>>Wrong text!</div>
                </div>

                      <div class="row">
                       <div class="col-8">
                          <div class="p-t-10">
                          <button class="btn btn--pill btn--green" name="loginBTN">Login</button>
                          
                          <a class="btn btn--pill btn--green" href="/registration.php">Registration</a>
                          </div> 
                        </div>
                      </div>
          
        </form>
        
    </div>
  </div> 

</div>

<?php
include_once "_footer.php";
?>