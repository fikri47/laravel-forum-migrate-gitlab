@extends('dashboard.main')

@section('title')
Add New Category
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form New Category</h3>
        
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
                
                <form action="/category" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" id="name"  name="name" aria-describedby="emailHelp" placeholder="Category Name" autofocus>
                        @error('name')
                        <small id="emailHelp" class="form-text text-muted">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                
            </div>
            <!-- /.card-footer-->
        </div>
    </div>
</div>
@endsection