<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />
	<title>Codeigniter 4 Authentication</title>
	<link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('css/auth.css'); ?>">
</head>
<body>

    <div class="wrapper">
        <div class="auth-content">
        	<?= $this->renderSection('main') ?>
        </div>
    </div>

	<script src="<?= base_url("vendor/jquery/jquery.min.js") ?>" type="text/javascript"></script>
	<script src="<?= base_url("vendor/bootstrap/js/bootstrap.min.js") ?>" type="text/javascript"></script>

</body>
</html>