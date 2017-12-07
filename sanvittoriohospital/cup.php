<!DOCTYPE html>
<html>
<title>CUP - SANVITTORIOHOSPITAL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link rel="stylesheet" href="cssw3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

	<div class="w3-top">
		<div class="w3-bar w3-red w3-card w3-left-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
			<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">HOME</a>
			<a href="cup.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">CUP</a>
			<a href="ris.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">RIS</a>
		</div>

		<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
			<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
		</div>
	</div>

	<header class="w3-container w3-red w3-center" style="padding:128px 16px">
		<h1 class="w3-margin w3-jumbo">Benvenuto nella sezione CUP!</h1>
		<p class="w3-xlarge">SANVITTORIOHOSPITAL.NET</p>
	</header>


	<h5 class="w3-padding-32 w3-center">COME PRENOTARE</h5>
	<p class="w3-large w3-justify">Prenota visite specialistiche e prestazioni diagnostiche

		Il CUP
		La prima visita specialistica o le prestazioni diagnostiche (TAC, risonanze magnetiche, esami cardiologici, ecc.) e del laboratorio d'analisi possono essere prenotate sulla base dell'impegnativa del medico di base tramite numero verde del Centro Unico di Prenotazione: <br>
		<h5 class="w3-center w3-xlarge">070474747</h5> 

		<p class="w3-large w3-justify">Prenotazioni direttamente in reparto
			Alcune prestazioni specialistiche devono essere prenotate direttamente presso le Unità operative che le effettuano secondo le modalità indicate nelle loro pagine Web (nella sezione I Reparti).

			Le fasce orarie del Laboratorio d'analisi
			All'atto del pagamento del ticket per le prestazioni del laboratorio di analisi (che può essere eseguito anche nei giorni precedenti) verrà indicata al paziente la fascia oraria (della durata di mezz'ora) in cui sarà assicurato il prelievo. I ritardatari potranno ugualmente ricevere la prestazione ma dopo gli utenti in regola con l'orario assegnato.

			Le prenotazioni on line 
			Tutti gli utenti che risultano regolarmente iscritti al Servizio Sanitario possono prenotare anche on line un set di prestazioni specialistiche ambulatoriali presso tutte le Strutture della Azienda Ospedaliera San Vittorio Hospital (compresa la visita specialistica con i medici che esercitano l'attività libero professionale intramoenia).

		Il percorso di prenotazione è articolato in tre passaggi fondamentali:</p><br>
	</p>

	<h5 class="w3-center">-Scelta prestazione e data prenotazione.<br>
		-Riconoscimento assistito.<br>
		-Prenotazione prestazione.<br><br>
	</h5>
	<p class="w3-large w3-justify">

		Il numero massimo delle prestazioni prenotabili via Web per ogni ricetta (che devono appartenere alla stessa branca e avere, eventualmente, la stessa esenzione) è 8.
		Il ticket relativo alla prenotazione deve essere pagato entro 4 giorni dalla data di prenotazione, pena la cancellazione automatica della stessa.
	</p>
	<!-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">ACCEDI</button> -->
	


	<p class="w3-xlarge w3-padding-large w3-center">Compila i campi per prenotare il tuo esame!</p>

	<div class="w3-large w3-padding-large w3-center">
		<form action="/action_page.php" target="_blank">
			<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="Nome" required name="Name"></p>
			<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="Cognome" required name="Cognome"></p>

			<p class="">
				<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center w3-large" type="radio" name="gender" value="male">Maschio<br>
					<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center w3-large" type="radio" name="gender" value="female">Femmina<br>
						<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center w3-large" type="radio" name="gender" value="other">Altro<br>
						</p>

						<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="Email" required name="Email"></p>
						<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="Citta" required name="Citta"></p>
						<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="Stato" required name="Stato"></p>
						<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="CAP" required name="CAP"></p>
						<p align="center"><input class="w3-input w3-padding-16 w3-border w3-center" type="text" placeholder="Motivo Dimissione" required name="Motivodimissione"></p>
						<p align="center"><button onclick="window.location.href='action_page.php'" class="w3-button w3-black w3-padding-large">Prenota!</button></p>

					</form>
				</div>

				<div class="w3-container w3-black w3-center w3-opacity w3-padding-16">
					<h1 class="w3-margin w3-xlarge">SANVITTORIOHOSPITAL.NET</h1>
				</div>

				<footer class="w3-container w3-padding-16 w3-center w3-opacity">  
					<div class="w3-xlarge w3-padding-32">
						<i class="fa fa-facebook-official w3-hover-opacity"></i>
						<i class="fa fa-instagram w3-hover-opacity"></i>
						<i class="fa fa-snapchat w3-hover-opacity"></i>
						<i class="fa fa-pinterest-p w3-hover-opacity"></i>
						<i class="fa fa-twitter w3-hover-opacity"></i>
						<i class="fa fa-linkedin w3-hover-opacity"></i>
					</div>

				</footer>

			</body>
			</html>
