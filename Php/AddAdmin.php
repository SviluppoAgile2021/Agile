<?php

class AddAdmin
{
    public function aggiungiAdmin($idAdmin, $idUtente1, $idUtente2, $idUtente3, $debug): bool
    {
        $query = "";
        if ($debug === TRUE) {
            include("DebugConnectionDB.php");
        } elseif ($debug === FALSE) {
            include("ConnectionDB.php");
        }
        if($idUtente1==-1 and $idUtente2!=-1 and $idUtente3!=-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`,`id_membro_2`, `id_membro_3`) VALUES ($idAdmin,$idUtente2,$idUtente3)";
        }
        if($idUtente1!=-1 and $idUtente2==-1 and $idUtente3!=-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`, `id_membro_1`,`id_membro_3`) VALUES ($idAdmin,$idUtente1,$idUtente3)";
        }
        if($idUtente1!=-1 and $idUtente2!=-1 and $idUtente3==-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`, `id_membro_1`, `id_membro_2`) VALUES ($idAdmin,$idUtente1,$idUtente2)";
        }

        if($idUtente1!=-1 and $idUtente2==-1 and $idUtente3==-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`, `id_membro_1`) VALUES ($idAdmin,$idUtente1)";
        }
        if($idUtente1==-1 and $idUtente2==-1 and $idUtente3!=-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`, `id_membro_3`) VALUES ($idAdmin,$idUtente3)";
        }
        if($idUtente1==-1 and $idUtente2!=-1 and $idUtente3==-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`,`id_membro_2`,) VALUES ($idAdmin,$idUtente2)";
        }

        //tutti uguali a -1
        if($idUtente1==-1 and $idUtente2==-1 and $idUtente3==-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`) VALUES ($idAdmin)";
        }
        //tutti diversi
        if($idUtente1!=-1 and $idUtente2!=-1 and $idUtente3!=-1){
            $query = "INSERT INTO Gruppi (`id_admin_gruppo`, `id_membro_1`, `id_membro_2`, `id_membro_3`) VALUES ($idAdmin,$idUtente1,$idUtente2,$idUtente3)";
        }

        $risultato = mysqli_query($conn, $query);
        if ($risultato === FALSE) {
            //echo(mysqli_error($conn));
            mysqli_close($conn);
            return false;
        } else {
            mysqli_close($conn);
            return true;
        }
    }
}