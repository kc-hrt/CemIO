<?php 
include '../config.inc';
$dbconfig = mysqli_connect($servername,$username,$password,$dbname);
//include '../src/header.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
$password=mysqli_real_escape_string($dbconfig,$_POST['password']);

$sql_query="SELECT id FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($dbconfig,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);


// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;

header("location: ../admin");
}
else
{
$error="Username or Password is invalid";
}
}

echo '
<style>

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url(\'http://i.imgur.com/u0XmBmv.png\') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url(\'http://i.imgur.com/u0XmBmv.png\') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url(\'http://i.imgur.com/Qf83FTt.png\') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url(\'http://i.imgur.com/Qf83FTt.png\') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
</style>


<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form method="post" action="" name="loginform">
    <input type="text" value="demo" placeholder="Username" id="username" name="username" />
    <input type="password" value="demo" placeholder="Password" id="password" name="password" />
    <button type="submit">Submit</button>
    </form>
</div>';

include '../src/footer.php';
?>