<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./{{ asset("anchor/") }}/assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./{{ asset("anchor/") }}/assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>PPDB - @yield('title')</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,800" rel="stylesheet">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- Main CSS -->
<link href="{{ asset("anchor/") }}/assets/css/main.css" rel="stylesheet"/>

<!-- Animation CSS -->
<link href="{{ asset("anchor/") }}/assets/css/vendor/aos.css" rel="stylesheet"/>

</head>

<body>


<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
<div class="container">
	<a class="navbar-brand d-sm-block d-md-none" href="./index.html"><i class="fas fa-anchor mr-2"></i><strong>Anchor UI</strong> Kit</a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" style="">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="/">Beranda PPDB</a>
			</li>

		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->
{{-- @yield('notif') --}}
@yield('container')

<!------------------------------------------
DEMO MODAL & DONATE BUTTON ONLY - DON'T COPY
------------------------------------------->
<div class="modal fade" id="modal_newsletter" tabindex="-1" role="dialog" aria-labelledby="modal_newsletter" aria-hidden="true">
	<div class="modal-dialog shadow-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="d-flex align-items-center justify-content-center">
					<em class="text-muted mr-2">Share this freebie:</em>
					<!-- Share Facebook -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-secondary text-white mr-1" data-sharer="facebook" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-facebook-f"></i></span>
					<!-- Share Twitter -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-info text-white mr-1" data-sharer="twitter" data-title="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!" data-hashtags="bootstrap,free" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-twitter"></i></span>
					<!-- Share Google+ -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1" data-sharer="googleplus" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-google"></i></span>
					<!-- Share E-mail -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-purple text-white mr-1" data-sharer="email" data-title="Bootstrap KIT Url" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/" data-subject="Download Anchor - Free Bootstrap 4.1.x UI Kit with Sass!" data-to="some@email.com"><i class="fas fa-envelope"></i></span>
					<!-- Sharingbutton Pinterest -->
					<span class="c-pointer iconbox iconsmall rounded-circle bg-danger text-white mr-1" data-sharer="pinterest" data-url="https://www.wowthemes.net/anchor-free-bootstrap-ui-kit/"><i class="fab fa-pinterest"></i></span>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="text-center mb-3">
					<img src="{{ asset("anchor/") }}/assets/img/favicon.ico">
				</div>
				<h6 class="text-center font-weight-light ">Thanks for downloading Anchor Bootstrap UI Kit!</h6>
				<h5 class="text-center mb-4">We'll e-mail you when a new version arrives! *</h5>
				<form id="newsletter-form" action="https://www.themepush.com/sendy/subscribe" method="POST" accept-charset="utf-8">
					<div class="d-none">
						<label for="hp">HP</label>
						<br>
						<input type="text" name="hp" id="hp">
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-md-6">
							<div class="form-group has-icon-left form-control-name">
								<label class="sr-only" for="inputName">Your name</label>
								<input type="text" name="name" id="name" required="" pattern="[A-Za-z\s]+" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group has-icon-left form-control-email">
								<label class="sr-only" for="inputEmail">Email address</label>
								<input type="email" name="email" id="email" required="" class="form-control" placeholder="E-mail">
							</div>
						</div>
						<input type="hidden" name="list" value="CVN62nDKE0qTf4XLs8J9iQ" checked="checked">
						<div class="col-md-12 mb-3">
							<input type="hidden" name="subform" value="yes">
							<input onclick="requiredConsent()" class="btn btn-success btn-block shadow-sm" value="Send me updates & more freebies" type="submit" name="submit" id="submit">
						</div>
						<div class="col-md-12 mb-3 text-center">
							<small class="d-block" style="color:#ccc;font-style:italic;line-height:1.4;">* This is a newsletter managed by WowThemes, the item author. It is the only way we can reach you out when a new version is released, so, please, subscribe!</small>
						</div>
					</div>
					<div class="row justify-content-center d-none mt-3">
						<label class="c-input c-checkbox small">
						<input type="checkbox" name="gdpr" id="gdpr" checked="checked">
						<span class="c-indicator"></span> I agree to the <a target="_blank" href="https://www.wowthemes.net/privacy-policy/#newsletter-subscription-forms">privacy policy</a>. </label>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div style="position:fixed; bottom:20px;left:20px;">
	<a href="https://www.paypal.me/wowthemes/10" target="_blank"><img class="rounded-circle shadow-lg" src="{{ asset("anchor/") }}/assets/img/demo/coffee.png" width="70" data-toggle="tooltip" data-placement="top" title="" data-original-title="Buy me a coffee!"></a>
</div>
<!--------------------------------------
END DEMO MODAL & DONATE BUTTON
--------------------------------------->



<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="{{ asset("anchor/") }}/assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset("anchor/") }}/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="{{ asset("anchor/") }}/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset("anchor/") }}/assets/js/functions.js" type="text/javascript"></script>

<!-- Animation -->
<script src="{{ asset("anchor/") }}/assets/js/vendor/aos.js" type="text/javascript"></script>
<noscript>
    <style>
        *[data-aos] {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
        }
    </style>
</noscript>
<script>
    AOS.init({
        duration: 700
    });
</script>

<!-- Disable animation on less than 1200px, change value if you like -->
<script>
AOS.init({
  disable: function () {
    var maxWidth = 1200;
    return window.innerWidth < maxWidth;
  }
});
</script>

</body>
</html>
