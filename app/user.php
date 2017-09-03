<?php
namespace liw\app;


class user
{
    public function checkLogin($login,$password)
    {
        if ($login == 'Admin' && $password == '123') {
            return true;
        } else {
            return false;
        }
    }

    public function aunt($login,$password)
    {
        if (!empty($login) && !empty($password)) {
            $check = self::checkLogin($login,$password);
            if ($check === true) {
                $_SESSION['login']    = $login;
                $_SESSION['password'] = $password;
                print 'Поздравляю вы вошли!';
                echo "<script>setTimeout( 'location=\"http://mm.loc/web/load.php\";', 2000 );</script>";
            } else {
                print 'Вы ввели неверные данные!';
            }
        } else {
            print 'Вы ничего не ввели в поля!';
        }
    }

}