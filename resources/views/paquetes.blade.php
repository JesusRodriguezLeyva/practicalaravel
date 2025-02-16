<body>

    <table class="table table-sm">
        <thead class="table-active">
            <tr>
                <th>Id</th>
                <th>Clave</th>
                <th>Nombre Decoracion</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($renglones as $renglon)
                <tr>
                    <td>{{ $renglon->idPaquete }}</td>
                    <td>{{ $renglon->Clave }}</td>
                    <td>{{ $renglon->nombreMaterial }}</td>
                    <td>{{ $renglon->Cantidad }}</td>
                    <td>{{ $renglon->Precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
