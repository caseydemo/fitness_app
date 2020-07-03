<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracast</title>
</head>
<body>
    <?
    $html .= '<ul>';
    foreach ($exercises as $exercise) {
        $html .= '<li>' . $exercise->description . '</li>';
    }
    $html .= '</ul>';
    echo $html;
    ?>
</body>
</html>