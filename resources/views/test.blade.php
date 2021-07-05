@foreach($users as $user)
    {{$user->name}}
    <br>
@endforeach
<a href="{{route('home')}}">toto</a>