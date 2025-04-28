<div class="mb-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Buat Permintaan Refill</h1>

    <div class="flex justify-between items-center mb-4">
        @foreach ($steps as $key => $step)
            @php
                $isActive = $key === $currentStep;
                $isCompleted = array_search($key, array_keys($steps)) < array_search($currentStep, array_keys($steps));
            @endphp

            <a href="{{ route($step['route']) }}" class="flex flex-col items-center">
                <div
                    class="w-10 h-10 rounded-full flex items-center justify-center font-bold mb-2
                    {{ $isActive
                        ? 'bg-red-800 text-white'
                        : ($isCompleted
                            ? 'bg-green-500 text-white'
                            : 'bg-gray-200 text-gray-600') }}">
                    {{ $step['number'] }}
                </div>
                <span
                    class="text-sm font-medium
                    {{ $isActive ? 'text-red-800' : ($isCompleted ? 'text-green-500' : 'text-gray-500') }}">
                    {{ $step['label'] }}
                </span>
            </a>

            @if (!$loop->last)
                <div class="flex-1 h-1 mx-2
                    {{ $isCompleted ? 'bg-green-500' : 'bg-gray-200' }}">
                </div>
            @endif
        @endforeach
    </div>
</div>
