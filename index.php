<?php

$users = [
    ['name' => 'Alice', 'age' => 25, 'gender' => 'female'],
    ['name' => 'Bob', 'age' => 30, 'gender' => 'male'],
    ['name' => 'Eve', 'age' => 22, 'gender' => 'female']
];


$totalAge = 0;
$totalUsers = count($users);

foreach ($users as $user) {
    $totalAge += $user['age'];
}

$averageAge = $totalAge / $totalUsers;
echo "Средний возраст всех пользователей: " . $averageAge . "<br>";

echo "Список имен женщин: ";
$women = [];
foreach ($users as $user) {
    if ($user['gender'] === 'female') {
        $women[] = $user['name'];
    }
}
echo implode(', ', $women);
?>
