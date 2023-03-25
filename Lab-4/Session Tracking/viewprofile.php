<html>
    <head>
        <title>My Dashboard</title>
    </head>
    <body>
        <center>
            <table border="1" height="500" width="900">
                <tr height="80">
                    <td colspan="2"> 
                    <table border="1" height="500" width="900">
                <tr height="80">
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
        <legend> PROFILE </legend>
        <table>
                    <tr>
                        <td>Name</td>
                        <td align="left"> :<?php echo $_SESSION['username'] ?>  </td>

                        <td colspan="2" rowspan="3"> <img height=200 src="pp.png"> </td>
                        
                    </tr>
                    <tr>
                             <td>Email</td>  
                             <td>:bob@aiub.edu</td>               
                    </tr>
                    <tr>
                            <td>Gender</td>  
                             <td>:Male</td> 
                    </tr>
                    <tr>
                             <td>Date Of Birth</td>  
                             <td>:17/09/2001</td> 
                             <td align="center"><a href="changeprofilepicture.php">Change </a> </td>
                    </tr>
                    <tr>
                        <td colspan="4"><a href="editprofile.php">Edit Profile </a></td>
                        
                    </tr>
        </table>
</fieldset>


</td>

                </tr>
                <tr height="60">
                    <td colspan="2" align="center">Copyright &copy; 2017</td>
                </tr>
            </table>
        </center>
    </body>
</html>