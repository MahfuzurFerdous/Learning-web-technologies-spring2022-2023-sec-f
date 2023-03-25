<!DOCTYPE html>
<html>
  <head>
    <title>PUBLIC HOME</title>
  </head>
  <body>
    <center>
      <table border="1" height="300" width="700">
        <tr height="60">
        
        <td colspan="2"> 
          
        <table width="900">
                            <tr>
                                <td>
                                    <img height="80" src="images.png">
                                </td>
                                <td align="right">
                                    Logged in as :<?php session_start(); echo $_SESSION['username'] ?></a> |
                                    <a href="logout.php">Logout</a> 
                                </td>    
                            </tr>    
                        </table>
          </td>
        </tr>
        <tr>
                    <td width="300">
                        <h3>My Account</h3>
                        <hr>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="viewprofile.php">View Profile</a></li>
                            <li><a href="editprofile.php">Edit Profile</a></li>
                            <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                            <li><a href="changepassword.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </td>
        <td>

<fieldset>
  <legend>PROFILE PICTURE</legend>
  <img height=200 src="pp.png"> <br>
  <input type="file" name="changepp" value="Choose File"> No file chosen <br>
  <hr>
  <input type="submit" name="submit" value="Submit"/>
      
</fieldset>

</td>
</tr>
        <tr height="30">
          <td colspan="2" align="center">
            &copy; 2017
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>
