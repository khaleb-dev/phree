<?php 
Class databaseConnection {

    public $connect;

    //for status
    private $message = "";
    
    public function __construct() {
        //open connection to database
        // configuration
        $dbhost = "localhost";
        $dbname = "capture"; //replace "capture" with your database name
        $dbuser = "root";
        $dbpass = ""; // if your database have a password, put it here!
        try {
            $this->connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            $this->message = "Connection failed";
        }
        return TRUE;
    }

    Public function addNewStudent($rollNo, $firstname, $middlename, $lastname, $dob, $gender, $address, $phoneNumber, $email, $matricNo, $regNo, $parentName, $parentPhoneNumber, $level, $profilePhoto) {

        try {

            $sql = "INSERT INTO students (ROLL_NO, FIRST_NAME, MIDDLE_NAME, LAST_NAME, DOB, GENDER, ADDRESS, TELEPHONE, EMAIL, MATRIC_NUMBER, REG_NO, PARENT_GUARDIAN_NAME, PARENT_GUARDIAN_PHONE_NO, STUDENT_LEVEL, PROFILE_PHOTO, CREATED_TIME, UPDATED_TIME)" . "VALUES (:rollNo, :firstName, :middleName, :lastName, :dob, :gender, :address, :phoneNumber, :email, :matricNo, :regNo, :parentName, :parentNumber, :level, :profilePhoto, NOW(), NOW())";
            
            $q = $this->connect->prepare($sql);
            $q->execute(array(
                ':rollNo' => $rollNo,
                ':firstName' => $firstname,
                ':middleName' => $middlename,
                ':lastName' => $lastname,
                ':dob' => $dob,
                ':gender' => $gender,
                ':address' => $address,
                ':phoneNumber' => $phoneNumber,
                ':email' => $email,
                ':matricNo' => $matricNo,
                ':regNo' => $regNo,
                ':parentName' => $parentName,
                ':parentNumber' => $parentNumber,
                ':level' => $level,
                ':profilePhoto' => $profilePhoto
            ));
            
            $this->message = 'Student data was saved successfully!';

        } catch (PDOException $e) {
            $this->message = 'An error might have occurred in the System';
            exit;            
        }
    }
}