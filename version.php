<?php

/**
* Bu kod php sürümünüz 7.4.0 dan küçükse scripti çalıştırmayacaktır.
*
*/

if (version_compare(PHP_VERSION, '7.4.0', '<')) {
    die("Sistemin stabil çalışabilmesi için minimum <b>PHP 7.4</b> versiyonu veya daha üstü gerekli! Mevcut sürüm: <b>" . PHP_VERSION . "</b>");
}

/**
* Eğer belirlediğiniz 2 versiyon arasında çalışmasını istiyorsanız aşağıdaki kodu kullanabilirsiniz.
* 
* Scriptiniz sadece php 7.4.0 - 7.4.21 versiyonları arasında çalışacaktır
* 
*/

if (version_compare(PHP_VERSION, '7.4.0', '<')) {
    die("Sistemin stabil çalışabilmesi için <b>PHP 7.4</b> versiyonu gerekli! Mevcut sürüm: <b>" . PHP_VERSION . "</b>");
} elseif (version_compare(PHP_VERSION, '7.4.21', '>')) {
    die("Sistemin stabil çalışabilmesi için <b>PHP 7.4</b> versiyonu gerekli! Mevcut sürüm: <b>" . PHP_VERSION . "</b>");
}
