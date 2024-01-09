<form method="POST" action="{{ route('admin.login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
