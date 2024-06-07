@extends('layouts.app')
@section('content')
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div>


<table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $employees as $key => $employee )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $employee->emp_name }}</td>
                            <td scope="col">{{ $employee->emp_name2 }}</td>
                            <td scope="col">{{ $employee->admin }}<label>YES</label></td>

                            <td scope="col">
                            <a href="{{  route('employee.edit', $employee->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Are you sure you want to delete this record?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </button>
                </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  

            
@endsection