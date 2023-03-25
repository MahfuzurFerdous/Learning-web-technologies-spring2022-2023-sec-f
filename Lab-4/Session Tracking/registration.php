<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <table width="800" align="center" border="1">
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td>
                <img height="70" src="xcompany.png" alt="X Company logo">
              </td>
              <td align="right">
                <a href="publicHome.php">Home</a>
                <a href="login.php">| Login</a>
                <a href="registration.php">| Registration</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
		<form method="post" action="regCheck.php">
            <fieldset>
              <legend>REGISTRATION</legend>
              <table>
                <tr>
                  <td>Name</td>
                  <td><input type="text" name="name" value=""></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td><input type="password" name="confirm_password" value=""></td>
                </tr>
              </table>
              <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
              </fieldset>
              <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="dob" value="">
              </fieldset>
              <input type="submit" name="register" value="Submit">
              <input type="reset" name="reset" value="Reset">
            </fieldset>
          </form>
        </td>
      </tr>
      <tr>
        <td align="center">Copyright &copy; 2017</td>
      </tr>
    </table>
  </body>
</html>
