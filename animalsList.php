<?php
session_start();
include "_header.php";
include_once "func.php";

$animalslist[]=AnimalsFromDB();
?>
<br>
<div class="p-t-10">
  <button name="add" class="btn btn--pill btn--green" data-toggle="collapse" data-target="#collapseAnimal" aria-expanded="false" aria-controls="collapseAnimal">Add Animals</button>
</div>
<div class="collapse" id="collapseAnimal">
  

<div class="container col-5">
<div class="page-wrapper  p-t-150 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
          <div class="card card-3 p-t-20 "> 
         
           <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Animals</h2>
          
            <form method="POST" enctype="multipart/form-data">
            <div class="container">
            
                  <div class="input-group">
                     <input class="input--style-3" type="text" placeholder="Kind" name="kind">
                  </div>
                  <div class="input-group">
                     <input class="input--style-3" type="text" placeholder="Breed" name="breed">
                  </div>
                  <div class="input-group">
                     <input class="input--style-3" type="text" placeholder="Name" name="name">
                  </div>   
                  <div class="input-group">
                    <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                            <i class="zmdi  input-icon js-btn-calendar">
                            <img src=/icon/calend.png width="30" height="30">
                            </i>
                  </div>   
                  <div class="input-group">
                    <input class="input--style-3" type="file" placeholder="Photo" name="photo">
                  </div>   

                        <div class="p-t-10">
                            <button name="add" class="btn btn--pill btn--green">Add</button>
                        </div>
             </div> 
                </form>
          
          </div>
          
        </div>
</div>
</div>

</div>
<div class="page-wrapper  font-poppins">
  <div class="wrapper wrapper--w780">
    <div class="card card-3">          
      <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Animals</h2>
    </div>
  </div>
</div>
<?php
include "_footer.php";
?>