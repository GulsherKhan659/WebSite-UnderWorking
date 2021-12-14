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
		<?php 
		include 'Tabs.php';
	?>
	<div class="col-md-9 float-left pl-0" style="color: #F9F7F4;">
		<div class="data-form content" id="content-1" style="display: block;">
			<h1 class="heading">INVESTMENT AND FINANCING DATA</h1>
			<form method="POST" action="report.php">
				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Purchase Price</label>
    					<input type="text" class="form-control Fields" placeholder="Purchase Price" id="pp" name="pp">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Loan to Value</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="ltv" name="ltv">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">No of Units</label>
    					<input type="text" class="form-control Fields" placeholder="Enter Units" id="nou" name="nou">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Expected Hold Period (years)</label>
    					<input type="text" class="form-control Fields" placeholder="Enter Expected Hold Period" id="ehp" name="ehp">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Acquisition Fee</label>
    					<input type="text" class="form-control Fields" placeholder="Enter Acquisition Fee" id="afee" name="afee">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Financing Fee</label>
    					<input type="text" class="form-control Fields" placeholder="Enter Financing Fee" id="ffee" name="ffee">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Title Fees</label>
    					<input type="text" class="form-control Fields" placeholder="Purchase Price" id="tfee" name="tfee">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Capital Reserve (Renovations)</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="cr" name="cr">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Leasing Reserve</label>
    					<input type="text" class="form-control Fields" placeholder="Purchase Price" id="lr" name="lr">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Broker Fee</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="bfee" name="bfee">
    				</div>
  				</div>
  				<div class="form-group">
                  <div class="fields">
    					<label for="exampleInputPassword1">Bank</label>
    					<input type="text" class="form-control Fields" placeholder="Enter Bank Name" id="bank" name="bank"> 
    				</div>
  				</div>
  				<div class="fields">
    				<label for="exampleInputPassword1">AMORTIZATION (MONTHS)</label>
    				<input type="text" class="form-control Fields" placeholder="AMORTIZATION (MONTHS)" id="amr_months" name="amr_months">
    			</div>
    			<div class="fields">
    				<label for="exampleInputPassword1">Rate</label>
    				<input type="text" class="form-control Fields" placeholder="Rate" id="rate" name="rate">
    			</div>
    			<div class="fields">
    				<label for="exampleInputPassword1">TERM (YEARS)</label>
    				<input type="text" class="form-control Fields" placeholder="TERM (YEARS)" id="term" name="term">
    			</div>
                <button type="submit">Report</button>
			</form>
		</div>
		<div class="data-form content" id="content-2">
			<!-- Revenue data form -->
<!-- 			<form>
				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Purchase Price</label>
    					<input type="email" class="form-control Fields" placeholder="Purchase Price" id="Purchase">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Loan to Value</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="Loan">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">No of Units</label>
    					<input type="email" class="form-control Fields" placeholder="Purchase Price" id="Purchase">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Expected Hold Period (years)</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="Loan">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Acquisition Fee</label>
    					<input type="email" class="form-control Fields" placeholder="Purchase Price" id="Purchase">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Financing Fee</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="Loan">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Title Fees</label>
    					<input type="email" class="form-control Fields" placeholder="Purchase Price" id="Purchase">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Capital Reserve (Renovations)</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="Loan">
    				</div>
  				</div>
  				<div class="form-group">
    				<div class="fields">
    					<label for="exampleInputEmail1">Leasing Reserve</label>
    					<input type="email" class="form-control Fields" placeholder="Purchase Price" id="Purchase">
    				</div>
    				<div class="fields">
    					<label for="exampleInputPassword1">Broker Fee</label>
    					<input type="text" class="form-control Fields" placeholder="Loan to Value" id="Loan">
    				</div>
  				</div>
  			</form> -->
		</div>
		<div class="operating-expenses content" id="content-3">
			<h1>Operating and non operating expenses</h1>
		</div>
		<div class="sale-data content" id="content-4">
			<h1>Sale Data</h1>
		</div>
		<div class="next-btn">
			<a class="getbtn next" id="next" href="report.php">Next</a>
			<a class="getbtn end" href="#" style="display: none;">Submit</a>
		</div>
	</div>
</section>
</body>
</html>







	