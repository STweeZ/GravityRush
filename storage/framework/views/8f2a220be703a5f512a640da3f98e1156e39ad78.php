<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>GravityRush</title>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/user.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">
    <div id="container_header">
        <a class="logo" href="<?php echo e(url('/')); ?>">
            <div id="logo_container"></div>
        </a>
        <div class="liens">
            <div class="container_liens">
                <a class="lien_menu accueil" href="<?php echo e(url('/')); ?>">Accueil</a>
            </div>

            <div class="container_liens">
                <?php if(Auth::user()==null): ?>
                    <a class="lien_menu connect" href="<?php echo e(route('login')); ?>">Se connecter</a>
                <?php else: ?>
                    <a class="lien_menu connect" href="<?php echo e(route('logout')); ?>">Se déconnecter</a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</header>
<div id="main">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html><?php /**PATH C:\Users\STweeZ\Desktop\Projet - Laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>