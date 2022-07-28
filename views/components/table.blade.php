<table>
    <tbody>
    @foreach($items as $columns)
        <tr>
        @foreach($columns as $column)
            <td>{{ $column }}</td>
        @endforeach
        </tr>
    @endforeach
    </tbody>
</table>