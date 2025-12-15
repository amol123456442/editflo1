<div class="flex flex-col md:flex-row px-4">

    <div class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.EditorMode</h1>
            <p class="text-gray-700 text-sm sm:text-base">Editflo Editor Mode API.</p>
        </div>


        <div class="sect1">
            <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-1 pb-2">
                <a class="anchor" href="#summary">Summary</a>
            </h2>
            <div class="sectionbody">

                <div class="sect2">
                    <h3 id="properties" class="text-xl font-semibold text-gray-800 mb-3 ">
                        <a class="anchor" href="#properties">Properties</a>
                    </h3>

                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class=" divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm font-medium text-gray-900">editorReadOnly</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Boolean</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Flags whether the editor should be made readonly while this mode is active.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">EditorMode</td>
                                    </tr>

                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
                                            <a href="#annotate" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">activate()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Handler to activate this mode, called before deactivating the previous mode.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorMode</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#annotationChanged" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deactivate()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Handler to deactivate this mode, called after activating the new mode.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorMode</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#getAll" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">get()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the active editor mode, such as "design" or "readonly".</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorMode</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#register" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">isReadOnly()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Checks if the editor is in a readonly state.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorMode</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">register()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Registers a new editor mode.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorMode</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#removeAll" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">set()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Sets the editor mode. The available modes are "design" and "readonly". Additional modes can be registered using 'register'.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorMode</code></td>
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

                <!-- activate Method -->
                <div class="sect2 mb-10" id="activate">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">activate()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

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
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">activate</span>()</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Handler to activate this mode, called before deactivating the previous mode.</p>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <!-- deactivate Method -->
                <div class="sect2 mb-10" id="deactivate">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">deactivate()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">deactivate</span>()</code>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Handler to deactivate this mode, called after activating the new mode.</p>
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

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">get</span>():<span class="text-yellow-400"> String</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Returns the active editor mode, such as "design" or "readonly".</p>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>String</code> - The active editor mode.</li>

                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <!-- isReadOnly <method -->

                <div class="sect2 mb-10" id="isReadOnly">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">isReadOnly()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">isReadOnly</span>():<span class="text-yellow-400"> Boolean</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Checks if the editor is in a readonly state.</p>
                    </div>

                    <div class="sect3 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <div class="ulist mb-4">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Boolean</code> - true if the editor is in a readonly state.</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- register method -->
                <div class="sect2 mb-10" id="register">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">register()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">register</span>(<span class="text-green-400">api</span>: <span class="text-blue-400">EditorModeApi</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Registers a new editor mode.</p>
                    </div>

                    <div class="sect3 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist mb-4">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>api (EditorModeApi)</code> - Activation and Deactivation API for the new mode.</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- set method -->
                <div class="sect2 mb-10" id="set">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">set()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">set</span>(<span class="text-green-400">mode</span>: <span class="text-blue-400">String</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Sets the editor mode. The available modes are "design" and "readonly". Additional modes can be registered using 'register'.</p>
                    </div>

                    <div class="sect3 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist mb-4">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>mode (String)</code> - Mode to set the editor in.</li>
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