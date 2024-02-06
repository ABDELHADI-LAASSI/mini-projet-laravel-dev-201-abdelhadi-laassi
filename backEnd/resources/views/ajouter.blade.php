@extends('layout.master')
@section('title')
    Ajouter
@endsection

@auth
@section('main')
<h1>ajouter</h1>

<form action={{route('ajouterProduct')}} enctype="multipart/form-data" method="post">
    @csrf
    @method('post')

    <table>
        {{-- <tr>
            <td><label for="réference">réference</label></td>
            <td><input name="réference" id="réference" type="text"></td>
        </tr> --}}
        <tr>
            <td><label for="libellé">libellé</label></td>
            <td><input name="libellé" id="libellé" type="text"></td>
        </tr>
        <tr>
            <td><label for="prix">prix</label></td>
            <td><input name="prix" id="prix" type="text"></td>
        </tr>
        <tr>
            <td><label for="quantité">quantité</label></td>
            <td><input name="quantité" id="quantité" type="text"></td>
        </tr>
        <tr>
            <td><label for="description">description</label></td>
            <td><input name="description" id="description" type="text"></td>
        </tr>
        <tr>
            <td><label for="type">type</label></td>
            <td><input name="type" id="type" type="text"></td>
        </tr>
        <tr>
            <td><label for="image">image</label></td>
            <td><input name="image" id="image" type="file"></td>
        </tr>
        <tr>
            <td><input type="submit" value="ajouter"></td>
        </tr>
    </table>

</form>
@endsection
@endauth
@guest
    tu ne pas connecté
@endguest
