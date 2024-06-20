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
        @if (str_starts_with($route, 'student.dash'))
        <h4>Dashboard</h4>
    @elseif (str_starts_with($route, 'timetable.'))
        <h4>Emploi du Temps</h4>
    @elseif (str_starts_with($route, 'faq.'))
        <h4>FAQ</h4>
    
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
    @elseif (str_starts_with($route, 'timetable.'))
        <a class="text-black">Emploi du Temps</a>
    @elseif (str_starts_with($route, 'faq.'))
        <a class="text-black">faq</a>
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
                <h5>1</h5>
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
                <h5>1</h5>
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
<div class="p-1">
    @yield('content')
</div>