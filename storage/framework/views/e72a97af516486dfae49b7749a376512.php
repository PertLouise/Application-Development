
<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4><br><br>

                        <?php if(session('message')): ?>
                        <p class="alert alert-success alert-dismissible fade show"><?php echo e(session('message')); ?></p>
                        <?php endif; ?>

                        <?php if(session('error')): ?>
                        <p class="alert alert-danger alert-dismissible fade show"><?php echo e(session('error')); ?></p>
                        <?php endif; ?>

                        <form method="post" action="<?php echo e(route('update.password')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <label for="oldpassword" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input name="oldpassword" class="form-control" type="password" id="oldpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input name="newpassword" class="form-control" type="password" id="newpassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="confirm_password" class="col-sm-2 col-form-label">Confirm New Password</label>
                                <div class="col-sm-10">
                                    <input name="confirm_password" class="form-control" type="password" id="confirm_password">
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rloui\app-name\resources\views/admin/admin_change_password.blade.php ENDPATH**/ ?>