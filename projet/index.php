<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta type="author" content="Kevin Nguyen" />
        <meta type="description" content="Portfolio Kevin Nguyen" />
        <meta name="keywords" content="Portfolio, Kevin Nguyen, Website, Work, Skill, Service, About me, HTML, CSS, XML, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- META FACEBOOK  -->
        <meta property="og:url"                content="" />
        <meta property="og:type"               content="" />
        <meta property="og:title"              content="" />
        <meta property="og:description"        content="" />
        <meta property="og:image"              content="" />  <!-- taille d'image 1200*630 -->
        <!-- TWITTER -->
        <meta name="twitter:card"              content="" />
        <meta name="twitter:creator"           content="">
        <meta name="twitter:title"             content="">
        <meta name="twitter:description"       content="">
        <meta name="twitter:image:src"         content="">
        <meta name="twitter:image"             content="">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="assets/css/global.css">

      <title>Kevin Nguyen :: Web Developper</title>
    </head>
<body>
    <header id="k-header" class=" text-center">
        <nav class="k-navbar navbar navbar-default">
            <div  class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#k-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothscroll" href="#k-header"><img src="assets/svg/logo_animated_home.svg" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse" id="k-navbar">
                    <ul class="nav navbar-nav">
                        <li><a class="smoothscroll" href="#k-abtme">About</a></li>
                        <li><a class="smoothscroll" href="#k-works">Works</a></li>
                        <li><a class="smoothscroll" href="#k-showcase">Showcase</a></li>
                        <li><a class="smoothscroll" href="#k-skills">Skills</a></li>
                        <li><a class="smoothscroll" href="#k-contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class=" row">
            <div class="col-md-12 col-xs-12 col-sm-12 k-site-title center-block">
                <h1>
                    <img class="center-block"  src="assets/svg/logo_animated.svg" alt="Logo Kevin Nguyen Portfolio">
                </h1>
                <a class="smoothscroll" href="#k-abtme"><div class="scroll-down"></div></a>
            </div>
        </section>
    </header>
    <main class="container-fluid">
        <section id="k-abtme"    class="row text-center">
            <h2 class="k-titlesection pull-left">About me</h2>
            <div class="content col-xs-12 col-sm-12 col-md-12 ">
                <article class="k-name col-md-6 col-sm-12 col-xs-12 text-center">
                    <h2>Kevin Nguyen</h2>
                    <h3>Developper Web</h3>

                    <div class="k-counter col-md-12 hidden-sm hidden-xs">
                        <div class="col-md-3 countDiv">
                            <img src="assets/svg/coffee.svg" alt="cup of coffee">
                            <p class="count" data-count="845">0</p>
                            <p class="countcontent">Cups of Coffee</p>
                        </div>
                        <div class="col-md-3 countDiv ">
                            <img src="assets/svg/code.svg" alt="line of code">
                            <p class="count" data-count="2345146">0</p>
                            <p class="countcontent">Lines of Code</p>
                        </div>
                        <div class="col-md-3 countDiv">
                            <img src="assets/svg/projets.svg" alt="projects">
                            <p class="count" data-count="14">0</p>
                            <p class="countcontent">Projects</p>
                        </div>
                        <div class="col-md-3 countDiv">
                            <img src="assets/svg/burger.svg" alt="cup of coffee">
                            <p class="count" data-count="112">0</p>
                            <p class="countcontent">Mc Donald's</p>
                        </div>
                        <div class="col-md-12 text-right">
                            <button id="hitme" type="button" name="button"> Hit me </button>
                        </div>
                    </div>
                </article>
                <article class="col-md-6 col-sm-12 col-xs-12">
                    <figure>
                        <figcaption>
                            <img src="./assets/img/Kevin.png" alt="Ma tête" class="img-responsive">
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <section id="k-works"    class="row text-center">
            <article class="row">
                <h2 class="k-titlesection pull-left">My Work</h2>
                    <div class="k-mywork">

                    <?php

                        $myProjects = array(
                            array(
                                'image'  =>'assets/img/MU-spaceinvader.jpg',
                                'title'  =>'Space Invader',
                                'descrip' =>'Space Invader Game made with only JS.',
                                'periode' =>'07/11/2016 - 10/11/2016',
                                'lien' =>'http://kevinn.student.codeur.online/space-invader/'
                            ),
                            array(
                                'image' =>'assets/img/MU-miniblog.jpg',
                                'title' =>'Mini Blog',
                                'descrip' =>"Creation of article, authors and categories with PHP.",
                                'periode' =>'30/11/2016 - 02/12/2016',
                                'lien' =>'http://kevinn.student.codeur.online/mini-blog/',
                            ),
                            array(
                                'image' =>'assets/img/MU-memegenerator.jpg',
                                'title' =>'Meme Generator',
                                'descrip' =>'Creation of the meme, user can choose image and text.',
                                'periode' =>'14/12/2016 - 20/12/2016',
                                'lien' =>'http://kevinn.student.codeur.online/meme-generator/',
                            ),
                            array(
                                'image' =>'assets/img/MU-filesexplorer.jpg',
                                'title' =>'File Explorer',
                                'descrip' =>'Files Explorer made with AJAX, PHP',
                                'periode' =>'16/11/2016 - 22/11/2016',
                                'lien' =>'http://kevinn.student.codeur.online/file-explorateur/',
                            ),
                            array(
                                'image' =>'assets/img/MU-kapybox.jpg',
                                'title' =>'We Transfer',
                                'descrip' =>'File Transfer Service by Mail.',
                                'periode' =>'02/01/2017 - 10/01/2017',
                                'lien' =>'http://kevinn.student.codeur.online/KYPA/'
                            ),
                            array(
                                'image' =>'assets/img/MU-blog404.jpg',
                                'title' =>'Blog 404',
                                'descrip' =>'Visual redo of our Wordpress Blog',
                                'periode' =>'11/01/2017 - 17/01/2017',
                                'lien' =>'http://kevinn.student.codeur.online/BLOG_404/1_siteWEB/404-code-found/'
                            ),
                            array(
                                'image'  => 'assets/img/MU-data.jpg',
                                'title'  => 'Projet DATA',
                                'descrip'  =>'Open DATA of French Museum, Tinder s concept.',
                                'periode'  =>'18/01/2017 - 01/02/2017',
                                'lien'  =>'http://kevinn.student.codeur.online/projet_DATA/'

                            ),
                            array(
                                'image'  =>'assets/img/MU-accropolis.jpg',
                                'title'  =>'Projet Commenditaire',
                                'descrip'  => "Visual redo of Accropolis on WordPress.",
                                'periode'  =>'02/01/2017 - 27/02/2017',
                                'lien'  =>'http://kevinn.public.codeur.online'
                            )
                    );

                    ?>

                        <?php for($a=0;$a<=1;$a++) : ?>
                            <div class="row">
                                <figure class="col-md-12">
                                    <?php for($i = 0+$a*4; $i <= 3+$a*4; $i ++) :

                                    $monProjet =  $myProjects[$i];

                                        ?>
                                        <figcaption class="k-frame col-md-4 col-sm-12 col-xs-12">
                                            <div class="k-imgwork">
                                                <img src="<?php echo $monProjet['image'] ?>" alt="My Work"/>
                                                    <div class="k-details">
                                                        <h3><?php echo $monProjet['title'] ?></h3>
                                                        <p class="col-md-12"><?php echo $monProjet['descrip'] ?></p>
                                                        <!-- <p class="col-md-10"><?php echo $monProjet['periode'] ?></p> -->
                                                        <a href="<?php echo $monProjet['lien'] ?>" target='_blank'>Find out more</a>
                                                    </div>
                                            </div>
                                        </figcaption>
                                    <?php endfor; ?>
                                </figure>
                            </div>
                        <?php endfor ;?>
                    </div>
            </article>
        </section>
        <section id="k-showcase" class="row">
            <article class="row">
                  <h2 class="k-titlesection pull-left">My Showcase</h2>
                <div class="hidden-xs hidden-sm">

                      <div class="row">
                       <div class="col-md-3 img-cropp">
                         <img src="assets/img/carousel-memories.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" style="width:100%">
                       </div>
                       <div class="col-md-3 img-cropp">
                         <img src="assets/img/carousel-accropolis.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow" style="width:100%">
                       </div>
                       <div class="col-md-3 img-cropp">
                         <img src="assets/img/carousel-cartevoeux.JPG" onclick="openModal();currentSlide(3)" class="hover-shadow" style="width:100%">
                       </div>
                       <div class="col-md-3 img-cropp">
                         <img src="assets/img/carousel-onepage.JPG" onclick="openModal();currentSlide(4)" class="hover-shadow" style="width:100%">
                       </div>
                     </div>

                     <div id="myModal" class="modal">
                       <span class="close cursor" onclick="closeModal()">&times;</span>
                       <div class="modal-content">

                         <div class="mySlides">
                           <div class="numbertext">1 / 4</div>
                             <img src="assets/img/carousel-memories.jpg" style="width:100%">
                         </div>

                         <div class="mySlides">
                           <div class="numbertext">2 / 4</div>
                             <img src="assets/img/carousel-accropolis.jpg" style="width:100%">
                         </div>

                         <div class="mySlides">
                           <div class="numbertext">3 / 4</div>
                             <img src="assets/img/carousel-cartevoeux.JPG" style="width:100%">
                         </div>

                         <div class="mySlides">
                           <div class="numbertext">4 / 4</div>
                             <img src="assets/img/carousel-onepage.JPG" style="width:100%">
                         </div>

                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                         <a class="next" onclick="plusSlides(1)">&#10095;</a>

                         <div class="caption-container">
                           <p id="caption"></p>
                         </div>

                         <div class="col-md-3 img-cropp">
                           <img class="demo" src="assets/img/carousel-memories.jpg" onclick="currentSlide(1)" alt="Maquette Blog WordPress">
                         </div>

                         <div class="col-md-3 img-cropp">
                           <img class="demo" src="assets/img/carousel-accropolis.jpg" onclick="currentSlide(2)" alt="Maquette Site Accropolis">
                         </div>

                         <div class="col-md-3 img-cropp">
                             <img class="demo" src="assets/img/carousel-cartevoeux.JPG" onclick="currentSlide(3)" alt="Carte Voeux SVG Animé">
                         </div>

                         <div class="col-md-3 img-cropp">
                           <img class="demo" src="assets/img/carousel-onepage.JPG" onclick="currentSlide(4)" alt="Mock up One Page">
                         </div>
                       </div>
                     </div>
                </div>
                <div id="k-rousel" class="hidden-md hidden-lg carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#k-rousel" data-slide-to="0" class="active"></li>
                       <li data-target="#k-rousel" data-slide-to="1"></li>
                       <li data-target="#k-rousel" data-slide-to="2"></li>
                       <li data-target="#k-rousel" data-slide-to="3"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner center-block" role="listbox">
                       <div class="item active">
                         <img class="d-block img-fluid" src="assets/img/carousel-onepage.JPG" alt="My work" >
                       </div>

                       <div class="item">
                         <img class="d-block img-fluid" src="assets/img/carousel-memories.jpg" alt="My work" >
                       </div>

                       <div class="item">
                         <img class="d-block img-fluid" src="assets/img/carousel-cartevoeux.JPG" alt="My work" >
                       </div>

                       <div class="item">
                         <img class="d-block img-fluid" src="assets/img/carousel-accropolis.jpg" alt="My work" >
                       </div>
                     </div>

                     <!-- Left and right controls -->
                     <a class="left carousel-control" href="#k-rousel" role="button" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" style="color:#ED5758;" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#k-rousel" role="button" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right" style="color:#ED5758;" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
                   </div>
            </article>
            <script>
                function openModal() {
                  document.getElementById('myModal').style.display = "block";
                }

                function closeModal() {
                  document.getElementById('myModal').style.display = "none";
                }

                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
            </script>
        </section>
        <section id="k-skills"   class="row">
          <div class="row">
            <h2 class="k-titlesection pull left">Technical Skills</h2>
            <div class="row k-skill">
                <aside class="k-skillinfo col-md-3">
                    <div class="k-mainskill">
                        <img class="center-block img-responsive" src="assets/svg/web.svg" alt="Web Developper Main Skill">
                        <h4 class="text-center">Web Developer</h4>
                    </div>
                    <h3>Pseudo : <span>Sunn</span></h3>
                    <h3>Lvl : <span>40</span></h3>
                    <h3>Spe : <span>Web Developper</span></h3>
                    <h3>From : <span>Pallet Town</span></h3>
                    <h3>Stuff :
                        <ul>
                            <li>- Head : Hat </li>
                            <li>- Top : Long Sleeves Shirt </li>
                            <li>- Bottom : Skinny Jeans </li>
                            <li>- Shoes : Often Yes </li>
                        </ul>
                    </h3>
                    <h3>Weapon : <span>Football Skills</span></h3>
                    <h3>Weekness : <span>JunkFood</span></h3>

                </aside>
                <article class="col-md-9 k-skilltree">
                    <div class="col-md-4 k-skillweb">
                        <h3>What I do</h3>
                        <div class="ligne1 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/html.svg" alt="">
                                <p>html</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/css.svg" alt="">
                                <p>css</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/js.svg" alt="">
                                <p>js</p>
                            </div>
                        </div>
                        <div class="ligne2 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/materialize.svg" alt="">
                                <p>materialize</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/bootstrap.svg" alt="">
                                <p>bootstrap 3</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/jquery.svg" alt="">
                                <p>jquery</p>
                            </div>
                        </div>
                        <div class="ligne3 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/snapsvg.svg" alt="">
                                <p>snap svg</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/bootstrap.svg" alt="">
                                <p>bootstrap 4</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/grunt.svg" alt="">
                                <p>grunt</p>
                            </div>
                        </div>
                        <div class="ligne4 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/responsive.svg" alt="">
                                <p>responsive design</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/sass.svg" alt="">
                                <p>sass</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/leaflet.svg" alt="">
                                <p>leaflet</p>
                            </div>
                        </div>
                        <div class="ligne5 col-md-12">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/php.svg" alt="">
                                <p>php</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/wordpress.svg" alt="">
                                <p>wordpress</p>
                            </div>
                        </div>
                        <div class="ligne6 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/sql.svg" alt="">
                                <p>sql</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/mustache.svg" alt="">
                                <p>mustache</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 k-skilltool" >
                        <h3>What I use</h3>
                        <div class="ligne1 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/skype.svg" alt="">
                                <p>skype</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/bracket.svg" alt="">
                                <p>bracket</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/windows.svg" alt="">
                                <p>windows</p>
                            </div>
                        </div>
                        <div class="ligne2 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/slack.svg" alt="">
                                <p>slack</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/atom.svg" alt="">
                                <p>atom</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/cmdline.svg" alt="">
                                <p>command line</p>
                            </div>
                        </div>
                        <div class="ligne3 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/dropbox.svg" alt="">
                                <p>dropbox</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/github.svg" alt="">
                                <p>github</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/ubuntu.svg" alt="">
                                <p>ubuntu</p>
                            </div>
                        </div>
                        <div class="ligne4 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/filezilla.svg" alt="">
                                <p>filezilla</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/git.svg" alt="">
                                <p>git</p>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                        <div class="ligne5 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/wamp.svg" alt="">
                                <p>wamp</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 k-skillhobby" >
                        <h3>What I like</h3>
                        <div class="ligne1 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/sport.svg" alt="">
                                <p>sport</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/esports.svg" alt="">
                                <p>esport</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/rubik.svg" alt="">
                                <p>rubik</p>
                            </div>
                        </div>
                        <div class="ligne2 col-md-12">
                            <div class="col-md-4">
                                <img src="assets/svg/skill/foot.svg" alt="">
                                <p>football</p>
                            </div>
                            <div class="col-md-4">
                                <img src="assets/svg/skill/steam.svg" alt="">
                                <p>steam</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
          </div>
        </section>
        <section id="k-contact"  class="row text-center">
              <article class="col-md-12">
                    <div class="row">
                      <h2 class="pull-left k-titlesection">Contact me</h2>
                    </div>
                  </article>
                <div class="row">
                    <article id="k-sayhello" class="col-md-6">
                        <h3>Say Hello !</h3>
                            <div class="">
                                <p>Follow me on social media. Have a chat with me, we can go get a drink !</p>
                                <p>
                                    <a href="https://www.facebook.com/Kev21n" target="_blank"><img src="assets/svg/facebook.svg" alt="Logo FB"></a>
                                    <a href="https://twitter.com/sun21k?lang=en" target="_blank"><img src="assets/svg/twitter.svg" alt="Logo Tw"></a>
                                    <a href="https://www.linkedin.com/in/kevin21-nguyen/" target="_blank"><img src="assets/svg/linkedin.svg" alt="Logo LinkN"></a>
                                    <a href="https://github.com/KevinN21" target="_blank"><img src="assets/svg/github.svg" alt="Logo GitHb"></a>
                                </p>
                            </div>

                    </article>
                    <article id="k-phone" class="col-md-6">
                        <div class="k-phonedetails">
                            <h3>For business inquiries</h3>
                            <p>You got a project for me? Send me an email or give me a call to get in touch.</p>
                            <p>
                                <a href="mailto:kevin21.nguyen@gmail.com?Subject=Business%20Inquiries"><img src="assets/svg/mail.svg" alt="Logo Mail"></a>
                                <a href="tel:+33670617785"><img src="assets/svg/phone.svg" alt="Logo Phone"></a>
                            </p>
                        </div>
                    </article>
                </div>
            </section>
    </main>
    <footer id="k-foot" class="row">
        <h2>Kevin Nguyen © - 2017</h2>
    </footer>
    <script src="assets/js/global.js"></script>
</body>
</html>
