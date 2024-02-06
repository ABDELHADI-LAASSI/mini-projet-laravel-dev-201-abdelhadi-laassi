@extends('layout.master')

@section('main')
    <div class="product" style="display: flex; padding: 3rem">
        <div style="flex-basis: 50%">
            <img width="80%" src={{asset('storage/'.$product->image)}} alt="">
        </div>
        <div>
            <ul style="list-style: none">
                <li>
                    <p >libellé</p>
                    <p>{{$product->libellé}}</p>
                </li>
                <li>
                    <p>prix</p>
                    <p>{{$product->prix}}</p>
                </li>
                <li>
                    <p>quantité</p>
                    <p>{{$product->quantité}}</p>
                </li>
                <li>
                    <p>description</p>
                    <p>{{$product->description}}</p>
                </li>
                <li>
                    <p>type</p>
                    <p>{{$product->type}}</p>
                </li>
            </ul>
        </div>
    </div>
@endsection
