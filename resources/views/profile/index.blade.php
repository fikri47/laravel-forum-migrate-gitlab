@extends('dashboard.main')

@section('title')
Profile Pages
@endsection

@section('content')
<form action="/profile/{{$detailProfile->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="container-fluid">
        <div class="row">
  <!-- Profile Image -->
          <div class="col-md-3">

            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src={{$detailProfile->getAvatar()}}
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center" >{{$detailProfile->user->name}}</h3>

                <p class="text-muted text-center">{{$detailProfile->user->email}}</p>

                <input type="file" class="form-control" name="avatar" id="image">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <h3>Data Diri</h3>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" value="{{$detailProfile->user->name}}"id="name" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" value="{{$detailProfile->user->email}}"id="email" disabled>                
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                          <input type="number" name="age" class="form-control" id="age" value="{{$detailProfile->age}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" name="address" class="form-control" id="address" value="{{$detailProfile->address}}" placeholder="address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" name="bio" placeholder="Bio">{{$detailProfile->bio}}</textarea>
                        </div>
                      </div>                                            
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </form>

      @endsection
