<input type="text" id="{{ $model ?? 'price' }}" wire:model="{{ $model ?? 'price' }}"
    class="maskMoney bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    placeholder="10,00" required />
<div class="text-red-600 dark:text-white">
    @error('price')
        {{ $message }}
    @enderror
</div>

<script>
    function formatToCurrency(value) {
        value = value.replace(/\D/g, ""); // Remove all non-digit characters
        if (value.length === 0) return ""; // Return empty string if no value

        value = (value / 100).toFixed(2) + ""; // Divide by 100 to move decimal for cents
        value = value.replace(".", ","); // Replace the dot with a comma for decimal separator
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Add thousands separator
        return value;
    }

    // Function to apply the mask to all fields
    function applyMaskMoney() {
        document.querySelectorAll('.maskMoney').forEach(function(input) {
            let value = input.getAttribute('data-value') || input.value;
            input.value = formatToCurrency(value);
            input.setAttribute('data-value', input.value); // Store formatted value for reference
        });
    }

    // Event listeners for input fields
    document.addEventListener('DOMContentLoaded', function() {
        applyMaskMoney();

        document.querySelectorAll('.maskMoney').forEach(function(input) {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, ""); // Remove non-digit characters
                e.target.value = formatToCurrency(value);
            });
        });
    });
</script>
