@extends('../layouts/frontend')

@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Buku ku
            </h1>
            <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/list"> List Buku</a></p>
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
            <h1 class="pb-10">Buku yang Pernah Saya Beli</h1>

          </div>
        </div>
        <div class="row">

            @foreach ($buku as $bukus)


            <div class="single-product">
              <div class="thumb">
                <img src="../user/img/p1.png" alt="">
              </div>
              <div class="details">
                <h4>{{ $bukus->nama_buku }}</h4>
                <p>
                  Pengarang {{ $bukus->pengarang }}<br/>
                  Penerbit {{ $bukus->penerbit }}
                </p>
              </div>
            </div>
                    @endforeach
          {{-- </div> --}}
        </div>











        </div>
      </div>
    </section>
    <!-- End products Area -->
@endsection
