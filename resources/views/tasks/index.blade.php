@extends('layouts.app')
<div class="patterns pt1">

<h1>All Tasks</h1>
<div class="tasks">
<ol>
    @foreach ($tasks as $task)
        <li>{{ $task->title }} - Due: {{ $task->due_date }}</li>
    @endforeach
</ol>
</div>
<div class="footer">
     <p>2023</p>
    </div>
</div>