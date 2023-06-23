@extends('dashboard.main')

@section('title')
Question Box
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Question</h3>
            </div>
            <div class="card-body">
                <form method="post" action="/question/{{$question->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" value="{{ $question->title }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="title">Category</label>
                        <select class="form-control select2" name="category" style="width: 100%;">
                        @foreach($category as $key=>$value)
                            <option selected="selected">{{ $value->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="tinymce-editor" name="content" value="{{ $question->content }}"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="image">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection