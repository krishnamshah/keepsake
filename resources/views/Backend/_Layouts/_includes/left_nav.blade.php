<!-- start:Left Menu -->
<div id="left-menu">
    <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
                <h1 class="animated fadeInLeft"></h1>
                <p class="animated fadeInRight"></p>
            </li>
            <li class="active">
                <a href="{{route('dashboard')}}"><span class="fa-home fa"></span> Dashboard
                </a>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-user fa"></span> Profile
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="#">Organization</a></li>
                    <li><a href="#">Individual</a></li>
                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-plane fa"></span> Flights
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="#"><span class="fa-plane fa"></span> Domestic</a></li>
                    <li><a href="#"><span class="fa-plane fa"></span> International</a></li>

                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-hotel fa"></span> Hotels
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="{{route('hotels.list')}}"><span class="fa-list fa"></span> List</a></li>
                    <li><a href="{{route('hotels.facilities.list')}}"><span class="fa-list fa"></span>Facilities</a></li>
                    <li><a href="{{route('hotels.services.list')}}"><span class="fa-list fa"></span>Services</a></li>
                    <li><a href="{{route('rooms.list')}}"><span class="fa-list fa"></span>Room List</a></li>
                    <li><a href="{{route('hotels.facilities.list')}}"><span class="fa-list fa"></span>Room Facilities</a></li>
                    <li><a href="{{route('hotels.services.list')}}"><span class="fa-list fa"></span>Room Services</a></li>
                    <li><a href="{{route('bookingsRoom.list')}}"><span class="fa-clipboard fa"></span> Bookings</a></li>
                    <li><a href="#"><span class="fa-ticket fa"></span> Invloce</a></li>

                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-taxi fa"></span> Vehicle
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="{{route('vehicles.list')}}"><span class="fa-list fa"></span> List</a></li>
                    <li><a href="{{route('bookingsVehicle.list')}}"><span class="fa-clipboard fa"></span> Bookings</a></li>
                    <li><a href="#"><span class="fa-ticket fa"></span> Invloce</a></li>

                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa-suitcase fa"></span> Tour
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="{{route('tours.list')}}"><span class="fa-list fa"></span> List</a></li>
                    <li><a href="{{route('bookingsTour.list')}}"><span class="fa-clipboard fa"></span> Bookings</a></li>
                    <li><a href="#"><span class="fa-ticket fa"></span> Invloce</a></li>

                </ul>
            </li>

            <li><a href="{{route('pages.list')}}"><span class="fa-paragraph fa"></span> Page Management</a></li>
            <li><a href="{{route('slider')}}"><span class="fa-paragraph fa"></span> Slider</a></li>
            <li><a href="#"><span class="fa-table fa"></span>Menu Management</a></li>
            <li><a href="#"><span class="fa-user-plus fa"></span>User Management</a></li>
            <li><a href="#"><span class="fa-gears fa"></span>Configuration</a></li>
            <li><a href="{{route('backend.logout')}}"><span class="fa-sign-out fa"></span>Logout</a></li>

        </ul>
    </div>
</div>
<!-- end: Left Menu -->