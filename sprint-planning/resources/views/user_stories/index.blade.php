@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index')}}">Projects</a></li>
            <li class="breadcrumb-item"><a href="{{ route('rekap_sprints.filter', ['project_name' => $userStories[0]->project]) }}">{{$userStories[0]->project}}</a></li>
            <li class="breadcrumb-item"><a href="#">{{($userStories[0]->milestone->name)}}</a></li>
        </ol>
    </nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">User Story</th>
              <th scope="col">Full Name</th>
              <th scope="col">Point</th>
              <th scope="col">Task</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userStories as $userStory)
                <tr>
                  <td>
                      <a href="https://taiga.javan.id/project/{{$userStories[0]->project_slug}}/us/{{$userStory->ref}}?milestone={{$userStory->milestone_id}}" target="_blank">
                          {{$userStory->user_story}}
                      </a>
                  </td>
                  <td >{{$userStory->full_name}}</td>
                  <td >{{$userStory->point}}</td>
                    <td>
                      <ul>
                          @foreach($userStory->tasks as $task)
                              <li>
                                  <a href="https://taiga.javan.id/project/{{$userStories[0]->project_slug}}/task/{{$task->ref}}" target="_blank">
                                      <bold>{{ $task->user ? $task->user->full_name : 'No User Assigned' }}</bold> - {{ $task->subject }}
                                  </a>
                              </li>
                          @endforeach
                      </ul>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
