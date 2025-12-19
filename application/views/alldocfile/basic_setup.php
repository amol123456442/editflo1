<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Basic setup</h1>
        <p class="text-gray-700 text-sm sm:text-base">
            This introduction to editflo details the options used in traditional form-based layouts, useful information for creating streamlined user experiences, and examples of using editflo as an inline editor.
            <br><br>
            The four most common configuration options for editflo are:
        </p>
        <ol class="text-gray-700 text-sm sm:text-base list-decimal pl-10 space-y-2 ">
            <li><span class="text-blue-700 hover:underline cursor-pointer">The Plugin configuration</span></li>
            <li><span class="text-blue-700 hover:underline cursor-pointer">The Toolbar configuration</span></li>
            <li><span class="text-blue-700 hover:underline cursor-pointer">The Menu and Menu Bar configuration</span></li>
            <li><span class="text-blue-700 hover:underline cursor-pointer">(Required) The Selector configuration</span></li>
        </ol>
    </div>


    <!-- Include Script Section -->
    <div class="">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">A note about code snippet examples</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            Code snippets are provided as example implementations throughout the editflo documentation.
            <br><br>
            Example code snippet:
        </p>

        <!-- Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
            <span class="text-purple-400">editflo </span><span class="text-gray-300">.</span><span class="text-blue-400">init</span><span class="text-gray-300">({</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'textarea'</span><span class="text-gray-300">,</span><span class="text-gray-500 ml-2">// change this value according to your HTML</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-green-400">plugins</span><span class="text-gray-300">: </span><span class="text-yellow-300">'a_editflo _plugin'</span><span class="text-gray-300">,</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-green-400">a_plugin_option</span><span class="text-gray-300">: </span><span class="text-blue-400">true</span><span class="text-gray-300">,</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-green-400">a_configuration_option</span><span class="text-gray-300">: </span><span class="text-orange-400">400</span><br>
            <span class="text-gray-300">});</span>
        </div>
        <p class="text-gray-700 text-sm sm:text-base mb-3">
            Snippets include the selector option, which is described below. Change the value of the working code block according to the HTML.
        </p>

        <p class="text-gray-700 text-sm sm:text-base">
            Insert the snippet into an HTML document between the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;script&gt;</code> tags and update the selector as described below.
        </p>
        <h2 class="text-xl font-semibold text-gray-800 mt-4">Selector configuration</h2>

        <p class="text-gray-700 text-sm sm:text-base mt-4">
            Selector configuration is required for editflo integration. Selector configuration uses CSS selector syntax to determine which elements on the page are editable through editflo .
            <br><br>
            editflo visually replaces the selected element with an iframe (the editable content area) and the UI elements (such as toolbar, menu bar, and status bar).
        </p>

        <div class="mb-6">
            <p class="text-gray-700 text-sm sm:text-base mb-3">
                The following example replaces all textarea elements on the page with editflo instances:
            </p>

            <!-- Code Block 2 -->
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
                <span class="text-purple-400">editflo </span><span class="text-gray-300">.</span><span class="text-blue-400">init</span><span class="text-gray-300">({</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'textarea'</span><br>
                <span class="text-gray-300">});</span>
            </div>
        </div>

        <div class="mb-6">
            <p class="text-gray-700 text-sm sm:text-base mb-3">
                editflo can also match an id attribute.
                <br><br>
                The following example replaces a textarea element with the id "default" on the page:
            </p>

            <!-- Code Block 3 -->
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
                <span class="text-purple-400">editflo </span><span class="text-gray-300">.</span><span class="text-blue-400">init</span><span class="text-gray-300">({</span><br>
                <span class="text-gray-300 ml-4"></span><span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'textarea#default'</span><br>
                <span class="text-gray-300">});</span>
            </div>
            <p class="text-gray-700 text-sm sm:text-base mb-3">
                Providing a editflo editor with the default configuration, such as:
            </p>
        </div>
    </div>

    <div class="bg-black text-white rounded-lg shadow-sm border border-border-light overflow-hidden mb-8">
        <!-- Tabs -->
        <div class="border-b border-border-light">
            <div class="flex">
                <button class="tab-button py-3 px-6 border-b-2 border-primary text-primary font-medium"
                    data-tab="editflo">
                    Editflo
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                    data-tab="html">
                    HTML
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                    data-tab="js">
                    JS
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Editflo Tab (Initially visible) -->
            <div id="editflo-tab" class="tab-content">
                <div class="mb-4">
                    <img src="<?= base_url('assets/Image.png'); ?>" width="full" height="200" alt="">
                </div>
                <!-- <p class="text-gray-700 text-sm mt-4">
                    Editflo content goes here. This tab shows the default Editflo editor interface and configuration.
                </p> -->
            </div>

            <!-- HTML Tab -->
            <div id="html-tab" class="tab-content hidden">
                <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                    <span class="text-blue-400">&lt;textarea</span> <span class="text-purple-400">id</span><span class="text-yellow-300">=</span><span class="text-green-400">"default"</span><span class="text-blue-400">&gt;</span><span class="text-gray-800">Hello, World!</span><span class="text-blue-400">&lt;/textarea&gt;</span>
                </div>
            </div>

            <!-- JS Tab -->
            <div id="js-tab" class="tab-content hidden">
                <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                    <span class="text-blue-400">editflo </span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">(</span>{<br>
                    &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-yellow-300">:</span> <span class="text-green-400">'textarea#default'</span><br>
                    }<span class="text-yellow-300">);</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        The selector can target most block elements when the editor is used in inline editing mode. Inline mode edits the content in place, instead of replacing the element with an iframe.
        <br><br>
        The following example uses the selector in inline editing mode on a div element with id 'editable':
    </p>

    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
        <span class="text-blue-400">editflo </span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">(</span>{<br>
        &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-yellow-300">:</span> <span class="text-green-400">'div#editable'</span><span class="text-yellow-300">,</span><br>
        &nbsp;&nbsp;<span class="text-blue-400">inline</span><span class="text-yellow-300">:</span> <span class="text-purple-400">true</span><br>
        }<span class="text-yellow-300">);</span>
    </div>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        For information on the differences between the classic and inline editing modes, see: Setup inline editing mode.
    </p>

    <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Plugin configuration</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            The functionality of editflo is extended by using plugins, which are enabled using the plugins option.
            <br><br>
            The following example enables the lists (lists), List Styles (advlist), Link (link), and Image (image) plugins.
        </p>

        <!-- Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
            <span class="text-blue-400">editflo </span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">(</span>{<br>
            &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-yellow-300">:</span> <span class="text-green-400">'textarea'</span><span class="text-gray-400">, // change this value according to your HTML</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">plugins</span><span class="text-yellow-300">:</span> <span class="text-green-400">'advlist link image lists'</span><br>
            }<span class="text-yellow-300">);</span>
        </div>
        <p class="text-gray-700 text-sm sm:text-base mb-3">
            For a full list of plugins and their options, see: Add plugins to editflo .
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Toolbar configuration</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            editflo provides a default set of toolbar controls, which can be overridden using the toolbar option.
        </p>
        <h4 class="text-xl font-semibold text-gray-800 mb-4">Default toolbar controls
        </h4>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            The editflo default toolbar contains the following buttons:
        </p>

        <!-- Code Block -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
            <span class="text-blue-400">editflo </span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">(</span>{<br>
            &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-yellow-300">:</span> <span class="text-green-400">'textarea'</span><span class="text-gray-400">, // change this value according to the HTML</span><br>
            &nbsp;&nbsp;<span class="text-blue-400">toolbar</span><span class="text-yellow-300">:</span> <span class="text-green-400">'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | outdent indent'</span><br>
            }<span class="text-yellow-300">);</span>
        </div>
        <p class="text-gray-700 text-sm sm:text-base mb-3">
            The toolbar option defines the presence, order, and grouping of toolbar buttons.
            <br><br>
            Use a space-separated list to specify the toolbar buttons for editflo . Create toolbar groups by using the “|” pipe character between button names.
        </p>
    </div>

    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Menu and Menu bar configuration</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            There are two menu options: <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">menubar</code> and <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">menu</code>.
            <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">menubar</code> is used to define the presence and order of menus, such as File, Edit, and View.
            <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">menu</code> is used to define the presence and order of menu items, such as New Document, Select all, and Source code.
        </p>

        <h3 class="text-xl font-semibold text-gray-800 mb-4">Menu and Menu bar configuration examples</h3>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            To display the File, Edit, and View menus:
        </p>

        <!-- Code Block for menubar -->
        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
            <span class="text-purple-400">editflo </span><span class="text-gray-300">.</span><span class="text-blue-400">init</span><span class="text-gray-300">({</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'textarea'</span><span class="text-gray-400">, // change this value according to your HTML</span><br>
            <span class="text-gray-300 ml-4"></span><span class="text-green-400">menubar</span><span class="text-gray-300">: </span><span class="text-yellow-300">'file edit view'</span><br>
            <span class="text-gray-300">});</span>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-border-light overflow-hidden mb-8">
        <!-- Tabs -->
        <div class="border-b border-border-light">
            <div class="flex">
                <button class="tab-button py-3 px-6 border-b-2 border-primary text-primary font-medium"
                    data-tab="editflo-second">
                    Editflo
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                    data-tab="html-second">
                    HTML
                </button>
                <button
                    class="tab-button py-3 px-6 border-b-2 border-transparent text-text-light hover:text-text-dark font-medium"
                    data-tab="js-second">
                    JS
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Editflo Tab -->
            <div id="editflo-tab-second" class="tab-content">
                <div class="mb-4">
                    <img src="<?= base_url('assets/Image2.png'); ?>" width="full" height="200" alt="">
                </div>
            </div>

            <!-- HTML Tab -->
            <div id="html-tab-second" class="tab-content hidden">
                <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                    <span class="text-blue-400">&lt;textarea</span> <span class="text-purple-400">id</span><span class="text-yellow-300">=</span><span class="text-green-400">"default"</span><span class="text-blue-400">&gt;</span><span class="text-gray-800">Hello, World!</span><span class="text-blue-400">&lt;/textarea&gt;</span>
                </div>
            </div>

            <!-- JS Tab -->
            <div id="js-tab-second" class="tab-content hidden">
                <div class="bg-code-bg text-gray-200 p-4 rounded-md font-mono text-sm">
                    <span class="text-blue-400">editflo </span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">(</span>{<br>
                    &nbsp;&nbsp;<span class="text-blue-400">selector</span><span class="text-yellow-300">:</span> <span class="text-green-400">'textarea#default'</span><br>
                    }<span class="text-yellow-300">);</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Default menu controls</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            The default menus are as follows:
        </p>

        <!-- Code Block for Default Menu Controls -->
        <div class="relative">
            <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs sm:text-sm mb-2 overflow-x-auto whitespace-nowrap">
                <div class="inline-block min-w-max">
                    <span class="text-purple-400">editflo </span><span class="text-gray-300">.</span><span class="text-blue-400">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'textarea'</span><span class="text-gray-400">, // change this value according to your HTML</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">menu</span><span class="text-gray-300">: {</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">file</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'File'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'newdocument restoredraft | preview | importword exportpdf exportword | print | deleteallconversations'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">edit</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'Edit'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'undo redo | cut copy paste pastetext | selectall | searchreplace'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">view</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'View'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'code suggestededits revisionhistory | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">insert</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'Insert'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'image link media addcomment pageembed codesample inserttable | math | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">format</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'Format'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">tools</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'Tools'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'spellchecker spellcheckerlanguage | a11ycheck code wordcount'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">table</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'Table'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'inserttable | cell row column | advtablesort | tableprops deletetable'</span> <span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">help</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'Help'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'help'</span> <span class="text-gray-300">}</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">}</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>
        </div>

        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            Some menu items require a plugin, such as the table menu and items requires the table plugin.
        </p>


        <div class="flex items-start">
            <div class="">
                <h4 class="text-gray-700 text-sm sm:text-base  mb-2">Additional information</h4>
                <ul class="text-gray-700 text-sm sm:text-base  list-disc pl-5 space-y-1">
                    <li>For information on the menu setting, see: <a href="#" class="text-blue-600 hover:underline">User interface options - menu</a>.</li>
                    <li>For information on the menubar setting, see: <a href="#" class="text-blue-600 hover:underline">User interface options - menubar</a>.</li>
                    <li>For a list of all available menu items, see: <a href="#" class="text-blue-600 hover:underline">Menu Items Available for editflo </a>.</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Basic Configuration Example Section -->
    <div class="mb-8 border-t border-gray-200 pt-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Basic configuration example</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
            The following example is a basic editflo configuration.
        </p>

        <!-- Full HTML Example -->
        <div class="relative">
            <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs sm:text-sm mb-2 overflow-x-auto whitespace-nowrap">
                <div class="inline-block min-w-max">
                    <span class="text-blue-400">&lt;!DOCTYPE html&gt;</span><br>
                    <span class="text-blue-400">&lt;html&gt;</span><br>
                    <span class="text-blue-400">&lt;head&gt;</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;script</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-green-400">type</span>=<span class="text-yellow-300">"text/javascript"</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-green-400">src</span>=<span class="text-yellow-300">'https://cdn.tiny.cloud/1/no-api-key/editflo /8/editflo .min.js'</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-green-400">referrerpolicy</span>=<span class="text-yellow-300">"origin"</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-green-400">crossorigin</span>=<span class="text-yellow-300">"anonymous"</span><span class="text-blue-400">&gt;</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;/script&gt;</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;script</span> <span class="text-green-400">type</span>=<span class="text-yellow-300">"text/javascript"</span><span class="text-blue-400">&gt;</span><br>
                    <span class="text-purple-400 ml-4">editflo </span><span class="text-gray-300">.</span><span class="text-blue-400">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'#myTextarea'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">width</span><span class="text-gray-300">: </span><span class="text-orange-400">600</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">height</span><span class="text-gray-300">: </span><span class="text-orange-400">300</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">plugins</span><span class="text-gray-300">: [</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-yellow-300">'advlist'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'autolink'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'link'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'image'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'lists'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'charmap'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'preview'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'anchor'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'pagebreak'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-yellow-300">'searchreplace'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'wordcount'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'visualblocks'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'visualchars'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'code'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'fullscreen'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'insertdatetime'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-yellow-300">'media'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'table'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'emoticons'</span><span class="text-gray-300">, </span><span class="text-yellow-300">'help'</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-gray-300">],</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">toolbar</span><span class="text-gray-300">: </span><span class="text-yellow-300">'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-yellow-300">&nbsp;&nbsp;'bullist numlist outdent indent | link image | print preview media fullscreen | ' +</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-yellow-300">&nbsp;&nbsp;'forecolor backcolor emoticons | help'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">menu</span><span class="text-gray-300">: {</span><br>
                    <span class="text-gray-300 ml-12"></span><span class="text-green-400">favs</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'My Favorites'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'code visualaid | searchreplace | emoticons'</span> <span class="text-gray-300">}</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-gray-300">},</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">menubar</span><span class="text-gray-300">: </span><span class="text-yellow-300">'favs file edit view insert format tools table help'</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">content_css</span><span class="text-gray-300">: </span><span class="text-yellow-300">'css/content.css'</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-gray-300">});</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;/script&gt;</span><br>
                    <span class="text-blue-400">&lt;/head&gt;</span><br>
                    <span class="text-blue-400">&lt;body&gt;</span><br>
                    &nbsp;&nbsp;<span class="text-blue-400">&lt;textarea</span> <span class="text-green-400">id</span>=<span class="text-yellow-300">"myTextarea"</span><span class="text-blue-400">&gt;&lt;/textarea&gt;</span><br>
                    <span class="text-blue-400">&lt;/body&gt;</span><br>
                    <span class="text-blue-400">&lt;/html&gt;</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Break-down Section -->
    <div class="border-t border-gray-200 pt-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Break-down of the basic configuration example</h2>
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-6">
            The following section is a break-down of the options used in the basic configuration example.
        </p>

        <div class="space-y-6">
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Selector Configuration</h3>
                <div class="bg-gray-900 text-gray-100 p-3 rounded font-mono text-sm mb-2">
                    <span class="text-green-400">selector</span><span class="text-gray-300">: </span><span class="text-yellow-300">'#myTextarea'</span><span class="text-gray-300">,</span>
                </div>
                <p class="text-gray-700 text-sm">
                    Selects the textarea with the id myTextarea to be replaced by the editor.
                </p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Width and Height</h3>
                <div class="bg-gray-900 text-gray-100 p-3 rounded font-mono text-sm mb-2">
                    <span class="text-green-400">width</span><span class="text-gray-300">: </span><span class="text-orange-400">600</span><span class="text-gray-300">,</span><br>
                    <span class="text-green-400">height</span><span class="text-gray-300">: </span><span class="text-orange-400">300</span><span class="text-gray-300">,</span>
                </div>
                <p class="text-gray-700 text-sm">
                    Sets the width and height of the editable area in pixels as numeric values.
                </p>
            </div>

            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg border border-gray-200">
                <h3 class="text-base sm:text-lg font-semibold text-gray-800 mb-2">Plugins</h3>
                <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs sm:text-sm mb-2 overflow-x-auto">
                    <span class="text-green-400">plugins</span><span class="text-gray-300">: [</span><br>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span>
                    <span class="inline-block">
                        <span class="text-yellow-300">'advlist'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'autolink'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'link'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'image'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'lists'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'charmap'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'preview'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'anchor'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'pagebreak'</span><span class="text-gray-300">,</span>
                    </span>
                    <br>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span>
                    <span class="inline-block">
                        <span class="text-yellow-300">'searchreplace'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'wordcount'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'visualblocks'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'visualchars'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'code'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'fullscreen'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'insertdatetime'</span><span class="text-gray-300">,</span>
                    </span>
                    <br>
                    <span class="text-gray-300 ml-2 sm:ml-4"></span>
                    <span class="inline-block">
                        <span class="text-yellow-300">'media'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'table'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'emoticons'</span><span class="text-gray-300">, </span>
                        <span class="text-yellow-300">'help'</span>
                    </span>
                    <br>
                    <span class="text-gray-300">],</span>
                </div>
                <p class="text-gray-700 text-xs sm:text-sm">
                    Selects the plugins to be included on load.
                </p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Toolbar</h3>
                <div class="relative">
                    <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs sm:text-sm mb-2 overflow-x-auto whitespace-nowrap">
                        <div class="inline-block min-w-max">
                            <span class="text-green-400">toolbar</span><span class="text-gray-300">: </span><span class="text-yellow-300">'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons'</span><span class="text-gray-300">,</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 text-sm">
                    Selects the toolbar buttons displayed to the user. Use a comma or space as a separator.
                </p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Custom Menu and Menu Bar</h3>
                <div class="relative">
                    <div class="bg-gray-900 text-gray-100 p-2 sm:p-3 rounded font-mono text-xs sm:text-sm mb-2 overflow-x-auto whitespace-nowrap">
                        <div class="inline-block min-w-max">
                            <span class="text-green-400">menu</span><span class="text-gray-300">: {</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-green-400">favs</span><span class="text-gray-300">: { </span><span class="text-orange-400">title</span><span class="text-gray-300">: </span><span class="text-yellow-300">'My Favorites'</span><span class="text-gray-300">, </span><span class="text-orange-400">items</span><span class="text-gray-300">: </span><span class="text-yellow-300">'code visualaid | searchreplace | emoticons'</span> <span class="text-gray-300">}</span><br>
                            <span class="text-gray-300">},</span><br>
                            <span class="text-green-400">menubar</span><span class="text-gray-300">: </span><span class="text-yellow-300">'favs file edit view insert format tools table help'</span><span class="text-gray-300">,</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 text-sm">
                    Adds an additional menu named "My Favorites" with menu, then adds it to the menu bar using menubar.
                </p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Content CSS</h3>
                <div class="bg-gray-900 text-gray-100 p-3 rounded font-mono text-sm mb-2">
                    <span class="text-green-400">content_css</span><span class="text-gray-300">: </span><span class="text-yellow-300">'css/content.css'</span><span class="text-gray-300">,</span>
                </div>
                <p class="text-gray-700 text-sm">
                    Sets the styling of the editable area using content_css.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple Tab functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-button');

        // Function to switch tabs
        function switchTab(tabId) {
            // Remove active class from all buttons in the same container
            const container = document.querySelector(`[data-tab="${tabId}"]`).closest('.border-border-light').parentElement;
            const buttons = container.querySelectorAll('.tab-button');

            buttons.forEach(btn => {
                btn.classList.remove('border-primary', 'text-primary');
                btn.classList.add('border-transparent', 'text-text-light');
            });

            // Add active class to clicked button
            const activeButton = document.querySelector(`[data-tab="${tabId}"]`);
            activeButton.classList.add('border-primary', 'text-primary');
            activeButton.classList.remove('border-transparent', 'text-text-light');

            // Get all tab contents in this container
            const tabContents = container.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected tab content
            const targetTab = document.getElementById(`${tabId}-tab`);
            if (targetTab) {
                targetTab.classList.remove('hidden');
            }
        }

        // Add click event to all tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const tabId = this.getAttribute('data-tab');
                switchTab(tabId);
            });
        });

        // Initialize tabs
        document.querySelectorAll('.tab-button').forEach(btn => {
            if (btn.classList.contains('border-primary')) {
                const tabId = btn.getAttribute('data-tab');
                switchTab(tabId);
            }
        });
    });
</script>