<head>
<meta charset="utf-8">
<title>Future Tech - Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ProteusThemes">

<script type="text/javascript">
        WebFontConfig = {
            google : {
                families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1056592627704323',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<link href="stylesheets/bootstrap.css" rel="stylesheet">
<link href="stylesheets/responsive.css" rel="stylesheet">

<link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>

<link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>

<link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css"/>

<link href="stylesheets/main.css" rel="stylesheet">

<link href="stylesheets/stylenew.css" rel="stylesheet">

<script src="js/modernizr.custom.56918.js"></script>

<link rel="apple-touch-icon-precomposed" sizes="144x115" href="images/apple-touch/icon.png">
<link rel="apple-touch-icon-precomposed" sizes="114x91" href="images/apple-touch/icon.png">
<link rel="apple-touch-icon-precomposed" sizes="72x58" href="images/apple-touch/icon.png">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch/icon.png">
<link rel="shortcut icon" href="images/apple-touch/icon.png">
</head>





<header id="header">

    <div class="container">
        <div class="row">



            <div class="span7">
                <a class="brand" href="usercontroller.php?action=home">
                    <img src="images/logo.png" alt="Webmarket Logo"/>
                    <!-- <span class="bamf">Future Tech</span> -->
                    <!-- <span class="tagline">   Công nghệ tương lai trong tầm tay bạn!</span> -->
                </a>
            </div>



            <div class="span5">
                <div class="top-right">
                    <div class="higher-line">
                    <br>
                    <?php
                            if(isset($_SESSION["\/m&coppy;admin"])){
                                echo  "xin chào ".$_SESSION["\/m&coppy;admin"];
                                echo  "<a href='admincontroller.php?action=logout'> / Đăng xuất</a>";
                            }
                            else{
                                echo    "<a href='usercontroller.php?action=register_form' role='button'>Đăng ký </a>";
                                echo    "<a href='#loginModal' role='button' data-toggle='modal'>/ Đăng nhập</a>";
                            }
                    ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
