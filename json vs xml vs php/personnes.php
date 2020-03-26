<?php 
$personnes = [
    [
        'nom' => "Dupond",
        'service' => "Achats"
    ],
    [
        'nom' => "Durand",
        'service' => "Achats"
    ],
    [
        'nom' => "Dupuis",
        'service' => "Courrier"
    ],
];
return json_encode($personnes);