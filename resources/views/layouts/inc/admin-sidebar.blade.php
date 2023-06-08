<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
  
  <div class="position-sticky pt-4 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('admin/dashboard') }}">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard (all)
        </a>
      </li>

      @php
      $value =Auth::user()->role_as;
      @endphp

              @if ($value == 0)
              {{-- <h2 type="hidden" >No permissions</h2> --}}
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/category') }}">
                <span data-feather="file" class="align-text-bottom"></span>
                Products 
              </a>
            </li>
          @endif
          

          @if ($value == 0)
          {{-- <h2 type="hidden" >No permissions</h2> --}}
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ url('view-customer') }}">
          <span data-feather="users" class="align-text-bottom"></span>
          Customer List (admin)
        </a>
      </li>
      @endif



      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="shopping-cart" class="align-text-bottom"></span>
          Products
        </a> --}}
      </li>
     
    
      
      
     
    </ul>

            
          @if ($value == 0)
          {{-- <h2 type="hidden" >No permissions</h2> --}}
      @else
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Internal (admin)</span>
  
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            Employees (admin)
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Finance (admin)
          </a>
        </li>
      </ul>
      @endif



  </div>
</nav>


  
