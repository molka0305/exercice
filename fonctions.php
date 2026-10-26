<?php

function afficherNotesEtudiants(array $notes): void {
foreach ($notes as $nom=>$note) {
echo "$nom : $note<br>";
}}



function calculerMoyenneClasse ($somme, $nb){
    $somme = array_sum($notes);
    $nb = count($notes); 
    return $somme/$nb;
}


function getAdmis(array $notes,$seuil): array {
return array_filter($notes,fn($n)=>$n>=$seuil);
}

function trierNotesClasse(array $notes): array {
sort($notes);
return $notes;
}


function ajouterPoint(array $notes, $point=1): array {
return array_map(fn($n)=>$n+$point,$notes);
}

?>