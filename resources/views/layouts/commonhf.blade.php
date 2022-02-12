<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="head">
       <h2>
       <a href="/index">Home</a>
        <a href="">Login/Reg</a>
        <a href="">About us</a>
       </h2>
    </div>
    @yield('content')
    @yield('content2')
    <div>
        <h2><Footer>
            <h1>Footer</h1>
        </Footer></h2>
    </div>
</body>
</html>