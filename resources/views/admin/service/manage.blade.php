@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <b style="font-weight: bold; font-size: 20px;">{{ __('Service Manage') }}</b>
                            </div>
                            <div class="col-md-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Service
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th scope="col" width="10%">Service Icon</th>
                                        <th scope="col" width="15%">Service Title</th>
                                        <th>Service Description</th>
                                        <th scope="col" width="10%">Created Date</th>
                                        <th scope="col" width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td><i class="fas fa-laptop-code icon"></i></td>
                                        <td>Webpage Development</td>
                                        <td>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint quia rem magnam
                                            atque cum dolorum in nostrum earum aliquam vero reprehenderit maiores similique
                                            magni sit adipisci id quo, ex quis!
                                        </td>
                                        <td>2070-02-12</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><i class="fas fa-laptop-code icon"></i></td>
                                        <td>Webpage Development</td>
                                        <td>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint quia rem magnam
                                            atque cum dolorum in nostrum earum aliquam vero reprehenderit maiores similique
                                            magni sit adipisci id quo, ex quis!
                                        </td>
                                        <td>2070-02-12</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('postAddService') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="service_icon">Service Icon</label>
                            <input type="text" id="service_icon" class="form-control" name="service_icon" required>
                        </div>
                        <div class="form-group">
                            <label for="service_title">Service Title</label>
                            <input type="text" id="service_title" class="form-control" name="service_title" required>
                        </div>
                        <div class="form-group">
                            <label for="service_description">Service Description</label>
                            <textarea name="service_description" class="form-control" id="service_description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection