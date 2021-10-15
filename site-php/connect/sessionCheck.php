<?php
    if( !isset($_SESSION['myMemberID']) ){
        Header("Location: ../login/login.php"); //회원만 작성할 수 있게
    }
?>