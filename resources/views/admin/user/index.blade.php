@extends('layouts.admin')
@section('title', 'İstifadəçilər')

@push('css')
@endpush

@section('content')
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">İstifadəçilər</h4>

        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">İstifadəçilər</li>
            </ol>
        </div>

    </div>

    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">İstifadəçilər</h4>
        </div>

        <div class="card-body">
            <div class="live-preview">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Ad Soyad</th>
                            <th scope="col">İstifadəçi Adı</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Status</th>
                            <th scope="col">Blok</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($users) && $users)
                            @foreach($users as $user)
                                <tr>
                                    <td><a href="#" class="fw-medium">#1</a></td>
                                    <td>
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset( $user->avatar ?? "assets/custom/images/users/default.png") }}" alt="" class="avatar-xs rounded-circle" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user->name }} {{ $user->surname }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ ucfirst($user->role) }}</td>
                                    <td>
                                        @if($user->is_active)
                                            <span class="badge bg-success">Aktiv</span>
                                        @else
                                            <span class="badge bg-danger">Passiv</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->is_blocked)
                                            <span class="badge bg-danger">
                                                <i class="ri-add-large-line"></i>
                                            </span>
                                        @else
                                            <span class="badge bg-warning">
                                                <i class="ri-subtract-line"></i>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="hstack gap-3 flex-wrap">
                                            <a href="javascript:void(0);" class="link-warning fs-17" title="Edit"><i class="ri-edit-2-line"></i></a>
                                            <a href="javascript:void(0);" class="link-danger fs-17" title="Sil"><i class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
