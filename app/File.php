<?php
namespace liw\app;

class File
{

    public function getListFile($dir)
    {
        foreach (glob($dir) as $file) {
            print "<img src=\"$file\">";
        }
    }

    use ValidatorPng; // trait!

    public function downloadFile($checked)
    {
        if ($checked === true) {
            if(is_uploaded_file($_FILES["file"]["tmp_name"]))
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    "img/".$_FILES["file"]["name"]);
                print 'Поздравляю изображение успешно загруженно!';
                echo "<script>setTimeout( 'location=\"http://mm.loc/web/\";', 2000 );</script>";

            } else {
                echo("Ошибка загрузки файла");
            }
        } else {
            print 'Файл должен быть формата PNG!';
        }
    }
}