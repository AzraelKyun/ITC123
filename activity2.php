<?php
if(isset($_POST['addition'])){
	$first = htmlspecialchars(trim($_POST['first-integer']));
	$second = htmlspecialchars(trim($_POST['second-integer']));

	if($first == ""){
		$status = "swal('Oh Snap!','First Integer field is empty','error');";
	}elseif(!is_numeric($first)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}elseif($second == ""){
		$status = "swal('Oh Snap!','Second Integer field is empty','error');";
	}elseif(!is_numeric($second)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}else{
		$result = $first + $second;
		$status = "swal('Result','".$first." + ".$second." = ".$result."','success');";
	}
}elseif(isset($_POST['subtraction'])){
	$first = htmlspecialchars(trim($_POST['first-integer']));
	$second = htmlspecialchars(trim($_POST['second-integer']));

	if($first == ""){
		$status = "swal('Oh Snap!','First Integer field is empty','error');";
	}elseif(!is_numeric($first)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}elseif($second == ""){
		$status = "swal('Oh Snap!','Second Integer field is empty','error');";
	}elseif(!is_numeric($second)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}else{
		$result = $first - $second;
		$status = "swal('Result','".$first." - ".$second." = ".$result."','success');";
	}
}elseif(isset($_POST['multiplication'])){
	$first = htmlspecialchars(trim($_POST['first-integer']));
	$second = htmlspecialchars(trim($_POST['second-integer']));

	if($first == ""){
		$status = "swal('Oh Snap!','First Integer field is empty','error');";
	}elseif(!is_numeric($first)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}elseif($second == ""){
		$status = "swal('Oh Snap!','Second Integer field is empty','error');";
	}elseif(!is_numeric($second)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}else{
		$result = $first * $second;
		$status = "swal('Result','".$first." x ".$second." = ".$result."','success');";
	}
}elseif(isset($_POST['division'])){
	$first = htmlspecialchars(trim($_POST['first-integer']));
	$second = htmlspecialchars(trim($_POST['second-integer']));

	if($first == ""){
		$status = "swal('Oh Snap!','First Integer field is empty','error');";
	}elseif(!is_numeric($first)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}elseif($second == ""){
		$status = "swal('Oh Snap!','Second Integer field is empty','error');";
	}elseif(!is_numeric($second)){
		$status = "swal('Oh Snap!','First Integer must be numeric','error');";
	}else{
		$result = $first / $second;
		$status = "swal('Result','".$first." / ".$second." = ".$result."','success');";
	}
}elseif(isset($_POST['sine'])){
	$opposite = htmlspecialchars(trim($_POST['opposite']));
	$hypotenuse = htmlspecialchars(trim($_POST['hypotenuse']));

	if($opposite == ""){
		$status = "swal('Oh Snap!','Opposite field is empty','error');";
	}elseif(!is_numeric($opposite)){
		$status = "swal('Oh Snap!','Opposite must be numeric','error');";
	}elseif($hypotenuse == ""){
		$status = "swal('Oh Snap!','Hypotenuse field is empty','error');";
	}elseif(!is_numeric($hypotenuse)){
		$status = "swal('Oh Snap!','Hypotenuse must be numeric','error');";
	}else{
		$result = $opposite / $hypotenuse;
		$status = "swal('Result','".$opposite." / ".$hypotenuse." = ".$result."','success');";
	}
}elseif(isset($_POST['cosine'])){
	$adjacent = htmlspecialchars(trim($_POST['adjacent']));
	$hypotenuse = htmlspecialchars(trim($_POST['hypotenuse']));

	if($adjacent == ""){
		$status = "swal('Oh Snap!','Adjacent field is empty','error');";
	}elseif(!is_numeric($adjacent)){
		$status = "swal('Oh Snap!','Adjacent must be numeric','error');";
	}elseif($hypotenuse == ""){
		$status = "swal('Oh Snap!','Hypotenuse field is empty','error');";
	}elseif(!is_numeric($hypotenuse)){
		$status = "swal('Oh Snap!','Hypotenuse must be numeric','error');";
	}else{
		$result = $adjacent / $hypotenuse;
		$status = "swal('Result','".$adjacent." / ".$hypotenuse." = ".$result."','success');";
	}
}elseif(isset($_POST['tangent'])){
	$opposite = htmlspecialchars(trim($_POST['opposite']));
	$adjacent = htmlspecialchars(trim($_POST['adjacent']));

	if($opposite == ""){
		$status = "swal('Oh Snap!','Opposite field is empty','error');";
	}elseif(!is_numeric($opposite)){
		$status = "swal('Oh Snap!','Opposite must be numeric','error');";
	}elseif($adjacent == ""){
		$status = "swal('Oh Snap!','Adjacent field is empty','error');";
	}elseif(!is_numeric($adjacent)){
		$status = "swal('Oh Snap!','Adjacent must be numeric','error');";
	}else{
		$result = $opposite / $adjacent;
		$status = "swal('Result','".$opposite." / ".$adjacent." = ".$result."','success');";
	}
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="../asset/css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<title>Calculator | JRDCWorks</title>
	<style type="text/css">
		.btn{
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php
	if(isset($status)){
		echo '<script>'.$status.'</script>';
	}
	?>
	<div class="navbar navbar-expand-lg navbar-dark bg-arellano">
		<a class="navbar-brand" href="../">JRDCWorks</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarMenu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="../">Home</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Prelim</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="../prelim/activity1.html">Activity #1</a>
						<a class="dropdown-item" href="../prelim/activity2.php">Activity #2</a>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="container" style="padding-top: 20px;">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="list-group">
				  	<a data-toggle="tab" href="#basic" class="border-arellano list-group-item list-group-item-action"><span class="fa fa-calculator fa-fw text-dark"></span> Basic Calculator</a>
				  	<a data-toggle="tab" href="#sine" class="border-arellano list-group-item list-group-item-action"><span class="fa fa-star fa-fw text-dark"></span> Sine Calculator</a>
				  	<a data-toggle="tab" href="#cosine" class="border-arellano list-group-item list-group-item-action"><span class="fa fa-star fa-fw text-dark"></span> Cosine Calculator</a>
				  	<a data-toggle="tab" href="#tangent" class="border-arellano list-group-item list-group-item-action"><span class="fa fa-star fa-fw text-dark"></span> Tangent Calculator</a>

				  </div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="card border-arellano mb-3">
				  	<div class="card-body">
				  		<div class="tab-content" id="myTabContent" >
						  	<div class="tab-pane fade clearfix active show" id="basic">
						  		<form method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="first-integer" placeholder="First Integer">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="second-integer" placeholder="Second Integer">
										</div>
									</div>
									<div class="form-group" align="center">
										<button type="submit" name="addition" class="btn btn-primary">Addition</button>
										<button type="submit" name="subtraction" class="btn btn-secondary">Subtraction</button>
										<button type="submit" name="multiplication" class="btn btn-success">Multiplication</button>
										<button type="submit" name="division" class="btn btn-info">Division</button>
									</div>
						  		</form>
						  	</div>
						  	<div class="tab-pane fade clearfix" id="sine">
						  		<form method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="opposite" placeholder="Opposite">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="hypotenuse" placeholder="Hypotenuse">
										</div>
									</div>
									<div class="form-group" align="center">
										<button type="submit" name="sine" class="btn btn-info">Calculate</button>
									</div>
						  		</form>
						  	</div>
						  	<div class="tab-pane fade clearfix" id="cosine">
						  		<form method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="adjacent" placeholder="Adjacent">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="hypotenuse" placeholder="Hypotenuse">
										</div>
									</div>
									<div class="form-group" align="center">
										<button type="submit" name="cosine" class="btn btn-info">Calculate</button>
									</div>
						  		</form>
						  	</div>
						  	<div class="tab-pane fade clearfix" id="tangent">
						  		<form method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="opposite" placeholder="Opposite">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><span class="fa fa-hashtag"></span></span>
											</div>
											<input type="number" class="form-control" name="adjacent" placeholder="Adjacent">
										</div>
									</div>
									<div class="form-group" align="center">
										<button type="submit" name="tangent" class="btn btn-info">Calculate</button>
									</div>
						  		</form>
						  	</div>

				  		</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
</body>
</html>
