@extends('layouts.frontend')
@section('content')
<section class="banner-area" id="home">
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
      <div class="banner-content col-lg-6 col-md-6">
        <h1>
          Search <br>
          Choose <br>
          Buy
        </h1>
        <p class="text-white text-uppercase">
          Everyone wants the innovation through books
        </p>
      </div>
      <div class="banner-img col-lg-6 col-md-6">
        <img class="img-fluid" src="https://tam.r.worldssl.net/wp-content/uploads/2017/06/best-books-for-men.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<section class="products-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 pb-40 header-text text-center">
        <h1 class="pb-10">Featured Books to Show</h1>
        <p>
          Who are in extremely love with books.
        </p>
      </div>
    </div>
    <div class="row">
      {{-- <div class="col-lg-3 col-md-6"> --}}

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
      {{-- </div> --}}
    </div>
  </div>
</section>
@endsection
