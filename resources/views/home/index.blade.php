@extends('dashboard.main')

@section('title')
Home Pages
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Beranda</h3>

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
    <a href="#" class="btn btn-primary mb-2">Tambah</a>   
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">image</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <a href="#" class="btn btn-info">Show</a>
                <a href="#" class="btn btn-primary">Edit</a>
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