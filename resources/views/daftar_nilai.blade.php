@php
$no = 1;
$s1 = ['nama'=>'Fawwaz', 'nilai'=>85];
$s2 = ['nama'=>'Siti', 'nilai'=>90];
$s3 = ['nama'=>'Randi', 'nilai'=>100];
$s4 = ['nama'=>'Randu', 'nilai'=>60];
$s5 = ['nama'=>'Rande', 'nilai'=>70];

$judul = ['No', 'Nama', 'Nilai', 'Keterangan'];
$siswa = [$s1,$s2,$s3,$s4,$s5];

@endphp

<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
            @foreach ($judul as $item)
            <th>
                {{ $item }}
            </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $siswas)
        @php
        $ket = ($siswas['nilai'] >= 80)? 'Lulus' : 'Tidak Lulus';
        @endphp
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $siswas['nama'] }}</td>
            <td>{{ $siswas['nilai'] }}</td>
            <td>{{ $ket }}</td>
        </tr>
        @endforeach
    </tbody>


</table>