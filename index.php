<?php

$images =[
    "https://themes.3rdwavemedia.com/profolio/bs5/assets/images/profile.png"
];


foreach ($images as $key => $value) {
    $filename = str_replace('https://themes.3rdwavemedia.com/profolio/bs5/', '', $value);
    if (!is_dir(dirname($filename)))
        mkdir(dirname($filename), 0777, true);

    file_put_contents($filename, file_get_contents($value));
}
