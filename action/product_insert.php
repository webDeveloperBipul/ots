
<?php
session_start();
include('sql_config.php');





if (isset($_POST['shipping_charge'])){
    $shipping_charge = mysqli_real_escape_string($conn, $_POST['shipping_charge']);
}
   
else {
    $shipping_charge= "Free";
}


if (isset($_POST['size'])){
    $size = implode(',', $_POST['size']);
}
   
else {
    $size= "";
}

  
if (isset($_POST['color'])){
    $color = implode(',', $_POST['color']);
}
   
else {
    $color= "";
}





if (isset($_POST['min_order'])){
    $min_order = mysqli_real_escape_string($conn, $_POST['min_order']);
}
   
else {
    $min_order= "";
}

if (isset($_POST['made_in'])){
    $made_in = mysqli_real_escape_string($conn, $_POST['made_in']);
}
   
else {
    $made_in= "";
}



      
 
if(isset($_POST['product_code'], $_POST['product_name'])){
 

    $product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
    $sku = mysqli_real_escape_string($conn, $_POST['sku']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $old_price= mysqli_real_escape_string($conn, $_POST['old_price']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);

    $add_date = mysqli_real_escape_string($conn, $_POST['add_date']);
    $regular_price = mysqli_real_escape_string($conn, $_POST['regular_price']);
    $catagory = mysqli_real_escape_string($conn, $_POST['catagory']);
    $sub_catagory = mysqli_real_escape_string($conn, $_POST['sub_catagory']);
    $sub_sub_catagory = mysqli_real_escape_string($conn, $_POST['sub_sub_catagory']);

    $image = $_FILES['image']['name'];
    

}


$sql = "INSERT INTO products (product_code, sku, product_name, old_price, weight, made_in, size, regular_price, shipping_charge, catagory, sub_catagory, sub_sub_catagory, color, add_date, min_order, image)
VALUES('$product_code', '$sku', '$product_name', '$old_price', '$weight', '$made_in', '$size',  '$regular_price',  '$shipping_charge', '$catagory', '$sub_sub_catagory', '$sub_catagory', '$color', '$add_date', '$min_order',  '$image')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;  
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}


header('location: ../single_product_view.php?product_code='. $product_code); 



  // Image Upload Code

  if (isset($_POST['image'])) {
      

  	// image file directory
  	$target = '../images/products/'.basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

  		echo 'Image uploaded successfully';
  	}else{

  		echo 'Failed to upload image';
  	}
  }


  
  $conn->close();
?>




<!-- ==================================================== -->
