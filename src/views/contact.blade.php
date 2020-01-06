<p>This my package bitch</p>

<form action="{{ route('contact') }}" method="post">
    @if ($config)

    <p>{{ $config ?? '' }}</p>
    @endif
    @csrf
    <input type="text" name="message" placeholder="Enter Your Message">
    <input type="submit" value="submit">
</form>
