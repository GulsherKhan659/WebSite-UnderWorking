<!DOCTYPE html>
<html>
<head>
	<title>check</title>
		<?php 
		include 'includes/attechment.php';
	?>
</head>
<body>
<section class="news-events">

	<div class="col-md-2 pl-0 pr-0 float-left">
		<div class="form-items">
			<div class="pro-image">
				<img class="" src="assets/images/logo.png">
			</div>
			<div class="items" id="items">
				<a class="nav-link active" id="1" aria-current="page" href="index.php">Investment and Financing data</a>
  				<a class="nav-link" id="2" href="#content-2 Revenue.php">Revenue Data</a>
  				<a class="nav-link" id="3" href="#content-3">Operating and non operating expenses</a>
  				<a class="nav-link" id="4" href="#content-4" tabindex="-1" aria-disabled="true">Sale Data</a>
  				<ul class="button">
  					<li>
        			<a class="btn" href="login.php">Registration</i></a>
      			</li>
  				</ul>
			</div>
		</div>
	</div>
</section>
<script>
	var counter = 1;
$('body').on('click', '.next', function() { 
	$('.content').hide();
    counter++;
	$('#content-'+counter+'').show();
	if(counter > 1) {
		$('.back').show();
		addActive(counter)
	};
	if(counter > 3) {
		$('.content-holder').hide();
		$('.next').hide();
		$('.end').show();
	};
});
function addActive(counter)
{ 
	for(var i=1; i<5; i++)
	{
		if(counter==i)
		{
			remove = document.getElementById(i);
	    remove.classList.add('active');
		}
		else
		{
			remove = document.getElementById(i);
	    remove.classList.remove('active');
		}
	} 
}
</script>
</body>
</html>







	