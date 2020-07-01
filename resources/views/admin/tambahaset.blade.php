@extends('layouts.app')


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
            <a href="/maset"><button type="submit" class="btn btn-info">KEMBALI</button></a>
        </div>
        <div class="box-body">
            <!-- /.box-header -->
          <form method="post" action="/sp/store3" class="form-horizontal">
            {{ csrf_field() }}
            <table width="50%">
              <tr>
                <td class="col-sm-5" id="iya">Unit Kerja</td>
                <td><?php echo "<font color='white'>...</font>"; ?></td>
                <td>
                  <select class="form-control" name="id_unit_kerja">
                    <option></option>
                    @foreach($tbl_uk as $ta)
                    <option value="{{ $ta->id }}">{{ $ta->unit_kerja }}</option>
                    @endforeach
                  </select>
                </td>
              </tr>
                
              <tr>
                <td><br></td>
              </tr>

              <tr>
                <td class="col-sm-5" id="iya">Jenis</td>
                <td><?php echo "<font color='white'>..</font>"; ?></td>
                <td>
                  <select class="form-control" name="aset">
                    <option></option>
                    <option>ASET</option>
                    <option>JASA</option>
                  </select>
                </td>
              </tr>
                
              <tr>
                <td><br></td>
              </tr>

              <tr>
                <td class="col-sm-5" id="iya">Lokasi</td>
                <td><?php echo "<font color='white'>..</font>"; ?></td>
                <td>
                  <select class="form-control" name="lokasi">
                    <option></option>
                    <option>Pabrik</option>
                    <option>Non Pabrik</option>
                  </select>
                </td>
              </tr>
                        
              <tr>
                <td><br></td>
              </tr>

              <tr>
                <td class="col-sm-5" id="iya">Keterangan</td>
                <td><?php echo "<font color='white'>..</font>"; ?></td>
                <td><input type="text" name="keterangan" class="form-control" placeholder="Keterangan"></td>
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

      <div class="box-footer">

      </div>

      
    </section>
@endsection 