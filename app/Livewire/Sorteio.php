<?php

namespace App\Livewire;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public function mount()
    {
        // sleep(3); //tempo para recarregar a página
    }

    public function placeholder(): string // faz o uso do lazy lá no componente dashboard para fazer um carregamento.
    {
        return <<<'html'
            <div class="bg-pink-500 text-white font-bold rounder p-5">Carregando...</div>
        html;
    }

    public function render(): View
    {
        return view('livewire.sorteio');
    }

    #[On('candidate::created')] //ouve o evento 'dispatch' que existe no método save() no componente Create
    public function run(): void
    {
        $candidates = Candidate::query()->inRandomOrder()->get();

        //O foreach é útil quando você precisa executar a mesma operação para cada item de um array ou coleção. Por exemplo, se você tem uma lista de usuários e quer exibir o nome de cada um deles, você pode usar um foreach para iterar sobre essa lista e exibir cada nome.

        foreach($candidates as $candidate){
            $this->stream('winner', $candidate->name, true);
            usleep(3000);
        }

        //A variável winner é igual a uma consulta na model Candidate, onde vai filtrar de uma forma aleatória e pegar o primeiro.
        $winner = Candidate::query()->inRandomOrder()->first();

        //Chamamos a varável winner que contém o usuário consultado e pegamos a propriedade name dele
        $this->winner = $winner?->name;
        $this->js('confetti()'); //chama do arquivo app.js o addConfetti()
    }
}
