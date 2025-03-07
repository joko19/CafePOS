<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $name, $email, $password;
    public ?User $user;

    public function mount()
    {
        $user = auth()->user();

        $this->user = User::find(auth()->id());
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => ''
        ]);
        if (!isset($this->password)) {
            unset($valid['password']);
        }
        $this->user->update($valid);

        $this->reset();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.auth.profile');
    }
}
