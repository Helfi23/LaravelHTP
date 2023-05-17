@php

$nama = "budi";
$nilai = 60.00;
@endphp
@if ($nilai>= 60)

@php $ket = "Lulus"; @endphp
@else
@php $ket = "Gagal"; @endphp
@endif
Sisa {{ $nama }} dengan nilai {{ $nilai }}
dinyatakan {{ $ket }}