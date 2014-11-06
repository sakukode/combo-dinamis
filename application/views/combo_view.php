<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Combo Dinamis</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Combo Dinamis</h1>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form role="form">
						<div class="form-group">
							<label>Obyek</label>
							<select name="obyek" id="obyek" class="form-control" onchange="getJenis(this.value)">
								<option>--Pilih Obyek--</option>
								<?php 
								if($obyek != null):
								foreach($obyek as $row):
								?>
								<option value="<?php echo $row->id;?>"><?php echo $row->nama_obyek;?></option>
								<?php
								endforeach;
								endif;
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Jenis</label>
							<select name="jenis" id="jenis" class="form-control" onchange="getVarian(this.value)">
								<option>--Pilih Jenis--</option>
							</select>
						</div>
						<div class="form-group">
							<label>Varian</label>
							<input type="text" name="varian" id="varian" placeholder="varian" class="form-control">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>

			function getJenis(id)
			{
				if(id != null) {
					$.ajax({
						url: "<?php echo site_url('welcome/get_jenis');?>",
						type: 'GET',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							 $("#jenis").empty();
							 $("#jenis").append('<option value="">--Pilih Jenis--</option>');
					         $(data).each(function()
							 {
							     var option = $('<option />');
							     option.attr('value', this.id).text(this.nama_jenis);

							     $('#jenis').append(option);
							 });
					    }
					});
				}
				
			}

			function getVarian(id)
			{
				if(id != null)
				{
					$.ajax({
						url: "<?php echo site_url('welcome/get_varian');?>",
						type: 'GET',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							 $("#varian").val(data.varian);
					    }
					});
				}
			}

		</script>
	</body>
</html>