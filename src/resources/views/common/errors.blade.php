 @if (count($errors) > 0)
 <div class="alect alert-danger">
     <strong>エラーがありました</strong>
     <br>
     <br>
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
     </ul>
 </div>
 @endif
