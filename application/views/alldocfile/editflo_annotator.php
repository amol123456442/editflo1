<div class="flex flex-col md:flex-row px-4">
    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.Annotator</h1>
            <p class="text-gray-700 text-sm sm:text-base">This is the annotator api.</p>
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
                                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Methods will be populated here -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#annotate" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">annotate()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Applies the annotation at the current selection using data</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>Annotator</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#annotationChanged" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">annotationChanged()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Executes the specified callback when the current selection matches the annotation or not.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>Annotator</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#getAll" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getAll()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Retrieve all the annotations for a given name</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>Annotator</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#register" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">register()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Registers a specific annotator by name</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>Annotator</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">remove()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Removes any annotations from the current selection that match the name</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>Annotator</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#removeAll" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">removeAll()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Removes all annotations that match the specified name from the entire document.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm sm:text-base text-gray-500"><code>Annotator</code></td>
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

                <!-- annotate Method -->
                <div class="sect2 mb-10" id="annotate">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">annotate()</h3>
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
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">annotate</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">data</span>: <span class="text-blue-400">Object</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Applies the annotation at the current selection using data</p>
                        </div>


                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>name (String)</code> - the name of the annotation to apply</li>
                                    <li><code>data (Object)</code> - information to pass through to this particular annotation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>Theme</code> - The same theme or plugin instance that got passed in.</li>
                                    <li><code>Plugin</code> - The same theme or plugin instance that got passed in.</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">

                    </div>

                    <!-- annotationChanged Method -->
                    <div class="sect2 mb-10" id="annotationChanged">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">annotationChanged()</h3>
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
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">annotationChanged</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>)</code>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Executes the specified callback when the current selection matches the annotation or not.</p>
                        </div>
                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>name (String)</code> - Name of annotation to listen for</li>
                                    <li><code>callback (Function)</code> - Name of annotation to listen for</li>
                                </ul>
                            </div>
                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>Theme</code> - Theme or plugin add-on instance or undefined.</li>
                                        <li><code>Plugin</code> - Callback with (state, name, and data) fired when the annotation at the cursor changes. If state if false, data will not be provided.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- getAll Method -->
                    <div class="sect2 mb-10" id="getAll">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">getAll()</h3>
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
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">getAll</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Object</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Retrieve all the annotations for a given name</p>
                        </div>

                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - the name of the annotations to retrieve</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>Object</code> - an index of annotations from uid ⇒ DOM nodes</li>

                                    </ul>
                                </div>
                            </div>
                            <hr class="my-6 border-gray-300">

                        </div>

                        <!-- More methods would continue here -->

                        <div class="sect2 mb-10" id="register">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">register()</h3>
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
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">register</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">settings</span>: <span class="text-blue-400">Object</span>)</code>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Registers a specific annotator by name</p>
                            </div>

                            <div class="sect3 mb-6">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist mb-4">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - the name of the annotation</li>
                                        <li><code>settings (Object)</code> - settings for the annotation (e.g. decorate)</li>

                                    </ul>
                                </div>
                            </div>

                            <hr class="my-6 border-gray-300">
                        </div>

                        <div class="sect2 mb-10" id="remove">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">remove()</h3>
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
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">remove</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>)</code>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Removes any annotations from the current selection that match the name</p>
                    </div>

                    <div class="sect3 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist mb-4">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>name (String)</code> - the name of the annotation to remove</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">
                </div>

                <div class="sect2 mb-10" id="removeAll">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">removeAll()</h3>
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
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">removeAll</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>)</code>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Removes all annotations that match the specified name from the entire document.</p>
                    </div>

                    <div class="sect3 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist mb-4">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>name (String)</code> - the name of the annotation to remove</li>
                            </ul>
                        </div>
                    </div>

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