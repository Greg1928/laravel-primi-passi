<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>
<style>
    h1{
        text-align: center;
        font-size: 50px;
        color: black;
        text-decoration: underline;
    }
    body{
        background-color: white;
    }
    nav{
        margin-top: 50px;
    }
    ul{
        display: flex;
        justify-content: center;
        gap: 3rem;
    }
    li{
        list-style: none;
    }
    a{
        text-decoration: none;
        color: black;
        padding: 10px;
        background-color: lightgray;
        border-radius: 10px;
        border: 1px black solid;
    }
    img{
        height: 700px;
        width: 100%;
        margin-top: 40px; 
    }
</style>
<body>
    <header>
        <h1>Welcome on Home Page</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/pagina1">Pagina 1</a></li>
                <li><a href="/pagina2">Pagina 2</a></li>
                <li><a href="/pagina3">Pagina 3</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img src="{{ asset('Hire_Laravel_Developer-1816537964.jpeg') }}" alt="">
    </main>
</body>
</html>