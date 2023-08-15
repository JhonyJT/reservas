@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Usuarios</div>
                        <p class="card-category">Vista detallada del usuario {{ $user->name }}</p>
                    </div>
                  <!--body--> 
                  <div class="card-body">
                    @if (session('success')) 
                    <div class="alert alert-success" role="success">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-body">
                                    <p class="card-text">
                                      <div class="author">
                                        <a href="#">
                                            <img src="{{asset('/img/default-avatar.png')}}" alt="image" class="avatar">
                                            <h5 class="title mt-3">{{$user->name}}</h5>
                                        </a>
                                        <p class="description">
                                            {{$user->username}} <br>
                                            {{$user->email}} <br>
                                            {{$user->created_at}} 
                                        </p>
                                      </div>
                                    </p>
                                    <div class="card-description">
                                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam qui fuga nostrum pariatur, aspernatur laboriosam debitis odio, nisi impedit rerum provident magnam. Qui, molestias labore iure magnam minus veritatis soluta.
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="button-container">
                                        <a href="{{ route('users.index')}}" class="btn btn-success mr-3">Volver</a>
                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Editar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div> <!--end card-body-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection