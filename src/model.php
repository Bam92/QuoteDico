<?php

// Return all quotes
function getQuotes() {
    $bdd = new PDO('mysql:host=localhost;dbname=dictionnary;charset=utf8', 'root', '06011992');
    $quotes = $bdd->query('select * from t_quote order by q_id desc');
    return $quotes;
}
