<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('costem_asset/bootstrap') }}/css/sb-admin-2.css">
    <style>

     body header .home:before{
            background-color: lightblue;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0%;
            transition: .5s;
            z-index: -1;
            display: block;
            text-transform: uppercase;
       }
       body header .home:hover:before{
           height: 100%;

       }

       body header .log:before{
            background-color: rgb(225, 241, 247);
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0%;
            transition: .5s;
            z-index: -1;
            display: block;
            text-transform: uppercase;
       }
       body header .log:hover:before{
           height: 100%;

       }

       body header .sign:before{
            background-color: rgb(251, 253, 253);
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0%;
            transition: .5s;
            z-index: -1;
            display: block;
            text-transform: uppercase;
       }
       body header .sign:hover:before{
           height: 100%;

       }
    </style>
</head>
<body style="background-image: url({{ asset('costem_asset/bootstrap') }}/b.jpg); background-size: cover;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-lightblue">
            <a class="navbar-brand" href="#" style="font-weight: bold;"><i style="font-size: 40px;">F</i>iwore</a>

            <div class="collapse navbar-collapse" id="navbarNav" >
              <ul class="navbar-nav">
                <li class="nav-item active">
                    <div class="home">
                        <a class="nav-link" href="index.html" style="color: black;" >Home <span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <div class="log">
                <li class="nav-item" >
                  <a class="nav-link" href="login.html" style="color: black;">Log in</a>
                </li>
            </div>
            <div class="sign">
                 <li class="nav-item ">
                  <a class="nav-link" href="sign.html" style="color: black;">Sign up</a>
                </li>
            </div>
            <div>
              <button class="navbar-toggler-icon" style="position: absolute; right: 10px; top: 5px;"></button>
            </div>
              </ul>
            </div>
          </nav>
    </header>

</body>
</html>
