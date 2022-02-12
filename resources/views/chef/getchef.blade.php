
<h3>ID: {{$id}}</h3>
<h3>Name: {{$n}}</h3>
<h3>Location: {{$loc}}</h3>

@for($i=0; $i<1; $i++ )
    <p> {{$food[$i]}} </p>
@endfor

<ul>
    @foreach($food as $f)

        <li><b>{{$f}}</b></li>
        
    @endforeach
</ul>