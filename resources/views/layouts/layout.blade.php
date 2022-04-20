<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/39383a79c4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    @yield('title/addFile')
    <style>
    </style>
</head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="#" class="nav_logo"> 
                        {{-- <i class='bx bx-layer nav_logo-icon'></i>  --}}
                        <i class="fa-brands fa-hotjar nav_logo-icon"></i>
                        <span class="nav_logo-name eEduction">XuRan</span>
                    </a>
                    <div class="nav_list"> 
                        {{--active--}}
                        <a href="/" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> 
                        <a href="/articles" class="nav_link @yield('articles')"> <i class='bx bxs-cart nav_icon'></i> <span class="nav_name">Articles</span> </a> 
                        <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i><span class="nav_name">Clients</span> </a> 
                        <a href="#" class="nav_link"> <i class='bx bx-store nav_icon'></i> <span class="nav_name">Fournisseurs</span> </a>  
                    </div>
                </div>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="king">
            <div class="prince">
                <div class="part1">
                    <div class="yard1">
                        <div class="filter">
                            <div class="myFilterForm">
                                @yield('filter-form')
                            </div>
                        </div>
                        <br>
                        <div class="myData">
                            @yield('table')
                        </div>
                    </div>
                </div>

                <div class="part2">
                    <div class="yard2">
                        <div id="tsum-tabs">
                            <main>
                                @yield('tabs')
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="scrpit.js"></script>
    </body>
</html> 