@extends('app')
@section('title', 'Dashboard')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <div class="container">
        <div class="information">
            @auth
                @isset($users)
                    @foreach ($users as $user)
                        <div class="user-card">
                            <div class="detail-information">
                                <p><strong>Leader Name:</strong> {{ $user->leadername }}</p>
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                                <p><strong>WhatsApp:</strong> {{ $user->whatsapp }}</p>
                                <p><strong>Line ID:</strong> {{ $user->line }}</p>
                                <p><strong>Github ID:</strong> {{ $user->github }}</p>
                                <p><strong>Birth Date:</strong> {{ $user->birth_date }}</p>
                                <p><strong>Birth Place:</strong> {{ $user->birth_place }}</p>
                            </div>
                            <div class="images-right">
                                <p><strong>CV:</strong></p>
                                @if ($user->cv)
                                    <img src="{{ asset('images/' . $user->cv) }}" alt="CV Image" class="img-fluid">
                                @else
                                    <p>Unavailable</p>
                                @endif
                            
                                @if ($user->binusian === 'BINUSIAN')
                                    <p><strong>Flazz Card:</strong></p>
                                    @if ($user->flazz_card)
                                        <img src="{{ asset('images/' . $user->flazz_card) }}" alt="Flazz Card Image" class="img-fluid">
                                    @else
                                        <p>Unavailable</p>
                                    @endif
                                @elseif ($user->binusian === 'NONBINUSIAN')
                                    <p><strong>ID Card:</strong></p>
                                    @if ($user->id_card)
                                        <img src="{{ asset('images/' . $user->id_card) }}" alt="ID Card Image" class="img-fluid">
                                    @else
                                        <p>Unavailable</p>
                                    @endif
                                @endif
                            </div>
                            

                        </div>
                    @endforeach
                @else
                    <div>
                        <p>No user information available.</p>
                    </div>
                @endisset
            @else
                <div>
                    <p>Please login first to see your information</p>
                </div>
            @endauth
        </div>

    </div>
@endsection
