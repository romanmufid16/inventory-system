<!doctype html>
<html lang="en">

<!-- Mirrored from dashui.codescandy.com/tailwindcss-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 02:05:10 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" />
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" />

    <!-- Theme CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <!-- Analytics Code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>

    <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/dist/apexcharts.css') }}" />

    <title>@yield('title')</title>
</head>

<body>
    <main>
        <!-- start the project -->
        <!-- app layout -->
        <div id="app-layout" class="overflow-x-hidden flex">
            <!-- start navbar -->
            <nav class="navbar-vertical navbar">
                <div id="myScrollableElement" class="h-screen" data-simplebar>
                    <!-- brand logo -->
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/brand/logo/logo.svg') }}" alt="" />
                    </a>

                    <!-- navbar nav -->
                    <ul class="navbar-nav flex-col" id="sideNavbar">
                        <li class="nav-item">
                            <a class="nav-link" href="#!" data-bs-toggle="collapse" data-bs-target="#navDashboard"
                                aria-expanded="false" aria-controls="navDashboard">
                                <i data-feather="home" class="w-4 h-4 mr-2"></i>
                                Dashboard
                            </a>
                            <div id="navDashboard" class="collapse show" data-bs-parent="#sideNavbar">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}"
                                            href="dashboard-analytics.html">Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::is('products.index') ? 'active' : '' }}"
                                            href="{{ route('products.index') }}">Product</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::is('categories.index') ? 'active' : '' }}"
                                            href="{{ route('categories.index') }}">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::is('suppliers.index') ? 'active' : '' }}"
                                            href="{{ route('suppliers.index') }}">Suppliers</a>
                                    </li>
                            </div>
                        </li>
                        <!-- nav item -->
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <div class="navbar-heading">App</div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="calendar.html">
                                    <i data-feather="calendar" class="w-4 h-4 mr-2"></i>
                                    Calendar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="chat.html">
                                    <i data-feather="message-square" class="w-4 h-4 mr-2"></i>
                                    Chat
                                </a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navEcommerce" aria-expanded="false" aria-controls="navPages">
                                    <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                                    Ecommerce
                                </a>
                                <div id="navEcommerce" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-products.html">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-products-details.html">Product
                                                Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-edit.html">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-order-list.html">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-order-detail.html">Orders Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-cart.html">Shopping cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-customer.html">Customer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-seller.html">Seller</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navEmail" aria-expanded="false" aria-controls="navEmail">
                                    <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                                    Email
                                </a>

                                <div id="navEmail" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="mail.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="mail-details.html">Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="mail-draft.html">Draft</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navKanban" aria-expanded="false" aria-controls="navKanban">
                                    <i data-feather="layout" class="w-4 h-4 mr-2"></i>
                                    Kanban
                                </a>

                                <div id="navKanban" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="task-kanban-grid.html">Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="task-kanban-list.html">List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav item -->
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
                                    <i class="w-4 h-4 mr-2" data-feather="file"></i>
                                    Project
                                </a>
                                <div id="navProject" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="project-grid.html">Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="project-list.html">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                                data-bs-target="#navprojectSingle" aria-expanded="false"
                                                aria-controls="navprojectSingle">Single</a>
                                            <div id="navprojectSingle" class="collapse" data-bs-parent="#navProject">
                                                <ul class="nav flex-col">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="project-overview.html">Overview</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="project-task.html">Task</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="project-budget.html">Budget</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="project-files.html">Files</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="project-team.html">Team</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="add-project.html">Create Project</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="apps-file-manager.html">
                                    <i data-feather="folder-plus" class="w-4 h-4 mr-2"></i>
                                    File Manager
                                </a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navCRM" aria-expanded="false" aria-controls="navCRM">
                                    <i data-feather="pie-chart" class="w-4 h-4 mr-2"></i>

                                    CRM
                                </a>

                                <div id="navCRM" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="crm-contacts.html">Contacts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="crm-company.html">Company</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navinvoice" aria-expanded="false" aria-controls="navinvoice">
                                    <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                                    Invoice
                                </a>

                                <div id="navinvoice" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice-list.html">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice-detail.html">Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice-generator.html">Invoice Generator</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navprofilePages" aria-expanded="false"
                                    aria-controls="navprofilePages">
                                    <i data-feather="user" class="w-4 h-4 mr-2"></i>
                                    Profile
                                </a>
                                <div id="navprofilePages" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-overview.html">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-project.html">Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-files.html">Files</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-team.html">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-followers.html">Followers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-activity.html">Activity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile-settings.html">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navblog" aria-expanded="false" aria-controls="navblog">
                                    <i data-feather="edit" class="w-4 h-4 mr-2"></i>
                                    Blog
                                </a>

                                <div id="navblog" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog-author.html">Author</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog-author-detail.html">Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="create-blog-post.html">Create Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <div class="navbar-heading">Layouts & Pages</div>
                            </li>

                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navlayoutPage" aria-expanded="false"
                                    aria-controls="navlayoutPage">
                                    <i class="nav-icon w-4 h-4 mr-2" data-feather="file"></i>
                                    Pages
                                </a>
                                <div id="navlayoutPage" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="starter.html">Starter</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="pricing.html">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="maintenance.html">Maintenance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404-error.html">404 Error</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navAuthentication" aria-expanded="false"
                                    aria-controls="navAuthentication">
                                    <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                                    Authentication
                                </a>
                                <div id="navAuthentication" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign-in.html">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign-up.html">Sign Up</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="forget-password.html">Forget Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link" href="layout.html">
                                    <i data-feather="sidebar" class="w-4 h-4 mr-2"></i>
                                    Layouts
                                </a>
                            </li>
                            <!-- nav heading -->
                            <li class="nav-item">
                                <div class="navbar-heading">UI Components</div>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navComponents" aria-expanded="false"
                                    aria-controls="navComponents">
                                    <i data-feather="package" class="w-4 h-4 mr-2"></i>
                                    Components
                                </a>
                                <div id="navComponents" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/accordions.html">Accordions</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="components/alerts.html">Alerts</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="components/avatar.html">Avatar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/badge.html">Badges</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/buttons.html">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/button-group.html">Button Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/blockquote.html">Blockquote</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/card.html">Card</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/collapse.html">Collapse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/dropdown.html">Dropdown</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/forms.html">Forms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/offcanvas.html">Offcanvas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/lists.html">Lists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/modal.html">Modal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/navbar.html">Navbar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/navs-tabs.html">Nav & Tabs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/pagination.html">Pagination</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/progress.html">Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/spinners.html">Spinners</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/tables.html">Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/toast.html">Toast</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="components/tooltips.html">Tooltips</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navMenuLevel" aria-expanded="false"
                                    aria-controls="navMenuLevel">
                                    <i data-feather="corner-left-down" class="w-4 h-4 mr-2"></i>
                                    Menu Level
                                </a>
                                <div id="navMenuLevel" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#!" data-bs-toggle="collapse"
                                                data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                                aria-controls="navMenuLevelSecond">Two Level</a>
                                            <div id="navMenuLevelSecond" class="collapse"
                                                data-bs-parent="#navMenuLevel">
                                                <ul class="nav flex-col">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#!">NavItem 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#!">NavItem 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                                data-bs-target="#navMenuLevelThree" aria-expanded="false"
                                                aria-controls="navMenuLevelThree">
                                                Three Level
                                            </a>
                                            <div id="navMenuLevelThree" class="collapse"
                                                data-bs-parent="#navMenuLevel">
                                                <ul class="nav flex-col">
                                                    <li class="nav-item">
                                                        <a class="nav-link collapsed" href="#!"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#navMenuLevelThreeOne"
                                                            aria-expanded="false"
                                                            aria-controls="navMenuLevelThreeOne">
                                                            NavItem 1
                                                        </a>
                                                        <div id="navMenuLevelThreeOne" class="collapse"
                                                            data-bs-parent="#navMenuLevelThree">
                                                            <ul class="nav flex-col">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#!">NavChild Item
                                                                        1</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#!">Nav Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Nav item -->
                            <li class="nav-item">
                                <div class="navbar-heading">Documentation</div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                                    data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
                                    <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                                    Docs
                                </a>
                                <div id="navDocs" class="collapse" data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-col">
                                        <li class="nav-item"><a href="docs/index.html"
                                                class="nav-link">Introduction</a>
                                        </li>
                                        <li class="nav-item"><a href="docs/environment-setup.html"
                                                class="nav-link">Environment setup</a></li>
                                        <li class="nav-item"><a href="docs/working-with-gulp.html"
                                                class="nav-link">Working with Gulp</a></li>
                                        <li class="nav-item"><a href="docs/tailwindcss.html"
                                                class="nav-link">TailwindCSS</a></li>
                                        <li class="nav-item"><a href="docs/compiled-files.html"
                                                class="nav-link">Compiled
                                                Files</a></li>
                                        <li class="nav-item"><a href="docs/file-structure.html" class="nav-link">File
                                                Structure</a></li>
                                        <li class="nav-item"><a href="docs/resources-assets.html"
                                                class="nav-link">Resources & assets</a></li>
                                        <li class="nav-item"><a href="docs/changelog.html"
                                                class="nav-link">Changelog</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- nav heading -->
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="https://dashui.codescandy.com/tailwindcss-admin-dashboard-html-template.html"
                                    target="_blank">
                                    <i data-feather="download" class="w-4 h-4 mr-2"></i>
                                    Download
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!--end of navbar-->

            <!-- app layout content -->
            <div id="app-layout-content"
                class="relative min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
                <!-- start navbar -->
                <div class="header">
                    <!-- navbar -->
                    <nav class="bg-white px-6 py-[10px] flex items-center justify-between shadow-sm">
                        <a id="nav-toggle" href="#" class="text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </a>
                        <div class="ml-3 hidden md:hidden lg:block">
                            <!-- form -->
                            <form class="flex items-center">
                                <input type="search"
                                    class="text-base border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                                    placeholder="Search" />
                            </form>
                        </div>
                        <!-- navbar nav -->
                        <ul class="flex ml-auto items-center">
                            <li class="dropdown stopevent mr-2">
                                <a class="text-gray-600" href="#" role="button" id="dropdownNotification"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg lg:left-auto lg:right-0"
                                    aria-labelledby="dropdownNotification">
                                    <div>
                                        <div class="border-b px-3 pt-2 pb-3 flex justify-between items-center">
                                            <span class="text-lg text-gray-800 font-semibold">Notifications</span>
                                            <a href="#">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- list group -->
                                        <ul class="h-56" data-simplebar="">
                                            <!-- list group item -->
                                            <li class="bg-gray-100 px-3 py-2 border-b">
                                                <a href="#">
                                                    <h5 class="mb-1">Rishi Chopra</h5>
                                                    <p>Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- list group item -->
                                            <li class="px-3 py-2 border-b">
                                                <a href="#">
                                                    <h5 class="mb-1">Neha Kannned</h5>
                                                    <p>Proin at elit vel est condimentum elementum id in ante. Maecenas
                                                        et sapien metus.</p>
                                                </a>
                                            </li>
                                            <!-- list group item -->
                                            <li class="px-3 py-2 border-b">
                                                <a href="#">
                                                    <h5 class="mb-1">Nirmala Chauhan</h5>
                                                    <p>Morbi maximus urna lobortis elit sollicitudin sollicitudieget
                                                        elit vel pretium.</p>
                                                </a>
                                            </li>
                                            <!-- list group item -->
                                            <li class="px-3 py-2 border-b">
                                                <a href="#">
                                                    <h5 class="mb-1">Sina Ray</h5>
                                                    <p>Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                        diam.</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="border-t px-3 py-2 text-center">
                                            <a href="#" class="text-gray-800 font-semibold">View all
                                                Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- list -->
                            <li class="dropdown ml-2">
                                <a class="rounded-full" href="#" role="button" id="dropdownUser"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="w-10 h-10 relative">
                                        <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                            class="rounded-full" />
                                        <div
                                            class="absolute border-gray-200 border-2 rounded-full right-0 bottom-0 bg-green-600 h-3 w-3">
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="dropdownUser">
                                    <div class="px-4 pb-0 pt-2">
                                        <div class="leading-4">
                                            <h5 class="mb-1">John E. Grainger</h5>
                                            <a href="#">View my profile</a>
                                        </div>
                                        <div class="border-b mt-3 mb-2"></div>
                                    </div>

                                    <ul>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="w-4 h-4" data-feather="user"></i>
                                                Edit Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="w-4 h-4" data-feather="activity"></i>
                                                Activity Log
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="w-4 h-4" data-feather="star"></i>
                                                Go Pro
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="w-4 h-4" data-feather="settings"></i>
                                                Account Settings
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="w-4 h-4" data-feather="power"></i>
                                                    Sign Out
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end of navbar -->

                @yield('content')

                <footer
                    class="px-6 border-t border-gray-300 py-3 flex justify-between items-center absolute bottom-0 w-full">
                    <div>
                        <p class="m-0 leading-6">
                            Made by
                            <a href="https://codescandy.com/" target="_blank" class="text-indigo-600">Codescandy</a>
                        </p>
                        <a href="https://github.com/codescandy/dashui-tailwindcss" target="_blank">
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-gray-800">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </footer>
            </div>
        </div>
        <!-- end of project -->
    </main>

    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="assets/js/vendors/chart.js"></script>
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('assets/libs/list.js/dist/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/list-function.js') }}"></script>
</body>

<!-- Mirrored from dashui.codescandy.com/tailwindcss-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 02:05:49 GMT -->

</html>
