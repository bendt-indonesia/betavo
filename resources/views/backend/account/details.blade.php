<?php
/*
 *
  ____                 _ _     _____           _                       _
 |  _ \               | | |   |_   _|         | |                     (_)
 | |_) | ___ _ __   __| | |_    | |  _ __   __| | ___  _ __   ___  ___ _  __ _
 |  _ < / _ \ '_ \ / _` | __|   | | | '_ \ / _` |/ _ \| '_ \ / _ \/ __| |/ _` |
 | |_) |  __/ | | | (_| | |_   _| |_| | | | (_| | (_) | | | |  __/\__ \ | (_| |
 |____/ \___|_| |_|\__,_|\__| |_____|_| |_|\__,_|\___/|_| |_|\___||___/_|\__,_|

 Please don't modify this file because it may be overwritten when re-generated.
 */
?>
@extends('layouts.backend')

@section('meta_title', 'My Account')

@section('content')
    <form method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">
                            Account Information
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="{{old('email',$model->email)}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name',$model->name)}}" required>
                                <small class="text-danger">{{$errors->first('name')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix m-t-3">
            <div class="pull-left">
                <a href="{{route('backend.account.change-password')}}" class="btn btn-primary">Change Password</a>
            </div>
            <div class="pull-right">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection
