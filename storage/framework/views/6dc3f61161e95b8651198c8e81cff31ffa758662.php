<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <title>Home</title>
    </head>
    
    <body>
        <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <h1>Home Page</h1>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_2\resources\views/welcome.blade.php ENDPATH**/ ?>