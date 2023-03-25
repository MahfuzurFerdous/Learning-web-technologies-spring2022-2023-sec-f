<!DOCTYPE html>
<html>
  <head>
    <title>PUBLIC HOME</title>
  </head>
  <body>
    <center>
      <table border="1" height="300" width="700">
        <tr height="60">
          <td>
            <table width="800">
              <tr>
                <td>
                  <img height="60" src="images.png">
                </td>
                <td align="right">
                  <a href="publichome.php">Home</a>
                  <a href="login.php">| Login</a>
                  <a href="registration.php">| Registration</a>  
                </td>    
              </tr>
            </table>
          </td>
        </tr>
		</tr>
            <tr>
                <td>       
					        <form method="POST" action="logincheck.php"  >
                            <fieldset>
                            <legend>LOGIN</legend>
                            Username: <input type="text" name="username" value=""/> <br>
                            Password: <input type="password" name="password" value=""/> <br> 
                            <hr>
                            <input type="radio" name="rememberme" value=""/> Remember Me <br/>
                            <input type="submit" name="login" value="Submit"/>
                            <a href="forgotpassword.php">Forgot Password?</a>  
            </fieldset>
        </form>
</td>
            </tr>
        <tr height="30">
          <td align="center">
           Copyright &copy; 2017
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>
