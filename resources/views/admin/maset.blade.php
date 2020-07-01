@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
      	ASET
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
              <br>
              <table id="tdash" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th id="tidak">NO</th>
                  <th id="tidak">UNIT KERJA</th>
                  <th id="tidak">JENIS</th>
                  <th id="tidak">LOKASI</th>
                  <th id="tidak">KETERANGAN</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($tbl_aset as $ta) 
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $ta->unit_kerja }}</td>
                  <td>{{ $ta->aset }}</td>
                  <td>{{ $ta->lokasi }}</td>
                  <td>{{ $ta->keterangan }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          <div class="box-footer">
            <a href="/sp/tambahaset"><button type="button" class="btn btn-default"><i class="fa fa-plus"> Tambah Aset</i></button></a>
          </div>
           <!-- /.box-footer-->
        </div>
      <!-- /.box -->      
    </section>
@endsection 