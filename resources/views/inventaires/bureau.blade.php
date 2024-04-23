@extends('inventaires/layout')
@section('title', 'Accueil')
@section('titre', 'Accueil')
@section('content')
<div class='list'>
@if(!empty($inventaires) && count($inventaires) > 0)
    <table border='1'>
        <tr>
            <th>N° Article</th>
           
            <th>Désignation</th>
            <th>N° d'Inventaire</th>
            <th>État</th>
            <th>Action</th> 
        </tr>
        @foreach($inventaires as $inventaire)
        <tr>
            <td>{{ $inventaire->num_article }}</td> 
            <td>{{ $inventaire->Designation }}</td>
            <td>{{ $inventaire->num_inventaire }}</td>
            <td>{{ $inventaire->État }}</td>
            <td>
                <div class="button-container">
                    <a href="{{ route('inventaires.edit', ['inventaire' => $inventaire->num_article]) }}">
                        <button type="submit" class="ed2 ">Edit</button>
                    </a>
                    <form action="{{ route('inventaires.destroy', ['inventaire' => $inventaire->num_article]) }}" method="post" class="delete-form">
                        @csrf
                        @method("delete")
                        <button type="submit" class="ed2">Delete</button>
                    </form>
                   
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p id="p">Ajouter un inventaire</p> 
    @endif
</div>
@endsection
