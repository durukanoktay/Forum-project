@extends('forum.layout.layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    
                </div>
            </div>
        </div>

        <form action="" class="mb-3">
            <div class="form-group">
                <label for="title">write your message</label>
                <input type="text" class="form-control" name="profile-description" />
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
                send message
            </button>

        </form>
    </div>
@endsection