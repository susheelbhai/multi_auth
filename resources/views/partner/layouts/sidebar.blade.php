<li class="menu-title">Menu</li>

                <x-partner.sidebar.li1 icon="ri-dashboard-line" :href="route('partner.dashboard')" lbl="Dashboard" />


                <li class="menu-title">Pages</li>

                <x-partner.sidebar.li2 icon="ri-store-fill" lbl="Business">
                    <x-partner.sidebar.li21 :href="route('partner.business.index')" lbl="All Business" />
                    {{-- <x-partner.sidebar.li21 :href="route('partner.product.index')" lbl="All Products" /> --}}
                </x-partner.sidebar.li2>

                {{-- <x-partner.sidebar.li3 icon="ri-calendar-2-line" lbl="Setting">
                    <x-partner.sidebar.li32 lbl="Mail">
                        <x-partner.sidebar.li21 href="''" lbl="Dashboard" />
                        <x-partner.sidebar.li21 href="''" lbl="Calendar" />
                    </x-partner.sidebar.li32>
                    <x-partner.sidebar.li32 lbl="Mail">
                        <x-partner.sidebar.li21 href="''" lbl="Dashboard" />
                        <x-partner.sidebar.li21 href="'" lbl="Calendar" />
                    </x-partner.sidebar.li32>
                </x-partner.sidebar.li3> --}}