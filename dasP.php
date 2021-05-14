<?php

function unique_names(array $array1, array $array2) : array
{
$array3= array_intersect($array1,$array2);
return array_unique(array_merge($array3,$array1, $array2));
}

$names = unique_names(['Raman', 'Sita', 'Geeta'], ['Geeta', 'Sophia', 'Sita']); echo join(', ', $names);

?>
