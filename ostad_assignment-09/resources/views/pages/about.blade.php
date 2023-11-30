@extends('layout.master')

@section('title','About')
@section('content')
<!-- About Section -->
<section id="about" class="py-5" >
		<div class="container">
			<div class="row">
			<h2 class="text-center mb-5">About Me</h2>
				<div class="col-lg-5">
					<img src="{{ asset('assets/images/profile.jpg') }}" alt="Profile Picture" class="img-fluid rounded-circle" >
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-6">
					
					<h4 class="">Hello Beautifull Man. You are Welcome To My Profile</h4>
					<h3>I'm a Software Engineer.</h3>
					<div class="personal-info">
						<ul class="list-unstyled">
							<li>Name : Mizanur Rahman</li>
							<li>Education : BSc in Software Engineer </li>
							<li>Email : mizanur35-2482@diu.edu.bd</li>
							<li>Phone : 01825337148</li>
							<li>Address : Dhaka, Bangladesh</li>
						</ul>
					</div>
					<div class="resume">
						<button class="btn btn-danger">Download CV</button>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection