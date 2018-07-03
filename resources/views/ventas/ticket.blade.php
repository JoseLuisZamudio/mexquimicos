

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <style>
        * {
  font-size: 12px;
  
}
 
td,
th,
tr,
table {
  border-top: 1px solid black;
  border-collapse: collapse;
}
 
td.producto,
th.producto {
  width: 75px;
  max-width: 75px;
}
 
td.cantidad,
th.cantidad {
  width: 40px;
  max-width: 40px;
  word-break: break-all;
}
 
td.precio,
th.precio {
  width: 40px;
  max-width: 40px;
  word-break: break-all;
}
 
.centrado {
  text-align: center;
  align-content: center;
}
 
.ticket {
  width: 155px;
  max-width: 155px;
}
 
img {
  max-width: inherit;
  width: inherit;
}
@media print{
  .oculto-impresion, .oculto-impresion *{
    display: none !important;
  }
}
    </style>
</head>
<body >
  <div class="main main-raised ">
            <div class="container">
                
                <div class="section col-md-offset-4">
                        <hr>
                        
                            <p>Ticket</p>
                            <div class="ticket">
                              <img src="https://yt3.ggpht.com/-3BKTe8YFlbA/AAAAAAAAAAI/AAAAAAAAAAA/ad0jqQ4IkGE/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Logotipo">
                                <p class="centrado">TICKET DE VENTA<br>MEXQUIMICOS.<br></p>
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Fecha de pedido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sum = 0; ?>
                                    @foreach ($cart as $key => $venta)
                                        {{-- expr --}}
                                    <tr>
                                      <th scope="row">{{$venta->id}}</th>
                                      <td>{{$venta->nombre}}</td>
                                      <td>{{$venta->precio}}</td>
                                      <td>{{$venta->cantidad}}</td>
                                      <td>{{$venta->cantidad * $venta->precio}}</td>
                                      <td>{{$venta->created_at}}</td>
                                       <?php $sum += $venta->cantidad * $venta->precio; ?>
                                    </tr>
                                    @endforeach
                                    <tr>
                                      <td></td>
                                      <td>TOTAL</td>
                                      <td>{{ $sum }}</td>
                                    </tr>


                                    
                                </tbody>
                            </table> 
                            </div>
                            

                            <div class="text-center">
                                
                                    <button class="btn btn-primary btn-round oculto-impresion" onclick="imprimir()">
                                       Imprimir ticket
                                    </button>
                                    <a href="{{ url('/home') }}" class="btn btn-primary btn-round oculto-impresion">Regresar</a>
                               
                                
                            </div>
                        
                   
                </div>

            </div>

        </div>
    <script>
    function imprimir() {
  window.print();
}
</script>

</body>
</html>