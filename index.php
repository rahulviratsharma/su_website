<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="edit.css" media="screen" /> 
      <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Union</title>
<style>
    .navbar-login{

    }
    #topbutton{
        position:absolute;
        margin-top:-200px;
        margin-left:0px;

    }
    .table{
        margin-top:-100px;
        position:relative;
    }
    .text{
        background-color:white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding-left:8px;
        padding-right:8px;
        margin-left:220px;
        margin-top:-150px;
    }

</style>
  


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Bootstrap -->
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid" id="wrapper">
    <nav class="navbar navbar-default  navbar-fixed-top">
        <div class="container col-lg-12">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="#" class="pull-left"><img src="./images/ll.png" height="70" ></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"  id="defaultNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="popup"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</a></li>
                    <li class="popup"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Calendar')">Calendar</a></li>
                    <li class="popup"><a href="0702push/search.html" class="tablinks" onclick="openCity(event, 'CV')">Online CV</a></li>
                    <li class="popup"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Activities')">Activities</a></li>
                    <li class="popup"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'About')" >About Us</a></li>
					 <li class="popup"><a href="loginbox.php" class="tablinks" onclick="openCity(event, 'LogIn')" >Log In
					 </a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div id="Home" class="tabcontent">
        <div id="carousel1"  class="carousel slide" data-ride="carousel" style="height: 10%;">
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
                <li data-target="#carousel1" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="images/code.jpg" alt="Second slide image" class="center-block image-fill">
                    <div class="carousel-caption">
                        <h1>head</h1>
                        <h4>hafjdkhfk</h4>
                    </div>
                </div>
                <div class="item "><img src="images/intro.jpg" alt="First slide image" class="center-block image-fill">
                    <div class="carousel-caption h1">
                        two
                    </div>
                </div>
                <div class="item"><img src="images/1.jpg" alt="Second slide image" class="center-block image-fill">
                    <div class="carousel-caption h1">
                        three
                    </div>
                </div>
                <div class="item"><img src="images/b.jpg" alt="Third slide image" class="center-block image-fill">
                    <div class="carousel-caption h1">
                        four
                    </div>
                </div>
            </div>

        </div>
        <section class="text-center" id="main">
            <h1 >HOME STUFF </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida, felis et elementum trorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida, felis et elementum trorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida, felis et elementum trorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida, felis et elementum trorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida, felis et elementum trorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida, felis et elementum tristique, libero ligula consequat sem, iaculis condimentum orci mauris vitae s. Nulla nisl justo, vestibulum ut felis ut, tempus dapibus purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec quis dolor rhoncus, lacinia massa vel, mollis nisi. Phasellus at pretium ipsum. Fusce vitae vestibulum risus. Fusce fringilla tempus lacus, vitae elementum felis efficitur a. </p>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail"><img src="images/thumbnail-2.jpg"  alt="Thumbnail Image 1" class="image-fill image-fill-body" id="image-fill1"><p class="read" id="read1">READ: </div>
                    <div id="myModal1" class="modal">
                        <div class="caption" id="caption1">
                             <span class="close">&times;</span>
                            <h3 class="appear" id ="appear1">ARTICLE B</h3>
                            <p class="appear" id="p_appear1">In feugiat libero non lacus rutrum ultricies. Etiam dignissim, massa et vestibulum molestie, nibh nisl aliquet ante, vitae scelerisque dui eros nec magna. Aenean at diam egestas, ullamcorper felis vitae, pretium nisl. Suspendisse blandit lorem turpis, non tempus leo aliquet imperdiet.</p>
                        
                        </div>
                        </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="thumbnail"><img src="images/thumbnail-2.jpg" alt="Thumbnail Image 1" class="image-fill image-fill-body" id="image-fill2" >
                     <div id="myModal2" class="modal">
                        <div class="caption" id="caption2">
                             <span class="close">&times;</span>
                            <h3 class="appear" id="appear2">ARTICLE C</h3>
                            <p class="appear" id="p_appear2">In feugiat libero non lacus rutrum ultricies. Etiam dignissim, massa et vestibulum molestie, nibh nisl aliquet ante, vitae scelerisque dui eros nec magna. Aenean at diam egestas, ullamcorper felis vitae, pretium nisl. Suspendisse blandit lorem turpis, non tempus leo aliquet imperdiet.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail"><img src="images/thumbnail-3.jpg" alt="Thumbnail Image 1" class="image-fill image-fill-body" id="image-fill3" >
                     <div id="myModal3" class="modal">
                        <div class="caption" id="caption3">
                             <span class="close">&times;</span>
                            <h3 class="appear" id="appear3">ARTICLE D</h3>
                            <p class="appear" id="p_appear3">In feugiat libero non lacus rutrum ultricies. Etiam dignissim, massa et vestibulum molestie, nibh nisl aliquet ante, vitae scelerisque dui eros nec magna. Aenean at diam egestas, ullamcorper felis vitae, pretium nisl. Suspendisse blandit lorem turpis, non tempus leo aliquet imperdiet.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail"><img src="images/thumbnail-3.jpg" alt="Thumbnail Image 1" class="image-fill image-fill-body" id="image-fill4">
                     <div id="myModal4" class="modal">
                        <div class="caption" id="caption4">
                             <span class="close">&times;</span>
                            <h3 class="appear" id="appear4">ARTICLE D</h3>
                            <p class="appear" id="p_appear4">In feugiat libero non lacus rutrum ultricies. Etiam dignissim, massa et vestibulum molestie, nibh nisl aliquet ante, vitae scelerisque dui eros nec magna. Aenean at diam egestas, ullamcorper felis vitae, pretium nisl. Suspendisse blandit lorem turpis, non tempus leo aliquet imperdiet.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Calendar" class="tabcontent">
        <div class="row container-fluid">

            <div class="col-md-9 col-md-push-1">
                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;
			showCalendars=0&amp;showTz=0&amp;height=550&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;
			src=calendar.bits%40gmail.com&amp;color=%231B887A&amp;ctz=Asia%2FCalcutta"
                        style="border-width:0" width="950" height="550" frameborder="0" scrolling="no">
                </iframe>
            </div>
        </div>
    </div>

    <div id="CV" class="tabcontent" >
        <div class="vertical-center">
            <h1 class="text-center">Coming Up Soon!!!!!!</h1>
        </div>
    </div>

    <div id="Activities" class="tabcontent">

            <div class="row">


                <div class="col-md-2">
                    <div class="btn-group-vertical">
                        <div id="topbutton">
                            <br><br><br><br>

                            <button type="button" class="sidebarbuttons btn btn-danger btn-lg"id="1">DEPARTMENTS</button><br><br>
                            <button type="button" class="sidebarbuttons btn btn-danger btn-lg"id="2">CLUBS</button><br><br>
                            <button type="button" class="sidebarbuttons btn btn-danger btn-lg"id="3">SPORTS</button><br><br>
                            <button type="button" class="sidebarbuttons btn btn-danger btn-lg"id="4" >TECH ASSOC'S</button><br><br>
                            <button type="button" class="sidebarbuttons btn btn-danger btn-lg"id="5"  >NGO'S</button>
                        </div>
                    </div>
                </div>


                <div class="col-md-7 col-md-push-1">
                    <div id="departments">


                        <table class="table text-centered" >
                            <tr>.
                                <td><div class="logos"id="logod1"><img src="1d.png"class="logosize"><p class="text-center"><a href="#">artsndeco</a></div></td>
                                <td><div class="logos"id="logod2"><img src="2d.jpg"class="logosize"><p class="text-center"> Controlz</div></td>
                                <td><div class="logos"id="logod3"><img src="3d.png"class="logosize"><p class="text-center">  DoPy	</div></td>
                                <td><div class="logos"id="logod4"><img src="4d.jpg"class="logosize"><p class="text-center">  DoSH</div></td>
                                <td><div class="logos"id="logod5"><img src="5d.png"class="logosize"><p class="text-center">   DoTA</div></td>
                                <td><div class="logos"id ="logod6"><img src="6d.png"class="logosize"><p class="text-center">Firewallz</div></td>
                                <td><div class="logos"id="logod7"><img src="7d.png"class="logosize"><p class="text-center">Informalz</div></td>
                                <td><div class="logos"id="logod8"><img src="8d.png"class="logosize"><p class="text-center">DoSM</div></td>
                                <td><div class="logos"id="logod9"><img src="9d.jpeg"class="logosize"><p class="text-center">DePP</div></td>
                                <td><div class="logos"id="logod10"><img src=""class="logosize"><p class="text-center">DoVe</div></td>
                                <td><div class="logos"id="logod11"><img src=""class="logosize"><p class="text-center">LSD</div></td>

                            </tr>


                        </table>
                    </div>
                </div>



                <div class="col-md-7 col-md-push-1">
                    <div id="clubs">

                        <table   class="table text-centered" >
                            <tr>

                                <td> <div class="logos"id="logoc1"><img src="1c.jpg"class="logosize"><p class="text-center">Bulls And Bears</p></div></td>
                                <td> <div class="logos"id="logoc2"><img src="2c.jpg"class="logosize"><p class="text-center">Designers Anonymous</p></div></td>
                                <td> <div class="logos"id="logoc3"><img src="3c.png"class="logosize"><p class="text-center">Dance</p></div></td>
                                <td> <div class="logos"id="logoc4"><img src="4c.jpg"class="logosize"><p class="text-center">Dramatics</p></div></td>
                                <td> <div class="logos"id="logoc5"><img src="5c.jpg"class="logosize"><p class="text-center">Hindi Tarang</p></div></td>
                                <td> <div class="logos"id ="logoc6"><img src="6c.jpg"class="logosize"><p class="text-center" >Journal</p></div></td>
                                <td> <div class="logos"id="logoc7"><img src="7c.jpg"class="logosize"><p class="text-center">Martial Arts</p></div></td>
                                <td> <div class="logos"id="logoc8"><img src="8c.png"class="logosize"><p class="text-center">Movie</p></div></td>
                                <td> <div class="logos"id="logoc9"><img src="9c.jpg"class="logosize"><p class="text-center">	Music	</p></div></td>
                                <td> <div class="logos"id="logoc10"><img src="10c.jpg"class="logosize"><p class="text-center">Quiz</p></div></td>
                                <td> <div class="logos"id="logoc11"><img src="11c.jpg"class="logosize"><p class="text-center">VFx	</p></div></td>
                            </tr>
                        </table>
                    </div>

                </div>


                <div class="col-md-7 col-md-push-1">
                    <div id="sports">

                        <table>
                            <tr>
                                <td><div class="logos"id="logos1"><img src=""><p style="font-size:10px;"></p></div></td>
                                <td><div class="logos"id="logos2"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logos3"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logos4"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logos5"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id ="logos6"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logos7"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logos8"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logos9"><img src=""><p style="font-size:10px"></p></div></td>
                            </tr>
                        </table>
                    </div>
                </div>



                <div class="col-md-7 col-md-push-1">
                    <div id="tech">

                        <table>
                            <tr>

                                <td><div class="logos"id="logot1"><img src=""><p style="font-size:10px;"></p></div></td>
                                <td><div class="logos"id="logot2"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logot3"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logot4"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logot5"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id ="logot6"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logot7"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logot8"><img src=""><p style="font-size:10px"></p></div></td>
                                <td><div class="logos"id="logot9"><img src=""><p style="font-size:10px"></p></div></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">

                </div>
                <div class="col-md-8 col-md-pull-1"  >
                    <div class="tat"></div>

                    <div class="text"id="td1"><p style="text-align:justify;"><br><b>Art is a diverse range of human activities in creating visual, auditory or performing artifacts (artworks), expressing the author's
                                imaginative or technical skill, intended to be appreciated for their beauty or emotional power.[1][2] In their most general form these activities include the
                                production of works of art, the criticism of art, the study of the history of art, and the aesthetic dissemination of art.
                                The oldest documented forms of art are visual arts, which include creation of images or objects in fields including painting, sculpture, printmaking, photography, and other
                                vrts are separated and distinguished from
                                acquired skills in general, such as the decorative or applied arts</b></p>.</div>
                    <div class="text"id="td2">controls</div>
                    <div class="text"id="td3">department of arts and deco</div>
                    <div class="text"id="td4">controls</div>
                    <div class="text"id="td5">department of arts and deco</div>
                    <div class="text"id="td6">controls</div>
                    <div class="text"id="td7">department of arts and deco</div>
                    <div class="text"id="td8">controls</div>
                    <div class="text"id="td9">department of arts and deco</div>

                    <div class="text" id="tc1">Bulls and bears</div>
                    <div class="text"id="tc2">DA</div>
                    <div class="text" id="tc3">Bulls and bears</div>
                    <div class="text"id="tc4">DA</div>
                    <div class="text" id="tc5">Bulls and bears</div>
                    <div class="text"id="tc6">DA</div>
                    <div class="text" id="tc7">Bulls and bears</div>
                    <div class="text"id="tc8">DA</div>
                    <div class="text" id="tc9">Bulls and bears</div>
                    <div class="text"id="tc10">DA</div>
                    <div class="text" id="tc11">Bulls and bears</div>
                    <div class="text"id="tc12">DA</div>
                </div>
            </div>
        </div>

</div>
	
	
    

    <div id="About" class="tabcontent">
        <div class="outer">
            <div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">About BPHC
                            <small>Students Union</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2>About Modern Business</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Team Members -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Students' Union Council</h2>
                    </div>

                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-md-offset-1 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-md-offset-1 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="thumbnail">
                            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                            <div class="caption">
                                <h3>John Smith<br>
                                    <small>Job Title</small>
                                </h3>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Our Customers -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Our Customers</h2>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                    </div>
                </div>
                <!-- /.row -->

                <hr>

            </div>
        </div>
    </div>


   
</div>



<footer class="navbar navbar-bottom" style="background-color: #555555; color: whitesmoke !important;">
    <div class="">
        <a href="#" class="pull-right footimg"><img src="./images/logo.png" style="max-height: 120px" ></a>
        <div class="inline">
            <div class="col-md-3 col-md-offset-1" >
                <p class=" text-justify">
                    <br>
                    Find us at:
                    <br>
                    BITS-Pilani, Hyderabad Campus
                    <br>
                    Jawahar Nagar, Shameerpet Mandal
                    <br>
                    Hyderabad, 500078, Telangana State.
                    <br>
                    INDIA
                </p>
            </div>
            <div class="col-md-3" >
                <p class="text-left">
                    <br>
                    Contact Us
                    <br>
                    Keshav Kedarnath, President
                    <br>
                    Phone : +91 79970 30001
                    <br>
                    Sai Sampath Balineni, General Secretary
                    <br>
                    Phone : +91 79970 30002
                </p>
            </div>
        </div>
    </div>
</footer> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="./scripts.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
  var x=0;
    $('.carousel').carousel({
        interval: 2000
        }); //changes the speed
    $(document).on("scroll",function(){
    	if($(document).scrollTop()>272) {
    		$("nav").removeClass("navbar navbar-default  navbar-fixed-top").addClass("navbar small navbar-fixed-top");
    	}else{
    		$("nav").removeClass("navbar small navbar-fixed-top").addClass("navbar navbar-default  navbar-fixed-top");
    	}
    }); 

  /*  $(document).on("scroll",function(){
        if($(document).scrollTop()>200) {
            $('#main').fadeIn(1000);
        }else{
             $('#main').fadeOut(1000);
        }
    }); 
        $(document).on("scroll",function(){
        if($(document).scrollTop()>300) {
            $('.row').fadeIn(1000);
        }else{
             $('.row').fadeOut(1000);
        }
    }); 

        $(document).on("scroll",function(){
        if($(document).scrollTop()>400) {
            $('.navbar navbar-bottom').fadeIn(1000);
        }else{
             $('.navbar navbar-bottom').fadeOut(1000);
        }
    }); */
var modal = document.getElementById('myModal1');
var content = document.getElementById('caption1')
// Get the button that opens the modal
var btn = document.getElementById("image-fill1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    x++;
 var span=document.createELement('span');
 span.innerHTML=X;
 document.getElementById("read1").appendChild(span);

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


var modal1 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn1 = document.getElementById("image-fill2");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

var modal2 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn2= document.getElementById("image-fill3");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close")[2];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

var modal3 = document.getElementById('myModal4');

// Get the button that opens the modal
var btn3= document.getElementById("image-fill4");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close")[3];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
    
      
   
       /* $('.image-fill4').on('mouseenter mouseleave', function(event) {
        var size = event.type == 'mouseenter' ? 85 : 75;
     var padding = event.type == 'mouseenter' ? 0 : 5;
      $('image-fill4').animate({
         width: size,
         height: size,
         paddingTop: padding,
        paddingLeft: padding*/
       
    
    $('.image-fill-body').hover(
        
    function(){
    $(this).addClass('red').removeClass('image-fill-body');
    
    },
    function(){
  
    $(this).removeClass('red').addClass('image-fill-body');
    });
});
    
    	
  
  
  
 
  

        
s

	
	</script>
</body>
</html>
