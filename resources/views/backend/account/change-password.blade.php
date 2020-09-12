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

@section('title', 'Change Password')

@section('content')
    <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">
                            Update Password
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="name">Current Password</label>
                                <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password" required>
                                <small class="text-danger">{{$errors->first('current_password')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="name">New Password</label>
                                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required>
                                <small class="text-danger">{{$errors->first('new_password')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="name">Repeat New Password</label>
                                <input type="password" class="form-control" name="repeat_password" id="repeat_password" placeholder="Repeat New Password" required>
                                <small class="text-danger">{{$errors->first('repeat_password')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix m-t-3">
            <div class="pull-right">
                <a href="{{route('backend.account')}}" class="btn btn-default">Go to profile</a>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Submit
                </button>
            </div>
        </div>
    </form>
@endsection
