@php($item_sin_punto = str_replace('.', '_', $item))

<div>
    <div class="form-group @error($item) text-danger @enderror">
        @if(strlen($slot))
            <label for="{{ $item_sin_punto }}" class="control-label">
                <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
            </label>
        @endif
    
        <div wire:ignore>
            <div id="quill-{{ $item_sin_punto }}" style="min-height: 150px; border: 1px solid #ccc;"></div>
            <input type="hidden" id="quill-input-{{ $item_sin_punto }}" name="{{ $item }}" wire:model.defer="{{ $item }}">
        </div>

        @error($item)
            <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
        @enderror
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        // Hook de Livewire para procesar mensajes
        Livewire.hook('message.processed', (message, component) => {
            // Inicializar Quill solo si el componente está en el estado de edición
            if (component.fingerprint.name === 'tu-componente-nombre') { // Reemplaza con el nombre de tu componente
                const quillContainer = document.getElementById('quill-{{ $item_sin_punto }}');

                if (quillContainer) {
                    const quill = new Quill(quillContainer, {
                        theme: 'snow', // Cambia el tema según sea necesario
                        placeholder: '{{ $slot }}',
                    });

                    // Asigna el valor del modelo al editor
                    var initialContent = @js($this->get('{{ $item }}'));
                    if (initialContent) {
                        quill.root.innerHTML = initialContent;
                    }

                    quill.on('text-change', function() {
                        const contenido = quill.root.innerHTML; // Obtén el contenido HTML
                        document.getElementById('quill-input-{{ $item_sin_punto }}').value = contenido; // Actualiza el input oculto
                        @this.set('{{ $item }}', contenido); // Actualiza el modelo en Livewire
                    });
                } else {
                    console.error('Quill container not found: quill-{{ $item_sin_punto }}');
                }
            }
        });
    });
</script>
@endpush
