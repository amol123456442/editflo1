<div class="flex flex-col md:flex-row mx-auto px-4 min-h-screen ">

    <!-- Main Content -->
    <article class="max-w-full">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">editflo.Shortcuts</h1>
            <p class="text-gray-700 text-sm sm:text-base">Contains logic for handling keyboard shortcuts.</p>
        </div>

        <div class="sect3 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Examples</h2>

            <div class="listingblock mb-4">
                <div class="content">
                    <div class="group bg-gray-800 rounded-lg overflow-hidden border border-gray-300 relative">

                        <!-- Hover top bar -->
                        <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <div class="text-xs font-mono text-gray-400 hidden sm:block">JAVASCRIPT</div>
                            <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 sm:px-3 py-1 sm:py-1.5 rounded text-xs flex items-center gap-1">
                                <i class="fas fa-copy text-xs"></i>
                                <span class="hidden sm:inline">Copy</span>
                                <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                    Copied!
                                </div>
                            </button>
                        </div>

                        <div class="overflow-x-auto py-0">
                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-purple-400">shortcuts</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'ctrl+a'</span><span class="text-gray-300">,</span><span class="text-green-400">'description of the shortcut'</span><span class="text-gray-300">,</span> <span class="text-gray-300">() => {}</span><span class="text-gray-300">);</span><br>
                                <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-purple-400">shortcuts</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'ctrl+alt+a'</span><span class="text-gray-300">,</span><span class="text-green-400">'description of the shortcut'</span><span class="text-gray-300">,</span> <span class="text-gray-300">() => {}</span><span class="text-gray-300">);</span><br>
                                <span class="">// "meta" maps to Command on Mac and Ctrl on PC</span><br>
                                <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-purple-400">shortcuts</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'meta+a'</span><span class="text-gray-300">,</span><span class="text-green-400">'description of the shortcut'</span><span class="text-gray-300">,</span> <span class="text-gray-300">() => {}</span><span class="text-gray-300">);</span><br>
                                <span class="">// "access" maps to Control+Option on Mac and shift+alt on PC</span><br>
                                <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-purple-400">shortcuts</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'access+a'</span><span class="text-gray-300">,</span><span class="text-green-400">'description of the shortcut'</span><span class="text-gray-300">,</span> <span class="text-gray-300">() => {}</span><span class="text-gray-300">);</span><br><br>
                                <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-purple-400">shortcuts</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'meta+access+c'</span><span class="text-gray-300">,</span><span class="text-green-400">'Opens the code editor dialog.'</span><span class="text-gray-300">,</span> <span class="text-gray-300">() => {</span><br>
                                <span class="text-gray-300 ml-4"></span><span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">execCommand</span><span class="text-gray-300">(</span><span class="text-green-400">'mceCodeEditor'</span><span class="text-gray-300">);</span><br>
                                <span class="text-gray-300">});</span><br><br>
                                <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-purple-400">shortcuts</span><span class="text-gray-300">.</span><span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-green-400">'meta+shift+32'</span><span class="text-gray-300">,</span><span class="text-green-400">'Inserts "Hello, World!" for meta+shift+space'</span><span class="text-gray-300">,</span> <span class="text-gray-300">() => {</span><br>
                                <span class="text-gray-300 ml-4"></span><span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">execCommand</span><span class="text-gray-300">(</span><span class="text-green-400">'mceInsertContent'</span><span class="text-gray-300">,</span> <span class="text-yellow-300">false</span><span class="text-gray-300">,</span> <span class="text-green-400">'Hello, World!'</span><span class="text-gray-300">);</span><br>
                                <span class="text-gray-300">});</span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="sect1">
            <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-4 pb-2 border-b border-gray-300">
                <a class="anchor hover:text-blue-600 transition-colors" href="#summary">Summary</a>
            </h2>
            <div class="sectionbody">

                <div class="sect2">
                    <h3 id="methods-summary" class="text-xl font-semibold text-gray-800 mb-4">
                        <a class="anchor hover:text-blue-600 transition-colors" href="#methods-summary">Methods</a>
                    </h3>

                    <div class="table-container">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Methods will be populated here -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                                            <a href="#add" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">add()</a>
                                        </td>
                                        <td class="px-4 sm:px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Adds a keyboard shortcut for some command or function.</span>
                                        </td>
                                        <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Shortcuts</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                                            <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">remove()</a>
                                        </td>
                                        <td class="px-4 sm:px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Remove a keyboard shortcut by pattern.</span>
                                        </td>
                                        <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Shortcuts</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Methods Section -->
        <div class="sect1 mt-8 sm:mt-12">
            <h2 id="methods" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-300">
                <a class="anchor hover:text-blue-600 transition-colors" href="#methods">Methods</a>
            </h2>
            <div class="sectionbody">

                <!-- add Method -->
                <div class="sect2 mb-8 sm:mb-10" id="add">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">add()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600 hidden sm:block">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 sm:px-3 py-1 sm:py-1.5 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i>
                                        <span class="hidden sm:inline">Copy</span>
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                    <span class="text-yellow-300">add</span><span class="text-gray-300">(</span><span class="text-blue-400">pattern</span><span class="text-gray-300">:</span> <span class="text-purple-400">String</span><span class="text-gray-300">,</span> <span class="text-blue-400">desc</span><span class="text-gray-300">:</span> <span class="text-purple-400">String</span><span class="text-gray-300">,</span> <span class="text-blue-400">cmdFunc</span><span class="text-gray-300">:</span> <span class="text-purple-400">String</span> <span class="text-gray-300">|</span> <span class="text-purple-400">Function</span><span class="text-gray-300">,</span> <span class="text-blue-400">scope</span><span class="text-gray-300">:</span> <span class="text-purple-400">Object</span><span class="text-gray-300">):</span> <span class="text-purple-400">Boolean</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Adds a keyboard shortcut for some command or function.</p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base space-y-1">
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">pattern (String)</code> – Shortcut pattern. Like for example: ctrl+alt+o.</li>
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">desc (String)</code> – Text description for the command.</li>
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">cmdFunc (String | Function)</code> – Command name string or function to execute when the key is pressed.</li>
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">scope (Object)</code> – Optional scope to execute the function in.</li>
                    </ul>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4 mb-2">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">Boolean</code> – true/false state if the shortcut was added or not.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- remove Method -->
                <div class="sect2 mb-8 sm:mb-10" id="remove">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">remove()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600 hidden sm:block">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 sm:px-3 py-1 sm:py-1.5 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i>
                                        <span class="hidden sm:inline">Copy</span>
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                    <span class="text-yellow-300">remove</span><span class="text-gray-300">(</span><span class="text-blue-400">pattern</span><span class="text-gray-300">:</span> <span class="text-purple-400">String</span><span class="text-gray-300">):</span> <span class="text-purple-400">Boolean</span>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Remove a keyboard shortcut by pattern.</p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">pattern (String)</code> – Shortcut pattern. Like for example: ctrl+alt+o.</li>
                    </ul>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4 mb-2">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code class="bg-gray-100 px-1 py-0.5 rounded">Boolean</code> – true/false state if the shortcut was removed or not.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

            </div>
        </div>
    </article>
</div>

<script>
    // Copy button functionality
    document.addEventListener('DOMContentLoaded', function() {
        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            let isCopied = false;

            button.addEventListener('click', function() {
                if (isCopied) return;

                // Find the code content
                const group = this.closest('.group');
                const preElement = group.querySelector('pre');
                const code = preElement.textContent.trim();

                // Copy to clipboard
                navigator.clipboard.writeText(code).then(() => {
                    isCopied = true;

                    // Change button to "Copied" state
                    const originalContent = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> <span class="hidden sm:inline">Copied!</span>';
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
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> <span class="hidden sm:inline">Copied!</span>';
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