<?php
$title = 'Dashbaord';
require_once "./lib/nav.php";
?>

<style>
	h1.max-width-600 {
		font-size: 65px;
	}
</style>

<div class="pd-20 height-100-p mb-30">
	<div class="row align-items-center">
		<div class="col-md-3 bg-info p-4">
			<h2 class="font-20 weight-500 text-capitalize text-white mb-30">
				Users
			</h2>
			<h1 class="max-width-600 mb-10 text-white">0</h1>
		</div>
		<div class="col-md-3 bg-secondary p-4">
			<h2 class="font-20 weight-500 text-capitalize text-white mb-30">
				Products
			</h2>
			<h1 class="max-width-600 mb-10 text-white">0</h1>
		</div>
		<div class="col-md-3 bg-warning p-4">
			<h2 class="font-20 weight-500 text-capitalize text-white mb-30">
				Orders
			</h2>
			<h1 class="max-width-600 mb-10 text-white">0</h1>
		</div>
		<div class="col-md-3 bg-danger p-4">
			<h2 class="font-20 weight-500 text-capitalize text-white mb-30">
				Another thing
			</h2>
			<h1 class="max-width-600 mb-10 text-white">0</h1>
		</div>
	</div>
</div>

<?php include_once "./lib/auth_footer.php";