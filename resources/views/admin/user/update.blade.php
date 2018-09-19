@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create User</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" class="" action="/admin/user/{{ $user->id }}/update" method="post">
                {{csrf_field()}}
             <div class="box-body">
               <div class="form-group">
                 <label>Name</label>
                 <input type="text" name="nama" class="form-control" value="{{ $user->name }}" placeholder="Masukkan Nama">
               </div>
               <div class="form-group">
                 <label>Email</label>
                 <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Masukkan Email">
               </div>
               <div class="form-group">
                 <label>Password</label>
                 <input type="password" name="password" class="form-control" value="" placeholder="Masukkan Password">
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
