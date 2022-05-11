<h1>member list</h1>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>designation</th>
        <th>salary</th>
      

    </tr>
    @foreach($members as $value)
    <tr>
        <td style="text-align:center">{{ $value->id}}</td>

        <td style="text-align:center">{{ $value->name }}</td>
        <td style="text-align:center">{{ $value->designation }}</td>
        <td style="text-align:center">{{ $value->salary }}</td>


    </tr>
    @endforeach
</table>