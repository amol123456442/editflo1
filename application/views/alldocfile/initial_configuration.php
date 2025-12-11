<div class="mx-auto min-h-screen px-4 sm:px-6 lg:px-4">
    <!-- Header Section -->
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Initial Configuration</h1>
        <p class="text-gray-600 text-sm sm:text-base">Configure Editflo editor for your specific needs. This section covers all initial setup options.</p>
    </div>

    <!-- Configuration Options Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mb-8">
        <!-- Integration Options Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                    <i class="fas fa-plug text-blue-600"></i>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">Integration Options</h3>
                    <p class="text-gray-600 text-sm">Key editor options for integrating TinyMCE to an application.</p>
                </div>
            </div>
            <a href="<?php echo base_url('documentation/initial-configuration/integration-options'); ?>"
                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm sm:text-base">
                View Integration Options
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Size Configuration Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                    <i class="fas fa-expand-alt text-green-600"></i>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">Size Configuration</h3>
                    <p class="text-gray-600 text-sm">Editor size and resize options for setting the size of the editor and controlling editor resizing.</p>
                </div>
            </div>
            <a href="<?php echo base_url('documentation/initial-configuration/size'); ?>"
                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm sm:text-base">
                View Size Options
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Save and Submit Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                    <i class="fas fa-save text-purple-600"></i>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">Save and Submit</h3>
                    <p class="text-gray-600 text-sm">Editor options related to saving or submitting editor content.</p>
                </div>
            </div>
            <a href="<?php echo base_url('documentation/initial-configuration/save-submit'); ?>"
                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm sm:text-base">
                View Save Options
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Promotions Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow">
            <div class="flex items-start mb-4">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                    <i class="fas fa-gem text-yellow-600"></i>
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">Promotions</h3>
                    <p class="text-gray-600 text-sm">Editor options related to turning the Premium promotion display off.</p>
                </div>
            </div>
            <a href="<?php echo base_url('documentation/initial-configuration/promotions'); ?>"
                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm sm:text-base">
                View Promotion Options
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>

    <!-- Quick Start Guide -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border border-blue-200 p-4 sm:p-6 mb-8">
        <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3">Quick Start Guide</h3>
        <p class="text-gray-700 mb-4 text-sm sm:text-base">Get started with Editflo configuration in minutes. Follow these simple steps:</p>
        <ol class="list-decimal pl-5 space-y-2 text-gray-700 text-sm sm:text-base">
            <li>Choose your integration method based on your tech stack</li>
            <li>Configure the editor size to match your layout requirements</li>
            <li>Set up save and submit handlers for your application</li>
            <li>Customize promotion settings as needed</li>
        </ol>
    </div>

    <!-- Additional Resources -->
    <div class="bg-gray-50 rounded-lg border border-gray-200 p-4 sm:p-6">
        <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3">Additional Resources</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="<?php echo base_url('documentation/getting-started'); ?>"
                class="flex items-center p-3 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-sm transition-all">
                <i class="fas fa-rocket text-blue-500 mr-3"></i>
                <span class="text-gray-800 font-medium">Getting Started Guide</span>
            </a>
            <a href="<?php echo base_url('documentation/examples'); ?>"
                class="flex items-center p-3 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-sm transition-all">
                <i class="fas fa-laptop-code text-green-500 mr-3"></i>
                <span class="text-gray-800 font-medium">Live Examples</span>
            </a>
            <a href="<?php echo base_url('documentation/api'); ?>"
                class="flex items-center p-3 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-sm transition-all">
                <i class="fas fa-code text-purple-500 mr-3"></i>
                <span class="text-gray-800 font-medium">API Reference</span>
            </a>
            <a href="<?php echo base_url('documentation/integration'); ?>"
                class="flex items-center p-3 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-sm transition-all">
                <i class="fas fa-plug text-orange-500 mr-3"></i>
                <span class="text-gray-800 font-medium">Advanced Integration</span>
            </a>
        </div>
    </div>
</div>