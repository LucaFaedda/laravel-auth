
@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row p-5">
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group ">
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error )
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="col-8">

                                        <label class="control-label mb-2 fw-bold ">Titolo</label>
                                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                                    </div>
                                    <div class="col-3">
                                        <label class="control-label mb-2 fw-bold ">Data del progetto</label>
                                        <input type="date" name="data_progetto"class="form-control"  placeholder="Data del progetto"></input>
                                    </div>
                                    <div class="col-1">
                                        <label class="control-label my-2 fw-bold ">Difficoltà</label>
                                        <input type="number" name="difficoltà" class="form-control" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <label class="control-label my-2 fw-bold ">Descrizione progetto</label>
                                <textarea class="form-control" name="descrizione" placeholder="Inserisci la descrizione"></textarea>

                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-3">
                                <button type="submit" class="form-control btn btn-primary">
                                    Salva nuovo Progetto
                                </button>
                            </div>
                        </div>
        
                </form>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

