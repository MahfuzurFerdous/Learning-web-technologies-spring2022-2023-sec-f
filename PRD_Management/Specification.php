<!DOCTYPE html>
<html>
    <head>
        <title>Specifications</title>
    </head>
    <body>
        <h2>Specifications</h2>
        <form method="post" action="">
            <table border="1">
                <tr>
                    <td>Specifications Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><textarea name="description"></textarea></td>
                </tr>
                <tr>
                    <td>User Role:</td>
                    <td><input type="text" name="role"></td>
                </tr>
                <tr>
                    <td>User Stories:</td>
                    <td><textarea name="stories"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="entry" value="Add">
                        <button onclick="location.href='EditSpec.php'">Edit</button>
                        <button onclick="location.href='DeleteSpec.php'">Delete</button>
                    </td>
                </tr>
            </table>
        </form>
        <button onclick="location.href='Dashboard.php'">Back</button>
    </body>
</html>
