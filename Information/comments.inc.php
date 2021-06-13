<?php


function setComment($conn){//synarthsh kataxorishs sxoleiwn
    if(isset($_POST['commentSubmit'])){
        $UserID = $_POST['UserID'];
        $Date = $_POST['Date'];
        $message = $_POST['message'];

        if(empty($message)){// elegxos gia kena pedia kai epistrofh katallhlou error
            header("Location: ./index.php?error=FillAllBoxesC");
            exit();
        }else{//kataxorish sxolioy sthn vash dedomenon
            $sql = "INSERT INTO comments (UserID, Date, message) VALUES ('$UserID','$Date','$message')";
            $result = $conn ->query($sql);
            header("Location: ./index.php?CommentSet");
        }

        
    }
    


}

function getComment($conn){ // sinarthsh anagnoshs kai emfanhshs twn comment
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){// oso yparxoyn sxoleia sthn fash dedomenwn




        echo"<div class='be-comment'>";
        echo"<div class='be-comment-content'>";

        
                    
        echo"<span class='be-comment-name'>";
        echo $row['UserID'];
        echo "</span>";
        echo"<span class='be-comment-time'>";
        echo"<i class='fa fa-clock-o'></i>";
        if(!(empty(getUsernameByID($conn)))){// an yparxei xrisths
            if(getUsernameByID($conn)==$row['UserID']){//an einai o idios xrhsths pou egrapse to comment me ayton pou einai sindemenos sto site emfanizete h epilogh tou delete
                echo"<form class='deleteForm' method='POST' action='".deleteComment($conn)."'>
                        <input type='hidden' name='CommentID' value='".$row['CommentID']."'>
                        <button style=' background: none!important; border: none; cursor: pointer; color: #069;' type = 'submit' name='commentDelete'> Delete </button>
                    </form>";
            }
        }
        echo $row['Date'];
        echo"</span>";
        


        echo"<p class='be-comment-text'>";
        echo $row['message'];
        echo"</p>";
        echo"</div>";
        echo"</div>";
    }
    
    
}

function deleteComment($conn){//diagrafh sxoliou apo thn vash dedomenwn

    if(isset($_POST['commentDelete'])){
        $CommentID = $_POST['CommentID'];
        $sql = "DELETE FROM comments WHERE CommentID ='$CommentID'";
        $result = $conn->query($sql);
        header("Location: index.php");
    }
    

}

/*function getLogin($conn){
    if(isset($_POST['loginSubmit'])){
        $UserID = $_POST['UserID'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM user WHERE UserID = '$UserID' AND pass = '$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $row['id'];
                header("Location: index.php? loginsuccess");
                exit();
            }

        } else{
            header("Location: index.php? loginfailed");
            exit();
        }
    }
    
}*/
