<?

function dd($raw) {
    $response = '';
    $response .= '<pre>';
    $response .= print_r($raw, true);
    $response .= '</pre>';
    die($response);
}