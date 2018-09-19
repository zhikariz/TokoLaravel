@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Buku</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" action="/admin/buku" method="post">
                 {{csrf_field()}}
             <div class="box-body">
               <div class="form-group">
                 <label >Nama Buku</label>
                 <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku">
               </div>
               <div class="form-group">
                 <label>Pengarang</label>
                 <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang">
               </div>
               <div class="form-group">
                 <label>Penerbit</label>
                 <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Nama Pengarang">
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
