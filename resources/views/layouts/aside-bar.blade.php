 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link " href="/">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#departement-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Gestion departement</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="departement-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('department.create') }}">
                         <i class="bi bi-circle"></i><span>Create departement</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('department.index') }}">
                         <i class="bi bi-circle"></i><span>Departement list</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Components Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#materiel-ressources-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Gestion materiel ressources</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="materiel-ressources-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('ressources.create') }}">
                         <i class="bi bi-circle"></i><span>Create ressource</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('ressources.index') }}">
                         <i class="bi bi-circle"></i><span>Ressource list</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Components Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#human-ressources-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Gestion human ressources</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="human-ressources-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('doctors.index') }}">
                         <i class="bi bi-circle"></i><span>Doctors</span>
                     </a>
                 </li>
                 <li>
                     <a href="">
                         <i class="bi bi-circle"></i><span>Patients</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('agentService.index') }}">
                         <i class="bi bi-circle"></i><span>Service Agent</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Components Nav -->

         <li class="nav-heading">Pages</li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="users-profile.html">
                 <i class="bi bi-person"></i>
                 <span>Profile</span>
             </a>
         </li><!-- End Profile Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="pages-login.html">
                 <i class="bi bi-box-arrow-in-right"></i>
                 <span>Logout</span>
             </a>
         </li><!-- End Login Page Nav -->

     </ul>

 </aside><!-- End Sidebar-->
