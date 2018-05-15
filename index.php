<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemple de site</title>

		<link rel="stylesheet" href="css/autopsie.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="menu" class="ligne espaceautour">
			<ul class="ligne">
				<li><a href="#">Menu 1</a></li>
				<li><a href="#">Menu 2</a></li>
				<li><a href="#">Menu 3</a></li>
			</ul>
		</div>
		<div id="content" class="ligne haut lg-site" >
			<div id="post" class="colonne">
				<h1>Exemple d'article</h1>
				<div class="ligne stretch">
					<img src=" http://via.placeholder.com/250x250" alt="">
					<div class="colonne">
						<div class="ligne gauche">
							<p>Facile</p>
							<p><a href="#">36 commentaires</a></p>
							<p>4.5 étoiles</p>
						</div>
						<div class="ligne gauche">
							<img class="rond" src="http://via.placeholder.com/50x50" alt="">
							<p>Par <a href="#">Radis Magique</a></p>
						</div>
						<div class="ligne gauche">
							<a href="#">Noter</a>
							<a href="#">Editer</a>
							<a href="#">Ajouter à mon carnet</a>
						</div>


						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor sit amet eros aliquet tempus. Fusce condimentum neque a tellus interdum convallis. Donec rhoncus accumsan fermentum. Cras pellentesque elementum dignissim. Suspendisse vestibulum nulla in quam cursus, quis vestibulum ex cursus. Duis euismod elementum diam eget rhoncus. Duis vel dui vel ipsum rutrum venenatis ut at metus. Vivamus maximus consequat molestie. </p>
						<div class="ligne droite en-bas">
							<a href="#">dessert</a>
							<a href="#">goûter</a>
							<a href="#">magique</a>
						</div>
					</div>
				</div>
				<div class="ligne">
					<div id="necessaire" class="colonne gauche enhaut">
						<h2 class="aumilieu">Il vous faut ...</h2>
						<ul>
							<li>350 g de farine</li>
							<li>120 L d'eau</li>
							<li>100 g de sucre (le plus fin possible)</li>
						</ul>
						<ul>
							<li>Un batteur à oeufs</li>
							<li>Du papier bulle</li>
						</ul>
					</div>

					<div class="colonne">
						<div class="ligne espaceAutour">
							<p>10 min</p> <p>30 min</p> <p>Pas cher</p>
						</div>
						<h2>Préparation</h2>
						<?php for ($i=0; $i < 6; $i++) : ?>
							<h3 class="agauche">Etape <?php echo $i; ?></h3>
							<div class="ligne haut" style="<?php if($i%2 != 0): echo 'flex-direction: row-reverse ;'; endif; ?>">
								<img src="http://via.placeholder.com/250x100" alt="">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate, sapien et faucibus malesuada, est metus iaculis ipsum, nec ultrices est mauris sit amet nunc. Nullam imperdiet urna a metus bibendum, sed aliquam massa sollicitudin. Ut rutrum, sapien nec suscipit sollicitudin, magna mauris mattis dolor, eget faucibus nunc ex in justo. Vestibulum orci urna, blandit luctus tempus sed, auctor at odio. In eget neque neque. Fusce ut ultrices felis. Phasellus vitae urna sit amet massa molestie volutpat. In hac habitasse platea dictumst. Aenean accumsan sit amet eros at condimentum. Maecenas placerat, est a consequat fermentum, mauris ex aliquam ante, malesuada vehicula metus lectus ut orci.</p>
							</div>
						<?php endfor; ?>

						<div class="colonne">
							<p>Première note perso de l'espace de la mort qui tue tout sur son passage où l'herbe ne repousse pas très bien en hiver lorsque les oiseaux chantent et les fleurs poussent.</p>
							<a href="#" class="adroite">Editer</a>
						</div>


						<form id="note-perso" class="" action="index.html" method="post">
							<textarea class="ligne" name="name" rows="5"  placeholder="Ajouter une note privée ..."></textarea>
							<input type="submit" name="" value="Envoyer">
						</form>
						<div class="ligne droite">
							<a href="#">Noter</a>
							<a href="#">Ajouter à mon carnet</a>
						</div>
					</div>
				</div>
			</div>
			<div id="comments" class="colonne">
				<h2>112 Commentaires sur "Exemple d'article"</h2>
				<form class="colonne" action="index.html" method="post">
					<textarea class="ligne" name="name" rows="8" placeholder="Commentaire" required></textarea>
					<input type="submit" name="" value="Envoyer">
				</form>

				<?php for ($i=0; $i < 18; $i++) : ?>
					<div class="colonne comment">
						<div class="ligne haut">
							<img class="rond" src="http://via.placeholder.com/40x40" alt="">
							<div class="colonne">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate, sapien et faucibus malesuada, est metus iaculis ipsum, nec ultrices est mauris sit amet nunc. Nullam imperdiet urna a metus bibendum, sed aliquam massa sollicitudin. Ut rutrum, sapien nec suscipit sollicitudin, magna mauris mattis dolor, eget faucibus nunc ex in justo. Vestibulum orci urna, blandit luctus tempus sed, auctor at odio. In eget neque neque.</p>
								<p class="adroite enbas"> <a href="#">Répondre</a> </p>
							</div>
						</div>
						<div class="colonne reponses">
							<div class="colonne comment">
								<div class="ligne haut">
									<img class="rond" src="http://via.placeholder.com/40x40" alt="">
									<div class="colonne">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate, sapien et faucibus malesuada, est metus iaculis ipsum, nec ultrices est mauris sit amet nunc. Nullam imperdiet urna a metus bibendum, sed aliquam massa sollicitudin. Ut rutrum, sapien nec suscipit sollicitudin, magna mauris mattis dolor, eget faucibus nunc ex in justo. Vestibulum orci urna, blandit luctus tempus sed, auctor at odio. In eget neque neque.</p>
										<p class="adroite enbas"> <a href="#">Répondre</a> </p>
									</div>
								</div>
								<div class="colonne reponses">

								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</body>
</html>
