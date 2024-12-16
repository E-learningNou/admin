 <!-- @include('front.layout.hed')
@include('front.layout.nav')



<h2>Login</h2>

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
@include('front.layout.footer') -->

