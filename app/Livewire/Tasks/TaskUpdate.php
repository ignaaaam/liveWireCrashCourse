<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskUpdate extends Component
{
    #[On('task-updated')]
    
    public function updateTimestamp()
    {
        Task::query()->update([
            'updated_at' => now()->toDateTimeString(),
        ]);
    }

    public function render()
    {
        return view('livewire.tasks.task-update');
    }
}
