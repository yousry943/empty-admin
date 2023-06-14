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
        <div class="col-6"><h3 class="mb-0">Admin Users</h3></div>
    <div class="col-6 text-right">
                <a href="{{ route('dashboard.admin.create')}}" class="btn-sm btn-success"><b><i class="fas fa-plus"></i> Add New Admin</b></a>
                </div>
    </div>
    </div>
    <!-- Light table -->
    <div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
        <tr>
            <th scope="col" class="sort" data-sort="name">No.</th>
            <th scope="col" class="sort" data-sort="budget">Avatar</th>
            <th scope="col" class="sort" data-sort="name">Name</th>
            <th scope="col" class="sort" data-sort="name">Role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="list">
                    <tr>
            <td class="budget">
            1
            </td> 
            <td><img width="70px" class="img-fluid rounded" src="https://media.tenor.com/images/4fd49de4149a6d348e04f2465a3970af/tenor.gif" alt=""></td>

            <td class="budget">
            Super Admin
            </td>

            <td>
                            
                            </td>

                            <td class="table-actions">
                <a href="http://127.0.0.1:8000/admin/admin-user/1/edit" class=" table-action-edit btn-sm disable btn-primary mr-3 " data-toggle="tooltip" data-original-title="Edit Role">
                <i class="fas fa-user-edit"></i> Edit
                </a>
                <a href="#!" wire:click.prevent="alertConfirm(1)" class="table-action-delete disable  btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete Role">
                <i class="fas fa-trash"></i> Delete
                </a>
            </td>
                        </tr> 
                    <tr>
            <td class="budget">
            2
            </td> 
            <td><img width="70px" class="img-fluid rounded" src="https://media.tenor.com/images/4fd49de4149a6d348e04f2465a3970af/tenor.gif" alt=""></td>

            <td class="budget">
            jaime
            </td>

            <td>
                                            
                            </td>

                            <td class="table-actions">
                                <a href="http://127.0.0.1:8000/admin/admin-user/3/edit" class=" table-action-edit btn-sm btn-primary mr-3 " data-toggle="tooltip" data-original-title="Edit Role">
                <i class="fas fa-user-edit"></i> Edit
                </a>
                                                    <a href="#!" wire:click.prevent="alertConfirm(3)" class="table-action-delete  btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete Role">
                <i class="fas fa-trash"></i> Delete
                </a>
                            </td>
                        </tr> 
                    </tbody>
    </table>
    </div>
@endsection

