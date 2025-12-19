<div class="mx-auto min-h-screen px-4">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Editor size and resize options</h1>
        <p class="text-lg text-gray-600">Install Editflo using the Editflo Cloud</p>
    </div>


    <!-- Include Script Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Include the Editflo script</h2>
        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-4">
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
        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-4">
            Initialize Editflo 8 on any element (or elements) on the web page by passing an object containing a <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value to <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">editflo.init()</code>. The <code
                class="bg-gray-100 px-1 py-0.5 rounded text-sm">selector</code> value can be any valid CSS selector.
        </p>

        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-4">
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



    <!-- Key Editor Options Section -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Key editor options for adding Editflo to an application</h2>

        <!-- Target location for Editflo -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Target location for Editflo</h3>

            <!-- selector Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">selector</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This option allows a CSS selector to be specified for the areas that Editflo should make editable.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    When using this option in Editflo's regular editing mode, the element will be replaced with an iframe that Editflo will perform all operations within. When using this option in Editflo's inline editing mode, the selector can be used on any block element and will edit the content in place instead of replacing the element with an iframe.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    For more information on the differences between regular and inline editing modes see Setup inline editing mode.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: replace all textarea elements on the page</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300"> </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: replace a textarea element with id "editable"</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea#editable'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: inline editing mode on a div element with id "editable"</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'div#editable'</span><span class="text-gray-300">,</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">inline</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- target Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">target</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    Sometimes there might be already a reference to a DOM element at hand, for example when element is created dynamically. In such case initialising editor on it by selector might seem irrational (since selector - id or class should be created first). In such cases you can supply that element directly via target option.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    The selector option has precedence over target, so in order for target to work, do not use the selector option.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: Node</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using target</p>
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

        <!-- Adding placeholder content to the editor -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Adding placeholder content to the editor</h3>

            <!-- placeholder Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">placeholder</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This option adds placeholder content that will be shown when the editor is empty.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    If the editor is initialized on a textarea element, the placeholder attribute can be used instead.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using placeholder</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">placeholder</span><span class="text-gray-300">: </span><span class="text-green-400">'Type here...'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Configuring the editor iframe -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Configuring the editor iframe</h3>

            <!-- iframe_attrs Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">iframe_attrs</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This option allows adding custom attributes to the editor's content iframe element when running in classic mode. The attributes are applied during the iframe creation.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This option only affects the main editor content iframe, not other iframes such as preview frames, dialog iframes, or iframe elements created within the editor content.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: Object</p>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using iframe_attrs for accessibility</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">iframe_attrs</span><span class="text-gray-300">: {</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">'aria-required'</span><span class="text-gray-300">: </span><span class="text-green-400">'true'</span><span class="text-gray-300">,</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">'aria-describedby'</span><span class="text-gray-300">: </span><span class="text-green-400">'editor-description'</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using iframe_attrs for custom styling</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">iframe_attrs</span><span class="text-gray-300">: {</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">'style'</span><span class="text-gray-300">: </span><span class="text-green-400">'background-color:rgb(64, 167, 99); border: 2px solid #ddd;'</span><span class="text-gray-300">,</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">'class'</span><span class="text-gray-300">: </span><span class="text-green-400">'custom-editor-frame'</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Focusing on the editor -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Focusing on the editor</h3>

            <!-- Tab order -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">Tab order</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    The tab order of the elements in a page, including Editflo, should be configured by setting the tabindex attribute on the relevant HTML elements. The browser will then natively handle the tab order.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    To configure tabindex for the Editflo editor, set the attribute on the target element for the editor.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    In iframe (classic editor) mode, Editflo will copy the tabindex attribute from the target element to the editor's iframe, to allow this to work correctly.
                </p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: configuring tab order</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-blue-400">&lt;script&gt;</span><br>
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><br>
                        <span class="text-gray-300">});</span><br>
                        <span class="text-blue-400">&lt;/script&gt;</span><br>
                        <span class="text-gray-300">...</span><br>
                        <span class="text-blue-400">&lt;input</span><span class="text-green-400"> tabindex=</span><span class="text-yellow-300">"1"</span><span class="text-blue-400">&gt;</span><br>
                        <span class="text-blue-400">&lt;textarea</span><span class="text-green-400"> tabindex=</span><span class="text-yellow-300">"2"</span><span class="text-blue-400">&gt;&lt;/textarea&gt;</span><br>
                        <span class="text-blue-400">&lt;input</span><span class="text-green-400"> tabindex=</span><span class="text-yellow-300">"3"</span><span class="text-blue-400">&gt;</span>
                    </div>
                </div>
            </div>

            <!-- auto_focus Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">auto_focus</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    Automatically set the focus to an editor instance. The value of this option should be an editor instance id. The editor instance id is the id for the original textarea or div element that got replaced.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using auto_focus</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">auto_focus</span><span class="text-gray-300">: </span><span class="text-green-400">'element1'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- custom_ui_selector Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">custom_ui_selector</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    Use the custom_ui_selector option to specify the elements that you want Editflo to treat as a part of the editor UI. Specifying elements enables the editor not to lose the selection even if the focus is moved to the elements matching this selector. The editor blur event is not fired if the focus is moved to elements matching this selector since it's treated as part of the editor UI.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using custom_ui_selector</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">custom_ui_selector</span><span class="text-gray-300">: </span><span class="text-green-400">'.my-custom-button'</span><br>
                        <span class="text-gray-300">});</span><br>
                        <span class="text-gray-300">...</span><br>
                        <span class="text-blue-400">&lt;textarea&gt;&lt;/textarea&gt;</span><br>
                        <span class="text-blue-400">&lt;button</span><span class="text-green-400"> class=</span><span class="text-yellow-300">"my-custom-button"</span><span class="text-blue-400">&gt;</span><span class="text-gray-300">Button</span><span class="text-blue-400">&lt;/button&gt;</span>
                    </div>
                </div>
            </div>

            <!-- highlight_on_focus Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">highlight_on_focus</h4>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                    <p class="text-yellow-700">
                        In Editflo 7.0, the default setting for highlight_on_focus was changed from false to true. Any editors using this highlight_on_focus: true option in Editflo, can remove this option from their Editflo init configuration when upgrading to Editflo 7.0.
                    </p>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    The highlight_on_focus option adds a blue outline to an instantiated Editflo editor when that editor is made the input focus. When using the oxide-dark skin, the outline is white.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This allows users to clearly see when the editor is in focus, or which editor has focus if more than one Editflo instance is available.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: Boolean</p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Default value: true</p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Possible values: true, false</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using highlight_on_focus</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">"textarea"</span><span class="text-gray-300">,</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">highlight_on_focus</span><span class="text-gray-300">: </span><span class="text-orange-400">false</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                    <h5 class="text-md font-medium text-gray-800 mb-2">Using highlight_on_focus with custom skins</h5>
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                        If a custom skin is being used, two variables can be updated to match the highlight_on_focus option's appearance with the custom skin.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                        The two rules and their default values are:
                    </p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-3">
                        <span class="text-blue-400">@edit-area-border-color</span><span class="text-gray-300">: </span><span class="text-green-400">#2D6ADF</span><span class="text-gray-300">;</span><br>
                        <span class="text-blue-400">@edit-area-border-width</span><span class="text-gray-300">: </span><span class="text-orange-400">2px</span><span class="text-gray-300">;</span>
                    </div>
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base italic">
                        This is entirely optional. If the default values are not changed, the highlight_on_focus option works with a custom skin exactly as it does with Editflo default skins.
                    </p>
                </div>
            </div>
        </div>

        <!-- Extend Editflo with plugins -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Extend Editflo with plugins</h3>
            <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-4">
                There are two options for adding plugins to Editflo: plugins and external_plugins. Editflo recommends using the plugins option for plugins bundled with the product or included in your cloud subscription. Custom or third-party plugins should be included using the external_plugins option to simplify updating and upgrading Editflo.
            </p>

            <!-- plugins Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">plugins</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This option allows configuring which plugins Editflo will attempt to load when starting up. By default, Editflo will not load any plugins.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    The plugins can be provided as either:
                </p>
                <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 ml-4">
                    <li>A string of space or comma separated plugin names, such as 'plugin1 plugin2', or</li>
                    <li>An array of plugin names, such as [ 'plugin1' , 'plugin2' ]</li>
                </ul>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: String or Array</p>

                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using plugins with a string</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span class="text-gray-300">: </span><span class="text-green-400">'advlist autolink link image lists charmap preview'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using plugins with an array</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span class="text-gray-300">: [ </span><span class="text-green-400">'advlist'</span><span class="text-gray-300">, </span><span class="text-green-400">'autolink'</span><span class="text-gray-300">, </span><span class="text-green-400">'link'</span><span class="text-gray-300">, </span><span class="text-green-400">'image'</span><span class="text-gray-300">, </span><span class="text-green-400">'lists'</span><span class="text-gray-300">, </span><span class="text-green-400">'charmap'</span><span class="text-gray-300">, </span><span class="text-green-400">'preview'</span><span class="text-gray-300"> ]</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base">
                        Check this documentation page for a list of available plugins.
                    </p>
                </div>
            </div>

            <!-- external_plugins Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">external_plugins</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This option allows a URL based location of plugins to be provided that are outside of the normal Editflo plugins directory.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    Editflo will attempt to load these as per regular plugins when starting up. This option is useful when loading Editflo from a CDN or when the Editflo directory is separate from custom plugins.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    This value should be set as a JavaScript object that contains a property for each Editflo plugin to be loaded. This property should be named after the plugin and should have a value that contains the location that the plugin that will be loaded from.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    The URLs provided can be:
                </p>
                <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 ml-4">
                    <li>Absolute URLs: Including the protocol, such as https://www.example.com/plugin.min.js.</li>
                    <li>Relative to the root directory of the web-server: Including the leading "/" to indicate that it is relative to the web-server root, such as /plugin.min.js.</li>
                    <li>Relative to the Editflo base_url: A relative path without the leading "/", such as ../../myplugins/plugin.min.js. By default, the base_url is the directory containing Editflo javascript file (such as editflomce.min.js). For information on the base_url option, see: Integration and setup options - base_url.</li>
                </ul>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: Object</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: using external_plugins</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">external_plugins</span><span class="text-gray-300">: {</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">'testing'</span><span class="text-gray-300">: </span><span class="text-green-400">'http://www.testing.com/plugin.min.js'</span><span class="text-gray-300">,</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">'maths'</span><span class="text-gray-300">: </span><span class="text-green-400">'http://www.maths.com/plugin.min.js'</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Starting the editor in a read-only state -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Starting the editor in a read-only state</h3>

            <!-- readonly Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">readonly</h4>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3">
                    Setting the readonly option to true initializes the editor in readonly mode instead of editing (design) mode. Once initialized, the editor can be switched to design mode using the editflo.editor.mode.set API.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Type: Boolean</p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Default value: false</p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-3 font-medium">Possible values: true, false</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2 font-medium">Example: Using readonly</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">readonly</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- Behavior in readonly mode -->
            <div class="mb-6">
                <h4 class="text-base sm:text-lg font-medium text-gray-800 mb-2">Behavior in readonly mode</h4>
                <div class="relative overflow-hidden border border-gray-300 rounded-lg">
                    <div class="overflow-x-auto" style="max-height: 400px;">
                        <table class="min-w-full bg-white">
                            <thead class="sticky top-0 bg-gray-100 z-10">
                                <tr>
                                    <th class="py-2 px-3 border-b border-gray-300 text-left text-xs font-medium text-gray-700 text-sm sm:text-base w-1/6">Behavior</th>
                                    <th class="py-2 px-3 border-b border-gray-300 text-left text-xs font-medium text-gray-700 text-sm sm:text-base w-3/5">Details</th>
                                    <th class="py-2 px-3 border-b border-gray-300 text-left text-xs font-medium text-gray-700 text-sm sm:text-base w-1/12">Allowed (True/False)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-3 align-top text-xs font-medium text-gray-800">Navigation and Interaction</td>
                                    <td class="py-2 px-3 align-top text-xs text-gray-700 text-sm sm:text-base">
                                        <div class="space-y-1">
                                            <div>Users can place the cursor within the editor</div>
                                            <div class="font-medium text-gray-800">Navigation behaves the same as in design mode, including:</div>
                                            <ul class="list-disc list-inside ml-2 space-y-0.5">
                                                <li>Moving through block elements (table of contents, images, media elements)</li>
                                                <li>Using arrow keys, Home, End, Page Up, Page Down</li>
                                                <li>Media elements can be played</li>
                                                <li>Users can select and copy text</li>
                                                <li>Users can interact with links</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="py-2 px-3 align-middle text-center">
                                        <span class="inline-block px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">True</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-3 align-top text-xs font-medium text-gray-800">Prevented Actions</td>
                                    <td class="py-2 px-3 align-top text-xs text-gray-700 text-sm sm:text-base">
                                        <div class="space-y-2">
                                            <div>All input events (keyboard and IME input)</div>

                                            <div class="font-medium text-gray-800">Content modifications:</div>
                                            <ul class="list-disc list-inside ml-2 space-y-0.5">
                                                <li>Pasting content</li>
                                                <li>Cutting content</li>
                                                <li>Deleting content</li>
                                                <li>Drag and drop operations</li>
                                            </ul>

                                            <div class="font-medium text-gray-800">Formatting changes:</div>
                                            <ul class="list-disc list-inside ml-2 space-y-0.5">
                                                <li>Keyboard shortcuts for formatting (e.g., Cmd/Ctrl + B)</li>
                                                <li>Auto-linking when pressing space after URLs</li>
                                            </ul>

                                            <div class="font-medium text-gray-800">Element modifications:</div>
                                            <ul class="list-disc list-inside ml-2 space-y-0.5">
                                                <li>Toggling checklists (via click or Cmd/Ctrl + Enter)</li>
                                                <li>Indenting lists</li>
                                                <li>Adding new table rows via Tab key</li>
                                                <li>Resizing tables, media elements, or images</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="py-2 px-3 align-middle text-center">
                                        <span class="inline-block px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded">False</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-3 align-top text-xs font-medium text-gray-800">Toolbar and UI Behavior</td>
                                    <td class="py-2 px-3 align-top text-xs text-gray-700 text-sm sm:text-base">
                                        <div class="space-y-1">
                                            <div>Most toolbar buttons are disabled</div>
                                            <div>Fields in dialogs (e.g., link dialog) are disabled</div>
                                            <div class="font-medium text-gray-800">When switching from design to readonly mode:</div>
                                            <div>All open dialogs and UI components adjust to reflect readonly state</div>
                                        </div>
                                    </td>
                                    <td class="py-2 px-3 align-middle text-center">
                                        <span class="inline-block px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded">False</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-3 align-top text-xs font-medium text-gray-800">Enabled Features</td>
                                    <td class="py-2 px-3 align-top text-xs text-gray-700 text-sm sm:text-base">
                                        <div class="font-medium text-gray-800 mb-1">The following toolbar/menu items remain enabled in readonly mode:</div>
                                        <ul class="list-disc list-inside ml-2 space-y-0.5">
                                            <li>Full Screen</li>
                                            <li>Help</li>
                                            <li>Preview</li>
                                            <li>Visual Blocks</li>
                                            <li>Visual Characters</li>
                                            <li>Word Count</li>
                                            <li>Export to PDF</li>
                                            <li>Export to Word</li>
                                            <li>Visual Aid</li>
                                            <li>Copy</li>
                                            <li>Select all</li>
                                        </ul>
                                    </td>
                                    <td class="py-2 px-3 align-middle text-center">
                                        <span class="inline-block px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded">True</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Setting the editor in a disabled state -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Setting the editor in a disabled state</h3>

            <!-- disabled Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">disabled</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Disables all user interactions with the editor (including cursor placement, content modifications, UI components). This option provides behavior similar to the changes made to Editflo in 7.4.0 readonly mode. When enabled, the editor becomes completely non-interactive.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    To programmatically enable/disable the editor, use editflo.activeEditor.options.set('disabled', false/true).
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Boolean</p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Default value: false</p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Possible values: true, false</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using disabled</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">disabled</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Executing custom functions while the editor starts (initializes) -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Executing custom functions while the editor starts (initializes)</h3>

            <!-- setup Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">setup</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows a callback to be provided that will be executed before the Editflo editor instance is rendered.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    To specify a setup callback, provide the setup option with a JavaScript function. This function should have one argument, which is a reference to the editor that is being set up.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    A common use case for this setting is to add editor events to Editflo. For instance, if you would like to add a click event to Editflo, you would add it through the setup configuration setting.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Function</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using setup</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">setup</span><span class="text-gray-300">: </span><span class="text-gray-300">(</span><span class="text-blue-400">editor</span><span class="text-gray-300">) </span><span class="text-blue-400">=></span><span class="text-gray-300"> {</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-blue-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">on</span><span class="text-gray-300">(</span><span class="text-green-400">'click'</span><span class="text-gray-300">, () </span><span class="text-blue-400">=></span><span class="text-gray-300"> {</span><br>
                        <span class="text-gray-300 ml-12"></span><span class="text-yellow-300">console</span><span class="text-gray-300">.</span><span class="text-yellow-300">log</span><span class="text-gray-300">(</span><span class="text-green-400">'Editor was clicked'</span><span class="text-gray-300">);</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-gray-300">});</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- init_instance_callback Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">init_instance_callback</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows a function to be provided that will be executed each time an editor instance is initialized. The format of this function is initInstance(editor) where editor is the editor instance object reference.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Function</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using init_instance_callback</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">init_instance_callback</span><span class="text-gray-300">: </span><span class="text-gray-300">(</span><span class="text-blue-400">editor</span><span class="text-gray-300">) </span><span class="text-blue-400">=></span><span class="text-gray-300"> {</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-yellow-300">console</span><span class="text-gray-300">.</span><span class="text-yellow-300">log</span><span class="text-gray-300">(</span><span class="text-green-400">`Editor: </span><span class="text-blue-400">${</span><span class="text-blue-400">editor</span><span class="text-gray-300">.</span><span class="text-blue-400">id</span><span class="text-blue-400">}</span><span class="text-green-400"> is now initialized.`</span><span class="text-gray-300">);</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base">
                        You may also want to take a look at the setup callback option as it can be used to bind events before the editor instance is initialized.
                    </p>
                </div>
            </div>
        </div>

        <!-- Changing URL used to load the editor -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Changing URL used to load the editor</h3>

            <!-- base_url Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">base_url</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows the base URL for Editflo to be configured. This is useful if Editflo should be loaded from one location while the theme, model and plugins are loaded from another.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    By default, the base_url is the directory containing Editflo javascript file (such as editflomce.min.js).
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using base_url</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">base_url</span><span class="text-gray-300">: </span><span class="text-green-400">'/my/editflo/dir'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- cache_suffix Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">cache_suffix</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows a custom cache buster URL part to be added at the end of each request Editflo makes to load CSS, scripts, etc. Just add the query string part that should be appended to each URL request, for example "?v=4.1.6".
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using cache_suffix</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">cache_suffix</span><span class="text-gray-300">: </span><span class="text-green-400">'?v=4.1.6'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- content_security_policy Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">content_security_policy</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows a custom content security policy to be set for the editor's iframe contents.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using content_security_policy</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">content_security_policy</span><span class="text-gray-300">: </span><span class="text-green-400">"default-src 'self'"</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
            <!-- referrer_policy Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">referrer_policy</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Used for setting the level of referrer information sent when loading plugins and CSS. Referrer policies can be used to:
                </p>
                <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base mb-3 ml-4">
                    <li>Improve the privacy of end-users.</li>
                    <li>Assist with server-side filtering of cross-origin requests for Editflo resources.</li>
                </ul>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: String</p>
                <div class="mb-3 p-3 bg-gray-50 rounded">
                    <p class="text-gray-700 text-sm sm:text-base text-sm">
                        For a list of valid referrer policies (directives), see: MDN Web Docs - Referrer-Policy.
                    </p>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using referrer_policy</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">referrer_policy</span><span class="text-gray-300">: </span><span class="text-green-400">'origin'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>

            <!-- suffix Option -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">suffix</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    This option allows the suffix of Editflo to be manually provided. By default this value will be set to the same as the suffix of the script holding Editflo. When loading things like the theme and plugins this suffix will be inserted into all requests. For example, loading Editflo with a editflomce.min.js file will make Editflo load .min versions of everything it lazy-loads, like theme.min.js and plugin.min.js The suffix option is useful for overriding this behaviour.
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: String</p>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using suffix</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">suffix</span><span class="text-gray-300">: </span><span class="text-green-400">'.min'</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Editor size and resize options -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Editor size and resize options</h3>

            <!-- Initial dimensions -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">Initial dimensions</h4>

                <!-- height Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">height</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        height sets the height of the entire editor, including the menu bar, toolbars, and status bar.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        If a number is provided, Editflo sets the height in pixels by default.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        If a string is provided, Editflo assumes the value is valid CSS and sets the editor's height as the string value such as 300px, 50pt, or 10em.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        <strong>Note:</strong> that values such as 100%, 10vh and auto are not currently supported.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Number or String</p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Default value: 400 or the size of the target element if larger than 400 pixels</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using height</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">height</span><span class="text-gray-300">: </span><span class="text-orange-400">300</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>

                <!-- width Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">width</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        Set the width of the editor.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        Editflo sets the width in pixels if a number is provided. However, if Editflo is provided a string it assumes the value is valid CSS and simply sets the editor's width as the string value. This allows for alternate units such as %, em and vh.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Number or String</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using width</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">width</span><span class="text-gray-300">: </span><span class="text-orange-400">300</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controlling user editor resizing -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">Controlling user editor resizing</h4>

                <!-- resize Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">resize</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        This option allows the resize handle to be disabled or to set the resize handler to resize both horizontally and vertically. The option can be true, false or the string 'both'. False disables resizing, true enables vertical resizing only, 'both' makes it possible to resize in both directions horizontal and vertical.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        When resizing is enabled, the editor can be resized by either:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base mb-3 ml-4">
                        <li>Clicking and dragging the resize handle in the bottom right-hand corner of the editor.</li>
                        <li>Focusing the resize handle, and using the arrow keys. The Up Arrow and Left Arrow keys will make the editor smaller, and the Down Arrow and Right Arrow keys will make the editor larger.</li>
                    </ul>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Boolean or String</p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Default value: true</p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Possible values: true, false, 'both'</p>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                        <p class="text-yellow-700">
                            The default value for this option is different for mobile devices. For information on the default mobile option, see: Editflo Mobile — Configuration options with mobile defaults.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg mb-4">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: disabling editor resizing</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">resize</span><span class="text-gray-300">: </span><span class="text-orange-400">false</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: enabling vertical and horizontal editor resizing</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">resize</span><span class="text-gray-300">: </span><span class="text-green-400">'both'</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>

                <!-- min_height Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">min_height</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        The min_height option has different behaviors depending on whether the autoresize plugin is enabled:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base mb-3 ml-4">
                        <li><strong>Without autoresize plugin:</strong> Sets the minimum height that users can manually shrink the entire Editflo interface by dragging the resize handle in the bottom-right corner.</li>
                        <li><strong>With autoresize plugin:</strong> Sets the minimum height the editor can automatically shrink to when content is removed.</li>
                    </ul>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Number</p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Default value: 100</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using min_height</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">min_height</span><span class="text-gray-300">: </span><span class="text-orange-400">200</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>

                    <div class="mt-4 p-4 bg-yellow-50 rounded-lg">
                        <h5 class="text-md font-medium text-gray-800 mb-2">Important Notes:</h5>
                        <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base space-y-1">
                            <li>If the resize option is set to false, the resize handle will be disabled and users cannot manually resize the editor.</li>
                            <li>The resize option defaults to false when the autoresize plugin is enabled.</li>
                            <li>Values are specified in pixels without units.</li>
                            <li>Setting min_height too low may cause usability issues on mobile devices.</li>
                            <li>If min_height is not set when using the autoresize plugin, the editor will default to the standard min_height value of 100 pixels.</li>
                        </ul>
                    </div>
                </div>

                <!-- max_height Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">max_height</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        The max_height option has different behaviors depending on whether the autoresize plugin is enabled:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base mb-3 ml-4">
                        <li><strong>Without autoresize plugin:</strong> Sets the maximum height that users can manually resize the entire Editflo interface by dragging the resize handle in the bottom-right corner.</li>
                        <li><strong>With autoresize plugin:</strong> Sets the maximum height the editor can automatically expand to when content is added.</li>
                    </ul>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Number</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using max_height</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">max_height</span><span class="text-gray-300">: </span><span class="text-orange-400">500</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>

                    <div class="mt-4 p-4 bg-yellow-50 rounded-lg">
                        <h5 class="text-md font-medium text-gray-800 mb-2">Important Notes:</h5>
                        <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base space-y-1">
                            <li>If the resize option is set to false, the resize handle will be disabled and users cannot manually resize the editor.</li>
                            <li>The resize option defaults to false when the autoresize plugin is enabled.</li>
                            <li>Values are specified in pixels without units.</li>
                            <li>If max_height is not set when using the autoresize plugin, the editor will default to the standard max_height behavior (unlimited height expansion).</li>
                        </ul>
                    </div>
                </div>

                <!-- min_width Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">min_width</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        This option sets the minimum width that a user can stretch the entire Editflo interface (by grabbing the draggable area in the bottom right of the editor interface).
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        <strong>Note:</strong> This behavior is different from the autoresize plugin, which controls the resizing of the editable area only, not the entire editor.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Number</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using min_width</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">min_width</span><span class="text-gray-300">: </span><span class="text-orange-400">400</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>

                    <div class="mt-4 p-4 bg-yellow-50 rounded-lg">
                        <p class="text-yellow-700">
                            <strong>Note:</strong> By default the resize handle does not allow horizontal dragging and giving this key a value will not result in an observable behavior.
                        </p>
                    </div>
                </div>

                <!-- max_width Option -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-gray-800 mb-2">max_width</h4>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        This option sets the maximum width that a user can stretch the entire Editflo interface (by grabbing the draggable area in the bottom right of the editor interface).
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3">
                        <strong>Note:</strong> This behavior is different than the autoresize plugin, which controls the resizing of the editable area only, not the entire editor.
                    </p>
                    <p class="text-gray-700 text-sm sm:text-base mb-3 font-medium">Type: Number</p>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">Example: using max_width</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">Editflomce</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">max_width</span><span class="text-gray-300">: </span><span class="text-orange-400">500</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>

                    <div class="mt-4 p-4 bg-yellow-50 rounded-lg">
                        <p class="text-yellow-700">
                            <strong>Note:</strong> By default the resize handle does not allow horizontal dragging and giving this key a value will not result in an observable behavior.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Auto-resizing the editor -->
            <div class="mb-6">
                <h4 class="text-lg font-medium text-gray-800 mb-2">Auto-resizing the editor</h4>
                <p class="text-gray-700 text-sm sm:text-base mb-3">
                    Editflo can be configured to automatically resize based on the editor content. For information on configuring the automatic resizing, see: The Autoresize plugin.
                </p>
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
                    btn.classList.remove('border-primary', 'text-primary');
                    btn.classList.add('border-transparent', 'text-text-light');
                });

                // Add active class to clicked button
                button.classList.add('border-primary', 'text-primary');
                button.classList.remove('border-transparent', 'text-text-light');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected tab content
                document.getElementById(`${tabId}-tab`).classList.remove('hidden');
            });
        });
    });
</script>