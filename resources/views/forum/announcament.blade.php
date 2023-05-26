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
                Announcaments
              </h4>
              <table
                class="table table-striped table-responsivelg table-bordered"
              >
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Announcaments</th>
                    <th scope="col ">Date</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <h3 class="h6">
                        
                        <a href="#" class=""
                          >Lorem ipsum, dolor sit amet consectetur
                          adipisicing.</a
                        >
                      </h3>
                      <div class="small">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga expedita velit porro laborum nesciunt.</p>
                      </div>
                    </td>
                    
                    
                    <td>
                      <div><a href="#">Author name</a></div>
                      <div>06/07/ 2021 20:04</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h6">
                        
                        <a href="#" class=""
                          >Lorem ipsum, dolor sit amet consectetur
                          adipisicing.</a
                        >
                      </h3>
                      <div class="small">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga expedita velit porro laborum nesciunt.</p>
                      </div>
                    </td>
                    
                    
                    <td>
                      <div><a href="#">Author name</a></div>
                      <div>06/07/ 2021 20:04</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h6">
                        
                        <a href="#" class=""
                          >Lorem ipsum, dolor sit amet consectetur
                          adipisicing.</a
                        >
                      </h3>
                      <div class="small">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga expedita velit porro laborum nesciunt.</p>
                      </div>
                    </td>
                    
                    
                    <td>
                      <div><a href="#">Author name</a></div>
                      <div>06/07/ 2021 20:04</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h6">
                        <a href="#" class=""
                          >Lorem ipsum dolor sit amet consectetur adipisicing
                          elit.</a
                        >
                      </h3>
                    </td>
                    
                    
                    <td>
                      <div><a href="#">Author name</a></div>
                      <div>06/07/ 2021 20:04</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h6">
                        <a href="#" class=""
                          >Lorem ipsum dolor sit amet consectetur adipisicing
                          elit.</a
                        >
                      </h3>
                    </td>
                    
                    
                    <td>
                      <div><a href="#">Author name</a></div>
                      <div>06/07/ 2021 20:04</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h3 class="h6">
                        <a href="#" class=""
                          >Lorem ipsum dolor sit amet consectetur adipisicing
                          elit.</a
                        >
                      </h3>
                    </td>
                    
                    
                    <td>
                      <div><a href="#">Author name</a></div>
                      <div>06/07/ 2021 20:04</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3 clearfix">
        <nav aria-label="Navigate post pages" class="float-lg-right">
          <ul class="pagination pagination-sm mb-lg-0">
            <li class="page-item active">
              <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item">
              <a href="#" class="page-link">&hellip;</a>
            </li>
            <li class="page-item"><a href="#" class="page-link">9</a></li>
            <li class="page-item"><a href="#" class="page-link">10</a></li>
          </ul>
        </nav>
        <form action="" class="form-inline float-lg-left d-block d-sm-flex">
          
          <div class="form-group mr-2">
            <label class="sr-only" for="select-time"> Time Period</label>
            <select
              name="select-time"
              id=""
              class="form-control form-control-sm"
            >
              <option value="all">All posts</option>
              <option value="day">1 day</option>
              <option value="week">1 week</option>
              <option value="month">1 month</option>
              <option value="year">1 year</option>
            </select>
          </div>

          <div class="mb-2 mb-sm-0 mr-2">Sort by:</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="post-sort">Sort posts by:</label>
            <select
              name="select-time"
              id=""
              class="form-control form-control-sm"
            >
              <option value="author">Author</option>
              <option value="post-time">Post time</option>
              <option value="replies">Replies</option>
              <option value="subject">Subject</option>
              <option value="views">Views</option>
            </select>
          </div>

          <div class="mb-2 mb-sm-0 mr-2">Sort direction:</div>
          <div class="form-group mr-2">
            <label class="sr-only" for="post-direct">Sort direct:</label>
            <select
              name="select-time"
              id=""
              class="form-control form-control-sm"
            >
              <option value="desending">Desending</option>
              <option value="ascending">Ascending</option>
            </select>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Sort</button>
        </form>
      </div>
      
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection