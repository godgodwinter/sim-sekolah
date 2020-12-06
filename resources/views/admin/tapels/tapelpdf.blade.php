        <div class="panel-body">
          <div class="table-responsive">
          
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
                  <th>-</th>
                  <th>Tahun Pelajaran</th>
                  
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      
      
    </div>

