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
    <a href="/category/create" class="btn btn-primary mb-2">Add New</a>   
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Makanan</td>
            <td>
                <a href="/category/1/edit" class="btn btn-success">Edit</a>
                <form action="">
                    <button href="/category/1/destroy" class="btn btn-danger" onclick="return confirm('Are you sure to delete this category?');">Delete</button>
                </form>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>
@endsection