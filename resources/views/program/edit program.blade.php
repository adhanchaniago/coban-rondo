@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit Program <small></small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('program.index')}}">Data Program</a></li>
          <li class="active">Edit Program</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-3">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Program</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form action="{{ route('program.update', $program->id_program) }}" method="POST">
                {{ method_field('PUT') }} {{ csrf_field() }}
              <div class="box-body">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="nama_program">Nama Program</label>
                    <input type="text" class="form-control" name="nama_program" value="{{$program->nama_program}}">
                  </div>
                  <div class="form-group">
                    <label for="durasi">Durasi</label>
                    <input type="text" class="form-control" name="durasi" value="{{$program->durasi}}">
                  </div>
                  <div class="form-group">
                    <label for="hargapax">Harga/Pax</label>
                    <input type="text" class="form-control" name="hargapax" value="{{$program->hargapax}}">
                  </div>
                  <div class="form-group">
                    <label for="minimalpax">Minimal/Pax</label>
                    <input type="text" class="form-control" name="minimalpax" value="{{$program->minimalpax}}">
                  </div>                 
                </div>  
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                <div class="col-sm-6">
                  <a href="{{route('program.show', $program->id_program)}}" class="btn btn-danger btn-block">Cancel</a>
                </div>
              </div>
            </form>
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