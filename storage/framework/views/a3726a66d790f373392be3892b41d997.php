<!DOCTYPE html>
<html lang="en" class="<?php echo e($htmlClass ?? ''); ?>">

<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LDSZZFGE6B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LDSZZFGE6B');
</script>

    <!-- Stylesheet, Meta Tag, Title -->
    <?php echo $__env->make('frontend.includes.partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="<?php echo e($bodyClass ?? ''); ?>">
    <!-- Start Contenet Area-->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- End Contenet area -->

    <!-- Start Script area -->
    <?php echo $__env->make('frontend.includes.partials.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
    <!-- End Script area -->
     <?php echo $__env->make('cookie-consent::index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>


</html>
<?php /**PATH C:\zalgo-infotech\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>