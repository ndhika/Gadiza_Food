<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

    <label for="phone">Phone:</label>
    <input type="phone" id="phone" name="phone" value="{{ $user->phone }}" required>

    <label for="address">Alamat:</label>
    <input type="address" id="address" name="address" value="{{ $user->address }}" required>

    <button type="submit">Update Profile</button>
</form>