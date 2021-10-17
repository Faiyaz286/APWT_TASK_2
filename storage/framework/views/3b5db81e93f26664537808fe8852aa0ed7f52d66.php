<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    
    <body>
        <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('forms'); ?>
        </div>
    </body>
</html><?php /**PATH G:\Files\APWT_TASK_2\resources\views/layouts/form.blade.php ENDPATH**/ ?>