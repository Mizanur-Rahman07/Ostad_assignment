@extends('layout.master')

@section('title','Skills')
@section('content')
<!-- Skills Section -->
<section id="skills" class="py-5" >
		<div class="container">
			<h2 class="text-center mb-5">Skills</h2>
			<div class="row">
				<!-- Skill Card 1 -->
				<div class="col-md-4">
					<div class="card mb-4">
						<div class="card-body">
							<h5 class="card-title">Web Design</h5>
							<p class="card-text">HTML, CSS, JavaScript, Bootstrap, Vue Js</p>
						</div>
					</div>
				</div>
				<!-- Skill Card 2 -->
				<div class="col-md-4">
					<div class="card mb-4">
						<div class="card-body">
							<h5 class="card-title">Web Development</h5>
							<p class="card-text">PHP, Codeigniter, Laravel</p>
						</div>
					</div>
				</div>
				<!-- Skill Card 3 -->
				<div class="col-md-4">
					<div class="card mb-4">
						<div class="card-body">
							<h5 class="card-title">Database</h5>
							<p class="card-text">MySQL, Laragon</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@endsection