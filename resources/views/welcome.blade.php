<h2>Formulario de contacto</h2>
<form action="{{ route('enviar') }}" method="POST">
     {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombres</label>
        <input name="nombres" type="text">
       
    </div>

    <div class="form-group">
         <label for="name">apellidos</label>
        <input name="apellidos" type="text">
    </div>

     <div class="form-group">
         <label for="name">dia</label>
        <input name="dia" type="text">
    </div>

     <div class="form-group">
        <label for="name">mes</label>
        <input name="mes" type="text">
    </div>


    <div class="form-group">
        <label for="name">año</label>
        <input name="anio" type="text">

    </div>
    
<div class="form-group">
       
 <label for="name">Lugar de origen</label>
        <input name="lugar" type="text">
    </div>


    <div class="form-group">
        <label for="name">email</label>
        <input name="email" type="text">

    </div>

    <div class="form-group">
     <label for="name">mensaje</label>
     <input name="mensaje" type="text">       
    </div>

    <div class="form-group">
        <button type="submit" id='btn-contact' class="btn">Enviar</button>
    </div>
</form>