<div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <x-filament::button class="my-8" type="submit">Ingresar</x-filament::button>
    </form>
</div>
