{{-- @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror --}}
@error($name)
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
