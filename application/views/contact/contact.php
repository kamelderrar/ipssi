<div class="container">
<h1>Nous contacter</h1>

<h3>Notre équipe se tient à votre disposition pour tout renseignement,<br />du lundi au vendredi de 8h45 à 12h30 et de 13h45 à 18h.</h3>
<div class="row">
<?php echo validation_errors(); ?>
<?
	 $attributes = array("class" => "form-horizontal col-lg-6");
            echo form_open(current_url(), $attributes); 
?>

	<?php
		echo "<div class=\"form-group\">"
	        . form_label('Nom: ', 'lastname') .
	        "<div class=\"input-group col-lg-12\">"
	          . form_input(['name' => 'lastname', 'id' => 'lastname', 'class' => 'form-control', 'value' => set_value('lastname')]) .
	      	"</div>
	      	</div>";

		echo "<div class=\"form-group\">"
	        . form_label('Prénom: ', 'firstname') .
	        "<div class=\"input-group col-lg-12\">"
	          . form_input(['name' => 'firstname', 'id' => 'firstname', 'class' => 'form-control', 'value' => set_value('firstname')]) .
	      	"</div>
	      	</div>";

		echo "<div class=\"form-group\">"
	        . form_label('Email: ', 'email').
	        "<div class=\"input-group col-lg-12\">"
	        . form_input(['name' => 'email', 'id' => 'email', 'class' => 'form-control', 'value' => set_value('email')]) .
	      	"</div>
	      	</div>";	

		$options = array(
			                 'option1'  => 'Choisissez',
			                 'option2'    => 'Je ne trouve pas l\'information que je cherche',
			                 'option3'   => 'Je souhaiterais plus d\'informations sur ...',
			                 'option4' => 'Suggestions',
			            );

		echo "<div class=\"form-group\">"
	        .form_label('Objet de votre demande : ', 'object')."<br>"
	        .form_dropdown('obj_demande', $options, 'option1', 'class = "form-control col-lg-12"'). "
	        </div>";

		echo "<div class=\"form-group\">"
	        .form_label('Message: ', 'message').
	        "<div class=\"input-group col-lg-12\">
	        <textarea name='message'id='message' class='form-control' rows='5'>" . set_value("message") . "</textarea>
	      	</div>
	      	</div>";

		if ($show_spam_protection) {
		echo "<tr>
			<td>" . form_label('Spam protection - : ' . $spam_question, 'spam_protection'). "</td>
			<td>" . form_input('spam_protection', set_value('spam_protection')) . "</td>
			</tr>";
		}
		echo "<div>
			".form_submit('submit', 'Envoyer','class="btn btn-info pull-right"') . "
			</div>";
	?>

<?
	echo form_close();
?>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
    <address>
    	<h2>Groupe ip-formation</h2>
    	<div id="gmapcontact">
    		<div id="gmap-paris" class="gmap-cadre">
    			<strong>École ipssi <span>Paris</span> :</strong>
    			<div id="map-paris">

    			</div>
    			<p>25 rue Claude Tillier (2ème étage)<br />
    				75012 Paris<br />
    				métro Nation - Reuilly Diderot<br />
    				Tél : 01 55 43 26 65<br />
    				Fax : 01 55 43 26 64</p>
    			</div>
    			<div id="gmap-Lyon" class="gmap-cadre">
    				<strong>École ipssi <span>Lyon</span> :</strong>
    				<div id="map-lyon">

    				</div>
    				<p>6, Place Charles Hernu<br />
    					69100 Villeurbanne<br />
    					métro Charpennes - Charles HERNU<br />
    					Tél : 0811 692 888<br />
    					Fax : 01 55 43 26 64</p>
    				</div>
    				<div id="gmap-Brest" class="gmap-cadre">
    					<strong>École ipssi <span>Brest</span> :</strong>
    					<div id="map-brest">

    					</div>
    					<p>1 Bis, rue Bossuet
    						<br />29200 Brest<br />
    						07 81 26 13 40</p>
    					</div>
    				</div>

    </address>
  </div>
</div></div>
