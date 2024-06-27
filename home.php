<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Convertor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Temperature Convertor</h1>
    <div class="container">
        <div class="left-box">
            <img src="temp.jpg" alt="">
        </div>
        <div class="right-box">
         <form method="POST">

        <input type="text" name="num1" placeholder="enter your value" class="input1"><br>
        <div class="selection">
        <label>Celcius</label>  <input type="radio" value="cel" name="units">
        <label>Fahrenheit</label>  <input type="radio" name="units" value="feh"><br>
        </div>
            
          <input type="submit" value="Convert Now" name="submit" class="btn">

        </form>
        <div class="val">
            <p>
               <?php  
                 if(isset($_POST["submit"])){
                    $num = $_POST["num1"];
                    $temp= $_POST["units"];

                    if($temp == "cel"){
                        $result = $num *9/5+32;
                        echo "The conversion value of cel in fahre is " .$result;
                    }

                    else {
                        $result = ($num-32)*5/9;
                        echo "The conversion value of fahre in cel is " .$result;
                 }
               
                }
               ?>
            </p>
        </div>  
        </div>

        

    </div>
</body>
</html>