<?php
use App\Models\Bateau;
?>

@foreach ($bateaux as $bateau )
    <p>{{$bateau->id}}</p>
@endforeach