<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset("admin/assets")}}/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset("admin/assets")}}/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <a class="nav-link w-50 btn btn-success " id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="{{url("dashboard")}}"> profile </a>

       
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url("redirect")}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url("products/create")}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">add product</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Form Elements</span>
        </a>
      </li>
    
 
    
    </ul>
  </nav>