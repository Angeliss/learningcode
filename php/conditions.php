<?php
/**
 * if(condition) {
 *  instruction si condition vraie
 * }
 */
/**
 * Operateurs logiques
 *  Ou: Or ( || )
 *  Et: AND (&&)
 * Non => !
 * Different de !=
 */
$age_utilisateur = 18;
$sex_utilisateur = 'homme';
echo "Condition OU<hr>";
if (($age_utilisateur >= 18) || ($sex_utilisateur == 'homme') ) {
    echo "Vous etes autorises a entrer";
}
echo "<br>Condition ET<hr>";
if (
    ($age_utilisateur >= 18) && 
    ($sex_utilisateur == 'homme')
   ) {
    echo "Acces autorise !";
}
echo "<br>Condition Non (!)<hr>";
$is_ok = false;
if (!$is_ok) {// si $is_ok == false
    echo "Tu n'es pas au Top !";
}

/**
 * Si ... sinon 
 * if (condition) {
 *  Instruction si condition vraie
 * } else {
 *  Instructions si condition fausse
 * }
 */
echo '<hr>';
$nombre = 17;

if ($nombre % 2 == 0) {
    echo $nombre."est un nombre pair";
} else {
    echo "$nombre est impair";    
}

echo '<hr>';
/**
 * EXERCICE
 * Un utilisateur achete des articles;
 * Si le montant des articles est superieur a 10000,
 * on applique une reduction de 2%.
 * Ecrire un programme pour representer cette situation.
 * ----------------------------
 * Ex: 
 * 
 * Liste des articles
 * -----------------
 *  - Definir des variables pour lister les articles achetes
 *  - Faire la somme et trouver le montant total
 * ($montant_total)
 * Condition
 * ---------------
 * - Verifier si le montant $montant_total > 10000
 *      Si oui:
 *          Appliquer remise 2%
 *          Affiche le montant de la remise
 *          Afficher le montant a paye
 *      Si non:
 *          Affiche "Pas de remise"
 *          Affiche le montant a paye 
 */
$article1 = 3000;
$article2 = 8000;

$montant_total = $article1 + $article2;
echo "Montant Article = $montant_total F CFA<br>";

// Verification
if ($montant_total > 10000) {
    $taux_remise = 0.02;
    $montant_remise = $montant_total * $taux_remise;

    $net_a_payer = $montant_total - $montant_remise;

    echo "Montant remise (2%): $montant_remise F CFA<br>
        Net a payer: $net_a_payer F CFA";
} else {
    echo "Pas de remise.<br>Net a payer: $montant_total F CFA";
}

/**
 * Si...Sinon si...Sinon
 * if (condition1) {
 *  Instruction si condition 1 vraie
 * } elseif (condition2) {
 *  Instruction si condition 2 vraie
 * } .....
 * 
 * ......
 * 
 * else {
 *  Instruction si aucune condition ne vaut vraie
 * }
 */
echo "<hr>";
echo "Test condition if...elseif...else";
$moyenne = 17;
echo "<br>-----------<br>";
if ($moyenne < 10) {
    echo "Desole, vous n'etes admis";
} elseif ($moyenne < 12) {
    echo "Admis ! [Mention: Passable]";
} elseif ($moyenne <= 14) {
    echo "Bravo ! Admis. [Mention: Assez-bien]";
} elseif ($moyenne <= 16) {
    echo "Felicitation ! Admis. [Mention: Bien]";
} elseif ($moyenne <= 20) {
    echo "Excellent ! Admis. [Mention: Tres bien]";
} else {
    echo "Note invalide !";
}

echo "<hr>";
echo "Les condition avec l'instruction switch<br>";

$i = 0;

/*if ($i == 0) {
    # code...
} elseif ($i == 1) {
    # code...
} elseif ($i == 2) {
    # code...
} elseif ($i == 3) {
    # code...
}
*/
switch ($i) {
    case 0:
        echo "i vaut 0";
        break;
    case 1:
        echo 'i vaut 1';
        break;
    case 2:
        echo "i vaut 2";
        break;
    case 3:
        echo "i vaut 3";
        break;
    
    default:
        echo "Valeur de i trop grand";
        break;
}