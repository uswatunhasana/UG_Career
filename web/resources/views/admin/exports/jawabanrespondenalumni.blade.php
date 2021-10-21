<table>
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Responden</th>
        
        <th>Jawaban</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jawabanrespondens as $jawabanresponden)
        <tr>
            <td>{{ $loop->index }}</td>
            <td>{{ $jawabanresponden->id_user }}</td>
            <td>{{ $jawabanresponden->jawaban }}</td>
        </tr>
    @endforeach
    </tbody>
</table>