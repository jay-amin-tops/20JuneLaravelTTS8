<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" name="username" class="inp" id="username">
    <input type="button" name="btn" value="Get Data" onclick="getdata(this)" id="btn">
    <script>
        // function getdata(event) {
        function getdata(anything) {
            // console.log(anything);
            // let inpData = 
            // Get Data By ID START
            // let inpData = document.getElementById("username") 
            // console.log(inpData);
            // console.log(inpData.value);
            // Get Data By ID END

            // Get Data By Class START
            // let inpData = document.getElementsByClassName("inp") 
            // console.log(inpData);
            // console.log(inpData[0]);
            // console.log(inpData[0].value);
            // Get Data By Class END

            // Get Data By Name START
            // let inpData = document.getElementsByName("username") 
            // console.log(inpData);
            // console.log(inpData[0]);
            // console.log(inpData[0].value);
            // Get Data By Name END

            // Get Data By TagName START
            // let inpData = document.getElementsByTagName("input") 
            // console.log(inpData);
            // console.log(inpData[0]);
            // console.log(inpData[0].value);
            // Get Data By TagName END


            // Get Data By getElementsByTagNameNS START
            // let inpData = document.getElementsByTagNameNS("input") 
            // const allParas = document.getElementsByTagNameNS("http://www.w3.org/1999/xhtml","p");
            // console.log(allParas);
            
            // Get Data By getElementsByTagNameNS END

            // Get HTML Data by querySelector START
            // let InpData = document.querySelector("input") 
            // let InpData = document.querySelector(".inp") 
            // let InpData = document.querySelector("#username") 
            // Get HTML Data by querySelector END
            
            // Get HTML Data by querySelectorAll START
            let InpData = document.querySelectorAll("input") 
            console.log(InpData);
            // Get HTML Data by querySelectorAll END
        }
    </script>

</body>

</html>