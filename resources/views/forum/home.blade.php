@extends('forum.layout.layout')
@section('content')
<div class="container-fluid">
    <!-- First section -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <h1>
                <a href="#" class="navbar-brand">DREIRUNE</a>
            </h1>
            <form action="#" class="form-inline mr-3 mb-2 mb-sm-0">
                <input type="text" class="form-control" placeholder="search" />
                <button type="submit" class="btn btn-success">Search Forum</button>
            </form>
        </div>
    </nav>
    <!-- First section end -->
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!-- Category one -->
                <div class="col-lg-12">
                    <!-- second section  -->
                    <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                        Forum Category
                    </h4>
                    <table class="table table-striped table-responsive table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Forum</th>
                                <th scope="col">Topics</th>
                                <th scope="col">Posts</th>
                                <th scope="col">Latest Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forums as $forum)
                            <tr>
                                <td>
                                    <h3 class="h5">
                                        <a href="/{{ $forum->name }}">{{ $forum->name }}</a>
                                    </h3>
                                    <p class="mb-0">
                                        {{ $forum->description }}
                                    </p>
                                </td>
                                <td>
                                    <h4 class="h6 font-weight-bold mb-0">
                                        <a href="#">Post name</a>
                                    </h4>
                                    <div><a href="#">Author name</a></div>
                                    <div>06/07/2021 20:04</div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Category one end -->
            </div>
        </div>
        <div class="col-lg-4">
            <aside>
                <div class="card">
                    <div class="card-body">
                        <h4 href="/duyuru" class="card-title">Announcements</h4>
                        <ul class="list-unstyled mb-0">
                            <li><a href="/announcement">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <dl class="row">
                            <dt class="col-8 mb-0">Total:</dt>
                            <dd class="col-4 mb-0">10</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-8 mb-0">Members:</dt>
                            <dd class="col-4 mb-0">10</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-8 mb-0">Guests:</dt>
                            <dd class="col-4 mb-0">3</dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Members Statistics</h4>
                        <dl class="row">
                            <dt class="col-8 mb-0">Total Forums:</dt>
                            <dd class="col-4 mb-0">{{ $forums->count() }}</dd>
                        </dl>
                        <dl class="row">
                            @php
                                $topics = DB::table('topics')->get();
                            @endphp
                            
                            <dt class="col-8 mb-0">Total Topics:</dt>
                            <dd class="col-4 mb-0">{{ $topics->count() }}</dd>
                        </dl>
                        <dl class="row">
                            @php
                                $users = DB::table('users')->get();
                            @endphp

                            <dt class="col-8 mb-0">Total members:</dt>
                            <dd class="col-4 mb-0">{{ $users->count() }}</dd>
                        </dl>
                    </div>
                    <div class="card-footer">
                        <div>Newest Member</div>
                        @php
                            $latestUser = DB::table('users')->latest()->first();
                        @endphp
                        <div>{{ $latestUser->name }}</a></div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
<div class="container-fluid">
    <footer class="small bg-dark text-white">
        <div class="container py-4">
            <ul class="list-inline mb-0 text-center">
                <li class="list-inline-item">
                    <p>&copy; This Website created by Durukan Oktay, Onur Büber and Ömer Yazlık...</p>
                </li>
            </ul>
        </div>
    </footer>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
