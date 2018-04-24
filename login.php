<?php
session_start();    // Session start

if(isset($_POST['check']))    // Check form submit with IF Isset function
{
    $username= $_POST['username'];    // set variable value
    // set variable value
    if($_POST['username']==$username)  // Check Given user name, password and Variable user name password are same
    {
        $_SESSION['username']=$username;    // set session from given user name
        header('location:index.php');
    }
    else
    {
        $err="Authentication Failed Try again!";
    }
}
?>
<?php
if(isset($_SESSION['username']))     //if session not found redirect to homepage
{
header('location:index.php');
}
?>

<html>
<head>
    <title>Main Page</title>
</head>
<body>


<?php require 'inc/head.php'; ?>

    <?php if(isset($err)){ echo $err; } ?>

    <div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form  method="POST" name="loginauth" target="_self">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="check" type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>





</body>
</html>