<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <div class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.editor.ui.Registry</h1>
            <p class="text-gray-700 text-sm sm:text-base">TinyMCE UI registration API.
            </p>
        </div>

        <div class="sect1">
            <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-1 pb-2">
                <a class="anchor" href="#summary">Summary</a>
            </h2>
            <div class="sectionbody">

                <div class="sect2">
                    <h3 id="methods-summary" class="text-xl font-semibold text-gray-800 mb-3">
                        <a class="anchor" href="#methods-summary">Methods</a>
                    </h3>

                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Methods will be populated here -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#FakeClipboardItem" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addAutocompleter()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new auto completer component. When a configured string pattern is matched in the content while typing, the autocompleter will be triggered. Emoticons and Charmap use an autocompleter.
                                                <br><br>
                                                For information on creating an autocompleter, see:
                                                <a href="#" class="text-blue-600 hover: underline">UI Components - Autocompleter.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#clear" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addButton()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new toolbar button that executes a command when clicked or activated via keyboard navigation controls.
                                                <br><br>
                                                For information on creating a basic toolbar button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Basic button.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#read" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addContext()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Registers a new context configuration in the registry. The registry stores all context configurations. The buttons in editor configuration object can contain a context property. These button specifications can use the registered contexts to determine whether to enable or disable the buttons based on the current context.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addContextForm()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new contextual form item. Similar to a context menu item, a contextual form is an item with an input form element appearing when a content predicate is matched. An example of a contextual form is the link plugin when the configuration { link_context_toolbar: true } is used. When the cursor is on a link, a contextual input form appears allowing for quick changes to the url field.
                                                <br><br>
                                                For information on creating context forms, see: <a href="" class="text-blue-600 hover: underline">UI Components - Context forms.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addContextMenu()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new context menu section that only appears when a content predicate is matched, for example, the cursor is inside a table.
                                                <br><br>
                                                For information on creating context menus, see: <a href="" class="text-blue-600 hover: underline">UI Components - Context Menu.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addContextToolbar()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">

                                                Registers a new context toolbar that only appears when a content predicate is matched for example the cursor is on an image element.
                                                <br><br>
                                                For information on creating context toolbars, see: <a href="" class="text-blue-600 hover: underline">UI Components - Context Toolbar.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addGroupToolbarButton()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">

                                                Registers a new group toolbar button for the toolbar. Renders a toolbar button that opens a floating toolbar when clicked.
                                                <br><br>
                                                Note: Group toolbar buttons can only be used when using the floating toolbar mode.
                                                <br><br>
                                                For information on creating a group toolbar button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Group toolbar button.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addIcon()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">

                                                Registers a new SVG icon. The icon name reference can be configured by any TinyMCE UI components that can display an icon. The icon is only available to the editor instance it was configured for.
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addMenuButton()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new menu button. Adds a toolbar button that opens a menu when clicked. The menu can be populated by items created by addMenuItem, addNestedMenuItem or addToggleMenuItem.
                                                <br><br>
                                                For information on creating a toolbar menu button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Menu button.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addMenuItem()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new menu item that executes a command when clicked or activated via keyboard navigation controls.
                                                <br><br>
                                                For information on creating a basic menu item, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom menu items: Basic menu items.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addNestedMenuItem()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new menu item that reveals a submenu when clicked or activated by keyboard navigation controls.The submenu can be populated by items created by addMenuItem, addNestedMenuItem or addToggleMenuItem.
                                                <br><br>
                                                For information on creating a nested menu item, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom menu items: Nested menu items.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addSidebar()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new sidebar container. This sidebar container is attached to the right side of the editor and can be toggled open or closed. When registered, a new toolbar toggle button with the same sidebar name is created. Additionally there is a ToggleSidebar command and a 'ToggleSidebar' event that can used to manage the sidebar open/closed state. The tinycomments plugin uses a sidebar for its Ui components.
                                                <br><br>
                                                For information on creating a custom sidebar, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom sidebar.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addSplitButton()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new split button for the toolbar. The list styles plugin uses a split button to simplify its functionality.
                                                <br><br>
                                                For information on creating a split toolbar button, see: <a href="" class="text-blue-600 hover: underline">For information on creating a split toolbar button, see:</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addToggleButton()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new toggle button for the toolbar. A toggle buttons state can be set in the configuration.
                                                <br><br>
                                                For information on creating a toggle toolbar button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Toggle button.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addToggleMenuItem()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new menu item that will act like a toggle button, showing a tick in the menu item to represent state.
                                                <br><br>
                                                For information on creating a toggle menu item, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom menu items: Toggle menu items.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#write" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">addView()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Registers a new view container. This view container is hidden (off) by default and attached next to the main view. It can be toggled on or off. When it is on, the main editor view is hidden and the specific view is shown. When it is off, the specific view is hidden and the main view is shown. There is also a ToggleView command. The ToggleView command can toggle the view visibility. The ToggleView command can be queried for its current state.
                                                <br><br>
                                                For information on creating a custom view, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom view.</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Registry</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 whitespace-nowrap text-gray-700 text-sm sm:text-base"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Methods Section -->
        <div class="sect1 mt-12">
            <h2 id="methods" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b">
                <a class="anchor" href="#methods">Methods</a>
            </h2>
            <div class="sectionbody">

                <!-- addAutocompleter Method -->
                <div class="sect2 mb-10" id="addAutocompleter">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addAutocompleter()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addAutocompleter</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">InlineContent.AutocompleterSpec</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Registers a new auto completer component. When a configured string pattern is matched in the content while typing, the autocompleter will be triggered. Emoticons and Charmap use an autocompleter.
                            <br><br>
                            For information on creating an autocompleter, see: <a href="" class="text-blue-600 hover: underline">UI Components - Autocompleter.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-700 text-sm sm:text-base mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying this autocomplete configuration.</li>
                        <li><code>obj (InlineContent.AutocompleterSpec)</code> – The autocomplete configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addButton Method -->
                <div class="sect2 mb-10" id="addButton">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addButton()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addButton</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ToolbarButtonSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new toolbar button that executes a command when clicked or activated via keyboard navigation controls.
                            <br><br>
                            For information on creating a basic toolbar button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Basic button.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the button, this button name will be used in the toolbar configuration to reference the button</li>
                        <li><code>obj (Toolbar.ToolbarButtonSpec)</code> – the button configuration object..</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addContext Method -->
                <div class="sect2 mb-10" id="addContext">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addContext()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addContext</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">pred</span>: <span class="text-blue-400">Function</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Registers a new context configuration in the registry. The registry stores all context configurations. The buttons in editor configuration object can contain a context property. These button specifications can use the registered contexts to determine whether to enable or disable the buttons based on the current context.

                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new context configuration.</li>
                        <li><code>pred (Function)</code> – A predicate function that determines if the context is active</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addContextForm Method -->
                <div class="sect2 mb-10" id="addContextForm">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addContextForm()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addContextForm</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ContextFormSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Registers a new contextual form item. Similar to a context menu item, a contextual form is an item with an input form element appearing when a content predicate is matched. An example of a contextual form is the link plugin when the configuration { link_context_toolbar: true } is used. When the cursor is on a link, a contextual input form appears allowing for quick changes to the url field.
                            <br><br>
                            For information on creating context forms, see: <a href="" class="text-blue-600 hover: underline">UI Components - Context forms.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new contextual form item.</li>
                        <li><code>obj (Toolbar.ContextFormSpec)</code> – the context form configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addContextMenu Method -->
                <div class="sect2 mb-10" id="addContextMenu">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addContextMenu()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addContextForm</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ContextFormSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new context menu section that only appears when a content predicate is matched, for example, the cursor is inside a table.
                            <br><br>
                            For information on creating context menus, see: <a href="" class="text-blue-600 hover: underline">UI Components - Context Menu.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new context menu.</li>
                        <li><code>obj (Menu.ContextMenuSpec)</code> – The context menu configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addContextToolbar Method -->
                <div class="sect2 mb-10" id="addContextToolbar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addContextToolbar()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addContextToolbar</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ContextToolbarSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new context toolbar that only appears when a content predicate is matched for example the cursor is on an image element.
                            <br><br>
                            For information on creating context toolbars, see: <a href="" class="text-blue-600 hover: underline">UI Components - Context Toolbar.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new context toolbar.</li>
                        <li><code>obj (Toolbar.ContextToolbarSpec)</code> – The context menu configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addGroupToolbarButton Method -->
                <div class="sect2 mb-10" id="addGroupToolbarButton">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addGroupToolbarButton()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addGroupToolbarButton</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.GroupToolbarButtonSpec</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new group toolbar button for the toolbar. Renders a toolbar button that opens a floating toolbar when clicked.
                            <br><br>
                            Note: Group toolbar buttons can only be used when using the floating toolbar mode.
                            <br><br>
                            For information on creating a group toolbar button, see: UI Components - <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Group toolbar button.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>Boolean</code> – true/false if the undo manager has any undo levels.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addIcon Method -->
                <div class="sect2 mb-10" id="addIcon">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addIcon()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addIcon</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">svgData</span>: <span class="text-blue-400">String</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Registers a new SVG icon. The icon name reference can be configured by any TinyMCE UI components that can display an icon. The icon is only available to the editor instance it was configured for.</p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new icon.</li>
                        <li><code>svgData (String)</code>The SVG data string the browser will use to render the SVG icon.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addMenuButton Method -->
                <div class="sect2 mb-10" id="addMenuButton">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addMenuButton()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addMenuButton</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ToolbarMenuButtonSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new menu button. Adds a toolbar button that opens a menu when clicked. The menu can be populated by items created by addMenuItem, addNestedMenuItem or addToggleMenuItem.
                            <br><br>
                            For information on creating a toolbar menu button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Menu button.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new menu button.</li>
                        <li><code>obj (Toolbar.ToolbarMenuButtonSpec)</code> – The menu button configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addMenuItem Method -->
                <div class="sect2 mb-10" id="addMenuItem">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addMenuItem()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addMenuItem</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Menu.MenuItemSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new menu item that executes a command when clicked or activated via keyboard navigation controls.

                            <br><br>

                            For information on creating a basic menu item, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom menu items: Basic menu items.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new menu item.</li>
                        <li><code>obj (Menu.MenuItemSpec)</code> – The menu item configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addNestedMenuItem Method -->
                <div class="sect2 mb-10" id="transact">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addNestedMenuItem()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addNestedMenuItem</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Menu.NestedMenuItemSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new menu item that reveals a submenu when clicked or activated by keyboard navigation controls.The submenu can be populated by items created by addMenuItem, addNestedMenuItem or addToggleMenuItem.
                            <br><br>
                            For information on creating a nested menu item, see: UI Components - <a href="" class="text-blue-600 hover: underline">Custom menu items: Nested menu items.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new nested menu item.</li>
                        <li><code>obj (Menu.NestedMenuItemSpec)</code> – The nested menu item configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addSidebar Method -->
                <div class="sect2 mb-10" id="addSidebar">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addSidebar()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addSidebar</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Sidebar.SidebarSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new sidebar container. This sidebar container is attached to the right side of the editor and can be toggled open or closed. When registered, a new toolbar toggle button with the same sidebar name is created. Additionally there is a ToggleSidebar command and a 'ToggleSidebar' event that can used to manage the sidebar open/closed state. The tinycomments plugin uses a sidebar for its Ui components.
                            <br><br>
                            For information on creating a custom sidebar, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom sidebar.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new sidebar.</li>
                        <li><code>obj (Sidebar.SidebarSpec)</code> – The sidebar configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addSplitButton Method -->
                <div class="sect2 mb-10" id="addSplitButton">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addSplitButton()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addSplitButton</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ToolbarSplitButtonSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new split button for the toolbar. The list styles plugin uses a split button to simplify its functionality.
                            <br><br>
                            For information on creating a split toolbar button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Split button.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new split button.</li>
                        <li><code>obj (Toolbar.ToolbarSplitButtonSpec)</code> – The split button configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addToggleButton Method -->
                <div class="sect2 mb-10" id="addToggleButton">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addToggleButton()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addToggleButton</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Toolbar.ToolbarToggleButtonSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new toggle button for the toolbar. A toggle buttons state can be set in the configuration.
                            <br><br>
                            For information on creating a toggle toolbar button, see: <a href="" class="text-blue-600 hover: underline">UI Components - Types of toolbar buttons: Toggle button.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new split button.</li>
                        <li><code>obj (Toolbar.ToolbarToggleButtonSpec)</code> – The toggle button configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addToggleMenuItem Method -->
                <div class="sect2 mb-10" id="addToggleMenuItem">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addToggleMenuItem()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addToggleMenuItem</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">Menu.ToggleMenuItemSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new menu item that will act like a toggle button, showing a tick in the menu item to represent state.
                            <br><br>
                            For information on creating a toggle menu item, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom menu items: Toggle menu items.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new menu item.</li>
                        <li><code>obj (Menu.ToggleMenuItemSpec)</code> – The menu item configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- addView Method -->
                <div class="sect2 mb-10" id="addView">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addView()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-purple-400">addView</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">obj</span>: <span class="text-blue-400">View.ViewSpec</span>)
                                    </code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Registers a new view container. This view container is hidden (off) by default and attached next to the main view. It can be toggled on or off. When it is on, the main editor view is hidden and the specific view is shown. When it is off, the specific view is hidden and the main view is shown. There is also a ToggleView command. The ToggleView command can toggle the view visibility. The ToggleView command can be queried for its current state.
                            <br><br>
                            For information on creating a custom view, see: <a href="" class="text-blue-600 hover: underline">UI Components - Custom view.</a>
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Parameters</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>name (String)</code> – Unique name identifying the new view.</li>
                        <li><code>obj (View.ViewSpec)</code> – The view configuration object.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.copy-button').forEach(button => {
            button.addEventListener('click', function() {
                const code = this.closest('.group').querySelector('.bg-gray-900 code').textContent.trim();

                navigator.clipboard.writeText(code).then(() => {
                    // Toast message
                    const toast = this.querySelector('.copy-toast');
                    if (toast) {
                        toast.classList.remove('hidden');
                        setTimeout(() => toast.classList.add('hidden'), 1500);
                    }

                    // Button change
                    const originalHTML = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';

                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.style.backgroundColor = '';
                    }, 2000);
                });
            });
        });
    });
</script>