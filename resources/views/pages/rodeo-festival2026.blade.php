<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials.rodeofestival2026.header')
	</head>
    <body id="page-top" data-spy="scroll" data-target="#mainNav" data-offset="80" tabindex="0">
		@include('partials.rodeofestival2026.navigation')
		<header class="masthead rodeofestival2026">
			@include('sections.rodeofestival2026.banner')
		</header>
		<section class="page-section bg-light" id="participating-teams">
			<div class="text-center">
				<h2 class="section-heading">Participating Teams</h2>
			</div>
			<br/><br/>
			@include('sections.rodeofestival2026.professional')
			<br/><br/>
			@include('sections.rodeofestival2026.student')
		</section>
		<section class="page-section" id="schedule-of-activities">
			<div class="text-center">
				<h2 class="section-heading">Schedule of Activities</h2>
			</div>
			<br/><br/>
			<!-- @include('sections.rodeofestival2026.scheduleofactivities') -->
		</section>
		@include('partials.rodeofestival2026.footer')
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
