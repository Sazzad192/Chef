<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&amp;display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <!-- font-awsm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
<div class="container-fluid" style="margin: 0; padding: 0;">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav fixed-top">
                    <li class="space">
                        <a href="{{route('index')}}"> <b>Home</b> </a>
                    </li>
                    <li class="space">
                        <a href="{{route('chef.cheflist')}}"> <b>Chef</b> </a>
                    </li>
                    <li class="space">
                        <a href="#Experience"> <b>Package</b> </a>
                    </li>

                    <!-- logo -->
                    <li>
                        <a href="{{route('index')}}">
                            <img class="logo" src="picture/chef-icon.svg.png" alt="">
                        </a>
                    </li>

                    <li class="space">
                        <a href="{{route('login')}}"> <b>login</b> </a>
                    </li>
                    <li class="space">
                        <a href="#Contact"> <b>Blog</b> </a>
                    </li>
                    <li class="space">
                        <a href="#Contact"> <b>About</b> </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>