<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?php echo e(route('dashboard')); ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo e(asset('backend/assets/images/logo-sm.png')); ?>" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo e(asset('backend/assets/images/logo-dark.png')); ?>" alt="logo-dark" height="1000px">
                                </span>
                            </a>

                            <a href="<?php echo e(route('dashboard')); ?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo e(asset('backend/assets/images/logo-sm.png')); ?>" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo e(asset('backend/assets/images/logo-light.png')); ?>" alt="logo-light" height="80">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>

                        
                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <?php
                        use App\Models\User;
                        $id = Auth::user()->id;
                        $adminData = User::find($id);
                        ?>

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo e((!empty($adminData->profile_image))? url('upload/admin_images/'
                    .$adminData->profile_image):url('upload/no_image.jpg')); ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1"><?php echo e($adminData->name); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="<?php echo e(route('change.password')); ?>"><i class="ri-wallet-2-line align-middle me-1"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?php echo e(route('admin.logout')); ?>"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            
                        </div>
            
                    </div>
                </div>
            </header><?php /**PATH C:\Users\rloui\app-name\resources\views/admin/body/header.blade.php ENDPATH**/ ?>