@include('usuarios.main')
<h2>Editar usuario</h2>
<form action="{{ url('/usuarios/' .$usuario->id) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('usuarios.formulario', ['Modo'=>'editar'])

    
    <input type="submit" value="Editar" class="btn btn-primary">
</form>
<a href="{{ url('usuarios')}}" class="btn btn-danger">Cancelar</a>