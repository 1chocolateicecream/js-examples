<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>document</title>
</head>
<body>
    <?php
    $settings = [
        'theme' => 'dark',
        'font' => 'Arial'
    ];

    echo "<ul>";
    foreach ($settings as $key => $value) {
        echo "<li>$key: $value</li><br>";
    }
    echo "</ul>";
    ?>
</body>
</html>
