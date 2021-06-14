<?php
        date_default_timezone_set('Europe/Athens');
        session_start();
        ob_start();
        include'dbu.inc.php';
        include'userFunctions.php';
        $id= $_SESSION['id'];
?>
<?php
    if(isset($_POST['submit'])){
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
                    $fileNameNew="profile".$id.".".$fileActualExt;

                    $fileDestination= '../Users/uploads/'. $fileNameNew;

                    $sql="UPDATE profileimg SET status=0 WHERE userid =$id";
                    $result=$conn->query($sql);

                    move_uploaded_file($fileTmpName,$fileDestination);
                    header("Location: index.php?uploadsuccess");

                }
                else{
                    header("Location: index.php?error");
                }

            }
            else{
                header("Location: index.php?error");
            }
        }
        else{
            header("Location: index.php?error");
        }

    }
    else{
        header("Location: index.php?error");
    }
?>