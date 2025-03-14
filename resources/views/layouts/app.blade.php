<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar a:hover {
            background: #495057;
        }

        /* Content */
        .content {
            margin-left: 250px;
            width: calc(100% - 250px);
            transition: margin-left 0.3s ease-in-out;
            padding: 20px;
            flex-grow: 1;
        }

        /* Topbar */
        .topbar {
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            height: 60px;
            background: #f8f9fa;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: left 0.3s ease-in-out;
        }

        .menu-btn {
            background: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Sidebar Hidden */
        .sidebar-hidden {
            transform: translateX(-100%);
        }

        .content-expanded {
            margin-left: 0;
            width: 100%;
        }

        .topbar-expanded {
            left: 0;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .content {
                margin-left: 0;
                width: 100%;
            }

            .topbar {
                left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="#" class="d-block text-center fw-bold fs-5">Dashboard</a>
        <a href="{{ route('home') }}">🏠 Home</a>
        <a href="{{ route('products.index') }}">📋 Product</a>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        <!-- Topbar -->
        <div class="topbar" id="topbar">
            <button class="menu-btn" id="toggleSidebar">☰</button>
            <span class="fw-bold">Admin Panel</span>
            <a href="{{ route('logout') }}"><button class="btn btn-outline-dark">Logout</button></a>
        </div>

        <div class="mt-5 pt-4">
            @yield('content')
        </div>
    </div>

    <script>
        const toggleButton = document.getElementById("toggleSidebar");
        const sidebar = document.getElementById("sidebar");
        const content = document.getElementById("content");
        const topbar = document.getElementById("topbar");

        toggleButton.addEventListener("click", () => {
            sidebar.classList.toggle("sidebar-hidden");
            content.classList.toggle("content-expanded");
            topbar.classList.toggle("topbar-expanded");
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
