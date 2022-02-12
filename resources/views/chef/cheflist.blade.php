<h1>chef list</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Food-Type</th>
        <th>Location</th>
    </tr>
    @foreach($chef as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td><a href="chefdetails/">{{$c->name}}</a></td>
            <td>{{$c->food}}</td>
            <td>{{$c->loc}}</td>
        </tr>
    @endforeach
</table>