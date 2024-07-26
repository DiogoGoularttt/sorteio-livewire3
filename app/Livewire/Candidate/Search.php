<?php

namespace App\Livewire\Candidate;

use App\Models\Candidate;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{
    #[Url(as: 'q', history: true, keep: true)] // URL query parameters podemos inserir uma propriedade na URL
    public ?string $search;

    public function render()
    {
        return view('livewire.candidate.search');
    }

    #[Computed()] //Aqui temos o componente Search onde temos uma função computada candidates() para acessar a todos os candidatos.
    public function candidates()
    {
        return Candidate::all();
    }
}
