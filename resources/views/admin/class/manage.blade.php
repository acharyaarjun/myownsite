@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <b style="font-weight: bold; font-size: 20px;">{{ __('Our Class Manage') }}</b>
                            </div>
                            <div class="col-md-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add Class
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
                                        <th scope="col" width="10%">Class Title</th>
                                        <th scope="col" width="15%">Durations</th>
                                        <th>Cost</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th scope="col" width="10%">Created Date</th>
                                        <th scope="col" width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Webpage Development</td>
                                        <td>3 Months</td>
                                        <td>Rs. 10000</td>
                                        <td>Null</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Class Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('postAddClass') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="class_title">Class Title</label>
                            <input type="text" id="class_title" name="class_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="class_image">Class Image</label>
                            <input type="file" id="class_image" name="class_image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="class_duration">Class Duration</label>
                            <input type="text" id="class_duration" name="class_duration" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="class_teacher">Class Teacher</label>
                            <input type="text" id="class_teacher" name="class_teacher" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="class_cost">Class Cost</label>
                            <input type="number" id="class_cost" name="class_cost" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="about_description">Description</label>
                            <textarea name="about_description" id="about_description" cols="30" rows="10" class="form-control" required></textarea>
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
