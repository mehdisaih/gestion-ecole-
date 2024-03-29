<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="<?php echo e(set_active(['setting/page'])); ?>">
                    <a href="<?php echo e(route('setting/page')); ?>">
                        <i class="fas fa-cog"></i> 
                        <span>parametre</span>
                    </a>
                </li>
                <li class="submenu <?php echo e(set_active(['home','teacher/dashboard','student/dashboard'])); ?>">
                    <a href="#"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul> <?php if(Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin'): ?>
                        <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(set_active(['home'])); ?>">Admin Dashboard</a></li>
                        <?php endif; ?>
                        <?php if(Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin'|| Session::get('role_name') === 'Teachers'): ?>
                        <li><a href="<?php echo e(route('teacher/dashboard')); ?>" class="<?php echo e(set_active(['teacher/dashboard'])); ?>">Enseignant Dashboard</a></li>
                        <?php endif; ?>
                        <?php if(Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin'|| Session::get('role_name') === 'Student'): ?>
                        <li><a href="<?php echo e(route('student/dashboard')); ?>" class="<?php echo e(set_active(['student/dashboard'])); ?>">Etudiant Dashboard</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php if(Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin'): ?>
                <li class="submenu <?php echo e(set_active(['list/users'])); ?> <?php echo e((request()->is('view/user/edit/*')) ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>Gestion des utilisateurs</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('list/users')); ?>" class="<?php echo e(set_active(['list/users'])); ?> <?php echo e((request()->is('view/user/edit/*')) ? 'active' : ''); ?>">List Users</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if(Session::get('role_name') === 'Admin'|| Session::get('role_name') === 'Super Admin'): ?>
                <li class="submenu <?php echo e(set_active(['student/list','student/grid','student/add/page'])); ?> <?php echo e((request()->is('student/edit/*')) ? 'active' : ''); ?> <?php echo e((request()->is('student/profile/*')) ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Etudiant</span>
                        <span class="menu-arrow"></span>
                    </a> 
                    <ul>
                        <li><a href="<?php echo e(route('student/list')); ?>"  class="<?php echo e(set_active(['student/list','student/grid'])); ?>">listes des Etudiants</a></li>
                        <li><a href="<?php echo e(route('student/add/page')); ?>" class="<?php echo e(set_active(['student/add/page'])); ?>">Ajouter Etudiant</a></li>
                        <li><a class="<?php echo e((request()->is('student/edit/*')) ? 'active' : ''); ?>">Modifier Etudiant</a></li>
                        <li><a href=""  class="<?php echo e((request()->is('student/profile/*')) ? 'active' : ''); ?>">Voir Etudiant</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if(Session::get('role_name') === 'Admin'|| Session::get('role_name') === 'Super Admin'): ?>
                <li class="submenu  <?php echo e(set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit'])); ?> <?php echo e((request()->is('teacher/edit/*')) ? 'active' : ''); ?>">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                        <span> Enseignants</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('teacher/list/page')); ?>" class="<?php echo e(set_active(['teacher/list/page','teacher/grid/page'])); ?>">Listes Enseignants</a></li>
                        <li><a href="teacher-details.html">Voir Enseignants </a></li>
                        <li><a href="<?php echo e(route('teacher/add/page')); ?>" class="<?php echo e(set_active(['teacher/add/page'])); ?>">Ajouter Enseignant</a></li>
                        <li><a class="<?php echo e((request()->is('teacher/edit/*')) ? 'active' : ''); ?>">Modifier Enseignant</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if(Session::get('role_name') === 'Admin'|| Session::get('role_name') === 'Super Admin'): ?>
                <li class="submenu <?php echo e(set_active(['department/add/page','department/edit/page'])); ?>">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Departments</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="<?php echo e(route('department/list')); ?>" class="<?php echo e(set_active(['department/list'])); ?>">Department List</a></li>
                        <li><a href="<?php echo e(route('department/add/page')); ?>" class="<?php echo e(set_active(['department/add/page'])); ?>">Department Add</a></li>
                        <li><a href="<?php echo e(route('department/edit/page')); ?>" class="<?php echo e(set_active(['department/edit/page'])); ?>">Department Edit</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Subjects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href= "<?php echo e(route ('Subjects/list')); ?>" class="<?php echo e(set_active(['Subjects/list'])); ?>">Subject List</a></li>
                        <li><a href="<?php echo e(route ('Subjects/add')); ?>" class="<?php echo e(set_active(['Subjects/add'])); ?>">Subject Add</a></li>
                        <li><a href="<?php echo e(route ('Subjects/edit')); ?>" class="<?php echo e(set_active(['Subjects/edit'])); ?>">Subject Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i>
                        <span> Invoices</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="invoices.html">Invoices List</a></li>
                        <li><a href="invoice-grid.html">Invoices Grid</a></li>
                        <li><a href="add-invoice.html">Add Invoices</a></li>
                        <li><a href="edit-invoice.html">Edit Invoices</a></li>
                        <li><a href="view-invoice.html">Invoices Details</a></li>
                        <li><a href="invoices-settings.html">Invoices Settings</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <?php if(Session::get('role_name') === 'Admin'|| Session::get('role_name') === 'Super Admin'|| Session::get('role_name') === 'Teachers'): ?>
                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i>
                        <span> Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="fees-collections.html">Fees Collection</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="salary.html">Salary</a></li>
                        <li><a href="add-fees-collection.html">Add Fees</a></li>
                        <li><a href="add-expenses.html">Add Expenses</a></li>
                        <li><a href="add-salary.html">Add Salary</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li>
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                <li>
                    <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\projet laravel 9\school_sm_laravel9\resources\views/sidebar/sidebar.blade.php ENDPATH**/ ?>