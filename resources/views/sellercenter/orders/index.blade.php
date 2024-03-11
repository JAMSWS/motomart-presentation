@extends('layouts.sellercenter')

@section('title', 'Seller Center | Orders')

@section('content')



    {{-- <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="mb-4"> Customer Orders</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Tracking No</th>
                                        <th>Username</th>
                                        <th>Payment Mode</th>
                                        <th>Order date</th>
                                        <th>Status Message</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>123456ABC</td>
                                        <td>James Halayahay</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>123456ABC</td>
                                        <td>Karl Razon</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>123456ABC</td>
                                        <td>Elizer Engana</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>123456ABC</td>
                                        <td>Mikaela Yalung</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>123456ABC</td>
                                        <td>Jasper Mella</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>123456ABC</td>
                                        <td>Isaac Manguerra</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>123456ABC</td>
                                        <td>Ghie Ricko Apolinario</td>
                                        <td>Gcash</td>
                                        <td>Feb 12 2024</td>
                                        <td>In progress</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="card-body" style="background-color: lightgray;">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Name:</label>
              </div>
            </div>
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>STATUS:</label>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Address:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Product Name:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Quantity:</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Reference No.:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Mode of Payment:</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Proof of Receipt:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Schedule Pick up:</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <div class="p-0 row">
                      <div class="col-sm-3">
                        <a href="https://via.placeholder.com/1200/000000.png?text=IMAGE" data-toggle="lightbox" data-title="sample IMAGE - black" data-gallery="gallery">
                          <img src="https://via.placeholder.com/300/000000?text=IMAGE" class="img-fluid mb-2" alt="black sample"/>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <button type="submit" class="btn btn-success rounded-pill">Confirm</button>

        </form>
    </div>

    <hr>

    <div class="card-body" style="background-color: lightgray;">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Name:</label>
              </div>
            </div>
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>STATUS:</label>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Address:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Product Name:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Quantity:</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Reference No.:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Mode of Payment:</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Proof of Receipt:</label>
                  </div>
                </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Schedule Pick up:</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <div class="p-0 row">
                      <div class="col-sm-3">
                        <a href="https://via.placeholder.com/1200/000000.png?text=IMAGE" data-toggle="lightbox" data-title="sample IMAGE - black" data-gallery="gallery">
                          <img src="https://via.placeholder.com/300/000000?text=IMAGE" class="img-fluid mb-2" alt="black sample"/>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <button type="submit" class="btn btn-success rounded-pill">Confirm</button>

        </form>
    </div>


@endsection
