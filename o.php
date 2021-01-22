<!DOCTYPE html>
<html lang="fr">
<head>	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	
.body-2 {
    text-align: center;
    background: url("images/background/background-3.jpg")  fixed no-repeat top left;
    background-position: top; 
    margin-top: -1%;
    margin-bottom: -1%;
}
#services {
    text-align: center;
    font-size: 2em;
    padding-top: 3%;
    margin-bottom: 4%;
}
.table-2 {
    border-collapse: collapse;
    margin: auto;
    padding-bottom: 5%;
    width: 85%;
    background-color: rgb(11,151,168);
}
#hide-1, #hide-2, #hide-3, #hide-4 {
	display: none;
} 
.ligne-1, .ligne-2, .ligne-3, .ligne-4 {
    border: groove 3px black;
    margin: auto;
    padding: 10px 10px 10px 10px;
    font-size: x-large;
}

#img-1, #img-2, #img-3, #img-4 {
    float: center;
    max-width: 500px;
    max-height: 500px;
}

</style>
<body>
	
<div class="body-2"> 
	<h2 id="services"><em>Nos services au meilleur rapport qualit&eacute;/prix</em></h2>

	<table class="table-2">
		<tr class="colonne-1">
			<th class="ligne-1">Chauffeur priv&eacute; <br>  <br>
				<img src="images/services/vtc-1.jpg" alt="photo vtc" id="img-1">
				<span id="hide-1">Nous mettons à votre disposition un v&eacute;hicule avec son chauffeur priv&eacute; pour tous types de d&eacute;placements.</span>
			</th>
			<th class="ligne-2">Transfert vers les a&eacute;roports <br> <br>
				<img src="images/services/avion-1.jpg" alt="photo avion" id="img-2">
				<span id="hide-2">Nous vous emmenons aux diff&eacute;rents a&eacute;roports d'Île-de-France tel qu'Orly ou encore l'a&eacute;roport de Beauvais, et ce à un prix adapt&eacute; à vos besoins.</span>
			</th>
		</tr>

		<tr class="colonne-2">
			<th class="ligne-3">Transport en groupe <br>  <br>
				<img src="images/services/voiture.jpg" alt="voiture spacieuse" id="img-3">
			<span id="hide-3">Grâce au grand v&eacute;hicule que nous avons, nous pouvons facilement vous permettre de vous d&eacute;placer à plusieurs sans problème.</span>
			</th>
			<th class="ligne-4">Service VIP <br> <br>
				<img src="images/services/vip-1.jpg" alt="VIP" id="img-4">
				<span id="hide-4">Nous restons à votre disposition toute une journ&eacute;e, ou selon vos besoins au meilleur prix.</span>
			</th>
		</tr>
	</table>
	<script type="text/javascript">
		const img1 = document.getElementById('img-1');
		const hide1 =document.getElementById('hide-1');

		const img2 = document.getElementById('img-2');
		const hide2 =document.getElementById('hide-2');		

		const img3 = document.getElementById('img-3');
		const hide3 =document.getElementById('hide-3');

		const img4 = document.getElementById('img-4');
		const hide4 =document.getElementById('hide-4');

		img1.onmouseover = function() {this.style.display = 'none'; hide1.style.display = 'inline'};
		img1.onmouseout = function() {this.style.display = 'inline'; hide1.style.display = 'none'};

		img2.onmouseover = function() {this.style.display = 'none'; hide2.style.display = 'inline'};
		img2.onmouseout = function() {this.style.display = 'inline'; hide2.style.display = 'none'};

		img3.onmouseover = function() {this.style.display = 'none'; hide3.style.display = 'inline'};
		img3.onmouseout = function() {this.style.display = 'inline'; hide3.style.display = 'none'};

		img4.onmouseover = function() {this.style.display = 'none'; hide4.style.display = 'inline'};
		img4.onmouseout = function() {this.style.display = 'inline'; hide4.style.display = 'none'};

	</script>
</body>
</html>