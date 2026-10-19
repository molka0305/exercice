
<?php
$notes=["Mohamed" => 14, "Sami" => 9, "Amel" => 17,"Yassine" => 8, "Ines" => 12];

foreach($notes as $et=>$note)
    {
        echo " $et : $note <br>";
    }
$moyenne=array_sum($notes);
echo "la moyenne de la classe est : $moyenne<br>";
$admis=array_filter($notes,fn($note)=>$note>=10);
print_r($admis);
sort($notes);
print_r($notes);

$plus=array_map(fn($note)=> $note +1,$notes);
print_r($plus);

?>