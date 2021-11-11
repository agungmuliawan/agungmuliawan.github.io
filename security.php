<form method="post"> 
 <p align = "center">
 <table>
 <tr>
 <td>Username</td>
 <td><input type="text" name="username"></td>
 </tr>
 <tr>
 <td>Password</td>
 <td><input type="password" name="password"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="login" value="Log In"></td>
 </tr>
 </table>
 </p>
 </form>

 <?php
 $username = $_POST['username'];
 $pass = $_POST['password'];
    if ($username == "pmgclass2020" AND $pass=="pmgclass2020") {
        
        
    }
    else {
        echo "salah";
    }
?>