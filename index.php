<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__);
$twig = new \Twig\Environment($loader,[
    'debug' => true,
    'auto_reload' => true,
]);
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$herodata = file_get_contents('temp/data/hero.json');
// Data to pass to the template
$data = [
    'name' => "TenThone",
    "asset_path" => '/'
];

// Render the template
// $templateFile = 'pages/' . $page . '.html';
$templateFile = "public/index.html";
$template = $twig->load($templateFile);
echo $template->render($data);
?>
