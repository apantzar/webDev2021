<?php
        date_default_timezone_set('Europe/Athens');
        session_start();
        ob_start();
?>
<?php
    if(isset($_POST['submit'])){
        header("Location: index.php?uploadsuccess");
        $file=$_FILES['file'];
        
        $fileName=$_FILES['file']['name'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileError=$_FILES['file']['error'];
        $fileType=$_FILES['file']['type'];

        $fileExt= explode('.',$fileName);
        $fileActualExt= strtolower(end($fileExt));


        $allowed= array('jpg','jpeg','png');
        if(in_array($fileActualExt,$allowed))
        {
            if($fileError === 0 ){
                if($fileSize < 1000000000){
                    $fileNameNew=uniqid('',true).".".$fileActualExt;

                    $fileDestination= '../Users/uploads/'. $fileNameNew;

                    move_uploaded_file($fileTmpName,$fileDestination);
                    header("Location: index.php?uploadsuccess");

                }
                else{
                    echo"Your file is too big";
                }

            }
            else{
                echo"There was an error uploading this file!";
            }
        }
        else{
            echo"You cannot upload files of this type!";
        }

    }
    else{
        header("Location: index.php?error");
    }
?>