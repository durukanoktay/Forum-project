@extends('forum.layout.layout')
@section('content')
<div class="edit-top">
        <div class="container-fluid">
        
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    
                    
                </div>
            </div>
        </div>

        <form action="" class="mb-3">
            <div class="form-group">
                <label for="title">new profile image</label>
                <input type="file" class="form-control" name="profile-image" />
            </div>
            <div class="form-group">
                <label for="title">profile name & surname</label>
                <input type="text" class="form-control" name="profile-name" />
            </div>

            <div class="form-group">
                <label for="title">profile profile-description</label>
                <input type="text" class="form-control" name="profile-description" />
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
                save profile
            </button>

        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection