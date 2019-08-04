@extends('tamplate')

@section('judul')
Dashboard
@stop

@section('subjudul')
Selamat datang
@stop

@section('content')

    <div class="col-lg-6 col-xs-12">
          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-book"></i>


            <h3 class="box-title">Jumlah Siswa</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div  style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Bilingual Ipa</span>
                    <small class="pull-right">{{ $B_ipa }}</small>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">Bilingual Ips</span>
                    <small class="pull-right">{{ $B_ips }}</small>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">Tahfidz</span>
                    <small class="pull-right">{{ $Tahfidz }}</small>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">MIPA</span>
                    <small class="pull-right">{{ $MIPA }}</small>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Reguler Ipa</span>
                    <small class="pull-right">{{ $R_ipa }}</small>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">Reguler Ips</span>
                    <small class="pull-right">{{ $R_ips }}</small>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">IPS</span>
                    <small class="pull-right">{{ $IPS }}</small>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>

@stop
