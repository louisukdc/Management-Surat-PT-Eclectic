@extends('layouts.tabler')

@section('title', 'Edit Profile')

@section('content')
    <div class="container-xl px-4 mt-4">
        @include('profile.component.menu')
        <hr class="mt-0 mb-4" />

        <div class="col-auto mb-3">
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="user"></i></div>
                Account Settings - Profile
            </h1>
        </div>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card -->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image -->
                            <img class="img-account-profile rounded-circle mb-2"
                                src="{{ $user->photo ? asset('storage/profile//' . $user->photo) : asset('https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80') }}"
                                alt="" id="image-preview" />
                            <!-- Profile picture help block -->
                            <div class="small font-italic text-muted mb-2">JPG or PNG no larger than 1 MB</div>
                            <!-- Profile picture input -->
                            <input class="form-control form-control-solid mb-2 @error('photo') is-invalid @enderror"
                                type="file" id="image" name="photo" accept="image/*" onchange="previewImage();">
                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <!-- Account details card -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Account Details
                        </div>
                        <div class="card-body">
                            <!-- Form Group (username) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="usernamex">Username</label>
                                <input class="form-control form-control-solid @error('usernamex') is-invalid @enderror"
                                    id="usernamex" name="usernamex" type="text" placeholder=""
                                    value="{{ old('usernamex', $user->usernamex) }}" autocomplete="off" />
                                @error('usernamex')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Group (name) -->
                            <div class="mb-3">
                                <label class="small mb-1" for="name">Full name</label>
                                <input class="form-control form-control-solid @error('name') is-invalid @enderror"
                                    id="name" name="name" type="text" placeholder=""
                                    value="{{ old('name', $user->name) }}" autocomplete="off" />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="email">
                                    Email address
                                </label>

                                <input class="form-control form-control-solid @error('photo') is-invalid @enderror"
                                    id="email" name="email" type="text" placeholder=""
                                    value="{{ old('email', $user->email) }}" autocomplete="off" />
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('page-scripts')
    <script src="{{ asset('assets/js/img-preview.js') }}"></script>
@endpush
