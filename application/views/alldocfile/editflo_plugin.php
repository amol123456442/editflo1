<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <div class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-2xl sm:text-3xl font-bold text-gray-800 mb-2 sm:mb-3">editflo.Plugin</h1>
            <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                Editflo plugin pseudo class. Allows for custom plugins to be added to Editflo when registered using the PluginManager.
                <br><br>
                This is a pseudo class that describes how to create a custom plugin for Editflo.
                <br><br>
                A custom plugin registered using <code class="px-1 py-0.5 bg-gray-200 rounded text-xs sm:text-sm">PluginManager.add</code> should either not return any value or return plugin metadata as an object that contains the plugin's name and a URL. The URL is intended to link to help documentation.
                <br><br>
                See AddOnManager for more information about the methods available on the PluginManager instance.
            </p>
        </div>

        <h2 class="text-lg font-semibold text-gray-800 mb-2">Examples</h2>
        <div class="content">
            <div class="group bg-gray-800 rounded-lg overflow-hidden border border-gray-300 relative">
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
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-purple-400">PluginManager</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'MyPlugin'</span><span class="text-gray-300">, (</span><span class="text-blue-400">editor</span><span class="text-gray-300">, </span><span class="text-blue-400">url</span><span class="text-gray-300">) => {</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Register a toolbar button that triggers an alert when clicked</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// To show this button in the editor, include it in the toolbar setting</span><br>
                    <span class="text-gray-300 ml-4"></span>editor.<span class="text-purple-400">ui</span><span class="text-gray-300">.</span><span class="text-purple-400">registry</span><span class="text-gray-300">.</span><span class="text-yellow-300">addButton</span><span class="text-gray-300">(</span><span class="text-green-400">'myCustomToolbarButton'</span><span class="text-gray-300">, {</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">text</span><span class="text-gray-300">: </span><span class="text-green-400">'My custom button'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">onAction</span><span class="text-gray-300">: () => {</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-yellow-300">alert</span><span class="text-gray-300">(</span><span class="text-green-400">'Button clicked!'</span><span class="text-gray-300">);</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-gray-300">}</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">});</span><br>
                    <br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Register a menu item that triggers an alert when clicked</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// To show this menu item in the editor, include it in the menu setting</span><br>
                    <span class="text-gray-300 ml-4"></span>editor.<span class="text-purple-400">ui</span><span class="text-gray-300">.</span><span class="text-purple-400">registry</span><span class="text-gray-300">.</span><span class="text-yellow-300">addMenuItem</span><span class="text-gray-300">(</span><span class="text-green-400">'myCustomMenuItem'</span><span class="text-gray-300">, {</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">text</span><span class="text-gray-300">: </span><span class="text-green-400">'My custom menu item'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">onAction</span><span class="text-gray-300">: () => {</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-yellow-300">alert</span><span class="text-gray-300">(</span><span class="text-green-400">'Menu item clicked'</span><span class="text-gray-300">);</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-gray-300">}</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">});</span><br>
                    <br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Either return plugin metadata or do not return</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-purple-400">return</span><span class="text-gray-300"> {</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">name</span><span class="text-gray-300">: </span><span class="text-green-400">'MyPlugin'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">url</span><span class="text-gray-300">: </span><span class="text-green-400">'https://mydocs.com/myplugin'</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">};</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>
    </div>
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