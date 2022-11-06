<?php

$wordOne= readline("write First word: ");
$wordTwo= readline("write Second word: ");
$firstWordLen=strlen($wordOne);
$secondWordLen=strlen($wordTwo);

$circles= 30-$firstWordLen-$secondWordLen;

if(true) {
    echo $wordOne;
    for ($i = 0; $i < $circles; $i++) {
        $dots = ".";
        echo $dots;
    }
}
    echo $wordTwo;
echo PHP_EOL;


