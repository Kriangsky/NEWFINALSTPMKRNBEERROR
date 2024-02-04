<form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
    @csrf
    @method('PUT')
    <label for="group_name">Group Name:</label>
    <input type="text" name="group_name" value="{{ $user->group_name }}" required>

    <label for="leadername">Leader Name:</label>
    <input type="text" name="leadername" value="{{ $user->leadername}}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{  $user->email }}" required>

    <label for="binusian">Binusian:</label>
    <select name="binusian" required>
        <option value="BINUSIAN" {{ $user->binusian === 'BINUSIAN' ? 'selected' : '' }}>BINUSIAN</option>
        <option value="NONBINUSIAN" {{ $user->binusian === 'NONBINUSIAN' ? 'selected' : '' }}>NONBINUSIAN</option>
    </select>

    <label for="whatsapp">WhatsApp:</label>
    <input type="text" name="whatsapp" value="{{  $user->whatsapp }}" required>

    <label for="line">Line:</label>
    <input type="text" name="line" value="{{  $user->line }}" required>

    <label for="github">GitHub ID:</label>
    <input type="text" name="github" value="{{  $user->github }}" required>

    <label for="birth_date">Birth Date:</label>
    <input type="date" name="birth_date" value="{{  $user->birth_date }}" required>

    <label for="birth_place">Birth Place:</label>
    <input type="text" name="birth_place" value="{{ $user->birth_place }}" required>
    <h3>Under maintenance</h3>
    <label for="cv">CV:</label>
    {{-- <input type="file" name="cv" accept=".jpg,.jpeg,.png,.pdf" value="{{  $user->cv }}"> --}}

    <label for="id_card">ID Card:</label>
    {{-- <input type="file" name="id_card" accept=".jpg,.jpeg,.png" value="{{  $user->id_card }}" > --}}

    <label for="flazz_card">Flazz Card:</label>
    {{-- <input type="file" name="flazz_card" accept=".jpg,.jpeg,.png" value="{{  $user->flazz_card }}" > --}}

    <button type="submit">Edit User</button>
</form>

<style>
/* Add your specific styling here */
form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input, select, button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

/* Add more styles as needed */

</style>
