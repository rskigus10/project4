@extends('template.base')
@section('content')
<section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>Detail Data Produk</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
                <h3>{{$produk->nama}}</h3>
                <hr>
                <p> Rp. {{number_format($produk->harga)}} |
                    stok : {{$produk->stok}}
                    Berat : {{$produk->berat}} gr |
                    Seller : {{$produk->seller->username}}
                </p>
                <p>
                    {{!! nl2br($produk->deskripsi) !!}}
                </p>
              </div>
          </div>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
@endsection