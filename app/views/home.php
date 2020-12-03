<?php
    session_start();
    if (!isset($_SESSION['active'])){
    header ('Location:../../views/users/login.php');
    }    

    function logout(){
        session_destroy();
        header('Location:../../views/users/login.php');
    }
    
    if(array_key_exists('logout',$_POST)){
        logout();
     }
     
?>
<div class="row">
    <div class="col-2"></div>
    <div class = "col-4">
        <p><?php echo "BIENVENIDO: ". $_SESSION['nameuser'], " ", $_SESSION['lastnameuser']; ?> </p>
        <a class="btn btn-primary" href="../views/users/post.php" role="button">Create a post</a>
        <a class="btn btn-info" href="listpost.php" role="button">See my posts</a>      
    </div>
    <div class="col-2"></div>
    <form method="POST">
        <button name="logout" id="logout" class="btn btn-warning">logout</button>
    </form>
</div>
