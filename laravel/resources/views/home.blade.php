@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="feed">
                    <form action="{{ route('seeker.createPost') }}" method="POST">
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @csrf
                        <div class="share border bg-white">
                            <div class="d-flex flex-row inputs p-2 py-4"><img class="rounded-circle"
                                    src="https://i.imgur.com/44HzzUN.jpg" width="40">
                                <input type="text" name="description" class="border-0 form-control share-input"
                                    placeholder="Share your thoughts">
                                <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                </div>
                                <div class="d-flex flex-row inputs p-2 py-4">
                                    <input type="text" name="tag" class="border-0 text-white bg-dark form-control share-input"
                                        placeholder="#tag">
                                    <span class="text-danger">@error('tag'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between border-top">
                                        <div class="d-flex flex-row publish-options">
                                            <div class="d-flex-column align-items-center border-right p-2 share position-relative">
                                                <div style="position: absolute;top: 35%;
                                                                                                left: 35%;">
                                                    <i class="fa fa-camera text-black-50"></i><span class="ml-1">Photo</span>
                                                </div>
                                                <input name="image" class="border-0 form-control cursor-pointer" type="file"
                                                    style="opacity: 0;">
                                            </div>
                                            <div class="align-items-center border-right p-2 share position-relative">
                                                <div style="position: absolute;top: 35%;
                                                                                                left: 35%;">
                                                    <i class="fa fa-file text-black-50"></i><span class="ml-1">Files</span>
                                                </div>
                                                <input name="file" class="border-0 form-control cursor-pointer" type="file"
                                                    style="opacity: 0;">
                                            </div>
                                        </div>
                                        <div class="publish-button">
                                            <div class="align-items-center border-left p-2 px-5 btn publish">
                                                <button name="submit" class="btn btn-info">Publish</button>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </form>

                         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
