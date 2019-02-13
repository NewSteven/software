<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  /* General */
body {
  margin: 0;/*  */
  padding: 0;
  font-family: 'Roboto', sans-serif;/*  linea 25 esta el link de la fuente  */
  text-align: center;
}

/* Input darles estilo*/
input[type="text"], input[type="password"], input[type="email"]{
  outline: none;
  padding: 20px;
  display: block;
  width: 300px;
  border-radius: 3px;
  border: 1px solid #eee;
  margin: 20px auto;
  cursor: pointer;
}

input[type="submit"] {/* boton  */
  padding: 10px;
  color: #fff;
  background: #0098cb;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #00b8eb;
}

/* Header */
header {
  border-bottom: 2px solid #eee;
  padding: 20px 0;
  margin-bottom: 10px;
  width: 100%;
  text-align: center;
}
header a {
  text-decoration: none;
  color: #333;
}
.selectWrapper{ 
  width: 20%; 
  overflow: hidden; 
  position: relative; 
  border: 1px solid #bbb; 
  border-radius: 2px; 
  outline: none;
  padding: 20px;
  display: block;
  width: 300px;
  border-radius: 3px;
  border: 1px solid #eee;
  margin: 10px auto;
  cursor: pointer;
  background:#FFFFFF url('data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2211%22%20height%3D%2211%22%20viewBox%3D%220%200%2011%2011%22%3E%3Cpath%20d%3D%22M4.33%208.5L0%201L8.66%201z%22%20fill%3D%22%2300AEA9%22%2F%3E%3C%2Fsvg%3E') right 13px center no-repeat; 
} 
  
.selectWrapper select { 
  padding: 12px 50px 12px 20px; 
  font-size: 12px; 
  line-height: 10px; 
  width: 100%; 
  border: none; 
  box-shadow: none; 
  background: transparent; 
  background-image: none; 
  -webkit-appearance: none; 
  outline: none; 
  cursor: pointer; 
  -moz-appearance: none; 
  text-indent: 0.01px; 
  text-overflow: ellipsis; 
} 
  </style>
  <title>Registrarse</title>
</head>
<body>
<br><br>    <h1>Crear cuenta</h1>
{!! Form::open(['route' => 'users.store', 'method' => 'POST' ]) !!}
<div class="contailer-floid">

      <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo', 'required']) !!}
      </div>

      <div class="form-group">  
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese la clave', 'required']) !!}
      </div>
      
      <div class="selectWrapper" style="text-align:center;">
        {!! Form::select('type', ['' => 'elige una', 'member' => 'miembro' , 'admin' => 'administrador'], null, ['class' => 'custom-select'] ) !!}
      </div>
</div>
<br>
     <div class="form-group">
        {!! Form::submit('registrar', ['class' => 'btn btn-primary']) !!}
      </div>
{!! Form::close() !!}

<!--
<a href="">Olvide mi contraseña</a> 
-->
<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>

</body>
</html>