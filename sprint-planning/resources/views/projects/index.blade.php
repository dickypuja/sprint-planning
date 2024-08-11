@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Projects</a></li>
        </ol>
    </nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">Nama Project</th>
              <th scope="col">Jumlah Sprint</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($projects as $project)
                <tr>
                    <th scope="row">
                        <a href="https://taiga.javan.id/project/{{$project->slug}}/timeline" target="_blank">
                            {{$project->name}}
                        </a>
                    </th>
                    <td>{{$project->milestones_count}}</td>
                    <td>
                      <a href="{{ route('rekap_sprints.filter', ['project_name' => $project->name]) }}">
                         <i class="fa-solid fa-circle-info"></i>
                      </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
