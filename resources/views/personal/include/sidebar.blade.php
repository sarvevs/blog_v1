<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('personal.main.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Главная
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('personal.liked.index') }}" class="nav-link">
                <i class=" nav-icon far fa-heart "></i>
                <p>
                    Понравившиеся посты
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('personal.comment.index') }}" class="nav-link">
                <i class=" nav-icon far fa-comment "></i>
                <p>
                    Комментарии
                </p>
            </a>
            <div class="sidebar"></div>
    </ul>

</aside>
