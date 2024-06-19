<?php $__env->startSection('admin'); ?>


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Product All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="<?php echo e(route('admin.product_add')); ?>" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Product </i></a> <br>  <br>               

                    <h4 class="card-title">Product All Data </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th> 
                            <th>Supplier Name </th>
                            <th>Unit</th>
                            <th>Category</th> 
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	 
                        	<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($key+1); ?> </td>
                            <td> <?php echo e($item->name); ?> </td> 
                            <td> <?php echo e($item['supplier']['name']); ?> </td> 
                            <td> <?php echo e($item['unit']['name']); ?> </td> 
                            <td> <?php echo e($item['category']['name']); ?> </td> 
                            <td>
   <a href="<?php echo e(route('product.edit',$item->id)); ?>" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="<?php echo e(route('product.delete',$item->id)); ?>" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>
                           
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rloui\app-name\resources\views/admin/product_all.blade.php ENDPATH**/ ?>