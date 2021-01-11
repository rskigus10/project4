@extends('client.base')
@section('content')
              <div class="card-body">
                <table class="table table-datatable">
                  <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                  </thead>
                  <tbody>
                    @foreach($list_produk as $produk)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$produk->nama}}</td>
                      <td>{{$produk->harga}}</td>
                      <td>{{$produk->stok}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$list_produk->links()}}
              </div>
              @endsection