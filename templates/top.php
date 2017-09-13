<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="project">
    <title>Project</title>
    <link href="media/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="media/css/style.css" type="text/css" rel="stylesheet" />
    <link href="media/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script src="media/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">

        /*function showlogin(login_input){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST','index.php?login'=login_input,true);
        alert(xmlhttp.responseText);
        }
        $(document).ready(function(){
            $('#sub').click(function() {
                var input_login = $("#1").val();
                var input_password = $("#2").val();
                function showlogin(input_login,input_password){
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("POST","registration.php?login="+input_login,false);
                    xmlhttp.send();
                    var result=xmlhttp.responseText
                    $(".registration-form").html("<p style=\"font-size:20px;margin:20px;font-weight:bold;\">"+result+"</p>");


                }
                showlogin(input_login,input_password);
            });
            $('#sub').keyup(function(){
                if(event.keyCode==13)
                {
                    $(this).click();
                    return false;
                }
            })




        });
*/
    </script>



</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <img src="media/img/logo.png"/>
            </div>
            <div class="col-md-3 registration-form">
                <form role="form">
                    <div class="form-group">
                        <p class="help-block">Авторизация</p>
                        <label for="">Логин</label>
                        <input  type="text" class="form-control" id="1" placeholder="Enter login">
                    </div>
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input  type="password" class="form-control" id="2" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <a href="registration.php"><p class="help-block">Еще не зарегистрированы?</p></a>
                        <button id="sub" type="submit" class="btn btn-default">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





</header>

<div class="topmenu">

    <a href="#">Item 1</a>
    <a href="#">Item 2</a>
    <a href="#">Item 3</a>
    <a href="#">Item 4</a>
    <a href="#">Item 5</a>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-2 vertical-menu">
            <button type="button" class="btn btn-default">Default</button><br>
            <button type="button" class="btn btn-default">Default</button><br>
            <button type="button" class="btn btn-default">Default</button><br>
            <button type="button" class="btn btn-default">Default</button>
        </div>

        <div class="col-md-8 main">