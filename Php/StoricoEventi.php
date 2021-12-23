<?php
	include("ConnectionDB.php");
	function storicoEventi($id_utente, $condb) : void {
		$query = "SELECT Eventi.id, Eventi.nome as Titolo, Eventi.data_evento, Luoghi.nome as Luogo
						FROM partecipano
						JOIN Eventi ON (id_evento=Eventi.id)
						JOIN Luoghi on (Luoghi.id=Eventi.id_luogo)
						WHERE id_utente = '.$id_utente.'";
		
		$result = mysqli_query($condb, $query);
		
		if(mysqli_num_rows($result) == 0){
			echo "<tr> <td colspan='4'> Non hai ancora partecipato a nessun evento </td> </tr>";
		}
		
		while ($row = $result->fetch_array()) {
			$id = $row['id'];
			$evento = $row['Titolo'];
			$data = $row['data_evento'];
			$luogo = $row['Luogo'];
			echo "<tr> \n";
			echo "<td> $id </td>";
			echo "<td> $evento </td>";
			echo "<td> $data </td>";
			echo "<td> $luogo </td>";
			echo "</tr> \n";
		}
	}
	
	if (isset($_SESSION)){
		echo "<table>";
		echo "<th> ID </th>";
		echo "<th> Titolo </th>";
		echo "<th> Data </th>";
		echo "<th> Luogo </th>";
		storicoEventi($_SESSION['id'], $conn);
		echo "</table>";
	}
?>