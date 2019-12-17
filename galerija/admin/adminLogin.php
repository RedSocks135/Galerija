<!--Page made for admin account to log in admin page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in admin</title>
</head>
<body>


<!--Log in form-->
<table align="center">
    <form name="createLog" method="post" action="adminIncludes/adminLogin_inc.php">
        <tr>
            <h1 align="center">Log in admin</h1>
            <td align="center" height="30px"></td>
        </tr><tr>
            <td><label>Username:</label></td>
            <td><input type="text" name="adminUsername"></td>
        </tr><tr>
            <td><label>Password:</label></td>
            <td><input type="password" name="adminPassword"></td>
        </tr><tr>
            <td height="20px" colspan="2"></td>
        </tr><tr>
            <td colspan="2" align="center"><input type="submit" name="log" id="button" value="Log in">
                <input type="reset" name="reset" value="Cancel" id="button"></td>
        </tr>
    </form>

</table>
</body>
</html>
