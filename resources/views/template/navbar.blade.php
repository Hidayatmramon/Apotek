<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">

</head>

<body>
    <div class="app-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="app-icon">
                    <!-- <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg> -->
                </div>
            </div>
            <ul class="sidebar-list">
                <ul class="sidebar-list">
                    <li class="sidebar-list-item @if(request()->is('dashboard')) active @endif"><a
                            href="{{route('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            <span>Home</span>
                        </a>
                    </li>
                </ul>
                <ul class="sidebar-list">
                    <li class="sidebar-list-item @if(request()->is('obat')) active @endif"><a
                            href="{{route('medicine.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-package">
                                <rect x="2" y="2" width="20" height="20" rx="2" ry="2" />
                                <line x1="7" y1="12" x2="17" y2="12" />
                                <line x1="12" y1="7" x2="12" y2="17" />
                            </svg>
                            <span>Product</span>
                        </a>
                    </li>
                </ul>
                <ul class="sidebar-list">
                    <li class="sidebar-list-item @if(request()->is('user-list')) active @endif"><a href="{{route('user.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-pie-chart">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                <path d="M22 12A10 10 0 0 0 12 2v10z" /></svg>
                            <span>Daftar User</span>
                        </a>
                    </li>
                </ul>
                <ul class="sidebar-list">
                    <li class="sidebar-list-item">
                        <a href="{{route('admin.home') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path
                                    d="M12 17C15.3137 17 18 14.3137 18 11C18 7.68629 15.3137 5 12 5C8.68629 5 6 7.68629 6 11C6 14.3137 8.68629 17 12 17Z" />
                                <path
                                    d="M2 22C2 19.7909 2.89949 17.7507 4.46447 16.0858C6.02944 14.4208 8.06963 13.5213 10.2788 13.5213C12.488 13.5213 14.5282 14.4208 16.0932 16.0858C17.6582 17.7507 18.5577 19.7909 18.5577 22H2Z" />
                            </svg>
                            <span>User Page</span>
                        </a>
                    </li>
                </ul>
            </ul>
            <div class="account-info">
                <div class="account-info-picture">
                </div>
                <div class="account-info-name">
                    <ul class="sidebar-list">
                        <li class="sidebar-list-item">
                            <a href="{{ route('logout')}}">
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('home')
</body>

</html>
