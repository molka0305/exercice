<?php
require_once "config.php";
require_once "fonctions.oho";
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];


 //AFFICHER LES NOTES
 echo "<h3> AFFICHER LES NOTES: </h3>";
 afficherNotesEtudiants($notes);

 //AFFICHER LA MOYENNE DE LA CLASSE 
 echo "<h3> MOYENNE DE CLASSE:</h3>";
 echo "La moyenne :" . calculerMoyenneClasse($notes) . "<br>";

//AFFICHER LES ADMIS DE LA CLASSE 
echo "<h3>LES ADMIS:</h3>"
$admis = getAdmis($notes, 10);
afficherNotesEtudiants($admis);

//AFFICHER LES NOTES TRIEES
echo "<h3>LES NOTES TRIEES:</h3>"
$notesTriees = trierNotesClasse($notes);

//ADDICHER LES NOTES APRES AJOUT D UN POINT
echo "<h3>APRES BONUS:</h3>"
 $notesBonus = ajouterPoint($notes);
afficherNotesEtudiants($notesBonus);
 
 
?>