<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="<?php echo e(route('dashboard')); ?>" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('admin.calendar')); ?>" class=" waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo e(route('admin.inbox')); ?>">Inbox</a></li>
                                    <li><a href="<?php echo e(route('admin.read')); ?>">Read Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Manage Products</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                    <li><a href="<?php echo e(route('admin.allproduct')); ?>">All Products</a></li>
                                        
                                    </li>

                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Manage Purchases</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                    <li><a href="<?php echo e(route('admin.allpurchases')); ?>">All Purchases</a></li>
                                        
                                    </li>

                                    
                                </ul>
                            </li>

                            <li class="menu-title">Stock</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Manage Stocks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo e(route('admin.allstock')); ?>">All Stocks</a></li>
                                </ul>
                            </li>

                            

                            
                            

                    </div>
                    <!-- Sidebar -->
                </div>
            </div><?php /**PATH C:\Users\rloui\app-name\resources\views/admin/body/sidebar.blade.php ENDPATH**/ ?>