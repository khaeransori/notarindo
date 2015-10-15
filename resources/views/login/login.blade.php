@extends('layouts.default')
@section('content')
<div class="container">
  <h1 class="text-center">Login <strong>Sistem Informasi</strong> Kenotariatan</h1>
  <div class="panel panel-login">
    <!-- <div class="alert alert-danger alert-dismisable" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div> -->
    <div class="panel-body">
      <form id="login-form" action = "#" method = "POST" class="form-horizontal" style="display:block;">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <?php
            // if ($this->session->flashdata('username')):
            //   $jeneng = $this->session->flashdata('username');
            //   else:
            //   $jeneng = "";
            // endif
            ?>
            <input type="text" class="form-control" name="un" id="inputEmail3" placeholder="Username" value="" autofocus required >
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="pwd" id="inputPassword3" placeholder="Password" required >
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Log In</button>
            <a class="text-danger text-sm pull-right" href="#" id="forgotPass"><i class="glyphicon glyphicon-question-sign"></i> Lupa Password?</a>
          </div>
        </div>
      </form>
      <form id="forgot-form" action = "#" method = "POST" class="form-horizontal" style="display:none;">
        <p class="text-success">Password akan dikirimkan ke alamat email anda</p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <?php
            // if ($this->session->flashdata('username')):
            // $jeneng = $this->session->flashdata('username');
            // else:
            // $jeneng = "";
            // endif
            ?>
            <input type="text" class="form-control" name="un" id="inputEmail3" placeholder="Username" value="" autofocus required >
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Kirim Password</button>
            <a class="btn btn-default" href="#" id="loginForm">Kembali</a>
          </div>
        </div>
      </form>
    </div>
    <div class="panel-footer">
      <p class="text-center">Tugas Akhir | M Ichsan Adhiim | 21120110141059</p>
    </div>
  </div>
</div>
@stop