<?php
session_start();
?>
<html>
<style>
    .posLeft{
        float: left;
    }
    .posRight{
        float: right;
    }

</style>
<html>
<head>
    <meta charset="utf-8">
	
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Main page</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a class="glyphicon glyphicon-log-in" href="login.php">Login</a></li>
                <li><form method="post" action="product.php">
                        <input class="btn btn-danger navbar-btn" type="submit" name="logout" value="Logout"/>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php
                        if (isset($_SESSION["username"])){
                            echo" ".$_SESSION["username"];
                        }else {
                            echo "Unknown user";
                        }
                        ?></a></li>


            </ul>
        </div>
    </nav>

    <?php
        if (isset($_SESSION["username"])){

        }else {
            echo "<h1 align=\"center\" class=\"display-2\">Please login to continue.</h1> ";
        }
        ?>
    <?php
    if (isset($_POST['logout'])){
        unset($_SESSION['username']);
        session_destroy();
    }
    ?>

</header>
<?php
if (isset($_SESSION["username"])){
    include_once ('productList.php');
    /*echo 'it works';*/
}
?>


</body>
</html>