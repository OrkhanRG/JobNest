@extends('layouts.admin')
@section('title', 'İstifadəçilər')

@push('css')
@endpush

@section('content')
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">İstifadəçi Redaktə Et</h4>

        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">İstifadəçilər</li>
            </ol>
        </div>
    </div>

    <form action="{{ route('user.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">İstifadəçi -> <span class="text-danger">{{ $user->name.' '.$user->surname }}</span> -> {{ ucfirst($user->role) }}</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <!-- Sol Taraf -->
                    <div class="col-xxl-3">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto mb-4">
                                        <img src="{{ asset($user->avatar ?? 'assets/custom/images/users/default.png') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                            <input id="profile-img-file-input" name="avatar" type="file" class="profile-img-file-input">
                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                    <i class="ri-camera-fill"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <h5 class="fs-16 mb-1">{{ $user->name.' '.$user->surname }}</h5>
                                    <p class="text-muted mb-0">{{ ucfirst($user->role) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Status & Şifrə</h5>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex">
                                    <div class="avatar-xs d-block flex-shrink-0 me-3">
                                        <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                            <i class="ri-lock-line" title="Şifrə"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="şifrəni dəyiş" value="">
                                </div>
                                <div class="mb-3 d-flex justify-content-between">
                                    <div class="form-check form-switch form-switch-success">
                                        <label class="form-check-label" for="SwitchCheck6">Status</label>
                                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" role="switch" id="SwitchCheck6" {{ $user->is_active ? 'checked' : '' }}>
                                    </div>
                                    <div class="form-check form-switch form-switch-danger">
                                        <label class="form-check-label" for="SwitchCheck6">Blok</label>
                                        <input class="form-check-input" type="checkbox" role="switch" name="is_blocked" id="is_blocked" id="SwitchCheck6" {{ $user->is_blocked ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sağ Taraf -->
                    <div class="col-xxl-9">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Ad</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Ad" value="{{ $user->name }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="surname" class="form-label">Soyad</label>
                                                <input type="text" class="form-control" name="surname" id="surname" placeholder="Soyad" value="{{ $user->surname }}">
                                            </div>
                                        </div>
                                        <div class="{{ isRole('candidate', $user) ? 'col-lg-12' : 'col-lg-6' }}">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">İstifadəçi Adı</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="İstifadəçi Adı" value="{{ $user->username }}">
                                            </div>
                                        </div>
                                        @if(isRole(['developer', 'company'], $user))
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Ünvan</label>
                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Ünvan" value="{{ $user->address }}">
                                                </div>
                                            </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="company" class="form-label">Şirkət</label>
                                                <input type="text" class="form-control" name="company" id="company" placeholder="Şirkət" value="{{ $user->company }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="website" class="form-label">Web Sayt</label>
                                                <input type="text" class="form-control" name="website" id="website" placeholder="Web Sayt" value="{{ $user->website }}">
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Telefon</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefon" value="{{ $user->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $user->email }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Rol</label>
                                                <select class="form-select mb-3" name="role" id="role" aria-label="Default select example">
                                                    @foreach(config('custom.roles') as $role)
                                                        <option value="{{ $role }}" {{ $role === $user->role ? 'selected' : '' }}>{{ ucfirst($role === 'candidate' ? 'İş axtaran' : ($role === 'company' ? "Şirkət" : 'Developer')) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" data-role="btn-update" class="btn btn-soft-danger">Readaktə Et</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script src="{{ asset('assets/admin/js/pages/profile-setting.init.js') }}"></script>
@endpush
