<h1>Welcome to the Admin Dashboard</h1>

<p>You are logged in as {{ Auth::guard('admin')->user()->name }}.</p>

<form method="POST" action="{{ route('admin.logout') }}">
    @csrf

    <button type="submit">Logout</button>
</form>
