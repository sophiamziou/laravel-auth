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
                          <td>
                            <div>
                              <form action="{{route('admin.projects.destroy', ['project' => $project['slug']])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" name="" id="" value="cancella">
                              </form>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection