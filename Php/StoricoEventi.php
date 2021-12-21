<?php
	include("ConnectionDB.php");
	
	class StoricoEventi
	{
		public function storicoEventi($id_utente) {
			$query = "SELECT Eventi.id, Eventi.nome, Eventi.data_evento, Luoghi.nome
						FROM partecipano
						JOIN Eventi ON (id_evento=Eventi.id)
						JOIN Luoghi on (Luoghi.id=Eventi.id_luogo)
						WHERE id_utente = '7'";
			
			$result = mysqli_query($conn, $query);
			if(empty($result)){
				echo "Non hai ancora partecipato a nessun evento";
			}
			while ($row = $result->fetch_array()) {
				$id = $row['id'];
				$evento = $row['Titolo'];
				$data = $row['data_evento'];
				$luogo = $row['Luogo'];
				echo "<tr> \n";
				echo "<td> '.$id.' </td>";
				echo "<td> '.$evento.' </td>";
				echo "<td> '.$data.' </td>";
				echo "<td> '.$luogo.' </td>";
				echo "</tr> \n";
			}
		}
	}