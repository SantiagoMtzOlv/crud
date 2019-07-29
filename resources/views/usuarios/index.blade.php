@include('usuarios.main')
<a href="{{ url('usuarios/create')}}" class="btn btn-primary">Agregar usuario</a>
<div class="container">
<table class="table table-light">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>A. paterno</th>
            <th>A. materno</th>
            <th>Edad</th>
            <th>Calle</th>
            <th>Colonia</th>
            <th>Delegacion</th>
            <th>Numero</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
           <td><p>{{$loop->iteration}}</p></td>
           <td><p>{{ $usuario->nombre}}</p></td>
           <td>{{ $usuario->ape_paterno}}</td>
           <td>{{ $usuario->ape_materno}}</td>
           <td>{{ $usuario->edad}}</td>
           <td>{{ $usuario->calle}}</td>
           <td>{{ $usuario->colonia}}</td>
           <td>{{ $usuario->delegacion}}</td>
           <td>{{ $usuario->numero}}</td>
           <td><a href="{{ url('/usuarios/'.$usuario->id.'/edit') }}" class="btn btn-success">EDITAR</a>
           <form action="{{ url('/usuarios/'. $usuario->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-warning">Borrar</button>
            </form>
           </td>
           
        </tr>
        @endforeach
    </tbody>
</table>

</div>
