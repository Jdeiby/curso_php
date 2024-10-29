<?php

$name = 'Miguel';
$isDev = true;
$age = 1;

define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

$output = "Hola $name, con una edad de $age.";
$outputAge = match (true) {
    $age < 2  => "Eres un bebé, $name",
    $age < 10  => "Eres un niño, $name",
    $age < 18  => "Eres un adolescente, $name",
    $age  = 18 => "Eres mayor de edad, $name",
    $age < 40  => "Eres un adulto joven, $name",
    $age < 60  => "Eres un viejo, $name",
    default => "Hueles más a madera que a fruta, $name",
}
?>
<h2><?= $outputAge ?></h2>

<pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php var_dump($data); ?>



<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= $output ?>
</h1>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>