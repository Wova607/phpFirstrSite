<?php

$oldEnd=$_SESSION['pages_end'];

$oldStart=$_SESSION['pages_start'];

$endpages=$_SESSION['elements']/$_SESSION['itemsInPage'];

if($_SESSION['btn']=="next")
{
    $_SESSION['btn']='';
    
    
    $_SESSION['pages_start']+=$_SESSION['itemsInPage']; 
    $_SESSION['pages_end']+=$_SESSION['itemsInPage']; 
    if($_SESSION['pages_end']>$_SESSION['elements'])
    {
        $_SESSION['pages_end']=$_SESSION['elements'];
    }

    if( $endpages< $_SESSION['pageNumb'] )
    {    
        $_SESSION['pages_start']=$oldStart;  
        $_SESSION['pages_end']=$oldEnd;  
        return;
    }
    $_SESSION['pageNumb']++;   
    return;
}

if($_SESSION['btn']=="prev")
{    
    $_SESSION['btn']='';
    
    $_SESSION['pages_start']-=$_SESSION['itemsInPage'];
    $_SESSION['pages_end']=$oldStart; 
    if($_SESSION['pageNumb']==1)
    {   
        $_SESSION['pages_start']=$oldStart; 
        $_SESSION['pages_end']=$oldEnd;     
        return;
    }
    $_SESSION['pageNumb']--;
       
    return;
}




