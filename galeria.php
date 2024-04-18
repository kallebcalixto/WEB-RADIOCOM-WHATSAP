<?php include("./config.php"); ?>

<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->

<head>

<meta charset="utf-8">

<title><?php echo $page_title; ?> - Galeria</title>

<meta name="description" content="<?php echo $page_desc; ?>">

<!--// Mobile Metas //-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--// Stylesheets //-->

<link rel="stylesheet" href="css/base.css" />

<link rel="stylesheet" href="css/skeleton.css" />

<link rel="stylesheet" href="css/layout.css" />

<link rel="stylesheet" href="css/style.css" />

<link rel="stylesheet" href="css/player.css" />

<link rel="stylesheet" href="css/color.css" />

<link rel="stylesheet" href="css/fancybox.css" />
<link rel="stylesheet" href="css/tabs.css" />


<!--[if lt IE 9]>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<!--// Favicons //-->

	<link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />

<!--// Javascript //-->

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.infinite-carousel.js"></script>

<script type="text/javascript" src="js/animatedcollapse.js"></script>

<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript" src="js/scrolltopcontrol.js"></script>

<script type="text/javascript" src="js/tabs.js"></script>

<script type="text/javascript" src="js/jquery.countdown.js"></script>

<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>

<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>

<script type="text/javascript" src="js/player.js"></script>

<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>

<script type="text/javascript" src="js/lightbox.js"></script>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>



<style>
#outer-wrapper {
	background: <?php echo $page_bg; ?>;
	width: 100%;
    background-position: center center;
    background-size: cover;
    background-repeat: repeat;
    background-attachment: scroll;
}
.inner {
    background-color: <?php echo $page_bgg; ?>;
    background: <?php echo $page_bgg; ?>;
    width: 980px;
    margin: 0px auto;
}
</style>


</head>

<body>

<!-- Outer Wrapper Start -->

<div id="outer-wrapper">

	<div class="inner">

    	<!-- Header Start -->

    	<div id="header">

        	<span class="topbar">&nbsp;</span>

        	<!-- Container Start -->

            <div class="container">

            	<!-- Logo Start -->

            	<div class="five columns left">

                	<a href="home.php" class="logo"><img src="<?php echo $logo_url; ?>" width="159" height="auto" alt="<?php echo $page_title; ?>" /></a> 

                   &nbsp;  



              </div>

             

              <!-- Logo End -->

                

                               <!-- play start -->



                               

                               

                               <!-- play end -->

              <div class="eleven columns right">

                	

                <!-- Navigation Start -->

                <div class="navigation">

                    	

                  <div id="smoothmenu1" class="ddsmoothmenu">

                            <ul>

                                <li><a href="home.php">Home</a></li>

                                <li><a href="a-radio">A Rádio</a></li>

                                <li><a href="blog">Blog</a></li>

                                <li><a href="programacao">Programação</a></li>

                                <li><a href="equipe">Equipe</a></li>

                                <li class="current-menu-item"><a href="galeria">Galeria</a></li>

                                <li><a href="contato">Contato</a></li>

                            </ul>

                            <div class="clear"></div>

                        </div>

                    </div>

                    <!-- Navigation End -->

                    <div class="clear"></div>

                </div>

            </div>

          <!-- Container End -->

        </div>

        <!-- Header End -->
                <div class="clear"></div>
        <div class="inner shadow">
        	
            <div class="clear"></div>
           

        	<!-- Container Start -->
            <div class="container row">
            	<div class="sixteen columns left">
                	<h1 class="heading">Galeria de Fotos</h1>
                    <!-- Static Page Start -->
                    <div class="in-sec nopad-bot">
                    	<div class="static">
                      <center>
                        <?php $gallery ="Galeria"; include($_SERVER["DOCUMENT_ROOT"]."/admin/includes/gallery2.php"); ?>
                        </center>
                        
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                    <!-- Static Page End -->
                </div>
            </div>
            <div class="clear"></div>
            
            
            <!-- Anuncientes Start -->



                    <center>

                	<div class="prod-sec">

                    	<div class="prod-head">

                        	<h1>Anunciantes</h1>

                           

                            <div class="clear"></div>

                        </div>

                        <ul class="prod-list">

                        	<li>

                            	<a href="<?php echo $anun_link_1; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_1; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_1; ?></a></h4>

                                	<a href="<?php echo $anun_link_1; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                           <li>

                            	<a href="<?php echo $anun_link_2; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_2; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_2; ?></a></h4>

                                	<a href="<?php echo $anun_link_2; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                           <li>

                            	<a href="<?php echo $anun_link_3; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_3; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_3; ?></a></h4>

                                	<a href="<?php echo $anun_link_3; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                           <li>

                            	<a href="<?php echo $anun_link_4; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_4; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_4; ?></a></h4>

                                	<a href="<?php echo $anun_link_4; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                        </ul>

                    </div>

                    </center>

                    <!-- Albums End -->
                    
                    
                    </div>

            </div>

            <div class="clear"></div>

            <!-- Footer Start -->

            

            <!-- Footer End -->

        </div>
        
        

        <div class="clear"></div>

    </div>

</div>

<div id="footer">

            	<div class="foot-top">
            	    <div class="inner">

                	<!-- Footer Logo Start -->

                    <div class="logo-foot">

                    	<a href="#"><img src="<?php echo $logo_url; ?>" alt="" width="82px" height="auto" /></a>

                    </div>

                    <!-- Footer Logo End -->

                    <!-- Footer Navigation Start -->

                    <div class="links-foot">

                    	<ul>

                        	<li><a href="home.php">Home</a></li>

                            <li><a href="a-radio">A Rádio</a></li>

                            <li><a href="blog">Blog</a></li>

                            <li><a href="programacao">Programação</a></li>

                            <li><a href="equipe">Equipe</a></li>

                            <li><a href="galeria">Galeria</a></li>

                            <li><a href="contato">Contato</a></li>

                        </ul>

                    </div>
                    <!-- Follow Us and Top Start -->

                    <div class="followus-top">

                    	<a href="#top" class="top">TOP</a>

                        <!-- Follow Us Start -->

                    	<ul>

                        	<li><h6 class="white">SIGA-NOS</h6></li>

                        	<li><a href="http://www.facebook.com/<?php echo $fb_url; ?>" target="_blank" class="facebook">&nbsp;</a></li>

                            <li><a href="http://www.twitter.com/<?php echo $tw_url; ?>" target="_blank" class="twitter">&nbsp;</a></li>
                      </ul>

                        <!-- Follow Us End -->

                    </div>

                    <!-- Follow Us and Top End -->

                </div>

            </div>
                    <!-- Follow Us and Top Start -->


                        <!-- Follow Us Start -->



                        <!-- Follow Us End -->

                    </div>

                    <!-- Follow Us and Top End -->

                </div>

            </div>

                    <!-- Footer Navigation End -->



                </div>
                
                

                    <!-- Follow Us and Top End -->

                </div>

            </div>

<!-- Outer Wrapper End -->



<script src="/<?php echo $pulse_dir; ?>/includes/tracker.php?uri=<?php echo $_SERVER['REQUEST_URI']; ?>&ref=<?php echo $_SERVER['HTTP_REFERER']; ?>"></script>

	

	<script type="text/javascript">

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', '<?php echo $analytics_id; ?>']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>


 
 
 <!-- Whatsapp widget-->

 
  
  <a class='ob-whatsapp' href='https://wa.me/<?php echo $whats; ?>' rel='nofollow noopener' target='_blank' title='Whatsapp' />

<style>
  
  .ob-whatsapp {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  z-index: 9999;
}

.ob-whatsapp:before {
  content: "";
  background-repeat: no-repeat;
  background-size: 34px 34px;
  background-position: center center;
  width: 50px;
  height: 50px;
  background-image: url("data:image/svg+xml;charset=utf8,%3csvg viewBox='0 0 24 24' width='32' height='32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cg%3e%3cpath style='fill:%23ffffff' d='M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,7 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z'%3e%3c/path%3e%3c/g%3e%3c/svg%3e");
  background-color: #00C853;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 100%;
  box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, .12), 0 1px 1px 0 rgba(0, 0, 0, .24);
}
.ob-whatsapp:after {
  content: "<?php echo $msg_whats; ?>";
  width: 100px;
  padding: 5px 10px;
  position: absolute;
  bottom: 100%;
  margin-bottom: 10px;
  right: -150px;
  text-align: right;
  color: #555;
  border: 1px solid #dedede;
  background: rgba(255,255,255,.5);
  border-radius: 4px;
  opacity: 0;
  transition:all .4s ease-in-out;
  font-size: 90%;
  line-height: 1.1;
}

.ob-whatsapp:hover:after {
  opacity: 1;
  right: 0;
}
  
</style>
    


</body>

</html>