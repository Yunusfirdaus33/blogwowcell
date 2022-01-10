<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?> ― Canvas</title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css', 'vendor/canvas')); ?>">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Karla&family=Caveat:wght@700&display=swap">

    <style>
        body,html{
            height:100%;
        }
        .font-cursive {
            font-family: 'Caveat', cursive;
        }
    </style>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\blogwowcell\blogwowcell\vendor\austintoddj\canvas\src/../resources/views/auth.blade.php ENDPATH**/ ?>