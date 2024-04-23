@extends('inventaires/layout')
@section('title', 'Show')
@section('titre', 'Show')
@section('content')
<div class='list'>
    <table border='1'>
        <tr>
            <td>
                <b>
                    <a href="{{ route('inventaires.index') }}" id="b">
                        {{ $inventaire['num_article'] }} {{ $inventaire['image'] }} {{ $inventaire['Designation'] }}
                        {{ $inventaire['num_inventaire'] }} {{ $inventaire['État'] }}
                    </a>
                </b>
            </td>
        </tr>
    </table>
</div>
@endsection
