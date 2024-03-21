@extends('layouts.admin')

@section ('content')


<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>

                    @endforeach

                </ul>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Edit Users
                    <a href="{{ url('admin/users/')}}" class="btn btn-danger text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/users/' . $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Address</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Select Role</label>
                            <select name="role_as"  class="form-control">
                                <option value="">Select Role</option>
                                <option value="0" {{ $user->role_as == '0' ? 'selected' : ''}}>User</option>
                                <option value="1" {{ $user->role_as == '1' ? 'selected' : ''}}>Admin</option>
                            </select>
                            <br/>
                            <select name="seller"  class="form-control">
                                <option value="">Select Role</option>
                                <option value="0" {{ $user->seller == '0' ? 'selected' : ''}}>Not Seller</option>
                                <option value="1" {{ $user->seller == '0' ? 'selected' : ''}}>Seller</option>
                            </select>



                            {{-- <select type="seller"  class="form-control">
                                <option value="">Select Role</option>
                                <option value="0">User</option>
                                <option value="1">Seller</option>

                            </select> --}}
                            <div class="col-md-12 text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
