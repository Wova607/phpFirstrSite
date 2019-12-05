<?php
include_once "_header.php";
session_start();

$_SESSION['bad_login']="style='display:none;'";
$_SESSION['bad_capt']="style='display:none;'";
$_SESSION['bad_user']="style='display:none;'";
$refreshClick='';

if(isset($_POST["refresh"]))
 {
   $refreshClick="onClick = document.getElementById('captcha').src = 'captcha.php'";
   $_SESSION['bad_login']='';
 }

if(isset($_POST["loginBTN"]))
 {
    if(!isset($_SESSION['bad_login_count']))
    {
      $_SESSION['bad_login_count']=0;
    }

    include_once "func.php";
    if(loginUser($_POST['login'], $_POST['password']))
      {         
         header("Location: /about.php");
         exit;
      } 
     else{
      $_SESSION['bad_login_count']++;
      
     }

     if($_SESSION['bad_login_count']>=5)
     {
      $_SESSION['bad_login']='';
     }    
  }

  if(count($_POST)!=0)
  {
   $l =$_POST['login'];
  }
  else{
   $l ='';
  }
   
  
?>
<br>

<div class="container col-5">
  <div class="page-wrapper font-poppins"> 
         
    <div class="card card-3 p-t-20 ">  
         
      <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</h2>
           
        <form method="POST">                
                        
                <div class="input-group">
                <div class="alert alert-danger" role="alert" <?php echo $_SESSION['bad_user'] ?>>Wrong login or password!</div>
                  <input class="input--style-3" type="text" placeholder="Login" name="login" required <?php echo "value=$l" ?>>
                </div>
                <div class="input-group">
                  <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                </div> 

              <div <?php echo $_SESSION['bad_login'] ?>>
                <div> <img name="captcha" src=captcha.php> &nbsp; <button <?php echo $refreshClick ?> name="refresh"><img  src=/icon/refresh.png width="30" height="30"></button> </div>
                    
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Text from img" name="captchaText" require>
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
