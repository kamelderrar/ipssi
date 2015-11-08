<h1>Nous contacter</h1>

<h3>Notre équipe se tient à votre disposition pour tout renseignement,<br />du lundi au vendredi de 8h45 à 12h30 et de 13h45 à 18h.</h3>
<div class="row">
  <form role="form" action="" method="post" >
    <div class="col-lg-6">
      <div class="form-group">
        <label for="lastname">Nom</label>
        <div class="input-group col-lg-12">
          <input type="text" class="form-control " name="lastname" id="lastname" placeholder="Enter Name" required>
      </div>
      </div>
      <div class="form-group">
        <label for="firstname">Prénom</label>
        <div class="input-group col-lg-12">
          <input type="text" class="form-control " name="firstname" id="firstname" placeholder="Enter Name" required>
      </div>
      </div>      
      <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group col-lg-12">
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required  >
      </div>
      </div>
	<div class="form-group">
	  <label class="control-label" for="object">Objet de votre demande :</label>
	    <select id="object" name="object" class="form-control col-lg-12">
	      <option value="1">Choisissez</option>
		  <option value="2">Je ne trouve pas l'information que je cherche</option>
		  <option value="3">Je souhaiterais plus d'informations sur ...</option>
		  <option value="4">Suggestions</option>
	    </select>
	</div>      
      <div class="form-group">
        <label for="message">Message</label>
        <div class="input-group col-lg-12">
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
      </div>
      </div>
      <input type="submit" name="submit" id="submit" value="Envoyer" class="btn btn-info pull-right">
    </div>
  </form>
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
</div>
            
 <script type="text/javascript">
                        $( document ).ready(function() {
                            $("#map-paris").gMap(
                                {
                                latitude:               48.848593,
                                longitude:              2.388469,
                                zoom:                   15,
                                markers:                [{latitude: 48.848593, longitude: 2.388469, html: "ipssi, Paris"}],
                                controls:               ["GSmallMapControl", "GMapTypeControl"],
                                scrollwheel:            false,
                                maptype:                G_NORMAL_MAP,

                                    }
                            );
                            $("#map-lyon").gMap(
                                {
                                latitude:               45.77052,
                                longitude:              4.863406,
                                zoom:                   17,
                                markers:                [{latitude: 45.77052, longitude: 4.863406, html: "ipssi, Lyon"}],
                                controls:               ["GSmallMapControl", "GMapTypeControl"],
                                scrollwheel:            false,
                                maptype:                G_NORMAL_MAP,

                                    }
                            );


                             $("#map-brest").gMap(
                                {
                                latitude:               48.398459,
                                longitude:              -4.489892,
                                zoom:                   17,
                                markers:                [{latitude: 48.398459, longitude: -4.489892, html: "ipssi, Brest"}],
                                controls:               ["GSmallMapControl", "GMapTypeControl"],
                                scrollwheel:            false,
                                maptype:                G_NORMAL_MAP,

                                    }
                            );


                        });
                    </script>
