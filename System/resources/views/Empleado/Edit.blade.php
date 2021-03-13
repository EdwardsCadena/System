<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Editar a {{$editar->nombre}} {{$editar->apellido}}</h2>
            <form action="{{route('empleado.update',$editar->IdEmpleado)}}" method="POST">
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
                <button class="btn btn-md btn-primary" >Editar</button>
                {{method_field('PUT')}}
            </form>
        </div>
     </div>
</div>
