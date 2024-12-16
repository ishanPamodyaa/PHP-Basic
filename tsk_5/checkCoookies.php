<?php


    echo $_COOKIE['username'];
    //print_r($_COOKIE);

    $count = count($_COOKIE);
    
    checkCookie();
    
    function checkCookie(){
        global $count;
        if( count($_COOKIE) > 0){
            echo "cookie count : $count";
        }else{
            echo "cookie count : $count";
        }
        }
    
?>
