<?php

namespace App\Livewire\Candidate;

use App\Livewire\Forms\CandidateCreateForm;
use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public CandidateCreateForm $form;

    public function save()
    {
        $this->validate(); //Validar as regras
        $this->form->store();
    }

    public function render(): View
    {
        return view('livewire.candidate.create');
    }
}
