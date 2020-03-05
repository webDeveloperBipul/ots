
<?php
session_start();
include('sql_config.php');






if(isset($_POST["product_code"], $_POST["product_name"])){

    $product_code = mysqli_real_escape_string($conn, $_POST["product_code"]);
    $sku = mysqli_real_escape_string($conn, $_POST["sku"]);
    $product_name = mysqli_real_escape_string($conn, $_POST["product_name"]);
    $old_price= mysqli_real_escape_string($conn, $_POST["old_price"]);
    $weight = mysqli_real_escape_string($conn, $_POST["weight"]);
    $made_in = mysqli_real_escape_string($conn, $_POST["made_in"]);
    $size = mysqli_real_escape_string($conn, $_POST["size"]);
    $color = mysqli_real_escape_string($conn, $_POST["color"]);
    $regular_price = mysqli_real_escape_string($conn, $_POST["regular_price"]);
    $shipping_charge = mysqli_real_escape_string($conn, $_POST["shipping_charge"]);
    $catagory = mysqli_real_escape_string($conn, $_POST["catagory"]);
    $sub_catagory = mysqli_real_escape_string($conn, $_POST["sub_catagory"]);
    $sub_sub_catagory = mysqli_real_escape_string($conn, $_POST["sub_sub_catagory"]);
    $add_date = mysqli_real_escape_string($conn, $_POST["add_date"]);
    $image = $_FILES['image']['name'];

}

$sql = "INSERT INTO products (product_code, sku, product_name, old_price, weight, made_in, size, regular_price, shipping_charge, catagory, sub_catagory, sub_sub_catagory, color, add_date, image)
VALUES('$product_code', '$sku', '$product_name', '$old_price', '$weight', '$made_in', '$size',  '$regular_price',  '$shipping_charge', '$catagory', '$sub_sub_catagory', '$sub_catagory', '$color', '$add_date',  '$image')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/* 
header('location: ../single_view.php?id='. $last_id); */



  // Image Upload Code

  if (isset($_POST['img_upload'])) {

  	// image file directory
  	$target = "../images/members/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }


  
  $conn->close();
?>




<!-- ==================================================== -->
