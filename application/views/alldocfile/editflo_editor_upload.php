<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">Editflo.EditorUpload</h1>
            <p class="text-gray-700 text-sm sm:text-base">Editflo Editor Upload API Handles image uploads, updates undo stack and patches over various internal functions.
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
                            <span class="text-gray-300">// Apply a new filter within the image scan</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addFilter</span><span class="text-yellow-300">((</span><span class="text-blue-400">image</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                            <span class="text-blue-400 ml-4">const</span> <span class="text-blue-400">maxSize</span> <span class="text-yellow-300">=</span> <span class="text-green-400">1920</span> <span class="text-yellow-300">*</span> <span class="text-green-400">1080</span><span class="text-yellow-300">;</span><br>
                            <span class="text-blue-400 ml-4">const</span> <span class="text-blue-400">imageSize</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">image</span><span class="text-yellow-300">.</span><span class="text-blue-400">width</span> <span class="text-yellow-300">*</span> <span class="text-blue-400">image</span><span class="text-yellow-300">.</span><span class="text-blue-400">height</span><span class="text-yellow-300">;</span><br>
                            <span class="text-blue-400 ml-4">return</span> <span class="text-blue-400">imageSize</span> <span class="text-yellow-300">
                                < <span class="text-blue-400">maxSize
                            </span><span class="text-yellow-300">;</span><br>
                            <span class="text-yellow-300">});</span>
                            <br><br>
                            <span class="text-gray-300">// Upload all valid images in the editor</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">uploadImages</span><span class="text-yellow-300">();</span>
                            <br><br>
                            <span class="text-gray-300">// Scan the editor for valid images</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">scanForImages</span><span class="text-yellow-300">();</span>
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
                        <h3 id="properties" class="text-xl font-semibold text-gray-800 mb-3">
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
                                                <span class="font-medium text-gray-700 text-sm sm:text-base">blobCache</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Object</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Cache of blob elements created in an editor instance.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">EditorUpload</td>
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
                                                <a href="#addFilter" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addFilter()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Adds a custom filter that controls the images which are included in the scan. Images must return true on every added filter to be considered valid.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorUpload</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#destroy" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">destroy()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Resets the blob data and upload status of all uploaded images. Called automatically on editor.remove. This method is not recommended for integration.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorUpload</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#scanForImages" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">scanForImages()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Scans the editor content for valid image elements and generates blob information for each image.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorUpload</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#uploadImages" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">uploadImages()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Uploads all the data uri/blob uri images scanned from the editor content to the server.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorUpload</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#uploadImagesAuto" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">uploadImagesAuto()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Uploads all data uri/blob uri images to the server only when automatic uploads are enabled.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>EditorUpload</code></td>
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

                    <!-- addFilter Method -->
                    <div class="sect2 mb-10" id="addFilter">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">addFilter()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

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
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                        <span class="text-purple-400">addFilter</span>(<span class="text-green-400">filter</span>: <span class="text-blue-400">Function</span>)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds a custom filter that controls the images which are included in the scan. Images must return true on every added filter to be considered valid.</p>
                        </div>

                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Hover top bar -->
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

                                    <!-- Code area -->
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                        <span class="text-gray-500">// Filter which images are uploaded.</span><br>
                                        <span class="text-purple-400">editflo</span>.<span class="text-blue-400">activeEditor</span>.<span class="text-blue-400">EditorUpload</span>.<span class="text-purple-400">addFilter</span>((<span class="text-green-400">image</span>) => {<br>
                                        <span class="text-blue-400 ml-4">const</span> <span class="text-green-400">maxSize</span> = <span class="text-yellow-400">1920</span> * <span class="text-yellow-400">1080</span>;<br>
                                        <span class="text-blue-400 ml-4">const</span> <span class="text-green-400">imageSize</span> = image.<span class="text-blue-400">width</span> * image.<span class="text-blue-400">height</span>;<br>
                                        <span class="text-blue-400 ml-4">return</span> imageSize < maxSize;
                                            });
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>filter (Function)</code> – Function which filters each image upload.</li>
                            </ul>

                            <hr class="my-6 border-gray-300">

                        </div>

                        <!-- destroy Method -->
                        <div class="sect2 mb-10" id="destroy">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">destroy()</h3>
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
                                            <span class="text-purple-400">destroy</span>()
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Resets the blob data and upload status of all uploaded images. Called automatically on editor.remove. This method is not recommended for integration.
                                </p>
                            </div>

                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- scanForImages Method -->
                        <div class="sect2 mb-10" id="scanForImages">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">scanForImages()</h3>
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
                                            <span class="text-purple-400">scanForImages</span>(): <span class="text-yellow-400">Promise</span></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Scans the editor content for valid image elements and generates blob information for each image.</p>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Promise</code> – Promise instance with element object and blob information for each image.</li>
                            </ul>

                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- uploadImages Method -->
                        <div class="sect2 mb-10" id="uploadImages">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">uploadImages()</h3>
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
                                            <span class="text-purple-400">uploadImages</span>(): <span class="text-yellow-400">Promise</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Uploads all the data uri/blob uri images scanned from the editor content to the server.</p>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Promise</code> – Promise instance with images and status for each image.</li>
                            </ul>

                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- uploadImagesAuto Method -->
                        <div class="sect2 mb-10" id="uploadImagesAuto">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">uploadImagesAuto()</h3>
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
                                            <span class="text-purple-400">uploadImagesAuto</span>(): <span class="text-yellow-400">Promise</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Uploads all data uri/blob uri images to the server only when automatic uploads are enabled.</p>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Promise</code> – Promise instance with images and status for each image.</li>
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