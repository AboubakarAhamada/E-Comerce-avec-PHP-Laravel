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
        <h5>{{number_format($produit->prixTTC())}} €</h5>
        <p class="lead text-muted">{{$produit->description}}</p>
        <hr>
        <form action="{{route('panier_add', ['id'=>$produit->id])}}" id="panier_add" method="POST">
            @csrf
            <label for="size">Choisissez votre taille</label>
            <select name="size" id="size" class="form-control">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
            </select><br>
            <label for="qty">Quantité</label>
            <input type="number" name="quantity" id="qty" min="1" value="1" class="form-control">
        </form>
        <p>
            <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block">
            <i class="fas fa-shopping-cart"></i> Ajouter au Panier  
            </button>   
        </p>

        </div>
    </div>
</div>

@endsection