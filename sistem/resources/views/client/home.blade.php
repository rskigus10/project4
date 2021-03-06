@extends('client.base')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                            <label for="" class="control-label">Provinsi</label>
                                <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                    <option value="">Pilih Provinsi Am lok</option>
                                    @foreach($list_provinsi as $provinsi)
                                        <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                            <label for="" class="control-label">Kabupaten/Kota</label>
                                <select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                    <option value="">Pilih Kabupaten lah lok!!!</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                            <label for="" class="control-label">Kecamatan</label>
                                <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                    <option value="">Pilih Kecamatan lah lok!!!</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                            <label for="" class="control-label">Desa</label>
                                <select name="" class="form-control" id="desa">
                                    <option value="">Pilih Desa lah lok!!!</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="card-body">
        <div class="row">
            @foreach($list_produk as $item)
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <div class="card-header">
                           <p> {{$item->nama}} </p>
                            <img src="{{url("public/$item->foto")}}" alt="" style="width : 120px; height : 120px;">
                        </div>
                        <div class="card-body">
                            {{$item->deskripsi}}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center">
                        {{$list_produk->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        function gantiProvinsi(id){
            $.get("api/provinsi/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kabupaten").html(option)
            });
        }

        function gantiKabupaten(id){
            $.get("api/kabupaten/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }

        function gantiKecamatan(id){
            $.get("api/kecamatan/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
@endpush