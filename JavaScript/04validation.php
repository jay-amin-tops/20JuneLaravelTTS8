<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">

        <table border="1" align="center">
            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" onblur="checkreq(this,'userNameError')" name="username" id="username" required>
                    <span id="userNameError"></span>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" onblur="checkreq(this,'passwordError')" name="password" id="password" required>
                    <span id="passwordError"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btn-login" id="btn-login"></td>
            </tr>
        </table>
        <script>
            function checkreq(e,spnid) {
                // let username = document.getElementById("username").value
                if (e.value == "") {
                    document.getElementById(spnid).innerHTML="<b>This field is required</b>"
                    // document.getElementById("userNameError").innerText="<b>This field is required</b>"
                } else {
                    document.getElementById(spnid).innerHTML=""
                }
            }
        </script>
    </form>

</body>

</html>