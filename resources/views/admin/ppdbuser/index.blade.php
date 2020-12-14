@extends('admin.layouts.main')
@section('title','Tahun Pelajaran')
@section('csshere')
<!-- Data Table Css -->

@endsection
@section('jshere')
<!-- data-table js -->

@endsection

@section('headernav')

@endsection
@section('notif')
@if (session('status'))
<div class="container mt-2">
<div class="alert alert-info border-info">
    {{ session('status') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            class="pcoded-micon"> <i class="feather icon-x-square"></i></span>
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>

@endif
@endsection
@section('site-content')
<div class="site-content">
    <div class="panel panel-default m-b-0">
      <div class="panel-heading">
        <h3 class="m-y-0">PPDB SISWA</h3>
      </div>
      <div class="panel-body">
        <p class="text-muted m-b-15">Ini Halaman Beranda.</p>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
              <label class="control-label">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
              <label class="control-label">Message</label>
              <textarea class="form-control" rows="3" id="message"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Toast type</label>
              <select id="toastTypeGroup" class="custom-select">
                <option value="success" selected="selected">Success</option>
                <option value="info">Info</option>
                <option value="warning">Warning</option>
                <option value="error">Error</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">Position</label>
              <select id="positionGroup" class="custom-select">
                <option value="toast-top-right" selected="selected">Top Right</option>
                <option value="toast-bottom-right">Bottom Right</option>
                <option value="toast-bottom-left">Bottom Left</option>
                <option value="toast-top-left">Top Left</option>
                <option value="toast-top-full-width">Top Full Width</option>
                <option value="toast-bottom-full-width">Bottom Full Width</option>
                <option value="toast-top-center">Top Center</option>
                <option value="toast-bottom-center">Bottom Center</option>
              </select>
            </div>
            <div class="form-group">
              <div class="custom-controls-stacked">
                <label class="custom-control custom-control-primary custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="closeButton">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-label">Close button</span>
                </label>
                <label class="custom-control custom-control-primary custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="progressBar">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-label">Progress bar</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary" id="showtoast">Show Toast</button>
              <button type="button" class="btn btn-danger" id="cleartoasts">Clear Toasts</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
