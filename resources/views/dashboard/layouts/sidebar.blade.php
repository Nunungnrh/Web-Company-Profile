<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/product"
                        aria-expanded="false">
                        <i class="bi bi-cart-fill" aria-hidden="true"></i>
                        <span class="hide-menu">Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/contact"
                        aria-expanded="false">
                        <i class="bi bi-journal-bookmark" aria-hidden="true"></i>
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
                <li class="text-center p-20 upgrade-btn">
                    <form action="/logout" method="post">
                        @csrf
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger text-white fw-bold">Logout</button>
                        </div>
                    </form>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>