<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.UserLookup</h1>
            <p class="text-gray-700 text-sm sm:text-base">editflo User Lookup API Handles user information retrieval and caching.
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


                            <span class="text-gray-300">// Get the current user's ID from the editor options, or defaults to 'Anonymous'.</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">userLookup</span><span class="text-yellow-300">.</span><span class="text-blue-400">userId</span><span class="text-yellow-300">;</span> <br><br>

                            <span class="text-gray-300">// Fetch user information by IDs which returns a record of promises</span><br>
                            <span class="text-blue-400">const</span> <span class="text-green-400">userPromises</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">userLookup</span><span class="text-yellow-300">.</span><span class="text-purple-400">fetchUsers</span><span class="text-yellow-300">([</span><span class="text-green-400">'user-1'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'user-2'</span><span class="text-yellow-300">]);</span><br><br>

                            <span class="text-gray-300">// Access individual promises by user ID</span><br>
                            <span class="text-green-400">userPromises</span><span class="text-yellow-300">[</span><span class="text-green-400">'user-1'</span><span class="text-yellow-300">].</span><span class="text-purple-400">then</span><span class="text-yellow-300">(</span><span class="text-green-400">user</span> <span class="text-yellow-300">=></span> <span class="text-purple-400">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">log</span><span class="text-yellow-300">(</span><span class="text-green-400">'User 1:'</span><span class="text-yellow-300">,</span> <span class="text-green-400">user</span><span class="text-yellow-300">));</span><br>
                            <span class="text-green-400">userPromises</span><span class="text-yellow-300">[</span><span class="text-green-400">'user-2'</span><span class="text-yellow-300">].</span><span class="text-purple-400">then</span><span class="text-yellow-300">(</span><span class="text-green-400">user</span> <span class="text-yellow-300">=></span> <span class="text-purple-400">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">log</span><span class="text-yellow-300">(</span><span class="text-green-400">'User 2:'</span><span class="text-yellow-300">,</span> <span class="text-green-400">user</span><span class="text-yellow-300">));</span><br><br>

                            <span class="text-gray-300">// Or wait for all promises</span><br>
                            <span class="text-purple-400">Promise</span><span class="text-yellow-300">.</span><span class="text-purple-400">all</span><span class="text-yellow-300">(</span><span class="text-purple-400">Object</span><span class="text-yellow-300">.</span><span class="text-purple-400">values</span><span class="text-yellow-300">(</span><span class="text-green-400">userPromises</span><span class="text-yellow-300">)).</span><span class="text-purple-400">then</span><span class="text-yellow-300">((</span><span class="text-green-400">users</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                            <span class="text-green-400 ml-4">users</span><span class="text-yellow-300">.</span><span class="text-purple-400">forEach</span><span class="text-yellow-300">(</span><span class="text-green-400">user</span> <span class="text-yellow-300">=></span> <span class="text-purple-400">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">log</span><span class="text-yellow-300">(</span><span class="text-green-400">'User found:'</span><span class="text-yellow-300">,</span> <span class="text-green-400">user</span><span class="text-yellow-300">));</span><br>
                            <span class="text-yellow-300">}).</span><span class="text-purple-400">catch</span><span class="text-yellow-300">((</span><span class="text-green-400">error</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                            <span class="text-purple-400 ml-4">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">error</span><span class="text-yellow-300">(</span><span class="text-green-400">'Error fetching users:'</span><span class="text-yellow-300">,</span> <span class="text-green-400">error</span><span class="text-yellow-300">);</span><br>
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
                                            <span class="text-gray-700 text-sm sm:text-base">userId</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">The current user’s ID retrieved from the editor options, or defaults to 'Anonymous'.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">UserLookup</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
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
                                            <a href="#fetchUsers" class="text-blue-600 hover:text-blue-800 text-sm sm:text-base">fetchUsers()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Fetches user information using a provided array of userIds.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UserLookup</code></td>
                                    </tr>

                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 whitespace-nowrap text-sm text-gray-900"></td>
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

                <!-- fetchUsers Method -->
                <div class="sect2 mb-10" id="fetchUsers">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">fetchUsers()</h3>
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
                                    <code class="javascript">
                                        <span class="text-purple-400">add</span>(<span class="text-green-400">pattern</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">desc</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">cmdFunc</span>: <span class="text-blue-400">String | Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Boolean</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Fetches user information using a provided array of userIds.</p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>userIds (string[])</code> – A list of user IDs to fetch information for.</li>
                    </ul>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li>
                            <code>Record&lt;UserId, Promise&lt;User&gt;&gt;</code><span> – An object where each key is a user ID and its value is a Promise that resolves to the user's data or rejects if the user is not found.</span>
                        </li>
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