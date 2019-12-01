<?php
include_once "_header.php";
?>
<br>

<div class="container col-5">
  <div class="page-wrapper font-poppins"> 
         
    <div class="card card-3 p-t-20 ">  
         
      <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</h2>
           
        <form method="POST" action="">                
                        
                <div class="input-group">
                  <input class="input--style-3" type="text" placeholder="Login" name="login" required>
                </div>
                <div class="input-group">
                  <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                </div> 
                      <div class="row">
                       <div class="col-8">
                          <div class="p-t-10">
                          <button class="btn btn--pill btn--green" onClick="ToClas()">Login</button>
                          
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