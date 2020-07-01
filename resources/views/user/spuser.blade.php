@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
      	SURAT PERJANJIAN
      </h1>
    </section>

    <style type="text/css">
        #tdash{
          font-size: smaller;
        }
        #tidak{
          text-align: center;
        }
    </style>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
          <div class="box box-danger">
            
            <div class="box-body">
              @if (session('Sukses'))
                <div class="alert alert-success" role="alert">
                  <center>{{(session('Sukses'))}}</center>
                </div><br>
              @endif
              <br>
              <table id="tdash" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th id="tidak">NO</th>
                  <th id="tidak">NO. SP</th>
                  <th id="tidak">PERUSAHAAN INSTANSI</th>
                  <th id="tidak">JUDUL PERJANJIAN</th>
                  <th id="tidak">KATEGORI SP</th>
                  <th id="tidak">DETIL</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($sp_tb as $sp) 
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $sp->no."/".$sp->kode."/".$sp->tahun }}</td>
                  <td>{{ $sp->instansi }}</td>
                  <td>{{ $sp->judul }}</td>
                  <td>{{ $sp->kategori_sp }}</td>
                  <td><center><a href="/sp/{{$sp->id}}/detilsp"><button type="button" class="btn btn-primary"><i class="fa fa-info-circle"></i></button></a></center></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        <!-- /.box-body -->
          <div class="box-footer">
            <a href="/sp/tambah"><button type="button" class="btn btn-default"><i class="fa fa-plus"> Tambah Perjanjian</i></button></a>
          </div>
           <!-- /.box-footer-->
        </div>
      <!-- /.box -->      
    </section>
@endsection 