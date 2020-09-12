@extends('adminlte::page')

@section('title', 'Profil admin')

@section('plugins.Datatables', true)

@section('adminlte_css')
    <style>
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: black !important;
            opacity: 1 !important; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: black !important;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: black !important;
        }
    </style>
@endsection

@section('content_header')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @else
        @if($statusUpdate=="success")
            <div class="alert alert-success" role="alert">
                informasi berhasil diubah.
            </div>
        @endif
        @if($statusUpdate=="fail")
            <div class="alert alert-danger" role="alert">
                informasi gagal diubah.
            </div>
        @endif
    @endif

    <h1>Profil admin</h1>
    <!-- Button trigger modal -->

    <hr/>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-5">
                <form action="{{route('credential.update',['credential'=>\Auth::user()->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="brand">Nama admin</label>
                        <input type="text" class="form-control" name="name" placeholder="{{\Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="email"
                               placeholder="{{\Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Password baru
                            <button type="button" class="rounded-pill" id="showNewPass">show</button>
                        </label>
                        <input type="password" class="form-control" name="newPassword" id="newPassword"
                               aria-describedby="newPassword" placeholder="Masukan password baru">
                        <small class="form-text text-muted">Minimal 8 karakter</small>
                    </div>
                    <div class="form-group">
                        <hr>
                        <label for="currentPassword">Masukan password admin saat ini
                            <button type="button" class="rounded-pill" id="showOldPass">show</button>
                        </label>
                        <input type="password" class="form-control" name="currentPassword" id="currentPassword"
                               aria-describedby="currentPassword" placeholder="Masukan password saat ini"/>
                        <small class="form-text text-muted">Masukan password saat ini untuk otorisasi.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        var newPassProtected = true;
        var oldPassProtected = true;

        $(document).ready(function () {
            $('#showNewPass').on('click', function () {
                if (newPassProtected) {
                    $(this).text("hide");
                    $('#newPassword').attr('type', 'text');
                } else {
                    $(this).text("show");
                    $('#newPassword').attr('type', 'password');
                }
                newPassProtected = !newPassProtected;
            });

            $('#showOldPass').on('click', function () {
                if (oldPassProtected) {
                    $(this).text("hide");
                    console.log(this);
                    $('#currentPassword').attr('type', 'text');
                } else {
                    $(this).text("show");
                    $('#currentPassword').attr('type', 'password');
                }
                oldPassProtected = !oldPassProtected;
            });

        });
    </script>
@stop
