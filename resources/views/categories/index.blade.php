@extends('layouts.main')

@section('konten')
<div class="pagetitle">
    <h1>Categories</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Categories</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body" style="padding: 1rem">
                    @if (session()->has('alert'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('alert') }} <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="alert alert-success" id="alertStatusPlace" style="display:none;">
                        Category status updated successfully!
                    </div>

                    <a type="button" class="btn btn-success mb-3" href="/categories/create">Add new category</a>

                    <!-- Table with stripped rows -->
                    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">WARNING</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="text-align: center; font-weight:bold">
                                    Are you sure want to DELETE
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">YES</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->user->name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning"
                                            style="margin-right:2px">Edit</a>
                                        <form action="/categories/{{ $category->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this place?')"
                                                style="margin-top: 2px">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
