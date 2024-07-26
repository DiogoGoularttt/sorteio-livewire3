<x-app-layout>
    <h1 class="text-center text-7xl font-bold">Sorteio de candidatos</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-y-8">
            {{-- <livewire:candidate.create /> --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:sorteio lazy /> <!--uso do lazy loading-->
            </div>
            {{-- <livewire:candidate.search /> --}}
        </div>
    </div>
</x-app-layout>
