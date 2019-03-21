<?php

// initializing variables
$customer_id = "";
$first_name = "";
$middle_initial = "";
$last_name = "";
$contact_number = "";
$purok = "";
$barangay = "";
$city = "";
$zip_code = "";

  // insert to Table 'customer'
  if(isset($_POST['saveCus'])) {
    $customer_id = $_POST['customer_id'];
      $first_name = $_POST['first_name'];
    $middle_initial = $_POST['middle_initial'];
    $last_name = $_POST['last_name'];
    $contact_number = $_POST['contact_number'];
    $purok = $_POST['purok'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $zip_code = $_POST['zip_code'];
    
    $sql = "INSERT INTO customer (customer_id, first_name, middle_initial, last_name, contact_number, purok, barangay, city, zip_code) 
      VALUES ('$customer_id', '$first_name', '$middle_initial', '$last_name', '$contact_number', '$purok', '$barangay', '$city', '$zip_code')";
    mysqli_query($db, $sql);
    header('location: Vcustomer.php');
  }

  // update data from Table 'customer'
  if(isset($_POST['updateCus'])) {
    $customer_id = mysqli_real_escape_string($db, $_POST['customer_id']);
      $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $middle_initial = mysqli_real_escape_string($db, $_POST['middle_initial']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $contact_number = mysqli_real_escape_string($db, $_POST['contact_number']);
    $purok = mysqli_real_escape_string($db, $_POST['purok']);
    $barangay = mysqli_real_escape_string($db, $_POST['barangay']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);

    $sql = "UPDATE customer SET customer_id='$customer_id', first_name='$first_name', middle_initial='$middle_initial', last_name='$last_name', contact_number='$contact_number', purok='$purok', barangay='$barangay', city='$city', zip_code='$zip_code'
      WHERE customer_id='$customer_id'";
    mysqli_query($db, $sql);
    header('location: Vcustomer.php');
  }

?>