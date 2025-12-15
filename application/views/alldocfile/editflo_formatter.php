<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <div class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.Formatter</h1>
            <p class="text-gray-700 text-sm sm:text-base">Text formatter engine class. This class is used to apply formats like bold, italic, font size etc to the current selection or specific nodes. This engine was built to replace the browser’s default formatting logic for execCommand due to its inconsistent and buggy behavior.
        </div>

        <div class="sect3 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Examples</h2>

            <div class="listingblock mb-4">
                <div class="content">
                    <div class="group bg-gray-800 rounded-lg overflow-hidden border border-gray-300 relative">

                        <!-- Hover top bar -->
                        <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <div class="text-xs font-mono text-gray-400">JAVASCRIPT</div>
                            <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                <i class="fas fa-copy text-xs"></i> Copy
                                <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                    Copied!
                                </div>
                            </button>
                        </div>

                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">


                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">formatter</span><span class="text-yellow-300">.</span><span class="text-purple-400">register</span><span class="text-yellow-300">(</span><span class="text-green-400">'mycustomformat'</span><span class="text-yellow-300">, {</span><br>
                            <span class="text-orange-400 ml-4">inline</span><span class="text-yellow-300">:</span> <span class="text-green-400">'span'</span><span class="text-yellow-300">,</span><br>
                            <span class="text-orange-400 ml-4">styles</span><span class="text-yellow-300">:</span> <span class="text-yellow-300">{</span> <span class="text-blue-400">color</span><span class="text-yellow-300">:</span> <span class="text-green-400">'#ff0000'</span> <span class="text-yellow-300">}</span><br>
                            <span class="text-yellow-300">});</span><br><br>

                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">formatter</span><span class="text-yellow-300">.</span><span class="text-purple-400">apply</span><span class="text-yellow-300">(</span><span class="text-green-400">'mycustomformat'</span><span class="text-yellow-300">);</span>

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
                                                <a href="#apply" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">apply()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Applies the specified format to the current selection or specified node.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#canApply" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">canApply()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the specified format can be applied to the current selection or not. It will currently only check the state for selector formats, it returns true on all other format types.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#closest" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">closest()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Finds the closest matching format from a set of formats for the current selection.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#formatChanged" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">formatChanged()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Executes the specified callback when the current selection matches the formats or not.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#get" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">get()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the format by name or all formats if no name is specified.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getCssText" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">getCssText()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns a preview css text for the specified format.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#has" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">has()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true or false if a format is registered for the specified name.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#match" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">match()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Matches the current selection or specified node against the specified format name.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#matchAll" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">matchAll()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Matches the current selection against the array of formats and returns a new array with matching formats.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#matchNode" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">matchNode()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Return true/false if the specified node has the specified format.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#register" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">register()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Registers a specific format by name.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">remove()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Removes the specified format from the current selection or specified node.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#toggle" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">toggle()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Toggles the specified format on/off.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#unregister" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">unregister()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Unregister a specific format by name.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Formatter</code></td>
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

            <!-- Methods Section -->
            <div class="sect1 mt-12">
                <h2 id="methods" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b">
                    <a class="anchor" href="#methods">Methods</a>
                </h2>
                <div class="sectionbody">

                    <!-- apply Method -->
                    <div class="sect2 mb-10" id="apply">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">apply()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">apply</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">node</span>: <span class="text-blue-400">Node</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Applies the specified format to the current selection or specified node.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of format to apply.</li>
                            <li><code>vars (Object)</code> – Optional list of variables to replace within format before applying it.</li>
                            <li><code>node (Node)</code> – Optional node to apply the format to defaults to current selection.</li>
                        </ul>
                        <hr class="my-6 border-gray-300">

                    </div>

                    <!-- canApply Method -->
                    <div class="sect2 mb-10" id="canApply">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">canApply()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">canApply</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the specified format can be applied to the current selection or not. It will currently only check the state for selector formats, it returns true on all other format types.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of format to check.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – true/false if the specified format can be applied to the current selection/node.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- closest Method -->
                    <div class="sect2 mb-10" id="closest">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">closest()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">closest</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">Array</span>): <span class="text-yellow-400">String</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Finds the closest matching format from a set of formats for the current selection.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>names (Array)</code> – Format names to check for.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>String</code> – The closest matching format name or null.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- formatChanged Method -->
                    <div class="sect2 mb-10" id="formatChanged">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">formatChanged()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">formatChanged</span>(<span class="text-green-400">formats</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">similar</span>: <span class="text-blue-400">Boolean</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Executes the specified callback when the current selection matches the formats or not.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>formats (String)</code> – Comma separated list of formats to check for.</li>
                            <li><code>callback (Function)</code> – Callback with state and args when the format is changed/toggled on/off.</li>
                            <li><code>similar (Boolean)</code> – True/false state if the match should handle similar or exact formats.</li>
                            <li><code>vars (Object)</code> – Restrict the format being watched to only match if the variables applied are equal to vars.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- get Method -->
                    <div class="sect2 mb-10" id="get">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">get()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">get</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Array</span> | <span class="text-yellow-400">Object</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns the format by name or all formats if no name is specified.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Optional name to retrieve by.</li>
                        </ul>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Array</code> – Array/Object with all registered formats or a specific format.</li>
                            <li><code>Object</code> – Array/Object with all registered formats or a specific format.</li>
                        </ul>
                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- getCssText Method -->
                    <div class="sect2 mb-10" id="getCssText">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">getCssText()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">set</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">
                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                        </button>
                                    </div>
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                        <code>
                                            <span class="text-blue-400">const</span> <span class="text-green-400">cssText1</span> = editor.<span class="text-purple-400">formatter</span>.<span class="text-blue-400">getCssText</span>(<span class="text-yellow-400">'bold'</span>);<br>
                                            <span class="text-blue-400">const</span> <span class="text-green-400">cssText2</span> = editor.<span class="text-purple-400">formatter</span>.<span class="text-blue-400">getCssText</span>({ <span class="text-green-400">inline</span>: <span class="text-yellow-400">'b'</span> });
                                        </code>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns a preview css text for the specified format.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>format (String | Object)</code> – Format to generate preview css text for.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>String</code> – Css text for the specified format.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- has Method -->
                    <div class="sect2 mb-10" id="has">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">has()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">has</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true or false if a format is registered for the specified name.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 ttext-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Format name to check if a format exists.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – True/False if a format for the specified name exists.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- match Method -->
                    <div class="sect2 mb-10" id="match">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">match()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">match</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">node</span>: <span class="text-blue-400">Node</span>, <span class="text-green-400">similar</span>: <span class="text-blue-400">Boolean</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Matches the current selection or specified node against the specified format name.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of format to match.</li>
                            <li><code>vars (Object)</code> – Optional list of variables to replace before checking it.</li>
                            <li><code>node (Node)</code> – Optional node to check.</li>
                            <li><code>similar (Boolean)</code> – Optional argument to specify that similar formats should be checked instead of only exact formats.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – true/false if the specified selection/node matches the format.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- matchAll Method -->
                    <div class="sect2 mb-10" id="matchAll">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">matchAll()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">matchAll</span>(<span class="text-green-400">names</span>: <span class="text-blue-400">Array</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Array</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Matches the current selection against the array of formats and returns a new array with matching formats.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>names (Array)</code> – Name of format to match.</li>
                            <li><code>vars (Object)</code> – Optional list of variables to replace before checking it.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Array</code> – Array with matched formats.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- matchNode Method -->
                    <div class="sect2 mb-10" id="matchNode">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">matchNode()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">matchNode</span>(<span class="text-green-400">node</span>: <span class="text-blue-400">Node</span>, <span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">similar</span>: <span class="text-blue-400">Boolean</span>): <span class="text-yellow-400">Object</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Return true/false if the specified node has the specified format.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>node (Node)</code> – Node to check the format on.</li>
                            <li><code>name (String)</code> – Format name to check.</li>
                            <li><code>vars (Object)</code> – Optional list of variables to replace before checking it.</li>
                            <li><code>similar (Boolean)</code> – Match format that has similar properties.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Object</code> – Returns the format object it matches or undefined if it doesn’t match.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- register Method -->
                    <div class="sect2 mb-10" id="register">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">register()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">register</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">Object | String</span>, <span class="text-green-400">format</span>: <span class="text-blue-400">Object | Array</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Registers a specific format by name.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (Object | String)</code> – Name of the format for example "bold".</li>
                            <li><code>format (Object | Array)</code> – Optional format object or array of format variants can only be omitted if the first arg is an object.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- remove Method -->
                    <div class="sect2 mb-10" id="remove">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">remove()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">remove</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">node</span>: <span class="text-blue-400">Node | Range</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Removes the specified format from the current selection or specified node.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of format to remove.</li>
                            <li><code>vars (Object)</code> – Optional list of variables to replace within format before removing it.</li>
                            <li><code>node (Node | Range)</code> – Optional node or DOM range to remove the format from defaults to current selection.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- toggle Method -->
                    <div class="sect2 mb-10" id="toggle">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">toggle()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">toggle</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">vars</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">node</span>: <span class="text-blue-400">Node</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Toggles the specified format on/off.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of format to apply/remove.</li>
                            <li><code>vars (Object)</code> – Optional list of variables to replace within format before applying/removing it.</li>
                            <li><code>node (Node)</code> – Optional node to apply the format to or remove from. Defaults to current selection.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- unregister Method -->
                    <div class="sect2 mb-10" id="unregister">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">unregister()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">unregister</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Unregister a specific format by name.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of the format for example "bold".</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
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

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Update active nav link
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active', 'text-white');
                        link.classList.add('text-gray-700', 'hover:text-gray-900');
                    });

                    // Highlight current section in sidebar
                    if (this.classList.contains('nav-link')) {
                        this.classList.remove('text-gray-700', 'hover:text-gray-900');
                        this.classList.add('active', 'text-white');
                    }

                    // Scroll to target
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>