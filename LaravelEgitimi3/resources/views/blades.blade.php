<p>İsim: {{$name}}</p>
<p>Soyisim: {{$surname}}</p>

@php
    $isActive=false;
    $hasError=true;
@endphp
<span @class([
        'p-4',
        'font-bold'=>$isActive,
        'text-gray-500'=>$isActive,
        'bg-red'=>$hasError,
    
    ])>Test</span>

{{--Comment --}}

<!--Alert çağırma-->

<!--<x-alert type="error" message="Merhaba"/>-->

@yas(19)
    18 Yaşından büyüksün
@else
    18 yaşından küçüksün
@endyas



    