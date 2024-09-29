@php($item_sin_punto = str_replace('.', '_', $item))

<div>
    <div class="form-group @error($item) text-danger @enderror">
        @if(strlen($slot))
            <label for="{{ $item_sin_punto }}" class="control-label">
                <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
            </label>
        @endif
    
        <div>
            <div wire:ignore id="monaco-{{ $item_sin_punto }}" style="min-height: 150px; border: 1px solid #ccc;"></div>
            <input type="hidden" id="monaco-input-{{ $item_sin_punto }}" name="{{ $item }}" wire:model.defer="{{ $item }}">
        </div>

        @error($item)
            <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
        @enderror
    </div>
</div>

@push('scripts')
<script type="module">
    import * as monaco from 'https://esm.sh/monaco-editor@0.34.0';

    document.addEventListener('livewire:load', function () {
        Livewire.hook('message.processed', (message, component) => {
            if (component.serverMemo.data.mode === 'EDIT') {
                const monacoContainer = document.getElementById('monaco-{{ $item_sin_punto }}');

                if (monacoContainer) {
                    // Cargar el editor de Monaco
                    const editor = monaco.editor.create(monacoContainer, {
                        value: $('#monaco-input-{{ $item_sin_punto }}').val(),
                        language: 'markdown', // Cambia esto al lenguaje que desees
                        theme: 'vs-light', // O cualquier tema que desees
                        automaticLayout: true,
                        minimap: { enabled: false }
                    });

                    // Actualizar el valor del input oculto cuando cambie el contenido del editor
                    editor.onDidChangeModelContent(() => {
                        const contenido = editor.getValue();
                        const element = document.getElementById('monaco-input-{{ $item_sin_punto }}');
                        element.value = contenido;
                        element.dispatchEvent(new Event('input'));
                    });
                } else {
                    console.error('Monaco container not found: monaco-{{ $item_sin_punto }}');
                }
            }
        });
    });
</script>
@endpush
