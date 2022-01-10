<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?> ― Canvas</title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css', 'vendor/canvas')); ?>">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Karla&family=Merriweather:wght@400;700&display=swap">

    <?php if(\Canvas\Canvas::enabledDarkMode($jsVars['user']['dark_mode'])): ?>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.5.0/build/styles/sunburst.min.css">
    <?php else: ?>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.5.0/build/styles/github.min.css">
    <?php endif; ?>

    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.5.0/build/highlight.min.js"></script>
</head>
<body class="mb-5"
    <?php if(\Canvas\Canvas::enabledDarkMode($jsVars['user']['dark_mode'])): ?> data-theme="dark" <?php endif; ?>
    <?php if(\Canvas\Canvas::usingRightToLeftLanguage($jsVars['user']['locale'])): ?> data-lang="rtl" <?php endif; ?>
>

<?php if(!\Canvas\Canvas::assetsUpToDate()): ?>
    <div class="alert alert-danger border-0 text-center rounded-0 mb-0">
        <?php echo e(trans('canvas::app.assets_are_not_up_to_date')); ?>

        <?php echo e(trans('canvas::app.to_update_run')); ?><br/><code>php artisan canvas:publish</code>
    </div>
<?php endif; ?>

<div id="canvas">
    <router-view></router-view>
</div>

<script>
    window.Canvas = <?php echo json_encode($jsVars, 15, 512) ?>;
</script>

<script type="text/javascript" src="<?php echo e(mix('js/app.js', 'vendor/canvas')); ?>"></script>
</body>
</html>
<?php /**PATH C:\blogwowcell\blogwowcell\vendor\austintoddj\canvas\src/../resources/views/layout.blade.php ENDPATH**/ ?>