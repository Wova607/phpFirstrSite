<?php

$errEnd=$_SESSION['pages_end'];
$errEnd+=$_SESSION['itemsInPage'];
$errStart=$_SESSION['pages_start'];
$errStart-=$_SESSION['itemsInPage'];
// if($errEnd>$_SESSION['allAnimals'] || $errStart<0)
//     {
        
//         exit();
//     }

if($_SESSION['btn']=="next")
{
    $_SESSION['btn']='';
    if($errEnd>$_SESSION['allAnimals'] || $errStart<0)
    {
        
        exit();
    }
    // if($_SESSION['pages_end']>=$_SESSION['allAnimals'] || $_SESSION['pages_start']>=$_SESSION['allAnimals'])
    // {
        
    //     exit();
    // }


    $_SESSION['pages_start']+=$_SESSION['itemsInPage']; //4
    $_SESSION['pages_end']= $_SESSION['pages_start']+$_SESSION['itemsInPage']; //5
    // if($_SESSION['pages_end']>$_SESSION['allAnimals'])
    // {
    //     $_SESSION['pages_end']=$_SESSION['allAnimals'];
    //     return;
    // }
    $_SESSION['pageNumb']++;
   
    return;
}
if($_SESSION['btn']=="prev")
{
    // if($_SESSION['pages_end']<=0||$_SESSION['pages_start']<=0)
    // {
        
    //     exit();
    // }
    $_SESSION['btn']='';
    if($errEnd>$_SESSION['allAnimals'] || $errStart<0)
    {
        
        exit();
    }
    $_SESSION['pages_start']-=$_SESSION['itemsInPage']; //4
    // if($_SESSION['pages_start']<0)
    // {
    //     $_SESSION['pages_start']=0;
    // }

    $_SESSION['pages_end']-=$_SESSION['itemsInPage']; //5
    // if($_SESSION['pages_end']<=0)
    // {
    //     $_SESSION['pages_end']=1;
    // }
    $_SESSION['pageNumb']--;
    
    
    return;
}




