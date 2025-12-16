<div class="mx-auto min-h-screen px-4">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Full featured demo: Non-Premium Plugins only</h1>
        <p class="text-lg text-gray-600">This example includes only non-premium plugins. These plugins are also used in the <a href="" class="text-blue-500">Full featured demo: Including Premium Plugins</a>.</p>
    </div>
    <!-- Introduction Section -->
    <!-- <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <p class="text-gray-700 mb-6">
            This example contains the plugins needed for the most common use cases.
        </p>
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

                <button type="button"
                    class="text-white bg-[#0f1419] hover:bg-[#0f1419]/90 focus:ring-4 focus:outline-none focus:ring-[#0f1419]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-[#24292F] dark:focus:ring-[#24292F]/55">
                    <i class="fa-brands fa-github mr-2"></i>
                    Sign in with Github
                </button>
            </div>
        </div>
    </div> -->


    <p class="p-2 text-gray-700">Adding this content to an HTML file and opening it in a web browser will load a Editflo
        editor.</p>

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
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium"
                    data-tab="html">
                    HTML
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium"
                    data-tab="js">
                    JS
                </button>
            </div>
        </div>
        <!-- Tab Content -->
        <div class="p-6">
            <!-- Editflo Tab (Main Preview) -->
            <div id="editflo-tab" class="tab-content">
                <img src="http://localhost/editflo/assets/image.png" class="w-full max-w-4xl mx-auto rounded-lg shadow-sm"
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

    <!-- Save Content Section -->
 <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8 shadow-sm">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Excluded plugins</h2>

    <div class="space-y-4">
        <!-- Row 1 -->
        <div class="flex flex-col sm:flex-row sm:items-start gap-3 sm:gap-6 pb-4 border-b border-gray-200 last:border-0">
            <div class="sm:w-1/3">
                <a href="<?php echo base_url('documentation/plugins/autoresize'); ?>" 
                   class="text-blue-600 hover:text-blue-800 font-medium underline-offset-2 hover:underline transition-colors">
                    Autoresize
                </a>
            </div>
            <div class="sm:w-2/3 text-gray-600 text-sm sm:text-base">
                Resizes the editor to fit the content.
            </div>
        </div>

        <!-- Row 2 -->
        <div class="flex flex-col sm:flex-row sm:items-start gap-3 sm:gap-6 pb-4 border-b border-gray-200 last:border-0">
            <div class="sm:w-1/3">
                <a href="<?php echo base_url('documentation/plugins/code'); ?>" 
                   class="text-blue-600 hover:text-blue-800 font-medium underline-offset-2 hover:underline transition-colors">
                    Code
                </a>
            </div>
            <div class="sm:w-2/3 text-gray-600 text-sm sm:text-base">
                Enhanced Code Editor included instead.
            </div>
        </div>

        <!-- Row 3 -->
        <div class="flex flex-col sm:flex-row sm:items-start gap-3 sm:gap-6 pb-4 border-b border-gray-200 last:border-0">
            <div class="sm:w-1/3">
                <a href="<?php echo base_url('documentation/plugins/image-edit'); ?>" 
                   class="text-blue-600 hover:text-blue-800 font-medium underline-offset-2 hover:underline transition-colors">
                    Image & Edit Image
                </a>
            </div>
            <div class="sm:w-2/3 text-gray-600 text-sm sm:text-base">
                Media Optimizer included instead.
            </div>
        </div>

        <!-- Row 4 -->
        <div class="flex flex-col sm:flex-row sm:items-start gap-3 sm:gap-6 pb-4 border-b border-gray-200 last:border-0">
            <div class="sm:w-1/3">
                <a href="<?php echo base_url('documentation/plugins/editflo-drive'); ?>" 
                   class="text-blue-600 hover:text-blue-800 font-medium underline-offset-2 hover:underline transition-colors">
                    editflo Drive
                </a>
            </div>
            <div class="sm:w-2/3 text-gray-600 text-sm sm:text-base">
                Media Optimizer included instead.
            </div>
        </div>

        <!-- Add more rows as needed -->
    </div>
</div>

    <!-- Next Steps Section -->

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