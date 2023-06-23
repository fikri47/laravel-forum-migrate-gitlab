@extends('dashboard.main')

@section('title')
Home Pages
@endsection

@section('content')
@forelse ($question as $key=>$value )
<div class="card card-widget">
    <div class="card-header">
      <div class="user-block">
        <img class="img-circle" src="{{ optional($value->user->profile)->getAvatar() ?: asset('image/user.png')}}" alt="User Image">
        <span class="username"><a href="#">{{$value->user->name}}</a></span>
        <span class="description">{{$value->category->name}} - {{$value->created_at}}</span>
      </div>
      <!-- /.user-block -->
      <div class="card-tools">
        <button type="button" class="btn btn-tool" title="Mark as read">
          <i class="far fa-circle"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if ($value->image != null)
        <img class="img-fluid pad mb-3" src="{{ asset('image/'. $value->image )}}" alt="Photo">            
        @endif
      <p>{!! $value->content !!}</p>
      <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
      <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
      <a href="#" class="float-right btn btn-outline-primary rounded-pill" class="rounded-pill"><span class="glyphicon glyphicon-ok"></span> Jawab</a>
    </div>
    <!-- /.card-body -->    
    <!-- /.card-footer -->
  </div>
@empty
@endforelse





{{-- <div class="card">
    <div class="card-header">
        <h3 class="card-title">Beranda</h3>        
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
</div> --}}
@endsection