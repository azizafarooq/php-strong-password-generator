<?php
// ricevo il valore della lunghezza della password
$password_length = $_GET['length'];
$upper_case = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$lower_case = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '"', "'", '<', '>', ',', '.', '?', '/'];

// unisco gli arrays in un solo array
$available_elements = array_merge($upper_case, $lower_case, $numbers, $symbols);

// creo la funzione per generare una stringa casuale
function generate_password(){
    $random_password='';
    for ($i = 0; $i < 10; $i++) {
        $random_element = array_rand($available_elements);
        $random_password .= $random_element;
    }
    return $random_password;
}
generate_password();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Strong Password Generator</h1>

        <!-- Creo il from -->
        <form class="mt-5" method="get">
            <label for="length">Lunghezza</label>
            <input type="number" id="length" name="length" autofocus class="mx-3">
            <button type="submit" class="btn btn-success">Success</button>
        </form>

        <!-- Genero la password se ricevo un valore e se è maggiore di 0 -->
        <?php if (!empty($password_length) && ($password_length > 0)) {
            // generate_password($password_length);
            echo "Ecco la tua password";
        } else {
            echo "Inserisci un numero valido";
        }; ?>

    </div>
</body>

</html>