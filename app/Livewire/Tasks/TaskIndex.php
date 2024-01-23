<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;


#[Title('Tasks - Livewire Crash Course')]

class TaskIndex extends Component
{
    public $tasks;

    #[Rule('required|min:3|max:25|string', )]

    public $name;

    public function mount()
    {
        $this->tasks = Task::with('user')->get();
    }

    public function hydrate()
    {
        // dd('hydrate');
    }

    public function boot()
    {
        $this->tasks = Task::with('user')->get();
    }

    public function updating()
    {
        
    }

    public function updated()
    {

    }

    public function rendering($view, $data)
    {
        $data['name'] = 'Ignacio';

        // dd($data);
    }

    public function rendered($view, $html)
    {
        dd($html);
    }

    public function dehydrate()
    {
        $this->tasks = $this->tasks->toArray();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3|max:25|string',
        ]);

        Task::create([
            'user_id' => 1,
            'name' => $this->name,
        ]);

        session()->flash('message', 'Task Created Successfully!');

        $this->dispatch('task-updated');

        return $this->redirect(route('tasks.index'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
            ->title('Tasks - Tasks Dashboard')
            ->with([
                'button' => 'Create Task',
            ]);
    }
}
