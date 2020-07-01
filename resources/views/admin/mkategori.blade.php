@extends('layouts.app')


@section('content')
<style type="text/css">
  .hid{
    font-style:  
  }
</style>
    <section class="content-header">
      <h1>
        ACCOUNT PROFILE
        <br><small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

      <div class="box box-info">
          <div class="box-header">
	            <h3 class="box-title">MASTER KATEGORI</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tdash" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>ID</center></th>
                  <th><center>JENIS KATEGORI</center></th>
                </tr>
                </thead>
                <tbody>  
                @foreach($kategori as $k)
                <tr>
                  <td>{{ $k->id }}</td>
                  <td>{{ $k->kategori_sp }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="/sp/tambahkategori"><button type="button" class="btn btn-default"><i class="fa fa-plus"> Tambah Kategori</i></button></a>
        </div>
    </div>
        <!-- /.box-footer--> 
      <!-- /.box -->     
    </section>
@endsection 