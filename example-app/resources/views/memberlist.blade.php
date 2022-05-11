<h1>member lists</h1>
<table border="1">
    <tr>
        <th>name</th>
        <th>designation</th>
        <th>salary</th>
    </tr>


@foreach($members as $value)
<tr>
    <td>
        {{ $value['name'] }}
    </td>
    <td>{{ $value['designation'] }}</td>
    <td>{{ $value['salary'] }}</td>
</tr>
@endforeach
</table>
<div>
    {{ $members->links() }}
</div>
<style>
    .w-1{
        display: none;
    }
</style>