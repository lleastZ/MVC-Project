<?php
$title = 'Регистрация в системе';
@include_once 'header.php';
?>

<?= (isset($_GET['error_password'])
    ? "<div class='alert alert-danger'>Пароли не совпали!</div>"
    : "")
?>
    <!--<form action="" method="POST">
        <input type="text" name="name" placeholder="Фамилия Имя Отчество" required>
        <input type="text" name="login" placeholder="Укажите логин:" required>
        <input type="password" name="passsword" placeholder="Укажите пароль:" required>
        <input type="password" name="passsword_confirmed" placeholder="Укажите пароль повторно:" required>
        <input type="submit" value="Регистрация">
    </form>-->
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 border border-1 rounded-2 mt-2 p-2">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Ваше ФИО</label>
                        <input type="text" name="name" class="form-control" placeholder="Фамилия Имя Отчество" required
                               id="inputName">
                    </div>
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Ваше логин</label>
                        <input type="text" name="login" class="form-control" placeholder="Укажите логин:" required
                               id="inputLogin">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваше пароль</label>
                        <input type="password" name="password" class="form-control" placeholder="Укажите пароль:"
                               required id="inputPassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmed" class="form-label">Подтвердите пароль</label>
                        <input type="password" name="password_confirmed" class="form-control"
                               placeholder="Укажите пароль повторно:" required id="inputPasswordConfirmed">
                    </div>
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

<?php @include_once 'footer.php'; ?>