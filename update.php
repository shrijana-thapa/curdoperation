
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
         <!-----FONTAWESOME LINK-------->
         <script src="https://kit.fontawesome.com/31c4898ef7.js" crossorigin="anonymous"></script>
        

         <!-----CSS Link------>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="login-box">
            <img src="avatar.png" class="avatar">
            <h1> Login </h1>
            <form action ="" method="POST">
                <?php
                $conn=mysqli_connect("localhost","root","","curdform");
                 $id=$_GET['id'];
                    $select="SELECT * from curdreg where id=$id";
                    $q=mysqli_query($conn,$select);
                    $res=mysqli_fetch_assoc($q);

                if(isset($_POST['update'])){

                    $id=$_GET['id'];
                   $Username = $_POST['Username'];
                    $Password = $_POST['Password'];
                    $update="UPDATE curdreg set id='$id',Username='$Username',Password='$Password' where id=$id";
                    $sql=mysqli_query($conn,$update);
                    if($sql){
                        ?>
                        <script>alert("updated successfully");</script>

                        <?php
                        header('location:display.php');
                    }
                    else{
                        ?>
                        <script> alert('not updated');</script>
                    <?php
                    }
                    }
                    ?>

                <p>Username</p>
                <input type="text" name="Username"  value="<?php echo $res['Username'];?>" placeholder="Enter Username">
                <p></i>Password</p>
                <input type="password" name="Password"  value="<?php echo $res['Password'];?>" placeholder="Enter Password">
                <input type="submit"  value="UPDATE" name="update">
                <a href="#">Forgot Password</a>
            </form>
        </div>
    </body>
</html>
