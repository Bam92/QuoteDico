<?php

// Return all quotes
function getQuotes() {
  $bdd = new PDO('mysql:host=localhost;dbname=dictionnary;charset=utf8',
  'root', 'root');
    $quotes = $bdd->query(
      'select q.q_description,  a.a_fName, a.a_mName, a.a_lName, a.a_link
       from t_quote q
       inner join t_author a
       on q.q_id = a.a_id
     ');
    return $quotes;
}
