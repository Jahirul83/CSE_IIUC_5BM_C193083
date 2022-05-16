<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello_php</title> 
</head>
<body>
   
        <div class="form-validation col-md-6" style="margin-left:15rem">
            <form method="post" action="" id="frm" >
                <div class="row mb-3">
                    <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Enter Name">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="stuid" name="stuid" placeholder="Enter ID">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Birth Date">
                </div>
                <div class="row mb-3">
                    <select name="gender">
                        <option disabled selected value="Select Gender">Select Gender</option>
                        <option>male</option>
                        <option>female</option>
                        <option>other</option>
                    </select>
                </div>
                <div class="row mb-3">
                     <select name="booldgrp">
                        <option disabled selected value="Select Boold Group">Select Boold Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                 </div>
                <div class="row mb-3">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                </div>
                <div class="row mb-3">
                    <input type="submit" class="btn btn-success" id="submitbtn" name ="submitbtn" action="">
                </div>
            </form>
        </div>
        
</body>
</html>



<?php 
    $submitbutton= $_POST['submitbtn'];
    echo $submitbutton,"Hello.." ;
    if($submitbutton)
    {
        $stuname       = $_POST['stuname'] ;
        $stuid         = $_POST['stuid'] ;
        $phone         = $_POST['phone'] ;
        $gender        = $_POST['gender'] ;
        $booldgrp      = $_POST['booldgrp'] ;
        $dob           = $_POST['dob'] ;
        $pass          = $_POST['pass'] ;
        $address       = $_POST['address'] ;

        // echo $stuname," ",$stuid;

        $db =mysqli_connect("localhost","root","","5bmaut21");
        mysqli_query($db,"INSERT INTO studentinfo(stuname,stuid,phone,gender,booldgrp,dob,pass,address) values('$stuname','$stuid','$phone','$gender','$booldgrp','$dob','$pass','$address')");
    }
    else
    {
    //This statement to be executed
        echo "Error !!!";
    }
    

?>

