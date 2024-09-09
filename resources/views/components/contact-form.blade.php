<!-- resources/views/components/contact-form.blade.php -->

@props(['nameLabel', 'emailLabel', 'messageLabel', 'buttonText'])

<div class="form-group">
    <label for="your-name">{{ $nameLabel }}</label>
    <input type="text" id="your-name" name="your-name" class="@error('your-name') is-invalid @enderror" value="{{ old('your-name') }}" required>

    @error('your-name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="your-email">{{ $emailLabel }}</label>
    <input type="email" id="your-email" name="your-email" class="@error('your-email') is-invalid @enderror" value="{{ old('your-email') }}" required>

    @error('your-email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="your-message">{{ $messageLabel }}</label>
    <textarea id="your-message" name="your-message" class="@error('your-message') is-invalid @enderror" rows="4" required>{{ old('your-message') }}</textarea>

    @error('your-message')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <button type="submit" class="btn btn-white">{{ $buttonText }}</button>
</div>

