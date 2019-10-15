<?php
/*
Plugin Name: Flow
Plugin URI: http://florentdelisle.referentnumerique-insarouen.fr/
Description: Ajout de mention avec shortcode
Author: Florent Delisle
Version: 1.0
Author URI: http://florentdelisle.referentnumerique-insarouen.fr/
*/

function flow() {
	$mention = "
		<div class='panel-mention' style='font-family: arial; ; fontsize: 0.7rem' >
		<hr align='center' style='background-color: black; max-width: 70rem; height: 1px'>
		<br><p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <span class='referent' style='font-weight: bold; color:black'>Référent.e Numérique Entreprise</span> prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <span class='certification' style='color:#a61c00'>3 certifications.</span></p><p>Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins. La formation est menée conjointement par :</p>
		<ol>
			<li>l'<a href='https://www.insa-rouen.fr/'>INSA</a></li>
			<li>le <a href='https://www.cesi.fr/'>CESI</a></li>
			<li><a href='https://simplonline.co/'>Simplon.co.</a></li>
		</ol>
		<br>
		<hr align='center' style='background-color: black; max-width: 70rem; height: 1px'>
		</div>";


return $mention;
}
{
add_shortcode('mention', 'flow');
}