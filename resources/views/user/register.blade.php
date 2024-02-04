<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        /* Your existing CSS styles go here */

        /* Additional styles for the multi-step form */
        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">

        <form class="login-card" method="POST" action="{{ route('register.action') }}" enctype="multipart/form-data"
            id="registrationForm">
            @csrf
            <h2 class="title">Register Now!</h2>
            {{-- @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <div class="form-section active" id="groupInfo">
                <h3>Group Information</h3>
                <label for="group_name">Group Name</label>
                <input name="group_name" type="text" id="group_name" placeholder="Enter your group name"
                    value="{{ old('group_name') }}">
                @error('group_name')
                    <p class="error-message">Group name must be filled.</p>
                @enderror

                <button type="button" onclick="nextForm('leaderInfo')">Next</button>
            </div>
            <div class="form-section" id="leaderInfo">
                <h3>Detail Information</h3>
                <label for="leadername">Leader Name</label>
                <input name="leadername" type="text" id="leadername" placeholder="Enter your full Leader Name"
                    value="{{ old('leadername') }}">
                @error('leadername')
                    <p class="error-message">leadername must be filled.</p>
                @enderror

                {{-- <label for="name">Full Name</label>
                <input name="name" type="text" id="name" placeholder="Enter your full name"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="error-message">Name must be filled.</p>
                @enderror --}}

                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter your email"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="error-message">Email must be filled and unique.</p>
                @enderror

                <label for="whatsapp">Whatsapp Number</label>
                <input name="whatsapp" type="text" id="whatsapp" placeholder="Enter your Whatsapp number"
                    value="{{ old('whatsapp') }}">
                @error('whatsapp')
                    <p class="error-message">Whatsapp number must be unique and have a minimum of 9 characters.</p>
                @enderror

                <label for="line">LINE ID</label>
                <input name="line" type="text" id="line" placeholder="Enter your LINE ID"
                    value="{{ old('line') }}">
                @error('line')
                    <p class="error-message">LINE ID is required and must be unique.</p>
                @enderror

                <label for="github">Github ID</label>
                <input name="github" type="text" id="github" placeholder="Enter your Github ID"
                    value="{{ old('github') }}">
                @error('github')
                    <p class="error-message">Github ID is required.</p>
                @enderror

                <label for="birth_place">Birth Place</label>
                <input name="birth_place" type="text" id="birth_place" placeholder="Enter your birth place"
                    value="{{ old('birth_place') }}">
                @error('birth_place')
                    <p class="error-message">Birth place is required.</p>
                @enderror

                <label for="birth_date">Birth Date</label>
                <input name="birth_date" type="date" id="birth_date" placeholder="Enter your birth date"
                    value="{{ old('birth_date') }}">
                @error('birth_date')
                    <p class="error-message">Birth date is required.</p>
                @enderror

                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Enter your password">
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <label for="password_confirmation">Password Confirmation</label>
                <input name="password_confirmation" type="password" id="password_confirmation"
                    placeholder="Confirm your password">
                @error('password_confirmation')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <div class="file-input-wrapper" id="cvWrapper">
                    <label for="">Upload CV</label>
                    <label for="cv" class="file-label">CV</label>
                    <input type="file" id="cv" name="cv" class="file-input"
                        onchange="updateFileName('cv', this)">
                    <span id="cvFileName" class="file-name"></span>
                    @error('cv')
                        <p class="error-message">CV is required.</p>
                    @enderror
                </div>

                <label>Binusian Status</label>
                <div class="radio-group">
                    <input type="radio" id="BINUSIAN" name="binusian" value="BINUSIAN"
                        onclick="toggleFileInputs('BINUSIAN')">
                    <label for="BINUSIAN">BINUSIAN</label>
                    <input type="radio" id="NONBINUSIAN" name="binusian" value="NONBINUSIAN"
                        onclick="toggleFileInputs('NONBINUSIAN')">
                    <label for="NONBINUSIAN">NONBINUSIAN</label>
                </div>
                @error('binusian')
                    <p class="error-message">Form must be filled</p>
                @enderror


                <div class="file-input-wrapper" id="idCardWrapper">
                    <label for="">Upload ID Card</label>
                    <label for="id_card" class="file-label">ID Card</label>
                    <input type="file" id="id_card" name="id_card" class="file-input"
                        onchange="updateFileName('id_card', this)">
                    <span id="id_cardFileName" class="file-name"></span>
                    @error('id_card')
                        <p class="error-message">ID Card is required.</p>
                    @enderror
                </div>

                <div class="file-input-wrapper" id="flazzCardWrapper" style="display: none;">
                    <label for="">Upload Flazz Card</label>
                    <label for="flazz_card" class="file-label">Flazz Card</label>
                    <input type="file" id="flazz_card" name="flazz_card" class="file-input"
                        onchange="updateFileName('flazz_card', this)">
                    <span id="flazz_cardFileName" class="file-name"></span>
                    @error('flazz_card')
                        <p class="error-message">Flazz Card is required.</p>
                    @enderror
                </div>


                <div class="">
                    <button type="button" onclick="prevForm('groupInfo')">Previous</button>
                    <button type="submit">Register</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function toggleFileInputs(status) {
            if (status === 'BINUSIAN') {
                $('#idCardWrapper').hide();
                $('#flazzCardWrapper').show();
            } else if (status === 'NONBINUSIAN') {
                $('#idCardWrapper').show();
                $('#flazzCardWrapper').hide();
            }
        }

        function nextForm(nextFormId) {
            document.getElementById('groupInfo').classList.remove('active');
            document.getElementById(nextFormId).classList.add('active');
        }

        function prevForm(prevFormId) {
            document.getElementById('leaderInfo').classList.remove('active');
            document.getElementById(prevFormId).classList.add('active');
        }

        function updateFileName(inputId, inputElement) {
            const fileNameSpan = document.getElementById(inputId + 'FileName');
            if (inputElement.files.length > 0) {
                fileNameSpan.textContent = inputElement.files[0].name;
            } else {
                fileNameSpan.textContent = '';
            }
        }
    </script>
</body>

</html>
