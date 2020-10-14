@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit Client <small></small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('penawaran.index')}}">Data Penawaran</a></li>
          <li><a href="{{route('penawaran.show', $client->penawaran['id_penawaran'])}}">Detail Penawaran</a></li>
          <li class="active">Edit Client</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- form start -->
        <form action="{{ route('client.update', $client->id_client) }}" method="POST">
            {{ method_field('PUT') }} {{ csrf_field() }}
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Client</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="nama_client">Nama Client</label>
                    <input type="text" class="form-control" name="nama_client" value="{{$client->nama_client}}">
                  </div>
                  <div class="form-group">
                    <label for="tgllahir_client">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgllahir_client" value="{{$client->tgllahir_client}}">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$client->alamat}}">
                  </div>
                  <div class="form-group">
                    <label for="tlp_client">Nomor Telephone</label>
                    <input type="tel" class="form-control" name="tlp_client" value="{{$client->tlp_client}}">
                  </div>                  
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="instansi">Instansi</label>
                    <select name="instansi" class="form-control">
                      <option value="">Pilih Instansi</option>
                      <option value="pendidikan">Pendidikan</option>
                      <option value="pemerintah">Pemerintah</option>
                      <option value="swasta">Swasta</option>
                      <option value="biro travel">Biro Travel</option>
                      <option value="komunitas">Komunitas</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" name="email" value="{{$client->email}}">
                  </div>
                  <div class="form-group">
                    <label for="web">Website</label>
                    <input type="url" class="form-control" name="web" value="{{$client->web}}">
                  </div>                  
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="pic">PIC</label>
                    <input type="text" class="form-control" name="pic" value="{{$client->pic}}">
                  </div>
                  <div class="form-group">
                    <label for="cp">Contact Person</label>
                    <input type="tel" class="form-control" name="cp" value="{{$client->cp}}">
                  </div>
                  <div class="form-group">
                    <label for="cr">Contract Rate</label>
                    <select name="cr" class="form-control">
                      <option value="">Pilihan</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>                  
                </div>
              </div>
              <div class="box-footer">
                  <div class="col-md-4"></div>
                  <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-block">Submit</button>                
                  </div>
                  <div class="col-md-2">
                      <a href="{{route('penawaran.show', $client->penawaran['id_penawaran'])}}" class="btn btn-danger btn-block">Cancel</a>                
                  </div>
              </div>

            </div>
          <!-- /.box -->

          </form>

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