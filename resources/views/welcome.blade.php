{{--<h1>--}}
{{--    {{  $name  }}--}}

{{--</h1>--}}
{{--@if(!is_null($age))--}}
{{--<p>--}}
{{--    My age is {{ $age }}--}}
{{--</p>--}}
{{--@else--}}
{{--    <p>--}}
{{--        Please Enter you age--}}
{{--    </p>--}}
{{--@endif--}}

<h1>
{{__('website.welcome')}} {{  $data['name']  }}
</h1>
@if(!is_null($data['age']))
<p>
{{ $data['age'] }}
</p>
@endif
