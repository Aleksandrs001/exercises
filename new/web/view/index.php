<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="box">
    <p class="title"
    <br><br>

    <?php

    session_start();

    echo "<br>In {$_SESSION['glob'][0]} now:  {$_SESSION['glob'][1]}c degree.";
    echo "<br>MaxTemp will be: {$_SESSION['glob'][3]}c, MinTemp will be: {$_SESSION['glob'][2]}c.
<br>Humidity level: {$_SESSION['glob'][4]}% <br>Presure: {$_SESSION['glob'][5]}hPa <br> ";
    echo("<img src='https://openweathermap.org/img/wn/" . $_SESSION['glob'][6] . "@2x.png'>");

    ?>
</div>
<a class="text" href="/?cityName=Riga">| Riga</a>
| <a href="/?cityName=Vilnius">Vilnius</a> |
<a href="/?cityName=Tallinn">Tallinn</a> |


<form class="form" method="get">
    <label>
        <input type="text" name="cityName" value="" placeholder="Search city:">
    </label>
</form>
</body>
</html>