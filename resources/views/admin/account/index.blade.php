@extends('layouts.admin')

@section('title', '家計簿ホーム')

@section('content')
    <h1>Accounts Home</h1>
    <p>項目を選んでください</p>
    <form action = "{{ action('Admin\AccountController@index') }}" method = "get" enctype = "multipart/form-data">
        <div class = "button">
            <a href = "{{ url('admin/account/create') }}"><button type = "button" class = "button">New Create</button></a>
            <a href = "{{ url('admin/account/create') }}"><button type = "button" class = "button">edit?実装前（いるかいらないか検討中）</button></a>
            <a href = "{{ url('admin/account/create') }}"><button type = "button" class = "button">total?実装前（いるかいらないか検討中）</button></a>
        
        </div>
        
        </form>
@endsection