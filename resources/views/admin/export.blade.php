<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Posisi yang dilamar</th>
            <th>Lokasi</th>
            <th>Bulan</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
            <tr>
                <td>{{ $dt->nama }}</td>
                <td>{{ $dt->no_telp }}</td>
                <td>{{ $dt->posisi }}</td>
                <td>{{ $dt->lokasi }}</td>
                <td>{{ $dt->bulan }}</td>
                <td>{{ $dt->tahun }}</td>
            </tr>
        @endforeach
    </tbody>
</table>