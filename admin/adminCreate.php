<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create admin</title>
</head>
<body>



<!--Form for creating administrator account if needed-->

<table align="center">
    <form name="createLog" method="post" action="adminIncludes/adminCreate_inc.php">
        <tr>
            <td align="center" colspan="2"><h1>Create admin</h1></td>
        </tr>
        <tr>
            <td><label>Username:</label></td>
            <td><input type="text" name="adminUsername"></td>
        </tr>
        <tr>
            <td><label>Password:</label></td>
            <td><input type="password" name="adminPassword"></td>
        </tr>
        <tr>
            <td></td>
            <td height="20px"></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">
                <input type="submit" id="button" name="submitAdmin" value="Create">
                <input type="reset" id="button" name="reset" value="Cancel">
            </td>
        </tr>
    </form>
</table>
</body>
</html>
