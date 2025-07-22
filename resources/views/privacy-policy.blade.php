<x-layouts.page :title="__('Privacy Policy')">
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">{{ __('Privacy Policy') }}</h1>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('Introduction') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-1') }}
      </p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('Information We Collect') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-2') }}</p>
      <ul class="list-disc pl-6">
        <li>{{ __('privacy.info-1') }}</li>
        <li>{{ __('privacy.info-2') }}</li>
      </ul>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('How We Use Your Information') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-3') }}</p>
      <ul class="list-disc pl-6">
        <li>{{ __('privacy.usage-1') }}</li>
        <li>{{ __('privacy.usage-2') }}</li>
        <li>{{ __('privacy.usage-3') }}</li>
      </ul>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('Sharing Your Information') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-4') }}</p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('Data Security') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-5') }}</p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('Your Rights') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-6') }}</p>
    </section>

    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">{{ __('Contact Us') }}</h2>
      <p class="mb-4">{{ __('privacy.statement-7') }}</p>
    </section>
  </div>
</x-layouts.page>
