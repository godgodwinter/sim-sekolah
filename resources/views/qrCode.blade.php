<html>
<head>
  <title>Laravel 8 Qr Code Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row text-center mt-5">
      <div class="col-md-6">
        <h4>Simple Qr Code</h4>
        {!! QrCode::size(250)->generate('Nicesnippets.com') !!}
      </div>
      <div class="col-md-6">
        <h4>Color Qr Code</h4>
        {!! QrCode::size(250)->backgroundColor(255,55,0)->generate('Nicesnippets.com') !!}
      </div>
    </div> 
  </div> 
</body>
</html>