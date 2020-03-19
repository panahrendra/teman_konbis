@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        DASHBOARD
        <br><small>Surat Perjanjian yang masih aktif</small>
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
              @if (session('Sukses'))
                <div class="alert alert-success" role="alert">
                  <center>{{(session('Sukses'))}}</center>
                </div><br>
              @endif
              <h2 class="box-title">Sortir SP dengan kategori :</h2><br><br>
              


              <div class="btn-group">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">CARI</button>
              </div>

              <div class="modal modal-primary fade" id="modal-primary">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Sortir Kategori</h4>
                    </div>
                    <form method="get" action="{{ route('tembis.filter') }}">
                      @csrf
                    <div class="modal-body">
                        <div class="form-group">
                          <label>Jenis Surat Perjanjian</label>
                          <select class="form-control" name="filter1">
                            <option></option>
                            <option>Induk</option>
                            <option>Addendum</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Skema Surat Perjanjian</label>
                          <select class="form-control" name="filter2">
                            @foreach($sortsksp as $d )
                            <option>{{ $d->skema_sp }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Kategori Objek Kerjasama</label>
                          <select class="form-control" name="filter3">
                            @foreach($sortkas as $d )
                            <option>{{ $d->kategori_aset }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Lokasi</label>
                          <select class="form-control" name="filter4">
                            @foreach($sortlosp as $d )
                            <option>{{ $d->lokasi_obj_sp }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label>User</label>
                          <select class="form-control" name="filter5">
                            @foreach($sortuser as $d )
                            <option>{{ $d->user }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <table width="100%">
                            <tr>
                              <td><label>Tanggal Awal</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="filter6" class="form-control" id="datepicker1">
                              </div></td>

                              <td><?php echo "<font color='#3c8dbc'>______</font>"; ?></td>

                              <td><label>Tanggal Akhir</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="filter7" class="form-control" id="datepicker2">
                              </div></td>
                            </tr>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">TUTUP</button>
                      <input type="submit" class="btn btn-outline" name="cari" value="CARI">
                    </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- KATEGORI -->     
              {{-- <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span>Jenis SP <span class="caret"></span></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="">
                  <li><a href="{{ route('tembis.sortjsp', 'Induk') }}">Induk</a></li>
                  <li><a href="{{ route('tembis.sortjsp', 'Addendum') }}">Addendum</a></li>
                </ul>
              </div> --}}

              {{-- <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span>Skema SP <span class="caret"></span></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="">
                  @foreach($sortsksp as $d )
                    <li><a href="{{ route('tembis.sortsksp', $d->skema_sp) }}">{{ $d->skema_sp }}</a></li>
                  @endforeach
                </ul>
              </div> --}}

              <div class="btn-group">
                <a href="/" class="btn bg-red color-palette">HAPUS SORTIR</a>
              </div>
              

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