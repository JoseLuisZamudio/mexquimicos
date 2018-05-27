@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
      <div class="container dark-grey-text mt-5">
        <a href="{{route('productos.create')}}" class="btn btn-outline-primary waves-effect btn-lg float-right">Agregar</a>

        <!--Table-->
<table class="table table-hover">

    <!--Table head-->
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Unidad</th>
            <th>Cantidad</th>
            <th>Precio Mayoreo</th>
            <th>Precio Menudeo</th>
            <th>Fecha Ingreso</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
      @foreach ($productos as $producto)
        <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->u_medida}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->precio_venta_mayoreo}}</td>
            <td>{{$producto->precio_vente_menudeo}}</td>
            <td>{{$producto->fecha_ingreso}}</td>
            <td>
              <img src="{{asset('images/products')}}/{{$producto->imagen}}"
              class="avatar mx-auto white" alt="User Image" style="width: 100%"></td>
            <td>
              <a class="btn btn-info btn-sm"
                 href="{{route('productos.edit', $producto->id)}}">Editar</a>
              <form style="display: inline"
                    method="POST"
                    action="{{route('productos.destroy',$producto->id)}}">
                  {!! csrf_field() !!}
                  {!! method_field('DELETE') !!}
                  <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
              </form>
            </td>
        </tr>
      @endforeach


    </tbody>
    <!--Table body-->

</table>
<!--Table-->
      </div>
  </main>


@endsection
