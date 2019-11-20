<?php

echo "
<!-- Sidebar -->
<ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

<!-- Sidebar - Brand -->
<a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php'>
  <div class='sidebar-brand-icon rotate-n-15'>
    <i class='fas fa-laugh-wink'></i>
  </div>
  <div class='sidebar-brand-text mx-3'>FIC e Eventos</div>
</a>

<!-- Divider -->
<hr class='sidebar-divider my-0'>

<!-- Nav Item - Dashboard -->
<li class='nav-item active'>
  <a class='nav-link' href='index.php'>
    <i class='fas fa-fw fa-tachometer-alt'></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class='sidebar-divider'>

<!-- Heading -->
<div class='sidebar-heading'>
  Menu
</div>

      <!-- Nav Item - Pages Collapse Menu -->
      
      <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUtilities' aria-expanded='true' aria-controls='collapseUtilities'>
          <i class='fas fa-fw fa-folder'></i>
          <span>Ações Usuários</span>
        </a>
        <div id='collapseUtilities' class='collapse' aria-labelledby='headingUtilities' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Eventos Disponíveis:</h6>
            <a class='collapse-item' href='congresso.php'>Congresso</a>
            <a class='collapse-item' href='curso.php'>Curso</a>
            <a class='collapse-item' href='debate.php'>Debate</a>
            <a class='collapse-item' href='eventos.php'>Evento</a>
            <a class='collapse-item' href='extensao.php'>Extensão</a>
            <a class='collapse-item' href='fic.php'>FIC</a>
            <a class='collapse-item' href='ic.php'>Iniciação-Cientifica</a>
            <a class='collapse-item' href='mesaredonda.php'>Mesa Redonda</a>
            <a class='collapse-item' href='minicurso.php'>Mini-Curso</a>
            <a class='collapse-item' href='oficina.php'>Oficina</a>
            <a class='collapse-item' href='palestra.php'>Palestra</a>
            <a class='collapse-item' href='seminario.php'>Seminário</a>
            <a class='collapse-item' href='workshop.php'>Workshop</a>
          </div>
        </div>
      </li>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapsePages' aria-expanded='true' aria-controls='collapsePages'>
          <i class='fas fa-fw fa-folder'></i>
          <span>Páginas</span>
        </a>
        <div id='collapsePages' class='collapse' aria-labelledby='headingPages' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Login Screens:</h6>
            <a class='collapse-item' href='login.php'>Login</a>
            <a class='collapse-item' href='register.php'>Register</a>
            <a class='collapse-item' href='forgot-password.php'>Forgot Password</a>
            <div class='collapse-divider'></div>
            <h6 class='collapse-header'>Other Pages:</h6>
            <a class='collapse-item' href='404.php'>404 Page</a>
            <a class='collapse-item' href='blank.php'>Blank Page</a>
          </div>
        </div>
      </li>

      
      <!-- Divider -->
      <hr class='sidebar-divider'>

      <!-- Heading -->
      <div class='sidebar-heading'>
        Addons
      </div>

      <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>
          <i class='fas fa-fw fa-cog'></i>
          <span>Components</span>
        </a>
        <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Custom Components:</h6>
            <a class='collapse-item' href='zbuttons.php'>Buttons</a>
            <a class='collapse-item' href='zcards.php'>Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUtilities' aria-expanded='true' aria-controls='collapseUtilities'>
          <i class='fas fa-fw fa-wrench'></i>
          <span>Utilities</span>
        </a>
        <div id='collapseUtilities' class='collapse' aria-labelledby='headingUtilities' data-parent='#accordionSidebar'>
          <div class='bg-white py-2 collapse-inner rounded'>
            <h6 class='collapse-header'>Custom Utilities:</h6>
            <a class='collapse-item' href='zutilities-color.php'>Colors</a>
            <a class='collapse-item' href='zutilities-border.php'>Borders</a>
            <a class='collapse-item' href='zutilities-animation.php'>Animations</a>
            <a class='collapse-item' href='zutilities-other.php'>Other</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Charts -->
      <li class='nav-item'>
        <a class='nav-link' href='zcharts.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class='nav-item'>
        <a class='nav-link' href='tables.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class='sidebar-divider d-none d-md-block'>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class='text-center d-none d-md-inline'>
        <button class='rounded-circle border-0' id='sidebarToggle'></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


";