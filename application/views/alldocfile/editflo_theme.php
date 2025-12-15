<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <div class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.Theme</h1>
            <p class="text-gray-700 text-sm sm:text-base">Editflo theme pseudo class. Allows for a custom theme to be used with Editflo when registered using the ThemeManager.
                <br><br>
                This is a pseudo class that describes how to create a custom theme for Editflo.
                <br><br>
                See AddOnManager for more information about the methods available on the ThemeManager instance.
                <br><br>
                Warning: Much of Editflo’s functionality is provided by the default Silver theme. Creating a custom theme may require the re-implementation of this functionality. To change Editflo’s appearance, Tiny recommends changing the Skin instead.
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
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-purple-400">ThemeManager</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'MyTheme'</span><span class="text-gray-300">, (</span><span class="text-blue-400">editor</span><span class="text-gray-300">) => {</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Setup custom UI elements in the DOM</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-purple-400">const</span><span class="text-gray-300"> div = document.</span><span class="text-yellow-300">createElement</span><span class="text-gray-300">(</span><span class="text-green-400">'div'</span><span class="text-gray-300">);</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-purple-400">const</span><span class="text-gray-300"> iframe = document.</span><span class="text-yellow-300">createElement</span><span class="text-gray-300">(</span><span class="text-green-400">'iframe'</span><span class="text-gray-300">);</span><br>
                    <span class="text-gray-300 ml-4"></span>document.body.<span class="text-yellow-300">appendChild</span><span class="text-gray-300">(div);</span><br>
                    <span class="text-gray-300 ml-4"></span>document.body.<span class="text-yellow-300">appendChild</span><span class="text-gray-300">(iframe);</span><br>
                    <br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Fire SkinLoaded event when UI is ready</span><br>
                    <span class="text-gray-300 ml-4"></span>editor.<span class="text-yellow-300">on</span><span class="text-gray-300">(</span><span class="text-green-400">'init'</span><span class="text-gray-300">, () => {</span><br>
                    <span class="text-gray-300 ml-8"></span>editor.<span class="text-yellow-300">fire</span><span class="text-gray-300">(</span><span class="text-green-400">'SkinLoaded'</span><span class="text-gray-300">);</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">});</span><br>
                    <br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Return renderUI function with editor and iframe containers</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-purple-400">const</span><span class="text-gray-300"> renderUI = () => {</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-purple-400">return</span><span class="text-gray-300"> {</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-blue-400">editorContainer</span><span class="text-gray-300">: div,</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-blue-400">iframeContainer</span><span class="text-gray-300">: iframe</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-gray-300">};</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">};</span><br>
                    <br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">// Return the theme object</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-purple-400">return</span><span class="text-gray-300"> {</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-blue-400">renderUI</span><span class="text-gray-300">: renderUI</span><br>
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