<?php 

require_once __DIR__ . '/./main.php';

// creo la funzione per generare una stringa casuale
function generate_password($available_elements, $password_length){
    // unisco gli arrays in un solo array
    $available_elements = array_merge($upper_case, $lower_case, $numbers, $symbols);

    // inizializzo l'elemento in cui salvare gli elementi randomici
    $random_password='';

    // uso il ciclo for per generare elementi ranomici e aggiungerli a random_password
    for ($i = 0; $i < $password_length; $i++) {
        $random_element = $available_elements[array_rand($available_elements)];
        $random_password .= $random_element;
    }

    // prendo la password generata
    return $random_password;
}