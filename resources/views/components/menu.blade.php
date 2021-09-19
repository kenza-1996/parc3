<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item ">
            <a href="{{ route('home') }}" class="nav-link {{ setMenuActive('home') }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>

        @can("employe")
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Vue globale</p>
                </a>
              </li>
             
            </ul>
        </li>
        @endcan

        @can("admin")
        <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Gestion des utilisateurs

             
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.habilitations.users.index') }}"
                class="nav-link {{ setMenuActive('admin.habilitations.users.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
             
            </ul>
        </li>

       
       
        <li class="nav-item {{ setMenuClass('admin.Materiels.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Materiels.', 'active') }}">
              <i class="fas fa-desktop"></i>
              <p>
                Gestion des Materiels

               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.Materiels.materiels.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.materiels.index') }}"
                >
                  <i class="fas fa-laptop "></i> 
                  <p>Materiels</p>
                </a>
              </li>
             
               <li class="nav-item">
                <a  href="{{ route('admin.Materiels.categories.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.categories.index') }}">
                   <i class="nav-icon far fa-circle"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{ route('admin.Materiels.marques.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.marques.index') }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Marques</p>
                </a>
              </li>
                <li class="nav-item">
                <a  href="{{ route('admin.Materiels.lots.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.lots.index') }}">
                   <i class="nav-icon far fa-circle"></i>
                  <p>Lots</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item {{ setMenuClass('admin.Personnels.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Personnels.', 'active') }}">
              
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Gestion des Personnels

                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.Personnels.personnels.index') }}"
                class="nav-link {{ setMenuActive('admin.Personnels.personnels.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Personnels</p>
                </a>
              </li>
             
            </ul>
        </li>
        <li class="nav-item {{ setMenuClass('admin.Structures.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Structures.', 'active') }}">
              <i class="fas fa-laptop-house"></i>
              <p>
                Gestion des Structures

               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.Structures.structures.index') }}"
                class="nav-link {{ setMenuActive('admin.Structures.structures.index') }}"
                >
                 <i class="fas fa-laptop-house"></i>
                  <p>Structures</p>
                </a>
              </li>
             
            </ul>
        </li>


      
        
        <li class="nav-item">
             <a
                href="{{ route('admin.affectations.index') }}"
                class="nav-link {{ setMenuActive('admin.affectations.index') }}"
                >
                 <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Affectation
                </p>
            </a>
        </li>
       
         <li class="nav-item">
             <a
                href="{{ route('admin.reparationInternes.index') }}"
                class="nav-link {{ setMenuActive('admin.reparationInternes.index') }}"
                >
                 <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                ReparationInternes
                </p>
            </a>
        </li>
     

            <li class="nav-item {{ setMenuClass('admin.Demandes.', 'menu-open') }}">
            <a href="  {{ route('admin.Demandes.demande.index') }}" class="nav-link {{ setMenuActive('admin.Demandes.demande.index') }} {{ setMenuClass('admin.Demandes.', 'active') }}">
                 <i class="fas fa-file-alt "></i>
                <p>
                Demmande de Prestation
                </p>
            </a>
        </li>
        @endcan

        @can("admin-sag")
        <li class="nav-header">Raparation</li>
        <li class="nav-item  {{ setMenuClass('admin-sag.Reparation.', 'menu-open') }}">
            <a href="{{ route('admin-sag.Reparation.reparations.index') }}" class="nav-link {{ setMenuActive('admin-sag.Reparation.reparations.index') }} {{ setMenuClass('admin-sag.Reparation.', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Reparation Externe
                </p>
            </a>
        </li>
        <li class="nav-item  {{ setMenuClass('admin-sag.Reparateurs.', 'menu-open') }}">
            <a href=" {{ route('admin-sag.Reparateurs.reparateurs.index') }}" class="nav-link {{ setMenuActive('admin-sag.Reparateurs.reparateurs.index') }} {{ setMenuClass('admin-sag.Reparateurs.', 'active') }} ">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Reparateurs
                </p>
            </a>
        </li>

        <li class="nav-header">Documents</li>
  
        <li class="nav-item {{ setMenuClass('admin-sag.Bondecomande.', 'menu-open') }}">
            <a href=" {{ route('admin-sag.Bondecomande.commandes.index') }}" class="nav-link {{ setMenuActive('admin-sag.Bondecomande.commandes.index') }} {{ setMenuClass('admin-sag.Bondecomande.', 'active') }}">
                 <i class="fas fa-file-alt "></i>
                <p>
                Bon de Commande
                </p>
            </a>
        </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
                 <i class="fas fa-file-alt "></i>
                <p>
                Bon de Sortie
                </p>
            </a>
        </li>
        @endcan

        </ul>
      </nav>
