@extends("layouts.app")

@section("title")
Create
@endsection

@section("content")
    <section class="create">
        <form action="{{route('comics.store')}}" method='post'>
            @csrf 
            @method('POST')
            <input type="text" name='title' value='' placeholder='Title...'>
            <input type="text" name='description' value='' placeholder='Description...'>
            <input type="text" name='thumb' value='' placeholder='Cover...'>
            <input type="number" name='price' value='' placeholder='Price...'>
            <input type="text" name='series' value='' placeholder='Series...'>
            <input type="text" name='sale_date' value='' placeholder='Date...'>
            <input type="text" name='type' value='' placeholder='Type...'>

            <input type="submit" name='Send!' value='Send!'>
        </form>
    </section>
@endsection