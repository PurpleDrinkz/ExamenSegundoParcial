@extends('layouts.default')
@section('titulo_pagina','Palíndromos | Dashboard')
@section('titulo','Palíndromos')
@section('subtitulo','Palíndromos')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Palíndromos</h3>
            </div>
            <div class="box-body">
                <form class="form">                       
                        <div class="form-group">
                        <input class="form-control" type="text" 
                        name="palindromo" placeholder="Inserte un palíndromo"
                         required>
                        </div>

                        <div class="form-group">
                        <button type="submit" 
                        class="btn btn-lg btn-info">Enviar</button>
                        </div>

                    @if(Session::has('exito'))
                    <div class="alert alert-success alert-dismissible" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> ¡Es palíndromo!</h4>
                        {{ Session::get('exito') }}
                    </div>
                    @endif

                    
                    <div class="alert alert-danger alert-dismissible" style="margin-top:20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> ¡No es palíndromo!</h4>
                        {{ Session::get('error') }}
                    </div>
                   
                        
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection