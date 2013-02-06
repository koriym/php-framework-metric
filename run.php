<?php

$frameworks = [
    'cakephp' => 'lib',
    'CodeIgniter' => 'system',
    'fuel' => 'fuel/packages'
    'laravel' => 'laravel',
    'Slim' => 'Slim',
    'symfony' => 'src',
    'yii' => 'framework',
    'zf2' => 'library'
    'bear' => 'src'
];

foreach ($frameworks as $framework => $path) {
    $path = "{$framework}/{$path}";
    $pdepend = __DIR__ . '/vendor/pdepend/pdepend/src/bin/pdepend.php';
    $cmd = "$pdepend --jdepend-chart=data/{$framework}-jdepend.svg";
    $cmd .= " --overview-pyramid=data/{$framework}-pyramid.svg $path";

    echo $framework . PHP_EOL;
    passthru($cmd);
}

