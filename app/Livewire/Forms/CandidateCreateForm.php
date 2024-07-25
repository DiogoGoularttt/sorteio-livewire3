<?php

namespace App\Livewire\Forms;

use App\Models\Candidate;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CandidateCreateForm extends Form
{
    #[Rule(['required'])]
    public string $name;

    #[Rule(['required', 'email'])]
    public string $email;

    public string $github;

    public function store(): void
    {
        Candidate::query() // faz uma consulta na model Candidate 
            ->create($this->all()); //ativa um método para criar um Candidato e pega todas as variaveis que estão no form
    }
}
