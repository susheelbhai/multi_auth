<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
    <x-admin.sidebar.profile />

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <x-admin.sidebar.li1 icon="ri-dashboard-line" :href="route('admin.dashboard')" lbl="Dashboard" />
                <x-admin.sidebar.li1 icon="ri-calendar-2-line" href="http://localhost/slist/storage/theme/admin/theme1/" lbl="Theme 1" />

                <x-admin.sidebar.li2 icon="ri-settings-5-fill" lbl="Setting">
                    <x-admin.sidebar.li21 :href="route('admin.settings.general')" lbl="General Setting" />
                    <x-admin.sidebar.li21 :href="route('admin.settings.advanced')" lbl="Advance Setting" />
                </x-admin.sidebar.li2>

                <li class="menu-title">Pages</li>

                <x-admin.sidebar.li2 icon="ri-account-circle-line" lbl="Authentication">
                    <x-admin.sidebar.li21 href="'" lbl="Login" />
                    <x-admin.sidebar.li21 :href="route('user.login')" lbl="Register" />
                    <x-admin.sidebar.li21 :href="route('user.login')" lbl="Recover Password" />
                    <x-admin.sidebar.li21 :href="route('user.login')" lbl="Lock Screen" />
                </x-admin.sidebar.li2>

                <x-admin.sidebar.li3 icon="ri-calendar-2-line" lbl="Setting">
                    <x-admin.sidebar.li32 lbl="Mail">
                        <x-admin.sidebar.li21 href="''" lbl="Dashboard" />
                        <x-admin.sidebar.li21 href="''" lbl="Calendar" />
                    </x-admin.sidebar.li32>
                    <x-admin.sidebar.li32 lbl="Mail">
                        <x-admin.sidebar.li21 href="''" lbl="Dashboard" />
                        <x-admin.sidebar.li21 href="'" lbl="Calendar" />
                    </x-admin.sidebar.li32>
                </x-admin.sidebar.li3>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
