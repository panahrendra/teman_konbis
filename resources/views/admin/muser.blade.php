@extends('layouts.app')


@section('content')
<style type="text/css">
  
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
	            <h3 class="box-title">MASTER USER</h3>
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
                  <th><center>NAMA</center></th>
                  <th><center>ROLE</center></th>
                  <th><center>EMAIL</center></th>
                </tr>
                </thead>
                <tbody>  
                @foreach($user as $u)
                <tr>
                  <td>{{ $u->nama }}</td>
                  <td>{{ $u->role }}</td>
                  <td>{{ $u->email }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
        
        </div>
    </div>
        <!-- /.box-footer--> 
      <!-- /.box -->     
    </section>
@endsection 