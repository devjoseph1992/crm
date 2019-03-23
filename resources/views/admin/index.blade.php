@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header">
                Menu
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Manage User</a></li>
                <li class="list-group-item"><a href="#">Placeholder</a></li>
                <li class="list-group-item"><a href="#">Placeholder</a></li>
                <li class="list-group-item"><a href="#">Placeholder</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        {{-- Leader Board and HUD --}}
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Active Employees</div>
                    <div class="card-body">
                        <h4 class="text-center">4</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Current</div>
                    <div class="card-body">
                        <h4 class="text-center">Ikoy Leader</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Sale for Month</div>
                    <div class="card-body">
                        <h4 class="text-center">5</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Total Sales Value</div>
                    <div class="card-body">
                        <h4 class="text-cente">9</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- End fo Leader Board --}}
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Unassigned</div>
                    <ul class="list-group list-group-flush">
                        @for($i = 0; $i <6; $i++)
                            <li class="list-group-item">
                                Mr.Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                            </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View all Unassigned Leads</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Recent Estimate</div>
                    <ul class="list-group list-group-flush">
                        @for($i = 0; $i <6; $i++)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        Mr. Prospect
                                    </div>
                                    <div class="col-sm-4">
                                        June 5th, 2018
                                    </div>
                                    <div class="col-sm-4">
                                        Value: $100
                                        <span class="float-right btn btn-sm btn-success">Details</span>
                                    </div>
                                </div>
                            </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View all Unassigned Leads</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection