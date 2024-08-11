@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index')}}">Projects</a></li>
            <li class="breadcrumb-item"><a href="{{ route('rekap_sprints.filter', ['project_name' => $projectName]) }}">{{$projectName}}</a></li>
        </ol>
    </nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">Nama Sprint</th>
              <th scope="col">Sprint Start</th>
              <th scope="col">Sprint End</th>
              <th scope="col">Open Story Point</th>
              <th scope="col">Completed Story Point</th>
              <th scope="col">Sprint Percentage</th>
              <th scope="col">Status</th>
              <th scope="col">Sprint Planning</th>
            </tr>
        </thead>

        <tbody>
            @foreach($rekapSprints as $rekapSprint)
                <tr>
                  <th scope="row">
                      <a href="https://taiga.javan.id/project/{{$rekapSprint->project_slug}}/taskboard/{{$rekapSprint->milestone_slug}}" target="_blank">
                          {{$rekapSprint->milestone_name}}
                      </a>
                  </th>
                  <td>{{$rekapSprint->estimated_start}}</td>
                  <td>{{$rekapSprint->estimated_finish}}</td>
                  <td>{{$rekapSprint->open_point}}</td>
                  <td>{{$rekapSprint->closed_point}}</td>
                  <td>{{ number_format(($rekapSprint->closed_point / ($rekapSprint->open_point + $rekapSprint->closed_point)) * 100, 2) }}%</td>
                  <td>-</td>
                  <td>
                      <a href="{{route('user_stories', ['milestone_id' => $rekapSprint->id])}}">
                          <i class="fa-solid fa-circle-info"></i>
                      </a>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
