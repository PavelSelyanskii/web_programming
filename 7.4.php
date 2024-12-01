<?php
function analyzeText($text) {
 
    $words = preg_split('/\s+/', strtolower(trim($text)));
    
    $words = array_filter($words, function($word) {
        return !empty($word);
    });

    $totalWords = count($words);
    
    $uniqueWords = count(array_unique($words));
    
    return [
        'total' => $totalWords,
        'unique' => $uniqueWords
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';

    if (!empty($inputText)) {
        $result = analyzeText($inputText);
        echo "Общее количество слов: " . $result['total'] . "<br>";
        echo "Количество уникальных слов: " . $result['unique'] . "<br>";
    } else {
        echo "Введите текст для анализа!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализ текста</title>
</head>
<body>
    <h1>Анализ текста</h1>
    <form method="POST">
        <textarea name="text" rows="5" cols="40" placeholder="Введите текст здесь..."></textarea><br><br>
        <button type="submit">Анализировать</button>
    </form>
</body>
</html>
