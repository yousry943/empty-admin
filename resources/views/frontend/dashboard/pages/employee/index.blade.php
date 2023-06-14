@extends('frontend.dashboard.layouts.master')

@section('content')
{{-- @livewire('backend.access-control.admin-user-table') --}}
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="row">
<div class="col">
<div class="card">
    <!-- Card header -->
    <div class="card-header border-0">
    <div class="row">
        <div class="col-6"><h3 class="mb-0">Employees</h3></div>
    <div class="col-6 text-right">
                <a href="{{ route('dashboard.employee.create')}}" class="btn-sm btn-success"><b><i class="fas fa-plus"></i> Add New Employee</b></a>
                </div>
    </div>
    </div>
    <!-- Light table -->
    <div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
        <tr>
            <th scope="col" class="sort" data-sort="name">Name</th>
            <th scope="col" class="sort" data-sort="budget">Email</th>
            <th scope="col" class="sort" data-sort="name">Phone Number</th>
            <th scope="col" class="sort" data-sort="name">Job</th>
            <th scope="col" class="sort" data-sort="name">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="list">
                    <tr>
            <td class="budget">
            user
            </td> 
            <td>user@gmail.com</td>

            <td class="budget">
            +201521540890
            </td>

            <td>
                            accontant
                            </td>
            <td>
                09/08/2000
                </td>

            <td class="table-actions">
                <a href="" class=" table-action-edit btn-sm disable btn-primary mr-3 " data-toggle="tooltip" data-original-title="Edit Role">
                <i class="fas fa-user-edit"></i> Edit
                </a>

                <a href="#!" wire:click.prevent="alertConfirm(1)" class="table-action-delete disable  btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete Role">
                <i class="fas fa-trash"></i> Delete
                </a>
                <a href="#!"  class="btn-sm disable btn-light ml-3" data-toggle="tooltip">
                    <i class=""></i> Action
                </a>

            </td>
                        </tr> 
                    <tr>
            <td class="budget">
            jaime
            </td> 
            <td>jaime077011@gmail.com</td>

            <td class="budget">
            +201201218354
            </td>

            <td>
            Web dev            
                            </td>
                            <td>
                                20/10/2023            
                                                </td>

                            <td class="table-actions">
                                <a href="#" class=" table-action-edit btn-sm btn-primary mr-3 " data-toggle="tooltip" data-original-title="Edit Role">
                <i class="fas fa-user-edit"></i> Edit
                </a>

                                                    <a href="#!" wire:click.prevent="alertConfirm(3)" class="table-action-delete  btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete Role">
                <i class="fas fa-trash"></i> Delete
                </a>
                <a href="#!"  class="dropdown btn-sm btn-light ml-3" data-toggle="dropdown">
                    <i class=""></i> Action

                </a>
                <div class="dropdown-menu  dropdown-menu-right ">
                    <span class="ml-3">Option 1</span>
                    <div class="dropdown-divider"></div>
                    <span class="ml-3">Option 2</span>
                    <div class="dropdown-divider"></div>
                    <span class="ml-3">Option 3</span>
                </div>


                </td>
                        </tr> 
                    </tbody>
    </table>
    </div>
@endsection

