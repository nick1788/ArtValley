 <!-- Main Sidebar Container -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?php echo base_url() ?>" target="blank" class="brand-link" style="background-color: #FFF;height: 55px;">

         <img src="<?php echo base_url(); ?>assets/img/portfolio/Logo_White-Background-e1715951047952.png" alt="rane" class="brand-image elevation-3 img-fluid" style="opacity: .9;margin-left: 0;margin-right: 0;">

     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <a href="<?php echo base_url() ?>admin/index">
             <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                 <div class="image">
                     <img src="<?php echo base_url(); ?>assets/img/portfolio/Logo_White-Background-e1715951047952.png" class="img-circle elevation-2" alt="User Image">
                 </div>
                 <div class="info">
                     <a style="pointer-events: none;" href="<?php base_url() ?>admin/index" class="d-block"><span style="font-weight: 700;">Admin</span></a>
                 </div>
             </div>
         </a>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                 <!--active-->
                 <li class="nav-header">MASTER Data</li>

             </ul>
         </nav>



         <nav class="mt-2">
             <ul class="
             nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">






                 <!--active-->
                 <!-- <li class="nav-header">MASTER Data</li> -->
                 <!-- 
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-chart-pie"></i>
                         <p>
                             Charts
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/charts/chartjs.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>ChartJS</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/charts/flot.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Flot</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/charts/inline.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inline</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/charts/uplot.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>uPlot</p>
                             </a>
                         </li>
                     </ul>
                 </li> -->


                 <li class="nav-item">
                     <a href="<?php echo base_url() ?>admin/Project/display_data" class="nav-link">
                         <i class="fa-solid fa-diagram-project"></i>
                         <span>&nbsp</span>
                         <p>Project</p>
                     </a>
                 </li>

          
               

                 <li class="nav-item">
                     <a href="<?php echo base_url() ?>admin/Service/display_data" class="nav-link">
                         <i class="nav-icon fas fa-chart-pie"></i>
                         <p>
                             Services
                         </p>
                     </a>
                    
                 </li>

                 <li class="nav-item">
                     <a href="<?php echo base_url(); ?>admin/Blog/display_data" class="nav-link">
                         <i class="fa-solid fa-blog"></i>
                         <p>Blog</p>
                     </a>
                 </li>

                 <!--active-->
                 



                 <!--active-->

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>