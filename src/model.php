<?php

// Return all quotes
function getQuotes() {
    $bdd = new PDO('mysql:host=localhost;dbname=dictionnary;charset=utf8', 'test', 'test');
    $quotes = $bdd->query('select * from t_quote order by q_id desc');
    return $quotes;
}