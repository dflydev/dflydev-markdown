#!/usr/bin/env php
<?php

use dflydev\markdown\MarkdownExtraParser;
use dflydev\markdown\MarkdownParser;

if (PHP_SAPI !== 'cli') {
    exit(-1);
}
$argv = $_SERVER['argv'];
$argc = $_SERVER['argc'];

if ($argc < 2) {
    echo <<<MAN
\033[1m
md.php <in.md>         Parse "in.md" and write result to STDOUT
md.php <in.md> <out>   Parse file and write result to "out" file

Flag "--extra" in both cases parse "in.md" using MarkdownExtraParser
\033[0m
MAN;

    exit(0);
}

require_once __DIR__ . '/../vendor/autoload.php';

if (in_array('--extra', $argv) && $argc > 2) {
    $parser = new MarkdownExtraParser();
    $argv = array_flip($argv);
    unset($argv['--extra']);
    $argv = array_flip($argv);
} else {
    $parser = new MarkdownParser();
}

if (!is_readable($argv[1])) {
    echo 'Input file is not readable!';
    exit(-1);
}

$html = $parser->transformMarkdown(file_get_contents($argv[1]));
if (isset($argv[2])) {
    if (false === $fp = @fopen($argv[2], 'w+')) {
        echo 'Could not open or create out file';
        exit(-1);
    }
    fwrite($fp, $html);
    fclose($fp);
} else {
    echo $html;
}
exit(0);