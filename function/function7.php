<?php
function agegenre($age,$genre){

    if($age >= 18 && $genre === "homme"){
        return "Vous êtes un homme et vous êtes majeur .";
    } elseif($age >= 18 && $genre === "femme"){
        return "Vous êtes une femme et vous êtes majeure .";
    } elseif($age < 18 && $genre === "femme"){
        return "Vous êtes une femme et vous êtes mineure ";
    } elseif($age < 18 && $genre === "homme"){
        return "Vous êtes un homme et vous êtes mineur ";
    } else{
        return "vous êtes différent mais on vous aime quand même <3";
    }
}
echo agegenre(18, "homme");
?>
