
@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h1 class="fw-bold">About This Project</h1>

        <p class="mt-3">
            Tasks for Today is a task management system developed
            using Laravel 13, PHP, MySQL, and Bootstrap 5.
        </p>

        <p>
            This application demonstrates the MVC architecture,
            Eloquent ORM, database migrations, seeders,
            and Blade templating.
        </p>

        <hr>

        <h4>Developer Information</h4>
        <p><strong>Developer:</strong> Lukexander Virgilius De Guzman</p>
        <p><strong>Course:</strong> IT0049 - Web System Technologies</p>
        <p><strong>Project:</strong> Technical Summative Assessment 3</p>
    </div>
</div>
@endsection
