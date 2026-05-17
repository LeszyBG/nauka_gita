<?php
function weighted_avg(array $values, array $weights): float {
    if (count($values) !== count($weights) || count($values) === 0) {
        return 0;
    }

    $totalWeight = array_sum($weights);
    if ($totalWeight == 0) {
        return 0; 
    }

    $weightedSum = 0;
    foreach ($values as $index => $value) {
        $weightedSum += $value * $weights[$index];
    }

    return $weightedSum / $totalWeight;
}

// Przykład użycia:
$values = [3, 5, 8];
$weights = [2, 1, 3];

echo "Średnia ważona: " . weighted_avg($values, $weights);
?>
