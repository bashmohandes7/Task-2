@extends('layouts.app')
@section('css')
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('title', 'Home Page')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('success'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Post Added Successfully",
                    type: "success"
                })
            }
        </script>
    @endif
    @if (session()->has('fail'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Something Went Wrong",
                    type: "error"
                })
            }
        </script>
    @endif
    @if (session()->has('delete_post'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Post Deleted Successfully",
                    type: "success"
                })
            }
        </script>
    @endif

    @if (session()->has('update_post'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Post Updated Successfully",
                    type: "success"
                })
            }
        </script>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href='#' class="btn btn-success mb-2" data-toggle="modal" data-target="#ModalCreate">Create Post</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Posted By</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <th scope="row">{{ $post->title }}</th>
                                <th scope="row">{{ $post->user->name }}</th>
                                <th scope="row">{{ $post->created_at->format('Y-m-d') }}</th>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary"
                                        data-toggle="modal" data-target="#ModalView">View</a>
                                    <a href="#" class="btn btn-secondary" data-toggle="modal"
                                        data-target="#ModalEdit">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal"
                                        data-target="#ModalDelete">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            @include('posts.modals.create')
            @include('posts.modals.show')
            @include('posts.modals.edit')
            @include('posts.modals.destroy')
        </div>
    @endsection
    @section('js')
        <!--Internal  Notify js -->
        <script src="{{ URL::asset('assets/plugins/js/notifIt.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/js/notifit-custom.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.22.0/axios.min.js"></script>
    @endsection
