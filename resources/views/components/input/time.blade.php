<input type="numeric" id="{{ $model ?? 'time' }}" wire:model="{{ $model ?? 'time' }}"
    class="maskTime bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    placeholder="30:00" />
<div class="text-red-600 dark:text-white">
    @error('time')
        {{ $message }}
    @enderror
</div>

<script>
    function formatToTime(value) {
            value = value.replace(/\D/g, ""); // Remove all non-digit characters

            if (value.length > 4) {
                value = value.slice(0, 4); // Limit the input to a max of 4 digits (HHMM)
            }

            if (value.length <= 2) {
                // If only minutes, just display the minutes
                return value.padStart(2, "0") + " min";
            } else {
                // If more than 2 digits, show as hours and minutes
                let minutes = value.slice(-2); // Get the last two digits as minutes
                let hours = value.slice(0, -2); // Get the remaining digits as hours

                return hours + "h " + minutes + "m"; // Format as "Xh XXm"
            }
        }

        // Function to allow deletion by maintaining the correct format
        function handleDelete(value) {
            return value.replace(/\D/g, ""); // Keep only numbers when deleting
        }

        // Attach event listener to elements with class 'maskTime'
        document.querySelectorAll('.maskTime').forEach(function(input) {
            input.addEventListener('input', function(e) {
                let value = e.target.value;
                e.target.value = formatToTime(value);
            });

            input.addEventListener('keydown', function(e) {
                // Allow backspace and delete key to function normally
                if (e.key === "Backspace" || e.key === "Delete") {
                    let value = e.target.value;
                    e.target.value = handleDelete(value);
                }
            });
        });
</script>
