<?php
session_start();
include_once "_header.php";
include_once "func.php";
$_SESSION['itemsInPage']=2;  //кіль-сть елементів на сторінці
$_SESSION['pages']="style='display:none'";

 
if(!isset($_SESSION['pageNumb']))
{
  $_SESSION['pageNumb']=1;
}


$animalslist=AnimalsFromDB();

if(isset($_POST["add"]))
{
  $birdthday=prepdate($_POST["birthdaytext"]);

    $uploaddir = 'uploadIMG/';    
    $file_name=uniqid('f_').'.jpg';
    $uploadfile = $uploaddir.$file_name;
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile))
    {
      $photo=$uploadfile;
    }else{
      echo $_FILES['photo']['error'];
    }  
  
  
  AddAnimal($_POST["kind"], $_POST["breed"], $_POST["name"], $birdthday, $photo);
  header("Location: /animalsList.php"); 
}

if(isset($_GET['search']))
{
  $animalslist=Serch($_GET['serchtext'], $animalslist);
}

$_SESSION['elements']=count($animalslist); 

if($_SESSION['elements']>$_SESSION['itemsInPage']) 
{  
  if(!isset($_SESSION['firstStart']))
    {$_SESSION['firstStart']=true;}

  if($_SESSION['firstStart'])
  {
    
    $_SESSION['firstStart']=false;
  } 
  if(isset($_POST['prev']) || isset($_POST['next']) )
  {
    //тупа заглушка бо чомусь інверсія не спрацьовує
  }else{
    $_SESSION['pages_end']=$_SESSION['itemsInPage'];
  }
  $_SESSION['pages']='';  
}
else{
  $_SESSION['pages_start']=0;
  $_SESSION['pages_end']=$_SESSION['elements'];
}

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
                    <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthdaytext">
                            <i class="zmdi  input-icon js-btn-calendar">
                            <img src=/icon/calend.png width="30" height="30">
                            </i>
                  </div>   
                  <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
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
<div class="page-wrapper  font-poppins container">
     <div class="card card-3">  
     <div class="row"> 
           
     <a href='animalsList.php' style="text-decoration: none"> <h2 class="title" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Animals</h2></a>
     
      <form class="form-inline mt-2 mt-md-0" method="GET">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="serchtext">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
           </form>
          
      </div>
      <table class="table">
            <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Breed</th>
                <th scope="col">Birthdate</th>
            </tr>
            </thead>
            <tfoot <?php echo $_SESSION['pages'] ?>>
              <tr>
                <th></th>
                <th></th>
                <th>
            <nav >
  <ul class="pagination">
    <form method="POST" class="form-inline">
    <li class="page-item "><button class="page-link text-light bg-dark"  name='prev'> <<< </button></li>
    
    <li class="page-item"><button class="page-link text-light bg-dark"  name='next'> >>> </button></li>
    </form>
  </ul>
            </nav>
            </th>
            
            <th></th>
              </tr>
            </tfoot>
            <tbody>
            <?php
            if(isset($_POST['prev']) )
            {
              $_SESSION['btn']="prev";  
              unset($_POST['prev']);                
              include_once "pageChn.php"; 
               
            }

            if(isset($_POST['next']))
            {
              $_SESSION['btn']="next";  
              unset($_POST['next']);                       
              include_once "pageChn.php";
             
            }
            
            
            if(count($animalslist)!=0)
            {
             for( $i=$_SESSION['pages_start']; $_SESSION['pages_end']>$i; $i++)
              {
           echo '
        <tr>
            <td><img src='. $animalslist[$i]["Photo"].' width="100"></td>
            <td>' . $animalslist[$i]["Name"] . '</td>
            <td>' . $animalslist[$i]["Breed"] . '</td>
            <td>' . $animalslist[$i]["Birdthday"] . '</td>
        </tr>
        ';}
              }
            ?>
<tr>
<th></th>
<th></th>
<th></th>
<th>
<lable class="text-light ">Page: <?php echo $_SESSION['pageNumb'] ?> </lable>
</th>

</tr>
            </tbody>
            
        </table>

    </div>
 </div>
<?php
include "_footer.php";
?>
