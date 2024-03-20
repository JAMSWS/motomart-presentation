@extends('layouts.sellercenter')

@section('title', 'Orders | Motomart')

@section('content')

<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="mb-4"> My Orders</h4>

                    <hr>

                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Filter by Date</label>
                                <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}" class="form-control"/>
                            </div>
                            <div class="col-md-3">
                                <label>Filter by Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Select Status</option>
                                    <option value="in progress" {{ Request::get('status') == 'in progress' ? 'selected':''}}>In progress</option>
                                    <option value="completed" {{ Request::get('status') == 'completed' ? 'selected':''}}>Comleted</option>
                                    <option value="pending" {{ Request::get('status') == 'pending' ? 'selected':''}}>Pending</option>
                                    <option value="cancelled" {{ Request::get('status') == 'cancelled' ? 'selected':''}}>Cancelled</option>
                                    <option value="out-for-delivery" {{ Request::get('status') == 'out-for-delivery' ? 'selected':''}}>Out for Delivery</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br/>
                                <button type="submit" class="btn btn-primary text-white">Filter</button>
                            </div>
                        </div>

                        <hr>

                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Tracking No.</th>
                                    <th>Username</th>
                                    <th>Payment Mode</th>
                                    <th>Ordered date</th>
                                    <th>Status Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $items)
                                <tr>
                                    <td>{{ $items->id }}</td>
                                    <td>{{ $items->tracking_no }}</td>
                                    <td>{{ $items->fullname }}</td>
                                    <td>{{ $items->payment_mode }}</td>
                                    <td>{{ $items->created_at->format('d-m-y') }}</td>
                                    <td>{{ $items->status_message }}</td>
                                    <td><a href="{{ url('sellercenter/orders/'.$items->id) }}" class="btn btn-primary btn-small text-white"> View</a></td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Orders Available</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
