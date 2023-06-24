@extends('dashboard.main')

@section('title')
Question Box
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Inbox</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        @auth
        <a href="/question/create" class="btn btn-primary mb-2">Add Question</a>   
        @endauth
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">image</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @if ($item->user->id == auth::user()->id)
                @forelse ($question as $key=>$value)
                    <tr >
                        <td>{{$key + 1}}</th>
                        <td>{{$value->title}}</td>
                        <td>{!! $value->content!!}</td>
                        <td>{{$value->category->name}}</td>
                        <td>                            
                            <div class="d-flex ">
                            <a href="/question/{{$value->id}}" class="btn btn-info mr-2" >Show</a>
                            @auth                            
                            <a href="/question/{{$value->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                                <form action="/question/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this question!');" value="Delete">
                                </form>                            
                            @endauth
                            </div>
                        </td>                      
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>
@endsection