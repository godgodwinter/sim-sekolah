<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Import Export Excel to database Example - Nicesnippets.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<style type="text/css">
    .main-section{
        margin-top:150px;
    }
</style>
<body>
    <div class="container main-section">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card bg-light mt-3">
                    <div class="card-header">
                        Laravel 8 Import Export Excel to database Example - Nicesnippets.com
                    </div>
                    <div class="card-body">
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <br>
                            <button class="btn btn-success">Import User Data</button>
                            <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>