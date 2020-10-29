@extends('shop.produit_template')

@section('content')

<div class="container">


    <div class="row justify-content-between">

        <div class="col-6">
            <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{asset('produits/'.$produit->photo_principale)}}" alt="Card image cap">

            </div>
        </div>
        
        <div class="col-6">

        <h1 class="jumbotron-heading">{{$produit->nom}}</h1>
        <h5>{{number_format($produit->prix_ht,2)}}</h5>
        <p class="lead text-muted">{{$produit->description}}</p>
            <hr>
            <label for="size">Choisissez votre taille</label>
            <select name="size" id="size" class="form-control">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
            </select>
            <p>
                <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
            </p>

        </div>
    </div>
</div>

@endsection