<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <title>Php form</title>
    </head>
    <body>
        <form action="" method="" class="php_form">
            <h2 class="form_title">Inicio de sesión</h2>
            <div class="form_group">
                <label class="form_label" for="name">Nombre</label>
                <input class="form_input" type="text" name="name" id="name" placeholder="Ingrese su nombre">
            </div>
            <div class="form_group">
                <label class="form_label" for="age">Edad</label>
                <input class="form_input" type="number" name="age" id="age" placeholder="Ingrese su edad">
            </div>
            <div class="form_group">
                <input class="form_submit" type="submit" value="Entrar">
            </div>
        </form>
    </body>
</html>