@php($item_sin_punto = str_replace('.', '_', $item))

<x-ui-input item='{{ $item }}' type="date" placeholder='{{ $placeholder ?? "" }}' icon='<i class="far fa-calendar fa-fw"></i>'>
    {{ $slot }}
</x-ui-input>

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
        
        $("#{{ $item_sin_punto }}").on('change.datetimepicker', 
            function() 
            {
                let isoDate = moment($(this).datetimepicker('date'));
                @this.set('{{ $item }}', isoDate);
            });
     });
 </script>
