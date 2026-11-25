
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Tasks for Today')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <style>
        body {
            background: #f5f6f8;
            font-family: 'Segoe UI', sans-serif;
            color: #202124;
        }

        .app-shell {
            display: flex;
            min-height: 100vh;
            gap: 20px;
            padding: 16px;
        }

        .sidebar {
            width: 230px;
            flex-shrink: 0;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 25px 15px;
        }

        .brand {
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 40px;
            padding-left: 8px;
            white-space: nowrap;
        }

        .brand i {
            color: #0866d9;
            margin-right: 8px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            margin-bottom: 8px;
            border-radius: 10px;
            color: #555;
            text-decoration: none;
            transition: 0.2s;
        }

        .sidebar-link:hover {
            background: #edf4ff;
            color: #0866d9;
        }

        .sidebar-link.active {
            background: #0866d9;
            color: white;
        }

        .main-content {
            flex: 1;
            min-width: 0;
            padding: 20px;
        }

        .page-heading {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .dashboard-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }

        .task-card {
            border-radius: 14px;
            padding: 20px;
            height: 100%;
        }

        .task-purple { background: #ded0fa; }
        .task-yellow { background: #faf0bf; }
        .task-green  { background: #e3f5c7; }
        .task-pink   { background: #f8d2e9; }
        .task-cyan   { background: #c9f5f2; }

        @media (max-width: 768px) {
            .app-shell {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .main-content {
                padding: 10px;
            }

            .sidebar-nav {
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

<div class="app-shell">

    <aside class="sidebar">
        <div class="brand">
            <i class="bi bi-check2-square"></i>
            Tasks for Today
        </div>

        <nav class="sidebar-nav">

            <a href="{{ route('home') }}"
               class="sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="bi bi-house"></i>
                Dashboard
            </a>

            <a href="{{ route('tasks') }}"
               class="sidebar-link {{ request()->routeIs('tasks') ? 'active' : '' }}">
                <i class="bi bi-list-task"></i>
                Tasks
            </a>

            <a href="{{ route('profile') }}"
               class="sidebar-link {{ request()->routeIs('profile') ? 'active' : '' }}">
                <i class="bi bi-person-circle"></i>
                Profile
            </a>

            <a href="{{ route('about') }}"
               class="sidebar-link {{ request()->routeIs('about') ? 'active' : '' }}">
                <i class="bi bi-info-circle"></i>
                About
            </a>

        </nav>
    </aside>

    <main class="main-content">

        <header class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="page-heading">@yield('page-title', 'Dashboard')</h1>
                <span class="text-muted">
                    {{ now()->format('l, F d, Y') }}
                </span>
            </div>
        </header>

        @yield('content')

        <footer class="text-center text-muted mt-5 py-3">
            <small>TaskNest | Laravel TSA3</small>
        </footer>

    </main>

</div>

</body>
</html>
