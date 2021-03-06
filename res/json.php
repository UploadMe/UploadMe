<?php

function lang($name) {
    $jsonfile = file_get_contents(__DIR__ . "/../res/lang.json");
    $json = $jsonfile;
    $j = json_decode($json);
    if (isset($j->{$name})) {
        $output = $j->{$name};
        return($output);
    } else {
        return null;
    }
}

function lang_markdown($name) {
    include __DIR__."/../res/markdown.php";
    $output = lang($name);
    if ($output != null) {
        return(markdown($output));
    } else {
        return null;
    }
}
