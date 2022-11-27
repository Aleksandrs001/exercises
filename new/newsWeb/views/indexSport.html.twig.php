
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles.css">
    <title>Hot News</title>
</head>
<div class="header">
    <h1>
        HOT NEWS</h1>
</div>

<div class="flag">
    <a href="https://war.ukraine.ua/donate/" target="_blank"> <img src=" ../ukr2.jpeg" alt="_blanc" height="100"
</div>
<body>
<br><br>

<div class="links">
    <a href="/?search q:">| HOME |</a>
    <a href="/?search=Riga"> Riga News |</a>
    <a href="/?search=Vilnius"> Vilnius News |</a>
    <a href="/?search=Tallinn"> Tallinn News |</a>
</div>


<form class="search" action="/" method="get">
    <label>
        <input type="text" placeholder="search..." name="search">
    </label>
    <button type="submit">Search</button>
</form>

<br><br>


<div class="flex-parent1 jc-center1">
    <form action = "" method = "post">
    <button type="submit" class="green margin-right1">{{plusTen}}</button>
        <form>
        <form action = "" method = "post">
    <button type="submit" class="magenta1">{{minusTen}}</button>
</div>


<div class="container">

    {% for i in 0..10 %}
    <a href={{ article[i].getPicture() }} target="_blank"> <img src="{{ article[i].getPicture() }}" alt="_blanc"
                                                                width="300"> </a><br>
    <b> {{ article[i].getTitle() | escape }}</b><br>
    <p>{{ article[i].getDescription() | escape }} </p>
    <a  href="{{ article[i].getUrl() }}" target="_blank">Link </a>

    <br><br>


    {% endfor %}
</div>
<div class="flex-parent jc-center">
    <form action = "i=+10" method = "post">
        <button type="submit" class="green margin-right">{{plusTen}}</button>
        <form>
            <form action = "i=-10" method = "post">
                <button type="submit" class="magenta">{{minusTen}}</button>
</div>


</div>
<hr>

</body>
</html>