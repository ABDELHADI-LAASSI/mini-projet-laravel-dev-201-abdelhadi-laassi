@extends('layout.master')

@section('main')
    <h1>products</h1>

    <table border="1" width="100%" >
        <tr>
            <th>réference</th>
            <th>libellé</th>
            <th>prix</th>
            <th>quantité</th>
            <th>description</th>
            <th>type</th>
            <th>image</th>
            <th>action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td> {{$product->id}} </td>
                <td> {{$product->libellé}} </td>
                <td> {{$product->prix}} </td>
                <td> {{$product->quantité}} </td>
                <td> {{$product->description}} </td>
                <td> {{$product->type}} </td>
                <td> <img width="100px" src={{ asset('storage/'.$product->image) }} alt=""> </td>
                <td style="display: flex;gap:1rem;">
                    <form method="POST" action={{ route('supprimerProduct',$product->id)  }}  >@csrf @method('DELETE') <input type="submit" value="supprimer"></form>
                    <button><a href={{route('AficherProduct',$product->id)}}>show</a></button>
                </td>
            </tr>
        @endforeach
    </table>
@endsection


