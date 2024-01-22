<div>
    @foreach ($tasks as $task)
        <x-task-item :task="$task" />
    @endforeach
</div>