@extends('layouts.admin')
@section('content')
<div class="container ">
    <div class="row mt-5">
        <div class="col-12 ">
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
        </div>
    </div>
</div>
@endsection