@php($item_sin_punto = str_replace('.', '_', $item))

<div wire:ignore>
    <div class="form-group @error($item) text-danger @enderror">

        @if(strlen($slot))
            <label for="{{ $item }}" class="control-label">
                <span class="@error($item) text-danger @enderror">{{ $slot }}</span>
            </label>
        @else
            @php($placeholder = $placeholder ? $placeholder : ucfirst(strtolower($item)))
        @endif
    
        <div class="input-group">
            <input type="text" id="{{ $item_sin_punto }}" placeholder="{{ $placeholder ?? '' }}" class="form-control datetimepicker-input @error($item) is-invalid @enderror" data-target="#{{ $item_sin_punto }}" onkeypress="return /[.0-9]/i.test(event.key)" >
           
            <div class="input-group-append" data-target="#{{ $item_sin_punto }}" data-toggle="datetimepicker" >
                <span class="input-group-text">  
                    {!! $icon ?? '<i class="far fa-flag fa-fw"></i>' !!}
                </span>
            </div>
    
        </div>
        @error($item)
            <span class="text-danger">* {{ ucfirst(str_replace('.', '', $message)) }}</span>
        @enderror
    </div>
    
    <script type="text/javascript">
        $(document).ready(function()
        {
            let dateFormat = "DD/MM/YYYY";
            let value = @this.get('{{ $item }}');
            let fecha = moment();

            if (value)
            {
                fecha = moment(`${value.substring(8, 10)}/${value.substring(5, 7)}/${value.substring(0, 4)}`, dateFormat);
            }
                
            $("#{{ $item_sin_punto }}").datetimepicker(
            {
                'locale': moment.locale('es'),
                'format': dateFormat,
                'date': fecha,
            });
            
            $("#{{ $item_sin_punto }}").on('change.datetimepicker', 
                function() 
                {
                    let isoDate = moment($(this).datetimepicker('date'));
                    @this.set('{{ $item }}', isoDate);
                });
         });
     </script>
</div>
