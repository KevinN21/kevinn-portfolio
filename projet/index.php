<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta type="author" content="Kevin Nguyen" />
        <meta type="description" content="Portfolio Kevin Nguyen" />
        <meta name="keywords" content="Portfolio, Kevin Nguyen, Website, Work, Skill, Service, About me,HTML, CSS, XML, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- META FACEBOOK  -->
        <meta property="og:url"                content="" />
        <meta property="og:type"               content="" />
        <meta property="og:title"              content="" />
        <meta property="og:description"        content="" />
        <meta property="og:image"              content="1200*630" />
        <!-- TWITTER -->
        <meta name="twitter:card"              content="" />
        <meta name="twitter:creator"           content="">
        <meta name="twitter:title"             content="">
        <meta name="twitter:description"       content="">
        <meta name="twitter:image:src"         content="">
        <meta name="twitter:image"             content="">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
        <link rel="stylesheet" href="assets/css/global.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.2/jquery.fullPage.min.js"></script> -->

      <title>Kevin Nguyen ::     Web Developper</title>
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
                    <a class="navbar-brand" href="#"><i class="fa fa-home fa-lg" area-hidden="true"></i></a>
                </div>

                <div class="collapse navbar-collapse" id="k-navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#k-abtme">About</a></li>
                        <li><a href="#k-works">Works</a></li>
                        <li><a href="#k-showcase">Showcase</a></li>
                        <li><a href="#k-skills">Skills</a></li>
                        <li><a href="#k-contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class=" row">

            <div class="col-md-12 k-site-title center-block">
                <h1 class="">
                    <img class="center-block"  src="assets/svg/logo_animated.svg" alt="Logo Kevin Nguyen Portfolio">
                </h1>
                <a href="#k-abtme"><div class="scroll-down"></div></a>
            </div>
        </section>
    </header>
    <main class="container-fluid">
            <section id="k-abtme"    class="section row text-center">
                <h2 class="k-titlesection pull-left">About me</h2>
                <div class="col-md-12 col-xs-12">
                    <article class="k-name col-md-6 col-xs-12 text-center">
                        <h2>Kevin Nguyen</h2>
                        <h3>Developper Web</h3>

                        <div class="k-counter col-md-12 hidden-sm hidden-xs">
                            <div class="col-md-3">
                                <p class="count">721</p>
                                <p>cups of coffee</p>
                            </div>
                            <div class="col-md-3">
                                <p class="count">1639270</p>
                                <p>lines</p>
                            </div>
                            <div class="col-md-3">
                                <p class="count">13</p>
                                <p>projects</p>
                            </div>
                            <div class="col-md-3">
                                <p class="count">84</p>
                                <p>MC Donald's</p>
                            </div>
                            <!-- <button type="button" name="button">Download</button> -->
                        </div>
                    </article>
                    <article class="col-md-6 col-xs-12">
                        <figure>
                            <figcaption>
                                <img src="./assets/img/Kevin-Nguyen.jpg" alt="Ma tête" class="img-responsive">
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </section>
            <section id="k-works"    class="section row text-center">
                <article class="row">
                    <h2 class="k-titlesection pull-left">My Work</h2>
                        <div class="k-mywork">

<?php

$myProjects = array(
        array(
            'image'  =>'assets/img/MU-spaceinvader.jpg',
            'title'  =>'Space Invader',
            'descrip' =>'Jeux fait uniquement avec du HTML, CSS et JS.',
            'periode' =>'07/11/2016 - 10/11/2016',
            'lien' =>'http://kevinn.student.codeur.online/space-invader/'
        ),
        array(
            'image' =>'assets/img/MU-miniblog.jpg',
            'title' =>'Mini Blog',
            'descrip' =>"Création d'article, de catégories et d'auteurs, en utilisant du PHP avec un modèle MVC.",
            'periode' =>'30/11/2016 - 02/12/2016',
            'lien' =>'http://kevinn.student.codeur.online/mini-blog/',
        ),
        array(
            'image' =>'assets/img/MU-memegenerator.jpg',
            'title' =>'Meme Generator',
            'descrip' =>'Génération et création du meme en utilisant PHP, HTML, CSS.',
            'periode' =>'14/12/2016 - 20/12/2016',
            'lien' =>'http://kevinn.student.codeur.online/meme-generator/',
        ),
        array(
            'image' =>'assets/img/MU-filesexplorer.jpg',
            'title' =>'File Explorer',
            'descrip' =>'Arborescence et exploration de fichier, utilisation du PHP, AJAX, HTML et CSS.',
            'periode' =>'16/11/2016 - 22/11/2016',
            'lien' =>'http://kevinn.student.codeur.online/file-explorateur/',
        ),
        array(
            'image' =>'assets/img/MU-kapybox.jpg',
            'title' =>'We Transfer',
            'descrip' =>'Projet de transfert de fichier, en utilisant PHP, HTML, CSS, JQuery.',
            'periode' =>'02/01/2017 - 10/01/2017',
            'lien' =>'http://kevinn.student.codeur.online/KYPA/'
        ),
        array(
            'image' =>'assets/img/MU-blog404.jpg',
            'title' =>'Blog 404',
            'descrip' =>'Projet de refonte du blog WordPress de notre promo.',
            'periode' =>'11/01/2017 - 17/01/2017',
            'lien' =>'http://kevinn.student.codeur.online/BLOG_404/1_siteWEB/404-code-found/'
        ),
        array(
            'image'  => 'assets/img/MU-data.jpg',
            'title'  => 'Projet DATA',
            'descrip'  =>'Open DATA des musées de France en prennant le concept de Tinder, en utilisant PHP, HTML, CSS, JQuery.',
            'periode'  =>'18/01/2017 - 01/02/2017',
            'lien'  =>'http://kevinn.student.codeur.online/projet_DATA/'

        ),
        array(
            'image'  =>'assets/img/MU-accropolis.jpg',
            'title'  =>'Projet Commenditaire',
            'descrip'  => "Refonte graphique de 'La chaîne de streaming citoyenne Accropolis' sous WordPress.",
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
                                            <figcaption class="k-frame col-md-4 col-xs-12">
                                                <div class="k-imgwork">
                                                    <img src="<?php echo $monProjet['image'] ?>" alt="My Work"/>
                                                        <div class="k-details">
                                                            <h3><?php echo $monProjet['title'] ?></h3>
                                                            <p class="col-md-10"><?php echo $monProjet['descrip'] ?></p>
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
            <section id="k-showcase" class="section row">
                <article class="row">
                      <h2 class="k-titlesection pull-left">My Showcase</h2>
                             <div id="k-rousel" class="carousel slide" data-ride="carousel">
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
            </section>
            <section id="k-skills"   class="section row">
              <div class="row">
                <h2 class="k-titlesection pull left">Technical Skills</h2>
                    <article class="k-whatido row text-center">
                            <div class="col-md-4 col-xs-12">
                                <img data-supp="tooltip" data-placement="top" title="Click on me !" data-toggle="modal" data-target="#k-modal" data-title="What I do" data-skills="web" src="assets/svg/web.svg" alt="What I do">
                                <p class="k-ribbon">Web Development</p>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <img  data-supp="tooltip" data-placement="top" title="Click on me !" data-toggle="modal" data-target="#k-modal" data-title="What I use" data-skills="tools" src="assets/svg/tools.svg" alt="My tools">
                                <p class="k-ribbon">Softwares</p>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <img  data-supp="tooltip" data-placement="top" title="Click on me !" data-toggle="modal" data-target="#k-modal" data-title="What I like" data-skills="hobbies" src="assets/svg/hobby.svg" alt="My hobbies">
                                <p class="k-ribbon">During my free Time</p>
                            </div>
                    </article>


                        <div class="modal fade" id="k-modal" tabindex="-1" role="dialog" aria-labelledby="kModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="kModalLabel"></h4>
                              </div>
                              <div class="modal-body">
                                  <img class="k-imgs-web" src="" alt="Logo Languages">
                                  <img class="k-imgs-web" src="" alt="Logo Languages">
                                  <img class="k-imgs-web" src="" alt="Logo Languages">
                                  <!-- <img class="k-imgs-tool" src="" alt="Logo Languages">
                                  <img class="k-imgs-hobby" src="" alt="Logo Languages"> -->
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>


                 <script type="text/javascript">
                 skills = {
                     web:
                        {
                            image:'assets/svg/css.svg',
                        },
                    tools:
                        {
                            image:'assets/svg/github.svg',
                        },
                    hobbies:
                        {
                            image:'asset/svg/psd.svg',
                        }
                };
                    $('#k-modal').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget) // Button that triggered the modal
                      var modal = $(this);
                      var html = '';
                      var tab = skills[button.data('skills')];
                      $(tab).each(function( index ) {
                          $(".k-imgs-web").attr("src",skills.web.image);
                        //   $(".k-imgs-tool").attr("src",skills.tools.image);
                        //   $(".k-imgs-hobby").attr("src",skills.hobbies.image);


                          console.log(skills.web.image);
                          html += this.image ;
                      });
                        console.log(html);
                      modal.find('.modal-title').text(button.data('title'))
                    //   modal.find('.modal-body').text(html);
                    })

                </script>
              </div>
            </section>
            <section id="k-contact"  class="section row">
              <article class="col-md-12">
                    <div class="row">
                      <h2 class="pull-left k-titlesection">Contact me</h2>
                    </div>
                  </article>
                <div class="row">
                    <article id="k-sayhello" class="col-md-6">
                        <h3>Say Hello !</h3>
                            <div class="">
                                <p>Follow me on social media. Have a chat with me, we can go get a drink ! I won't bite.</p>
                                <p><a href="https://www.facebook.com/Kev21n" target="_blank"><img src="assets/svg/facebook.svg" alt="Logo FB"></a>
                                <a href="https://twitter.com/sun21k?lang=en" target="_blank"><img src="assets/svg/twitter.svg" alt="Logo Tw"></a>
                                <a href="https://www.linkedin.com/in/kevin21-nguyen/" target="_blank"><img src="assets/svg/linkedin.svg" alt="Logo LinkN"></a>
                                <a href="https://github.com/KevinN21" target="_blank"><img src="assets/svg/github.svg" alt="Logo GitHb"></a>
                            </div>

                    </article>
                    <article id="k-phone" class="col-md-6">
                        <div class="k-phonedetails">
                            <h3>For business inquiries</h3>
                            <p>You got a project for me? Send me an email or give me a call to get in touch.</p>
                            <p><a href="mailto:kevin21.nguyen@gmail.com?Subject=Business%20Inquiries"><img class="logomail" src="assets/svg/mail.svg" alt="Logo Mail"></a>
                            <a href="tel:+33670617785"><img src="assets/svg/phone.svg" alt="Logo Phone"></a></p>
                        </div>
                    </article>
                </div>
            </section>
    </main>
    <footer id="k-foot" class="row">
        <h2>Kevin Nguyen © - 2017</h2>
          <!-- <div class="KW_progressContainer">
		<div class="KW_progressBar"></div>
    </div> -->
    </footer>

    <script src="assets/js/global.js"></script>

</body>
</html>
