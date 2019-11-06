@extends('layouts.app')

@section('content')

    <form action="/images/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="file">
        <button type="submit">保存</button>
    </form>

@endsection
