@extends('dashboard.main')

@section('title')
Category
@endsection

@push('script')
<script type="text/javascript">

    $('.show-alert-delete-box').click(function(event){

        var form =  $(this).closest("form");

        var name = $(this).data("name");

        event.preventDefault();

        swal({

            title: "Are you sure you want to delete this record?",

            text: "If you delete this, it will be gone forever.",

            icon: "warning",

            type: "warning",

            buttons: ["Cancel","Yes!"],

            confirmButtonColor: '#3085d6',

            cancelButtonColor: '#d33',

            confirmButtonText: 'Yes, delete it!'

        }).then((willDelete) => {

            if (willDelete) {

                form.submit();

            }

        });

    });

</script>
@endpush

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
                                <form action="/category/{{$value->id}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
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