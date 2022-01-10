<?php $__env->startSection('content'); ?>
    <main class="col-12 col-lg-5">
        <div class="mb-5 text-center">
            <h1>Please <span class="font-cursive">sign in</span></h1>
        </div>
        <div class="card shadow-lg w-auto">
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('canvas.login')); ?>" class="w-100 my-auto">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="email" class="font-weight-bold text-uppercase text-muted small"> Email </label>
                            <input
                                type="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                id="email"
                                class="form-control border-0 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Email address"
                                required
                                autofocus
                            />
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="password" class="font-weight-bold text-uppercase text-muted small"> Password </label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control border-0 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Password"
                                required
                            />
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <button class="btn btn-success btn-block mt-3" type="submit">Sign in</button>
                        </div>
                    </div>
                </form>

                <div class="d-flex justify-content-center mt-3">
                    <a class="btn btn-link text-decoration-none" href="<?php echo e(route('canvas.password.request')); ?>"> Forgot your password? </a>
                </div>
            </div>
        </div>
        <div class="mt-5 text-center">
            <p class="text-muted">Powered by <a href="https://trycanvas.app" class="text-primary text-decoration-none">Canvas</a></p>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\blogwowcell\blogwowcell\vendor\austintoddj\canvas\src/../resources/views/auth/login.blade.php ENDPATH**/ ?>