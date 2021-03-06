<?php include("header.php"); ?>

<!-- add css specific for this page here: jquery plugin css, home css, etc -->
<link rel="stylesheet" type="text/css" href="js/datatables.min.css"/>
<link href="css/home.min.css" rel="stylesheet">

</head>

<body>

<?php include("head.php"); ?>

<div class="main-container large-container">
<div id="layout_content">
	<div class="container">
		<div class="row">
			<div class="grid-child n-no-margin-bottom">
				<div class="box-white">
					<div class="box-header">
						<h1 class="ngc-maintitle">MysteryE Keeper's Relics</h1>
						<p class="n-smaller">Big thanks to <strong><a href="https://docs.google.com/spreadsheets/d/1f8OJIQhpycljDQ8QNDk_va1GJ1u7RVoMaNjFcHH0LKk/edit#gid=344457459" target="_blank">FFRK Community Database</a></strong> for all the informations and data!</p>
					</div><!-- .box-header -->
					<div class="form-group">
						<label><strong>Filter Realms:</strong></label>
						<div id="realms_search" class="input-wrap">
						
						</div><!-- .input-wrap -->
					</div><!-- .form-group -->
					<br />

					<a href="" class="btn btn-small btn-orange reset-all">Reset Filter</a>
					<a href="" class="btn btn-small btn-blue toggle-gl">GL Account Only</a>
					<a href="" class="btn btn-small btn-blue toggle-jp">JP Account Only</a>
					<div class="box-content">
			            <div class="table-wrapper">
							<table id="relic-table" class="table bordered striped compact" style="width: 100%;">
						        <thead>
						            <tr>
						                <th>Realms</th>
						                <th>Character</th>
						                <th>Relic Name</th>
						                <th>Relic Type</th>
						                <th>Element</th>
						                <th>Effect</th>
						                <th>GL</th>
						                <th>JP</th>
						            </tr>
						        </thead>
						        <tbody>
						        	<!-- FINAL FANTASY I -->
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Rune Axe</td>
						                <td>Chain</td>
						                <td>Dark</td>
						                <td>Dark Chain (physical). Activates Dark Chain (max 99, field +20%), twenty-two single attacks (0,36 each)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Ragnarok</td>
						                <td>Chain</td>
						                <td>Holy</td>
						                <td>Holy Chain (physical). Activates Holy Chain (max 99, field +20%), eleven single attacks (0,72 each), grants HP Stock (2000) to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Excalibur</td>
						                <td>OSB</td>
						                <td>Holy / NE</td>
						                <td>One single attack (11,44~12,93 scaling with hits taken) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Earthbreaker</td>
						                <td>OSB</td>
						                <td>Dark / NE</td>
						                <td>One single attack (11,25) capped at 99999, 12,75 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Meia</td>
						                <td>Femme Fatale</td>
						                <td>OSB</td>
						                <td>Water / NE</td>
						                <td>One single attack (37,20), 42,80 multiplier if exploiting elemental weakness, breaks damage cap	</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Matoya</td>
						                <td>Matoya's Broom</td>
						                <td>BSB</td>
						                <td>Fire / Ice / Lightning</td>
						                <td>Eight single attacks (2,00 each), ten attacks if exploiting elemental weakness, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Wol</td>
						                <td>Monk's Leathers</td>
						                <td>BSB 1</td>
						                <td>NE</td>
						                <td>Seven random attacks (1,08 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Claymore</td>
						                <td>BSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Demon Mail</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Restores HP for 100% of the user's maximum HP and grants Quick Cast when HP fall below 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Garland's Cloak</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Darkness abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Garland's Helm</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Medium Buff Dark and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Echo</td>
						                <td>Seraphic Rod</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Shell + Haste + RES Up 50% 25 secs</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Wol</td>
						                <td>Blank Blade</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Four group attacks (1,50 each), ATK and MAG -40% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Sarah</td>
						                <td>Ancient Lute</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
									
									<!-- FINAL FANTASY II -->
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Longinus</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single ranged attacks (0,86 each), grants HP Stock (6000), Darkness +30% Boost and Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Josef</td>
						                <td>Godhand</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Firion's Bandana</td>
						                <td>USB2</td>
						                <td>Holy / Ice / Fire</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Ragnarok</td>
						                <td>OSB</td>
						                <td>Holy / NE</td>
						                <td>One single attack (11,25/12,50/13,75) capped at 99999 if the user used 9/22 damaging actions</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Rune Axe</td>
						                <td>BSB</td>
						                <td>Dark</td>
						                <td>En-dark. Eight single attacks (0,82 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Rune-Graven Bow</td>
						                <td>BSB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Eight single attacks (1,88 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Emperor</td>
						                <td>Imperial Shell (II)</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Restores HP for 100% of the user's maximum HP and grants Quick Cast when HP fall below 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Guy</td>
						                <td>Viking Axe</td>
						                <td>LMR</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping an axe</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Gordon</td>
						                <td>Diamond Shield</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Defender</td>
						                <td>SSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY III -->
									<tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Rune Axe</td>
						                <td>Chain</td>
						                <td>Earth</td>
						                <td>Activates Earth Chain (max 99, field +20%), eleven single attacks (0,72 each), grants Last Stand to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
									<tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Seraphim Mace</td>
						                <td>USB 1</td>
						                <td>Holy / Water</td>
						                <td>En-holy. Ten single attacks (1,80 each), RES and MND +30% to the user for 25 seconds, grants Attach Holy and Dia Splash Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Refia</td>
						                <td>Metal Knuckles</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0,71 each), grants Attach Fire, Critical Damage +50%, Quick Cast 1 and Fire Quick Cycle to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Refia</td>
						                <td>Refia's Tunic</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Fire damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Zeus Mace</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Haste and Magical Quick Cast 3, MAG, RES and MND +30% for 25 seconds, grants EX: Sage to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Onion Blade</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>Grants Haste and Critical Chance 50%, ATK +50% for 25 seconds, grants EX: Ninja to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Eternal Staff</td>
						                <td>SSB 2</td>
						                <td>Medica</td>
						                <td>Five group attacks (2,84 each), restores HP to all allies for 40% of their maximum HP</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Empress Kharna</td>
						                <td>USB</td>
						                <td>Dark / Lightning</td>
						                <td>En-dark. Seven group attacks (2,10 each), MAG and RES +30% to all allies for 25 seconds, grants Attach Dark and Lightning Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Desch</td>
						                <td>Gladius</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Ten single attacks (1,70 each), causes Imperil Lightning 20% for 25 seconds, grants Magical Quick Cast 3 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Desch</td>
						                <td>Avenger</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Five group attacks (2,34 each), grants Haste, Attach Lightning and Burst Mode to the user	</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Staff of the Magi</td>
						                <td>BSB 1</td>
						                <td>Holy / NE / Medica</td>
						                <td>Five single attacks (2,34 each), restores HP (55) to all allies, MND +30% to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Wizard Rod</td>
						                <td>BSB 2</td>
						                <td>Holy / Water</td>
						                <td>En-holy. Eight single attacks (2,00 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Lordly Robes</td>
						                <td>LMR</td>
						                <td></td>
						                <td>MND +1% for each hit dealt with White Magic abilities, up to +25%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>White Mage Robe</td>
						                <td>SSB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Physical Blink 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Aegis Shield</td>
						                <td>BSB 1</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Four group attacks (1,20 each), grants Haste, Oathsworn Espada, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Crystal Shield</td>
						                <td>BSB 2</td>
						                <td>Earth</td>
						                <td>Eight single attacks (0,84 each), grants Earth Radiant Shield: 75% to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Break Blade</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Five single attacks (1,58 each), grants Sentinel to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Darkening Cloud</td>
						                <td>SSB</td>
						                <td>Dark / Holy</td>
						                <td>En-dark. Five group attacks (2,80 each), grants Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Onion Cape</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Grants Instant Cast 2 at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Genji Armor</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Aria</td>
						                <td>Spirit Ring</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to grant Heals +30% for 10 seconds to the user after using a WHT ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY IV -->
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Longinus</td>
						                <td>USB 1</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Ten single ranged jump attacks (0,71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Lightning and Jump Instant Cast to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Yang</td>
						                <td>Dragon Claw</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Force Shield</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>DEF and RES +200% for 25 seconds, grants EX: Lunarian to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rosa</td>
						                <td>Fairy's Bow</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants HP Stock (2000) and Magical Blink 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Mirage Rod</td>
						                <td>USB</td>
						                <td>Lightning / Ice</td>
						                <td>En-lightning. Ten single attacks (1,70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Lightning and Black Magic Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Barbariccia</td>
						                <td>Barbariccia's Dagger</td>
						                <td>USB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single attacks (1,70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Wind and Fair Wind Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Excalibur</td>
						                <td>BSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Abel's Lance</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Four group ranged jump attacks (1,25 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>DK Cecil</td>
						                <td>Helter Skelter</td>
						                <td>BSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edward</td>
						                <td>Lamia Harp</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Imperil Holy (2). Causes Imperil Holy 20% for 25 seconds, ATK +50% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Sleipnir's Tail</td>
						                <td>BSB 1</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Five group attacks (2,37 each), minimum damage 1100, grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Minerva Bustier</td>
						                <td>BSB 2</td>
						                <td>Water / Holy</td>
						                <td>Imperil Water (2). Six group attacks (1,99 each), minimum damage 1100, causes Imperil Water 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Zeromus Shard</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>Seven single attacks (2,49 each), MAG +30% to the user for 25 seconds, grants Haste, Sentinel and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Chocobo Suit</td>
						                <td>BSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Eight single attacks (2,00 each), ten attacks if exploiting elemental weakness, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Porom</td>
						                <td>Feathered Cap</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Twin Star for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Triton's Dagger</td>
						                <td>SSB 1</td>
						                <td>Lightning / NE</td>
						                <td>Eight single attacks (2,20 each)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Asura Rod</td>
						                <td>SSB 2</td>
						                <td>Holy / Fire / Lightning</td>
						                <td>Eight group attacks (1,69 each), MAG and RES -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Tellah</td>
						                <td>Magus Robe</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat buffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edward</td>
						                <td>Requiem Harp</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat buffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Porom</td>
						                <td>Tabby Suit</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edward</td>
						                <td>Soul Harp</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Eight single attacks (2,00 each), ten attacks if exploiting elemental weakness, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Cid (IV)</td>
						                <td>Thor's Hammer</td>
						                <td>SSB 2</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Five random ranged attacks (1,56 each), causes Imperil Lightning 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Golbez's Cloak</td>
						                <td>SSB</td>
						                <td>Dark</td>
						                <td>En-dark. Six group attacks (1,57 each), grants Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edge</td>
						                <td>Edge's Cloak</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to grant Physical Blink 1 to the user after using a Ninja ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Golbez's Bascinet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Hypno Crown</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Barbariccia</td>
						                <td>Barbariccia's Guise</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Rydia's Guise</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Summoning ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Diamond Armlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Caesar's Plate</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>DK Cecil</td>
						                <td>Demon Shield</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Stoneskin: 100% and Darkness Rank Boost</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Ceodore</td>
						                <td>Genji Helm</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY V -->
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Chicken Knife</td>
						                <td>USB 1</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Ten single attacks (0,70 each), grants EX: Spellblade Barrage to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Zwill Crossblade</td>
						                <td>USB 2</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Ten single attacks (0,69 each), grants EX: Power of the Crystals to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Exdeath</td>
						                <td>Whale Whisker</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>Six group attacks (2,32 each), MAG and MND +30% to all allies for 25 seconds, grants High Runic to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Fairy Bow</td>
						                <td>USB 2</td>
						                <td>Wind / NE</td>
						                <td>Imperil Wind (2). Nine random ranged attacks (0,82 each), causes Imperil Wind 20% for 25 seconds, ATK, MAG, and MND -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gilgamesh</td>
						                <td>Ama-no-Murakumo</td>
						                <td>USB 2</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0,71 each), grants Attach Fire and EX: No Discussion to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Apocalypse</td>
						                <td>OSB</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Breaks damage cap, ranged attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gilgamesh</td>
						                <td>Gilgamesh's Naginata</td>
						                <td>OSB</td>
						                <td>NE</td>
						                <td>Breaks damage cap, 13,20 multiplier if all allies are alive</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Ragnarok</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Six single attacks (1,33 each), grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Grand Helm</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>En-water. Eight single attacks (0,83 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gogo</td>
						                <td>Mimic's Rod</td>
						                <td>BSB</td>
						                <td>Water / NE</td>
						                <td>En-water. Six group attacks (1,99 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Rune Staff</td>
						                <td>BSB 2</td>
						                <td>Holy / Medica</td>
						                <td>Restores HP (85), damages undeads, grants Minor Resist Ice, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Perseus Bow</td>
						                <td>BSB 2</td>
						                <td>Wind / Fire</td>
						                <td>Eight single ranged attacks (0,65 each), ATK and DEF -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Galuf</td>
						                <td>Murasame</td>
						                <td>BSB 2</td>
						                <td>Earth / Fire</td>
						                <td>Imperil Earth (2). Eight single attacks (0,83 each), causes Imperil Earth 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Xezat</td>
						                <td>Xezat's Helm</td>
						                <td>BSB</td>
						                <td>Ice / Lightning</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Faris' Bracers</td>
						                <td>SSB 2</td>
						                <td>Wind / Lightning</td>
						                <td>Imperil Wind (2). Four group ranged attacks (1,46 each), causes Imperil Wind 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Exdeath</td>
						                <td>Enuo's Scourge</td>
						                <td>SSB 2</td>
						                <td>Dark / NE</td>
						                <td>Six single attacks (2,93 each), MAG and RES +30% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Excalibur</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Five single attacks (1,58 each), DEF +50% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Krile</td>
						                <td>Krile's Dress</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Faris's Epaulet</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases damage dealt by 3/6/9/12/20% if 1/2/3/4/5 of the target's stats are lowered</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Xezat</td>
						                <td>Xezat's Gauntlets</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY VI -->
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Da Vinci Brush</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Stoneskin: 30% and Instant Cast 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Avenger</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0,71 each), ATK and RES +30% to the user for 25 seconds, grants Attach Fire, Instant Cast 1 and Phoenix Attack Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Shadow</td>
						                <td>Kagenui</td>
						                <td>USB</td>
						                <td>Dark / NE</td>
						                <td>Ten random attacks (0,66 each), grants Abandoned Past to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Platinum Dagger</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Ten random attacks (0,67 each), causes Imperil Fire 20% for 25 seconds, grants Flame Hunt Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Scissor Fangs</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (11,25) capped at 99999, 12,75 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Blood Sword</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (40,00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Dancing Mad</td>
						                <td>BSB 1</td>
						                <td>Poison / NE</td>
						                <td>En-poison. Eight random attacks (1,88 each), grants Haste, Attach Poison and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Black Quena</td>
						                <td>BSB 2</td>
						                <td>Dark / Poison</td>
						                <td>En-dark. Eight random attacks (1,88 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Lightbringer</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>En-holy. ATK and MAG +30% to all allies for 25 seconds, grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Edgar</td>
						                <td>Edgar's Cloak</td>
						                <td>BSB</td>
						                <td>Poison / NE</td>
						                <td>En-poison. Six group attacks (0,80 each), causes Poison (100%), grants Haste, Attach Poison and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Chocobo Brush</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Leo</td>
						                <td>Imperial Highblade</td>
						                <td>SSB</td>
						                <td>Holy / NE</td>
						                <td>Imperil Holy (2). Six group ranged attacks (convergent 1,29 each), causes Imperil Holy 20% for 25 seconds	</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gogo</td>
						                <td>Mimic Blade</td>
						                <td>SSB</td>
						                <td>Medica / Esuna</td>
						                <td>Seven group hybrid attacks (0,83 or 2,00 each), restores HP to all allies for 40% of their maximum HP, removes negative effects to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Orichalcum</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Twenty single ranged attacks (0,55 each), followed by one single ranged attack (8,00) that breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Locke's Sash</td>
						                <td>BSB 2</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Eight single ranged attacks (0,83 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Mog</td>
						                <td>Faerie Tail</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Grants Haste, MAG and MND +30% for 25 seconds, grants Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Celes' Cloak</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Spellblade abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY VII -->
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Conformer</td>
						                <td>AOSB</td>
						                <td>Water</td>
						                <td>Twenty single ranged attacks (0,55 each), followed by one single ranged attack (8,00) that breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Force Stealer</td>
						                <td>USB 1</td>
						                <td>Wind / Dark</td>
						                <td>Five single attacks (1,50 each), grants Auto Critical and EX: Soldier to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Cloud's Gloves</td>
						                <td>USB 2</td>
						                <td>Wind</td>
						                <td>En-wind. Fifteen single attacks (0,48 each), grants Attach Wind and EX: True Self to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Premium Heart</td>
						                <td>USB 1</td>
						                <td>Earth / NE</td>
						                <td>Ten single attacks (0,70 each), grants Haste, Radiant Shield: 100% and High Regen to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Tifa's Gloves</td>
						                <td>USB 2</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (0,71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Earth and Monk Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Oritsuru</td>
						                <td>USB 2</td>
						                <td>Water / NE</td>
						                <td>En-water. Ten single ranged attacks (0,71 each), grants Attach Water, Physical Blink 1 and Torrent Blade Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cid</td>
						                <td>Dragoon Lance</td>
						                <td>USB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single ranged jump attacks (0,71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Wind and Jump Instant Cast to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Healing Rod</td>
						                <td>USB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Last Stand and Physical High Quick Cast 3</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>God's Hand</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>Breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Chirijiraden</td>
						                <td>OSB</td>
						                <td>Dark / Fire</td>
						                <td>Breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Zack</td>
						                <td>Rune Blade</td>
						                <td>BSB</td>
						                <td>Wind / Earth</td>
						                <td>Imperil Wind (2). Eight random ranged attacks (0,96 each), causes Imperil Wind 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cait Sith</td>
						                <td>Blue Megaphone</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and DEF +30% for 25 seconds, grants Critical Chance 50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Spiral Shuriken</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>Imperil Water (2). Six group ranged attacks (0,83 each), causes Imperil Water 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Rufus</td>
						                <td>Riot Riffle</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>Imperil Dark (2). Eight group ranged attacks (convergent 0,97 each), causes Imperil Dark 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Platinum Barette</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants High Regen, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Kaiser's Knuckles</td>
						                <td>BSB 2</td>
						                <td>Earth / NE</td>
						                <td>Imperil Earth (2). Eight single attacks (0,96 each), causes Imperil Earth 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Reno</td>
						                <td>Shinra Bombshell</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Six group ranged attacks (0,82 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Wizer Rod</td>
						                <td>BSB 1</td>
						                <td>Holy / Medica</td>
						                <td>Five group attacks (1,90 each), restores HP (85) to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Barret</td>
						                <td>A . M Cannon</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Six group ranged attacks (0,98 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Angeal</td>
						                <td>Angeal's Gloves</td>
						                <td>BSB</td>
						                <td>Holy / Wind</td>
						                <td>Eight single attacks (0,83 each), grants Critical Chance 50% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Aerith's Jacket</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Rufus</td>
						                <td>Rufus' Jacket</td>
						                <td>LMR</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Dark attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Seraph Comb</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Black Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Mystile</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Physical Blink 2, Physical Blink Stacking 2 and Ninja Rank Boost</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Shelke</td>
						                <td>Shelke's Gloves</td>
						                <td>SSB</td>
						                <td>Esuna</td>
						                <td>Removes positive effects, removes negative effects to all allies, grants High Regen to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Yoshiyuki</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Four single ranged attacks (1,95 each), causes Sap (10%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Master Fist</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Four single attacks (1,95 each), ATK +50% to the user for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Reno</td>
						                <td>Light Rod</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Three group attacks (4,80 each), causes Silence (100%) and Sleep (100%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cait Sith</td>
						                <td>Battle Trumpet</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Eight single attacks (2,23 each), grants Critical Chance 50% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Crystal Cross</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Three group ranged attacks (2,00 each), grants Physical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Crystal Comb</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>ATK, DEF and MND +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cid</td>
						                <td>Cid's Goggles</td>
						                <td>SSB 1</td>
						                <td>Wind</td>
						                <td>Twelve random attacks (0,65 each), grants No Air Time 3 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Steady Light</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Wind attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Yuffie's Guise</td>
						                <td></td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cid</td>
						                <td>Cid's Jacket</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY VIII -->
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Conformer</td>
						                <td>Chain</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Wing Edge</td>
						                <td>AOSB</td>
						                <td>Wind</td>
						                <td>Twenty single attacks (1,82 each), followed by one single attack (26,50) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Twin Lance +</td>
						                <td>USB 4</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Cutlass</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (1,70 each), grants Attach Ice and EX: Chosen Sorceress the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Moon Ring</td>
						                <td>OSB</td>
						                <td>Wind / NE</td>
						                <td>Breaks damage cap, 42,50 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Twin Viper</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>Breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Doom Mace</td>
						                <td>OSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Shooting Star</td>
						                <td>BSB 1</td>
						                <td>Ice / Earth</td>
						                <td>Eight group attacks (1,80 each), grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Crystal Cross</td>
						                <td>BSB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight group attacks (1,80 each), grants Haste, Attach Ice and Burst Mode the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Axis Blade</td>
						                <td>BSB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single attacks (0,83 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Shin Chakram</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>Five group attacks (2,40 each), MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Irvine</td>
						                <td>Betelgeuse</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>Five group ranged attacks (1,20 each), ATK and DEF -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Fomalhaut</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Eight random ranged attacks (0,98 each), causes Imperil Lightning 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Edea</td>
						                <td>Edea's Valkyrie</td>
						                <td>BSB</td>
						                <td>Ice / Dark</td>
						                <td>En-ice. Eight single attacks (1,88 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Wing Edge</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Black Magic Rank Boost and Black Magic High Quick Cast</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Squall's Contempt</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice Stacking, Attach Ice and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Quistis</td>
						                <td>Wyvern Tail</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Protect, Shell and Stoneskin: 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Jacket</td>
						                <td>SSB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single attacks (2,14 each), grants Attach Wind to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Rinoa's Guise</td>
						                <td>SSB 2</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Five group attacks (2,82 each), grants Attach Earth to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Machine Gun</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Six group ranged attacks (1,00 each), causes Slow (100%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Quistis</td>
						                <td>Beast Killer</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Haste and Magical Quick Cast 3</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Irvine</td>
						                <td>Exeter</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Six group ranged attacks (0,98 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Wind Slash</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Lion Gloves</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Harmonia Guard</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Zell</td>
						                <td>Zell's Uniform</td>
						                <td>Glint</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY IX -->
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>The Tower</td>
						                <td>USB 2</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single attacks (0,71 each), grants Attach Wind, Thief Rank Boost and Thievery Finisher to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Judicer's Staff</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (1,71 each), MAG and RES +30% to the user for 25 seconds, grants Attach Fire and Black Magic Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Holy Rod</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Seven group attacks (2,10 each), min. 1100, MAG and MND +30% to all allies for 25 sec., grants Attach Lightning and Auto Storm's Retribution to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Kuja</td>
						                <td>Achromatic Bolero</td>
						                <td>USB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (1,70 each), grants Attach Dark and EX: Angel of Death to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Eiko</td>
						                <td>Lamia's Flute</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Last Stand and Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Marcus</td>
						                <td>Marcus's Sword</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Steiner</td>
						                <td>Excalibur II</td>
						                <td>USB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Ten single attacks (0,70 each), RES +100% to the user for 25 seconds, grants Shining Knight Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Steiner</td>
						                <td>Stoneblade</td>
						                <td>OSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Breaks damage cap, 13,00 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Black Mage Staff</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>Break damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Amarant</td>
						                <td>Avenger</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Six group ranged attacks (0,82 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>The Ogre</td>
						                <td>BSB</td>
						                <td>Wind</td>
						                <td>Imperil Wind (2). Six group ranged attacks (0,98 each), causes Imperil Wind 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Eiko</td>
						                <td>Hamelin</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Critical Chance 50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Staff of Ramuh</td>
						                <td>BSB 2</td>
						                <td></td>
						                <td>Imperil Lightning (2). Causes Imperil Lightning 20% for 25 seconds, ATK and MAG +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Gravity Rod</td>
						                <td>BSB 2</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Six group attacks (2,01 each), MAG and RES +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Marcus</td>
						                <td>Platinum Dagger</td>
						                <td>BSB</td>
						                <td>Wind / Poison</td>
						                <td>Six group attacks (1,00 each), DEF and MAG -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Kuja</td>
						                <td>Terra's Legacy</td>
						                <td>BSB 1</td>
						                <td>Dark / NE</td>
						                <td>Eight random attacks (2,20 each), causes Imperil Dark 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Wizard Rod</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Grants Haste and High Regen, RES +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Royal Gown</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>DEF and MAG +30% for 25 seconds, grants HP Stock (3000)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Mace of Zeus</td>
						                <td>SSB</td>
						                <td>Dark</td>
						                <td>Four group attacks (3,56 each)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>Zidane's Vest</td>
						                <td>SSB 2</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single attacks (0,97 each), grants Attach Wind to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY X -->
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Double Edge</td>
						                <td>Chain</td>
						                <td>Water</td>
						                <td>Water Chain (physical). Activates Water Chain (max 99, field +20%), eleven single attacks (0,72 each), grants Quick Cast 2 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Vigilante</td>
						                <td>AOSB</td>
						                <td>Water</td>
						                <td>Twenty single ranged attacks (0,55 each), followed by one single ranged attack (8,00) that breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Kimahri</td>
						                <td>Bright Armlet</td>
						                <td>USB</td>
						                <td></td>
						                <td>ATK, MAG and RES +30% for 25 seconds, grants Water Radiant Shield: 75%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
									<tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Water Ball</td>
						                <td>USB</td>
						                <td>Water / NE</td>
						                <td>Imperil Water (2). Nine random ranged attacks (0,82 each), causes Imperil Water 20% for 25 seconds, ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Spiritual Blade</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>Eight single attacks (0,90 each), ATK, DEF and RES -50% for 25 seconds, grants Sentinel to the user for 25 seconds, grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Wind Rod</td>
						                <td>USB 2</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>Blitz King</td>
						                <td>OSB</td>
						                <td>Dark / Fire</td>
						                <td>One single ranged attack (11,05) capped at 99999, multiplier increased by 0,0013 for every SB point</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Rikku's Dagger</td>
						                <td>BSB 1</td>
						                <td>Water</td>
						                <td>Imperil Water (2). Ten random ranged attacks (0,77 each), causes Imperil Water 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Paine's Guise</td>
						                <td>BSB 1</td>
						                <td>Water / Earth / Wind</td>
						                <td>Six group attacks (0,90 each), damage increases with Spellblade abilities used, removes positive effects, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Warblade</td>
						                <td>BSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Glorious Armguard</td>
						                <td>BSB</td>
						                <td>NE</td>
						                <td>Twelve random ranged attacks (0,63 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Seymour</td>
						                <td>Guado Wedding Robes</td>
						                <td>BSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (1,88 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Twilight Steel</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>Ten single ranged attacks (0,72 each), ATK and DEF +30% to the user for 25 seconds, grants Haste, Instant Cast 1 and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>The Blitz</td>
						                <td>BSB 1</td>
						                <td>Dark</td>
						                <td>En-dark. Eight random attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Tiny Bee</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Ten single attacks (1,80 each), grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Sword of Paine</td>
						                <td>SSB</td>
						                <td>Earth / Wind</td>
						                <td>Seven random attacks (1,10 each), grants Haste to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						            	<td>FF10</td>
						            	<td>Auron</td>
						            	<td>Riot Blade</td>
						            	<td>SSB</td>
						            	<td></td>
						            	<td>Five single ranged attacks (1,56 each), ATK and DEF -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Thief Costume</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants Instant Cast 2 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Kimahri</td>
						                <td>Twin Lance</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Five single attacks (1,56 each), grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Cerulean Armguard</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Tidus's Armguards</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-water. Grants Attach Water at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Bridal Gown</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Peaceful Slumber</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY XI -->
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Dark Staff</td>
						                <td>AOSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Jadagna</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Haste and Instant Cast 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Federation Signet Staff</td>
						                <td>USB</td>
						                <td>Lightning / Ice / Fire</td>
						                <td>En-lightning. Ten single attacks (1,70 each), grants Attach Lightning and EX: Twinstrike to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Kiku-Ichimonji</td>
						                <td>OSB</td>
						                <td>Ice / NE</td>
						                <td>One single attack (11,25) capped at 99999, 12,75 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Aristocrat's Crown</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (55), MAG and MND +30% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Tactician Magician's Cuffs</td>
						                <td>BSB</td>
						                <td>Lightning / Fire / Ice</td>
						                <td>En-lightning. Six group attacks (1,94 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Prishe</td>
						                <td>Sainti</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Eight single attacks (0,93 each), grants Haste, Monk Quick Cast 5 and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Soboro Sukehiro</td>
						                <td>BSB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single attacks (0,78 each), grants Haste, Meikyo Shisui, Attach Ice and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Lion</td>
						                <td>Gaia Doublet</td>
						                <td>SSB</td>
						                <td></td>
						                <td>5/6/7 group attacks (0,99 each) at 174/205 SPD, DEF and RES -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Earth Doublet</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Grants Astra and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Myochin Domaru</td>
						                <td>LMR</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Samurai ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Alkyoneus's Bracelet</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY XII -->
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Tournesol</td>
						                <td>AOSB</td>
						                <td>Lightning</td>
						                <td>Three single attacks (26,50 each), breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Ragnarok</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Ten single attacks (1,70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Lightning and Lightning Sigil Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Larsa</td>
						                <td>Carmagnole</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), removes negative effects, grants Astra and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Scorpion Tail</td>
						                <td>USB 1</td>
						                <td>Holy / Fire</td>
						                <td>En-holy. Ten single ranged attacks (0,71 each), DEF +100% to the user for 25 seconds, grants Attach Holy and Knight Rank Boost to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Shikari Nagasa</td>
						                <td>OSB</td>
						                <td>NE</td>
						                <td>One single attack (11,00), 11,50/12,00/12,50/13,00/14,00 multiplier if 1/2/3/4/5 of the target's stats are lowered, breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Balthier</td>
						                <td>Arcturus</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single ranged attack (12,00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Ashe's Defiance</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Eight single attacks (2,20 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Balthier</td>
						                <td>Spica</td>
						                <td>BSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Orichalcum Dirk</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Five single ranged attacks (1,52 each), DEF and MAG -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Holy Lance</td>
						                <td>BSB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Six group ranged attacks (0,82 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Aegis Shield</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning Stacking, Attach Lightning and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Gabranth's Helm</td>
						                <td>SSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Five group attacks (0,99 each), grants Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Larsa</td>
						                <td>Cloud Staff</td>
						                <td>SSB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Vaan's Vest</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vayne</td>
						                <td>Novus Leathers</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Penelo</td>
						                <td>Feathered Cap</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Ashe's Bracher</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY XIII -->
						            <tr>
						                <td>FF13</td>
						                <td>Lightning</td>
						                <td>Razor Carbine</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Ten single attacks (0,71 each), grants Attach Lightning, EX: Blinding and High Quick Cast 1 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Serah</td>
						                <td>Raging Arc</td>
						                <td>USB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (1,70 each), grants Attach Ice, EX: Farseer and High Quick Cast 1 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Simurgh</td>
						                <td>USB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (1,70 each), DEF and MAG +30% to the user for 25 seconds, grants Attach Holy and Auto Chain of Destruction to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Noel</td>
						                <td>Blazing Spirit</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>Imperil Ice (2). Ten single ranged attacks (0,66 each), ATK, MAG and RES -50% for 25 seconds, causes Imperil Ice 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Lightning</td>
						                <td>Gladius</td>
						                <td>OSB</td>
						                <td>Lightning / NE</td>
						                <td>One single attack (11,25/12,00/12,75/13,50) scaling with uses, breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Lightning</td>
						                <td>Enkindler</td>
						                <td>BSB 2</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Eight random attacks (0,96 each), causes Imperil Lightning 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Noel</td>
						                <td>Flame Fossil</td>
						                <td>BSB 1</td>
						                <td>NE</td>
						                <td>Five single ranged attacks (1,50 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Rhomphaia</td>
						                <td>BSB 1</td>
						                <td>Wind / NE</td>
						                <td>Imperil Wind (2). Four group ranged attacks (1,45 each), causes Imperil Wind 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Ninurta</td>
						                <td>BSB 1</td>
						                <td>Holy</td>
						                <td>En-holy. Four group attacks (2,98 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Hope's Gloves</td>
						                <td>BSB 2</td>
						                <td>Holy / NE</td>
						                <td>Six group attacks (convergent 2,90 each), causes Stun (100%), MAG and RES +30% to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Cid Raines</td>
						                <td>Metamorphosis Claw</td>
						                <td>BSB</td>
						                <td>Dark / Holy</td>
						                <td>Six single attacks (2,57 each), 3,31 mult. if the user has any Doom, min. 500, DEF and MAG +30% to all allies for 25 sec., grants Haste and B. M. to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Vanille</td>
						                <td>Physician's Staff</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), restores 1 consumed ability use</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Serah</td>
						                <td>Starseeker</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Five group attacks (2,84 each), causes Slow (100%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Punisher</td>
						                <td>SSB 1</td>
						                <td>Fire / Wind</td>
						                <td>Six single ranged jump attacks (1,28 each), ATK and MAG -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Nabaat</td>
						                <td>Nabaat's Finery</td>
						                <td>SSB</td>
						                <td>Dark / NE</td>
						                <td>Seven random attacks (2,51 each), ATK and MAG -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Hope's Guise</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY XIV -->
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Almandal</td>
						                <td>Chain</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Excalibur Zeta</td>
						                <td>USB</td>
						                <td></td>
						                <td>Grants Haste, ATK, MAG and RES +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Lilith Rod Zeta</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (38,00~44,00 scaling with Fire attacks used) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Curtana</td>
						                <td>BSB 1</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Eight single attacks (0,81 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Hauteclaire</td>
						                <td>BSB 2</td>
						                <td>Holy / NE</td>
						                <td>Eight single attacks (0,83 each), grants Last Stand to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Lilith Rod</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Eight single attacks (1,88 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Healer Circlet</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Stoneskin: 30%, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Thancred</td>
						                <td>Sasuke's Blade</td>
						                <td>BSB 1</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Four group ranged attacks (1,44 each), causes Imperil Fire 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Veil of Wiyu</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>One single attack (1,90), restores HP to the user for 25% of the damage dealt</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Tyrfing</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-holy. Grants HP Stock (2000), grants Attach Holy to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Gambanteinn</td>
						                <td>Glint</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Caller's Loincloth</td>
						                <td>Glint</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Six single attacks (1,25 each), grants Attach Wind Stacking and Attach Wind to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Evoker's Doublet</td>
						                <td>SSB</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants Radiant Shield: 100%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Stardust Rod</td>
						                <td>SSB</td>
						                <td>Ice</td>
						                <td>En-ice. Five random attacks (3,54 each), grants Attach Ice to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Haurchefant</td>
						                <td>Fortemps Haubergeon</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to reduce damage taken by 30% when equipping a shield</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Ironworks Healing Robe</td>
						                <td>LMR</td>
						                <td></td>
						                <td>30% chance to remove negative effects to the target after using a single-target White Magic ability that restores HP on an ally</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Caster's Doublet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Thancred</td>
						                <td>Hofuds</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY XV -->
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Calamity</td>
						                <td>Chain</td>
						                <td></td>
						                <td>Lightning chain (physical). Activates Lightning Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Sword of the Wise</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Ten single attacks (0,74 each), grants EX: Royal Might and Stoneskin: 100% to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Blade of Mystic</td>
						                <td>USB 2</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Iris</td>
						                <td>Cactuar Plushie</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), removes KO (40% HP), grants Haste, grants High Quick Cast to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Sword of the Father</td>
						                <td>OSB</td>
						                <td>NE</td>
						                <td>One single attack (15,00) capped at 99999, grants Armiger Mode and Stoneskin: 30% to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Aranea</td>
						                <td>Stoss Spear</td>
						                <td>OSB</td>
						                <td>Lightning / Dark</td>
						                <td>Breaks damage cap, 12,75 multiplier if exploiting elemental weakness, ranged jump attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Blade of Brennaere</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>Breaks damage cap, multiplier increases with hits taken</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>War Sword</td>
						                <td>BSB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Six group attacks (0,83 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Bioblaster</td>
						                <td>BSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Ignis</td>
						                <td>Mythril Lance</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and RES +30% for 25 seconds, grants Haste, grants Ingredients +2 and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Aranea</td>
						                <td>Dragon Mail</td>
						                <td>SSB</td>
						                <td>Lightning / Dark</td>
						                <td>Six single ranged jump attacks (1,23 each), grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Airstep Sword</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Six single attacks (1,27 each), grants Instant Cast 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Kite Shield</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>30% chance to cover PHY attacks that target allies, reducing damage taken by 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Gladiolus' Fatigues</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Knight abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Aranea</td>
						                <td>Aranea's Gauntlet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Bronze Bangle</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Combat abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY TACTICS -->
						            <tr>
						                <td>FFT</td>
						                <td>Marche</td>
						                <td>Burglar Sword</td>
						                <td>USB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (0,71 each), grants Attach Holy and EX: Speed Combo to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Marach</td>
						                <td>Gokuu Pole</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ovelia</td>
						                <td>Zeus Mace</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), RES +100% for 25 seconds, grants Last Stand</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Alma</td>
						                <td>Nirvana</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Haste, Protect, Shell, High Regen, Astra and Reraise: 40%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Excalibur Trueblade</td>
						                <td>USB</td>
						                <td>Holy / Dark</td>
						                <td>Twelve single attacks (0,58 each), 100% additional critical chance, grants Auto Critical and EX: Sword Saint to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Saintly Excalibur</td>
						                <td>OSB</td>
						                <td>Holy / Lightning</td>
						                <td>One single attack (15,00) capped at 99999, grants Thunder God's Might to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cloud</td>
						                <td>Materia Blade</td>
						                <td>OSB 2</td>
						                <td>Lightning / Ice / Fire</td>
						                <td>One single attack (7,80) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Kiyomori</td>
						                <td>BSB 2</td>
						                <td></td>
						                <td>En-holy. Grants Haste, ATK +50% for 25 seconds, grants Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Meliadoul</td>
						                <td>Save the Queen</td>
						                <td>BSB</td>
						                <td>Earth / Holy</td>
						                <td>Seven random attacks (1,09 each), ATK and DEF -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Agrias</td>
						                <td>Excalibur</td>
						                <td>BSB</td>
						                <td>Holy</td>
						                <td>Imperil Holy (2). Four group ranged attacks (1,47 each), causes Imperil Holy 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Genji Gloves</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Stoneskin: 30% and Critical Damage +50%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Marche</td>
						                <td>Defender</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP for 40% of the target's maximum HP, removes negative effects, DEF +100% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Agrias</td>
						                <td>Jade Armlet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Knight abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Brigandine</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Grants Instant Cast 1 at the beginning of the battle, begins the round with full ATB gauge</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Montblanc</td>
						                <td>Circlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to cast an ability (NAT: group, ATK/MAG/MND -30%) after using a Dancer ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY TYPE-0 -->
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Shock Hammer</td>
						                <td>USB</td>
						                <td>Earth / Wind</td>
						                <td>En-earth. Ten single attacks (0,71 each), grants Attach Earth, Heavy Rank Boost and Heavy Charge Booster to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Queen</td>
						                <td>Flamberge</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>King</td>
						                <td>Outsiders</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Twelve single ranged attacks (0,58 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Lightning and Machinist Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Machina</td>
						                <td>Argentic Rapiers</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Rem</td>
						                <td>Ogrenyxes</td>
						                <td>OSB</td>
						                <td>Holy / Fire</td>
						                <td>Breaks damage cap, 44,94 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Queen</td>
						                <td>Claymore</td>
						                <td>OSB</td>
						                <td>Lightning / Dark</td>
						                <td>One single attack (11,16) capped at 99999, 12,84 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Machina</td>
						                <td>Clockwork Blades</td>
						                <td>OSB</td>
						                <td>Earth / Dark</td>
						                <td>One single attack (10,50~14,50 scaling with Spellblade abilities used) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Machina</td>
						                <td>Bolt Rapiers</td>
						                <td>BSB</td>
						                <td>Earth / Dark</td>
						                <td>Eight single attacks (0,83 each), grants Stoneskin: 30% to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Nine</td>
						                <td>Javelin</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single ranged jump attacks (0,83 each), grants Haste, Attach Wind and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Sice</td>
						                <td>Sice's Guise</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Mythril Bangle</td>
						                <td>SSB</td>
						                <td>Earth / Wind</td>
						                <td>Six group attacks (1,11 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Luminous Robe</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Grants Last Stand, Magical Blink 1 and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Feathered Cap</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat buffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Argentic Deck</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to grant Physical Blink 1 to the user after using a BLK ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Flame Armlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Dominion Helmet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- KINGDOM HEARTS -->
						            <tr>
						                <td>KH</td>
						                <td>Sora</td>
						                <td>Lionheart</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Yuffie</td>
						                <td>Shuriken (KH)</td>
						                <td>USB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Soul Eater</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Sora</td>
						                <td>Metal Chocobo</td>
						                <td>BSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Riku Gloves</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-dark. Grant Attach Dark Stacking, Attach Dark and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Riku</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Sora</td>
						                <td>Sora</td>
						                <td>LMR</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- BEYOND -->
						            <tr>
						                <td>Beyond</td>
						                <td>Lann</td>
						                <td>Fritt Mirage</td>
						                <td>BSB</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
									
									<!-- CORE -->
						            <tr>
						                <td>Core</td>
						                <td>Elarra</td>
						                <td>Magika Album</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Regenga and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Tome of Fantasy</td>
						                <td>USB 2</td>
						                <td>NE</td>
						                <td>Seventeen single attacks (0,37 each), grants Haste to all allies, ATK, DEF, MAG, RES and MND +15% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Purifying Grimoire</td>
						                <td>Glint</td>
						                <td></td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Keeper's Cap</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Grants Instant Cast 2 at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						        </tbody>
						        <tfoot>
						            <tr>
						                <th>Realms</th>
						                <th>Character</th>
						                <th>Relic Name</th>
						                <th>Soul Break</th>
						                <th>Element</th>
						                <th>Effect</th>
						                <th>GL</th>
						                <th>JP</th>
						            </tr>
						        </tfoot>
						    </table>
			            </div><!-- .table-wrapper -->
					</div><!-- .box-content -->
				</div><!-- .box-white -->
			</div><!-- .grid-child -->
		</div><!-- .row -->
		
	</div><!-- .container -->
</div><!-- #layout_content -->

</div><!-- .main-container -->

<?php include("foot.php"); ?>
<?php include("footer.php"); ?> 

<!-- call js plugin specific for this page here (that CAN'T work if deferred), if any -->
<script type="text/javascript" src="js/datatables.min.js"></script>

<!-- defer call for jquery plugins -->
<script type="text/javascript">
	function parseJSAtOnload() {
		var links = [
			// call js plugin specific for this page (deferred). Example:
			"js/js-home.js", 
			"js/custom.js"
		],
		headElement = document.getElementsByTagName("head")[0],
		linkElement, i;
		for (i = 0; i < links.length; i++) {
			linkElement = document.createElement("script");
			linkElement.src = links[i];
			headElement.appendChild(linkElement);
		}
	}
	if (window.addEventListener)
		window.addEventListener("load", parseJSAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", parseJSAtOnload);
	else window.onload = parseJSAtOnload;

	// add "active" class to navigation menu, if used on this project. Example:
	$(".nav-home").addClass("active");

	$('#relic-table').DataTable({
		"paging" : false,
		"language" : {
			"lengthMenu": "<div class='form-group'><div class='select-style radius-small'>_MENU_</div></div>",
			"search": "",
			"info": "Showing <strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
			"infoEmpty":      "Showing <strong>0-0</strong> of <strong>0</strong>",
			"paginate": {
		        "first":      "First",
		        "last":       "Last",
		        "next":       "<i class='fal fa-angle-right'></i>",
		        "previous":   "<i class='fal fa-angle-left'></i>"
		    }
		},
		initComplete: function () {
            this.api().columns([0]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $("#realms_search").empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );

            
        }
	});

	var table = $('#relic-table').DataTable();
	$(document).on( 'click', '.reset-all', function(e) {
       table
		 .search( '' )
		 .columns().search( '' )
		 .draw();
		table.column(6).visible( true );
		table.column(7).visible( true );
       e.preventDefault();
	});
	$(document).on( 'click', '.toggle-jp', function(e) {

		// reset filter
		table
		 .search( '' )
		 .columns().search( '' )
		 .draw();

        table
       .column(7) // or columns???
       .search( 'yes', true, false )
       .draw();

       table.column(7).visible( true );
       table.column(6).visible( false );
       e.preventDefault();
	});
	$(document).on( 'click', '.toggle-gl', function(e) {
		// reset filter
		table
		 .search( '' )
		 .columns().search( '' )
		 .draw();

        table
       .column(6) // or columns???
       .search( 'yes', true, false )
       .draw();

       table.column(6).visible( true );
       table.column(7).visible( false );
       e.preventDefault();
	});

</script>

</body>
</html>