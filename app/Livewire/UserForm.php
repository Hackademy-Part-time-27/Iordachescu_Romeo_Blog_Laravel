<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;

use App\Actions\Fortify\PasswordValidationRules;

use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class UserForm extends Component
{
    use PasswordValidationRules,WithFileUploads;

    public $userId = null;

    #[Validate]
    public $name = '';

    public $email = '';
    
    #[Validate]
    public $password = '';

    #[Validate('image|max:1024')]
    public $photo = '';

    public function rules()
    {
        return[
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->userId),
            ],
            'password' => $this->passwordRules(false),
        ];
    }

    public function submit()
    {
        $this->validate();

        if($this->userId) { //essendo presente l'id uttente, sono in modalita di modifica

            $user = User::find($this->userId);

            $user->update($this->only('name','email','password'));

            session()->flash('success','Utente modificato corretamente');

            if($this->photo) {

                $photoPath = $this->photo->storeAs('public/user',$user->id . '.' . $this->photo->extension());
                $user->photo = $photoPath;
                $user->save();
            }

        } else {

            $user = User::create($this->only('name','email','password'));
            
            session()->flash('success','Utente creato corretamente');

            if($this->photo) {

                $photoPath = $this->photo->storeAs('public/user',$user->id . '.' . $this->photo->extension());
                $user->photo = $photoPath;
                $user->save();
            }

            $this->userReset();
        
        }
      
        $this->dispatch('user-created');
    }

    #[On('user-edit')]
    public function userLoad(User $user)
    {
        $this->userId = $user->id;

        $this->name = $user->name;

        $this->email = $user->email;
    }
    
    public function userReset()
    {
        $this->userId = null;

        $this->name = '';

        $this->email = '';

        $this->password = '';

        $this->photo = null;
    }

    public function removePhoto()
    {
        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
