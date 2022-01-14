<?php
	include("ConnectionDB.php");
	function storicoEventi($id_utente, $condb) : void
	{
		$query = "SELECT Eventi.id, Eventi.nome as Titolo, Eventi.data_evento, Luoghi.nome as Luogo
						FROM partecipano
						JOIN Eventi ON (id_evento=Eventi.id)
						JOIN Luoghi on (Luoghi.id=Eventi.id_luogo)
						WHERE id_utente = '.$id_utente.'";
		
		$result = mysqli_query($condb, $query);
		
		if (mysqli_num_rows($result) == 0) {
			echo "<tr> <td colspan='4'> Non hai ancora partecipato a nessun evento </td> </tr>";
		}
		
		
		while ($row = $result->fetch_array()) {
			$id = $row['id'];
			$evento = $row['Titolo'];
			$data = $row['data_evento'];
			$luogo = $row['Luogo'];
			
			echo "<div class='event-title mb-15'>
			<h3 class='title'> " . $evento . " </h3>
		</div>";
			
			echo "<p class='discription-text mb-30'> " . $data . " </p>"
			
		echo "<ul>
			<li>
				<div class='info-content'>
					<small>" . $luogo ".</small>
				</div>
			</li>
		</ul>";
			
		
		}
	}

?>