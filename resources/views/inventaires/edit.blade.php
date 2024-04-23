@extends('inventaires/layout')
@section('title', 'Edit')
@section('titre', 'Edit')
@section('content')
<center>
<form id="dv" action="{{ route('inventaires.update', $inventaire->num_article) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td><label for="num_article">Numero Article :</label></td>
            <td><input type="text" name="num_article" id="num_article" value="{{ $inventaire->num_article }}"></td>
        </tr>
        <tr><td class="err">@error('num_article') {{ $message }} @enderror</td></tr>
        <tr>
            <td><label for="Designation">Designation :</label></td>
            <td><input type="text" name="Designation" id="Designation" value="{{ $inventaire->Designation }}"></td>
        </tr>
        <tr><td class="err">@error('Designation') {{ $message }} @enderror</td></tr>
        <tr>
            <td><label for="num_inventaire">N° d'Inventaire :</label></td>
            <td><input type="text" name="num_inventaire" value="{{ $inventaire->num_inventaire }}"></td>
        </tr>
        <tr><td class="err">@error('num_inventaire') {{ $message }} @enderror</td></tr>
        <tr>
            <td><label for="État">État :</label></td>
            <td>
                <select name="État" id="État" required>
                    <option value="Bon" @if($inventaire->État == 'Bon') selected @endif>Bon</option>
                    <option value="Passable" @if($inventaire->État == 'Passable') selected @endif>Passable</option>
                    <option value="À retirer" @if($inventaire->État == 'À retirer') selected @endif>À retirer</option>
                </select>
            </td>
        </tr>
        <tr><td class="err">@error('État') {{ $message }} @enderror</td></tr>
    </table>
    <button type="submit" id="bu">Modifier</button>
</form>
</center>
@endsection
