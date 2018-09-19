@extends('../layouts/backend')
@section('content')
  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>

        <a href="buku/create" class="btn btn-info btn-md pull-right"><i class="fa fa-plus"> Tambah</i> </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>

            @foreach($buku as $data)
                      <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama_buku }}</td>
            <td>{{ $data->pengarang }}</td>
            <td> {{ $data->penerbit }}</td>
            <td><a href="buku/{{ $data->id }}/edit" class="btn btn-xs btn-warning">Edit</a> <form class="" action="buku/{{$data->id}}" method="post">
                {{ csrf_field() }}
                 {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-xs btn-danger" name="button" onclick="confirm('Yakin ingin menghapus ?')">  Delete</button>
              </form></td>
                        </tr>
          @endforeach

          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
@endsection

@section('css')
  <!-- DataTables -->
<link rel="stylesheet" href="{{URL::asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('js')
  <!-- DataTables -->
  <script src="{{URL::asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{URL::asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
