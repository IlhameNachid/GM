@extends('inventaires/layout')
@section('title', 'Add')
@section('titre', 'Add')
@section('content')
<center>
<form id="dv" action="{{ route('inventaires.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td><label for="num_article">Numero Article :</label></td>
            <td><input type="text" name="num_article" id="num_article"></td>
        </tr>
        <tr><td class="err">@error('num_article') {{ $message }} @enderror</td></tr>
        <tr>
            <td><label for="Designation">Designation :</label></td>
            <td><input type="text" name="Designation" id="Designation"></td>
        </tr>
        <tr><td class="err">@error('Designation') {{ $message }} @enderror</td></tr>
        <tr>
            <td><label for="num_inventaire">N° d'Inventaire :</label></td>
            <td><input type="text" name="num_inventaire" id="num_inventaire"></td>
        </tr>
        <tr><td class="err">@error('num_inventaire') {{ $message }} @enderror</td></tr>
        <tr>
            <td><label for="État">État :</label></td>
            <td>
                <select name="État" id="État" required>
                    <option value="Bon">Bon</option>
                    <option value="Passable">Passable</option>
                    <option value="À retirer">À retirer</option>
                </select>
            </td>
        </tr>
        <tr><td class="err">@error('État') {{ $message }} @enderror</td></tr>
    </table>
    <button type="submit" id="bu">Ajouter</button>
</form>
</center>
@endsection
