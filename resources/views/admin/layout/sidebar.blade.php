<div class="left-sidebar">
    <div class="slimscroll-menu">
        <div class="list-group list-group-transparent mb-0">

            <span class="list-group-item disabled">
                Dashboard
            </span>

            <a href="/admin/event" class="list-group-item list-group-item-action {{ request()->is('admin/event') ? ' active' : '' }}">
                <span class="mr-2">
                    <i class="fa-solid fa-users"></i>
                </span>Events
            </a>

            <a href="/admin/event/create" class="list-group-item list-group-item-action {{ request()->is('admin/event/create') ? ' active' : '' }}">
                <span class="mr-2">
                    <i class="fa-solid fa-user-plus"></i>
                </span>Add Events
            </a>

            <a href="/admin/password" class="list-group-item list-group-item-action {{ request()->is('admin/password') ? ' active' : '' }}">
                <span class="mr-2">
                    <i class="fa-solid fa-key"></i></i>
                </span>Ganti Password
            </a>

        </div>
    </div>
</div>