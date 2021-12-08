<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=base_event', 'root', '');



if(isset($_SESSION['id'])) {
    $nom =$_POST['nom'];
      $prenom =$_POST['prenom'];
      $date =$_POST['date'];
   $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
   
   $requser->execute(array($_SESSION['id']));
//$requser->execute(array(2))
   $user = $requser->fetch();
   $msg = $bdd->prepare('SELECT distinct(s.nom) ,s.description,s.emplacement,s.categorie,s.note,s.capacite,s.url,s.disponible FROM salles s , reservationsalles r WHERE(r.id_salles!=s.nom or r.date!= ? )');
   $msg->execute(array($date));
$msg_nbr = $msg->rowCount();

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

	FREE HTML5 TEMPLATE s
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
								<li><a href="salles.php">sales des fêtes </a></li>
								<li><a href="banquet.html">le banquet </a></li>
								<li><a href="deco.html">décoration</a></li>
								<li><a href="photographes.html">photographes</a></li>
								<li><a href="music.html">groupes musicaux</a></li>
								<li><a href="fleuriste.html">fleuriste mariages</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="reserver.php">Réserver Salles</a></li>
						<li><a href="login.php">Se connecter</a></li>
						<li><a href="deconnexion2.php"><i class="glyphicon glyphicon-lock"></i> Déconnexion </a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/gallery-6.jpg);">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						
								<h1 class="page-header"><i class="glyphicon glyphicon-user"></i> Profil de <?php echo $user['pseudo']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<table class="table" >

						<tr>
							<th>Pseudo : </th>
							<td><?php echo $user['pseudo']; ?></td>
						</tr>
						<tr>
							<th>Adresse E-mail : </th>
							<td><?php echo $user['email']; ?></td>
						</tr>
						<tr>
							<th>Adresse : </th>
							<td><?php echo $user['adresse']; ?></td>
						</tr>
						<tr>
							<th>Numero de telephone : </th>
							<td><?php echo $user['numtel']; ?></td>
						</tr>
					</table>
		</div>
	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Nos Salles Disponible</h2>
					<p>  <font  size='10'> le <?php echo $date ?> </font></p>
				</div>
			</div>

			<div id="fh5co-couple-story">
				<form action="AjoutReservation.php" method="POST">
		<div class="container">
			<div class="row">
				
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">

<?php
									   if($msg_nbr == 0) { echo "Aucune salles disponibles pour le moment ..."; }
									   $x=2;
									   while($m = $msg->fetch()) {
									   	
									   	if($x % 2==0)
									   	{
									       ++$x;

?>
   <li class="animate-box">
      <?php 
} else { 
 $x++ ;
      ?>
   <li class="timeline-inverted animate-box">
   	<?php 
}
	?>			

							<div class="timeline-badge" style="background-image:url(<?= nl2br($m['url']) ?>);"></div>
						
							<div class="timeline-panel">
								<div class="timeline-heading">
								<input type="hidden" name="nom" value="<?= nl2br($m['nom']) ?>">
								<input type="hidden" name="date" value=" <?php echo $date ?> ">
								<input type="hidden" name="nomReservation" value=" <?php echo $user['pseudo'] ?> ">
									<h3 class="timeline-title"><?= nl2br($m['nom']) ?></h3>
									<span class="date"><?= nl2br($m['emplacement']) ?></span>
								</div>
								<div class="timeline-body">
									<p><?= nl2br($m['description']) ?></p><br>
                                 <h4>catégorie :<?= nl2br($m['categorie']) ?> </h4>
                                 <h4>Note : <?= nl2br($m['note']) ?> /5</h4>
                                 <h4>capacité : <?= nl2br($m['capacite']) ?> </h4>
								</div>
								<div align="center" ><button type="submit" class="btn btn-primary">Reserver</button></div>
							</div>
						
						</li>
						 <?php  } ?>
						

				
			    	</ul>
				</div>
			</div>
		</div>
	</div>

			

				</form>
			
		</div>
	

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Vous_étes intéressé?</h2>
					<p>Connectez-vous s'il vous plait.Merci.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Nom</label>
								<input type="name" class="form-control" id="name" placeholder="Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Je suis intéressé</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					
					<p>
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

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

<?php

}
?>