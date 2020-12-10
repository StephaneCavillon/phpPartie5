<h1>Partie 5 : Les tableaux</h1>

    
<h2>Exercice 1</h2>

<p>Créer un tableau months et l'initialiser avec les valeurs suivantes :

    janvier
    février
    mars
    avril
    mai
    juin
    juillet
    aout
    septembre
    octobre
    novembre
    décembre</p>
    <?php

$month = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');

?>

<h2>Exercice 2</h2>
<p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>

<?php

echo $month[2];

?>

<h2>Exercice 3</h2>
<p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>

<?php

echo $month[5];

?>

<h2>Exercice 4</h2>
<p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>

<?php

$month[7] = 'août';

echo $month[7];

?>

<h2>Exercice 5</h2>
<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>

<?php

$departement = array(02=>'Aisne', 59=>'Nord', 60=>'Oise', 62=>'Pas-de-Calais', 80=>'Somme');
?>


<h2>Exercice 6</h2>
<p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
<?= $departement[59];
?>


<h2>Exercice 7</h2>
<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>

<?php
$departement[51]='Marne';
?>

<h2>Exercice 8</h2>
<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
<?php
foreach($month as $mois){
  echo $mois . '<br>';  
}
?>

<h2>Exercice 9</h2>
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
<?php

foreach($departement as $valeur){
    echo $valeur . '<br>';
}
?>

<h2>Exercice 10</h2>
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département</p>

<?php
foreach($departement as $key=>$valeur){
    echo 'Le département ' . $valeur . ' a le numéro ' . $key . '.'. '<br>';
}
?>