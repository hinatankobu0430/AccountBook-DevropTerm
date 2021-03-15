{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

@section('title', '新規データ作成')

@section('content')
        <h1>新規データ作成</h1>
        <p>新しく保存したい内容を記載してください</p>
        <form action = "{{ action('Admin\AccountController@create') }}" method = "post" enctype = "multipart/form-data">
            
            @if(count($errors) > 0 )
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            
            <div class = "new_record">
                <label for = "date">日付</label>
                <input type = "date" id = "date" name = "date" value = "{{ old('date') }}">
                <br>
            
                <label for = "title">タイトル</label>
                <input type ="text" id = "title" name = "title" value = "{{ old('title') }}"><br>
            
                <label for ="category_id">カテゴリー</label>
                    <select id ="category_id" name = "category_id" value = "{{ old('category_id') }}">
                        <option value = "none">選択してください</option>
                        <option value = "food">食費</option>
                        <option value = "hobby">趣味</option>
                        <option value = "transfer">交通費</option>
                        <option value = "life">日用品</option>
                        <option value = "pet">ペット</option>
                        <option value = "other">その他</option>
                    </select>
                <br>
            
                <label for = "price">金額</label>
                <input type = "text" id = "price" name = "price" value = "{{ old('price') }}">円
                <br>
            
                <label for = "memo">メモ</label>
                <textarea id = "memo" name = "memo" value = "{{ old('memo') }}" rows = "5"></textarea>
                <br>
            </div>
            {{ csrf_field() }}
            <div class = "button">
                <input type = "submit" class = "button" value = "新規登録">
                <input type = "reset"  class = "button" value = "入力内容のリセット">
            </div>
        </form>
@endsection