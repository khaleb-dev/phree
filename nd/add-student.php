<?php
session_start();
//add student form
//include the utility file
//require_once ('../utility.php');
require_once ('./utility.php');
// include'../backend/database.php';
require_once ('./databaseConnection.php');

$dbConnect = new databaseConnection();

if (isset($_POST['addstudent-Submit'])) 
{
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $rollNo = $_POST['rollNo'];
  $matricNo = $_POST['matNo'];
  $regNo = $_POST['regNo'];
  $email = $_POST['email'];
  $regDate = $_POST['regDate'];
  $level = $_POST['level'];
  $gender = $_POST['gender'];
  $phoneNumber = $_POST['number'];
  $parentName = $_POST['parentName'];
  $parentPhoneNumber = $_POST['parentNumber'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];

  $validFirstname = Utility::validateString($firstname);
  $validMiddlename = Utility::validateString($middlename);
  $validLastname = Utility::validateString($lastname);
  $validRollNo = Utility::validateString($rollNo);
  $validMatricNo = Utility::validateString($matricNo);
  $validRegNo = Utility::validateString($regNo);
  $validEmail = Utility::validateEmail($email);
  $validRegDate = Utility::validateString($regDate);
  // $validRegDate = true;
  $validLevel = Utility::validateInt((int)$level);
  $validGender = Utility::validateString($gender);
  $validPhoneNumber = Utility::validateString($phoneNumber);
  $validParentName = Utility::validateString($parentName);
  $validParentPhoneNumber = Utility::validateString($parentPhoneNumber);
  $validDob = Utility::validateString($dob);
  // $validDob = true;
  $validAddress = Utility::validateString($address);

  //photo upload logic
  $photo = htmlentities(trim($_FILES['profilePic']['name']), ENT_QUOTES, 'UTF-8');
  $tmp_dir = $_FILES['profilePic']['tmp_name'];
  $photoSize = $_FILES['profilePic']['size'];
  $upload_dir = "assets/img/std";
  $img_ext = strtolower(pathinfo($photo,PATHINFO_EXTENSION));
  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
  $profilePhoto = Utility::random_strings(10).".".$img_ext;

  if ($validFirstname && $validMiddlename && $validLastname && $validRollNo &&  $validMatricNo && $validRegNo && $validEmail && $validRegDate && $validLevel && $validGender && $validPhoneNumber && $validParentName && $validParentPhoneNumber && $validDob && $validAddress)
  {
    move_uploaded_file($tmp_dir, $upload_dir.$profilePhoto);
    $dbConnect->addNewStudent($rollNo, $firstname, $middlename, $lastname, $dob, $gender, $address, $phoneNumber, $email, $matricNo, $regNo, $parentName, $parentPhoneNumber, $level, $profilePhoto);
    
    echo "validation passed!";
    exit();
  }
  else {
    echo $validFirstname = Utility::validateString($firstname). '<br>';
    echo $validMiddlename = Utility::validateString($middlename). '<br>';
    echo $validLastname = Utility::validateString($lastname). '<br>';
    echo $validRollNo = Utility::validateString($rollNo). '<br>';
    echo $validMatricNo = Utility::validateString($matricNo). '<br>';
    echo $validRegNo = Utility::validateString($regNo). '<br>';
    echo $validEmail = Utility::validateEmail($email). '<br>';
    echo $validRegDate = true. '<br>';
    echo $validLevel = Utility::validateInt((int)$level). '<br>';
    echo $validGender = Utility::validateString($gender). '<br>';
    echo $validPhoneNumber = Utility::validateString($phoneNumber). '<br>';
    echo $validParentName = Utility::validateString($parentName). '<br>';
    echo $validParentPhoneNumber = Utility::validateString($parentPhoneNumber). '<br>';
    echo $validDob = true. '<br>';
    echo $validAddress = Utility::validateString($address). '<br>';
    echo "validation failed!";
    exit();
  }
}
    
   //      $sql = "INSERT INTO students (ROLL_NO,FIRST_NAME, MIDDLE_NAME, LAST_NAME,DOB,GENDER,ADDRESS,TELEPHONE,EMAIL,MATRIC_NUMBER,REG_NO,PARENT_GUARDIAN_NAME,PARENT_GUARDIAN_PHONE_NO,STUDENT_LEVEL,CREATED_TIME) VALUES ('$rollNo','$firstname', '$middlename', '$lastname', '$dob', '$gender', '$address', '$number', '$email', '$matricNo',  '$regNo', '$parentName', '$parentNumber', '$level', '$8')";
   // $statement= $db->query ($sql);
        // '$firstname','$middlename','$lastname','$dob','$gender','$address','$number','$email', '$matricNo','$rollNo','$regNo', '$parentName','$parentNumber','$level','$regDate
        // $statement= $conn->prepare($sql);
        // $statement->execute();
    //     $success_msg ='<p>New record created successfully<i class=" icon-holder material-icons f-left"style="color:green;">done_all</i></p>';
    // }
//   }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
?>