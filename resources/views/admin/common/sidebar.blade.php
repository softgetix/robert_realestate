<div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        
                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('dashboard')}}">
                                        <i class="dripicons-device-desktop me-2"></i>Dashboard
                                    </a>
                                </li>
        
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-user-Interface"
                                        role="button">
                                        <i class="dripicons-suitcase me-2"></i>User Interface
                                        <!-- <div class="arrow-down"></div> -->
                                    </a>
                                </li>
        

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{url('/property')}}" id="topnav-components"
                                        role="button">
                                        <i class="dripicons-to-do me-2"></i>Property
                                        <div class="arrow-down"></div>
                                    </a>
        
                                    <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <a href="{{url('/add-property')}}" class="dropdown-item">Create New Property</a>
                                    <a href="{{url('/property')}}" class="dropdown-item">View All Property</a>
                                      
                                    </div>
                                </li>

        
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advanced-ui"
                                        role="button">
                                        <i class="dripicons-trophy me-2"></i>Transactions
                                        <!-- <div class="arrow-down"></div> -->
                                    </a>
                                </li>
        
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                        <i class="dripicons-copy mdi-drop me-2"></i>Marketplace
                                        <!-- <div class="arrow-down"></div> -->
                                    </a>
                                </li>
        
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                                        <i class="dripicons-inbox me-2"></i>Messages
                                        <!-- <div class="arrow-down"></div> -->
                                    </a>
                                </li>
        
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="page-title-content">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4>@@pagetitle</h4>
                            </div>
        
                            <div class="col-sm-6">
                                <div class="float-end d-none d-md-block">
                                    <form class="app-search ">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="fa fa-search"></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        
        </header>