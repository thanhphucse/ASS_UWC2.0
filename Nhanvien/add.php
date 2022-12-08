

<?php
        $con = mysqli_connect("localhost", 'root', '', "examples");
        $id = isset($_POST['id']) ? $_POST['id'] :'';
        $fullName = isset($_POST['fullName']) ? $_POST['fullName'] :'';
        $userName = isset($_POST['userName']) ? $_POST['userName'] :'';
        $type = isset($_POST['type']) ? $_POST['type']: '';
        $isBackOfficer = isset($_POST['isBackOfficer']) ? $_POST['isBackOfficer'] :'';
        
        mysqli_query($con, "INSERT INTO staff_db (ID, FULL_NAME, USER_NAME, TYPE, isBackOfficer) VALUES('$id','$fullName','$userName', '$type', '$isBackOfficer')");
        header("Location:index.php");
?>
