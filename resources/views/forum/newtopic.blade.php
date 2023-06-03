@extends('forum.layout.layout')
@section('content')
    <div class="container">
      

      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
          </div>
        </div>
      </div>
      @if(isset($forum))
        <form action="{{ route('createTopic', $forum->name) }}" method="POST" class="mb-3">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control" name="title" />
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comment" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-lg-5">
                Create post
            </button>
            <button type="reset" class="btn btn-danger mt-2 mb-lg-5">Reset</button>
        </form>
      @endif
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection