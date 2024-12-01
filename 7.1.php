<?php
$words = ['apple', 'banana', 'cherry', 'kiwi', 'watermelon'];
function compareLenght($a, $b)
{
    return strlen($a) - strlen($b);
}

usort($words, "compareLenght");
echo"Отсортированные строки по длине: <br>";
    foreach ($words as $word)
    {
        echo $word ."<br>";
    }
?>