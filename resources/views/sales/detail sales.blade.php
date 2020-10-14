@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Sales <small></small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('sales.index')}}">Data Sales</a></li>
          <li class="active">Detail Sales</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-4">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penawaran</h3>
              <label class="btn btn-danger btn-sm pull-right">{{$sales->penawaran->count()}} penawaran</label>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Tanggal Penawaran</th>
                        <th>Detail Penawaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sales->penawaran as $penawaran)
                    <tr>
                      <td>{{$penawaran->tgl_penawaran}}</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="{{route('penawaran.show', $penawaran->id_penawaran)}}"><i class="fa fa-eye"></i> Detail</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{-- /. table --}}
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Follow Up</h3>
              <label class="btn btn-warning btn-sm pull-right">{{$sales->followup->count()}} follow up</label>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Tanggal Follow Up</th>
                        <th>Detail Follow Up</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sales->followup as $followup)
                    <tr>
                      <td>{{$followup->tgl_followup}}</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="{{route('penawaran.show', $followup->id_penawaran)}}"><i class="fa fa-eye"></i> Detail</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{-- /. table --}}
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Dealing</h3>
              <label class="btn btn-success btn-sm pull-right">{{$sales->dealing->count()}} dealing</label>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Tanggal LKO</th>
                        <th>Detail Dealing</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sales->dealing as $dealing)
                    <tr>
                      <td>{{$dealing->tgl_LKO}}</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="{{route('penawaran.show', $dealing->id_penawaran)}}"><i class="fa fa-eye"></i> Detail</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{-- /. table --}}
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
      $('#example3').DataTable({
          'paging'      : false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false
      })      
    })

  </script>
@endsection