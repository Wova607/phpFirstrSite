<?php
session_start();
$_SESSION['bad']="style='display:none;'";
$_SESSION['bad_capt']="style='display:none;'";
include "_header.php";

if(isset($_POST["register"]))
{
    if($_POST["password"]!= $_POST["confirmpasword"])
    {
        $_SESSION['bad']='';
     
    }
    if($_POST["captchaText"]!= $_SESSION['captText'])
    {
        $_SESSION['bad_capt']='';
     
    }
if($_SESSION['bad']=="style='display:none;'" & $_SESSION['bad_capt']=="style='display:none;'")
{
    include_once "userToDB.php";
}
    
}

if(count($_POST)!=0)
{
$n=$_POST['name'];
$s=$_POST['surname'];
$b =$_POST['birthday'];
$e =$_POST['email'];
$p =$_POST['phone'];
$c =$_POST['city'];
$l =$_POST['login'];
}
else{
$n='';
$s='';
$b ='';
$e ='';
$p ='';
$c ='';
$l ='';
}

?>
<br>
<div class="page-wrapper  p-t-150 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
          <div class="card card-3 p-t-20 "> 
         
           <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Info</h2>
          
            <form method="POST">
            <div class="card-body">
            <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name" <?php echo " value=$n" ?> >
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Surname" name="surname" <?php echo " value=$s" ?>>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Login" name="login" required <?php echo " value=$l" ?> >
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="confirmpasword" required>
                        </div>

                        <div class="alert alert-danger" role="alert" <?php echo $_SESSION['bad'] ?>>Confirm correct password!</div>

                        <div class="p-t-10">
                            <button name="register" class="btn btn--pill btn--green">Registration</button>
                        </div>
             </div> 

                <div class="card-body">                 
                   
                        
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday" <?php echo " value=$b" ?>>
                            <i class="zmdi  input-icon js-btn-calendar">
                            <img src=/icon/calend.png width="30" height="30">
                            </i>
                        </div>                     
                       
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required <?php echo " value=$e"; ?> >
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" <?php echo " value=$p" ?>>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="City" name="city" <?php echo " value=$c" ?>>
                        </div>
               
                        <div> <img name="captcha" src=captcha.php> &nbsp; <button onClick ="document.getElementById('captcha').src = 'captcha.php'" name="refresh"><img  src=/icon/refresh.png width="30" height="30"></button> </div>
                    
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Text from img" name="captchaText">
                        </div>
                    
                        <div class="alert alert-danger" role="alert" <?php echo $_SESSION['bad_capt'] ?>>Wrong text!</div>
                </div>
          
          
          
          
                </form>
          
          </div>
          
        </div>
</div>

<?php
include "_footer.php";
?>

