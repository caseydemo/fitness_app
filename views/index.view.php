<? require('partials/head.php'); 
    $html = '';
    $html .= '<ul>';
    foreach ($exercises as $exercise) {
        $html .= '<li>' . $exercise->description . '</li>';
    }
    $html .= '</ul>';
    echo $html;
require 'partials/footer.php'; ?>