<?php
$bdd = new PDO('mysql:host=localhost;dbname=base_event', 'root', '');

if(isset($_POST['forminscription'])) {
   $type = htmlspecialchars($_POST['type']);
   $email = htmlspecialchars($_POST['email']);
   $cemail = htmlspecialchars($_POST['cemail']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $motdepasse = sha1($_POST['motdepasse']);
   $cmotdepasse = sha1($_POST['cmotdepasse']);
   $adresse = htmlspecialchars($_POST['adresse']);
   $numtel = htmlspecialchars($_POST['numtel']);
   if( !empty($_POST['email']) AND !empty($_POST['cemail']) AND !empty($_POST['pseudo']) AND !empty($_POST['motdepasse']) AND !empty($_POST['cmotdepasse']) AND !empty($_POST['adresse']) AND !empty($_POST['numtel'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($email == $cemail) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = ?");
               $reqmail->execute(array($email));
                     echo $email;
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($motdepasse == $cmotdepasse) {
                     $insertmbr = $bdd->prepare("INSERT INTO utilisateurs(type, email, pseudo, motdepasse, adresse, numtel) VALUES(?, ?, ?, ?, ?, ?)");
                     $insertmbr->execute(array($type, $email, $pseudo ,$motdepasse ,$adresse ,$numtel));

                     $erreur = "Votre compte a bien été créé ! <a href=\"espaceuser.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";

   }
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Le Reve<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="index.html">Accuiel</a></li>
						<li><a href="about.html">A propos</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="salles.html">sales des fêtes </a></li>
								<li><a href="banquet.html">le banquet </a></li>
								<li><a href="deco.html">décoration</a></li>
								<li><a href="photographes.html">photographes</a></li>
								<li><a href="music.html">groupes musicaux</a></li>
								<li><a href="fleuriste.html">fleuriste mariages</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="login.html">Se connecter</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>


	

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Créer un compte</h2>
					<p>Connectez-vous & profitez de nos services </p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
								<form method="POST" action="">
					  <div class="form-group">
					  	<div>
					    <label for="exampleFormControlSelect1">Type d'utilisateur* :</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="type">
					      
					      <option value="0" selected >Client</option>
					     
					    </select>
					  </div>
					  
					    <label for="exampleInputEmail1">Adresse e-mail* :</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Entre votre email">
					  </div>
					  <div>
					    <label for="exampleInputEmail1">Confirme adresse e-mail* :</label>
					    <input type="email" class="form-control" id="exampleInputEmail2" name="cemail" placeholder="Confirme votre email">
					  </div>
						<div class="form-group">
					    <label for="inputAddress">Pseudo* :</label>
					    <input type="text" class="form-control" id="inputpseudo" name="pseudo" placeholder="Votre pseudo ..">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Mot de passe* :</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" name="motdepasse" placeholder="Votre Mot de passe">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Confirme Mot de passe* :</label>
					    <input type="password" class="form-control" id="exampleInputPassword2" name="cmotdepasse" placeholder="Confirme Mot de passe">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Votre Addresse* :</label>
					    <input type="text" class="form-control" id="inputAddress" name="adresse" placeholder="1234 res ..">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Numero de telephone* :</label>
					    <input type="text" class="form-control" id="inputAddress" name="numtel" placeholder="+216 .. ... ...">
					  </div>
					  
					  <button type="submit" class="btn btn-primary" name="forminscription">Inscription</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>



