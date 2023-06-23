@extends('dashboard.main')

@section('title')
Category
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Category</h3>

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
    <a href="/category/create" class="btn btn-primary mb-2">Add New</a>   
    @endauth
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Category</th>                
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($category as $key=>$value)
                    <tr >
                        <td>{{$key + 1}}</th>
                        <td>{{$value->name}}</td>
                        <td>                            
                            <div class="d-flex ">
                            <a href="/category/{{$value->id}}" class="btn btn-info mr-2" >Show</a>
                            @auth                            
                            <a href="/category/{{$value->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                                <form action="/category/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this category!');" value="Delete">
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
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>


@endsection