@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index')}}">Projects</a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index')}}"></a></li>
        </ol>
    </nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">User Story</th>
              <th scope="col">Full Name</th>
              <th scope="col">Point</th>
            </tr>
        </thead>

        <tbody>
            @foreach($userStories as $userStory)
                <tr>
                  <td >{{$userStory->user_story}}</td>
                  <td >{{$userStory->full_name}}</td>
                  <td >{{$userStory->point}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
