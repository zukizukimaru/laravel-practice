@extends('layouts.app')

@section('content')

@if (session('status'))<div class="alert alert-success" role="alert" onclick="this.classlist.add('hidden')">{{ session('status') }}</div>@endif

<p>{{ $message }}</p>
<form class="form-signin" role="form" method="post" action="/greeting">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="text" name="name" class="form-control" placeholder="名前を文字を入力してください"　autofocus required="required">
{{--バリデーション--}}
@if($errors->has('name'))
<p class="text-danger" style="margin-bottom:30;">{{ $errors->first('name') }}</p>
@endif
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection

