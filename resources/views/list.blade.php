@extends('layouts.frontend')
@section('content')
  <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white">
            Products
          </h1>
          <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="products.html"> Products</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start products Area -->
  <section class="products-area product-page section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 pb-40 header-text text-center">
          <h1 class="pb-10">Featured Robotics Products to Show</h1>
          <p>
            Who are in extremely love with eco friendly system.
          </p>
        </div>
      </div>
      <div class="row">
        @foreach ($buku as $bukus)


        <div class="single-product">
          <div class="thumb">
            <img src="user/img/p1.png" alt="">
          </div>
          <div class="details">
            <h4>{{ $bukus->nama_buku }}</h4>
            <p>
              Pengarang {{ $bukus->pengarang }}<br/>
              Penerbit {{ $bukus->penerbit }}
            </p>
            @if (\Auth::user())
              <form class="" action="beli/{{$bukus->id}}" method="post">
                  {{ csrf_field() }}
                <button type="submit" class="btn btn-xs btn-danger" name="button">  Beli</button>
                </form>
            @endif

          </div>
        </div>
                @endforeach
      </div>
    </div>
  </section>
  <!-- End products Area -->
@endsection
