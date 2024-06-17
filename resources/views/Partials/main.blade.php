@php
    use Illuminate\Support\Facades\Route;
    $route = Route::currentRouteName();
@endphp
<div class="head-title">
    <div class="left">
        @if (str_starts_with($route, 'admin.dash'))
        <h5>Dashboard</h5>
    @elseif (str_starts_with($route, 'level.'))
        <h5>Niveaux</h5>
    @elseif (str_starts_with($route, 'student.'))
        <h5>Etudiants</h5>
    @elseif (str_starts_with($route, 'teacher.'))
        <h5>Professeurs</h5>
    @elseif (str_starts_with($route, 'collaborator.'))
        <h5>Collaborateurs</h5>
    @elseif (str_starts_with($route, 'subject'))
        <h5>Matières</h5>
    @elseif (str_starts_with($route , 'classroom.'))
        <h5>Salles de classe</h5>
    @endif
        
    </div>
    {{-- <a href="#" class="btn-download">
        <i class='bx bxs-cloud-download' ></i>
        <span class="text">Download PDF</span>
    </a> --}}
    <ul class="breadcrumb">
        <li>
            <a href="#" class="">Home</a>
        </li>
        <li> <i class='bx bx-chevron-right' ></i> </li>
        <li>
            <a class="active" href="#">Dashboard</a>
        </li>
    </ul>
</div>
@if ( $route === "admin.dashboard")
<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check' ></i>
        <span class="text">
            <h3>1020</h3>
            <p>New Order</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>2834</h3>
            <p>Visitors</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-dollar-circle' ></i>
        <span class="text">
            <h3>$2543</h3>
            <p>Total Sales</p>
        </span>
    </li>
</ul>
@endif
{{-- <div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Recent Orders</h3>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Date Order</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status completed">Completed</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status process">Process</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/people.png">
                        <p>John Doe</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status completed">Completed</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="todo">
        <div class="head">
            <h3>Todos</h3>
            <i class='bx bx-plus' ></i>
            <i class='bx bx-filter' ></i>
        </div>
        <ul class="todo-list">
            <li class="completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="not-completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
            <li class="not-completed">
                <p>Todo List</p>
                <i class='bx bx-dots-vertical-rounded' ></i>
            </li>
        </ul>
    </div>
</div> --}}
<div class="p-4">
    @yield('content')
</div>