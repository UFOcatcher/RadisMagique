<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Radis magique</title>

		<link rel="stylesheet" href="css/autopsie.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="ligne stretch">
		<div id="menu" class="colonne">
			<ul>
				<li><a href="#">Recettes</a></li>
				<li><a href="#">Bricolage</a></li>
				<li><a href="#">Arduino</a></li>
			</ul>
		</div>
		<div id="content" class="colonne">
			<h1>Radis aux arc-en-ciel</h1>
			<div class="ligne">
				<img src=" http://via.placeholder.com/250x100" alt="">
				<div class="colonne gauche">
					<a href="#">Editer</a>
					<p>Niveau : facile</p>
					<p><a href="#">36 commentaires</a></p>
					<p>4.5 étoiles</p>
					<p>La tarte aux concombres c'est la vie. Parfois j'en fais des masques, c'est pas bon pour la peau mais après j'me sens mieux.</p>
				</div>
			</div>
			<div class="ligne">
				<div id="necessaire" class="colonne enhaut">
					<h2>Il vous faut ...</h2>
					<p>Pour 6 personnes</p>
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
					<h2>Préparation</h2>
					<p>Temps de préparation : 2h - Repos : 1h30 - Actif : 30min</p>
					<h3 class="agauche">Etape 1</h3>
					<div class="ligne">
						<img src="http://via.placeholder.com/250x100" alt="">
						<p>Texte de l'étape 1, c'est très passionnant même que des fois les gens lisent ce qui est écrit.</p>
					</div>

					<h3 class="agauche">Etape 2</h3>
					<div class="ligne">
						<img src="http://via.placeholder.com/250x100" alt="">
						<p>Texte de l'étape 1, c'est très passionnant même que des fois les gens lisent ce qui est écrit.</p>
					</div>

					<h3 class="agauche">Etape 3</h3>
					<div class="ligne">
						<img src="http://via.placeholder.com/250x100" alt="">
						<p>Texte de l'étape 1, c'est très passionnant même que des fois les gens lisent ce qui est écrit.</p>
					</div>

					<div class="colonne">
						<p>Première note perso de l'espace de la mort qui tue tout sur son passage où l'herbe ne repousse pas très bien en hiver lorsque les oiseaux chantent et les fleurs poussent.</p>
						<a href="#" class="bouton rose adroite">Editer</a>
					</div>


					<form id="note-perso" class="" action="index.html" method="post">
						<textarea name="name" rows="8" placeholder="Ajouter une note privée ..."></textarea>
						<input type="submit" name="" value="Envoyer">
					</form>
					<div class="ligne droite">
						<a href="#">Noter</a>
						<a href="#">Ajouter à mon carnet</a>
					</div>
				</div>
			</div>
		</div>
		<div id="commentaires" class="colonne">
			<div class="ligne stretch">
				<div class="colonne">
					<p>3 Décembre 2018</p>
					<p>Mots-clés :</p>
					<p> <a href="#">magique</a> </p>
					<p> <a href="#">recette</a> </p>
					<p> <a href="#">facile</a> </p>
				</div>
				<div class="colonne">
					<h2>112 Commentaires sur "Radis aux arc-en-ciel"</h2>
					<form class="colonne" action="index.html" method="post">
						<div class="ligne">
							<input type="text" name="" placeholder="Pseudo">
							<input type="text" name="" placeholder="Couriel">
						</div>
						<textarea name="name" rows="8" placeholder="Commentaure" required></textarea>
						<input type="submit" name="" value="Envoyer">
					</form>
				</div>
			</div>
			<?php for ($i=0; $i < 18; $i++) : ?>
				<div class="colonne commentaire">
					<div class="ligne">
						<img class="rond" src="http://via.placeholder.com/40x40" alt="">
						<div class="colonne">
							<p>Je trouve cette recette très très bien, c'est vraiment génial de pouvoir partager un tel savoir.</p>
							<p class="adroite enbas"> <a href="#">Répondre</a> </p>
						</div>
					</div>
					<div class="colonne reponses">
						<div class="colonne commentaire">
							<div class="ligne">
								<img class="rond" src="http://via.placeholder.com/40x40" alt="">
								<div class="colonne">
									<p>Je trouve cette recette très très bien, c'est vraiment génial de pouvoir partager un tel savoir.</p>
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
	</body>
</html>
