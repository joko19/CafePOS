<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content border-r-2 border-base-300 space-y-4">
    <li>
        <h2 class="menu-title">
            Dashboard
        </h2>
        <ul>
            <li>
                <a href="{{route('home')}}" wire:navigate class="{{Route::is('home') ? 'active' :''}}" >
                    <x-tabler-dashboard class="size-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="" wire:navigate >
                    <x-tabler-file-plus class="size-5" />
                    <span>Transaction</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">
            Data Master
        </h2>
        <ul>
            <li>
                <a href="" wire:navigate>
                    <x-tabler-layout-grid-add class="size-5" />
                    <span>Food and Baverages</span>
                </a>
            </li>
            <li>
                <a href="" wire:navigate>
                    <x-tabler-users class="size-5" />
                    <span>Customer</span>
                </a>
            </li>
            <li>
                <a href="" wire:navigate>
                    <x-tabler-file class="size-5" />
                    <span>History</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">
            Account
        </h2>
        <ul>
            <li>
                <a href="{{route('profile')}}" wire:navigate class="{{Route::is('profile') ? 'active' :''}}">
                    <x-tabler-user class="size-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="size-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>