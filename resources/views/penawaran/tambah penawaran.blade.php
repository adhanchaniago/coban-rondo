@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Penawaran <small></small></h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('penawaran.index')}}">Data Penawaran</a></li>
          <li class="active">Tambah Penawaran</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- form start -->
            <form action="{{route('penawaran.store')}}" method="post">
              {{ csrf_field() }}
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Client</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="nama_client">Nama Client</label>
                    <input type="text" class="form-control" name="nama_client" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group">
                    <label for="tgllahir_client">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgllahir_client">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Jl. Sido Damai">
                  </div>
                  <div class="form-group">
                    <label for="tlp_client">Nomor Telephone</label>
                    <input type="tel" class="form-control" name="tlp_client" placeholder="628123456789">
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
                    <input type="email" class="form-control" name="email" placeholder="cobanrondo@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="web">Website</label>
                    <input type="url" class="form-control" name="web" placeholder="https://cobanrondo.com">
                  </div>                  
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="pic">PIC</label>
                    <input type="text" class="form-control" name="pic" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group">
                    <label for="cp">Contact Person</label>
                    <input type="tel" class="form-control" name="cp" placeholder="628123456789">
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
          </div>
          <!-- /.box -->

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penawaran</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="id_sales">Nama Sales</label>
                    <select name="id_sales" class="form-control">
                      <option value="">Pilih Sales</option>
                      @foreach($data_sales as $sales)
                        <option value="{{$sales->id_sales}}">{{$sales->nama_sales}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="id_program">Nama Program</label>
                    <select name="id_program" class="form-control">
                      <option value="">Pilih Program</option>
                      @foreach($data_program as $program)
                        <option value="{{$program->id_program}}">{{$program->nama_program}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="tgl_penawaran">Tanggal Penawaran</label>
                    <input type="date" class="form-control" name="tgl_penawaran">
                  </div>
                  <div class="form-group">
                    <label for="tgl_pelaksanaan">Tanggal Pelaksanaan</label>
                    <input type="date" class="form-control" name="tgl_pelaksanaan">
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label for="media">Media</label>
                    <select name="media" class="form-control">
                      <option value="">Pilih Media</option>
                      <option value="email">E-mail</option>
                      <option value="sales_call">Sales Call</option>
                      <option value="call">Call</option>
                      <option value="pos">Pos</option>
                      <option value="stop by">Stop by</option>
                    </select>
                  </div>                 
                  <div class="form-group">
                    <label for="mp">Metode Pembayaran</label>
                    <select name="mp" class="form-control">
                      <option value="">Pilih Metode</option>
                      <option value="cash">Cash</option>
                      <option value="credit_card">Credit Card</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>                
                </div>
                <div class="col-md-2">
                    <a href="{{route('penawaran.index')}}" class="btn btn-danger btn-block">Cancel</a>                
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