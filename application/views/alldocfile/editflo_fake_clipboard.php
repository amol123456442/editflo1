<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.FakeClipboard</h1>
            <p class="text-gray-700 text-sm sm:text-base">editflo FakeClipboard API.
            </p>
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
                                            <a href="#FakeClipboardItem" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">FakeClipboardItem()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Create a FakeClipboardItem instance that is used when reading or writing data via the FakeClipboard API.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Event</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#clear" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">clear()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Clear arbitrary data on the fake clipboard.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>FakeClipboard</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#read" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">read()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Requests arbitrary data from the fake clipboard.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>FakeClipboard</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">write()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Writes arbitrary data to the fake clipboard.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>FakeClipboard</code></td>
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

                <!-- FakeClipboardItem Method -->
                <div class="sect2 mb-10" id="FakeClipboardItem">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">FakeClipboardItem()</h3>
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
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">FakeClipboardItem</span>(<span class="text-green-400">items</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">FakeClipboard.FakeClipboardItem</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Create a FakeClipboardItem instance that is used when reading or writing data via the FakeClipboard API.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>items (Object)</code> – An object with the type as the key and any data as the value.</li>
                        </ul>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>FakeClipboard.FakeClipboardItem</code> – A new fake clipboard item to represent the specified items.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- clear Method -->
                    <div class="sect2 mb-10" id="clear">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">clear()</h3>
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
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">clear</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Clear arbitrary data on the fake clipboard.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – True/false if the event propagation is stopped or not.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- read Method -->
                    <div class="sect2 mb-10" id="read">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">read()</h3>
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
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">read</span>(): <span class="text-yellow-400">Array</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Requests arbitrary data from the fake clipboard.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Array</code> – An array of FakeClipboardItems if items exist on the fake clipboard, otherwise undefined.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- write Method -->
                    <div class="sect2 mb-10" id="write">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">write()</h3>
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
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">stopImmediatePropagation</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Writes arbitrary data to the fake clipboard.</p>
                        </div>

                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>data (Array)</code> – An array of FakeClipboardItems to be written to the fake clipboard.</li>
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
        // Mobile menu toggle
        document.getElementById('menu-toggle')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            this.innerHTML = menu.classList.contains('hidden') ?
                '<i class="fas fa-bars text-xl"></i>' :
                '<i class="fas fa-times text-xl"></i>';
        });

        // Copy button functionality
        document.querySelectorAll('.copy-button').forEach(button => {
            button.addEventListener('click', function() {
                const codeBlock = this.closest('.group').querySelector('code');
                const code = codeBlock.textContent;

                navigator.clipboard.writeText(code).then(() => {
                    const originalHTML = this.innerHTML;
                    const originalText = this.querySelector('span')?.textContent || 'Copy';

                    this.innerHTML = '<i class="fas fa-check text-xs"></i> <span class="hidden sm:inline">Copied!</span>';

                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        if (originalText !== 'Copy') {
                            this.querySelector('span').textContent = originalText;
                        }
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

                    const originalHTML = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> <span class="hidden sm:inline">Copied!</span>';

                    setTimeout(() => {
                        this.innerHTML = originalHTML;
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
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuToggle = document.getElementById('menu-toggle');
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
                    }

                    // Calculate offset based on screen size
                    const offset = window.innerWidth < 1024 ? 80 : 20;

                    window.scrollTo({
                        top: targetElement.offsetTop - offset,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
                }
            }
        });
    </script>