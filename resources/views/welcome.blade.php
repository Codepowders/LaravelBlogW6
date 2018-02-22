<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Yepper! Laravel 5.4
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->
<?php
/*if (session_id() == "") { session_start(); }
//require_once 'conf.php';
//require_once 'func.php';
$loggedin = false;
$frontlogin = true;
$add = '';
if(isset($_GET['flag']) && $_GET['flag']=="uitloggen") {
  unset($_SESSION['usernameBlog']);
  unset($_SESSION['passwordBlog']);
}
if(isset($_SESSION['usernameBlog']) && isset($_SESSION['passwordBlog'])){
  $loggedin = true; $add = '!!'; // inlogcheck.
}*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>blog</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="blog">
  <div class="header">
    <h2 class="header1">What's that NOISE!!</h2>
  </div>
  <div class="row">
    <div class="leftcolumn" id="leftcolumn"></div>
    <div class="rightcolumn">
      <div class="card">
        <button type="button" class="button" id="button5">uitloggen</button><br />
        <div id='fieldspace'></div>
        <button type="button" class="button" id="button5">inloggen</button><br />
        <div id='fieldspace'></div>
        <form class="example" action="search.php" method="post">
          <input type="text" placeholder="Search.." name="search" id="search" class="search">
          <div id='fieldspace'></div>
          <button type="button" class="button" id="button4">zoeken in blog</button>
        </form>
        <div id='fieldspace'></div><div id='fieldspace'></div>
        <button type="button" class="button" id="button1">upload nieuw artikel</button><br />
        <div id='fieldspace'></div>
        <button type="button" class="button" id="button2">zoek op categorie</button>
        <div id='sel'>
          <!--Bij POST:<form name="form2" class="form2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off" enctype="multipart/form-data">-->
          <select id="sel2" name='cat[]' style='width:150px; height:160px;' multiple>
          </select><br />
          <input type="button" value="zoeken" name="button" class="button" id="button3" />
          <!--Bij POST:<input type="submit" value="Search" name="submit3" class="button" id="button3" /></form>-->
        </div><br />
      </div>
      <div class="card">
        <h2>About Me</h2>
        <img class="portrait" src="uploads/lieuwe.jpg" width="77" alt="image" />
        <div class="fakeimgportrait"></div>
        <table class="table"><tr><td>1m 97</td></tr><tr><td>68 kilo</td></tr><tr><td>lang haar</td></tr></table><br />
        <p class="after">Lieuwe Jelle hierzoot... Noise, a way of life.</p>
      </div>
      <div class="card">
        <h2>Per maand</h2>
        <p><a href="https://lieuwe-jelle.nl/" onclick="event.preventDefault();" id="maart18">Maart</a></p>
        <p><a href="https://lieuwe-jelle.nl/" onclick="event.preventDefault();" id="februari18">Februari</a></p>
        <p><a href="https://lieuwe-jelle.nl/" onclick="event.preventDefault();" id="januari18">Januari</a></p>
      </div>
      <div class="card">
        <h3>Logos</h3>
        <div class="fakeimgsmall"><img src="uploads/atg-logo.jpg" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/abr-logo.jpg" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/fa-logo.jpg" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/autopsy-logo.png" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/bt-logo.png" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/as-logo.png" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/images.jpeg" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/SYLlogo.png" width="170" alt="image" /></div><br />
        <div class="fakeimgsmall"><img src="uploads/neurosis-logo.png" width="170" alt="image" /></div>
      </div>
      <div class="card">
        <h3>Follow Me</h3>
        <p><a href="https://lieuwe-jelle.nl/" onclick="event.preventDefault();">lieuwe-jelle.nl&nbsp;2018</a></p>
      </div>
    </div>
  </div>
  <div class="footer">
    <h2 class="header1">Always Under Construction!</h2>
  </div>
  <!-- <script src="functions.js"></script>
  <script>
  loadBlog("blogcontent.php", callbackBlog);
  $('#sel').hide();
  $("#button5").on("click", function() {
    if($(this).text() == "inloggen") {
      loadBlog("blogcontent.php?flag=inloggen", callbackBlog);
      $(this).text("uitloggen");
    } else {
      location.href="index.php?flag=uitloggen";
      $(this).text("inloggen");
    };
  });
  $("#maart18").on("click", function() {
    var month = $(this).text().toLowerCase();
    loadBlog("blogcontent.php?month="+month, callbackBlog);
  });
  $("#februari18").on("click", function() {
    var month = $(this).text().toLowerCase();
    loadBlog("blogcontent.php?month="+month, callbackBlog);
  });
  $("#januari18").on("click", function() {
    var month = $(this).text().toLowerCase();
    loadBlog("blogcontent.php?month="+month, callbackBlog);
  });
</script>-->
</body>
</html>
