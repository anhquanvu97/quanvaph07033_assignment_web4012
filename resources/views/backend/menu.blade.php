
{{-- <ul class="app-menu">
  <li><a class="app-menu__item active" href="{{ route('admin.index')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Danh Sách Người Dùng</span></a></li>
  <li><a class="app-menu__item active" href="{{ route('categories.index')}}"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Danh Mục</span></a></li>
  <li><a class="app-menu__item active" href="{{ route('posts.index')}}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Bài Viết</span></a></li>
  <li><a class="app-menu__item active" href="{{ route('comments.index')}}"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Bình Luận</span></a></li>
</ul> --}}
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('users.index')}}" class="nav-link">
              <i class="nav-icon far fa-address-book"></i>
              <p>Danh Sách Người Dùng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.index')}}" class="nav-link">
              <i class="nav-icon fas fa-align-left"></i>
              <p>Danh Mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('posts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-highlighter"></i>
              <p>Bài Viết</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('comments.index')}}" class="nav-link">
              <i class="nav-icon far fa-comment"></i>
              <p>Bình Luận</p>
            </a>
          </li>
        </ul>
      </nav>