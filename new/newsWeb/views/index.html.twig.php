<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hot News</title>
</head>
<div class="header">
    <h1>HOT NEWS</h1>
</div>
<div class="flag">
    <a id="bbb" href="https://war.ukraine.ua/donate/"
       target="_blank"> <img id="top" src=" ../ukr2.jpeg"
                             alt="_blanc" width="200" />
    </a>
</div>

<div class="oldSchool">
    <h4>
        Welcome to 90style<br>
    </h4>
</div>
<body>
<br><br>

<div class="links">
    <a href="/?search=top">| HOME |</a>
    <a href="/?search=Riga"> Riga News |</a>
    <a href="/?search=Vilnius"> Vilnius News |</a>
    <a href="/?search=Tallinn"> Tallinn News |</a>
    <form class="search" action="/" method="get">
        <label>
            <input type="text" placeholder=" search..." name="search">
        </label>
        <button type="submit">Search</button>
    </form>
</div>

<br><br>
<div style="text-align: center;">
    <div class="middleLinks">
        <a href="/?search=sport">| Sport |</a>
        <a href="/?search=politics"> Politics |</a>
        <a href="/?search=world war"> War |</a>
        <a href="/?search=criminal"> Criminal |</a>
        <a href="/?search=pc games"> PC Games |</a>
        <a href="/?search=tesla"> Tesla |</a>
        <a href="/?search=crypto currency"> Crypto Currency |</a>
    </div>

</div>

<br><br>
<div class="flex-parent1 jc-center1">
    <form action="" method="post">
        <button type="submit" class="green margin-right1">{{plusTen}}</button>
        <form>
            <form action="" method="post">
                <button type="submit" class="magenta1">{{minusTen}}</button>
</div>
<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
    {% for i in 0..11 %}
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="{{ article[i].getPicture() }}" target="_blank" >
                            <img alt="Placeholder" class="block h-auto w-full" src="{{ article[i+1].getPicture() }}">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="{{ article[i].getUrl() }}"
                                   target="_blank">
                                    {{ article[i].getTitle() }}
                                </a>
                            </h1>
                            <p class="text-grey-darker text-sm">
                            </p>
                        </header>
                    </article>
                </div>
    {% endfor %}
    </div>
</div>

<div class="flex-parent jc-center">
    <form action="i=+10" method="post">
        <button type="submit" class="green margin-right">{{plusTen}}</button>
        <form>
            <form action="i=-10" method="post">
                <button type="submit" class="magenta">{{minusTen}} </button>
</div>
</body>
<hr>
</html>
