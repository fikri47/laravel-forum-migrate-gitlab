@extends('dashboard.main')

@section('content')    

  <div class="card">
    <div class="card-header"><h1>{{$question->title}}</h1>
    </div>    
    <div>                    
    <div class="card-body mb-5">        
        <span></span>
        @if ($question->image != null)
        <img class="img-fluid pad mb-3" src="{{ asset('image/'. $question->image )}}" alt="Photo">            
        @endif
        <p class="card-text">{{$question->content}}</p>
        <form action="/answer/{{$question->id}}" method="post">
            @csrf
            <textarea name="content" class="form-control" id="content" cols="30" rows="3" placeholder="isi content"></textarea>
                @error('content')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror                      
            <input type="submit" class="btn btn-outline-dark mt-2" value="Answer">    
        </form>
        </div>
  </div> 
  
  <div class="card mt-4">
    <div class="card-body">
        <h4>List Jawaban</h4>
        <div class="card-footer card-comments pl-2 mt-4">
            <div class="card-comment mb-3">
                @forelse ($question->answer as $item )
                <img class="img-circle img-sm" src={{$item->user->profile->getAvatar()}} alt="User Image">

                <div class="comment-text">
                    <span class="username">
                        {{$item->user->name}}
                        <span class="text-muted float-right">{{$item->created_at->diffForHumans()}}</span>
                    </span><!-- /.username -->
                    {{$item->content}}
                </div>
                <div class="mt-2 mb-2">
                    @auth
                    <div class="card-tools mb-5">
                        <div class="btn btn-sm btn-primary" data-toggle="collapse"
                            href="#collapseBalas{{$item->id}}" role="button" aria-expanded="false"
                            aria-controls="collapseBalas{{$item->id}}">Balas</div>
                        <div class="collapse" id="collapseBalas{{$item->id}}">
                            <div class="card card-body">
                                <form action="/answer/{{$question->id}}" method="post">
                                    @csrf
                                    <textarea name="content" class="form-control" id="{{$item->id}}" cols="30" rows="3"
                                        placeholder="isi content"></textarea>
                                    <input type="hidden" name="comment_id" value="{{ $item->id }}" />
                                    @error('content')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <input type="submit" class="btn btn-outline-dark mt-2" value="Kritik">
                                </form>
                            </div>
                        </div>
                        @if ($item->user->id == auth::user()->id)
                        <div class="btn btn-sm btn-primary" data-toggle="collapse" href="#collapseEdit{{$item->id}}"
                            role="button" aria-expanded="false" aria-controls="collapseEdit{{$item->id}}">Edit</div>
                        <div class="collapse" id="collapseEdit{{$item->id}}">
                            <div class="card card-body">
                                <form action="{{ route('answer.update', $item) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <textarea name="content" class="form-control" id="{{$item->id}}" cols="30" rows="3"
                                        placeholder="isi content" value="{{$item->content}}"></textarea>
                                    @error('content')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <input type="submit" class="btn btn-outline-dark mt-2" value="answer">
                                </form>
                            </div>
                        </div>

                        <form action="{{ route('answer.delete', $item) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                    @endif
                    @endauth
                @empty
                    <h4>Belum ada Jawaban</h4>
                @endforelse
            </div>
        </div>
    </div>
</div>





@endsection
