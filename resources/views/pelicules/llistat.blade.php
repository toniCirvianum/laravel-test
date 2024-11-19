@include('includes.header')


<h1>{{$titol }}</h1>

<h2><?=$pelis[2] ?></h2>

<!-- Això és un comentari html -->

{{-- Això es un comentari --}}

<p>Directori existeix?</p>
{{isset($director) or 'No hi ha director' }}

<!-- Condicionals -->

@if ($titol && count($pelis) > 0)
    <h1>El titol existeix i es: {{$titol}} i hi ha pelis</h1> 
@else
    <h1>El titol no existeix i no hi ha pelis</h1>
@endif

<!-- BUCLES -->

@foreach ($pelis as $peli)
    <p>{{$peli}}</p>
@endforeach

@include('includes.footer')