<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Distraction-free editor example
        </h1>
    </div>

    <p class="p-2 text-gray-700 text-sm sm:text-base">Adding this content to an HTML file and opening it in a web browser will load a Editflo
        editor.</p>

    <!-- Interactive Integration Example Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Interactive integration example</h2>
        <h3 class="text-xl font-semibold text-gray-700 text-sm sm:text-base mb-4">Multi-root editing and document template creation</h3>

        <p class="text-gray-700 text-sm sm:text-base mb-6">
            This interactive example demonstrates a basic working example of Editflo being used as a reusable template creator and editor.
        </p>

        <p class="text-gray-700 text-sm sm:text-base mb-6">
            It includes numerous plugins and configuration settings but highlights the following Editflo plugins and configuration options in particular:
        </p>

        <div class="space-y-6">
            <!-- Merge Tags Section -->
            <div class="border-l-4 border-blue-500 pl-4">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Merge Tags</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Allows the insertion of merge tags (also known as personalization tokens, or mail merge fields).
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This demo includes merge tag placeholder examples in the demonstration document and equivalent merge tag placeholder strings available for adding to the editable portions of the document.
                </p>
                <p class="text-gray-700 text-sm sm:text-base">
                    These placeholders are not, in this demonstration, connected to any logic that merges them with a specific data set.
                </p>
            </div>

            <!-- Editable Root Section -->
            <div class="border-l-4 border-green-500 pl-4">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">editable_root</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Sets the initial editable state of a Editflo instance's root.
                </p>
                <p class="text-gray-700 text-sm sm:text-base">
                    Used here to show a Editflo being used to present an almost-ready-to-send-out standard document that cannot, in the main, be changed by an end-user.
                </p>
            </div>

            <!-- New Document Content Section -->
            <div class="border-l-4 border-purple-500 pl-4">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">newdocument_content</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Sets the content a new editor contains when the File -> New document menu item is invoked.
                </p>
                <p class="text-gray-700 text-sm sm:text-base">
                    Used here to show a Editflo instance loading an entire almost-ready-to-send-out standard document.
                </p>
            </div>

            <!-- Editable Class Section -->
            <div class="border-l-4 border-orange-500 pl-4">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">editable_class</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Specifies the class name that Editflo will use to determine which areas of content are editable.
                </p>
                <p class="text-gray-700 text-sm sm:text-base">
                    Used here to setup the portions of an almost-ready-to-send-out standard document that end-users can (and should) edit.
                </p>
            </div>
        </div>

        <div class="mt-6 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200 shadow-sm">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-lg font-semibold text-blue-800 mb-2">Important Note</p>
                    <p class="text-blue-700">
                        Refer to <span class="font-medium text-blue-900">Non-editable content options</span> for more detailed noneditable configuration information and advanced customization possibilities.
                    </p>
                    <div class="mt-3 flex items-center text-sm text-blue-600">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span>See documentation for complete reference</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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