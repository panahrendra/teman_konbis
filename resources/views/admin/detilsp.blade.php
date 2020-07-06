@extends('layoutsadmin.app')


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
            <h3 clss="box-title">INDUK</h3>
              <br>
              <table id="tdash" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th id="tidak">NO. SP</th>
                  <th id="tidak">PERUSAHAAN INSTANSI</th>
                  <th id="tidak">JUDUL PERJANJIAN</th>
                  <th id="tidak">KATEGORI SP</th>
                  <th id="tidak">OBJEK SP</th>
                  <th id="tidak">KETERANGAN ASET</th>
                  <th id="tidak">JENIS SP</th>
                  <th id="tidak">TANGGAL MULAI</th>
                  <th id="tidak">TANGGAL AKHIR</th>
                  <th id="tidak">NILAI FIX</th>
                  <th id="tidak">NILAI FORMULA</th>
                  <th id="tidak">HISTORY</th>
                  <th id="tidak">KETERANGAN</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>{{ $sp_tb_detil->no }}</td>
                  <td>{{ $sp_tb_detil->instansi }}</td>
                  <td>{{ $sp_tb_detil->judul }}</td>
                  <td>{{ $sp_tb_detil->kategori_sp }}</td>
                  <td><p>{{ $sp_tb_detil->objek_sp }}</p></td>
                  <td>{{ $sp_tb_detil->ket_aset }}</td>
                  <td>{{ $sp_tb_detil->jenis }}</td>
                  <td>{{ $sp_tb_detil->tgl_mulai }}</td>
                  <td>{{ $sp_tb_detil->tgl_selesai }}</td>
                  <td>{{ $sp_tb_detil->nilai_fix }}</td>
                  <td>{{ $sp_tb_detil->nilai_formula }}</td>
                  <td>{{ $sp_tb_detil->history }}</td>
                  <td>{{ $sp_tb_detil->keterangan }}</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="box box-danger">
            <div class="box-body">
            <h3 clss="box-title">ADDENDUM</h3>
              <br>
              <table id="tdash" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th id="tidak">NO</th>
                  <th id="tidak">NO. SP</th>
                  <th id="tidak">PERUSAHAAN INSTANSI</th>
                  <th id="tidak">JUDUL PERJANJIAN</th>
                  <th id="tidak">KATEGORI SP</th>
                  <th id="tidak">OBJEK SP</th>
                  <th id="tidak">KETERANGAN ASET</th>
                  <th id="tidak">JENIS SP</th>
                  <th id="tidak">TANGGAL MULAI</th>
                  <th id="tidak">TANGGAL AKHIR</th>
                  <th id="tidak">NILAI FIX</th>
                  <th id="tidak">NILAI FORMULA</th>
                  <th id="tidak">HISTORY</th>
                  <th id="tidak">KETERANGAN</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($sp_tb_add as $sp)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $sp->no }}</td>
                  <td>{{ $sp->instansi }}</td>
                  <td>{{ $sp->judul }}</td>
                  <td>{{ $sp->kategori_sp }}</td>
                  <td><p>{{ $sp->objek_sp }}</p></td>
                  <td>{{ $sp->ket_aset }}</td>
                  <td>{{ $sp->jenis }}</td>
                  <td>{{ $sp->tgl_mulai }}</td>
                  <td>{{ $sp->tgl_selesai }}</td>
                  <td>{{ $sp->nilai_fix }}</td>
                  <td>{{ $sp->nilai_formula }}</td>
                  <td>{{ $sp->history }}</td>
                  <td>{{ $sp->keterangan }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>

      <!-- /.box -->      
    </section>
@endsection 