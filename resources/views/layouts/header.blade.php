<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef</title>

    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&amp;display=swap" rel="stylesheet">
    <!-- bootstrap -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <!-- ---------------header-section---------------- -->
<!-- <div class="container-fluid" style="margin: 0; padding: 0;">
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

                    //logo 
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
</div> -->

<!-- ------------ head section ----------- -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="">
                
            </div>
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item space">
                    <a href="{{route('index')}}"> <b>Home</b> </a>
                </li>
                <li class="nav-item space">
                    <a href="{{route('chef.cheflist')}}"> <b>Chef</b> </a>
                </li>
                <li class="nav-item space">
                    <a href="#Experience"> <b>Package</b> </a>
                </li>
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
                <li class="nav-item space">
                <a href="#Contact"> <b>About</b> </a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
@yield('login-page')
@yield('reg-page')
<!-- ------------------footer-section----------------- -->
<div>

</div>
</body>
</html>