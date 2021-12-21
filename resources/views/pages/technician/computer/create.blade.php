<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->

@extends('layouts.app')

@section('title', 'IKET - Buat Data Komputer')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Buat Data Komputer</h4>
                        <p class="card-category">Silakan isi form di bawah ini.</p>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="{{ route('computer.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="ip" class="form-control-label">IP Komputer</label>
                                <input type="text" class="form-control @error('ip') is-invalid @enderror" name="ip"
                                    id="ip" placeholder="XXX.XXX.XXX.XXX" value="{{ old('ip') }}" autofocus>
                                @error('ip')
                                @include('includes.error-field')
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="comp_name" class="form-control-label">Nama Komputer</label>
                                <input type="text" class="form-control @error('comp_name') is-invalid @enderror"
                                    name="comp_name" id="comp_name" placeholder="Nama Komputer"
                                    value="{{ old('comp_name') }}" autofocus>
                                @error('comp_name')
                                @include('includes.error-field')
                                @enderror
                            </div>

                            @include('includes.save-cancel-btn')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
