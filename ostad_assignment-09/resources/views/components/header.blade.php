<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
				<div class="container">
					<a class="navbar-brand" href="{{ route('home') }}">Portfolio</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('home') }}">Home</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('about') }}">About Me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('project') }}">Projects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('skill') }}">Skills</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('contact') }}">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	</header>