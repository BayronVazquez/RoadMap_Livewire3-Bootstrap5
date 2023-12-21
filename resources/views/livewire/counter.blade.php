<div>
    <div class="row mb-3">
        <button class="btn boton btn-primary mx-1" wire:click="sumar">
            Incremetar
        </button>
        <button class="btn boton btn-primary mx-1" wire:click="restar">
            Decrementar
        </button>
    </div>

    <h3>Total: {{ $total }}</h3>
</div>
