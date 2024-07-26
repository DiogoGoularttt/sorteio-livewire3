<div>
    <div>
        <x-text-input name="search" wire:model.live="search" />
    </div>

    <div class="bg-green-200 text-grat-400 p-5">{{ $search }}</div>

    @foreach ($this->candidates as $candidate)
        <div>
            {{ $candidate->name }}
            <!--Como o #[Computed]atributo foi adicionado ao método candidates(), o valor pode ser acessado em outros métodos no componente e dentro do modelo Blade.-->
        </div>
    @endforeach
</div>
