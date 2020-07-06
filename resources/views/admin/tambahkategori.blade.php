@extends('layoutsadmin.app')


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
            <a href="/mkategori"><button type="submit" class="btn btn-info">KEMBALI</button></a>
        </div>
        <div class="box-body">
            <!-- /.box-header -->
          <form method="post" action="/sp/store4" class="form-horizontal">
            {{ csrf_field() }}
            <table width="50%">
              <tr>
                <td class="col-sm-5" id="iya">Kategori</td>
                <td><?php echo "<font color='white'>..</font>"; ?></td>
                <td><input type="text" name="kategori_sp" class="form-control" placeholder="Kategori"></td>
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