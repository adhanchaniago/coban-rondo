@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Penawaran</h1>
      <ol class="breadcrumb">
          <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{route('penawaran.index')}}">Data Penawaran</a></li>
          <li class="active">Detail Penawaran</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-xs-12">
           <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Data Penawaran</h3>
                <div class="pull-right">
                  <div class="col-sm-4">
                      @if(($penawaran->dealing == null))
                      <a href="{{route('dealing.create', $penawaran->id_penawaran)}}" class="btn btn-success btn-sm">DEAL</a> 
                      @endif
                  </div>
                  <div class="col-sm-4">
                    <form id="delete-penawaran" action="{{ route('penawaran.destroy', $penawaran->id_penawaran) }}" method="POST">
                      {{ method_field('DELETE') }} {{ csrf_field() }}
                      <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                  </div>
                  <div class="col-sm-4">
                     <a href="{{route('penawaran.edit', $penawaran->id_penawaran)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a> 
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
                <div class="box-body">
                  <div class="col-xs-4">
                    <div class="form-group">
                      <label for="id_sales">Nama Sales</label>
                      <input type="text" class="form-control" name="id_sales" value="{{$penawaran->sales->nama_sales}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="id_program">Nama Program</label>
                      <input type="text" class="form-control" name="id_program" value="{{$penawaran->program->nama_program}}" readonly>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="form-group">
                      <label for="tgl_penawaran">Tanggal Penawaran</label>
                      <input type="text" class="form-control" name="tgl_penawaran" value="{{$penawaran->tgl_penawaran}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="tgl_pelaksanaan">Tanggal Pelaksanaan</label>
                      <input type="text" class="form-control" name="tgl_pelaksanaan" value="{{$penawaran->tgl_pelaksanaan}}" readonly>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="form-group">
                      <label for="media">Media</label>
                      <input type="text" class="form-control" name="media" value="{{$penawaran->media}}" readonly>
                    </div>                 
                    <div class="form-group">
                      <label for="mp">Metode Pembayaran</label>
                      <input type="text" class="form-control" name="mp" value="{{$penawaran->mp}}" readonly>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Data Client</h3>
                <div class="pull-right">
                    <a href="{{route('client.edit', $penawaran->client->id_client)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a> 
                </div>
              </div>
              <!-- /.box-header -->
                <div class="box-body">
                  <div class="col-xs-4">
                    <div class="form-group">
                      <label for="nama_client">Nama Client</label>
                      <input type="text" class="form-control" name="nama_client" value="{{$penawaran->client->nama_client}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="tgllahir_client">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tgllahir_client" value="{{$penawaran->client->tgllahir_client}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{$penawaran->client->alamat}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="tlp_client">Nomor Telephone</label>
                      <input type="text" class="form-control" name="tlp_client" value="{{$penawaran->client->tlp_client}}" readonly>
                    </div>                  
                  </div>
                  <div class="col-xs-4">
                    <div class="form-group">
                      <label for="instansi">Instansi</label>
                      <input type="text" class="form-control" name="instansi" value="{{$penawaran->client->instansi}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="email">E-Mail</label>
                      <input type="text" class="form-control" name="email" value="{{$penawaran->client->email}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="web">Website</label>
                      <input type="text" class="form-control" name="web" value="{{$penawaran->client->web}}" readonly>
                    </div>                  
                  </div>
                  <div class="col-xs-4">
                    <div class="form-group">
                      <label for="pic">PIC</label>
                      <input type="text" class="form-control" name="pic" value="{{$penawaran->client->pic}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="cp">Contact Person</label>
                      <input type="text" class="form-control" name="cp" value="{{$penawaran->client->cp}}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="cr">Contract Rate</label>
                      <input type="text" class="form-control" name="cr" value="{{$penawaran->client->cr}}" readonly>
                    </div>                  
                  </div>
                </div>
            </div>
            <!-- /.box -->

            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Follow Up</h3>
                  @if(($penawaran->dealing == null))
                    <a href="{{route('followup.create', ['id_penawaran' => $penawaran->id_penawaran])}}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Tambah Follow Up</a>
                  @endif
                </div>
                <!-- /.box-header -->
                  <div class="box-body">
                      <table id="example1" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                              <th>Tanggal Follow Up</th>
                              <th>Nama Sales</th>
                              <th>Nama Responden</th>
                              <th>Respon</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($penawaran->followup as $followup)
                            <tr>
                              <td>{{$followup->tgl_followup}}</td>
                              <td>{{$followup->sales['nama_sales']}}</td>
                              <td>{{$followup->responden}}</td>
                              <td>{{$followup->respon}}</td>
                              <td>
                                  <a class="btn btn-primary btn-sm" href="{{route('followup.edit', $followup->id_followup)}}"><i class="fa fa-pencil"></i> Edit</a>
                              </td>
                              <td>                          
                                <form id="delete-followup" action="{{ route('followup.destroy', $followup->id_followup) }}" method="POST">
                                  {{ method_field('DELETE') }} {{ csrf_field() }}
                                  <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                              </td>      
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                          <tr>
                              <th>Tanggal Follow Up</th>
                              <th>Nama Sales</th>
                              <th>Nama Responden</th>
                              <th>Respon</th>
                              <th>Action</th>
                          </tr>
                          </tfoot>
                        </table>
                        {{-- /. table --}}
                  </div>
            </div>
            <!-- /.box -->

            @if(($penawaran->dealing != null))
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Dealing</h3>
                </div>
                <!-- /.box-header -->
                  <div class="box-body">
                      <table id="example1" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                              <th>Nama Sales</th>
                              <th>Tanggal LKO</th>
                              <th>Edit</th>
                              <th>Hapus</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>{{$penawaran->dealing->sales->nama_sales}}</td>
                              <td>{{$penawaran->dealing->tgl_LKO}}</td>
                              <td>
                                  <a class="btn btn-primary btn-sm" href="{{route('dealing.edit', $penawaran->dealing->id_dealing)}}"><i class="fa fa-pencil"></i> Edit</a>
                              </td>
                              <td>                          
                                <form id="delete-dealing" action="{{ route('dealing.destroy', $penawaran->dealing->id_dealing) }}" method="POST">
                                  {{ method_field('DELETE') }} {{ csrf_field() }}
                                  <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                              </td>      
                            </tr>
                          </tbody>
                          <tfoot>
                          <tr>
                              <th>Nama Sales</th>
                              <th>Tanggal LKO</th>
                              <th>Edit</th>
                              <th>Hapus</th>
                          </tr>
                          </tfoot>
                        </table>
                        {{-- /. table --}}
                  </div>
            </div>
            <!-- /.box -->
            @endif

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
      $('#example1').DataTable({
          'paging'      : false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false
      })

    $("#delete-penawaran").on("submit", function(){
        return confirm("Do you want to delete this item?");
    }); 

    $("#delete-followup").on("submit", function(){
        return confirm("Do you want to delete this item?");
    }); 

    $("#delete-dealing").on("submit", function(){
        return confirm("Do you want to delete this item?");
    }); 

  </script>
@endsection