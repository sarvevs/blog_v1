<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.main.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Главная
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-users "></i>
                <p>
                    Пользователи
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-clipboard"></i>
                <p>
                    Посты
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-th-list"></i>
                <p>
                    Категории
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-thin fa-tag"></i>
                <p>
                    Теги
                </p>
            </a>

            <div class="sidebar"></div>
    </ul>

</aside>
