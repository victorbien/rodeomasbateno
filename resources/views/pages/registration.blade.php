<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.registration.header')
	</head>
    <body id="page-top" data-spy="scroll" data-target="#mainNav" data-offset="80" tabindex="0">
		@include('partials.registration.navigation')
		<header class="masthead otherpages">
			@include('sections.registration.banner')
		</header>
		<main class="flex-fill">
			<section class="page-section text-center rules-and-regulations" id="googleform">
				@include('sections.registration.googleform')
			</section>

			<section class="page-section rules-and-regulations" id="download">
				@include('sections.registration.download')
			</section>

			<section class="page-section rules-and-regulations" id="requirements" style="max-width: 70%; margin-inline: auto;">
				@include('sections.registration.requirements')
			</section>

			<section class="page-section rules-and-regulations" id="officiating-team" style="max-width: 70%; margin-inline: auto;">
				@include('sections.registration.officiatingteam')
			</section>

			<section class="page-section rules-and-regulations" id="officiating-team" style="max-width: 70%; margin-inline: auto;">
				@include('sections.registration.generalguidelines')
			</section>

			<section class="page-section rules-and-regulations" id="scoring-system" style="max-width: 70%; margin-inline: auto;">
				@include('sections.registration.scoringsystem')
			</section>

			<section class="page-section rules-and-regulations" id="rulesandregulations" style="max-width: 70%; margin-inline: auto;">
				@include('sections.registration.rulesandregulations')
			</section>
		</main>
		@include('partials.registration.footer')
		<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		<!-- Bootstrap JS (required for dropdowns) -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>navbar.classList.add('navbar-shrink');</script>
	</body>
</html>
