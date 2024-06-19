
<?php $__env->startSection('admin'); ?>

<div class="page-content">
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6">
            <div class="card"><br><br>
                <center>   
                    <img class="rounded-circle avatar-xl" src="<?php echo e((!empty($adminData->profile_image))? url('upload/admin_images/'
                    .$adminData->profile_image):url('upload/no_image.jpg')); ?>" alt="Card image cap">
                </center> 
                    <div class="card-body">
                        <h4 class="card-title">Name: <?php echo e($adminData->name); ?></h4>
                        <hr>
                        <h4 class="card-title">Email: <?php echo e($adminData->email); ?></h4>
                        <hr>
                        <h4 class="card-title">Username: <?php echo e($adminData->username); ?></h4>
                        <hr>
                        <a href="<?php echo e(route('edit.profile')); ?>" class="btn btn-info waves-effect waves-light"> Edit Profile</a>

                                    </div>
                                </div>
                            </div>
        
        
                        </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rloui\app-name\resources\views/admin/admin_profile_view.blade.php ENDPATH**/ ?>