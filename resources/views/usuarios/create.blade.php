@include('usuarios.main')
<h2>Nuevo usuario</h2>
<br>

<form action="{{ url('/usuarios')}}" method="post">
{{ csrf_field() }}
@include('usuarios.formulario', ['Modo'=>'crear'])
    <input type="submit"  value="Agregar" class="btn btn-primary">
</form>
<a href="{{ url('usuarios')}}" class="btn btn-danger">Cancelar</a>