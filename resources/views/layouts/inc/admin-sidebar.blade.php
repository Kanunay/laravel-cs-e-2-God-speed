<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
  
  <div class="position-sticky pt-4 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <h1 aria-current="page" style="font-size: 200%" class="px-3">Admin Tools</h1>
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
        <a class="nav-link" href="{{ url('admin/view-customer') }}">
          <span data-feather="users" class="align-text-bottom"></span>
          Users List
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




  </div>
</nav>


  
