<div>
    <div wire:stream="winner" class="rounded bg-green-200 border-2 border-green-600 text-center p-10 text-green-700 font-bold text-4xl">
        {{ $winner }}
    </div>

    <button wire:click="run" class="w-full rounded bg-slate-800 text-slate-500 text-center  uppercase font-bold hover:bg-slate-900">
        RUN
    </button>
</div>
