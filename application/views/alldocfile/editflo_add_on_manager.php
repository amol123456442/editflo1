<div class="flex flex-col md:flex-row px-4">

    <div class="p-1 lg:p-1 max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.AddOnManager</h1>
            <p class="text-gray-700 text-sm sm:text-base">This class handles the loading of add-ons and their language packs. ThemeManager and PluginManager are instances of AddOnManager, and manage themes and plugins.</p>
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
                                            <a href="#add" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">add()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Adds a instance of the add-on by it’s short name.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>AddOnManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#get" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">get()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the specified add on by the short name.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>AddOnManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#load" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">load()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Loads an add-on from a specific url.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>AddOnManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#requireLangPack" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">requireLangPack()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Loads a language pack for the specified add-on.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>AddOnManager</code></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Methods Section -->
        <div class="sect1 mt-12">
            <h2 id="methods" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b">
                <a class="anchor" href="#methods">Methods</a>
            </h2>
            <div class="sectionbody">

                <!-- Add Method -->
                <div class="sect2 mb-10" id="add">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">add()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">add</span>(<span class="text-green-400">id</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">addOn</span>: <span class="text-blue-400">editflo.Theme | editflo.Plugin</span>): <span class="text-yellow-400">editflo.Theme | editflo.Plugin</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds a instance of the add-on by it’s short name.</p>
                        </div>

                        <div class="sect3 mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                            <div class="listingblock mb-4">
                                <div class="content">
                                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                        <div class="absolute top-2 right-2 flex items-center gap-3 
                                            opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                            <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                    <i class="fas fa-copy text-xs"></i> Copy
                                                </button>
                                            </div>
                                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                
                                                <span class="text-gray-300">// Create a simple plugin</span>
                                                <span class="text-blue-400">const</span> <span class="text-green-400">TestPlugin</span> <span class="text-yellow-300">=</span> <span class="text-yellow-300">(</span><span class="text-green-400">ed</span><span class="text-yellow-300">,</span> <span class="text-green-400">url</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span>
                                                <span class="text-green-400">ed</span><span class="text-yellow-300">.</span><span class="text-purple-400">on</span><span class="text-yellow-300">(</span><span class="text-green-400">'click'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">e</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span>
                                                    <span class="text-green-400">ed</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello World!'</span><span class="text-yellow-300">);</span>
                                                <span class="text-yellow-300">});</span>
                                                <span class="text-yellow-300">};</span>

                                                <span class="text-gray-300">// Register plugin using the add method</span>
                                                <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">PluginManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">add</span><span class="text-yellow-300">(</span><span class="text-green-400">'test'</span><span class="text-yellow-300">,</span> <span class="text-green-400">TestPlugin</span><span class="text-yellow-300">);</span>

                                                <span class="text-gray-300">// Initialize editflo</span>
                                                <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">({</span>
                                                <span class="text-gray-300">...</span>
                                                <span class="text-purple-400">plugins</span>: <span class="text-green-400">'-test'</span> <span class="text-gray-300">// Init the plugin but don't try to load it</span>
                                                <span class="text-yellow-300">});</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700">
                                        <li class="text-gray-700 text-sm sm:text-base"><code>id (String)</code> - Short name/id for the add-on.</li>
                                        <li class="text-gray-700 text-sm sm:text-base"><code>addOn (<a href="<?php echo base_url('documentation/api-reference/editflo/theme'); ?>" class="text-blue-500 hover:underline" >Theme</a> | <a href="<?php echo base_url('documentation/api-reference/editflo/plugin'); ?>" class="text-blue-500 hover:underline" >Plugin</a>)</code> - Theme or plugin to add.</li>
                                    </ul>
                                </div>
                            
                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700">
                                            <li class="text-gray-700 text-sm sm:text-base"><code><a href="<?php echo base_url('documentation/api-reference/editflo/theme'); ?>" class="text-blue-500 hover:underline" >Theme</a></code> - The same theme or plugin instance that got passed in.</li>
                                            <li class="text-gray-700 text-sm sm:text-base"><code><a href="<?php echo base_url('documentation/api-reference/editflo/plugin'); ?>" class="text-blue-500 hover:underline" >Plugin</a></code> - The same theme or plugin instance that got passed in.</li>
                                        </ul>
                                    </div>
                                </div>
                            
                        <hr class="my-6 border-gray-300">

                    </div>
                </div>

                <!-- get Method -->
                <div class="sect2 mb-10" id="get">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">get()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                        <code class="javascript">
                                            <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">get</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">editflo.Theme | editflo.Plugin</span></code>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns the specified add on by the short name.</p>
                        </div>
                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>name (String)</code> - Add-on to look for.</li>
                                </ul>
                            </div>
                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code><a href="<?php echo base_url('documentation/api-reference/editflo/theme'); ?>" class="text-blue-500" >Theme</a></code> - Theme or plugin add-on instance or undefined.</li>
                                        <li><code><a href="<?php echo base_url('documentation/api-reference/editflo/plugin'); ?>" class="text-blue-500" >Plugin</a></code> - Theme or plugin add-on instance or undefined.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- load Method -->
                    <div class="sect2 mb-10" id="load">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">load()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">load</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">addOnUrl</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Promise</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds a instance of the add-on by it’s short name.</p>
                        </div>

                        <div class="sect3 mb-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                            <div class="listingblock mb-4">
                                <div class="content">
                                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                        <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                            <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                    <i class="fas fa-copy text-xs"></i> Copy
                                                </button>
                                            </div>
                                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                            <span class="text-gray-300">// Loads a plugin from an external URL</span>
                                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">PluginManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">load</span><span class="text-yellow-300">(</span><span class="text-green-400">'myplugin'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'/some/dir/someplugin/plugin.js'</span><span class="text-yellow-300">);</span>
                                            <span class="text-gray-300">// Initialize editflo</span>
                                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">({</span>
                                            <span class="text-gray-300">...</span>
                                            <span class="text-purple-400">plugins</span>: <span class="text-green-400">'-myplugin'</span> <span class="text-gray-300">// Don't try to load it again</span>
                                            <span class="text-yellow-300">});</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - Short name of the add-on that gets loaded.</li>
                                        <li><code>addOnUrl (String)</code> - URL to the add-on that will get loaded.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>Promise</code> - A promise that will resolve when the add-on is loaded successfully or reject if it failed to load.</li>

                                    </ul>
                                </div>
                            </div>
                            <hr class="my-6 border-gray-300">
                        </div>
                    </div>

                    <!-- requireLangPack -->
                    <div class="sect2 mb-10" id="each">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">requireLangPack()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                        <code class="javascript">
                                            <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">requireLangPack</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">languages</span>: <span class="text-blue-400">String</span>)</code>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Loads a language pack for the specified add-on.</p>
                            </div>

                            <div class="sect3 mb-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist mb-4">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - Short name of the add-on.</li>
                                        <li><code>languages (String)</code> - Optional comma or space separated list of languages to check if it matches the name.</li>

                                    </ul>
                                </div>
                            </div>

                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- Note: Additional methods would follow the same pattern -->

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
                button.addEventListener('click', function() {
                    // Find the code element
                    const codeBlock = this.closest('.group').querySelector('code');
                    const code = codeBlock.textContent;

                    // Copy to clipboard
                    navigator.clipboard.writeText(code).then(() => {
                        // Original content save करें
                        const originalHTML = this.innerHTML;
                        const originalBg = this.style.background;

                        // Change button text and color
                        this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                        this.style.background = '#10B981'; // Green color

                        // Reset after 2 seconds
                        setTimeout(() => {
                            this.innerHTML = originalHTML;
                            this.style.background = originalBg;
                        }, 2000);

                    }).catch(err => {
                        console.error('Copy failed:', err);

                        // Fallback method for older browsers
                        const textarea = document.createElement('textarea');
                        textarea.value = code;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand('copy');
                        document.body.removeChild(textarea);

                        // Same feedback for fallback
                        const originalHTML = this.innerHTML;
                        const originalBg = this.style.background;

                        this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                        this.style.background = '#10B981';

                        setTimeout(() => {
                            this.innerHTML = originalHTML;
                            this.style.background = originalBg;
                        }, 2000);
                    });
                });
            });
        });
    </script>