@foreach ($comics as $comic)
        <a href="{{route('comics.show', ['comic' => $comic->id])}}">{{$comic->title}}</a>
@endforeach 