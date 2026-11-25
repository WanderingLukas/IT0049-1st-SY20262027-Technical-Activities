
@extends('layouts.app')

@section('title', 'Welcome - Tasks for Today')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <h1 class="fw-bold">Welcome!</h1>
        <p class="text-muted">
            Here are your tasks for {{ now()->format('F d, Y') }}.
        </p>

        <h4 class="mt-4">Today's Tasks</h4>

        @forelse($tasks as $task)
            <div class="d-flex justify-content-between align-items-center border-bottom py-3 gap-3">
                <div>
                    <h6 class="mb-1">{{ $task->title }}</h6>
                    <small class="text-muted">
                        {{ $task->task_date->format('M d, Y') }}
                    </small>
                </div>

                <span class="badge {{ $task->status === 'completed' ? 'bg-success' : 'bg-warning text-dark' }}">
                    {{ ucfirst($task->status) }}
                </span>
            </div>
        @empty
            <div class="alert alert-info mt-3">
                No tasks scheduled for today.
            </div>
        @endforelse

        <a href="{{ route('tasks') }}" class="btn btn-primary mt-4">
            View All Tasks
        </a>
    </div>
</div>
@endsection
