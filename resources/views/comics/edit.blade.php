@extends("layouts.app")

@section("title")
Edit
@endsection

@section("content")
    <section class="create">
        <form action="{{route('comics.update', ['comic' => $comic->id])}}" method='post'>
            @csrf 
            @method('PATCH')
            <input type="text" name='title' value='{{$comic->title}}' placeholder='Title...'>
            <input type="text" name='description' value='{{$comic->description}}' placeholder='Description...'>
            <input type="text" name='thumb' value='{{$comic->thumb}}' placeholder='Cover...'>
            <input type="number" name='price' value='{{$comic->price}}' placeholder='Price...'>
            <input type="text" name='series' value='{{$comic->series}}' placeholder='Series...'>
            <input type="text" name='sale_date' value='{{$comic->sale_date}}' placeholder='Date...'>
            <input type="text" name='type' value='{{$comic->type}}' placeholder='Type...'>

            <input type="submit" name='Edit!' value='Edit!'>
        </form>
    </section>
@endsection