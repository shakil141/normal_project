<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

      <!-- TopBar -->

      @include('_partials.backend_topbar')

      <!-- Topbar -->

      <!-- Container Fluid-->

      <div class="container-fluid" id="container-wrapper">

          @yield('brandchumb')

          @yield('main_content')

        <!-- Modal Logout -->

        @include('_partials.backend_logout')

        <!-- Modal Logout -->

      </div>

      <!---Container Fluid-->
    </div>
