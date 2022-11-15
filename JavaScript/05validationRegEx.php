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
                <td>Confirm Password</td>
                <td>
                    <input type="password" onblur="checkreq(this,'cpasswordError')" name="cpassword" id="cpassword" required>
                    <span id="cpasswordError"></span>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" onkeyup="checkemail(this,'emailError')" onblur="checkreq(this,'emailError')" name="email" id="email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,5}$">
                    <span id="emailError"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btn-login" id="btn-login"></td>
            </tr>
        </table>
        <script>
            function checkreq(e, spnid) {
                // let username = document.getElementById("username").value
                if (e.value == "") {
                    document.getElementById(spnid).innerHTML = "<b>This field is required</b>"
                    // document.getElementById("userNameError").innerText="<b>This field is required</b>"
                } else {
                    document.getElementById(spnid).innerHTML = ""
                }
            }
            function checkemail(e, spnid) {
                // let pattern = /^[a-z]+$/; //Only small char
                // let pattern = /^[a-zA-Z]+$/; //capt / small char
                // let pattern = /^[0-9]+$/; //only number
                // let pattern = /^[a-zA-Z0-9]+$/; //num+char
                // let pattern = /^[a-z0-9][a-z0-9-_\.]+@([a-z]|[a-z0-9]?[a-z0-9-]+[a-z0-9])\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/
                let pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (pattern.test(e.value)) {
                    document.getElementById(spnid).innerHTML = "Valid"
                    // document.getElementById("userNameError").innerText="<b>This field is required</b>"
                } else {
                    document.getElementById(spnid).innerHTML = "Invalid format"
                }
            }
        </script>
    </form>

</body>

</html>