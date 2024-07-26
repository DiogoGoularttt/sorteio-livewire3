<div>
    <form wire:submit="save" class="py-6">

        <div class="mb-6">
            <div>
                <x-input-label>Name</x-input-label>
                <x-text-input name="name" wire:model.live="form.name" />
                @error('form.name')
                    <div class="text-red-500 font-bold text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <x-input-label>Email</x-input-label>
                <x-text-input name="email" wire:model.live="form.email" />
                @error('form.email')
                    <div class="text-red-500 font-bold text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <x-input-label>Github</x-input-label>
                <x-text-input name="github" wire:model.live="form.github" />
                @error('form.github')
                    <div class="text-red-500 font-bold text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <x-primary-button>Save</x-primary-button>

    </form>
</div>
