@extends('layoutadmin.app')


@section('content')
    <section class="content-header">
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
            <form method="post" action="/sp/store" class="form-horizontal">
              {{ csrf_field() }}

                <table width="50%">
                  <tr>
                    <td class="col-sm-5" id="iya">No. SP</td>
                    <td><?php echo "<font color='white'>...</font>"; ?></td>
                    <td><input type="text" name="no" class="form-control" placeholder="No. Surat Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Kode SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="kode" class="form-control" placeholder="Kode Surat Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Tahun SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tahun" class="form-control" id="datepicker3">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Perusahaan</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="instansi" class="form-control" placeholder="Perusahaan"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Judul Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="judul" class="form-control" placeholder="Judul Perjanjian"></textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Kategori</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                        <select class="form-control" name="id_kategori">
                          <option></option>
                          @foreach($kategori as $k)
                          <option value=" {{ $k->id }} "> {{ $k->kategori_sp }} </option>
                          @endforeach
                        </select>
                    </td>
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
      </div>
    </section>
@endsection 