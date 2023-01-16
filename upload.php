<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    //print_r($file);// i made it to can know what file return
    $fileName = $file['name'];
    $fileFullPath = $file['full_path'];
    $fileType = $file['type'];
    $fileTEmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode(".", $fileName); //i want to take jpg from name of image(rooa.jpg);
    $fileActualExt = strtolower(end($fileExt));

    //size, ext allowed, error
    $allowedExt = array("jpg", "jpeg", "pdf", "png");
    if ($fileError === 0) {
        if (in_array($fileActualExt, $allowedExt)) {
            if ($fileSize < 100000) {
                $fileNewName = uniqid("", true) . $fileActualExt;
                $fileDistination = "uploads/" . $fileNewName;
                move_uploaded_file($fileTEmpName, $fileDistination);
                header("Location: loma.php?uploadsuccess");
            } else {
                echo "the size of your picture is too big";
            }
        } else {
            echo "this file extension is not allowed";
        }
    } else {
        echo "There is an error uploading that file";
    }
}
