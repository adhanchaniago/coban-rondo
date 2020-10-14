@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Penawaran <small>{{$data_penawaran->count()}} orang</small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Penawaran</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-ban"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">No Followup</span>
              <span class="info-box-number">{{$jmlh['no_followup']}} penawaran</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Follow Up</span>
              <span class="info-box-number">{{$jmlh['followup']}} penawaran</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Dealing</span>
              <span class="info-box-number">{{$jmlh['dealing']}} penawaran</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          {{-- Harga Jeep Changed --}}
          {{-- Biru primary hijau success merah danger kuning warning --}}
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Penawaran</h3>
              <a href="{{route('penawaran.create')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Penawaran</a><br><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Tanggal Penawaran</th>
                    <th>Nama Sales</th>
                    <th>Nama Client</th>
                    <th>Nama Program</th>
                    <th>Jumlah Follow Up</th>
                    <th>Status Dealing</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($data_penawaran as $penawaran)
                  <tr>
                    <td>{{$penawaran->tgl_penawaran}}</td>
                    <td>{{$penawaran->sales->nama_sales}}</td>
                    <td>{{$penawaran->client->nama_client}}</td>
                    <td>{{$penawaran->program->nama_program}}</td>
                    <td>
                        <label class="btn btn-warning btn-sm">{{$penawaran->followup->count()}}</label>
                      @if($penawaran->dealing == null)
                        <a href="{{route('followup.create', $penawaran->id_penawaran)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Follow Up</a>
                      @endif
                    </td>
                    <td>
                      @if($penawaran->dealing == null)
                        <label class="btn btn-danger btn-sm">No</label>
                        <a href="{{route('dealing.create', $penawaran->id_penawaran)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Deal</a>
                      @else
                      <label class="btn btn-success btn-sm">Yes</label>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('penawaran.show', $penawaran->id_penawaran)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Tanggal Penawaran</th>
                    <th>Nama Sales</th>
                    <th>Nama Client</th>
                    <th>Nama Program</th>
                    <th>Jumlah Follow Up</th>
                    <th>Status Dealing</th>
                    <th>Detail</th>                    
                </tr>
                </tfoot>
              </table>
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
      $('#example1').DataTable()
    })

    // $(document).on('click', '.delete', function() {
    //   var id = $(this).data("id");
    //   var status = confirm("Are sure to delete it?");
    //   if(status){
    //     $.ajax({
    //       type: 'DELETE',
    //       url: '/admin/driver/'+id,
    //       headers : {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //       },
    //       success: function(data) {
    //         $('#driver-'+data.iddriver).remove();
    //         console.log("Sukses", data);
    //       },
    //       error: function(data){
    //         console.log(data);
    //       }
    //     });
    //   }
    // });  

  </script>
@endsection