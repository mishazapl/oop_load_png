<?php
session_start();
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */

// Включим вывод всех ошибок на экран.
error_reporting(E_ALL);       // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
require __DIR__ . '/../vendor/autoload.php';

$file = new liw\app\File();

$file->getListFile('img/*.png');

print '<br>';

print "<a href='load.php'>Перейти к загрузки файлов</a>";