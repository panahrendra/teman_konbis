@extends('layoutsadmin.app')


@section('content')
<section class="content-header">
      <h1>
        MY TASK
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
                  <th id="tidak">NO. SP</th>
                  <th id="tidak">INSTANSI</th>
                  <th id="tidak">JUDUL PERJANJIAN</th>
                  <th id="tidak">KATEGORI SP</th>
                  <th id="tidak">OBJEK SP</th>
                  <th id="tidak">KETERANGAN ASET</th>
                  <th id="tidak">JENIS SP</th>
                  <th id="tidak">TANGGAL MULAI</th>
                  <th id="tidak">TANGGAL AKHIR</th>
                  <th id="tidak">KETERANGAN</th>
                  <th id="tidak">TANGGAL PROGRESS</th>
                  <th id="tidak">PROGRESS</th>
                </tr>
                </thead>
                <tbody>
                @foreach($detil_progress as $dp)
                <tr>
                  <td>{{ $dp->no }}</td>
                  <td>{{ $dp->instansi }}</td>
                  <td>{{ $dp->judul }}</td>
                  <td>{{ $dp->kategori_sp }}</td>
                  <td><p>{{ $dp->objek_sp }}</p></td>
                  <td>{{ $dp->ket_aset }}</td>
                  <td>{{ $dp->jenis }}</td>
                  <td>{{ $dp->tgl_mulai }}</td>
                  <td>{{ $dp->tgl_selesai }}</td>
                  <td>{{ $dp->keterangan }}</td>
                  <td>{{ $dp->tgl_progress }}</td>
                  <td>{{ $dp->progress }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              
            </div>
          </div>
      <!-- /.box -->      
    </section>
@endsection 