@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Profile Details</h3>
                </div>
              <!-- /.card-header -->
            
            @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        Error: {!! $error !!} <br/>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
              <!-- form start -->
              <form method="post" action="{{ url ('admin/profile') }}" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="admin_email">Email address</label>
                        <input class="form-control" id="admin_email" value="{{ Auth::guard('admin')->user()->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="currentpasswd">Current Password</label>
                        <input type="password" class="form-control" id="currentpasswd" name="currentpasswd" placeholder="Current Password">
                        <span id="vercurrpasswd"></span>
                    </div>
                    <div class="form-group">
                        <label for="newpasswd">New Password</label>
                        <input type="password" class="form-control" id="newpasswd" name="newpasswd" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmpasswd">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpasswd" name="confirmpasswd" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="admin_name">Name</label>
                        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Name"><span id="vercurrpasswd"></span>
                    </div>
                    <div class="form-group">
                        <label for="admin_mobile">Mobile</label>
                        <input type="text" class="form-control" id="admin_mobile" name="admin_mobile" placeholder="Mobile">
                    </div>
                    <style>
                        .file-input-wrapper {
                            display: flex;
                            align-items: center;
                        }

                        .file-input-wrapper input[type="file"] {
                            display: none;
                        }

                        .file-input-wrapper .btn {
                            margin-right: 10px;
                        }
                    </style>
                    <div class="form-group">
                        <label for="admin_image">Image</label>
                        <div>
                            <div class="file-input-wrapper">
                                <input type="file" accept="image/*" id="admin_image" name="admin_image" onchange="updateFileName(this)">
                                <button type="button" id="browseBtn" class="btn btn-primary" onclick="browseFiles()">Browse</button>
                                <button type="button" id="removeBtn" class="btn btn-danger" onclick="removeFile()" style="display: none;">Remove</button>
                                <input type="text" id="file_name" class="form-control" readonly placeholder="No file chosen">
                            </div>
                        </div>
                    </div>

                    <script>
                        var fileInput = document.getElementById("admin_image");
                        var browseBtn = document.getElementById("browseBtn");
                        var removeBtn = document.getElementById("removeBtn");

                        function browseFiles() {
                            fileInput.click();
                        }

                        function removeFile() {
                            fileInput.value = "";
                            document.getElementById("file_name").value = "";
                            removeBtn.style.display = "none";
                            browseBtn.style.display = "inline-block";
                        }

                        fileInput.addEventListener("change", function() {
                            var fileName = fileInput.value.split("\\").pop();
                            document.getElementById("file_name").value = fileName;

                            if (fileName) {
                                browseBtn.style.display = "none";
                                removeBtn.style.display = "inline-block";
                            } else {
                                removeBtn.style.display = "none";
                                browseBtn.style.display = "inline-block";
                            }
                        });
                    </script>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Submit</button>
                </div>

                <script>
                    const adminNameInput = document.getElementById('admin_name');
                    const adminMobileInput = document.getElementById('admin_mobile');
                    const adminImageInput = document.getElementById('admin_image');
                    const currentPasswordInput = document.getElementById('currentpasswd');
                    const newPasswordInput = document.getElementById('newpasswd');
                    const confirmPasswordInput = document.getElementById('confirmpasswd');
                    const submitBtn = document.getElementById('submitBtn');

                    adminNameInput.addEventListener('input', enableSubmitButton);
                    adminMobileInput.addEventListener('input', enableSubmitButton);
                    adminImageInput.addEventListener('change', enableSubmitButton);
                    currentPasswordInput.addEventListener('input', enableSubmitButton);
                    newPasswordInput.addEventListener('input', enableSubmitButton);
                    confirmPasswordInput.addEventListener('input', enableSubmitButton);

                    function enableSubmitButton() {
                        const passwordFieldsFilled = currentPasswordInput.value.trim() !== '' 
                            && newPasswordInput.value.trim() !== '' 
                            && confirmPasswordInput.value.trim() !== '';
                        
                        const otherFieldsFilled = adminNameInput.value.trim() !== '' 
                            || adminMobileInput.value.trim() !== '' 
                            || adminImageInput.files.length !== 0;
                        
                        const passwordChangeAttemptWithoutCurrent = currentPasswordInput.value.trim() === ''
                            && (newPasswordInput.value.trim() !== '' || confirmPasswordInput.value.trim() !== '');

                        if ((passwordFieldsFilled || otherFieldsFilled) && !passwordChangeAttemptWithoutCurrent) {
                            submitBtn.disabled = false;
                        } else {
                            submitBtn.disabled = true;
                        }
                    }
                </script>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection