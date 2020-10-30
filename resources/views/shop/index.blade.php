@extends('main_template')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach ($produits as $produit)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
          <img src="{{'produits/'.$produit->photo_principale}}" class="card-img-top img-fluid" alt="Responsive image">
              <div class="card-body">
                  <p class="card-text">{{$produit->nom}} <br>{{$produit->description}} </p>
                  <div class="d-flex justify-content-between align-items-center">
                      <span class="price">{{$produit->prixTTC()}} €</span>
                  <a href="{{'/produit/'.$produit->id}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                  </div>
              </div>
          </div>
      </div>
        @endforeach
  </div>

  @endsection
