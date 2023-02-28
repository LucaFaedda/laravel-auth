@extends('layouts.admin')
@section('content')
<div class="container ">
    <div class="row mt-5">
        <div class="col-12 ">
          @if(session('message'))
        <div class="alert alert-success">
          @endif{{session('message')}}
        </div>
            <h2 class="text-center text-danger">Lista progetti</h2>
            <table class="table  table-striped">
                <thead>
                  <tr>
                    <th >Id</th>
                    <th >Titolo</th>
                    <th >Data del progetto</th>
                    <th >Difficoltà</th>
                    <th >Descrizione</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->data_progetto}}</td>
                        <td>{{$item->difficoltà}}</td>
                        <td>{{$item->descrizione}}</td>
                    </tr>
                    @endforeach
                 
                </tbody>
              </table>
              <a class="btn btn-success mt-3" href="{{route('admin.projects.create')}}">Aggiungi Elemento</a>
        </div>
    </div>
</div>
@endsection