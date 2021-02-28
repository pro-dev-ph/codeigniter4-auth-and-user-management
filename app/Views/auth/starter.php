<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Starter Template · Bootstrap</title>
      <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/fontawesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/solid.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/fontawesome/css/brands.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/starter-template.css'); ?>">
</head>

<body>

    <!-- main navigation -->
    <?= view('App\Views\auth\components\navbar') ?>

    <!--     
    <div class="nav-scroller bg-white shadow-sm">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="#">Dashboard</a>
            <a class="nav-link" href="#">Friends<span class="badge badge-pill bg-light align-text-bottom">27</span></a>
            <a class="nav-link" href="#">Explore</a>
            <a class="nav-link" href="#">Suggestions</a>
        </nav>
    </div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb  mb-0 bg-light">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav> 
    -->

    <main role="main" class="">
      <div class="jumbotron bg-light">
          <div class="container heroe">
              <h1 class="font-weight-normal">Welcome <span class="text-capitalize"><?= $userData['name'] ?></span>!</h1>
              <h2 class="mt-4 font-weight-light">You are logged in.</h2>
          </div>
      </div>
    </main>

    <section>
      <h1>About this page</h1>
      <p>The page you are looking at is being generated for your account.</p>
      <p>If you would like to edit this page you will find it located at:</p>
      <pre><code>app/Views/auth/starter.php</code></pre>
      <p>The corresponding controller for this page can be found at:</p>
      <pre><code>app/Controllers/Auth/AccountController.php</code></pre>
    </section>

    <footer>
      <div class="copyrights">
        <p class="mb-2 mt-2">&copy; <?= date('Y') ?> CodeIgniter 4 Authentication and User Management.</p>
      </div>
    </footer>

    <script src="<?= base_url("vendor/jquery/jquery.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>" type="text/javascript"></script>
</body>

</html>