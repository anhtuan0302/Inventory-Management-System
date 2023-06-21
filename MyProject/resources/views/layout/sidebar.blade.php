<div class="col-2" style="background-color: #10163A;">
  <div class="sidebar-logo">
    <img src="{{asset('images/logo.png')}}" alt="Logo" class="sidebar-logo-image">
  </div>
  <div class="sidebar-menu">
    <h4 class="menu-title">Menu</h4>
    
    <ul class="menu-list">
      <li><a href="{{url('/')}}" class="{{ Request::is('/*','/') ? 'active' : '' }}"><i class="bi bi-house-door icon"></i>Dashboard</a></li>
      <li><a href="{{url('/products')}}" class="{{ Request::is('products/*','products') ? 'active' : '' }}"><i class="bi bi-folder"></i>Product</a></li>
      <li><a href="{{url('/categories')}}" class="{{ Request::is('categories/*','categories') ? 'active' : '' }}"><i class="bi bi-tags"></i>Category</a></li>
      <li><a href="{{url('/suppliers')}}" class="{{ Request::is('suppliers/*','suppliers') ? 'active' : '' }}"><i class="bi bi-boxes icon"></i>Supplier</a></li>
      <li><a href="{{url('/warehouses')}}" class="{{ Request::is('warehouses/*','warehouses') ? 'active' : '' }}"><i class="bi bi-house-heart icon"></i>Warehouse</a></li>
      @if(auth()->check() && auth()->user()->role !== 'User')
      <li><a href="{{url('/employees')}}" class="{{ Request::is('employees/*','employees') ? 'active' : '' }}"><i class="bi bi-people-fill icon"></i>Employee</a></li>
      <li><a href="{{url('/salaries')}}" class="{{ Request::is('salaries/*','salaries') ? 'active' : '' }}"><i class="bi bi-cash icon"></i>Salary</a></li>
      <br><br><br>
      <li><a href="{{url('/users')}}" class="{{ Request::is('users/*','users') ? 'active' : '' }}"><i class="bi bi-person-circle icon"></i>User</a></li>
      @endif
    </ul>

  </div>
</div>

<style>
.sidebar-logo {
  text-align: center;
  margin: 20px 0;
}

.sidebar-logo-image {
  max-width: 70%;
  height: auto;
}

.sidebar-menu {
  list-style: none;
  padding: 30px 20px;
}

.sidebar-menu .menu-title {
  font-size: 20px;
  color: #dbdbdb;
  margin-bottom: 15px;
}

.sidebar-menu .menu-list {
  list-style: none;
  padding-left: 20px;
  padding-right: 20px;
}

.sidebar-menu .menu-list li {
  margin-bottom: 25px;
}

.sidebar-menu .menu-list li a {
  display: block;
  color: #dbdbdb;
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 17px;
}

.sidebar-menu .menu-list li a .icon {
  font-size: 22px;
}

.sidebar-menu .menu-list li a.active {
  background-color: #7266EE;
  color: #ffffff;
  border-radius: 5px;
  padding: 5px 15px 5px 15px;
}

.sidebar-menu .menu-list li a:hover {
  padding-left: 15px;
}

</style>