  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
          <a href="{{ route('dashboard') }}">
              <img style="width: 170px;" src="
              <?php
                $settingData = \App\Models\Setting::first();
                if ($settingData["logo"] != "") {
                    echo url('/uploads/logo') . '/' . $menuData["settingData"]["logo"];
                } else {
                    echo url('/uploads/logo') . '/default.png';
                }
                ?>" class=" logo-icon" alt="logo icon">

          </a>
      </div>

      <ul class="sidebar-menu do-nicescrol">

          <li><a href="{{ route('dashboard') }}" class="waves-effect"><i class="icon-hourglass text-warning"></i><span>Dashboard</span></a></li>
          <li><a href="{{ route('region.index') }}" class="waves-effect"><i class="icon-drop text-info"></i><span>Region</span></a></li>
          <li><a href="{{ route('destination.index') }}" class="waves-effect"><i class="icon-drop text-info"></i><span>Destination</span></a></li>
          <li><a href="{{ route('packages.index') }}" class="waves-effect"><i class="icon-drop text-info"></i><span>Packages</span></a></li>
          <li><a href="{{ route('slider.index') }}" class="waves-effect"><i class="icon-drop text-info"></i><span>Slider</span></a></li>
          <li><a href="{{ route('setting') }}" class="waves-effect"><i class="icon-drop text-info"></i><span>Setting</span></a></li>
      </ul>

  </div>
  <!--End sidebar-wrapper-->