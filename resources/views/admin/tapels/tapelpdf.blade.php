<html>
<head>
	<title>Laporan Tahun Pelajaran</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	
		<h5>Laporan Tahun Pelajaran</h4>
        <div class="col-md-6" align="right">            
          <img src="data:image/png;base64, {!! $qrcode !!}">
        </div>
	
  <table class="table table-striped table-bordered dataTable" id="table-1">
              <thead>
                <tr>
                  <th>-</th>
                  <th>Tahun Pelajaran</th>
                  
                </tr>
              </thead>
              <tbody>
              {{-- {{dd($tapels)}} --}}
              @foreach ($tapels as $tapel)
                <tr>
                  <td>{{ ($loop->index)+1 }}</td>
                  <td>{{$tapel->nama}}</td>
                  
                </tr>
              @endforeach
               
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th>
                    
                  </th>
                  
                </tr>
              </tfoot>
            </table>
 
</body>
</html>