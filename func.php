<?php

function prepdate($str)
{
$newstr=substr($str,strlen($str)-4,5);
$newstr.="-";
$newstr.=substr($str,strlen($str)-7,2);
$newstr.="-";
$newstr.=substr($str,strlen($str)-10,2);
return $newstr;
}

function loginUser($login,$pas)
 {
  include "connect_db.php";
  
  if($_SESSION['bad_login_count']>4 & $_SESSION['captText']!=$_POST["captchaText"])
  {
    $_SESSION['bad_capt']='';
    return false;
  }
  $pas= password_hash($pas, PASSWORD_DEFAULT);
  
  try{
    $sql = "SELECT * FROM `tbl_user` WHERE Login = '$login'";
     $isql = $db->prepare($sql);
     $isql->execute();
     $res = $isql->fetch(PDO::FETCH_ASSOC);
     $id=$res['Id'];
   
     }catch (PDOException $e) {
         echo 'Користувача не знайдено в базі: ' . $e->getMessage();
         die();
     }

   if($id!=null)
   {
       $_SESSION['bad_login_count']=0;
       $_SESSION['bad_login']="style='display:none;'";
       $_SESSION['bad_capt']="style='display:none;'";
       $_SESSION['bad_user']="style='display:none;'";
       $_SESSION['login_User']=$id;
       return true;
   }else{
       $_SESSION['bad_user']='';
       return false;
       }      
   }
  
  
   function AnimalsFromDB()
   {
    include "connect_db.php";
    $animals=array();
    $id=$_SESSION['login_User'];
    
    try{
     
     $sql = "SELECT * FROM `tbl_animals` WHERE UserId = '$id'";
     $isql = $db->prepare($sql);
     $isql->execute();
     while($row = $isql->fetch(PDO::FETCH_ASSOC))
     {
        array_push($animals,$row);
     }
     
        
      }catch (PDOException $e) {
         echo 'У даного користувача тварин не знайдено в базі: ' . $e->getMessage();
         die();
     }
     return $animals;
   }
 
   function AddAnimal($kind, $breed, $name, $birdthday, $photo)
   {
    $id=$_SESSION['login_User'];
    include "connect_db.php";
    try{
     
     $sql = "INSERT INTO tbl_animals(Kind, Breed, Name, Birdthday, Photo, UserId) VALUES (?, ?, ?, ?, ?, ?)";
     $isql = $db->prepare($sql);
     $isql->execute([$kind, $breed, $name, $birdthday, $photo, $id]);
            
      }catch (PDOException $e) {
         echo 'Тварину не додано в базу: ' . $e->getMessage();
         die();
     }
    
   }

   function AddPhoto($photo)
   {
    $uploaddir = '/uploadIMG';    
    $file_name=uniqid('f_').'.jpg';
    $uploadfile = $uploaddir . '/'.$file_name;
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile))
    {
      $path=$uploadfile;
    }else{
      echo $_FILES['photo']['error'];
    }  

    return $path;
   }

 function Serch($text, $allAnimals)
 {
   $res=array();
  for( $i=0; count($allAnimals)>$i; $i++)
  {
    foreach($allAnimals[$i] as $element)
    if($element==$text)
    {
      array_push($res, $allAnimals[$i]);
    }

  }
return $res;
}


?>