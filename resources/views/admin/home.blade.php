<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<div class="container-admin">
    <a href="/" class="btn btn-danger">Back Home</a>
    <h1>INFORMATION</h1>
    <form method="GET">
        <input type="text" name="search" placeholder="Search by Groupname" value="{{ $_GET['search'] ?? '' }}">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <div class="information-admin">
        @php
            $groupedData = [];

            foreach ($users as $user) {
                $groupedData[$user->group_name]['users'][] = $user;
            }
        @endphp

        @foreach ($groupedData as $groupName => $groupData)
            @if (empty($_GET['search']) || stripos($groupName, $_GET['search']) !== false || count($groupData['users']) > 0)
                @if (empty($_GET['search']) || stripos($groupName, $_GET['search']) !== false)
                    <div class="title-groupname">
                        <h2>Group {{ $groupName }}</h2>
                    </div>
                @endif
                <div class="card-container">
                    @if (isset($groupData['users']) && count($groupData['users']) > 0)
                        @foreach ($groupData['users'] as $user)
                            @if (empty($_GET['search']) ||
                                    stripos($user->name, $_GET['search']) !== false ||
                                    stripos($user->group_name, $_GET['search']) !== false)
                                <div class="user-card">
                                    <div class="detail-information">
                                        <p><strong>Leadername:</strong> {{ $user->leadername }}</p>
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
                                            <img src="{{ asset('images/' . $user->cv) }}" alt="CV Image"
                                                class="img-fluid">
                                        @else
                                            <p>Unavailable</p>
                                        @endif

                                        @if ($user->binusian === 'BINUSIAN')
                                            <p><strong>Flazz Card:</strong></p>
                                            @if ($user->flazz_card)
                                                <img src="{{ asset('images/' . $user->flazz_card) }}"
                                                    alt="Flazz Card Image" class="img-fluid">
                                            @else
                                                <p>Unavailable</p>
                                            @endif
                                        @elseif ($user->binusian === 'NONBINUSIAN')
                                            <p><strong>ID Card:</strong></p>
                                            @if ($user->id_card)
                                                <img src="{{ asset('images/' . $user->id_card) }}" alt="ID Card Image"
                                                    class="img-fluid">
                                            @else
                                                <p>Unavailable</p>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="edit-delete-links">
                                        <a href="{{ route('user.edit', ['id' => $user->id]) }}">Edit</a>
                                        <form method="POST" action="{{ route('user.delete', ['id' => $user->id]) }}"
                                            class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p>No users found.</p>
                    @endif
                </div>

                {{-- <hr> --}}
            @endif
        @endforeach
    </div>
</div>
