<?php
include_once ('config.php');

$vid="";
$vname="";
$vreview="";
if(isset($_POST["button_add"])){
    $sql = mysqli_query($link,"INSERT INTO table_product (product_name, product_review, product_picture) VALUES('".$_POST["product_name"]."','".$_POST["product_review"]."','".$_FILES["product_picture"]["name"]."')") or die("Warning ! Error, wrong query!");
    if($sql){
        $target_dir = "images/picture/";
        $target_file = $target_dir . basename($_FILES["product_picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(move_uploaded_file($_FILES["product_picture"]["tmp_name"], $target_file)){
            echo "Upload successful";
        }
        else{
            echo "Upload failed";
        }
    }
}

else if(isset($_POST["button_edit"])){
    $sql=mysqli_query($link,"update table_product set product_name='".$_POST["product_name"]."', product_review='".$_POST["product_review"]."' WHERE product_id='".$_POST["product_id"]."'");
}
if(isset($_GET["delete"])){
    $sql = mysqli_query($link,"delete from table_product WHERE product_id='".$_GET["delete"]."'");
    if($sql){
        unlink("images/picture/".$_GET["picture"]);
    }
}
else if (isset($_GET["edit"])){
    $sql=mysqli_query($link,"select * from table_product WHERE product_id='".$_GET["edit"]."'");
    while ($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
        $vid=$row["product_id"];
        $vname=$row["product_name"];
        $vreview=$row["product_review"];
    }
}
?>
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
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post" enctype="multipart/form-data">
    <div class="table-responsive">
        <table class="table">
            <tr><td>Product Id</td><td><input type="text" name="product_id" value="<?php echo $vid;?>"/></td></tr>
            <tr><td>Product Name</td><td><input type="text" name="product_name" value="<?php echo $vname;?>"/></td></tr>
            <tr><td>Product Review</td><td><input type="text" name="product_review" value="<?php echo $vreview;?>"/></td></tr>
            <tr><td>Product Picture</td><td><input  type="file" class="form-control-file" name="product_picture"/></td></tr>
            <tr><td colspan="2"><input class="btn btn-primary" type="submit" name="button_add" value="Add"/>
                    <input class="btn btn-primary" type="submit" name="button_edit" value="Edit"/></td></tr>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" border="1px">
            <tr><th>Product Id</th><th>Product Name</th><th>Product Review</th><th>Product </th><th>Action</th></tr>
            <?php
            $sql = mysqli_query($link,"select * from table_product");
            while ($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
                echo '<tr><td>'.$row["product_id"].'</td>';
                echo '<td>'.$row["product_name"].'</td>';
                echo '<td>'.$row["product_review"].'</td>';
                echo '<td><img src="images/picture/'.$row["product_picture"].'" style="width:100px;"/></td>';
                echo '<td><a href="?edit='.$row["product_id"].'"><p class="btn btn-primary">Edit</p></a><p></p><a href="?delete='.$row["product_id"].'&picture='.$row["product_picture"].'"><p class="btn btn-primary">Delete</p></a></td></tr>';
            }

            ?>
        </table>
    </div>
</form>

</body>
