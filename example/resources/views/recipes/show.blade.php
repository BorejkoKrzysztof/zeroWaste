@extends('layouts.app')


@section('content')
<div class="row" style="padding-top:120px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left d-flex justify-content-between align-items-center">
            <h1> {{ $recipe->title }}</h1>
            <div class="iconsContainer">
                <i class="fa-solid fa-star pointer"></i>
                <i class="fa-solid fa-star pointer"></i>
                <i class="fa-solid fa-star pointer"></i>
                <i class="fa-solid fa-star pointer"></i>
                <i class="fa-solid fa-star pointer"></i>
                <i class="fa-solid fa-heart pointer" style="color: red; margin-left:5vw;"></i>
            </div>
        </div>
    </div>
</div>
<dl class="row">
    <dt class="col-sm-3">Nazwa potrawy</dt>
    <dd class="col-sm-9">{{ $recipe->title }}</dd>
    <HR NOSHADE>

    <dt class="col-sm-3">Zdjęcie</dt>
    <dd class="col-sm-9"><img src="{{ asset('uploads/recipes/'.$recipe->photo) }}" width="300px" height="300px" alt=""></dd>
    <HR NOSHADE>

    <dt class="col-sm-3">Składniki</dt>
    <dd class="col-sm-9">{{ $recipe->products }}</dd>
    <HR NOSHADE>

    <dt class="col-sm-3 text-truncate">Maszyny kuchenne</dt>
    <dd class="col-sm-9">{{ $recipe->food_processors }}</dd>
    <HR NOSHADE>

    <dt class="col-sm-3 text-truncate">Czas przygotowania</dt>
    <dd class="col-sm-9">{{ $recipe->time }} min</dd>
    <HR NOSHADE>

    <dt class="col-sm-3 text-truncate">Trudność przygotowania</dt>
    <dd class="col-sm-9">{{ $recipe->level }}/5</dd>
    <HR NOSHADE>

    <dt class="col-sm-3 text-truncate">Opisz przygotowania</dt>
    <dd class="col-sm-9">{{ $recipe->description }}</dd>
</dl>
</dd>
</dl>
<br><br>
<div class="pull-right d-flex justify-content-sm-between">
    <a class="btn btn-primary" href="{{ route('recipes.index') }}" title="Powrót" class="fas fa-backward ">Powrót do poprzedniej strony</a>
    <button class="shareButton">Share <i class="fa-brands fa-facebook-square"></i></button>
</div>
<br></br>
<div class="sekcja-formularz">
    <h1>Dodaj kometarz:</h1>
    <p>Twój adres email nie zostanie opublikowany. Pola, których wypełnienie jest wymagane oznaczone są *</p>
    <form class="d-flex flex-column">
        <div class="d-flex flex-column" style="width: 100%;">
            <label>Komentarz</label>
            <textarea type="textbox" class="duzy-input-komentarz"></textarea>
        </div>
        <div class="d-flex justify-content-sm-around mt-3 flexSwitch" style="width: 80%;">
            <div class="d-flex flex-column">
                <label>Podpis*</label>
                <input></input>
            </div>
            <div class="d-flex flex-column">
                <label>Email*</label>
                <input></input>
            </div>
            <div class="d-flex flex-column">
                <label>Witryna internetowa</label>
                <input></input>
            </div>
        </div>
        <button type="submit" class="mt-3 submitButton">Opublikuj kometarz</button>
    </form>
</div>
@endsection