<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Le site</title>
		<link href="view/css/main.css" rel="stylesheet" />
		<link href="view/asset/logo/favicon.png" rel="shortcut icon" 
		type="image/x-icon" />
	</head>

	<body>

		<div id="wrap">

			<?php
				include('/opt/lampp/htdocs/projects/LouisHaquette/view/includes/mainHeader.php');
			?>

			<div id="main">
			
				<section id="lesiteSection">
					<h2>Le site</h2>
					<h3>Infos techniques :</h3>
					
					<p>
						Ce site est mon blog personnel et aussi mon premier site web. Il a été codé entièrement par moi-même en PHP et JavaScript. <br />
						Il est également codé d'après les standards HTML5 et CSS3 et son texte est encodé en utf-8.
					</p>
					
					<p>
						<em>Une partie</em> de son code source (libre, <a href="https://www.gnu.org/licenses/gpl-2.0.html" title="GPL2">license GPL2</a>) 
						est disponible sur la plateforme <a href="https://github.com/LouisHaquette/LouisHaquette" title="le code source">Github</a>. <br />
						De plus, son contenu est sous license 
						<a href="http://creativecommons.org/licenses/by-sa/4.0/" title="creative commons CC BY-SA 4.0">CC BY-SA 4.0</a>, 
						sauf mention contraire.
					</p>
					 
					<h3>À propos de moi et mes projets :</h3>
					
					<p>
						Tout d'abord bienvenue à tous sur mon site (j'ai toujours rêvé de dire ça ^_^), je vais me présenter :
					</p>

					<p>
						Je m'appelle Louis Haquette, mais ça, je pense que vous le saviez déjà ! <br />
						J'ai 14 ans, je vis en France, dans le Nord-Pas-De-Calais et j'ai depuis longtemps une passion pour l'informatique, <br />
						J'ai commencé à programmer à 12 ans <br />
						(je faisais des petits programmes inutiles en vb.net, <br />
						je ne comprenais pas grand chose et la plupart de mon code été copié de divers tutos). <br />
						À 13 ans, j'ai commencé à m'interesser de plus près à l'informatique, <br />
						j'ai commencé à apprendre le C, le HTML5 et Le CSS3. 
					</p>
					
					<p>
						À 14 ans, j'ai aussi commencé à apprendre le C++ <br />
						(j'avais voulu commencer à créer un mini jeu "bomberman" en 2D avec la <a href="http://www.sfml-dev.org/" title="la SFML">SFML</a>, <br />
						j'ai juste réussi <a href="view/asset/img/lesite/Screenshot_Bomberman.png" title="voir l'image">à faire la génération des niveaux aléatoires</a>, <br />
						mais aprés j'ai vite laissé tomber le projet. <br />
						Puis après j'avais <a href="http://www.github.com/LouisHaquette/TestParticles" title="la page Github">un petit programme</a> pour tester  
						<a href="view/asset/img/lesite/Screenshot_TestParticles.png" title="voir l'image">la génération de particules</a>), <br />
						j'ai aussi commencé à apprendre le PHP, <br/>
						ensuite je me suis pas mal amélioré en C et j'ai commencé à bosser sur ce site. <br />
						J'ai essayé de coder 
						<a href="https://github.com/LouisHaquette/PiComputer" title="la page Github">un programme qui calcul Pi</a>, en C, avec la 
						<a href="https://gmplib.org/" title="la GMP">GMP</a>, j'ai quasiment réussi, mais même si 
						<a href="https://en.wikipedia.org/wiki/Chudnovsky_algorithm" title="algorithme de Chudnovsky">l'algorithme</a> fonctionne bien, <br />
						Mais je n'ai pas (encore) réussi à afficher plus d'une vingtaine de décimales, le projet est donc projet en pause. <br /> 
						Et j'ai très récemment commencé à apprendre les bases de Python.<br />
					</p>
					
					<p> 
						Mais c'est surtout cette année là que j'ai découvert 
						<a href="https://www.gnu.org/" title="le projet GNU">GNU/Linux</a> 
						et les logiciels libres en général (d'où le 
						<a href="http://peacesymbol.org/art/gnu-linux-tux-coffee-logo-starbucks-tux-peacesymbol-org-svg/" title="le logo">logo du site</a> :)).<br /> 
						Depuis, je suis sous <a href="http://www.ubuntu.com/" title="Ubuntu">Ubuntu</a> (j'avais aussi essayé 
						<a href="https://www.debian.org/" title="Debian">Debian</a> + <a href="http://www.gnome.org/" title="Gnome">Gnome</a> 
						pendant un moment, mais je n'avais pas vraiment accroché), <br />
						<em>et je ne suis pas près de retourner sur Windows !</em>
					</p>
					
					<p>
						Après ça, je suis surtout passionné de Physique et de sciences en général. <br />
						J'aime aussi beaucoup lire (même si je ne lis pas énormément), je fais de la peinture, du skate et aussi un petit peu de sport :)
					</p>
					
					<h3>Me contacter :</h3>
					
					<p>
						Si vous souhaitez me contacter pour une remarque, une suggestion, un problème sur le site, <br />
						juste pour me parler, m'insulter (j'adore ça :P), <br /> 
						ou pour n'importe quelle autre raison, vous pouvez le faire via mon adresse e-mail : 
					<p>
					
					<p>
						<a href="mailto:louis@alphee.fr" title="mon adresse e-mail">louis@alphee.fr</a>
					</p>
					
					<p>
						Ou par n'importe quel réseau social (voir les liens sur <a href="home.php" title="page d'accueil">la page d'accueil</a>). <br />
						<em>Je suis encore débutant tous vos avis sur le site (design, etc), m'interressent !</em>
					</p>
					
				</section>

			</div>
			
		</div>

		<?php
			include('/opt/lampp/htdocs/projects/LouisHaquette/view/includes/mainFooter.php');
		?>

	</body>
</html>
