<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.WindowManager</h1>
            <p class="text-gray-700 text-sm sm:text-base">This class handles the creation of native windows and dialogs. This class can be extended to provide for example inline dialogs.
            </p>
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
                            <span class="text-gray-300">// Opens a new dialog with the file.htm file and the size 320x240</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">openUrl</span><span class="text-yellow-300">({</span><br>
                            <span class="text-purple-400 ml-4">title</span>: <span class="text-green-400">'Custom Dialog'</span><span class="text-yellow-300">,</span><br>
                            <span class="text-purple-400 ml-4">url</span>: <span class="text-green-400">'file.htm'</span><span class="text-yellow-300">,</span><br>
                            <span class="text-purple-400 ml-4">width</span>: <span class="text-green-400">320</span><span class="text-yellow-300">,</span><br>
                            <span class="text-purple-400 ml-4">height</span>: <span class="text-green-400">240</span><br>
                            <span class="text-yellow-300">});</span>
                            <br><br>
                            <span class="text-gray-300">// Displays an alert box using the active editor's window manager instance</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello world!'</span><span class="text-yellow-300">);</span><br><br>

                            <span class="text-gray-300">// Displays a confirm box. An alert message will display depending on what is chosen in the confirm box.</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">confirm</span><span class="text-yellow-300">(</span><span class="text-green-400">'Do you want to do something?'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">state</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                            <span class="text-blue-400 ml-4">const</span> <span class="text-green-400">message</span> <span class="text-yellow-300">=</span> <span class="text-green-400">state</span> <span class="text-yellow-300">?</span> <span class="text-green-400">'Ok'</span> : <span class="text-green-400">'Cancel'</span><span class="text-yellow-300">;</span><br>
                            <span class="text-blue-400 ml-4">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">message</span><span class="text-yellow-300">);</span><br>
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
                                            <a href="#alert" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">alert()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Creates an alert dialog. Do not use the blocking behavior of this native version. Use the callback method instead; then it can be extended.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>WindowManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#close" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">close()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Closes the top most window.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>WindowManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#confirm" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">confirm()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Creates an alert dialog. Do not use the blocking behavior of this native version. Use the callback method instead; then it can be extended.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>WindowManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#open" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">open()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Opens a new window.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>WindowManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#openUrl" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">openUrl()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Opens a new window for the specified url.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>WindowManager</code></td>
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

                <!-- alert Method -->
                <div class="sect2 mb-10" id="alert">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">alert()</h3>
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
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">alert</span>(<span class="text-green-400">message</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative ">
                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                        </button>
                                    </div>
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-gray-300">// Displays an alert box using the active editor's window manager instance</span>
                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello world!'</span><span class="text-yellow-300">);</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Creates an alert dialog. Do not use the blocking behavior of this native version. Use the callback method instead; then it can be extended.</p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>message (String)</code> – Text to display in the new alert dialog.</li>
                        <li><code>callback (Function)</code> – (Optional) Callback function to be executed after the user has selected ok.</li>
                        <li><code>scope (Object)</code> – (Optional) Scope to execute the callback in.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- close Method -->
                <div class="sect2 mb-10" id="close">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">close()</h3>
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
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">close</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>      

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Closes the top most window.</p>
                        </div>

                        <hr class="my-6 border-gray-300">
                </div>

                <!-- confirm Method -->
                <div class="sect2 mb-10" id="confirm">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">confirm()</h3>
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
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">confirm</span>(<span class="text-green-400">message</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative ">
                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                        </button>
                                    </div>
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto"> 
    
                                    <span class="text-gray-300">// Displays a confirm box and an alert message will be displayed depending on what you choose in the confirm</span><br>
                                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">confirm</span><span class="text-yellow-300">(</span><span class="text-green-400">'Do you want to do something?'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">state</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                    <span class="text-blue-400 ml-4">const</span> <span class="text-green-400">message</span> <span class="text-yellow-300">=</span> <span class="text-green-400">state</span> <span class="text-yellow-300">?</span> <span class="text-green-400">'Ok'</span> : <span class="text-green-400">'Cancel'</span><span class="text-yellow-300">;</span><br>
                                    <span class="text-blue-400 ml-4">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">message</span><span class="text-yellow-300">);</span><br>
                                    <span class="text-yellow-300">});</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Creates an alert dialog. Do not use the blocking behavior of this native version. Use the callback method instead; then it can be extended.</p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>message (String)</code> – Text to display in the new alert dialog.</li>
                        <li><code>callback (Function)</code> – (Optional) Callback function to be executed after the user has selected ok.</li>
                        <li><code>scope (Object)</code> – (Optional) Scope to execute the callback in.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- open Method -->
                <div class="sect2 mb-10" id="open">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">open()</h3>
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
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">open</span>(<span class="text-green-400">config</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">params</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">WindowManager.DialogInstanceApi</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Opens a new window.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>config (Object)</code> – For information on the available options, see: Dialog - Configuration options.</li>
                            <li><code>params (Object)</code> – (Optional) For information on the available options, see: Dialog - Configuration parameters.</li>
                        </ul>
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>WindowManager.DialogInstanceApi</code> – A new dialog instance.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- openUrl Method -->
                    <div class="sect2 mb-10" id="openUrl">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">openUrl()</h3>
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
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">openUrl</span>(<span class="text-green-400">config</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">WindowManager.UrlDialogInstanceApi</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Opens a new window for the specified url.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>config (Object)</code> – For information on the available options, see: URL dialog - Configuration.</li>
                        </ul>
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>WindowManager.DialogInstanceApi</code> – A new dialog instance.</li>
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
    });
</script>