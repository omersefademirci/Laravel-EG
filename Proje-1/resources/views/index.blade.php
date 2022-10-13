<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                .slideshow-container {
                position: relative;
                
                }


                .mySlides {
                display: none;
                padding: 10px;
                text-align: center;
                }


                .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                margin-top: -30px;
                padding: 16px;
                color: #888;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                }


                .next {
                position: absolute;
                right: 0;
                border-radius: 3px 0 0 3px;
                }


                .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
                color: white;
                }


                .dot-container {
                text-align: center;
                padding: 20px;
                background: #ddd;
                }


                .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
                }


                .active, .dot:hover {
                background-color: #717171;
                }


                q {font-style: italic;}
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div style="text-align:center;margin-bottom:20px">
        <a href="">TR</a>
        <a href="">EN</a>
    </div>
    <div style="margin-bottom:20px">
        @include('slider')
    </div>   
    <div class="container">
        @yield('content')
    </div>
    
    
    
</body>
</html>