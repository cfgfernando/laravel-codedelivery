@extends('app')

@section('content')

    <div class="container">
        <h3>Editando Categoria: {{$category->name}}</h3>

        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}



        <!form input -->

        @include('admin.categories._form')
        <div class="form-group">
            {!! Form::submit('Alterar Categoria', ['class'=>'btn btn-primary'])  !!}
        </div>


        {!! Form::close() !!}
                                                     

 </div>



    @endsection