<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Etudiant</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('etudiants.index')}}">
              <i class="bi bi-circle"></i><span>Liste Etudiants</span>
            </a>
          </li>
          <li>
            <a href="{{route('etudiants.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Etudiant</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Gestion Demandes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('demandes.index')}}">
              <i class="bi bi-circle"></i><span>Liste Demandes</span>
            </a>
          </li>
          <li>
            <a href="{{route('demandes.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Demande</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Gestion Soutenances</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('soutenances.index')}}">
              <i class="bi bi-circle"></i><span>Liste Soutenances</span>
            </a>
          </li>
          <li>
            <a href="{{route('soutenances.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Soutenance</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Enseignants</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('enseignants.index')}}">
              <i class="bi bi-circle"></i><span>Liste Enseignants</span>
            </a>
          </li>
          <li>
            <a href="{{route('enseignants.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Enseignant</span>
            </a>
          </li>

        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Directeurs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('directeurs.index')}}">
              <i class="bi bi-circle"></i><span>Liste Directeurs</span>
            </a>
          </li>
          <li>
            <a href="{{route('directeurs.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Directeur</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_1 -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion MaitreStage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('maitres.index')}}">
              <i class="bi bi-circle"></i><span>Liste MaitreStage</span>
            </a>
          </li>
          <li>
            <a href="{{route('maitres.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter MaitreStage</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_2 -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_3" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Presidents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('presidents.index')}}">
              <i class="bi bi-circle"></i><span>Liste Presidents</span>
            </a>
          </li>
          <li>
            <a href="{{route('presidents.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Presidents</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_3 -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_4" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Salles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('salles.index')}}">
              <i class="bi bi-circle"></i><span>Liste Salles</span>
            </a>
          </li>
          <li>
            <a href="{{route('salles.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Salle</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_4 -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>
