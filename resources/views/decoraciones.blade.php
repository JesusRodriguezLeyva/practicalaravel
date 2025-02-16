<body>

    <table class="table table-sm">
        <thead class="table-active">
            <tr>
                <th>Id</th>
                <th>Nombre Material</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($renglones as $renglon)
                <tr>
                    <td>{{ $renglon->idDecoracion }}</td>
                    <td>{{ $renglon->nombreMaterial }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
