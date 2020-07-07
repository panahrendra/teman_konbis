@extends('layoutsadmin.app')


@section('content')
    <section class="content-header">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
      
      <h1>
        TAMBAH SURAT PERJANJIAN
        <br><small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <style type="text/css">
      #iya{
        font-weight: 800;
      }
    </style>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
            <a href="/sp"><button type="submit" class="btn btn-info">KEMBALI</button></a>
        </div>
          <div class="box-body">
            <!-- /.box-header -->
            <form method="post" action="/sp/store2" class="form-horizontal" id="">
              {{ csrf_field() }}
                <table width="50%">
                  <input type="hidden" name="id_sp" class="form-control" value="{{ $tbl_sp->id }}">

                  <tr>
                    <td class="col-sm-2" id="iya">Jenis ASET / JASA</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td class="form-group w-100">
                      <select name="id_aset[]" multiple data-style="bg-white text-black" id="id_aset" class="selectpicker" style="border: 1px;">
                        @foreach($tbl_aset as $ta)
                          <option value="{{ $ta->id }}">{{ $ta->keterangan }}</option>
                        @endforeach
                      </select>
                        {{-- <select id="id_aset" class="form-control" name="id_aset">
                          <option></option>		
                          @foreach($tbl_aset as $ta)
                            <option value="{{ $ta->id }}">{{ $ta->keterangan }}</option>
                          @endforeach
                        </select> --}}
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Jenis SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                    	<select class="form-control" name="jenis">
                          <option></option>
                          <option>Induk</option>
                          <option>Addendum 1</option>
                          <option>Addendum 2</option>
                          <option>Addendum 3</option>
                          <option>Addendum 4</option>
                          <option>Addendum 5</option>
                        </select>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Objek SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="objek_sp" class="form-control" placeholder="Objek SP"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Tanggal Mulai</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_mulai" class="form-control" id="datepicker1">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Tanggal Akhir</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_selesai" class="form-control" id="datepicker2">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Nilai Fix</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="nilai_fix" class="form-control" placeholder="Nilai Fix"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Nilai Formula</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="nilai_formula" class="form-control" placeholder="Nilai Formula"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">History</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="history" class="form-control" placeholder="History"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Keterangan</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan"></textarea></td>
                  </tr>

                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><button type="submit" class="btn btn-info">SIMPAN</button></td>
                  </tr>
                </table>
            </form>
          </div>

        <div class="box-footer">
          Footer
        </div>

      </div>
      <script>
        $(function () {
          $('.selectpicker').selectpicker();
        });
      </script>
    </section>
@endsection 