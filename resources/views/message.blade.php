@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        
        <br><small></small>
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
            <div class="box-header">
              
              

            </div>
            
            <div class="box-body">
              <br>
              <table id="tdash" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th id="tidak">NO</th>
                  <th id="tidak">NO. SP</th>
                  <th id="tidak">PERUSAHAAN INSTANSI</th>
                  <th id="tidak">JUDUL PERJANJIAN</th>
                  <th id="tidak">OBJEK PERJANJIAN</th>
                  <th id="tidak">LOKASI OBJEK PERJANJIAN</th>
                  <th id="tidak">NILAI PERJANJIAN</th>
                  <th id="tidak">TANGGAL MULAI</th>
                  <th id="tidak">TANGGAL AKHIR</th>
                  <th id="tidak">KETERANGAN PERUBAHAN ISI</th>
                  <th id="tidak">USER</th>
                  <th id="tidak">OPSI</th>
                  <th id="tidak">HAPUS</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data_konbis as $d) 
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $d->no_sp."/".$d->kode_sp."/".$d->tahun_sp }}</td>
                  <td>{{ $d->perusahaan }}</td>
                  <td>{{ $d->jenis_sp."-".$d->judul_sp }}</td>
                  <td>{{ $d->objek_sp }}</td>
                  <td>{{ $d->lokasi_obj_sp }}</td>
                  <td>{{ $d->nilai_formula."/".$d->nilai_fix }}</td>
                  <td>{{ $d->tgl_mulai }}</td>
                  <td>{{ $d->tgl_akhir }}</td>
                  <td>{{ $d->ket_perubahan }}</td>
                  <td>{{ $d->user }}</td>
                  <td><center><a href="/dashboard/{{$d->data_id}}/edit"><button type="button" class="btn btn-primary"><i class="fa fa-info-circle"></i></button></a></center></td>
                  <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i></button></td>
                </tr>
                @endforeach
                </tbody>
              </table>

              <div class="modal modal-danger fade" id="modal-danger">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <center><label>Yakin ingin menghapus data ini ?</label></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">TUTUP</button>
                      <a href="/dashboard/{{$d->data_id}}/delete"><button type="button" class="btn btn-outline">HAPUS</button></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        

        <!-- /.box-body -->
          <div class="box-footer">
            <a href="/dashboard/tambah"><button type="button" class="btn btn-default"><i class="fa fa-plus"> Tambah Perjanjian</i></button></a>
          </div>
           <!-- /.box-footer-->
        </div>
      <!-- /.box -->      
    </section>
@endsection 