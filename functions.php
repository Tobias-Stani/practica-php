<?php


function get_data($url) {
    $result = file_get_contents($url);
    if ($result === false) {
        return null; // Handle error appropriately
    }
    $data = json_decode($result, true);
    if ($data === null) {
        return null; // Handle error appropriately
    }
    return $data;
}

function get_until_message(int $days): string {
    return match (true) {
        $days == 0 => "hoy se estrena!",
        $days < 7 => "Esta semana se estrena",
        $days < 30 => "Esta mes se estrena",
        default => "$days días para el estreno",
    };
}

function render_template(string $template, array $data = []){

    extract($data);
    require "templates/$template.php";

}

?>