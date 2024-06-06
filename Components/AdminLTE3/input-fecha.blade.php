@php($item_sin_punto = str_replace('.', '_', $item))

<div class="form-group @if($errors->has('{{ $item }}')) has-error @endif">
    <label for="{{ $item_sin_punto }}" class="form-label">{{ $slot }}</label>
    <div class="form-group">
        <div class="input-group date" id="{{ $item_sin_punto }}" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#{{ $item_sin_punto }}"/>
            {{-- @if(!$isEditable) disabled='' @endif> --}}
            <div class="input-group-append" data-target="#{{ $item_sin_punto }}" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    @if($errors->has('{{ $item }}'))
        @foreach ($errors->get('{{ $item }}') as $message)
            <span class="help-block">* {{ $message }}</span>
        @endforeach
    @endif
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        let dateFormat = "DD/MM/YYYY";
        let value = @this.get('{{ $item }}');
        let fecha = `${value.substring(8, 10)}/${value.substring(5, 7)}/${value.substring(0, 4)}`;

        $("#{{ $item_sin_punto }}").datetimepicker({
            'locale': moment.locale('es'),
            'format': dateFormat,
            'date': moment(fecha, dateFormat),
        });
        
        $("#{{ $item_sin_punto }}").on('change.datetimepicker', function() 
        {
            let isoDate = moment($(this).datetimepicker('date'));
            @this.set('{{ $item }}', isoDate);
        });
     });
 </script>
