<?php

$minPHP = '7.4.0';

echo PHP_VERSION >= $minPHP ? "php version enough" : "php version not enough, required minimum php version " . $minPHP;
