@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b style="font-weight: bold; font-size: 20px;">{{ __('Service Manage') }}</b>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
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
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint quia rem magnam atque cum dolorum in nostrum earum aliquam vero reprehenderit maiores similique magni sit adipisci id quo, ex quis!
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
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint quia rem magnam atque cum dolorum in nostrum earum aliquam vero reprehenderit maiores similique magni sit adipisci id quo, ex quis!
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
@endsection
