<!-- iclude hearder -->
@include('layouts.header')

<h3>ID: {{$id}}</h3>
<h3>Name: {{$n}}</h3>

<h3>
    Food: 
    <ul>
        @foreach($food as $f)

            <li><b>{{$f}}</b></li>
            
        @endforeach
    </ul>
</h3>

<h3>Location: {{$loc}}</h3>