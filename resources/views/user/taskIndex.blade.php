@extends('user.template')

@section('content')
    <div class="row">
        <div class="col-md-12 my-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Create Task
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('createStore') }}">
                                @csrf
                                <input type="text" name="idUser" value="{{ Auth::user()->id }}" hidden>
                                <div class="form-group">
                                    <input type="text" name="taskName" class="form-control" id="taskName"
                                        placeholder="Task Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" class="form-control" id="description"
                                        placeholder="Description">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-hover my-3">
            <thead>
                <tr>
                    <th scope="col">date</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stmtDataTask as $item)
                    <tr>
                        <th scope="row">{{ $item->created_at }}</th>
                        <td>{{ $item->task_name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#1">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="1" tabindex="-1" aria-labelledby="1Label"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

    </div>
    <a href="" class="btn btn-danger">Delete</a>

    </td>
    @endforeach
    </tr>
    </tbody>
    </table>
@endsection
