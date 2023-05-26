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
                <label for="title">current password</label>
                <input type="text" class="form-control" name="current-password" />
            </div>

            <div class="form-group">
                <label for="title">new passaword</label>
                <input type="text" class="form-control" name="new-password" />
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
                change
            </button>

        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection