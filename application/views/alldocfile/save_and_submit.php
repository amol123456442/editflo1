<div class="mx-auto min-h-screen px-4">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Editor size and resize options</h1>
        <p class="text-lg text-gray-600">Install Editflo using the Editflo Cloud</p>
    </div>
    <!-- Include Script Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Include the Editflo script</h2>
        <p class="text-gray-700 text-sm sm:text-base mb-4">
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
    <!-- Key Editor Options Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Key editor options for adding Editflo to an application</h2>

        <!-- Target location for Editflo -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Target location for Editflo</h3>

            <!-- selector Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">selector</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows a CSS selector to be specified for the areas that Editflo should make editable.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    When using this option in Editflo's regular editing mode, the element will be replaced with an iframe that Editflo will perform all operations within. When using this option in Editflo's inline editing mode, the selector can be used on any block element and will edit the content in place instead of replacing the element with an iframe.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    For more information on the differences between regular and inline editing modes see Setup inline editing mode.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: replace all textarea elements on the page</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300"> </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
            <!-- target Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">target</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Sometimes there might be already a reference to a DOM element at hand, for example when element is created dynamically. In such case initialising editor on it by selector might seem irrational (since selector - id or class should be created first). In such cases you can supply that element directly via target option.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    The selector option has precedence over target, so in order for target to work, do not use the selector option.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Node</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using target</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-blue-400">const</span><span class="text-gray-300"> el = document.</span><span class="text-yellow-300">createElement</span><span class="text-gray-300">(</span><span class="text-green-400">'textarea'</span><span class="text-gray-300">);</span><br>
                        <span class="text-gray-300">document.body.</span><span class="text-yellow-300">appendChild</span><span class="text-gray-300">(el);</span><br>
                        <br>
                        <span class="text-green-400">// ...</span><br>
                        <br>
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">target</span><span class="text-gray-300">: el</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Editor save and submit options -->
        <div class="mb-8 pt-8 border-t border-gray-200">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Editor save and submit options</h3>

            <!-- HTML forms options -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">HTML forms options</h4>

                <!-- hidden_input Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">hidden_input</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        The hidden_input option allows the auto-generation of hidden input fields to be disabled for inline editing elements. By default all inline editors have a hidden input element in which content gets saved when an editor.save() or editflo.triggerSave() is executed.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        The hidden_input option can be disabled if you don't need these controls.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Boolean</p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Default value: true</p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Possible values: true, false</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using hidden_input</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'div'</span><span class="text-gray-300">,</span><span class="text-green-400"> // change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">inline</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><span class="text-gray-300">,</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">hidden_input</span><span class="text-gray-300">: </span><span class="text-orange-400">false</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adding save functionality to the editor -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">Adding save functionality to the editor</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    editflo can be configured to allow users to save the editor content. For information on configuring the user saving, see: The Save plugin.
                </p>
            </div>

            <!-- Autosaving the editor content -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">Autosaving the editor content</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    editflo can be configured to automatically save the editor content. For information on configuring the automatic saving, see: The Autosave plugin.
                </p>
            </div>
        </div>

    </div>
</div>