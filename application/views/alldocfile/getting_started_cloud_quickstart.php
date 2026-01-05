<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Quick start: Editflo with Editflo Cloud</h1>
        <p class="text-lg text-gray-600">Install Editflo using the Editflo Cloud</p>
    </div>
    <!-- Introduction Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-6">
            Editflo 8 is a powerful and flexible rich text editor that can be embedded in web applications. This quick
            start covers how to add a Editflo editor to a web page using the Editflo Cloud.
        </p>

        <!-- Sign Up Section -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
            <p class="text-blue-800 mb-2">
                It only takes 2 minutes to create your free Editflo account and get the API key:
            </p>
            <div class="flex items-center gap-2 flex-wrap">
                <button type="button"
                    class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
                    <i class="fa-brands fa-google mr-2"></i>
                    Sign in with Google
                </button>
<!-- 
                <button type="button"
                    class="text-white bg-[#0f1419] hover:bg-[#0f1419]/90 focus:ring-4 focus:outline-none focus:ring-[#0f1419]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-[#24292F] dark:focus:ring-[#24292F]/55">
                    <i class="fa-brands fa-github mr-2"></i>
                    Sign in with Github
                </button> -->
            </div>
        </div>
    </div>

    <!-- Include Script Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Include the Editflo script</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            Include the following line of code in the <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;head&gt;</code> of an HTML page:
        </p>

        <!-- Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
            <span class="text-blue-400">&lt;script </span>
            <span class="text-green-400">src=</span>
            <span class="text-yellow-300">"https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js"</span>
            <span class="text-green-400"> referrerpolicy=</span>
            <span class="text-yellow-300">"origin"</span>
            <span class="text-green-400"> crossorigin=</span>
            <span class="text-yellow-300">"anonymous"</span>
            <span class="text-blue-400">&gt;&lt;/script&gt;</span>
        </div>
    </div>

    <!-- Initialize Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Initialize Editflo as part of a web form</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            Initialize Editflo 8 on any element (or elements) on the web page by passing an object containing a <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value to <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>. The <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value can be any valid CSS selector.
        </p>

        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            For example, to replace <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;textarea id="mytextarea"&gt;</code> with a Editflo 8
            editor instance, pass the selector <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">'#mytextarea'</code> to <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>:
        </p>

        <!-- Complete HTML Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
            <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
            <span class="text-blue-400">&lt;html lang="en"&gt;</span><br>
            <span class="text-blue-400">&lt;head&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;meta charset="UTF-8"&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;meta name="viewport"
                content="width=device-width, initial-scale=1"&gt;</span><br>
            <br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;script </span><span
                class="text-green-400">src=</span><span
                class="text-yellow-300">"https://cdn.Editflo.cloud/1/no-api-key/Editflomce/8/Editflomce.min.js"</span><span
                class="text-green-400"> referrerpolicy=</span><span class="text-yellow-300">"origin"</span><span
                class="text-green-400"> crossorigin=</span><span class="text-yellow-300">"anonymous"</span><span
                class="text-blue-400">&gt;&lt;/script&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;script&gt;</span><br>
            <span class="text-gray-300 ml-8"></span><span class="text-purple-400">Editflomce</span><span
                class="text-gray-300">.</span><span class="text-yellow-300">init</span><span
                class="text-gray-300">({</span><br>
            <span class="text-gray-300 ml-12"></span><span class="text-blue-400">selector</span><span
                class="text-gray-300">: </span><span class="text-green-400">'#mytextarea'</span><br>
            <span class="text-gray-300 ml-8"></span><span class="text-gray-300">});</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;/script&gt;</span><br>
            <span class="text-blue-400">&lt;/head&gt;</span><br>
            <br>
            <span class="text-blue-400">&lt;body&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;h1&gt;</span><span
                class="text-gray-300">EditfloMCE Quick Start Guide</span><span
                class="text-blue-400">&lt;/h1&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;form method="post"&gt;</span><br>
            <span class="text-gray-300 ml-8"></span><span class="text-blue-400">&lt;textarea </span><span
                class="text-green-400">id=</span><span class="text-yellow-300">"mytextarea"</span><span
                class="text-blue-400">&gt;</span><span class="text-gray-300">Hello, World!</span><span
                class="text-blue-400">&lt;/textarea&gt;</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">&lt;/form&gt;</span><br>
            <span class="text-blue-400">&lt;/body&gt;</span><br>
            <span class="text-blue-400">&lt;/html&gt;</span>
        </div>
    </div>

    <p class="p-4">Adding this content to an HTML file and opening it in a web browser will load a EditfloMCE editor,
        such as:</p>
    <!-- Editor Preview Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-8">
        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <div class="flex">
                <button class="tab-button py-3 px-6 border-b-2 border-blue-600 text-blue-600 font-medium"
                    data-tab="editflo">
                    Editflo
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm sm:text-base"
                    data-tab="html">
                    HTML
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm sm:text-base"
                    data-tab="js">
                    JS
                </button>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="p-6">
            <!-- Editflo Tab (Main Preview) -->
            <div id="editflo-tab" class="tab-content">
                <!-- Replace with your actual image path or dynamic content -->
                <img src="<?= base_url('assets/image.png'); ?>" class="w-full max-w-4xl mx-auto rounded-lg shadow-sm"
                    alt="Editflo Editor Preview">
            </div>
            <!-- HTML Tab -->
            <div id="html-tab" class="tab-content hidden">
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg font-mono text-sm">
                    <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
                    <span class="text-blue-400">&lt;html&gt;</span><br>
                    <span class="text-blue-400">&lt;head&gt;</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;title&gt;</span>My Document<span
                        class="text-blue-400">&lt;/title&gt;</span><br>
                    <span class="text-blue-400">&lt;/head&gt;</span><br>
                    <span class="text-blue-400">&lt;body&gt;</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;p&gt;</span>Hello, <span
                        class="text-blue-400">&lt;strong&gt;</span>World!<span
                        class="text-blue-400">&lt;/strong&gt;</span><span class="text-blue-400">&lt;/p&gt;</span><br>
                    <span class="text-blue-400">&lt;/body&gt;</span><br>
                    <span class="text-blue-400">&lt;/html&gt;</span>
                </div>
            </div>
            <!-- JS Tab -->
            <div id="js-tab" class="tab-content hidden">
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg font-mono text-sm">
                    <span class="text-green-400">// Initialize Editflo</span><br>
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span
                        class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span
                        class="text-green-400">'#mytextarea'</span><span class="text-gray-300">,</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">license_key</span><span class="text-gray-300">: </span><span
                        class="text-green-400">'gpl'</span><span class="text-gray-300">,</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">height</span><span class="text-gray-300">: </span><span
                        class="text-orange-400">300</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SINGLE, CLEAN SCRIPT TAG -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');

                // Update button states
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });

                // Set active button
                button.classList.remove('border-transparent', 'text-gray-500');
                button.classList.add('border-blue-600', 'text-blue-600');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab
                const targetTab = document.getElementById(`${tabId}-tab`);
                if (targetTab) {
                    targetTab.classList.remove('hidden');
                }
            });
        });

        // Initialize first tab as active
        const defaultTab = document.querySelector('[data-tab="editflo"]');
        if (defaultTab) {
            defaultTab.click();
        }
    });
</script>