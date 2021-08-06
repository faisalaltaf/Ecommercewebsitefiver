<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="d26ff36c-fe13-ce9a-5380-f82a784e4827">
        <ul class="nav">
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('admin.home')}}">
              <i class="material-icons"></i> -->
              <!-- <p>Dashboard</p> -->
            <!-- </a> -->
          <!-- </li> --> 
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.profile')}}">
              <h4>Admi Profile</h4>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <!-- <i class="material-icons">content_paste</i> -->
              <h4>Table List</h4>
            </a>
          </li>
       
         
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <!-- <i class="material-icons">location_ons</i> -->
              <H4>Maps</H4>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <!-- <i class="material-icons">notifications</i> -->
              <h4>Notifications</h4>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <!-- <i class="material-icons">language</i> -->
              <h4>

Logout
              </h4>
<form method="POST" action="{{ route('admin.logout')}}" id="logout-form" >
                        @csrf
        </form>
              
              </h4>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <!-- <p>Upgrade to PRO</p> -->
            </a>
          </li>
        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div></div>