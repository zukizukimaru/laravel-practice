@extends('layouts.app')

@section('content')


<p>{{ $message }}</p>
<form class="form-signin" role="form" method="post" action="/task/update/{{$data->id}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
{{--隠しフィールド--}}
<input type="hidden" name="_method" value="PATCH">
<input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="名前を文字を入力してください"　autofocus >
 {{--バリデーション--}}
 @if($errors->has('name'))
 <p class="text-danger" style="margin-bottom:30;">{{$errors->first('name') }}</p>
@endif
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection
