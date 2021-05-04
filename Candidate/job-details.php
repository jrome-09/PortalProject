<?php
require "../html/head.html";
?>

<body>
	<div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
	<link rel="stylesheet" href="candidate.css">
	<?php
	require "../html/script.html";
	require "candidate-navigation.php"
	?>
	<main>
		<div class="bg-light pt-5">
			<div class="max-width-container">
				<div class=" p-4 bg-white rounded mb-2">
					<div class="row">
						<div class="col-lg-9">
							<div class="image-container rounded border bg-light mb-2" style="height: 70px; width: 70px;"></div>
							<h5 class="color-black mb-0">Software Developer</h5>
							<p class="color-black fontsize-14">Company Name</p>
							<p class="color-light fontsize-14 m-0">Salary: PHP 30k-50k Monthly</p>
							<p class="color-light fontsize-14 m-0">Address: Vigan City Ilocos Sur</p>
							<p class="color-light fontsize-14">Date Posted: May 1, 2021</p>
						</div>
						<div class="col-lg-3 d-flex flex-column justify-content-center ">
							<div class="btn btn-primary my-2 font-500 fontsize-14 shadow-sm-hover">Apply now</div>
							<div class="btn btn-light border my-2 fontsize-14 color-black shadow-sm-hover hover-text-primary hover-text-feather"><span data-feather="bookmark"></span> Add to Bookmarks</div>
						</div>
					</div>
				</div>
				<div class=" p-4 bg-white rounded">
					<p class="fontsize-14 font-400 color-black">Job Highlights</p>
					<ol class="mb-5">
						<li class="bullets fontsize-13 color-black mb-1">Job Highlight 1</li>
						<li class="bullets fontsize-13 color-black mb-1">Job Highlight 2</li>
						<li class="bullets fontsize-13 color-black mb-1">Job Highlight 3</li>
					</ol>
					<p class="font-400 fontsize-14 color-black">Job Details</p>
					<p class="font-500 fontsize-14 color-black">Job Requirements:</p>
					<ol>
						<li class="bullets fontsize-13 color-black mb-1">Fluent in programming language such as C#, ASP.NET.</li>
						<li class="bullets fontsize-13 color-black mb-1">Fluent in scripting HTML, CSS and JavaScript.</li>
						<li class="bullets fontsize-13 color-black mb-1">Fluent in MS SQL database and SQL syntax.</li>
						<li class="bullets fontsize-13 color-black mb-1">Fluent in relevant development software, particularly, Visual Studio, MS SQL.</li>
						<li class="bullets fontsize-13 color-black mb-1">Experience applying theories related to web, database, interactive and mobile application.</li>
						<li class="bullets fontsize-13 color-black mb-1">Understanding of basic designing tools such as Photoshop and Illustrator.</li>
						<li class="bullets fontsize-13 color-black mb-1">Good communication skills.</li>
						<li class="bullets fontsize-13 color-black mb-1">Ability to manage multiple timelines.</li>
						<li class="bullets fontsize-13 color-black mb-1">Highly creative in thinking, concepts and designs.</li>
						<li class="bullets fontsize-13 color-black mb-1">No specific paper qualification is required; anyone with the passion and the above requirement may apply.</li>
					</ol>
					<p class="font-500 fontsize-14 color-black">Job Responsibilities/Duties:</p>
					<ol class="mb-5">
						<li class="bullets fontsize-13 color-black mb-1">Develop web, interactive, mobile and robotics applications.</li>
						<li class="bullets fontsize-13 color-black mb-1">Work collaboratively to create design & development concepts.</li>
						<li class="bullets fontsize-13 color-black mb-1">Collaborate with internal departments to ensure your development are consistent with corporate guidelines.</li>
						<li class="bullets fontsize-13 color-black mb-1">Translate concepts into actual implementation with a focus on usability and speed.</li>
						<li class="bullets fontsize-13 color-black mb-1">Handle all software and web development work.</li>
						<li class="bullets fontsize-13 color-black mb-1">Manage and meet project deadline</li>
					</ol>
					<p class="font-500 fontsize-14">Additional Information</p>
					<p class="fontsize-13 colorblack">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat nesciunt nobis error. Deserunt voluptas commodi ratione. Dolor necessitatibus quo excepturi quasi obcaecati accusantium inventore assumenda omnis, tempora neque quibusdam quis.</p>
					<div class="row">
						<div class="col-md-6">
							<p class="fontsize-14 font-500 color-black m-0">Career Level</p>
							<p class="fontsize-13 color-black">Entry Level</p>
							<p class="fontsize-14 font-500 color-black m-0">Job Type</p>
							<p class="fontsize-13 color-black">Full Time</p>
						</div>
						<div class="col-md-6">
							<p class="fontsize-14 font-500 color-black m-0">Qualification</p>
							<p class="fontsize-13 color-black">Diploma, Advanced/Higher/Graduate Diploma</p>
							<p class="fontsize-14 font-500 color-black m-0">Job Specializations</p>
							<p class="fontsize-13 color-black">Computer/Information Technology, IT-Software</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php
	require "../html/footer.html";
	?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="../javascript/functions.js"></script>
	<script src="../javascript/scroll.js"></script>
	<script src="../javascript/onclick.js"></script>
	<script>
		loadPage();
		feather.replace();
	</script>
</body>

</html>