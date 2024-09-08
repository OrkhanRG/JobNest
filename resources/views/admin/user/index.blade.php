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
                                <tr data-id="{{ $user->id }}">
                                    <td><a href="#" class="fw-medium">#{{ ++$loop->index }}</a></td>
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
                                            <span class="badge bg-success" data-role="status">Aktiv</span>
                                        @else
                                            <span class="badge bg-danger" data-role="status">Passiv</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->is_blocked)
                                            <span class="badge bg-danger" data-role="blocked">
                                                <i class="ri-add-line"></i>
                                            </span>
                                        @else
                                            <span class="badge bg-warning" data-role="blocked">
                                                <i class="ri-subtract-line"></i>
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="hstack gap-3 flex-wrap">
                                            <a href="javascript:void(0);" class="link-warning fs-17" title="Edit"><i class="ri-edit-2-line"></i></a>
                                            <a href="javascript:void(0);" class="link-danger fs-17" title="Sil" data-role="delete"><i class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                    @if($users instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        <div class="d-flex justify-content-center mt-5">
                            {{ $users->withQueryString()->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    $(`[data-role="status"]`).on('click', function (){
        let self = $(this);
        let user_id = self.closest('tr').data('id');
        let data = {
            id: user_id,
        };

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Statusu dəyişmək istədiyinizə əminsiz?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Bəli",
            cancelButtonText: "Xeyr",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'POST',
                    url: "{{ route('user.user.change-status') }}",
                    data: data,
                    success: function (d){
                        if (d.code === 200) {
                            let is_active = d.user.is_active;

                            if (is_active) {
                                self.addClass('bg-success')
                                self.removeClass('bg-danger')
                            }
                            else {
                                self.removeClass('bg-success')
                                self.addClass('bg-danger')
                            }

                            self.text(is_active ? 'Aktiv' : 'Passiv');

                            swalWithBootstrapButtons.fire({
                                title: `Təbriklər!`,
                                text: `Status ${is_active ? 'Aktiv' : 'Passiv'} olaraq dəyişdirildi!`,
                                icon: "success"
                            });
                        }
                    },
                    error: function (e){

                    },
                    complete: function (c) {

                    }
                })
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Ləğv edildi",
                    text: "Status dəyişdirilmədi :)",
                    icon: "error"
                });
            }
        });
    });

    $(`[data-role="blocked"]`).on('click', function (){
        let self = $(this);
        let user_id = self.closest('tr').data('id');
        let data = {
            id: user_id,
        };

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Blok statusun dəyişmək istədiyinizə əminsiz?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Bəli",
            cancelButtonText: "Xeyr",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'POST',
                    url: "{{ route('user.user.blocked-status-change') }}",
                    data: data,
                    success: function (d){
                        if (d.code === 200) {
                            let is_blocked = d.user.is_blocked;

                            if (is_blocked) {
                                self.removeClass('bg-warning')
                                self.addClass('bg-danger')
                            }
                            else {
                                self.addClass('bg-warning')
                                self.removeClass('bg-danger')
                            }

                            self.html(is_blocked ? `<i class="ri-add-line"></i>` : `<i class="ri-subtract-line"></i>`);

                            swalWithBootstrapButtons.fire({
                                title: `Təbriklər!`,
                                text: `İstidadəçi ${is_blocked ? 'Bloklandı' : 'Blokdan çıxarıldı'}!`,
                                icon: "success"
                            });
                        }
                    },
                    error: function (e){

                    },
                    complete: function (c) {

                    }
                })
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Ləğv edildi",
                    text: "Blok status dəyişdirilmədi :)",
                    icon: "error"
                });
            }
        });
    });

    $(`[data-role="delete"]`).on('click', function (){
        let self = $(this);
        let user_id = self.closest('tr').data('id');
        let data = {
            id: user_id,
        };

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "İstifadəçini silmək istədiyinizə əminsiz?",
            text: "Bu əməliyyatı geri qaytarmaq mümkün olmayacaq!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Bəli",
            cancelButtonText: "Xeyr",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'POST',
                    url: "{{ route('user.user.delete') }}",
                    data: data,
                    success: function (d){
                        if (d.code === 200) {
                            let status = d.status;

                            if (status) {
                                self.closest('tr').remove();
                            }

                            swalWithBootstrapButtons.fire({
                                title: `Təbriklər!`,
                                text: `İstidadəçi ${status ? 'Silindi' : 'Silinmə zamanı xəta yarandı'}!`,
                                icon: `${status ? 'success' : 'warning'}`
                            });
                        }
                    },
                    error: function (e){

                    },
                    complete: function (c) {

                    }
                })
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Ləğv edildi",
                    text: "Silmə əməliyyatı ləğv olundu :)",
                    icon: "error"
                });
            }
        });
    });
</script>
@endpush
