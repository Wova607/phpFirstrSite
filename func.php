<?php

function loginUser($login,$pas)
 {
   if(!isset($_SESSION['bad_login_count']))
   {
    $_SESSION['bad_login_count']=0;
   }

   //include_once "connect_db.php";
   $pas= password_hash($pas, PASSWORD_DEFAULT);


   if($_SESSION['bad_login_count']>=7)
   {
       $_SESSION['bad_login_count']=0;
       return true;
   }else{
       $_SESSION['bad_login_count']++;
       return false;
   }
 }
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