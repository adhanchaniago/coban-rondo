@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Program <small></small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('program.index')}}">Data Program</a></li>
          <li class="active">Detail Program</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Program</h3>
              <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{route('program.edit', $data_program->id_program)}}"><i class="fa fa-pencil"></i> Edit</a>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="nama_program">Nama Program</label>
                    <input type="text" class="form-control" name="nama_program" value="{{$data_program->nama_program}}" readonly>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="durasi">Durasi</label>
                    <input type="text" class="form-control" name="durasi" value="{{$data_program->durasi}}" readonly>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="hargapax">Harga/Pax</label>
                    <input type="text" class="form-control" name="hargapax" value="{{$data_program->hargapax}}" readonly>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="minimalpax">Minimal/Pax</label>
                    <input type="text" class="form-control" name="minimalpax" value="{{$data_program->minimalpax}}" readonly>
                  </div>                 
                </div>  
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Data Fasilitas dan Keterangan</h3>
                <div class="pull-right">
                    <a href="{{route('fasilitas.create', ['id_program' => $data_program->id_program])}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Fasilitas</a>
                    <a href="{{route('keterangan.create', ['id_program' => $data_program->id_program])}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Keterangan</a>    
                </div>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
                <div class="box-body">   
                  <div class="col-xs-6">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>Nama Fasilitas</th>
                            <th>Quantity</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data_program->fasilitas as $fasilitas)
                        <tr>
                          <td>{{$fasilitas->nama_fasilitas}}</td>
                          <td>{{$fasilitas->quantity_fasilitas}}</td>
                          <td>
                            <a class="btn btn-primary btn-sm" href="{{route('fasilitas.edit', $fasilitas->id_fasilitas)}}"><i class="fa fa-pencil"></i> Edit</a>
                          </td>
                          <td>                          
                            <form class="delete" action="{{ route('fasilitas.destroy', $fasilitas->id_fasilitas) }}" method="POST">
                              {{ method_field('DELETE') }} {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{-- /. table --}}
                  </div>
                  <div class="col-xs-6">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>Nama Keterangan</th>
                            <th>Quantity</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data_program->keterangan as $keterangan)
                        <tr>
                          <td>{{$keterangan->nama_ket}}</td>
                          <td>{{$keterangan->quantity_ket}}</td>
                          <td>
                            <a class="btn btn-primary btn-sm" href="{{route('keterangan.edit', $keterangan->id_ket)}}"><i class="fa fa-pencil"></i> Edit</a>
                          </td>
                          <td>                          
                            <form class="delete" action="{{ route('keterangan.destroy', $keterangan->id_ket) }}" method="POST">
                              {{ method_field('DELETE') }} {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{-- /. table --}}
                  </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('js-script')
  <!-- jQuery 3 -->
  <script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- DataTables -->
  <script src="{{url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('dist/js/demo.js')}}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable({
          'paging'      : false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false
      })
      $('#example2').DataTable({
          'paging'      : false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false
      })
    })

    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    }); 

  </script>
@endsection