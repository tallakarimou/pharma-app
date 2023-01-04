<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{  asset('assets/img/sidebar-1.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        P-A
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Pharma-App
      </a>
    </div>
    <div class="sidebar-wrapper">
      <div class="user">
        <div class="photo">
          <img src="{{  asset('assets/img/faces/avatar.jpg') }}" />
        </div>
        <div class="user-info">
          <a data-toggle="collapse" href="#collapseExample" class="username">
            <span>
                {{ auth()->user()->name }}
              <b class="caret"></b>
            </span>
          </a>
          <div class="collapse" id="collapseExample">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> MP </span>
                  <span class="sidebar-normal"> My Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> EP </span>
                  <span class="sidebar-normal"> Edit Profile </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> S </span>
                  <span class="sidebar-normal"> Settings </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item active ">
          <a class="nav-link" href="../examples/dashboard.html">
            <i class="material-icons">dashboard</i>
            <p> Dashboard </p>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#invoices">
            <i class="material-icons">image</i>
            <p> Invoices
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="invoices">
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> AI </span>
                  <span class="sidebar-normal"> Add Invoices </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> MI </span>
                  <span class="sidebar-normal"> Manage Invoices </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesusers">
              <i class="material-icons">person</i>
              <p> Users
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesusers">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('users.create') }}">
                    <span class="sidebar-mini"> AU </span>
                    <span class="sidebar-normal"> Add User </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('users.index') }}">
                    <span class="sidebar-mini"> MU </span>
                    <span class="sidebar-normal"> Manage Users </span>
                  </a>
                </li>
              </ul>
            </div>
        </li>



          <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#products">
            <i class="material-icons">content_paste</i>
            <p> Products
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="products">
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('products.create') }}">
                  <span class="sidebar-mini"> AP </span>
                  <span class="sidebar-normal"> Add Produt </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('products.index') }}">
                  <span class="sidebar-mini"> MP </span>
                  <span class="sidebar-normal"> Manage Product </span>
                </a>
              </li>

          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#tablessuppliers">
            <i class="material-icons">list</i>
            <p> Suppliers
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="tablessuppliers">
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('suppliers.create') }}">
                  <span class="sidebar-mini"> AS </span>
                  <span class="sidebar-normal"> Add Supplier </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('suppliers.index') }}">
                  <span class="sidebar-mini"> MS </span>
                  <span class="sidebar-normal"> Manage Suppliers </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link" data-toggle="collapse" href="#tableroles">
            <i class="material-icons">border_color</i>
            <p> Roles
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="tableroles">
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link" href="{{route('roles.create')}}">
                  <span class="sidebar-mini"> AR </span>
                  <span class="sidebar-normal"> Add Role </span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('roles.index')}}">
                  <span class="sidebar-mini"> MR </span>
                  <span class="sidebar-normal"> Manage Roles </span>
                </a>
              </li>
            </ul>
          </div>


        </li>

        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#sales">
              <i class="material-icons">input</i>
              <p> Sales
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="sales">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> AS </span>
                    <span class="sidebar-normal"> Add Sales </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MS </span>
                    <span class="sidebar-normal"> Manage Sales </span>
                  </a>
                </li>
              </ul>
            </div>
        </li>


        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#report">
              <i class="material-icons">search</i>
              <p> Report
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="report">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> SR </span>
                    <span class="sidebar-normal"> Sales Report </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> OR </span>
                    <span class="sidebar-normal"> Orders Report </span>
                  </a>
                </li>
              </ul>
            </div>
        </li>




        <li class="nav-item ">
          <a class="nav-link" href="../examples/calendar.html">
            <i class="material-icons">date_range</i>
            <p> Calendar </p>
          </a>
        </li>
      </ul>
    </div>
  </div>
