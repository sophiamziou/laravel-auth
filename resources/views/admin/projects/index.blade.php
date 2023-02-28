@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between m-3">
                    <h2>LISTA PROGETTI</h2>
                    <a href="{{ route('admin.projects.create')}}">
                        <button type="button" class="btn btn-primary">NEW</button>
                    </a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">content</th>
                        <th scope="col">slug</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                          <th>{{$project['id']}}</th>
                          <td>{{$project['title']}}</td>
                          <td>{{$project['content']}}</td>
                          <td>{{$project['slug']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection