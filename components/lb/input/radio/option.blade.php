@props([
    'baseClass' => 'grid grid-cols-2 gap-4',
    'inputClass' => '',
    'value',
])


<label @click="radioGroupSelectedValue=option.value"
    class="flex items-start p-5 space-x-3 bg-white border rounded-md shadow-sm hover:bg-gray-50 border-neutral-200/70">
    <input type="radio" name="radio-group" :value="option.value"
        class="text-gray-900 translate-y-px focus:ring-gray-700" />

    {{ $slot }}
</label>
