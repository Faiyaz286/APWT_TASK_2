
<?php $__env->startSection('title'); ?>
Registration
<?php $__env->stopSection(); ?>
<?php $__env->startSection('forms'); ?>
    <div class="form-control">
        <br>
        <form action="<?php echo e('register'); ?>" method="post">
            <fieldset>
                <?php echo e(csrf_field()); ?>

                <legend>Registration Form:</legend>
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo e(old('username')); ?>">
                        </td>
                        <td>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            UserName:
                        </td>
                        <td>
                            <input type="text" name="username" value="<?php echo e(old('username')); ?>">
                        </td>
                        <td>
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" name="email" value="<?php echo e(old('username')); ?>">
                        </td>
                        <td>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone Number:
                        </td>
                        <td>
                            <input type="text" name="phone" value="<?php echo e(old('username')); ?>">
                        </td>
                        <td>
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="password" value="">
                        </td>
                        <td>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="register" value="Register"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_2\resources\views/registration/registration.blade.php ENDPATH**/ ?>