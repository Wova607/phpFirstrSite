<?php

function loginUser($login,$pas)
 {
  
  if($_SESSION['bad_login_count']>4 & $_SESSION['captText']!=$_POST["captchaText"])
  {
    $_SESSION['bad_capt']='';
    return false;
  }
  //$pas= password_hash($pas, PASSWORD_DEFAULT);
  //include_once "connect_db.php";
  // try{
 //     $sql = "SELECT * FROM `tbl_user` WHERE (login='$login' AND Password='$pas')";
//      $isql = $dbh->prepare($sql);
       //$userPas=$isql->execute([$login, $pas]);
 //     $isql->execute();
 //     $res = $isql->fetch(PDO::FETCH_ASSOC);
 //     $id=$res['Id'];
 //   
 //     }catch (PDOException $e) {
 //         echo 'Запис не додано в базу: ' . $e->getMessage();
 //         die();
 //     }

   if($pas=="123")
   {
       $_SESSION['bad_login_count']=0;
       $_SESSION['bad_login']="style='display:none;'";
       $_SESSION['bad_capt']="style='display:none;'";
       $_SESSION['bad_user']="style='display:none;'";
      //  usera to class
       return true;
   }else{
       $_SESSION['bad_user']='';
       return false;
       }      
   }
  
  



   //include_once "connect_db.php";
   


  //  if($pas=="123")
  //  {
  //      $_SESSION['bad_login_count']=0;
  //      return true;
  //  }else{
  //      $_SESSION['bad_login_count']++;
  //      return false;
  //  }
 
// function loginUser($login,$pas)
// {
// //include_once "connect_db.php";
// $pas= password_hash($pas, PASSWORD_DEFAULT);

// // try{
// //     $sql = "SELECT Id FROM `tbl_user` WHERE (login='$login' AND Password='$pas')";
// //     $isql = $dbh->prepare($sql);
// //     $isql->execute();
// //     $res = $isql->fetch(PDO::FETCH_ASSOC);
// //     $id=$res['Id'];
// //    // $userPas=$isql->execute([$login, $pas]);
// //     }catch (PDOException $e) {
// //         echo 'Запис не додано в базу: ' . $e->getMessage();
// //         die();
// //     }
// $id=null;
// if($id==null)
// {
//   //  $_SESSION['bad_login_count']++;
//     return false;
// }else{
//    // $_SESSION['bad_login_count']=0;
//     return true;
// }




// }
?>