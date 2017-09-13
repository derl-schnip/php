<?php $login = $_REQUEST['login'];

if($login==='admin'){
    echo 'Добро пожаловать, '.$login.'!<br><button id="return" type="submit" class="btn btn-default">Выход</button>';
}
    else
        echo 'Пользователь не найден!<br><button id="return" type="submit" class="btn btn-default">Назад</button>';


?>