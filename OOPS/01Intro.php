<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>OOPS</h2>
    <p>Object Oriented Programming Structure</p>
    <dl>
        <dt>OOPS based on 4 pillars</dt>
        <dd>
            <ul>
                <li>Encapsulation : wrapping the data into a single unit eg:class</li>
                <li>Inheritance : accessing parent properties to child</li>
                <li>Polimophysum</li>
                <li>Abstaction</li>
            </ul>
        </dd>
    </dl>
    
    <p><b>Class :</b> class is collection of dataMember and Member function only</p>
    <p><b>Class :</b> with the help of class we can provide basic level of security to our code</p>
    <p><b>Class :</b> without creating an object we cant access the properties of that class</p>
    <p><b>Interview Question </b> can we access the properties of class out side, without creating an object : <b>yes (inheritance, static with :: scope resolution )</b> </p>
    <p>we can create an object with the help of new keyword </p>
    <pre>
        class MathOp{
            function Addition($a,$b=0){
                return $sum = $a+$b;       
            }
        }
        $MathOp = new MathOp;
        echo "<br>";
        accessesing class function with arrow/of ->
        echo $MathOp->Addition(50,60);
    </pre>
</body>
</html>