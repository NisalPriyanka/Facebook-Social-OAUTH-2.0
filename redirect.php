<!--temporary page for redirect results-->
<?php

    require 'config.php';

    session_start();

?>


<?php


  if(isset($_GET['code']))
  {
    //get Access token and store it inside $result variable
    $result = get_auth_code(174875303212995, "https://localhost/Facebook-Social-OAUTH-2.0/redirect.php", $_GET['code'], "MTc0ODc1MzAzMjEyOTk1OmM2YzQzMjRmMmQ4NzZhYjk0ODM1ZWI3N2U3NGY2Yzkw");
    
    //jason array to fetch token
    $token_json = json_decode($result);
    

    //set cookie including access token
    if(!isset($_COOKIE['access_token']))
    {
      echo "cookie not set";
      setcookie("access_token",$token_json->access_token,time()+3600,"/","localhost");
      echo '<script> window.location.assign("https://localhost/Facebook-Social-OAUTH-2.0/server.php") </script>';
    }

    echo '<script> window.location.assign("https://localhost/Facebook-Social-OAUTH-2.0/server.php") </script>';

    

    

    
  }



?>