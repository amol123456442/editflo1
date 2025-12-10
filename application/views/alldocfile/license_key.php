<div class="mx-auto min-h-screen">

    <!-- Main Title -->
    <div class="mb-6 sm:mb-8 md:mb-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">License Key</h1>
    </div>

    <!-- Overview Section -->
    <section class="mb-8 sm:mb-10 md:mb-12">
        <h2 class="text-lg font-bold text-gray-800 mb-2">Overview</h2>
        <p class="text-gray-700 text-sm sm:text-base md:text-lg mb-6">
            Editflo 8 uses an enhanced license key system to ensure compliance with Editflo licensing terms.
        </p>

        <div class="bg-red-50 border-l-4 border-red-500 p-4 sm:p-5 md:p-6 rounded-lg mb-6">
            <div class="flex flex-col sm:flex-row sm:items-start">
                <div class="flex-shrink-0 mb-3 sm:mb-0 sm:mr-4">
                    <div class="h-10 w-10 sm:h-12 sm:w-12 bg-red-100 rounded-full flex items-center justify-center">
                        <span class="text-red-600 font-bold text-lg">!</span>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 mb-3">Important</h3>
                    <div class="space-y-3 text-gray-700 text-sm sm:text-base">
                        <p>Editflo is licensed under the GNU General Public License Version 2 or later. A configuration option called <code class="bg-gray-100 px-1.5 py-0.5 rounded text-red-600 font-mono text-sm">'license_key'</code> introduced in Editflo 7 requires developers to make a conscious decision to use Editflo with the GPLv2+ license or with a commercial license.</p>
                        <p>When using Editflo 8 in a self-hosted environment, a license key must be provided and it must be valid. Otherwise, the editor will be disabled. A license key is not required when loading Editflo from Tiny Cloud, as it is already under a commercial license.</p>
                        <p>In addition, when using Editflo 8 in a self-hosted environment for commercial use, a commercial license key manager addon is required in order for the editor to operate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Setting the License Section -->
    <section class="mb-8 sm:mb-10 md:mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Setting the License</h2>

        <!-- GPL License -->
        <div class="mb-8 sm:mb-10">
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-4">Use Editflo with the GPLv2+ license</h3>
            <p class="text-gray-700 text-sm sm:text-base mb-4">
                If the developer intends to self-host Editflo under the GPL license and agree to its terms, they can set the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono">license_key</code> config option to 'gpl'. Case sensitivity does not matter.
            </p>
            <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-5 rounded-lg overflow-x-auto">
                <pre class="text-xs sm:text-sm md:text-base font-mono">
                <span class="text-purple-400">Editflo </span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">license_key</span><span class="text-gray-300">: </span><span class="text-green-400">'gpl'</span><span class="text-gray-300">,</span>
                <span class="text-gray-300">});</span></pre>
            </div>
        </div>

        <!-- Commercial License -->
        <div class="mb-8 sm:mb-10">
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-4">Use Editflo with a commercial license</h3>
            <p class="text-gray-700 text-sm sm:text-base mb-4">
                If the developer intends to self-host Editflo under a commercial license, a valid license key must be provided. Customers who have purchased a self-hosted-eligible license for Editflo will find their license key in the <a href="https://www.tiny.cloud/auth/login/" class="text-blue-600 hover:text-blue-800 underline">account portal</a>. To purchase a commercial license, see available options on the <a href="https://www.tiny.cloud/pricing/" class="text-blue-600 hover:text-blue-800 underline">pricing page</a>.
            </p>
            <p class="text-gray-700 text-sm sm:text-base mb-4">
                The Editflo 8 commercial license key will have a <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono">T8LK:</code> prefix.
            </p>
            <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-5 rounded-lg overflow-x-auto">
                <pre class="text-xs sm:text-sm md:text-base font-mono">
                <span class="text-purple-400">Editflo </span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span>
                <span class="text-gray-300 ml-4"></span><span class="text-blue-400">license_key</span><span class="text-gray-300">: </span><span class="text-green-400">'T8LK:...'</span><span class="text-gray-300">,</span>
                <span class="text-gray-300">});</span></pre>
            </div>
        </div>

        <!-- GPL with Premium Features -->
        <div class="mb-8 sm:mb-10">
            <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-4">Use Editflo under GPL with Premium Features</h3>
            <p class="text-gray-700 text-sm sm:text-base mb-4"></p>
            <p class="text-gray-700 text-sm sm:text-base mb-4">
                If the developer intends to self-host the Editflo editor under the GPL license and agree to its terms, whilst also self-hosting premium features, a valid license key must be provided. Customers who have purchased a self-hosted-eligible license for Editflo will find their license key in the <a href="https://www.tiny.cloud/auth/login/" class="text-blue-600 hover:text-blue-800 underline">account portal</a>. To purchase a commercial license, see available options on the <a href="https://www.tiny.cloud/pricing/" class="text-blue-600 hover:text-blue-800 underline">pricing page</a>.
            </p>
            <p class="text-gray-700 text-sm sm:text-base mb-4">
                This type of license key is specifically for open source projects that need premium features while maintaining GPL compliance.
            </p>
            <p class="text-gray-700 text-sm sm:text-base mb-4">
                The Editflo 8 commercial license key will have a <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono">GPL+T8LK:</code> prefix.
            </p>
            <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-5 rounded-lg overflow-x-auto">
                <pre class="text-xs sm:text-sm md:text-base font-mono">
            <span class="text-purple-400">Editflo </span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span>
            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">license_key</span><span class="text-gray-300">: </span><span class="text-green-400">'GPL+T8LK:...'</span><span class="text-gray-300">,</span>
            <span class="text-gray-300">});</span></pre>
            </div>
        </div>
    </section>
    <!-- License Key Manager Section - Fixed Version -->
    <section class="mb-8 sm:mb-10 md:mb-12">
        <h3 class="text-2xl font-bold text-gray-800 mb-2">Setting up the Commercial License Key Manager</h3>

        <!-- Note Box - Improved for mobile -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-3 sm:p-4 md:p-6 rounded-lg mb-4 sm:mb-6">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3 sm:mr-4">
                    <div class="h-8 w-8 sm:h-10 sm:w-10 md:h-12 md:w-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-blue-600 font-bold text-base sm:text-lg md:text-xl">i</span>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-base sm:text-lg md:text-xl font-bold text-gray-800 mb-2 sm:mb-3">Note</h3>
                    <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                        <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">'licensekeymanager'</code> does not need to be added to the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">plugins</code> configuration option.
                    </p>
                </div>
            </div>
        </div>

        <p class="text-gray-700 text-sm sm:text-base mb-3 sm:mb-4 leading-relaxed">
            A commercial license key manager (<code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code>) is required to be loaded by the editor when using a commercial license key. The commercial license key manager can be set up like any other plugin for self-hosted installations. However, it does not need to be specified in the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">plugins</code> configuration option as the editor will attempt to automatically load the license key manager when required.
        </p>

        <p class="text-gray-700 text-sm sm:text-base mb-3 sm:mb-4 leading-relaxed">
            The commercial license key manager is available:
        </p>

        <ul class="list-disc pl-4 sm:pl-5 space-y-2 mb-4 sm:mb-5">
            <li class="text-sm sm:text-base text-gray-700 leading-relaxed">
                <span class="font-medium">In a purchased self-hosted plan</span> - a <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code> folder will be present in the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">plugins</code> folder of the Editflo <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">.zip</code>.
            </li>
            <li class="text-sm sm:text-base text-gray-700 leading-relaxed">
                <span class="font-medium">In a purchased self-hosted addon</span> - a <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code> folder will be present in addition to the purchased addon.
            </li>
            <li class="text-sm sm:text-base text-gray-700 leading-relaxed">
                <span class="font-medium">As a standalone addon</span> - a <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code> folder will be present.
            </li>
            <li class="text-sm sm:text-base text-gray-700 leading-relaxed">
                <span class="font-medium">In the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo -premium</code> NPM package</span> - the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code> plugin is included in the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo -premium</code> package.
            </li>
        </ul>

        <!-- Important Box - Improved for mobile -->
        <div class="bg-red-50 border-l-4 border-red-500 p-3 sm:p-4 md:p-6 rounded-lg mb-4">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3 sm:mr-4">
                    <div class="h-8 w-8 sm:h-10 sm:w-10 md:h-12 md:w-12 bg-red-100 rounded-full flex items-center justify-center">
                        <span class="text-red-600 font-bold text-base sm:text-lg md:text-xl">!</span>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="text-base sm:text-lg md:text-xl font-bold text-gray-800 mb-2 sm:mb-3">Important</h3>
                    <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                        The following setup steps are required for the editor to function with commercial license keys. The editor will not work without proper license key manager configuration.
                    </p>
                </div>
            </div>
        </div>

        <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 mb-4 sm:mb-6">Considerations when hosting vs bundling</h2>

        <ul class="list-disc pl-4 sm:pl-5 space-y-2 mb-4 sm:mb-5">
            <li class="text-sm sm:text-base text-gray-700 leading-relaxed">
                <span class="font-medium">If hosting Editflo standalone</span>, for example, in a <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">/public</code> folder, ensure the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code> folder is included in the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">plugins</code> folder with all of the other plugins. The editor will not function without this.
            </li>
            <li class="text-sm sm:text-base text-gray-700 leading-relaxed">
                <span class="font-medium">If bundling Editflo as part of an application</span> ensure the <code class="bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager/index.js</code> file is imported, otherwise the editor will not function without this.
            </li>
        </ul>

        <div class="space-y-4 sm:space-y-5 md:space-y-6">
            <!-- Code Snippet 1 - Fixed -->
            <div>
                <p class="text-gray-700 text-sm sm:text-base mb-2 leading-relaxed">
                    When using the <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo </code> NPM package with premium plugins from ZIP:
                </p>
                <div class="bg-black border border-gray-700 p-3 sm:p-4 rounded-lg overflow-x-auto">
                    <code class="text-xs sm:text-sm font-mono whitespace-pre-wrap break-words text-blue-400">
                        import 'Editflo/plugins/licensekeymanager';
                    </code>
                </div>
            </div>

            <!-- Code Snippet 2 - Fixed -->
            <div class="bg-black border border-gray-700 p-3 sm:p-4 rounded-lg overflow-x-auto">
                <code class="text-xs sm:text-sm font-mono whitespace-pre-wrap break-words text-blue-400">
                    import 'Editflo/plugins-pro/licensekeymanager';
                </code>
            </div>
            <!-- Code Snippet 2 - Fixed -->
            <div>
                <p class="text-gray-700 text-sm sm:text-base mb-2 leading-relaxed">
                    When using the <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo -premium</code> NPM package (recommended):
                </p>
                <div class="bg-gray-100 border border-gray-300 p-3 sm:p-4 rounded-lg overflow-x-auto">
                    <code class="text-xs sm:text-sm font-mono whitespace-pre-wrap break-words">
                        import 'Editflo -premium/plugins/licensekeymanager';
                    </code>
                </div>
            </div>

            <!-- Code Snippet 3 - Fixed -->
            <div>
                <p class="text-gray-700 text-sm sm:text-base mb-2 leading-relaxed">
                    When using <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">external_plugins</code> to load the license key manager from a custom location:
                </p>
                <div class="bg-gray-900 text-gray-100 p-3 sm:p-4 md:p-5 rounded-lg overflow-x-auto">
                    <pre class="font-mono text-xs sm:text-sm md:text-base whitespace-pre-wrap break-all leading-relaxed"><span class="text-purple-400">Editflo </span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span>
  <span class="text-blue-400">selector</span><span class="text-gray-300">:</span> <span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span>
  <span class="text-blue-400">external_plugins</span><span class="text-gray-300">:</span> <span class="text-green-400">{</span>
    <span class="text-blue-400">'licensekeymanager'</span><span class="text-gray-300">:</span> <span class="text-green-400">'&lt;path_to_premium_plugins&gt;/licensekeymanager/plugin.min.js'</span>
  <span class="text-green-400">}</span><span class="text-gray-300">,</span>
  <span class="text-green-400">// ... other configuration</span>
<span class="text-gray-300">});</span></pre>
                </div>
            </div>

            <!-- Note Box at bottom - Improved -->
            <div class="bg-blue-50 border-l-4 border-blue-600 p-3 sm:p-4 md:p-6 rounded-r-lg">
                <div class="flex items-start">

                    <div class="flex-1 min-w-0">
                        <p class="text-base sm:text-lg md:text-xl font-bold text-gray-800 leading-snug mb-2 sm:mb-3">
                            Note
                        </p>
                        <ul class="text-gray-700 text-sm sm:text-base list-disc pl-4 sm:pl-5 space-y-1 sm:space-y-2">
                            <li class="leading-relaxed">
                                The <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">licensekeymanager</code> plugin is included in the <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo -premium</code> package.
                            </li>
                            <li class="leading-relaxed">
                                The <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo -premium</code> package version must match the <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">Editflo </code> package version (e.g., both at 8.3.0).
                            </li>
                            <li class="leading-relaxed">
                                The <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">external_plugins</code> option allows loading the license key manager from any location, useful when bundling is not available or when lazy-loading plugins. For more information, see: <code class="bg-gray-100 px-1 py-0.5 rounded font-mono text-xs sm:text-sm">external_plugins</code> <a href="https://www.tiny.cloud/docs/Editflo /latest/editor-important-options/#external_plugins" class="text-blue-600 hover:text-blue-800 underline break-words">configuration option</a>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- License Types Tables - Improved Version -->
    <section class="mb-8 sm:mb-10 md:mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">License Types and Deployment Options</h2>

        <!-- License Key Types Table -->
        <div class="mb-8 sm:mb-10">
            <h2 class="text-gray-600 mb-4 text-2xl">License Key Types</h2>

            <div class="md:hidden space-y-4">
                <!-- Mobile Card View -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <h4 class="font-semibold text-gray-800 mb-2">Time-based Keys</h4>
                    <div class="text-xs text-gray-500 mb-3">Expires after set period</div>

                    <div class="space-y-3">
                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-1">Key Features</h5>
                            <ul class="list-disc pl-4 space-y-1 text-sm text-gray-700">
                                <li>Expiry date</li>
                                <li>Optional grace period</li>
                                <li>Premium plugin access</li>
                                <li>No patch version locking</li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-1">Best For</h5>
                            <ul class="list-disc pl-4 space-y-1 text-sm text-gray-700">
                                <li>Developers that can perform regular license rotation</li>
                                <li>Developers that want a license key to work across patch versions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <h4 class="font-semibold text-gray-800 mb-2">Version-locked Keys</h4>
                    <div class="text-xs text-gray-500 mb-3">Locked to specific version</div>

                    <div class="space-y-3">
                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-1">Key Features</h5>
                            <ul class="list-disc pl-4 space-y-1 text-sm text-gray-700">
                                <li>Specific patch version only</li>
                                <li>No expiration date</li>
                                <li>Premium plugin access</li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-1">Best For</h5>
                            <ul class="list-disc pl-4 space-y-1 text-sm text-gray-700">
                                <li>Environments where regular license key rotation cannot be performed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Table -->
            <div class="hidden md:block overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- Your existing desktop table -->
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mb-8 sm:mb-10 md:mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-5">Frequently Asked Questions</h2>

        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">What does the GPL license mean?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    Editflo 8 is licensed under the GNU General Public License Version 2 or later, often abbreviated to GPLv2+. <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.html" class="text-blue-600 hover:text-blue-800 underline">Read more about the license terms here</a>.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mt-2">
                    The GPLv2+ license was chosen to provide the best compatibility with existing GPL licensed open source projects.
                </p>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">What is the difference between a license key and the API key</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The API key is used when loading Editflo from the Tiny Cloud. The license key is used to declare the license terms when self-hosting Editflo .
                </p>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Who needs to get a license key?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    Anyone who intends to self-host Editflo will need to obtain a T8LK-prefixed commercial license key or use GPL mode.
                </p>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">How will I know if this change affects me?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    If Editflo detects that the <code class="bg-gray-100 px-1 py-0.5 rounded border">license_key</code> configuration is missing or invalid, it will display a console log warning message and/or editor notification and set the editor to disabled. These warnings and restrictions are designed to ensure compliance and provide transparency during evaluation periods.
                </p>
            </div>

            <!-- Tip Box -->
            <div class="bg-blue-100 border border-blue-200 p-4 md:p-6 rounded-lg">
                <div class="flex items-start">
                    <svg class="h-5 w-5 sm:h-6 sm:w-6 text-blue-600 mt-0.5 mr-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                    <div>
                        <p class="font-bold text-blue-800 text-sm sm:text-base">Tip</p>
                        <p class="text-gray-700 text-sm sm:text-base">
                            If you have actively suppressed or hidden these messages, please remove those overrides to maintain proper license validation. If no notification appears, you are not affected.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Should I be using both an API key and a license key?</h3>
                <p class="text-gray-700 text-sm sm:text-base mb-4">
                    See the Deployment Types section above for more information.
                </p>
            </div>

            <!-- Important Box -->
            <div class="bg-red-50 border-l-4 border-red-600 p-4 md:p-6 rounded-r-lg">
                <div class="flex flex-col sm:flex-row sm:items-start">
                    <div class="flex-shrink-0 mr-3 mb-3 sm:mb-0">
                        <svg class="h-6 w-6 sm:h-8 sm:w-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.104 0 2.228.423 2.964 1.185.34.34.673.693.992 1.077l.617.733c.099.117.159.261.159.408 0 .428-.415.75-.769.75h-.375a.75.75 0 01-.75-.75c0-.128.05-.251.139-.364l.582-.694c.365-.434.618-.844.755-1.127A2.839 2.839 0 0012.001 10.5c-1.287 0-2.348.802-2.73 1.956.17-.058.342-.103.516-.134l.288-.052c1.232-.224 2.26.046 2.652.541a.75.75 0 01-1.092.932l-.234-.278c-.287-.34-.732-.489-1.258-.489-.553 0-1.075.244-1.424.636-.35.392-.533.882-.533 1.488 0 .584.182 1.066.533 1.488.35.422.871.666 1.424.666.526 0 .971-.149 1.258-.489l.234-.278a.75.75 0 011.092.932c-.392.495-1.42.765-2.652.541l-.288-.052c-.174-.031-.346-.076-.516-.134-.382 1.154-1.443 1.956-2.73 1.956-1.504 0-2.724-1.22-2.724-2.724s1.22-2.724 2.724-2.724zM12 8.25a.75.75 0 01.75.75v3a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 leading-snug mb-2 md:mb-4">
                            Important
                        </p>
                        <p class="text-gray-700 text-sm sm:text-base">
                            Only use both keys in properly configured hybrid deployments. Using both keys without proper hybrid deployment configuration may cause validation conflicts and unexpected behavior.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Will Editflo "phone home" to check the license key?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    No, Editflo does not contact any server to validate the license key for self-hosted deployments.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mt-2">
                    If using a cloud or hybrid deployment configuration, the license key may be checked by Tiny Cloud.
                </p>
            </div>

            <!-- FAQ Item 7 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">What happens if I don't provide a valid license key?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    In addition to the editor being disabled, a console log warning message and/or editor notification will persist until a valid license key or 'gpl' is provided.
                </p>
            </div>

            <!-- FAQ Item 8 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Why is a license key required?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The license key ensures compliance with Editflo licensing terms. It's part of our efforts to refine the license key system and may have additional functionalities in the future.
                </p>
            </div>

            <!-- FAQ Item 9 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">How do I obtain a Editflo 8 license key?</h3>
                <p class="text-gray-700 text-sm sm:text-base mb-2">
                    To obtain a new Editflo 8 license key (T8LK-prefixed):
                </p>
                <ul class="text-gray-700 text-sm sm:text-base list-disc pl-5 space-y-1">
                    <li>Existing customers: Contact your account manager or <a href="https://www.tiny.cloud/my-account/" class="text-blue-600 hover:text-blue-800 underline">visit Tiny Cloud Account</a> to upgrade your subscription.</li>
                    <li>New customers: Visit <a href="https://www.tiny.cloud/pricing/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Pricing</a> to purchase a new license.</li>
                </ul>
            </div>

            <!-- Important Box 2 -->
            <div class="bg-red-50 border-l-4 border-red-600 p-4 md:p-6 rounded-r-lg">
                <div class="flex flex-col sm:flex-row sm:items-start">
                    <div class="flex-shrink-0 mr-3 mb-3 sm:mb-0">
                        <svg class="h-6 w-6 sm:h-8 sm:w-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.104 0 2.228.423 2.964 1.185.34.34.673.693.992 1.077l.617.733c.099.117.159.261.159.408 0 .428-.415.75-.769.75h-.375a.75.75 0 01-.75-.75c0-.128.05-.251.139-.364l.582-.694c.365-.434.618-.844.755-1.127A2.839 2.839 0 0012.001 10.5c-1.287 0-2.348.802-2.73 1.956.17-.058.342-.103.516-.134l.288-.052c1.232-.224 2.26.046 2.652.541a.75.75 0 01-1.092.932l-.234-.278c-.287-.34-.732-.489-1.258-.489-.553 0-1.075.244-1.424.636-.35.392-.533.882-.533 1.488 0 .584.182 1.066.533 1.488.35.422.871.666 1.424.666.526 0 .971-.149 1.258-.489l.234-.278a.75.75 0 011.092.932c-.392.495-1.42.765-2.652.541l-.288-.052c-.174-.031-.346-.076-.516-.134-.382 1.154-1.443 1.956-2.73 1.956-1.504 0-2.724-1.22-2.724-2.724s1.22-2.724 2.724-2.724zM12 8.25a.75.75 0 01.75.75v3a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 leading-snug mb-2 md:mb-4">
                            Important
                        </p>
                        <p class="text-gray-700 text-sm sm:text-base">
                            Existing Editflo 7 license keys cannot be modified to work with Editflo 8 by adding the T8LK prefix. A new Editflo 8 license must be obtained through the proper channels listed above.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">When upgrading from Editflo 7, what is the process for obtaining a Editflo 8 license key?</h3>
                <p class="text-gray-700 text-sm sm:text-base mb-2">
                    If you are using Tiny Cloud (cloud-hosted):
                </p>
                <ul class="text-gray-700 text-sm sm:text-base mb-4 list-disc pl-5 space-y-1">
                    <li>No license key is required - simply update your Editflo version as your cloud subscription includes the commercial license.</li>
                </ul>

                <p class="text-gray-700 text-sm sm:text-base mb-2">
                    If you are an existing Editflo 7 self-hosted customer upgrading to Editflo 8:
                </p>
                <ol class="text-gray-700 text-sm sm:text-base mb-4 list-decimal pl-5 space-y-2">
                    <li>Active Subscription:
                        <ul class="text-gray-700 text-sm sm:text-base list-disc pl-5 mt-1 space-y-1">
                            <li>Contact your account manager or visit <a href="http://tiny.cloud/my-account/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> to obtain a new T8LK-prefixed license key.</li>
                        </ul>
                    </li>
                    <li>Expired Subscription:
                        <ul class="text-gray-700 text-sm sm:text-base list-disc pl-5 mt-1 space-y-1">
                            <li>Contact your account manager or visit <a href="https://www.tiny.cloud/pricing/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Pricing</a> to renew your subscription.</li>
                            <li>A new T8LK-prefixed license key will be provided as part of the renewal process.</li>
                        </ul>
                    </li>
                </ol>

                <!-- Note Box -->
                <div class="bg-blue-50 border-l-4 border-blue-600 p-4 md:p-6 rounded-r-lg mt-5">
                    <div class="flex flex-col sm:flex-row sm:items-start">
                        <div class="flex-shrink-0 mr-3 mb-3 sm:mb-0">
                            <svg class="h-6 w-6 sm:h-8 sm:w-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.815a.75.75 0 01.725 1.066l-2.5 5a.75.75 0 01-1.458-.328L13 14.25H9.75c-.382 0-.693-.284-.741-.65l-.478-3.093c-.042-.27-.29-.462-.576-.462H7.5a.75.75 0 010-1.5h1.28l.21-1.365a.75.75 0 011.458.328l-1.373 5.487h1.611l.244-1.583c.045-.29.303-.501.603-.501h3.333a.75.75 0 01.725.568z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 leading-snug mb-2 md:mb-4">
                                Note
                            </p>
                            <p class="text-gray-700 text-sm sm:text-base">
                                Your existing Editflo 7 license key will continue to work with Editflo 7 self-hosted installations. But, you will require a separate T8LK-prefixed license key for Editflo 8 editor instances for self-hosted installations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 11 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">How can I get further assistance?</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    For any licensing or technical support questions, see our available options on the <a href="https://www.tiny.cloud/docs/Editflo /latest/support/" class="text-blue-600 hover:text-blue-800 underline">support page</a>.
                </p>
            </div>

            <!-- FAQ Item 12 -->
            <div class="bg-white border border-gray-200 p-5 sm:p-6 rounded-lg shadow-sm">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Technical Support</h3>
                <p class="text-gray-700 text-sm sm:text-base mb-2">
                    For licensing or technical support:
                </p>
                <ul class="text-gray-700 text-sm sm:text-base list-disc pl-5 space-y-1">
                    <li>API key issues: Visit <a href="https://www.tiny.cloud/auth/login?redirect_to=%2Fmy-account%2Fintegrate" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a></li>
                    <li>License key issues: Visit <a href="http://tiny.cloud/auth/login?redirect_to=%2Fmy-account%2Fintegrate" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> or contact your account manager</li>
                    <li>Technical support: Visit <a href="https://support.tiny.cloud/hc/en-us" class="text-blue-600 hover:text-blue-800 underline">Support Portal</a></li>
                    <li>Documentation: See <a href="https://www.tiny.cloud/docs/Editflo /latest/" class="text-blue-600 hover:text-blue-800 underline">Editflo Docs</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Error Messages Table - Mobile Friendly Version -->
    <section class="mb-8 md:mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">License Key Error Messages</h2>
        <p class="text-gray-700 text-sm sm:text-base mb-6">
            The following table lists common license key error messages that may appear in the console or editor, along with their descriptions and solutions:
        </p>

        <!-- Desktop Table (hidden on mobile) -->
        <div class="hidden md:block overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
            <!-- Keep your existing desktop table here -->
            <table class="min-w-full divide-y divide-gray-200">
                <!-- ... existing desktop table content ... -->
            </table>
        </div>

        <!-- Mobile Cards (shown only on mobile) -->
        <div class="md:hidden space-y-6">
            <!-- Card 1: Invalid license key -->
            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                <h3 class="font-semibold text-gray-800 mb-3 flex items-center">
                    <span class="text-blue-600 mr-2">•</span>
                    Invalid license key (General)
                </h3>

                <div class="space-y-3">
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-1">Console Message</h4>
                        <div class="bg-gray-50 p-3 rounded border border-gray-200 font-mono text-xs">
                            The editor is disabled because<br>the license key provided is invalid
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-1">Editor Notification</h4>
                        <div class="bg-red-50 p-3 rounded border border-red-100 text-sm">
                            The editor is disabled because<br>the license key provided is invalid.
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-1">Solution</h4>
                        <ul class="list-disc pl-4 space-y-1 text-gray-700 text-sm">
                            <li>Verify that the license key is correctly copied</li>
                            <li>Ensure there are no extra spaces or characters</li>
                            <li>Check deployment type (Cloud vs Self-hosted)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2: Load error (Cloud) -->
            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                <h3 class="font-semibold text-gray-800 mb-3 flex items-center">
                    <span class="text-blue-600 mr-2">•</span>
                    Load error (Cloud)
                </h3>

                <div class="space-y-3">
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-1">Console Message</h4>
                        <div class="bg-gray-50 p-3 rounded border border-gray-200 font-mono text-xs">
                            The editor is disabled because the Editflo API key could not be validated.
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-1">Solution</h4>
                        <ul class="list-disc pl-4 space-y-1 text-gray-700 text-sm">
                            <li>Verify that your API key is valid</li>
                            <li>Check if your subscription is active</li>
                            <li>Visit the Support Portal if issue persists</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Add more cards for other error types similarly -->
        </div>

        <!-- Mobile responsive note -->
        <div class="mt-4 md:hidden">
            <div class="bg-blue-50 border border-blue-200 p-3 rounded-lg">
                <div class="flex items-start">
                    <svg class="h-5 w-5 text-blue-600 mt-0.5 mr-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                    <p class="text-sm text-gray-700">
                        <span class="font-medium text-blue-800">Tip:</span> On desktop view, you can see all error types in a table format.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Error Descriptions -->
    <section class="mb-8 md:mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Detailed Error Descriptions</h2>

        <div class="space-y-6 md:space-y-8">
            <!-- Invalid license key -->
            <div id="invalid-license-key">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Invalid license key (General)</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The provided license key is not recognized as a valid Editflo license key. This can occur if the key is malformed, expired, or doesn't match your deployment type. For self-hosted installations, ensure you're using a valid T8LK-prefixed license key. Visit the <a href="https://www.tiny.cloud/auth/login?redirect_to=%2Fmy-account%2Fintegrate" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> to verify your license key.
                </p>
            </div>

            <!-- Load error (Cloud) -->
            <div id="load-error">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Load error (Cloud)</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The Editflo Commercial License Key Manager plugin is automatically loaded from the Tiny Cloud CDN for cloud deployments. If it cannot be loaded, the editor will be disabled. Review your subscription details in your <a href="https://www.tiny.cloud/auth/login?redirect_to=%2Fmy-account%2Fintegrate" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> to check its status.
                </p>
            </div>

            <!-- Load error (Self-hosted) -->
            <div id="load-errorself-hosted">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Load error (Self-hosted)</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    For self-hosted installations, the Editflo Commercial License Key Manager plugin is required for commercial license keys otherwise the editor will be disabled. If it cannot be loaded, see the <a href="https://www.tiny.cloud/docs/Editflo /latest/license-key/#setting-up-the-commercial-license-key-manager" class="text-blue-600 hover:text-blue-800 underline">Setting up the Commercial License Key Manager</a> section for implementation details.
                </p>
            </div>

            <!-- Expired -->
            <div id="expired">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Expired</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The license key has reached its expiration date and is no longer valid for use. The editor will be disabled until a new valid license key is provided. For time-based keys, refer to the License Key Types section. To renew your license, visit <a href="https://www.tiny.cloud/pricing/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Pricing</a> or contact your account manager.
                </p>
            </div>

            <!-- Grace period -->
            <div id="grace-period">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Grace period</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The license key has reached its initial expiration date but is still within the grace period. The editor will continue to function but will be disabled when the grace period ends. See the License States section for more information about grace periods. Contact your account manager or visit <a href="https://www.tiny.cloud/account/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> to renew your license before the grace period expires.
                </p>
            </div>

            <!-- Invalid editor version -->
            <div id="invalid-editor-version">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Invalid editor version</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The license key is not compatible with the current version of Editflo . This typically occurs with version-locked keys when using a different patch version. Visit <a href="https://www.tiny.cloud/docs/" class="text-blue-600 hover:text-blue-800 underline">Editflo Documentation</a> to check your editor version. Review the License Key Types section about version-locked keys. If you're upgrading from Editflo 7, visit <a href="https://www.tiny.cloud/account/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> to obtain a new license key or see "if I'm upgrading from Editflo 7 how do I get a Editflo 8 license key?" for guidance. For new licenses, visit <a href="https://www.tiny.cloud/pricing/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Pricing</a>.
                </p>
            </div>

            <!-- No license key -->
            <div id="no-license-key">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">No license key</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    No license key has been provided in the Editflo configuration. For self-hosted installations, you must either provide a valid commercial license key or explicitly opt into GPL usage. See the <a href="https://www.tiny.cloud/docs/Editflo /latest/license-key/#setting-up-the-commercial-license-key-manager" class="text-blue-600 hover:text-blue-800 underline">Setting up the Commercial License Key Manager</a> section for implementation details and the "What does the GPL license mean?" section for GPL licensing information.
                </p>
            </div>

            <!-- Invalid plugin -->
            <div id="invalid-plugin">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Invalid plugin</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The attempted use of a premium plugin without a valid commercial license key. This occurs when trying to use premium features with a GPL license or an invalid commercial license. Review your subscription details in your <a href="https://www.tiny.cloud/account/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> to verify plugin access. See the License Types and Deployment Options section for more information about license types and plugin access.
                </p>
            </div>

            <!-- Online API Key Error (5xx - Fallback) -->
            <div id="online-api-key-error-5xx-fallback">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Online API Key Error (5xx - Fallback)</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    A server-side error occurred while validating the API key. The editor will attempt to use the provided license key as a fallback mechanism. This typically occurs in hybrid deployments - see the Deployment Types section for proper configuration. If the issue persists, visit <a href="https://support.tiny.cloud/" class="text-blue-600 hover:text-blue-800 underline">Support Portal</a> for assistance.
                </p>
            </div>

            <!-- Online API Key Error (4xx - Disable) -->
            <div id="online-api-key-error-4xx-disable">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Online API Key Error (4xx - Disable)</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The API key validation failed due to an invalid key or inactive subscription. The editor will be disabled until a valid API key is provided. For API key issues, visit <a href="https://www.tiny.cloud/account/" class="text-blue-600 hover:text-blue-800 underline">Tiny Cloud Account</a> or see the "What is the difference between a license key and the API key?" section for clarification.
                </p>
            </div>

            <!-- Resource Load Error -->
            <div id="resource-load-error">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Resource Load Error</h3>
                <p class="text-gray-700 text-sm sm:text-base">
                    The Editflo Commercial License Key Manager plugin was unable to load additional required resources. This typically occurs when the <code class="bg-gray-100 px-1 py-0.5 rounded border">js/commerciallicensekeymanager.js</code> file is missing or not properly configured. For bundled applications, ensure you are using the <code class="bg-gray-100 px-1 py-0.5 rounded border">licensekeymanager/index.js</code> file that imports other required resources. For self-hosted installations, verify that a <code class="bg-gray-100 px-1 py-0.5 rounded border">js/commerciallicensekeymanager.js</code> file is present in the <code class="bg-gray-100 px-1 py-0.5 rounded border">plugins/licensekeymanager</code> folder. See the <a href="https://www.tiny.cloud/docs/Editflo /latest/license-key/#setting-up-the-commercial-license-key-manager" class="text-blue-600 hover:text-blue-800 underline">Setting up the Commercial License Key Manager</a> section for implementation details.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mt-2">
                    For additional assistance, visit our <a href="https://support.tiny.cloud/" class="text-blue-600 hover:text-blue-800 underline">Support Portal</a> or contact your Tiny Cloud Account manager.
                </p>
            </div>
        </div>
    </section>

</div>

<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>