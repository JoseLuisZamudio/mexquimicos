@extends('layouts.app')

@section('content')


  <!--Main Navigation-->
  <header>


    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://picsum.photos/1080/700/?random); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-white-light">
          <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="row pt-5 mt-3">
              <div class="col-md-12 mb-3">
                <div class="intro-info-content text-center">
                  <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">NUEVOS
                    <a class="indigo-text font-weight-bold">PRODUCTOS</a>
                  </h1>
                  <h5 class="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">ENTREGA GRATUITA Y PRECIOS ESPECIALES</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  <main>

      <div class="container">

        <!--Section: Products v.3-->
        <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

          <!--Section heading-->
          <h1 class="section-heading h1 pt-4">Nuestros Productos</h1>
          <!--Section description-->
          <p class="section-description mb-5 pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse
            quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

          <!--Grid row-->
          <div class="row">

            @foreach ($productos as $producto)
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4">

                <!--Card-->
                <div class="card card-ecommerce">

                  <!--Card image-->
                  <div class="view overlay z-depth-1">
                    <img src="{{asset('images/products')}}/{{$producto->imagen}}" class="card-img-top" alt="">
                    <a href="{{ route('productos.show',$producto->id) }}">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5></h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="{{ route('productos.show',$producto->id) }}">{{$producto->nombre}}</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">${{$producto->precio_vente_menudeo}}
                        <span class="discount">${{$producto->precio_venta_mayoreo}}</span>
                      </span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>
              <!--Grid column-->
            @endforeach



          </div>
          <!--Grid row-->

        </section>
        <!--Section: Products v.3-->


      </div>

      <!-- Streak Section -->
      <div class="streak streak-photo" style="background-image:url('http://mdbootstrap.com/img/Photos/Others/dress.jpg')">

        <div class="flex-center white-text pattern-1" style="background-attachment: f">
          <ul class="list-unstyled">
            <li>
              <h1 class=" white-text">
                <strong>500+</strong> happy customers</h1>
            </li>

          </ul>
        </div>

      </div>
      <!-- /.Streak Section -->

      <div class="container">



      </div>

    </main>
    <!--Main Layout-->
@endsection
