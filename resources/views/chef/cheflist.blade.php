<h1>chef list</h1>
<!-- iclude hearder -->
@include('layouts.header')
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
            <!-- name routing use link -->
            <td>
                <a href="{{route('chefdetails',['id'=>$c->id, 'name'=>$c->name, 'location'=>$c->loc ])}}">
                    {{$c->name}}
                </a>
            </td>
            <td>{{$c->food}}</td>
            <td>{{$c->loc}}</td>
        </tr>
    @endforeach
</table>