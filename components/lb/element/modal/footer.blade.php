  <div @click="$dispatch('close-modal')"
      {{ $attributes->merge(['class' => 'p-4 flex space-x-2 justify-end bg-neutral-100 items-baseline sm:rounded-b-lg']) }}>
      {{ $slot }}
  </div>
