@extends('layouts.app')

@section('content')
    <div class="bg-dark">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-12 my-5">
                    <h3 class="mb-5">Compila la form per aggiungere un fumetto!</h3>
                    <form action="{{ route('comics.store') }}" method="POST" class="d-flex flex-wrap">
                        @csrf
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Titolo</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="titolo">
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Tipologia</label>
                            <input type="text" name="type" id="" class="form-control"
                                placeholder="tipologia">
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Immagine</label>
                            <input type="text" name="thumb" id="" class="form-control" placeholder="Immagine">
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Serie</label>
                            <input type="text" name="series" id="" class="form-control" placeholder="serie">
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Artisti</label>
                            <textarea type="text" name="artists" id="" class="form-control" placeholder="Artisti"></textarea>
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Scrittori</label>
                            <textarea type="text" name="writers" id="" class="form-control" placeholder="Scrittori"></textarea>
                        </div>
                        <div class="col-12 p-2">
                            <label for="" class="control-label mb-2">Descrizione</label>
                            <textarea type="text" name="description" id="" class="form-control" placeholder="descrizione"></textarea>
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Prezzo</label>
                            <input type="text" name="price" id="" class="form-control" placeholder="prezzo">
                        </div>
                        <div class="col-6 p-2">
                            <label for="" class="control-label mb-2">Data d'uscita</label>
                            <input type="text" name="sale_date" id="" class="form-control"
                                placeholder="data d'uscita">
                        </div>
                        <button type="submit" class="btn btn-primary m-2 mt-5">Aggiungi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
