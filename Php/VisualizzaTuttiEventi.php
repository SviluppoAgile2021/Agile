<?php

	public function visualizzaEventi(){
		include("connectionDB.php");
		
		$query = "SELECT Eventi.* FROM Eventi WHERE data_evento > CURDATE()";
		
		$res = mysqli_query($conn, $query);
		if($res === FALSE){
			die(mysqli_error($conn));
		}
		
		
		if(!empty($res)){
			$res = @mysqli_query($conn, $query);
			while ($entry = mysqli_fetch_array($res))
			{
				//titolo dell'evento
				echo "<h3 class='title'>". $entry['nome'] ."</h3>";
				//prezzo
				echo "<span class='ticket-price yellow-color'>". $entry['prezzo'] ."</span>";
				//data
				echo "<p class='discription-text mb-30'>". $entry['data_evento'] ."</p>";
				//dettagli
				echo "<div class='event-info-list ul-li clearfix'>
					<ul>
						<li>
							<span class='icon'>
								<i class='fas fa-ticket-alt'></i>
							</span>
							<div class='info-content'>
								<small>Capienza massima</small>
									<h3>". $entry['capienza'] ."</h3>
							</div>
						</li>
						<li>
							<a href='/event-details.html' class='tickets-details-btn'> tickets & details</a>
			            </li>
					</ul>
				</div>
			";
			}
		}
		else {
			echo("Nessun evento risulta disponibile al momento.");
		}
}
