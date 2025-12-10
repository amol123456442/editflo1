<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Editflo Documentation</h1>
        <p class="text-base sm:text-lg text-gray-600">Editflo is a rich-text editor that allows users to create formatted content within a user-friendly interface.</p>
    </div>

    <!-- Editor Preview Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-6 sm:mb-8">
        <!-- Tabs -->
        <div class="border-b border-gray-200 overflow-x-auto">
            <div class="flex min-w-max sm:min-w-0">
                <button class="tab-button py-2 sm:py-3 px-4 sm:px-6 border-b-2 border-blue-600 text-blue-600 font-medium text-sm sm:text-base whitespace-nowrap"
                    data-tab="editflo">
                    Editflo
                </button>
                <button
                    class="tab-button py-2 sm:py-3 px-4 sm:px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 text-sm sm:text-base font-medium text-sm sm:text-base whitespace-nowrap"
                    data-tab="html">
                    HTML
                </button>
                <button
                    class="tab-button py-2 sm:py-3 px-4 sm:px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 text-sm sm:text-base font-medium text-sm sm:text-base whitespace-nowrap"
                    data-tab="js">
                    JS
                </button>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="p-4 sm:p-6">
            <!-- Editflo Tab (Main Preview) -->
            <div id="editflo-tab" class="tab-content">
                <img src="http://localhost/editflo/assets/image.png" class="w-full rounded-lg shadow-sm"
                    alt="Editflo Editor Preview">
            </div>
            <!-- HTML Tab -->
            <div id="html-tab" class="tab-content hidden">
                <div class="bg-gray-900 text-gray-100 p-4 sm:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto">
                    <pre class="whitespace-pre-wrap break-all sm:whitespace-pre sm:break-normal">
                    <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span>
                    <span class="text-blue-400">&lt;html&gt;</span>
                    <span class="text-blue-400">&lt;head&gt;</span>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;title&gt;</span>My Document<span class="text-blue-400">&lt;/title&gt;</span>
                    <span class="text-blue-400">&lt;/head&gt;</span>
                    <span class="text-blue-400">&lt;body&gt;</span>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;p&gt;</span>Hello, <span class="text-blue-400">&lt;strong&gt;</span>World!<span class="text-blue-400">&lt;/strong&gt;</span><span class="text-blue-400">&lt;/p&gt;</span>
                    <span class="text-blue-400">&lt;/body&gt;</span>
                    <span class="text-blue-400">&lt;/html&gt;</span></pre>
                </div>
            </div>
        </div>
        <!-- JS Tab -->
        <div id="js-tab" class="tab-content hidden">
            <div class="bg-gray-900 text-gray-100 p-4 sm:p-6 rounded-lg font-mono text-xs sm:text-sm overflow-x-auto">
                <pre class="whitespace-pre-wrap break-all sm:whitespace-pre sm:break-normal">
                <span class="text-green-400">// Initialize Editflo</span>
                <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span>
                &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'#mytextarea'</span><span class="text-gray-300">,</span>
                &nbsp;&nbsp;<span class="text-blue-400">license_key</span><span class="text-gray-300">: </span><span class="text-green-400">'gpl'</span><span class="text-gray-300">,</span>
                &nbsp;&nbsp;<span class="text-blue-400">height</span><span class="text-gray-300">: </span><span class="text-orange-400">300</span>
                <span class="text-gray-300">});</span></pre>
            </div>
        </div>
    </div>
    <!-- Overview and Integration Options Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-5 mb-6">
        <h1 class="text-xl font-bold text-gray-800 mb-3">Editflo Integration</h1>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="p-3 text-left text-sm font-medium text-gray-700 text-sm sm:text-base border-b border-gray-200">
                            Method
                        </th>
                        <th class="p-3 text-left text-sm font-medium text-gray-700 text-sm sm:text-base border-b border-gray-200">
                            Description
                        </th>
                        <th class="p-3 text-left text-sm font-medium text-gray-700 text-sm sm:text-base border-b border-gray-200">
                            Features
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100">
                        <td class="p-3 text-gray-800 font-medium">
                            <div class="flex items-center">
                                <i class="fas fa-cloud text-blue-500 mr-2"></i>
                                Editflo Cloud
                            </div>
                        </td>
                        <td class="p-3 text-sm text-gray-600">
                            CDN delivery with automatic updates
                        </td>
                        <td class="p-3">
                            <div class="text-sm text-gray-600">
                                <div>• Fastest setup</div>
                                <div>• Auto updates</div>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="p-3 text-gray-800 font-medium">
                            <div class="flex items-center">
                                <i class="fas fa-box text-purple-500 mr-2"></i>
                                Package Manager
                            </div>
                        </td>
                        <td class="p-3 text-sm text-gray-600">
                            Install with NPM/Yarn for self-hosting
                        </td>
                        <td class="p-3">
                            <div class="text-sm text-gray-600">
                                <div>• Version control</div>
                                <div>• Offline access</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 text-gray-800 font-medium">
                            <div class="flex items-center">
                                <i class="fas fa-download text-green-500 mr-2"></i>
                                Direct Download
                            </div>
                        </td>
                        <td class="p-3 text-sm text-gray-600">
                            Download .zip for traditional hosting
                        </td>
                        <td class="p-3">
                            <div class="text-sm text-gray-600">
                                <div>• Simple deployment</div>
                                <div>• No dependencies</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="bg-white rounded-lg border border-gray-200 p-5 mb-6">
        <h3 class="text-lg font-medium text-gray-800 mb-4">Deployment Comparison</h3>

        <div class="space-y-4">
            <!-- Setup Speed -->
            <div>
                <h4 class="text-sm font-medium text-gray-700 text-sm sm:text-base mb-2">Setup Speed</h4>
                <div class="grid grid-cols-3 gap-3">
                    <div class=" border-l-4 border-gray-200 rounded p-4">
                        <div class="font-medium text-green-700 sm:text-base">Fastest</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Editflo Cloud</div>
                    </div>
                    <div class=" border-l-4 border-gray-200 rounded p-3">
                        <div class="font-medium text-yellow-700 sm:text-base">Medium</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Package Manager</div>
                    </div>
                    <div class=" border-l-4 border-gray-200 rounded p-3">
                        <div class="font-medium text-blue-700 sm:text-base">Fast</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Direct Download</div>
                    </div>
                </div>
            </div>

            <!-- Updates -->
            <div>
                <h4 class="text-sm font-medium text-gray-700 text-sm sm:text-base mb-2">Updates</h4>
                <div class="grid grid-cols-3 gap-3">
                    <div class="border-l-4 border-gray-200 rounded p-3">
                        <div class="font-medium text-green-600 sm:text-base">Automatic</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Editflo Cloud</div>
                    </div>
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="font-medium text-gray-700 sm:text-base">Manual</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Package Manager</div>
                    </div>
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="font-medium text-gray-700 sm:text-base">Manual</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Direct Download</div>
                    </div>
                </div>
            </div>

            <!-- Network -->
            <div>
                <h4 class="text-sm font-medium text-gray-700 text-sm sm:text-base mb-2">Network Required</h4>
                <div class="grid grid-cols-3 gap-3">
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="font-medium text-red-600 sm:text-base">Yes</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Editflo Cloud</div>
                    </div>
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="font-medium text-gray-700 sm:text-base">Initial Only</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Package Manager</div>
                    </div>
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="font-medium text-green-600 sm:text-base">No</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Direct Download</div>
                    </div>
                </div>
            </div>

            <!-- Best For -->
            <div>
                <h4 class="text-sm font-medium text-gray-700 text-sm sm:text-base mb-2">Best For</h4>
                <div class="grid grid-cols-3 gap-3">
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="text-sm sm:text-base">Quick prototypes</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Startups, MVPs</div>
                    </div>
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="text-sm sm:text-base">Development teams</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Version control users</div>
                    </div>
                    <div class="border-l-4  border-gray-200 rounded p-3">
                        <div class="text-sm sm:text-base">Traditional sites</div>
                        <div class="text-gray-700 text-sm sm:text-base mt-1">Static websites</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6">
        <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3 sm:mb-4">Next Steps</h2>
        <p class="text-gray-700 text-sm sm:text-base mb-3 sm:mb-4 text-sm sm:text-base">
            Now that you have an overview of Editflo integration options, you can explore more specific documentation:
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
            <a href="#" class="bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-3 sm:p-4 transition-colors">
                <div class="flex items-center">
                    <i class="fas fa-book text-blue-600 text-lg sm:text-xl mr-3"></i>
                    <div>
                        <h3 class="font-medium text-gray-800 text-sm sm:text-base">API Documentation</h3>
                        <p class=" text-gray-600 sm:text-base">Complete reference for all Editflo APIs</p>
                    </div>
                </div>
            </a>
            <a href="#" class="bg-purple-50 hover:bg-purple-100 border border-purple-200 rounded-lg p-3 sm:p-4 transition-colors">
                <div class="flex items-center">
                    <i class="fas fa-plug text-purple-600 text-lg sm:text-xl mr-3"></i>
                    <div>
                        <h3 class="font-medium text-gray-800 text-sm sm:text-base">Plugin Guide</h3>
                        <p class=" text-gray-600 sm:text-base">Extend functionality with plugins</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Sign Up Section -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-3 sm:p-4 mt-3">
            <p class="text-blue-800 mb-2 text-sm sm:text-base">
                It only takes 2 minutes to create your free Editflo account and get the API key:
            </p>
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2 sm:gap-3">
                <button type="button"
                    class="w-full sm:w-auto text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded text-sm px-3 sm:px-4 py-2.5 text-center inline-flex items-center justify-center">
                    <i class="fa-brands fa-google mr-2"></i>
                    Sign in with Google
                </button>

                <button type="button"
                    class="w-full sm:w-auto text-white bg-[#0f1419] hover:bg-[#0f1419]/90 focus:ring-4 focus:outline-none focus:ring-[#0f1419]/50 box-border border border-transparent font-medium leading-5 rounded text-sm px-3 sm:px-4 py-2.5 text-center inline-flex items-center justify-center">
                    <i class="fa-brands fa-github mr-2"></i>
                    Sign in with Github
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');

                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700');
                });

                // Add active class to clicked button
                button.classList.add('border-blue-600', 'text-blue-600');
                button.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab content
                const targetTab = document.getElementById(`${tabId}-tab`);
                if (targetTab) {
                    targetTab.classList.remove('hidden');
                }
            });
        });

        // Set default active tab
        const defaultTab = document.querySelector('.tab-button[data-tab="editflo"]');
        if (defaultTab) {
            defaultTab.click();
        }
    });
</script>