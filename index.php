<?php
require_once 'const.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
?>

<?php render_template('head', $data); ?>

<body>
    <?php 
    render_template('main', array_merge($data, ["untilMessage" => $untilMessage])); 
    ?>
</body>
</html>
