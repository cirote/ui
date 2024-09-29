@php($item_sin_punto = str_replace('.', '_', $item))

<div>
    <div class="form-group @error($item) text-danger @enderror">
        @if(strlen($slot))
            <label for="{{ $item_sin_punto }}" class="control-label">
                <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
            </label>
        @endif
    
        <div>
            <div wire:ignore id="quill-{{ $item_sin_punto }}" style="min-height: 150px; border: 1px solid #ccc;"></div>
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
        Livewire.hook('message.processed', (message, component) => {
            const toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'font': [] }],
                [{ 'align': [] }],

                ['link', 'image', 'video', 'formula'],
                ['clean']                                         // remove formatting button
            ];

            if (component.serverMemo.data.mode === 'EDIT') {
                const quillContainer = document.getElementById('quill-{{ $item_sin_punto }}');

                if (quillContainer) {
                    const quill = new Quill(quillContainer, {
                        theme: 'snow',
                        modules: {
                            toolbar: toolbarOptions
                        },
                        placeholder: '{{ $slot }}',
                    });

                    // Asigna el valor del modelo al editor
                    var initialContent = $('#quill-input-{{ $item_sin_punto }}').val();
                    if (initialContent) {
                        quill.root.innerHTML = initialContent;
                    }

                    quill.on('text-change', function() {
                        const contenido = quill.root.innerHTML; 
                        var element = document.getElementById('quill-input-{{ $item_sin_punto }}');
                        element.value = contenido; 
                        element.dispatchEvent(new Event('input'));
                    });
                } else {
                    console.error('Quill container not found: quill-{{ $item_sin_punto }}');
                }
            }
        });
    });
</script>
@endpush
