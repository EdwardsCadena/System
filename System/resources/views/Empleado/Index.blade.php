<div class="container">
    <div class="row">
        <div class="col-md-9">
            <table class="table table-bordered table-condensend" >
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Modifiacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </tr>
                @foreach($usuarios as $usu)
                <tr>
                    <td>{{$usu->idusuarios}}</td>
                    <td>{{$usu->nombre}}</td>
                    <td>{{$usu->apellido}}</td>
                    <td>{{$usu->correo}}</td>
                    <td>{{$usu->created_at}}</td>
                    <td>{{$usu->updated_at}}</td>
                    <td>
                        <form action="{{route('usuarios.edit',$usu->idusuarios)}}">
                        
                            <button class="btn btn-sm btn-info">Editar</button>
                            
                        </form>
                    </td>
                    <td>
                        <form action="{{route('usuarios.destroy',$usu->idusuarios)}}"  method="POST" >
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                            <!--<input type="hidden" value="{{$usu->idusuarios}}">-->

                        </form>
                    </td>
                </tr>
                @endforeach

                
            </table>               
            <a href="s">ir Productos</a>
        </div>  
        <div class="col-md-3">
            <h2>Crear Usuarios</h2>
            <form action="{{route('empleado.store')}}" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Example" >
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Example">
                </div>
                <div class="form-group">
                    <label for="Empresa">Empresa:</label>
                    <input type="text" id="Empresa" name="Empresa" placeholder="example">
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" value="{{$editar->correo}}">
                </div>
                <div class="form-group">
                    <label for="Telefono">Telefono:</label>
                    <input type="number" id="Telefono" name="Telefono" placeholder="example">
                </div>
                <br>
                <button class="btn btn-sm btn-primary" >Registrar</button>
               
            </form>
        </div>
     </div>
</div>
