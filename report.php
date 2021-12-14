<html>
<head>
<title>Documnet</title>
<script src="pdfgenerator.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
<button onclick="genratePdf()">Download Report</button>
<div id="report">

<?php 
$purchase = $_POST["pp"];
$loan_value = $_POST["ltv"];
$numofunit = $_POST["nou"];
$ex_period = $_POST["ehp"];
$acq_fee = $_POST["afee"];
$fin_fee = $_POST["ffee"];
$title_fee = $_POST["tfee"];
$cap_rev = $_POST["cr"];
$leaseing_rev = $_POST["lr"];
$broker_fee= $_POST["bfee"];
$bank = $_POST["bank"];
$amr_months = $_POST["amr_months"];
$rate = $_POST["rate"];
$term = $_POST["term"];
$price_balance = $purchase * $loan_value / 100;
$loan_down_payment =$purchase - $price_balance;
$total_equity=$loan_down_payment;
$total_cost=$purchase;


///echo "<h1> $purchase is my report is ready and I want to print this.</h1>";
?>
 
<br>


<br>

<center>
    <H4>Investment Highlights</h4>
    <table style="width:580;" class="table-borderless table-sm">
    <tbody>
        <tr>
            <td>Purchase Price</td>
             <td></td>
             <td><?php echo $purchase?></td>
        </tr>
        <tr>
            <td>Loan To Value</td>
             <td></td>
             <td><?php echo $loan_value?>%</td>
        </tr>
        <tr>
            <td>No Of Units</td>
             <td></td>
             <td><?php echo $numofunit ?></td>
        </tr>
        <tr>
            <td>Expected Hold Period(Years)</td>
             <td></td>
             <td><?php echo $ex_period ?></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>Loan Downpayment</td>
             <td></td>
             <td><?php echo $loan_down_payment?></td>
        </tr>
        <tr>
            <td>Acquistion Fee</td>
             <td><?php echo $acq_fee ?>%</td>
             <td><?php
              $total_equity += $purchase * $acq_fee / 100;
              $total_cost += $purchase * $acq_fee / 100;
             
             echo $purchase * $acq_fee / 100 ?></td>
        
            </tr>
        <tr>
            <td>Financing Fee</td>
            <td><?php echo $fin_fee ?>%</td>
             <td><?php
             $total_equity += $purchase * $fin_fee / 100;
             $total_cost += $purchase * $fin_fee / 100;
             echo $purchase * $fin_fee / 100 ?></td>
        
        </tr>
        <tr>
            <td>Title Fee</td>
            <td><?php echo $title_fee ?>%</td>
             <td><?php 
             $total_equity += $purchase * $title_fee / 100;
             $total_cost += $purchase * $title_fee / 100;
             
             echo $purchase * $title_fee/ 100 ?></td>
        
        </tr>
        <tr>
            <td>Capitial Reserve(Renovations)</td>
            <td><?php echo $cap_rev?>%</td>
             <td><?php
             $total_equity += $purchase * $cap_rev / 100;
             $total_cost += $purchase * $cap_rev / 100;
             echo $purchase * $cap_rev / 100 ?></td>
        
        </tr>
        <tr>
            <td>Leasing Reserve</td>
            <td><?php echo $leaseing_rev ?>%</td>
             <td><?php
             $total_equity += $purchase * $leaseing_rev / 100;
             $total_cost += $purchase * $leaseing_rev / 100;
             
             echo $purchase * $leaseing_rev / 100 ?></td>
        
        </tr>
        <tr>
            <td>Broker Fee</td>
            <td><?php echo $broker_fee ?>%</td>
            
             <td><?php
             $total_equity += $purchase * $broker_fee / 100;
             $total_cost += $purchase * $broker_fee / 100;
             
             echo $purchase * $broker_fee / 100 ?></td>
        
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>Total Initial Equity</td>
             <td></td>
             <td><?php echo $total_equity; ?></td>
        </tr>
        <tr>
            <td>Total Cost Of Investment</td>
             <td></td>
             <td><?php echo $total_cost; ?></td>
        </tr>
        
    </tbody>
      </table>
      <hr>
    <H4>Original Loan</h4>
    <table style="width:380px;" class="table-borderless table-sm">
    <tbody>
        <tr>
            <td>Cost Of Building</td>
             <td></td>
             <td><?php echo $purchase ?></td>
        </tr>
        <tr>
            <td>LTV Rate</td>
             <td></td>
             <td><?php echo $loan_value ?>%</td>
        </tr>
        <tr >
        <td></td>
        </tr>
        <tr >
        <td></td>
        </tr>
        <tr >
        <td></td>
        </tr>
        <tr >
        <td></td>
        </tr>
        
        
        
        <tr>
            <td>Bank Name</td>
             <td></td>
             <td><?php echo $bank ?></td>
        </tr>
        <tr >
        <td></td>
        </tr>
        <tr>
            <td>Price Balance</td>
             <td></td>
             <td><?php echo $price_balance?></td>
        </tr>
        <tr>
            <td>Amorization (Months)</td>
             <td></td>
             <td><?php echo $amr_months?></td>
        </tr>
        <tr>
            <td>Rate</td>
             <td></td>
             <td><?php echo $rate?>%</td>
        </tr>
        <tr>
            <td>Term(Year)</td>
             <td></td>
             <td><?php echo $term?></td>
        </tr>
        
    </tbody>
      </table>
      </center>


</div>

</div>

</body>

</html>