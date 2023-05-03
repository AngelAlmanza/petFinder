<div>
    <x-input-label for="description" class="mt-4 mb-4" :value="__('Descripcion')"/>
    <textarea name="description" id="description" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" required>{{ old('description') }}</textarea>
</div>
