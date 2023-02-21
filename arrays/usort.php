<?php

$grades = [
    [
        'student' => 'Maria',
        'grade' => 10,
    ],
    [
        'student' => 'Vinicius',
        'grade' => 6,
    ],
    [
        'student' => 'Ana',
        'grade' => 9,
    ],
];

/*
return < 0, se o primeiro parametro precisar vir antes
return > 0, se o segundo parametro precisar vir antes
return = 0, se nao precisar modificar a ordem dos parametros
*/

function organizeGrades(array $grade1, array $grade2): int
{
    return $grade1['grade'] <=> $grade2['grade'];
}

usort($grades, 'organizeGrades');
var_dump($grades);
