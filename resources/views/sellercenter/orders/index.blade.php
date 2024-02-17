@extends('layouts.sellercenter')

@section('title', 'Seller Center | Orders')

@section('content')



    <div class="py-3 py-md-5">
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
    </div>

@endsection
