<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.EditorOptions</h1>
            <p class="text-gray-700 text-sm sm:text-base">editflo Editor Options API. The options API provides the ability to register, lookup and set editor options.
                <br><br>
                All options need to be registered before they can be used in the editor. This is done by using the
                <code class="px-1 py-0.5 bg-gray-200 rounded text-sm">register()</code> API which requires a name and an option specification.
                The specification should contain a <code class="px-1 py-0.5 bg-gray-200 rounded text-sm">processor</code> and an optional
                <code class="px-1 py-0.5 bg-gray-200 rounded text-sm">default</code> value.
                The processor is used to parse and validate the option value either passed in the initial configuration or via the
                <code class="px-1 py-0.5 bg-gray-200 rounded text-sm">set()</code> API.
                <br><br>
                The processor can either be a custom function that returns if the option value is valid, or one of the following built-in processors:
                <br><br>
            </p>
            <ul class="list-disc pl-6 text-gray-700 text-sm sm:text-base mb-10">
                <li>string</li>
                <li>number</li>
                <li>boolean</li>
                <li>array</li>
                <li>function</li>
                <li>object</li>
                <li>string[]</li>
                <li>object[]</li>
                <li>regexp</li>
            </ul>

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


                            <span class="text-gray-300">// Register an option</span><br>
                            <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-blue-400">options</span><span class="text-yellow-300">.</span><span class="text-purple-400">register</span><span class="text-yellow-300">(</span><span class="text-green-400">'custom_option'</span><span class="text-yellow-300">, {</span><br>
                            <span class="text-orange-400 ml-4">processor</span><span class="text-yellow-300">:</span> <span class="text-green-400">'string'</span><span class="text-yellow-300">,</span><br>
                            <span class="text-orange-400 ml-4">default</span><span class="text-yellow-300">:</span> <span class="text-green-400">'myoption'</span><br>
                            <span class="text-yellow-300">});</span><br><br>

                            <span class="text-gray-300">// Lookup an option</span><br>
                            <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-blue-400">options</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'custom_option'</span><span class="text-yellow-300">);</span><br><br>

                            <span class="text-gray-300">// Set an option</span><br>
                            <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-blue-400">options</span><span class="text-yellow-300">.</span><span class="text-purple-400">set</span><span class="text-yellow-300">(</span><span class="text-green-400">'custom_option'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'value'</span><span class="text-yellow-300">);</span>

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
                                                <a href="#annotate" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">debug()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Logs the initial raw editor options to the console.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#annotationChanged" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">get()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Get the value of a registered option.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getAll" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">isRegistered()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Check if an option has been registered.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#register" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">isSet()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Checks to see if a value has been set for the specified option.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">register()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Register a new option that can be used within editflo.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#removeAll" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">set()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Set the value for a registered option.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#removeAll" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">unset()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Clear the set value for the specified option and revert back to the default value.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500 text-sm sm:text-base"><code>EditorOptions</code></td>
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

                    <!-- debug Method -->
                    <div class="sect2 mb-10" id="debug">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">debug()</h3>
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
                                        <span class="text-purple-400">activate</span>()
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Handler to activate this mode, called before deactivating the previous mode.</p>
                        </div>
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
                                        <span class="text-purple-400">get</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Object</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Get the value of a registered option.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of a registered option.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Object</code> – An option value, the registered default if not set, or undefined if not registered.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- isRegistered Method -->
                    <div class="sect2 mb-10" id="isRegistered">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">isRegistered()</h3>
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
                                        <span class="text-purple-400">isRegistered</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Check if an option has been registered.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of the option.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – True if the option has already been registered, otherwise false.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- isSet Method -->
                    <div class="sect2 mb-10" id="isSet">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">isSet()</h3>
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
                                        <span class="text-purple-400">isSet</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Checks to see if a value has been set for the specified option.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of the option.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – True if the option has a value set, otherwise false.</li>
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
                                        <span class="text-purple-400">register</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">spec</span>: <span class="text-blue-400">OptionSpec</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Register a new option that can be used within editflo.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of the option.</li>

                            <li><code>spec (OptionSpec)</code> – An option spec describing how to validate the option with other optional metadata.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- set Method -->
                    <div class="sect2 mb-10" id="set">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">set()</h3>
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

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Set the value for a registered option.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of the option.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – True if the option value was successfully set, otherwise false.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- unset Method -->
                    <div class="sect2 mb-10" id="unset">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">unset()</h3>
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
                                        <span class="text-purple-400">unset</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Clear the set value for the specified option and revert back to the default value.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>name (String)</code> – Name of a registered option.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – True if the option value was successfully reset, otherwise false.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
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
    });
</script>