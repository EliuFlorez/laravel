<h1>Newsletter</h1>

<p>Noticias del mes</p>

<ul>
    @foreach($posts as $post)
    <li>{{$post->name}}</li>
    @endforeach
</ul>