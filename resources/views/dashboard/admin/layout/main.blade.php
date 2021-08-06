<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @include('dashboard.admin.layout.css')
  <title> Admin Dashboard</title>
</head>

<body>

  <div class="wrapper">




    @include('dashboard.admin.layout.sidebar')
    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="f67a9759-3221-53c1-60ed-cf9903e269d7">

      @include('dashboard.admin.layout.header')

      <div class="content">
        <div class="container-fluid">
          <div class="row">


            <main class="px-4">
              @yield('content')
            </main>

            
          </div>
        </div>
      </div>
      @include('dashboard.admin.layout.footer')
      
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -761.6px;">
        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
          
        </div>
      </div>
   
    </div>
  </div>

  @include('dashboard.admin.layout.js')
</body>

</html>