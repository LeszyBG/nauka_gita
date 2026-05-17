<?php
function avg(array $numbers): float {
    if (count($numbers) === 0) {
        return 0;
    }

    $sum = array_sum($numbers);
    $count = count($numbers);

    return $sum / $count;
}

// Przykład użycia:
$values = [2, 4, 6, 8];
echo "Średnia: " . avg($values);
?>
