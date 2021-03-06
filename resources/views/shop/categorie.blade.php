@extends('shop.produit_template')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        @if ($category->parent_id !=null)
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{'/categorie/'.$category->id}}"> {{$category->parent->nom}}</a>
            </li>
        @endif
        <li class="breadcrumb-item active" aria-current="page">{{$category->nom}}</li>
        @foreach ($category->childrens as $children)
            <li class="breadcrumb-item"><a href="{{'/categorie/'.$children->id}}">{{$children->nom}}</a></li>
        @endforeach
        </ol>
    </nav>
    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach ($produits as $produit)
                <div class="col-md-3">
                    <div class="card mb-4 box-shadow">
                        <img src="{{asset('produits/'.$produit->photo_principale)}}" class="card-img-top img-fluid" alt="Responsive image">
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
        </div>
    </div>

@endsection