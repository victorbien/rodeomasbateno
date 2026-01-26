<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.rodeofestival.header')
	</head>
    <body id="page-top" data-spy="scroll" data-target="#mainNav" data-offset="80" tabindex="0">
		@include('partials.rodeofestival.navigation')
		<header class="masthead rodeofestival">
			@include('sections.rodeofestival.banner')
		</header>
		<!-- Rodeo Masbateño-->
        <section class="page-section" id="rodeo-masbateno">
			@include('sections.rodeofestival.aboutrodeofestival')
        </section>
		<section class="page-section bg-dark" id="rodeo-masbateno">
			@include('sections.rodeofestival.events')
		</section>
		<section class="page-section" id="rodeo-masbateno">
			@include('sections.rodeofestival.supportingevents')
        </section>
		<section class="page-section bg-dark" id="rodeo-masbateno">
			@include('sections.rodeofestival.vroom')
        </section>
		<section class="page-section" id="rodeo-masbateno">
			@include('sections.rodeofestival.vroom-officials')
        </section>
		@include('partials.rodeofestival.footer')
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
	</body>
</html>
