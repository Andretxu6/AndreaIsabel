<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="{{ route('formulariosubmit') }}" method="post">
            {!! csrf_field() !!}
            <label>Usuario: </label>
            <input type="text" name="usuario" placeholder="Introduce tu usuario"/>
            <input type="Submit" valor="Enviar" />
        </form>
    </body>
</html>