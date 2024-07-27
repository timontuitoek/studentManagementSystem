<!-- resources/views/components/textarea.blade.php -->
<label>
<textarea {{ $attributes->merge(['class' => 'form-input']) }}>
    {{ $slot }}
</textarea>
</label>
