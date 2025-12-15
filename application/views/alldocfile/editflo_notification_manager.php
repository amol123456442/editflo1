<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.NotificationManager</h1>
            <p class="text-gray-700 text-sm sm:text-base">This class handles the creation of editflo’s notifications.
            </p>
        </div>

        <div class="sect3 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Examples</h2>

            <div class="listingblock mb-4">
                <div class="content">
                    <div class="group bg-gray-800 rounded-lg overflow-hidden border border-gray-300 relative">

                        <!-- Hover top bar -->
                        <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <div class="text-xs font-mono text-gray-400">JAVASCRIPT</div>
                            <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                <i class="fas fa-copy text-xs"></i> Copy
                                <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                    Copied!
                                </div>
                            </button>
                        </div>

                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-gray-300">// Opens a new notification of type "error" with text "An error occurred."</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">notificationManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">open</span><span class="text-yellow-300">({</span><br>
                            <span class="text-purple-400 ml-4">text</span>: <span class="text-green-400">'An error occurred.'</span><span class="text-yellow-300">,</span><br>
                            <span class="text-purple-400 ml-4">type</span>: <span class="text-green-400">'error'</span><br>
                            <span class="text-yellow-300">});</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sect1">
            <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-1 pb-2">
                <a class="anchor" href="#summary">Summary</a>
            </h2>
            <div class="sectionbody">

                <div class="sect2">
                    <h3 id="methods-summary" class="text-xl font-semibold text-gray-800 mb-3">
                        <a class="anchor" href="#methods-summary">Methods</a>
                    </h3>

                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Methods will be populated here -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#close" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">close()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Closes the top most notification.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base "><code>NotificationManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#getNotifications" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">getNotifications()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the currently opened notification objects.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base "><code>NotificationManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#open" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">open()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Opens a new notification.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base "><code>NotificationManager</code></td>
                                    </tr>

                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 whitespace-nowrap text-gray-700 text-sm sm:text-base"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
</div>
</article>
</div>

<script>
    // Simple script to handle copy code buttons
    document.addEventListener('DOMContentLoaded', function() {
        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            // Store original state
            const originalContent = button.innerHTML;
            const originalText = 'Copy';
            let isCopied = false;

            button.addEventListener('click', function() {
                if (isCopied) return; // Prevent multiple clicks

                // Find the code content
                const preElement = this.closest('.group').querySelector('pre');
                const code = preElement.textContent.trim();

                // Copy to clipboard
                navigator.clipboard.writeText(code).then(() => {
                    isCopied = true;

                    // Change button to "Copied" state
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';
                    this.style.color = 'white';

                    // Automatically reset to "Copy" after 2 seconds
                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.style.backgroundColor = '';
                        this.style.color = '';
                        isCopied = false;
                    }, 2000);

                }).catch(err => {
                    console.error('Copy failed:', err);

                    // Fallback method
                    const textarea = document.createElement('textarea');
                    textarea.value = code;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);

                    // Show success even with fallback
                    isCopied = true;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';
                    this.style.color = 'white';

                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.style.backgroundColor = '';
                        this.style.color = '';
                        isCopied = false;
                    }, 2000);
                });
            });
        });
    });
</script>