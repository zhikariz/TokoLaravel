@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Transaksi</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" action="/admin/transaksi/{{ $transaksi->id }}/update" method="post">
                {{csrf_field()}}
             <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">Pilih Buku</label>
                 <select class="form-control" name="kode_buku">
                    @foreach ($buku as $bukus)
                      <option value="{{ $bukus->id }}">{{ $bukus->nama_buku }}</option>
                    @endforeach
                 </select>
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">Jumlah</label>
                 <input type="jumlah" class="form-control" value ="{{ $transaksi->jumlah }}" placeholder="Password">
               </div>
             </div>
             <!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
           </form>
         </div>
         <!-- /.box -->

@endsection
