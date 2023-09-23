@extends('adminlte::page')

@section('title','Editar Usuário')
@section('content_header')
    <h1>
        Editar Usuário
    </h1>
@endsection

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4> Ocorreu um erro </h4>
            @foreach ($errors->all() as $error )
               <li>{{$error}}</li> 
            @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('users.update',['user'=>$user->id])}}" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-2 control-label"> Nome Completo </label>
                        <div class="col-sm-10">
                            <input type="text" name="name"class="form-control @error('name') is-invalid @enderror"  value={{$user->name}} >
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"> Email  </label>
                        <div class="col-sm-10">
                           <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"  value={{$user->email}} >
                        </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-2 control-label"> Nova Senha </label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    </div>
                </div>  
                <div class="form-group row">
                    <label class="col-sm-2 control-label"> Confirmação da Senha </label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                    </div>
                </div>  
                <div class="form-group row">
                    <label class="col-sm-2 control-label"> </label>
                        <div class="col-sm-10">
                            <input type="submit" value="Salvar" class="btn btn-success">
                        </div>
                </div>      
            </form>
        </div>
    </div>
        

@endsection