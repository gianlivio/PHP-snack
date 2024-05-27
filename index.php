<?php
$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8]
    ]
];

// Funzione per calcolare la media dei voti
function calcoloValore($votes)
{
    // variabile per somma dei voti
    $total = array_sum($votes);

    // variabile per contare il numero dei voti
    $count = count($votes);

    // calcolo della media
    return $total / $count;
}

// Iterazione sull'array degli studenti
foreach ($students as $student) {
    $name = $student['name'];
    $lastname = $student['lastname'];
    $media = calcoloValore($student['votes']);

    // Stampare Nome, Cognome e Media dei voti
    echo "$name $lastname $media";
}
