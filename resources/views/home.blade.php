@extends('master')

@section('title', 'Home')

@section('content')

<div class="container d-flex" style ="display:flex; flex-direction: row;">
    @foreach ($fruits as $f)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $f['name'] }}</h2>
                <p class="card-text">{{ $f['price'] }}</p>
                <p>{{ $f['expiredDate'] }}</p>
                @if ($f['isExported'] == 'yes')
                    <p>This fruit is exported from far far away!</p>
                @else
                    <p>This fruit is local based.</p>
                @endif
            </div>
        </div>
    @endforeach
</div>

@endsection