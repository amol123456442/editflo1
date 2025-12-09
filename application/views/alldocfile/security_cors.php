<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">The Editflo Cross-Origin Resource Sharing Guide</h1>
        <p class="text-lg text-gray-600">Cross-Origin Resource Sharing related options for Editflo</p>
    </div>

    <!-- Cross-Origin Resource Sharing Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Cross-Origin Resource Sharing Options</h2>
        <p class="text-gray-700 mb-6">
            Editflo provides several options to handle Cross-Origin Resource Sharing (CORS) when loading resources from different domains. These options help with security, privacy, and resource loading across different origins.
        </p>

        <!-- crossorigin Option -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">crossorigin</h3>
            <p class="text-gray-700 mb-3">
                The <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">crossorigin</code> option controls how Editflo handles cross-origin resource loading. This option accepts a function that determines the appropriate crossorigin attribute value based on the resource being loaded.
            </p>
            <p class="text-gray-700 mb-3 font-medium">Type: Function (url: string, resourceType: 'script' | 'stylesheet') => string</p>
            <p class="text-gray-700 mb-3">
                <strong>For Editflo Cloud:</strong> A function that returns 'anonymous' for cloud resources and omits the attribute for other resources.
            </p>
            <p class="text-gray-700 mb-3">
                <strong>For self-hosted:</strong> A function that omits the crossorigin attribute for all resources.
            </p>
            <p class="text-gray-700 mb-3 font-medium">Possible return values:</p>
            <ul class="list-disc list-inside text-gray-700 mb-3 ml-4">
                <li><code>'anonymous'</code> - Sets <code>crossorigin="anonymous"</code></li>
                <li><code>'use-credentials'</code> - Sets <code>crossorigin="use-credentials"</code></li>
                <li><code>undefined</code> - Omits the crossorigin attribute entirely</li>
            </ul>

            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                <p class="text-gray-700 mb-2 font-medium">Example: Basic configuration</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-blue-400">const</span> <span class="text-gray-300">crossOriginFunction = (</span><span class="text-blue-400">url</span><span class="text-gray-300">, </span><span class="text-blue-400">resourceType</span><span class="text-gray-300">) </span><span class="text-blue-400">=></span> <span class="text-gray-300">{</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">// Returning 'anonymous' or 'use-credentials' here would explicitly set the attribute</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">return</span> <span class="text-green-400">'anonymous'</span><span class="text-gray-300">;</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">// return 'use-credentials';</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">// return undefined; // Omits the 'crossorigin' attribute for all resources by returning undefined</span><br>
                    <span class="text-gray-300">};</span><br>
                    <br>
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">"textarea"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">crossorigin</span><span class="text-gray-300">: crossOriginFunction</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r mb-4">
                <p class="text-blue-700 font-medium">Important Notes:</p>
                <ul class="list-disc list-inside text-blue-700 mt-2 ml-2">
                    <li>When loading Editflo from Editflo Cloud, the initial script tag must include <code>crossorigin="anonymous"</code> and <code>referrerpolicy="origin"</code></li>
                    <li>The crossorigin function runs for both scripts and stylesheets loaded by Editflo</li>
                    <li>Using <code>'anonymous'</code> sends the Origin header without credentials</li>
                    <li>Using <code>'use-credentials'</code> sends the Origin header with credentials (not recommended for most cases)</li>
                    <li>Returning <code>undefined</code> means no crossorigin attribute will be set</li>
                </ul>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-2 font-medium">Example Script Tag for Editflo Cloud:</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-blue-400">&lt;script</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">src=</span><span class="text-yellow-300">"https://cdn.editflo.cloud/1/no-api-key/editflo/8/editflo.min.js"</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">referrerpolicy=</span><span class="text-yellow-300">"origin"</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">crossorigin=</span><span class="text-yellow-300">"anonymous"</span><br>
                    <span class="text-blue-400">&gt;&lt;/script&gt;</span>
                </div>
            </div>
        </div>

        <!-- referrer_policy Option -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">referrer_policy</h3>
            <p class="text-gray-700 mb-3">
                Used for setting the level of referrer information sent when loading plugins and CSS. Referrer policies can be used to:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-3 ml-4">
                <li>Improve the privacy of end-users</li>
                <li>Assist with server-side filtering of cross-origin requests for Editflo resources</li>
            </ul>
            <p class="text-gray-700 mb-3 font-medium">Type: String</p>
            <div class="mb-3 p-3 bg-gray-50 rounded">
                <p class="text-gray-700 text-sm">
                    For a list of valid referrer policies (directives), see: MDN Web Docs - Referrer-Policy
                </p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-2 font-medium">Example: using referrer_policy</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">referrer_policy</span><span class="text-gray-300">: </span><span class="text-green-400">'origin'</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>

        <!-- content_css_cors Option -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">content_css_cors</h3>
            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded-r mb-4">
                <p class="text-yellow-700 font-medium">
                    ⚠️ Deprecated: This option has been marked as deprecated. It will be completely removed in the upcoming Editflo 9.0 release. As an alternative, we recommend using <code>crossorigin</code> instead.
                </p>
            </div>
            <p class="text-gray-700 mb-3">
                When <code>content_css_cors</code> is set to <code>true</code>, the editor will add a <code>crossorigin="anonymous"</code> attribute to the link tags that the StyleSheetLoader uses when loading the <code>content_css</code>. This allows you to host the <code>content_css</code> on a different server than the editor itself.
            </p>
            <p class="text-gray-700 mb-3 font-medium">Type: Boolean</p>
            <p class="text-gray-700 mb-3 font-medium">Default value: false</p>
            <p class="text-gray-700 mb-3 font-medium">Possible values: true, false</p>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-2 font-medium">Example: using content_css_cors</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-green-400">// File: http://domain.mine/mysite/index.html</span><br>
                    <br>
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">content_css</span><span class="text-gray-300">: </span><span class="text-green-400">'http://www.somewhere.example/mycontent.css'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">content_css_cors</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>

        <!-- editimage_cors_hosts Option -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">editimage_cors_hosts</h3>
            <p class="text-gray-700 mb-3">
                The Image Editing plugin cannot work with images from another domain due to security measures imposed by browsers on so called cross-origin HTTP requests. To overcome these constraints, Cross-Origin Resource Sharing (CORS) must be explicitly enabled on the specified domain(s).
            </p>
            <p class="text-gray-700 mb-3">
                An array of supported domains for the images (with CORS enabled on them) can be supplied to Editflo via the <code>editimage_cors_hosts</code> option.
            </p>
            <p class="text-gray-700 mb-3 font-medium">Important:</p>
            <ul class="list-disc list-inside text-gray-700 mb-3 ml-4">
                <li>Each string in the array must be in the format of <code>example.com</code></li>
                <li>Do not include protocols (for example, http://, https://) or any trailing slashes in your domains</li>
                <li><code>editimage_cors_hosts</code> is not required when enabling this plugin via Editflo Cloud</li>
            </ul>
            <p class="text-gray-700 mb-3 font-medium">Type: Array</p>
            <p class="text-gray-700 mb-3 font-medium">Default value: []</p>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-2 font-medium">Example: editimage_cors_hosts</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">toolbar</span><span class="text-gray-300">: </span><span class="text-green-400">'editimage'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span class="text-gray-300">: </span><span class="text-green-400">'image editimage'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">editimage_cors_hosts</span><span class="text-gray-300">: [ </span><span class="text-green-400">'example.com'</span><span class="text-gray-300">, </span><span class="text-green-400">'example.net'</span><span class="text-gray-300"> ]</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>

        <!-- export_cors_hosts Option -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">export_cors_hosts</h3>
            <p class="text-gray-700 mb-3">
                The Export plugin cannot work with images from another domain due to security measures imposed by browsers on so called cross-origin HTTP requests. To overcome these constraints, Cross-Origin Resource Sharing (CORS) must be explicitly enabled on the specified domain(s).
            </p>
            <p class="text-gray-700 mb-3">
                An array of supported domains for the images (with CORS enabled on them) can be supplied to Editflo via the <code>export_cors_hosts</code> option.
            </p>
            <p class="text-gray-700 mb-3 font-medium">Important:</p>
            <ul class="list-disc list-inside text-gray-700 mb-3 ml-4">
                <li>Each string in the array must be in the format of <code>example.com</code></li>
                <li>Do not include protocols (for example, http://, https://) or any trailing slashes in your domains</li>
                <li><code>export_cors_hosts</code> is not required when enabling this plugin via Editflo Cloud</li>
            </ul>
            <p class="text-gray-700 mb-3 font-medium">Type: Array</p>
            <p class="text-gray-700 mb-3 font-medium">Default value: []</p>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-2 font-medium">Example: export_cors_hosts</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">toolbar</span><span class="text-gray-300">: </span><span class="text-green-400">'export'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span class="text-gray-300">: </span><span class="text-green-400">'image export'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">export_cors_hosts</span><span class="text-gray-300">: [ </span><span class="text-green-400">'example.com'</span><span class="text-gray-300">, </span><span class="text-green-400">'example.net'</span><span class="text-gray-300"> ]</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>

        <!-- CORS Summary Section -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-blue-800 mb-3">CORS Summary</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mr-2 mt-0.5">
                        <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-blue-800 font-medium">Editflo Cloud Simplifies CORS</p>
                        <p class="text-blue-700 text-sm">When using Editflo Cloud, most CORS configurations are handled automatically for you.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mr-2 mt-0.5">
                        <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-blue-800 font-medium">Self-Hosted CORS Requirements</p>
                        <p class="text-blue-700 text-sm">When self-hosting Editflo, ensure proper CORS headers are configured on your server for cross-origin resource loading.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mr-2 mt-0.5">
                        <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <div>
                        <p class="text-blue-800 font-medium">Image Editing & Export</p>
                        <p class="text-blue-700 text-sm">Image editing and export functionality require explicit CORS configuration when images are hosted on different domains.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>