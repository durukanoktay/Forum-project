@extends('forum.layout.layout')
@section('content')
<div class="container">
        <div class="rightbar-pro">
            <div class="row">
                <!-- Category one -->
                <div class="col-lg-12">
                    <!-- second section  -->
                    <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                        personal information
                    </h4>
                    <table class="table table-striped table-responsivelg table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">who ma I?</th>
                                <th scope="col">profile photo
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        name surname
                                    </h3>
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nulla fuga
                                        sapiente nemo assumenda at ipsam officiis eligendi beatae adipisci.</p>
                                </td>
                                <td>
                                    <img id="profile-img" src="\Durukan.png" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <!--left-bar ----------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------->
        <div class="leftbar-pro">
            <div class="column">
                <!-- Category one -->
                <div class="col-lg-12">
                    <!-- second section  -->
                    <h4 class="text-white bg-info mb-0 p-4 rounded-top">
                        toolbar
                    </h4>
                    <table class="table table-striped table-responsivelg table-bordered">
                        <thead class="thead-light">

                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        <a href="/home"> home</a>
                                    </h3>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        <a href="/message"> message</a>
                                    </h3>
                                </td>
                            </tr>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        <a href="/editprofile"> edit profile</a>
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        <a href="/newtopic"> post something</a>
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        <a href="/post"> latest post</a>
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="h6">
                                        <a href="/changepas"> change password</a>
                                    </h3>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection