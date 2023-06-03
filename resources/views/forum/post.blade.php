@extends('forum.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- Category one -->
                    <div class="col-lg-12">
                        <!-- second section  -->
                        <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                            {{ $post->title }}
                        </h4>
                        <table class="table table-striped table-responsivelg table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Author</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="author-col">
                                        @php
                                            $user = App\Models\User::find($post->user_id);
                                        @endphp
                                        <div>{{ $user->name }}</div>
                                    </td>
                                    <td class="post-col d-lg-flex justify-content-lg-between">
                                        <div>
                                            <span class="font-weight-bold">Post subject:</span>
                                            {{ $post->title }}
                                        </div>
                                        <div>
                                            <span class="font-weight-bold">Posted:</span> 08.10.2021
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                  <div>
                                    <span class="font-weight-bold">Joined:</span>08.10.2021
                                  </div>
                                  <div>
                                    <span class="font-weight-bold">Posts:</span> 200
                                  </div>
                                </td>
                                <td>
                                  <p>
                                    {{ $post->content }}
                                  </p>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <form action="" class="mb-3">
            <div class="form-group">
                <label for="comment">Reply to this post</label>
                <textarea class="form-control" name="comment" id="" rows="10" required></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary mt-2">Submit reply</button>
                <button type="reset" class="btn btn-danger mt-2 ml-2">Reset</button>
            </div>
        </form>


    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
