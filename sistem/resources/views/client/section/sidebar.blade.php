
        <ul class="list-group list-group-flush p-5 pt-3">
          <li class="list-group-item bg-success"><i class="fas fa-list"></i> Kategory</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Gitar Acoustic</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Gitar listrik</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Violin Acousttic</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Violin Listrik</li>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> Piano</li>
        </ul>
        <div class="card">
                <div class="card-header">
                    Filter
                </div>
                <div class="div card-body">
                  <form action="{{url('client/produk/filter')}}" method="post">
                        @csrf
                      <div class="div form-group">
                        <label for="" class="control-lable">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                      </div>
                      <div class="div form-group">
                        <label for="" class="control-lable">Stok</label>
                        <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="" class="control-lable">Harga Min</label>
                          <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">  
                        </div>
                        <div class="col-md-6">
                          <label for="" class="control-lable">Harga Max</label>
                          <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">     
                        </div>
                      </div>
                      <button class="btn btn-dark float-right mt-2"><i class="fa fa-search"></i> Filter</button> 
                  </form>
                </div>
              </div>