<?php

namespace App\Livewire;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sorteio extends Component
{

    public $winner = null;


    public function render(): View
    {
        return view('livewire.sorteio');
    }

    public function run(): void
    {

        //A variável winner é igual a uma consulta na model Candidate, onde vai filtrar de uma forma aleatória e pegar o primeiro.
        $winner = Candidate::query()->inRandomOrder()->first();

        //Chamamos a varável winner que contém o usuário consultado e pegamos a propriedade name dele
        $this->winner = $winner->name;
    }
}
