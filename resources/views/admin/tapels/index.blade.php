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
<div class="alert alert-info border-info">
    {{ session('status') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            class="pcoded-micon"> <i class="feather icon-x-square"></i></span>
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endsection
@section('site-content')
    <div class="site-content">
      <div class="panel panel-default panel-table">
        <div class="panel-heading">
          <h3 class="m-t-0 m-b-5">@yield('title')</h3>
          <p class="text-muted m-b-0"></p>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered dataTable" id="table-1">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
              
                <tr>
                  <td>Misc</td>
                  <td>Links</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Lynx</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>IE Mobile</td>
                  <td>Windows Mobile 6</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>PSP browser</td>
                  <td>PSP</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      
      
    </div>
@endsection
