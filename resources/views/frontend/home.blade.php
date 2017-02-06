@extends('layout')
@section('title','Agregar Condición')
@section('content')
<section class="pageheader lighthead box-shadow grey">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1>Portfolio Gallery</h1>
						<p>All our awesome Portfolio items with Gallery style</p>
					</div>
					<div class="col-md-3">
	                    <ol class="breadcrumb text-right">
	                        <li><a href="#">Home</a></li>
	                        <li class="active">Portfolio</li>
	                    </ol>
					</div>
				</div>
			</div>
		</section>
<section class="section white">
			<div class="container">
				<div id="page-wrapper" class="row">



					<br>

					<div id="content" class="col-md-9 col-sm-9 col-xs-12">
						<h3>Últimas Historietas</h3>
						<ul class="portfolio-grid portfolio-gallery-3 clearfix masonry" id="portfolio-grid">

                @foreach($historietas as $historieta)
							<li class="portfolio-item mix cat2">
								<div class="portfolio-style-1 entry wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
									<img src="{{'/revistas/'.$historieta->tapa }}" alt="">
									<div class="magnifier">
										<div class="visible-title">
											<h4><a href="portfolio-single-1.html">{{$historieta->titulo}}</a></h4>
											<small><a href="portfolio-gallery-wd-rs-3.html">Category</a></small>
										</div><!-- end visible-title -->

										<div class="visible-title1 clearfix">
											<span class="pull-left">
												<a data-rel="prettyPhoto" href="upload/portfolio_01.png"><i class="fa fa-search"></i></a>
												<a href="{{ route('admin.revistas.show',$historieta->id) }}"><i class="fa fa-link"></i></a>
											</span>

										</div><!-- end visible-title -->
									</div><!-- end magnifier -->
								</div><!-- end portfolio -->
							</li>
              @endforeach

						</ul><!-- end row -->

						<h3>Últimas Revistas de videojuegos</h3>
						<ul class="portfolio-grid portfolio-gallery-3 clearfix masonry" id="portfolio-grid">

							@foreach($videojuegos as $videojuego)
								<li class="portfolio-item mix cat2">
									<div class="portfolio-style-1 entry wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
										<img src="{{'/revistas/'.$videojuego->tapa }}" alt="">
										<div class="magnifier">
											<div class="visible-title">
												<h4><a href="portfolio-single-1.html">{{$videojuego->titulo}}</a></h4>
												<small><a href="portfolio-gallery-wd-rs-3.html">{{$videojuego->category->name}}</a></small>
											</div><!-- end visible-title -->

											<div class="visible-title1 clearfix">
											<span class="pull-left">
												<a data-rel="prettyPhoto" href="upload/portfolio_01.png"><i class="fa fa-search"></i></a>
												<a href="{{ route('admin.revistas.show',$videojuego->id) }}"><i class="fa fa-link"></i></a>
											</span>

											</div><!-- end visible-title -->
										</div><!-- end magnifier -->
									</div><!-- end portfolio -->
								</li>
							@endforeach

						</ul><!-- end row -->
						<h3>Últimos Comics</h3>
						<ul class="portfolio-grid portfolio-gallery-3 clearfix masonry" id="portfolio-grid">

							@foreach($comics as $comic)
								<li class="portfolio-item mix cat2">
									<div class="portfolio-style-1 entry wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
										<img src="{{'/revistas/'.$comic->tapa }}" alt="">
										<div class="magnifier">
											<div class="visible-title">
												<h4><a href="portfolio-single-1.html">{{$comic->titulo}}</a></h4>
												<small><a href="portfolio-gallery-wd-rs-3.html">{{$comic->category->name}}</a></small>
											</div><!-- end visible-title -->

											<div class="visible-title1 clearfix">
											<span class="pull-left">
												<a data-rel="prettyPhoto" href="upload/portfolio_01.png"><i class="fa fa-search"></i></a>
												<a href="{{ route('admin.revistas.show',$comic->id) }}"><i class="fa fa-link"></i></a>
											</span>

											</div><!-- end visible-title -->
										</div><!-- end magnifier -->
									</div><!-- end portfolio -->
								</li>
							@endforeach

						</ul><!-- end row -->

					</div><!-- end content -->

					<div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
						<div class="widget">
							<div class="widget-title">
								<h4><span><i class="fa fa-folder-open"></i></span> Etiquetas</h4>
								<hr>
							</div><!-- end title -->

							<div class="list-widget">
								<ul>

									@foreach($tags as $tag)

										<li><a href="#">{{$tag->name}} <span>{{$tag->magazine->count()}}</span></a></li>
									@endforeach

								</ul>
							</div><!-- end text-widget -->
						</div><!-- end widget -->

						<div class="widget">
							<div class="widget-title">
								<h4><span><i class="fa fa-flag-o"></i></span> Advertisement</h4>
								<hr>
							</div><!-- end title -->

							<div class="banner-widget">
								<a href="#"><img src="upload/banner.png" alt="" class="img-responsive"></a>
							</div><!-- end text-widget -->
						</div><!-- end widget -->

						<div class="widget">
							<div class="widget-title">
								<h4><span><i class="fa fa-twitter"></i></span> Latest Tweets</h4>
								<hr>
							</div><!-- end title -->

							<div class="twitter-widget">
								<ul class="latest-tweets">
									<li>
										<h4><a href="#" title="">@Begha</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</h4>
										<span>2 hours ago</span>
									</li>
									<li>
										<h4><a href="#" title="">@Begha</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</h4>
										<span>2 hours ago</span>
									</li>
								</ul><!-- end latest-tweet -->
							</div><!-- end twitter-widget -->
						</div><!-- end widget -->
					</div><!-- end sidebar -->

				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

@endsection
