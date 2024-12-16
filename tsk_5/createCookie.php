
<?php

    setcookie("username","Nimal",time()+(60*5));

    if(count($_COOKIE) > 0){
        echo "Coocies are enable on this Browser";
    }else {
        echo "Coocies are dissable on this Browser";
    }
  
?>
