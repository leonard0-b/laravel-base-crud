@extends("layouts.app")

@section("title")
Your Comic
@endsection

@section("content")
    <section class="create">
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                <li class="big">error:</li>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{route('comics.store')}}" method='post' class="flex">
            @csrf 
            @method('POST')
            <input type="text" name='title' value='' placeholder='Title...'>
            <input type="text" name='description' value='' placeholder='Description...'>
            <input type="text" name='thumb' value='' placeholder='Cover...'>
            <input type="number" name='price' value='' placeholder='Price...'>
            <input type="text" name='series' value='' placeholder='Series...'>
            <input type="date" name='sale_date' value='' placeholder='Date...'>
            <input type="text" name='type' value='' placeholder='Type...'>
            <div>
                <input type="submit" name='Send!' value='Send!' class="send">
                <a class="back" href="{{route('comics.index')}}">Back</a>         
            </div>
        </form>
    </section>
@endsection