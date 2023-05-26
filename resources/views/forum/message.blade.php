@extends('forum.layout.layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    
                </div>
            </div>
        </div>
        <div id="message-box1">
            <p class="admin-message1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reiciendis molestiae cumque sequi vitae enim sunt molestias earum atque sint? </p>
            <p class="user-message1">Lorem, ipsum.</p>
            <p class="user-message1">This is user message.</p>
            <p class="user-message1">It works.</p>
            <p class="admin-message1">This is admin message. </p>
            <p class="admin-message1">Lorem, ipsum dolor. </p>
            <form action="" class="mb-3">
                <div class="form-group">
                    <label for="title">write your message</label>
                    <input id="buyuyen-kutu" type="text" class="form-control" name="profile-description" />
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
                    send message
                </button>

            </form>
        </div>
    </div>
@endsection