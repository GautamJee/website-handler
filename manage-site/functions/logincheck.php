<?php
session_start();
 $host=$_SERVER['HTTP_HOST'];

   
        if(($_POST['ADMIN_USERNAME']!=NULL) && ($_POST['ADMIN_PASSWORD']!=NULL))
            {
                if(mysqli_connect('127.0.0.1', $_POST['ADMIN_USERNAME'], $_POST['ADMIN_PASSWORD']))
                {			
				
				$_SESSION['user'] = 'admin';
				$_SESSION['n']=$_POST['ADMIN_USERNAME'];
				$_SESSION['p']=$_POST['ADMIN_PASSWORD'];
				$extra="/website-maker/manage-site/index2.php";
				header("location:http://$host/$extra");
                }
                else
                {
                    $extra="/website-maker/manage-site/index.php";
                }
            }
        else{
            $extra="/website-maker/manage-site/index.php"; 
        }
            header("location:http://$host/$extra");
exit();
?>
