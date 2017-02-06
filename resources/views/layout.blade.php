<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

    <!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/fontawsome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/vendors/rs-plugin/css/settings.css')}}" media="screen">

</head>

	<body>

    <div id="loader">
        <div class="loader-container">
			<div class="sexyload">Loading...</div>
        </div>
    </div>

	<div id="wrapper">


		<header id="headeraffix" class="header affix-top" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-12">
						<nav class="yamm navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<div class="navbar-table">
									<div class="navbar-cell tight">
										<div class="navbar-header">
											<a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" alt="Ova"></a>
											<div>
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
													<span class="sr-only">Toggle navigation</span>
													<span class="fa fa-bars"></span>
												</button>
											</div>
										</div><!-- end navbar-header -->
									</div><!-- end navbar-cell -->



									<div class="navbar-cell stretch">
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
											<div class="navbar-cell">
												<ul class="nav navbar-nav navbar-right">
													@if(Auth::user())
													<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">{{Auth::user()->name}} <b class="fa fa-angle-down"></b></a>
														<ul class="dropdown-menu">
															<li>
																<div class="yamm-content">
																	<div class="row">
																		<div class="col-md-3 col-xs-12 nopadding">
																			<div class="box">
																				<ul>
																					<li><a href="/auth/logout">Salir</a></li>

																				</ul>
																			</div><!-- end box -->
																		</div><!-- end col -->


																	</div><!-- end row -->
																</div><!-- end yamm-content -->
															</li>
														</ul>
													</li>
													@endif






													<li><a href="page-contact-1.html" title="">Contact</a></li>

													<li class="dropdown has-submenu searchmenu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i></a>
														<ul class="dropdown-menu start-right" role="menu">
															<li>
																<form id="custom-search-form" class="form-search form-horizontal">
																	<div class="input-append">
																		<input type="text" class="search-query form-control" placeholder="Search">
																		<button type="submit" class="btn"><i class="fa fa-search"></i></button>
																	</div>
																</form>
															</li>
														</ul>
													</li>
												</ul>
											</div><!-- end navbar-cell -->
										</div><!-- /.navbar-collapse -->
									</div><!-- end navbar cell -->

								</div><!-- end navbar-table -->
							</div><!-- end container fluid -->
						</nav><!-- end navbar -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</header>



<body>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>



	<script src="{{ asset('/js/retina.js') }}"></script>
	<script src="{{ asset('/js/jquery.prettyPhoto.js') }}"></script>
	<script src="{{ asset('/js/wow.js') }}"></script>
	<script src="{{ asset('/js/parallax.min.js') }}"></script>

	<script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('/js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('/js/portfolio.js') }}"></script>
	<script src="{{ asset('/js/parallax.min.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
	<script src="{{ asset('/js/carousel.js') }}"></script>
	<script src="{{ asset('/js/owl-main.js') }}"></script>
	<script src="{{ asset('/js/jquery.fitvids.js') }}"></script>

	<script src="{{ asset('/vendors/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{asset('/plugins/chosen/chosen.jquery.js')}}"></script>






	<script>
	  $(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    $(".media-element").fitVids();
	  });
	</script>

  	<!-- SLIDER REV -->
	@yield('js')

</body>
</html>
