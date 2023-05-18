@props(["name"])
@error($name)
<p class="text-danger fw-bold">{{ $message }}</p>
@enderror
