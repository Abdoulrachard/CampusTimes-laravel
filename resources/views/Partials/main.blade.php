@php
use App\Models\User;
use App\Models\Subject;
use App\Models\Classroom;

    use Illuminate\Support\Facades\Route;
    $route = Route::currentRouteName();
    $total_students = User::query()->where('role_id', 3)->count();
    $total_teachers = User::query()->where('role_id', 2)->count();
    $total_subjects = Subject::all()->count();
    $total_classrooms = Classroom::all()->count();

@endphp
<div class="head-title">
    <div class="left">
        @switch(Auth::user()->role_id)
            @case(1)
        @if (str_starts_with($route, 'admin.dash'))
        <h4>Dashboard</h4>
    @elseif (str_starts_with($route, 'level.'))
        <h4>Niveaux</h4>
    @elseif (str_starts_with($route, 'student.'))
        <h4>Etudiants</h4>
    @elseif (str_starts_with($route, 'teacher.'))
        <h4>Professeurs</h4>
    @elseif (str_starts_with($route, 'collaborator.'))
        <h4>Collaborateurs</h4>
    @elseif (str_starts_with($route, 'subject'))
        <h4>Matières</h4>
    @elseif (str_starts_with($route , 'classroom.'))
        <h4>Salles de classe</h4>
    @elseif (str_starts_with($route , 'timetable.'))
        <h4>Emploi du temps</h4>
        @elseif (str_starts_with($route , 'profi'))
        <h4>Mon compte</h4>
    @endif
        
    </div>
    {{-- <a href="#" class="btn-download">
        <i class='bx bxs-cloud-download' ></i>
        <span class="text">Download PDF</span>
    </a> --}}
    <ul class="breadcrumb">
        <li>
            <a href="/admin/dashboard" class="text-black">Home</a>
        </li>
        <li> <span class="mx-1">/</span> </li>
        <li>
    @if (str_starts_with($route, 'admin.dash'))
        <a class="text-black">Dashboard</a>
    @elseif (str_starts_with($route, 'level.'))
        <a class="text-black">Niveaux</a>
    @elseif (str_starts_with($route, 'student.'))
        <a class="text-black">Etudiants</a>
    @elseif (str_starts_with($route, 'teacher.'))
        <a class="text-black">Professeurs</a>
    @elseif (str_starts_with($route, 'collaborator.'))
        <a class="text-black">Collaborateurs</a>
    @elseif (str_starts_with($route, 'subject'))
        <a class="text-black">Matières</a>
    @elseif (str_starts_with($route , 'classroom.'))
        <a class="text-black">Salles de classe</a>
        @elseif (str_starts_with($route , 'timetable.'))
        <a class="text-black">Empoi du temps</a>
        @elseif (str_starts_with($route , 'profile.'))
        <a>Profile</a>
    @endif
    

        </li>
    </ul>
</div>
@if ( $route === "admin.dashboard")
<div class="my-3 d-grid grid-2 grid-lg-4 gap-2">
    <div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInDown">
        <div class="row row-cols-2 justify-content-between">
            <div class="info align-self-center">
                <h6 class="text-muted">Etudiants</h6>
                <h5>{{ $total_students }}</h5>
            </div>
            <div>
                <div class="card-img p-2 text-center">
                    <img src="{{ asset('storage/image/dash-icon-01.svg')}}" alt="student">
                </div>
            </div>
        </div>
    </div>
    <div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInUp">
        <div class="row row-cols-2 justify-content-between">
            <div class="info align-self-center">
                <h6 class="text-muted">Professeurs</h6>
                <h5>{{ $total_teachers }}</h5>
            </div>
            <div>
                <div class="card-img p-2 text-center">
                    <img src="{{ asset('storage/image/default.svg')}}" alt="student">
                </div>
            </div>
        </div>
    </div>
    <div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInDown">
        <div class="row row-cols-2 justify-content-between">
            <div class="info align-self-center">
                <h6 class="text-muted">Cours</h6>
                <h5>{{ $total_subjects }}</h5>
            </div>
            <div>
                <div class="card-img p-2 text-center">
                    <img src="{{ asset('storage/image/books.svg')}}" alt="student">
                </div>
            </div>
        </div>
    </div>
    <div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInUp">
        <div class="row row-cols-2 justify-content-between">
            <div class="info align-self-center">
                <h6 class="text-muted">Salles</h6>
                <h5>{{ $total_classrooms }}</h5>
            </div>
            <div>
                <div class="card-img p-2 text-center">
                    <img src="{{  asset('storage/image/dash-icon-03.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="graph row mt-5">
    <div class="bg-white col col-12 col-lg-12 p-3 rounded-3 shadow-sm">
        <h5 class="text-muted">Statistique</h5>
        <canvas id="graph-viewer"></canvas>
    </div>
@endif
@break
@default
@if (str_starts_with($route, 'student.dash'))
<h4>Dashboard</h4>
@elseif (str_starts_with($route, 'student.timetab'))
<h4>Emploi du Temps</h4>
@elseif (str_starts_with($route, 'faq.'))
<h4>FAQ</h4>
@elseif (str_starts_with($route, 'profile.'))
<h4 class="text-black">Mon compte</h4>
@endif

</div>
{{-- <a href="#" class="btn-download">
<i class='bx bxs-cloud-download' ></i>
<span class="text">Download PDF</span>
</a> --}}
<ul class="breadcrumb">
<li>
    <a href="/" class="text-black">Home</a>
</li>
<li> <span class="mx-1">/</span> </li>
<li>
@if (str_starts_with($route, 'admin.dash'))
<a class="text-black">Dashboard</a>
@elseif (str_starts_with($route, 'student.timetabl'))
<a class="text-black">EDT</a>
@elseif (str_starts_with($route, 'faq.'))
<a class="text-black">faq</a>
@elseif (str_starts_with($route, 'profile.'))
<a class="text-black">Profile</a>
@endif


</li>
</ul>
</div>
@if ( $route === 'student.dashboard')
<div class="my-3 d-grid grid-2 grid-lg-4 gap-2">
<div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInDown">
<div class="row row-cols-2 justify-content-between">
    <div class="info align-self-center">
        <h6 class="text-muted">Cours cette semaine</h6>
        <h5>{{ $total_students }}</h5>
    </div>
    <div>
        <div class="card-img p-2 text-center">
            <img src="{{ asset('storage/image/books.svg')}}" alt="student">
        </div>
    </div>
</div>
</div>
<div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInUp">
<div class="row row-cols-2 justify-content-between">
    <div class="info align-self-center">
        <h6 class="text-muted">Heures cette semaine</h6>
        <h5>{{ $total_teachers }}h</h5>
    </div>
    <div>
        <div class="card-img p-2 text-center">
            <img src="{{ asset('storage/image/default.svg')}}" alt="student">
        </div>
    </div>
</div>
</div>
<div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInDown">
<div class="row row-cols-2 justify-content-between">
    <div class="info align-self-center">
        <h6 class="text-muted">Le plus chargé</h6>
        <h5>Jeudi</h5>
    </div>
    <div>
        <div class="card-img p-2 text-center">
            <img src="{{ asset('storage/image/books.svg')}}" alt="student">
        </div>
    </div>
</div>
</div>
<div class="card col border border-1 rounded-3 p-3 container-fluid shadow-sm border-0 animate__animated animate__fadeInUp">
<div class="row row-cols-2 justify-content-between">
    <div class="info align-self-center">
        <h6 class="text-muted">Le moins chargé</h6>
        <h5>Mercredi</h5>
    </div>
    <div>
        <div class="card-img p-2 text-center">
            <img src="{{  asset('storage/image/dash-icon-03.svg')}}" alt="">
        </div>
    </div>
</div>
</div>
</div>
@endif 
@endswitch
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
<div class="p-1">
    @yield('content')
</div>