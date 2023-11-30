@extends('layout.master')

@section('title','Contact')
@section('content')
<!-- Contact Section -->
<section id="contact" class="py-5">
		<div class="container">
			<h2 class="text-center">Contact</h2>
			<div class="row">
				<div class="col-lg-5 contact-section">
					<h3 class="text-center mb-4">Contact Information</h3>
					<div class="contact-info"> 
						<h4>Address</h4>
						 <p>Rangpur, Bangladesh</p>
						 <h4>Phone Number</h4>
						 <p>01825337148</p>
						<h4>Email</h4>
						<p>mizanur35-2482@diu.edu.bd</p>
					</div>
					<div class="contact-links">
						<ul class="list-unstyled d-flex justify-content-end mb-0 float-start">
							<li class="me-3">
								<a href=""><i class="fa-brands fa-facebook border rounded p-3"></i></a>
							</li>
							<li class="me-3">
								<a href=""><i class="fa-brands fa-github border rounded p-3"></i></a>
							</li>
							<li class="me-3">
								<a href=""><i class="fa-brands fa-linkedin border rounded p-3"></i></a>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="col-lg-1"></div>
				
				<div class="col-lg-6  contact-section">
					<h3 class="text-center mb-4">Contact With Me</h3>
					 <p class="text-center">Feel free to contact me using the form below</p>
					<form class="contact-form">
						<div class="mb-3">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" id="name" required>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" required>
						</div>
						<div class="mb-3">
							<label for="message" class="form-label">Message</label>
							<textarea class="form-control" id="message" rows="5" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection