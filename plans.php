
<?php include('header.php');?>



<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="">Flexible pricing for every business</h1>
	<p class="lead">Upgrade, downgrade or cancel at any time</p>
</div>
<div class="">
	<center>
		<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
			<div class="radio-toolbar">
				<input type="radio" id="radioApple" name="price_type" value="month" checked>
				<label for="radioApple">Monthly</label>

				<input type="radio" id="radioBanana" name="price_type" value="annual">
				<label for="radioBanana">Annual</label>
			</div>
			<p>&nbsp;</p>
			<script type="text/javascript">
			<?php
				$sql1 = "SELECT * FROM plan";
				$result1 = $conn->query($sql1);
				$sql2 = "SELECT * FROM plan";
				$result2 = $conn->query($sql2);	
						?>
				$('input[type=radio][name=price_type]').on('change', function() {
					switch ($(this).val()) {
						case 'month':
						<?php while($row1 = $result1->fetch_assoc()) {?>
						$("#basic<?php echo $row1['plan_price'];?>").html("<b>Rp <?php echo $row1['plan_price'];?>.000/Month</b>");
						<?php } ?>			
							break;
						case 'annual':
							<?php while($row2 = $result2->fetch_assoc()) {?>
								$("#basic<?php echo $row2['plan_price'];?>").html("<b>Rp <?php echo $row2['year_plan'];?>.000/Year</b>");
								<?php } ?>
							break;
					}
				});
			</script>
		</div>
	</center>
	<br>
</div>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center" style="margin-left:5%;margin-right:5%;">
	<style media="screen">
		.card
		{
			height: 90%;
		}
	</style>
	<?php
	$sql = "SELECT * FROM plan";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			?>
	<div class="col">
		<br><br>
		 <div class="card mb-3 shadow-sm">
				<div class="card-body">
					<center>
						<h4 style=" font-size: 18px;"><?php echo $row['plan_name'];?></h4>
						<p><?php echo $row['plan_desc'];?></p>
						<hr>
						<br>
						<p style:="font-size:50px" id="basic<?php echo $row['plan_price'];?>"> Rp<b id="basic" style="color:black;"> <?php echo $row['plan_price'];?>.000</b><span id="tem"> /Month</span> </p>
						<br>
					</center>
					<button type="button" data-toggle="modal" data-target="#signup" class="btn btn-primary">Sign up for free</button>
					 <ul class="list-unstyled mt-3 mb-4">
						 <li><i class="fas fa-check" style="color:#38b6ff;"></i>Access to influencers with <?php echo $row['Influencers_form'];?>-<?php echo $row['Influencers_to'];?> Followers </li>
						 <br><?php if($row['search_option'] !=''){?>
						 <li><i class="fas fa-check" style="color:#38b6ff;"></i><?php echo $row['search_option']; }?></li>

					 </ul>
					 <p><b><?php echo $row['influencer_reports'];?></b> influencer reports</p>
				</div>
			</div>
		</div>
	<?php }} ?>
	
</div>

<?php include('footer.php');?>

