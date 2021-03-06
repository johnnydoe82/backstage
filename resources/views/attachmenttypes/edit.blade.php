@extends('app')

@section('content')

    <h1>Edit Attachmenttype {{ $attachmenttype->id }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/attachmenttypes/' . $attachmenttype->id) }}" method="post" enctype="multipart/form-data">
        {{ method_field('patch') }}
        {{ csrf_field() }}
        @include ('attachmenttypes.form', ['submitButtonText' => 'Update'])
    </form>

@endsection