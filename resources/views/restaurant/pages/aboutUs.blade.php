@extends('restaurant.layouts.master')

@section('content')
<div id="heading">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-content">
					<h2>About Us</h2>
					<span>Home / <a href="about-us.html">About us</a></span>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="timeline-post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-section">
					<h2>Who We Are</h2>
					<img src="{{ asset('storage/sliders/d41d8cd98f00b204e9800998ecf8427e_20180510040508.jpg') }}" alt="" class="img-responsive">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<h3>Our Company</h3>
				<p>Tashres is our product in Web and Online Service (IT4409)</p>
			</div>
			<div class="col-md-6">
				<h3>Team Management</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<div class="space50"></div>

		<div class="row">
			@foreach ($image_list as $item)
			<div class="col-md-2 col-sm-4">
				<div class="timeline-thumb">
					<div class="thumb">
						<img src="{{ asset('') }}{{$item['thumbnail']}}" alt="">
					</div>
					{{-- <div class="overlay">
						<div class="timeline-caption">
							<a href="#"><h4>Breakfast</h4></a>
							<p>7:30 AM</p>
						</div>
					</div> --}}
				</div>
			</div>
			@endforeach
			
			{{-- <div class="col-md-2 col-sm-4">
				<div class="timeline-thumb">
					<div class="thumb">
						<img src="{{ asset('restaurant/images/timeline2.jpg') }}" alt="">
					</div>
					<div class="overlay">
						<div class="timeline-caption">
							<a href="#"><h4>Lunch</h4></a>
							<p>11:20 AM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="timeline-thumb">
					<div class="thumb">
						<img src="{{ asset('restaurant/images/timeline3.jpg') }}" alt="">
					</div>
					<div class="overlay">
						<div class="timeline-caption">
							<a href="#"><h4>Lunch</h4></a>
							<p>1:00 PM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="timeline-thumb">
					<div class="thumb">
						<img src="{{ asset('restaurant/images/timeline4.jpg') }}" alt="">
					</div>
					<div class="overlay">
						<div class="timeline-caption">
							<a href="#"><h4>Dinner</h4></a>
							<p>6:30 PM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="timeline-thumb">
					<div class="thumb">
						<img src="{{ asset('restaurant/images/timeline5.jpg') }}" alt="">
					</div>
					<div class="overlay">
						<div class="timeline-caption">
							<a href="#"><h4>Dinner</h4></a>
							<p>8:20 PM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="timeline-thumb">
					<div class="thumb">
						<img src="{{ asset('restaurant/images/timeline6.jpg') }}" alt="">
					</div>
					<div class="overlay">
						<div class="timeline-caption">
							<a href="#"><h4>Dinner</h4></a>
							<p>9:10 PM</p>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</div>


<div id="our-team">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-section">
					<h2>Our Team</h2>
					<img src="{{ asset('restaurant/images/under-heading.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="authors">
				<div class="col-md-3 col-sm-6">
					<div class="team-thumb">
						<div class="author">
							<img src="{{ asset('')}}storage/admins/userDefault.png" alt="Tracy - templatemo">
						</div>
						<div class="overlay">
							<div class="author-caption">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="author-details">
						<h2>Thái NQ</h2>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="team-thumb">
						<div class="author">
							<img src="{{ asset('')}}storage/admins/userDefault.png" alt="Mary - templatemo">
						</div>
						<div class="overlay">
							<div class="author-caption">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="author-details">
						<h2>Anh NT</h2>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="team-thumb">
						<div class="author">
							<img src="{{ asset('')}}storage/admins/userDefault.png" alt="Julia - templatemo">
						</div>
						<div class="overlay">
							<div class="author-caption">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="author-details">
						<h2>Huyền TTM</h2>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="team-thumb">
						<div class="author">
							<img src="{{ asset('')}}storage/admins/userDefault.png" alt="Linda - templatemo">
						</div>
						<div class="overlay">
							<div class="author-caption">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="author-details">
						<h2>Song LV</h2>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="testimonails">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-section">
					<h2>Testimonials and Awards</h2>
					{{-- <img src="{{ asset('')}}storage/admins/userDefault.png" alt="" > --}}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="testimonails-slider">
					<ul class="slides">
						<li>
							<div class="testimonails-content">
								<p>Nam nec risus feugiat dui ultrices dignissim. Morbi ex purus, commodo a tristique eu, mollis a nisi. Pellentesque in enim sit amet tellus ornare fringilla eget eu arcu. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
								<h6>Jennifer - <a href="#">Chief Designer</a></h6>
							</div>
						</li>
						<li>
							<div class="testimonails-content">
								<p>Fusce fermentum libero fringilla odio pharetra malesuada. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam ultrices lectus quis consequat fringilla. Mauris non ex et purus sollicitudin.</p>
								<h6>Laureen - <a href="#">Marketing Executive</a></h6>
							</div> 
						</li>
						<li>
							<div class="testimonails-content">
								<p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
								<h6>Tanya - <a href="#">Creative Director</a></h6>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection