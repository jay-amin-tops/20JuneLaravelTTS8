<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <form method="post" id="registration">

        <table border="1" class="mt-5 table-bordered" align="center">
            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" onblur="checkreq(this,'userNameError')" name="user_name" id="user_name" required>
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
                <td>Mobile</td>
                <td>
                    <input type="tel" name="mobile" id="mobile" required minlength="10" maxlength="10">
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btn-login" id="btn-login"></td>
            </tr>
        </table>
    </form>
    <div class="container mt-5">

        <table class="table table-bordered">
            <thead class="bg-dark text-light">
                <tr>
                    <td>Sr No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody id="disp-all-users">

            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
        $(document).ready(function() {

            $.ajax({
                url: "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/API/getallusers",
                success: function(response) {
                    // console.log(response);
                    data = $.parseJSON(response)
                    // console.log(data.Code);
                    if (data.Code == 1) {
                        HtmlResponse = ""
                        count = 1
                        data.Data.forEach(element => {
                            console.log(element);
                            HtmlResponse += `<tr>
                            <td>${count}</td>
                            <td>${element.username}</td>
                            <td>${element.email}</td>
                            <td>${element.mobile}</td>
                            <td> <button onclick="deleteuser(${element.id})">delete</button> </td>
                            </tr>`
                            count++;
                        });
                        document.getElementById("disp-all-users").innerHTML = HtmlResponse

                    } else {
                        document.getElementById("disp-all-users").innerHTML = "<tr><td>No data</td></tr>"

                    }

                }
            })
        });

        function deleteuser(e) {
            // console.log("delete user id ", e);
            if (confirm("Are you sure??")) {

                $.ajax({
                    type: "get",
                    url: "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/API/deleteusers?userid="+e,
                    // contentType: "application/json; charset=utf-8",
                    // dataType: "json",
                    // data: JSON.stringify({
                    //     userid: e
                    // }),
                    success: function(response) {
                        // console.log(response);
                        // alert("data deleted")
                        data = $.parseJSON(response)
                        console.log(data);
                        if (data.Code == 1) {
                            HtmlResponse = ""
                            count = 1
                            data.Data.forEach(element => {
                                console.log(element);
                                HtmlResponse += `<tr>
                                <td>${count}</td>
                                <td>${element.username}</td>
                                <td>${element.email}</td>
                                <td>${element.mobile}</td>
                                <td> <button onclick="deleteuser(${element.id})">delete</button> </td>
                                </tr>`
                                count++;
                            });
                            document.getElementById("disp-all-users").innerHTML = HtmlResponse

                        } else {
                            document.getElementById("disp-all-users").innerHTML = "<tr><td>No data</td></tr>"

                        }

                    }
                })
            } else {
                alert("data safe")
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
                // fetch()
                $.ajax({
                    url: "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/API/emailvalidataion",
                    data: {
                        email: e.value
                    },
                    success: function(response) {
                        console.log(response);
                        data = $.parseJSON(response)
                        console.log(data.Code);
                        if (data.Code == 0) {
                            document.getElementById(spnid).innerHTML = "Valid"

                        } else {
                            document.getElementById(spnid).innerHTML = "already exists"

                        }

                    }
                })
            } else {
                document.getElementById(spnid).innerHTML = "Invalid format"
            }
        }
        document.getElementById("btn-login").addEventListener("click", function(event) {
            // console.log("called");
            event.preventDefault();
            let FormData = $('#registration').serializeArray();
            console.log(FormData);
            var obj = {};
            $.map(FormData, function(n, i) {
                obj[n.name] = n.value;
            })
            // console.log(obj);
            $.ajax({
                type: "POST",
                url: "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/API/addnewuser",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(obj),
                success: function(response) {
                    console.log(response);
                    data = $.parseJSON(response)
                    console.log(data.Code);


                }
            })
        })
    </script>


</body>

</html>