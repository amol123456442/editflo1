<div class="flex flex-col md:flex-row px-4">

    <div class=" max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.Editor</h1>
            <p class="text-gray-700 text-sm sm:text-base">This class contains the core logic for a editflo editor.</p>
        </div>
        <div class="sect3 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Examples</h2>

            <div class="listingblock mb-4">
                <div class="content">
                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
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
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                            <span class="text-gray-300">// Add a class to all paragraphs in the editor.</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">dom</span><span class="text-yellow-300">.</span><span class="text-purple-400">addClass</span><span class="text-yellow-300">(</span><span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">dom</span><span class="text-yellow-300">.</span><span class="text-purple-400">select</span><span class="text-yellow-300">(</span><span class="text-green-400">'p'</span><span class="text-yellow-300">),</span> <span class="text-green-400">'someclass'</span><span class="text-yellow-300">);</span><br><br>

                            <span class="text-gray-300">// Gets the current editors selection as text</span><br>
                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-blue-400">selection</span><span class="text-yellow-300">.</span><span class="text-purple-400">getContent</span><span class="text-yellow-300">({</span> <span class="text-purple-400">format</span>: <span class="text-green-400">'text'</span> <span class="text-yellow-300">});</span><br><br>

                            <span class="text-gray-300">// Creates a new editor instance</span><br>
                            <span class="text-blue-400">const</span> <span class="text-green-400">ed</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">new</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">Editor</span><span class="text-yellow-300">(</span><span class="text-green-400">'textareaid'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">{</span><br>
                            <span class="text-purple-400 ml-4">some_setting</span>: <span class="text-green-400">1</span><br>
                            <span class="text-yellow-300">},</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">EditorManager</span><span class="text-yellow-300">);</span><br><br>

                            <span class="text-green-400">ed</span><span class="text-yellow-300">.</span><span class="text-purple-400">render</span><span class="text-yellow-300">();</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sect1">
                <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-1 pb-2">
                    <a class="anchor" href="#summary">Summary</a>
                </h2>
                <div class="sectionbody">

                    <div class="sect2">
                        <h3 id="properties" class="text-gray-700 text-sm sm:text-base mb-3">
                            <a class="anchor" href="#properties">Properties</a>
                        </h3>

                        <div class="">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" divide-y divide-gray-200">
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">baseURI</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">URL</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">URI object to current document that holds the editflo editor instance.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">contentCSS</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Array</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Array with CSS files to load into the iframe.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">contentStyles</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Array</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Array of CSS styles to add to head of document when the editor loads.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">documentBaseURI</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">URL</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">URI object to document configured for the editflo instance.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">dom</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">DOMUtils</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">DOM instance for the editor.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">editorUid</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">String</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">A uuid string to uniquely identify an editor across any page.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">editorUpload</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">EditorUpload</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Editor upload API</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">formatter</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Formatter</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Formatter instance.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">id</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">String</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Editor instance id, normally the same as the div/textarea that was replaced.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">initialized</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Boolean</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Is set to true after the editor instance has been initialized</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">mode</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">EditorMode</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Editor mode API</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">notificationManager</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">NotificationManager</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Notification manager reference, use this to open new windows and dialogs.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">options</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">EditorOptions</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Editor options API</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">parser</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">DomParser</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">HTML parser will be used when contents is inserted into the editor.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">plugins</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Object</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Name/Value object containing plugin instances.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">schema</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Schema</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Schema instance, enables you to validate elements and its children.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">selection</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Selection</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Selection instance for the editor.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">serializer</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Serializer</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">DOM serializer for the editor. Will be used when contents is extracted from the editor.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">theme</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">Theme</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Reference to the theme instance that was used to generate the UI.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">ui</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">ui</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Editor ui components</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">undoManager</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">UndoManager</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Undo manager instance, responsible for handling undo levels.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">userLookup</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">UserLookup</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Editor user lookup API</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">windowManager</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-gray-700 text-sm sm:text-base">WindowManager</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Window manager reference, use this to open new windows and dialogs.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Editor</td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="sect2">
                        <h3 id="Constructors" class="text-gray-700 text-sm sm:text-base mb-3">
                            <a class="anchor" href="#Constructors">Constructors</a>
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
                                                <a href="#Editor" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">Editor()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Constructs a editor instance by id.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="sect2">
                        <h3 id="methods-summary" class="text-gray-700 text-sm sm:text-base mb-3">
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
                                                <a href="#addCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addCommand()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Adds a custom command to the editor. This function can also be used to override existing commands. The command that you add can be executed with execCommand.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#addQueryStateHandler" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addQueryStateHandler()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Adds a custom query state command to the editor. This function can also be used to override existing commands. The command that you add can be executed with queryCommandState function.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#addQueryValueHandler" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addQueryValueHandler()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Adds a custom query value command to the editor. This function can also be used to override existing commands. The command that you add can be executed with queryCommandValue function.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#addShortcut" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addShortcut()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Adds a keyboard shortcut for some command or function.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#addVisual" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addVisual()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Adds visual aids for tables, anchors, etc so they can be more easily edited inside the editor.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#convertURL" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">convertURL()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">URL converter function this gets executed each time a user adds an img, a or any other element that has a URL in it. This will be called both by the DOM and HTML manipulation functions.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#destroy" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">destroy()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Destroys the editor instance by removing all events, element references or other resources that could leak memory. This method will be called automatically when the page is unloaded but you can also call it directly if you know what you are doing.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#dispatch" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">dispatch()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Dispatches the specified event by name. Consult the event reference for more details on each event.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">execCommand()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Executes a registered command on the current instance. A list of available commands can be found in the editflo command identifiers documentation.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#fire" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">fire()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Fires the specified event by name. Consult the event reference for more details on each event. <em class="text-gray-600">Deprecated in editflo 6.0 and has been marked for removal in editflo 9.0. Use [dispatch] instead.</em></span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#focus" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">focus()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Focuses/activates the editor. This will set this editor as the activeEditor in the editflo collection it will also place DOM focus inside the editor.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getBody" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getBody()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the root element of the editable area. For a non-inline iframe-based editor, returns the iframe's body element.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getContainer" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getContainer()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the container element of the editor. The container element includes all the elements added to the page for the editor. Such as UI, iframe, etc.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getContent" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getContent()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Gets the content from the editor instance, this will cleanup the content before it gets returned using the different cleanup rules options.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getContentAreaContainer" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getContentAreaContainer()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the content area container element of the editor. This element holds the iframe or the editable element.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getDoc" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getDoc()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the iframes document object.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getElement" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getElement()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the target element/rextarea that got replaced with a editflo editor instance.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getParam" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getParam()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns a configuration parameter by name. <em class="text-gray-600">Deprecated in editflo 6.0 and has been marked for removal in editflo 7.0. Use the [editor.options.get] API instead.</em></span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#getWin" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">getWin()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns the iframes window object.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#hasEditableRoot" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">hasEditableRoot()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the object has a event of the specified name.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#hasEventListeners" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">hasEventListeners()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the object has a event of the specified name.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Observable</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#hasFocus" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">hasFocus()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the editor has real keyboard focus.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#hasPlugin" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">hasPlugin()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Checks that the plugin is in the editor configuration and can optionally check if the plugin has been loaded.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#hide" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">hide()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Hides the editor and shows any textarea/div that the editor is supposed to replace.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#insertContent" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">insertContent()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Inserts content at caret position.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#isDirty" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">isDirty()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the editor is dirty or not. It will get dirty if the user has made modifications to the contents. The dirty state is automatically set to [True] when the user modifies editor content after initialization or the last [editor.save()] call. This includes changes made using undo or redo.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#isHidden" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">isHidden()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the editor is hidden or not.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#load" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">load()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Loads contents from the textarea, input or other element that got converted into an editor instance. This method will move the contents from that textarea, input or other element into the editor by using setContent so all events etc that method has will get dispatched as well.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#nodeChanged" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">nodeChanged()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Dispatches out a onNodeChange event to all observers. This method should be called when you need to update the UI states or element path etc.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#off" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">off()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Unbinds an event listener to a specific event by name. Consult the event reference for more details on each event.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Observable</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#on" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">on()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Binds an event listener to a specific event by name. Consult the event reference for more details on each event.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Observable</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#once" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">once()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Bind the event callback and once it fires the callback is removed. Consult the event reference for more details on each event.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Observable</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#queryCommandState" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">queryCommandState()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns a command specific state, for example if bold is enabled or not.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#queryCommandSupported" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">queryCommandSupported()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the command is supported or not.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#queryCommandValue" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">queryCommandValue()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Returns a command specific value, for example the current font size.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">remove()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Removes the editor from the dom and editflo collection.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#render" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">render()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Renders the editor/adds it to the page.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#resetContent" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">resetContent()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Resets the editors content, undo/redo history and dirty state. If [initialContent|sort specified, then the editor is reset back to the initial start content.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#save" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">save()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Saves the contents from an editor out to the textarea or div element that got converted into an editor instance. This method will move the HTML contents from the editor into that textarea or div by getContent so all events etc that method has will get dispatched as well.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#setContent" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">setContent()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Sets the specified content to the editor instance, this will cleanup the content before it gets set using the different cleanup rules options. <em class="text-gray-600">Note: The content return value was deprecated in editflo 6.0 and has been marked for removal in editflo 7.0.</em></span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#setDirty" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">setDirty()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Explicitly sets the dirty state. This will fire the dirty event if the editor dirty state is changed from false to true by invoking this method.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#setEditableRoot" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">setEditableRoot()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Changes the editable state of the editor's root element.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#setProgressState" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">setProgressState()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Sets the progress state, this will display a throbber/progress for the editor. This is ideal for asynchronous operations like an AJAX save call.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#show" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">show()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Shows the editor and hides any textarea/div that the editor is supposed to replace.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#translate" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">translate()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Translates the specified string by replacing variables with language pack items it will also check if there is a key matching the input.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#uploadImages" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">uploadImages()</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="text-gray-700 text-sm sm:text-base">Uploads all data url/blob url images in the editor contents to server.</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Editor</code></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Constructors Section -->
            <div class="sect1 mt-12">
                <h2 id="constructors" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b">
                    <a class="anchor" href="#constructors">Constructors</a>
                </h2>
                <div class="sectionbody">

                    <!-- Add Method -->
                    <div class="sect2 mb-10" id="Editor">
                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">Editor()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3  opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                            <span class="text-purple-400">public constructor</span> <span class="text-purple-400">Editor</span>(<span class="text-green-400">id</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">options</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">editorManager</span>: <span class="text-blue-400">editflo.EditorManager</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Constructs a editor instance by id.</p>
                        </div>


                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>id (String)</code> - Unique id for the editor.</li>
                                    <li><code>options (Object)</code> - Options for the editor.</li>
                                    <li><code>editorManager (EditorManager)</code> - EditorManager instance.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="my-6 border-gray-300">

                    </div>

                </div>
            </div>


            <!-- Methods Section -->
            <div class="sect1 mt-12">
                <h2 id="methods" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b">
                    <a class="anchor" href="#methods">Methods</a>
                </h2>
                <div class="sectionbody">

                    <!-- addCommand Method -->
                    <div class="sect2 mb-10" id="addCommand">
                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">addCommand()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3  opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                        <code class="javascript"><span class="text-purple-400">addCommand</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds a custom command to the editor. This function can also be used to override existing commands. The command that you add can be executed with execCommand.</p>
                        </div>

                        <div class="sect3 mb-6">

                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                            <div class="listingblock mb-4">
                                <div class="content">
                                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                        <div class="absolute top-2 right-2 flex items-center gap-3  opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                            <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                            <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                <i class="fas fa-copy text-xs"></i> Copy
                                                <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                    Copied!
                                                </div>
                                            </button>
                                        </div>
                                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">


                                            <span class="text-gray-300">// Adds a custom command that later can be executed using execCommand</span><br>
                                            <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">({</span><br>
                                            <span class="text-gray-300 ml-4">...</span><br><br>

                                            <span class="text-purple-400 ml-4">setup</span>: <span class="text-yellow-300">(</span><span class="text-green-400">ed</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                            <span class="text-gray-300 ml-8">// Register example command</span><br>
                                            <span class="text-green-400 ml-8">ed</span><span class="text-yellow-300">.</span><span class="text-purple-400">addCommand</span><span class="text-yellow-300">(</span><span class="text-green-400">'mycommand'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">ui</span><span class="text-yellow-300">,</span> <span class="text-green-400">v</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                            <span class="text-green-400 ml-12">ed</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello world!! Selection: '</span> <span class="text-yellow-300">+</span> <span class="text-green-400">ed</span><span class="text-yellow-300">.</span><span class="text-blue-400">selection</span><span class="text-yellow-300">.</span><span class="text-purple-400">getContent</span><span class="text-yellow-300">({</span> <span class="text-purple-400">format</span>: <span class="text-green-400">'text'</span> <span class="text-yellow-300">}));</span><br>
                                            <span class="text-yellow-300 ml-8">});</span><br>
                                            <span class="text-yellow-300 ml-4">}</span><br>
                                            <span class="text-yellow-300">});</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - Command name to add/override.</li>
                                        <li><code>callback (Function)</code> - Function to execute when the command occurs.</li>
                                        <li><code>scope (Object)</code> - Optional scope to execute the function in.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- addQueryStateHandler Method -->
                        <div class="sect2 mb-10" id="addQueryStateHandler">
                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">addQueryStateHandler()</h3>
                            <div class="listingblock mb-4">
                                <div class="content">
                                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                        <!-- Top bar (text + copy button ONLY visible on hover) -->
                                        <div class="absolute top-2 right-2 flex items-center gap-3   opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                                <span class="text-purple-400">addQueryStateHandler</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>)</code>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Adds a custom query state command to the editor. This function can also be used to override existing commands. The command that you add can be executed with queryCommandState function.</p>
                            </div>

                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - Command name to add/override.</li>
                                        <li><code>callback (Function)</code> - Function to execute when the command state retrieval occurs.</li>
                                        <li><code>scope (Object)</code> - Optional scope to execute the function in.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- addQueryValueHandler Method -->
                        <div class="sect2 mb-10" id="addQueryValueHandler">
                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">addQueryValueHandler()</h3>
                            <div class="listingblock mb-4">
                                <div class="content">
                                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                        <!-- Top bar (text + copy button ONLY visible on hover) -->
                                        <div class="absolute top-2 right-2 flex items-center gap-3  opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                            <code class="javascript"><span class="text-purple-400">addQueryValueHandler</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>)</code>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Adds a custom query value command to the editor. This function can also be used to override existing commands. The command that you add can be executed with queryCommandValue function.</p>
                            </div>

                            <div class="sect3">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                <div class="ulist">
                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                        <li><code>name (String)</code> - Command name to add/override.</li>
                                        <li><code>callback (Function)</code> - Function to execute when the command value retrieval occurs.</li>
                                        <li><code>scope (Object)</code> - Optional scope to execute the function in.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="my-6 border-gray-300">
                        </div>

                        <!-- addShortcut Method -->
                        <div class="sect2 mb-10" id="addShortcut">
                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">addShortcut()</h3>
                            <div class="listingblock mb-4">
                                <div class="content">
                                    <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                        <!-- Top bar (text + copy button ONLY visible on hover) -->
                                        <div class="absolute top-2 right-2 flex items-center gap-3    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                            <code class="javascript"><span class="text-purple-400">addShortcut</span>(<span class="text-green-400">pattern</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">desc</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">cmdFunc</span>: <span class="text-blue-400">String | Function</span>, <span class="text-green-400">scope</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Boolean</span></code>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paragraph mb-4">
                                <p class="text-gray-700 text-sm sm:text-base">Adds a keyboard shortcut for some command or function.</p>
                            </div>

                            <div class="sect3 mb-6">

                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                <div class="listingblock mb-4">
                                    <div class="content">
                                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                            <div class="absolute top-2 right-2 flex items-center gap-3    opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                    <i class="fas fa-copy text-xs"></i> Copy
                                                    <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                        Copied!
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">


                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addShortcut</span><span class="text-yellow-300">(</span><span class="text-green-400">'ctrl+a'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'description of the shortcut'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{});</span><br>
                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addShortcut</span><span class="text-yellow-300">(</span><span class="text-green-400">'ctrl+alt+a'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'description of the shortcut'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{});</span><br><br>

                                                <span class="text-gray-300">// "meta" maps to Command on Mac and Ctrl on PC</span><br>
                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addShortcut</span><span class="text-yellow-300">(</span><span class="text-green-400">'meta+a'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'description of the shortcut'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{});</span><br><br>

                                                <span class="text-gray-300">// "access" maps to Control+Option on Mac and shift+alt on PC</span><br>
                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addShortcut</span><span class="text-yellow-300">(</span><span class="text-green-400">'access+a'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'description of the shortcut'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{});</span><br><br>

                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addShortcut</span><span class="text-yellow-300">(</span><span class="text-green-400">'meta+access+c'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'Opens the code editor dialog.'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">execCommand</span><span class="text-yellow-300 ml-4">(</span><span class="text-green-400">'CodeEditor'</span><span class="text-yellow-300">);</span><br>
                                                <span class="text-yellow-300">});</span><br><br>

                                                <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">addShortcut</span><span class="text-yellow-300">(</span><span class="text-green-400">'meta+shift+32'</span><span class="text-yellow-300">,</span> <span class="text-green-400">'Inserts "Hello, World!" for meta+shift+space'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                                <span class="text-blue-400 ml-4">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">execCommand</span><span class="text-yellow-300">(</span><span class="text-green-400">'InsertContent'</span><span class="text-yellow-300">,</span> <span class="text-yellow-400">false</span><span class="text-yellow-300">,</span> <span class="text-green-400">'Hello, World!'</span><span class="text-yellow-300">);</span><br>
                                                <span class="text-yellow-300">});</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                            <li><code>pattern (String)</code> - Shortcut pattern. Like for example: ctrl+alt+o.</li>
                                            <li><code>desc (String)</code> - Text description for the command.</li>
                                            <li><code>cmdFunc (String | Function)</code> - Command name string or function to execute when the key is pressed.</li>
                                            <li><code>scope (Object)</code> - Optional scope to execute the function in.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                            <li><code>Boolean</code> - true/false state if the shortcut was added or not.</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="my-6 border-gray-300">
                            </div>

                            <!-- addVisual section -->
                            <div class="sect2 mb-10" id="addVisual">
                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">addVisual()</h3>
                                <div class="listingblock mb-4">
                                    <div class="content">
                                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                                            <div class="absolute top-2 right-2 flex items-center gap-3    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                                    <span class="text-purple-400">addVisual</span>(<span class="text-green-400">elm</span>: <span class="text-blue-400">Element</span>)</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="paragraph mb-4">
                                    <p class="text-gray-700 text-sm sm:text-base">Adds visual aids for tables, anchors, etc so they can be more easily edited inside the editor.</p>
                                </div>

                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                            <li><code>elm (Element)</code> - Optional root element to loop though to find tables, etc that needs the visual aid.</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="my-6 border-gray-300">
                            </div>

                            <!-- convertURL section -->
                            <div class="sect2 mb-10" id="convertURL">
                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">convertURL()</h3>
                                <div class="listingblock mb-4">
                                    <div class="content">
                                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                                            <div class="absolute top-2 right-2 flex items-center gap-3  opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                                <code class="javascript"><span class="text-purple-400">convertURL</span>(<span class="text-green-400">url</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">elm</span>: <span class="text-blue-400">String | HTMLElement</span>): <span class="text-yellow-400">String</span></code>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="paragraph mb-4">
                                    <p class="text-gray-700 text-sm sm:text-base">URL converter function this gets executed each time a user adds an img, a or any other element that has a URL in it. This will be called both by the DOM and HTML manipulation functions.</p>
                                </div>

                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                            <li><code>url (String)</code> - URL to convert.</li>
                                            <li><code>name (String)</code> - Attribute name src, href etc.</li>
                                            <li><code>elm (String | HTMLElement)</code> - Tag name or HTML DOM element depending on HTML or DOM insert.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                            <li><code>String</code> - Converted URL string.</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="my-6 border-gray-300">
                            </div>

                            <!-- destroy section -->
                            <div class="sect2 mb-10" id="destroy">
                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">destroy()</h3>
                                <div class="listingblock mb-4">
                                    <div class="content">
                                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                                            <div class="absolute top-2 right-2 flex items-center gap-3   opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                                <code class="javascript"><span class="text-purple-400">destroy</span>(<span class="text-green-400">automatic</span>: <span class="text-blue-400">Boolean</span>)</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="paragraph mb-4">
                                    <p class="text-gray-700 text-sm sm:text-base">Destroys the editor instance by removing all events, element references or other resources that could leak memory. This method will be called automatically when the page is unloaded but you can also call it directly if you know what you are doing.</p>
                                </div>

                                <div class="sect3">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                    <div class="ulist">
                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                            <li><code>automatic (Boolean)</code> - Optional state if the destroy is an automatic destroy or user called one.</li>
                                    </div>
                                </div>

                                <hr class="my-6 border-gray-300">
                            </div>

                            <!-- dispatch section -->
                            <div class="sect2 mb-10" id="dispatch">
                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">dispatch()</h3>
                                <div class="listingblock mb-4">
                                    <div class="content">
                                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                                            <div class="absolute top-2 right-2 flex items-center gap-3   opacity-0 group-hover:opacity-100 transition-opacity duration-200">

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
                                                <code class="javascript"><span class="text-purple-400">dispatch</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">args</span>?: <span class="text-blue-400">Object</span>, <span class="text-green-400">bubble</span>?: <span class="text-blue-400">Boolean</span>): <span class="text-yellow-400">Object</span></code>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="paragraph mb-4">
                                    <p class="text-gray-700 text-sm sm:text-base">Dispatches the specified event by name. Consult the event reference for more details on each event.</p>
                                </div>

                                <div class="sect3 mb-6">

                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                    <div class="listingblock mb-4">
                                        <div class="content">
                                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                <div class="absolute top-2 right-2 flex items-center gap-3   opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                        <i class="fas fa-copy text-xs"></i> Copy
                                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                            Copied!
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="overflow-x-auto py-0 mb-3">
                                                    <pre class="px-6 text-sm leading-tight font-mono">
                                                        <span class="text-blue-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">dispatch</span><span class="text-yellow-300">(</span><span class="text-green-400">'contentChanged'</span><span class="text-yellow-300">);</span><br><br>                 
                                                 </div>
                                              </div>
                                    </div>
                                                                                </div>
                                                                                <div class="sect3">
                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                    <div class="ulist">
                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                            <li><code>name (String)</code> - Name of the event to dispatch.</li>
                                                                                            <li><code>args (Object?)</code> - Event arguments.</li>
                                                                                            <li><code>bubble (Boolean?)</code> - True/false if the event is to be bubbled.</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="sect3">
                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                    <div class="ulist">
                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                            <li><code>Object</code> - Event args instance passed in.</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="my-6 border-gray-300">
                                                                            </div>

                                                                            <!-- execCommand section -->
                                                                            <div class="sect2 mb-10" id="execCommand">
                                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">execCommand()</h3>
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
                                                                                                    <span class="text-purple-400">execCommand</span>(<span class="text-green-400">cmd</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">ui</span>: <span class="text-blue-400">Boolean</span>, <span class="text-green-400">value</span>: <span class="text-blue-400">Object | Array | String | Number | Boolean</span>, <span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Boolean</span></code>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="paragraph mb-4">
                                                                                    <p class="text-gray-700 text-sm sm:text-base">Executes a registered command on the current instance. A list of available commands can be found in the editflo command identifiers documentation.</p>
                                                                                </div>

                                                                                <div class="sect3 mb-6">

                                                                                    <div class="sect3">
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                        <div class="ulist">
                                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                <li><code>cmd (String)</code> - Command name to execute, for example Link or Bold.</li>
                                                                                                <li><code>ui (Boolean)</code> - Specifies if a UI (dialog) should be presented or not.</li>
                                                                                                <li><code>value (Object | Array | String | Number | Boolean) </code> - Optional command value, this can be anything.</li>
                                                                                                <li><code>args (Object)</code> -Optional arguments object.</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="sect3">
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                                                                                        <div class="ulist">
                                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                <li><code>Boolean</code> - true or false if the command was supported or not.</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="my-6 border-gray-300">
                                                                                </div>

                                                                                <!-- fire section -->
                                                                                <div class="sect2 mb-10" id="fire">
                                                                                    <h3 class="text-gray-700 text-sm sm:text-base mb-4">fire()</h3>
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
                                                                                                    <code class="javascript"><span class="text-purple-400">fire</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">args</span>: <span class="text-blue-400">Object?</span>, <span class="text-green-400">bubble</span>: <span class="text-blue-400">Boolean?</span>): <span class="text-yellow-400">Object</span></code>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="paragraph mb-4">
                                                                                        <p class="text-gray-700 text-sm sm:text-base">Fires the specified event by name. Consult the event reference for more details on each event.
                                                                                            <br><br>
                                                                                            Deprecated in editflo 6.0 and has been marked for removal in editflo 9.0. Use dispatch instead.
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="sect3 mb-6">

                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                                                        <div class="listingblock mb-4">
                                                                                            <div class="content">
                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
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
                                                                                                    <div class="overflow-x-auto py-0 mb-3">
                                                                                                        <pre class="px-6 text-sm leading-tight font-mono">

                                                            <span class="text-blue-400">instance</span><span class="text-yellow-300">.</span><span class="text-purple-400">fire</span><span class="text-yellow-300">(</span><span class="text-green-400">'event'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">{</span><span class="text-gray-300">...</span><span class="text-yellow-300">});</span></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sect3">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                        <div class="ulist">
                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                <li><code>name (String)</code> - Name of the event to fire.</li>
                                                <li><code>args (Object?)</code> - Event arguments.</li>
                                                <li><code>bubble (Boolean?)</code> - True/false if the event is to be bubbled.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sect3">
                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                        <div class="ulist">
                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                <li><code>Object</code> - Event args instance passed in.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-6 border-gray-300">
                                </div>

                                <!-- focus section -->
                                <div class="sect2 mb-10" id="focus">
                                    <h3 class="text-gray-700 text-sm sm:text-base mb-4">focus()</h3>
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
                                                        <span class="text-purple-400">focus</span>(<span class="text-green-400">skipFocus</span>: <span class="text-blue-400">Boolean</span>)</code>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="paragraph mb-4">
                                        <p class="text-gray-700 text-sm sm:text-base">Focuses/activates the editor. This will set this editor as the activeEditor in the editflo collection it will also place DOM focus inside the editor.</p>
                                    </div>

                                    <div class="sect3 mb-6">


                                        <div class="sect3">
                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                            <div class="ulist">
                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                    <li><code>skipFocus (Boolean)</code> - Skip DOM focus. Just set is as the active editor.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- getBody section -->
                                    <div class="sect2 mb-10" id="getBody">
                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">getBody()</h3>
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
                                                        <code class="javascript"><span class="text-purple-400">getBody</span>(): <span class="text-blue-400">Element</span></code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="paragraph mb-4">
                                            <p class="text-gray-700 text-sm sm:text-base">Returns the root element of the editable area. For a non-inline iframe-based editor, returns the iframe’s body element.</p>
                                        </div>

                                        <div class="sect3 mb-6">
                                            <div class="sect3">
                                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                <div class="ulist">
                                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                        <li><code>Element</code> - The root element of the editable area.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr class="my-6 border-gray-300">
                                        </div>


                                        <!-- getContainer section -->
                                        <div class="sect2 mb-10" id="getContainer">
                                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">getContainer()</h3>
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
                                                            <<code class="javascript"><span class="text-purple-400">getContainer</span>(): <span class="text-blue-400">Element</span></code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="paragraph mb-4">
                                                <p class="text-gray-700 text-sm sm:text-base">Returns the container element of the editor. The container element includes all the elements added to the page for the editor. Such as UI, iframe, etc.</p>
                                            </div>

                                            <div class="sect3 mb-6">
                                                <div class="sect3">
                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                    <div class="ulist">
                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                            <li><code>Element</code> - HTML DOM element for the editor container.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr class="my-6 border-gray-300">
                                            </div>

                                            <!-- getContent section -->
                                            <div class="sect2 mb-10" id="getContent">
                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">getContent()</h3>
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
                                                                <code class="javascript"><span class="text-purple-400">getContent</span>(<span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">String</span></code>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="paragraph mb-4">
                                                    <p class="text-gray-700 text-sm sm:text-base">Gets the content from the editor instance, this will cleanup the content before it gets returned using the different cleanup rules options.
                                                    </p>
                                                </div>

                                                <div class="sect3 mb-6">

                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                    <div class="listingblock mb-4">
                                                        <div class="content">
                                                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                        <i class="fas fa-copy text-xs"></i> Copy
                                                                    </button>
                                                                </div>
                                                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                    <span class="text-gray-300">// Get the HTML contents of the currently active editor</span><br>
                                                                    <span class="text-purple-400">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">debug</span><span class="text-yellow-300">(</span><span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">getContent</span><span class="text-yellow-300">());</span><br><br>

                                                                    <span class="text-gray-300">// Get the contents of the currently active editor as plain text</span><br>
                                                                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">getContent</span><span class="text-yellow-300">({</span> <span class="text-purple-400">format</span>: <span class="text-green-400">'text'</span> <span class="text-yellow-300">});</span><br><br>

                                                                    <span class="text-gray-300">// Get content of a specific editor:</span><br>
                                                                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'content id'</span><span class="text-yellow-300">).</span><span class="text-purple-400">getContent</span><span class="text-yellow-300">()</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sect3">
                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                        <div class="ulist">
                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                <li><code>args (Object)</code> - Optional content object, this gets passed around through the whole get process.</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="sect3">
                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                        <div class="ulist">
                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                <li><code>String</code> - Cleaned content string, normally HTML contents.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <hr class="my-6 border-gray-300">
                                                </div>

                                                <!-- getContentAreaContainer section -->
                                                <div class="sect2 mb-10" id="getContentAreaContainer">
                                                    <h3 class="text-gray-700 text-sm sm:text-base mb-4">getContentAreaContainer()</h3>
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
                                                                        <span class="text-purple-400">getContentAreaContainer</span>(): <span class="text-blue-400">Element</span></code>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="paragraph mb-4">
                                                        <p class="text-gray-700 text-sm sm:text-base">Returns the content area container element of the editor. This element holds the iframe or the editable element.</p>
                                                    </div>

                                                    <div class="sect3 mb-6">
                                                        <div class="sect3">
                                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                            <div class="ulist">
                                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                    <li><code>Element</code> - HTML DOM element for the editor area container.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="my-6 border-gray-300">
                                                    </div>

                                                    <!-- getDoc section -->
                                                    <div class="sect2 mb-10" id="getDoc">
                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">getDoc()</h3>
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
                                                                        <code class="javascript"><span class="text-purple-400">getDoc</span>(): <span class="text-blue-400">Document</span></code>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="paragraph mb-4">
                                                            <p class="text-gray-700 text-sm sm:text-base">Returns the iframes document object.</p>
                                                        </div>

                                                        <div class="sect3 mb-6">
                                                            <div class="sect3">
                                                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                <div class="ulist">
                                                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                        <li><code>Document</code> - Iframe DOM document object.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <hr class="my-6 border-gray-300">
                                                        </div>

                                                        <!-- getElement section -->
                                                        <div class="sect2 mb-10" id="getElement">
                                                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">getElement()</h3>
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
                                                                            <code class="javascript"><span class="text-purple-400">getElement</span>(): <span class="text-blue-400">Element</span></code>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="paragraph mb-4">
                                                                <p class="text-gray-700 text-sm sm:text-base">Returns the target element/textarea that got replaced with a editflo editor instance.</p>
                                                            </div>

                                                            <div class="sect3 mb-6">
                                                                <div class="sect3">
                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                    <div class="ulist">
                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                            <li><code>Element</code> - HTML DOM element for the replaced element.</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <hr class="my-6 border-gray-300">
                                                            </div>


                                                            <!-- getParam section -->
                                                            <div class="sect2 mb-10" id="getParam">
                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">getParam()</h3>
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
                                                                                <code class="javascript"><span class="text-purple-400">getParam</span><span class="text-yellow-300">(</span><span class="text-blue-400">name</span>: <span class="text-green-400">String</span><span class="text-yellow-300">,</span><span class="text-blue-400">defaultVal</span>: <span class="text-green-400">String</span><span class="text-yellow-300">,</span><span class="text-blue-400">type</span>: <span class="text-green-400">String</span><span class="text-yellow-300">)</span>: <span class="text-blue-400">String</span></code>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="paragraph mb-4">
                                                                    <p class="text-gray-700 text-sm sm:text-base">Returns a configuration parameter by name.
                                                                        <br><br>
                                                                        Deprecated in editflo 6.0 and has been marked for removal in editflo 7.0. Use the editor.options.get API instead.
                                                                    </p>
                                                                </div>

                                                                <div class="sect3 mb-6">

                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                                    <div class="listingblock mb-4">
                                                                        <div class="content">
                                                                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                        <i class="fas fa-copy text-xs"></i> Copy
                                                                                    </button>
                                                                                </div>
                                                                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                    <span class="text-gray-300">// Returns a specific config value from the currently active editor</span><br>
                                                                                    <span class="text-blue-400">const</span> <span class="text-green-400">someval</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">getParam</span><span class="text-yellow-300">(</span><span class="text-green-400">'myvalue'</span><span class="text-yellow-300">);</span><br><br>

                                                                                    <span class="text-gray-300">// Returns a specific config value from a specific editor instance by id</span><br>
                                                                                    <span class="text-blue-400">const</span> <span class="text-green-400">someval2</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'my_editor'</span><span class="text-yellow-300">).</span><span class="text-purple-400">getParam</span><span class="text-yellow-300">(</span><span class="text-green-400">'myvalue'</span><span class="text-yellow-300">);</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sect3">
                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                        <div class="ulist">
                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                <li><code>name (String)</code> - Configuration parameter to retrieve.</li>
                                                                                <li><code>defaultVal (String)</code> - Optional default value to return.</li>
                                                                                <li><code>type (String)</code> - Optional type parameter.</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sect3">
                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                        <div class="ulist">
                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                <li><code>String</code> - Configuration parameter value or default value.</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="my-6 border-gray-300">
                                                                </div>

                                                                <!-- getWin section -->
                                                                <div class="sect2 mb-10" id="getWin">
                                                                    <h3 class="text-gray-700 text-sm sm:text-base mb-4">getWin()</h3>
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
                                                                                        <span class="text-purple-400">getWin</span>(): <span class="text-blue-400">Window</span></code>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="paragraph mb-4">
                                                                        <p class="text-gray-700 text-sm sm:text-base">Returns the iframes window object.</p>
                                                                    </div>

                                                                    <div class="sect3 mb-6">
                                                                        <div class="sect3">
                                                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                            <div class="ulist">
                                                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                    <li><code>Window</code> - Iframe DOM window object.</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="my-6 border-gray-300">
                                                                    </div>

                                                                    <!-- hasEditableRoot section -->
                                                                    <div class="sect2 mb-10" id="hasEditableRoot">
                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">hasEditableRoot()</h3>
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
                                                                                        <code class="javascript"><span class="text-purple-400">hasEditableRoot</span>(): <span class="text-yellow-400">Boolean</span></code>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="paragraph mb-4">
                                                                            <p class="text-gray-700 text-sm sm:text-base">Returns the current editable state of the editor’s root element.</p>
                                                                        </div>

                                                                        <div class="sect3 mb-6">
                                                                            <div class="sect3">
                                                                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                <div class="ulist">
                                                                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                        <li><code>Boolean</code> - True if the root element is editable, false if it is not editable.</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <hr class="my-6 border-gray-300">
                                                                        </div>

                                                                        <!-- hasEventListeners section -->
                                                                        <div class="sect2 mb-10" id="hasEventListeners">
                                                                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">hasEventListeners()</h3>
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
                                                                                            <code class="javascript"><span class="text-purple-400">hasEventListeners</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span></code>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="paragraph mb-4">
                                                                                <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the object has a event of the specified name.</p>
                                                                            </div>

                                                                            <div class="sect3 mb-6">
                                                                                <div class="sect3">
                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                    <div class="ulist">
                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                            <li><code>name (String)</code> - Name of the event to check for.</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sect3">
                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                    <div class="ulist">
                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                            <li><code>Boolean</code> - true/false if the event exists or not.</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <hr class="my-6 border-gray-300">
                                                                            </div>

                                                                            <!-- hasFocus section -->
                                                                            <div class="sect2 mb-10" id="hasFocus">
                                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">hasFocus()</h3>
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
                                                                                                <code class="javascript"><span class="text-purple-400">hasFocus</span>(): <span class="text-yellow-400">Boolean</span></code>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="paragraph mb-4">
                                                                                    <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the editor has real keyboard focus.
                                                                                    </p>
                                                                                </div>

                                                                                <div class="sect3 mb-6">
                                                                                    <div class="sect3">
                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                        <div class="ulist">
                                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                <li><code>Boolean</code> - Current focus state of the editor.</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="my-6 border-gray-300">
                                                                                </div>

                                                                                <!-- hasPlugin section -->
                                                                                <div class="sect2 mb-10" id="hasPlugin">
                                                                                    <h3 class="text-gray-700 text-sm sm:text-base mb-4">hasPlugin()</h3>
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
                                                                                                    <code class="javascript"><span class="text-purple-400">hasPlugin</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">loaded</span>: <span class="text-blue-400">Boolean</span>): <span class="text-yellow-400">Boolean</span></code>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="paragraph mb-4">
                                                                                        <p class="text-gray-700 text-sm sm:text-base">Checks that the plugin is in the editor configuration and can optionally check if the plugin has been loaded.
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="sect3 mb-6">

                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                                                        <div class="listingblock mb-4">
                                                                                            <div class="content">
                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                        <span class="text-gray-300">// Returns `true` if the Comments plugin is in the editor configuration and has loaded successfully:</span><br>
                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">hasPlugin</span><span class="text-yellow-300">(</span><span class="text-green-400">'editflocomments'</span><span class="text-yellow-300">,</span> <span class="text-yellow-400">true</span><span class="text-yellow-300">);</span><br><br>

                                                                                                        <span class="text-gray-300">// Returns `true` if the Table plugin is in the editor configuration, regardless of whether or not it loads:</span><br>
                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">hasPlugin</span><span class="text-yellow-300">(</span><span class="text-green-400">'table'</span><span class="text-yellow-300">);</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="sect3">
                                                                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                            <div class="ulist">
                                                                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                    <li><code>name (String)</code> - The name of the plugin, as specified for the editflo plugins option.</li>
                                                                                                    <li><code>loaded (Boolean)</code> - If true, will also check that the plugin has been loaded.</li>

                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="sect3">
                                                                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                            <div class="ulist">
                                                                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                    <li><code>Boolean</code> - If loaded is true, returns true if the plugin is in the configuration and has been loaded. If loaded is false, returns true if the plugin is in the configuration, regardless of plugin load status.</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <hr class="my-6 border-gray-300">
                                                                                    </div>

                                                                                    <!-- hide section -->
                                                                                    <div class="sect2 mb-10" id="hide">
                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">hide()</h3>
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
                                                                                                            <span class="text-purple-400">hide</span>():</code>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="paragraph mb-4">
                                                                                        <p class="text-gray-700 text-sm sm:text-base">Hides the editor and shows any textarea/div that the editor is supposed to replace.
                                                                                        </p>
                                                                                    </div>

                                                                                    <!-- insertContent section -->
                                                                                    <div class="sect2 mb-10" id="insertContent">
                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">insertContent()</h3>
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
                                                                                                        <code class="javascript"><span class="text-purple-400">insertContent</span>(<span class="text-green-400">content</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>)</code>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="paragraph mb-4">
                                                                                            <p class="text-gray-700 text-sm sm:text-base">Inserts content at caret position.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div class="sect3 mb-6">
                                                                                            <div class="sect3">
                                                                                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                <div class="ulist">
                                                                                                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                        <li><code>content (String)</code> - Content to insert.</li>
                                                                                                        <li><code>args (Object)</code> - Optional args to pass to insert call.</li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <hr class="my-6 border-gray-300">
                                                                                        </div>

                                                                                        <!-- isDirty -->
                                                                                        <div class="sect2 mb-10" id="isDirty">
                                                                                            <h3 class="text-gray-700 text-sm sm:text-base mb-4">isDirty()</h3>
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
                                                                                                            <code class="javascript"><span class="text-purple-400">isDirty</span>(): <span class="text-yellow-400">Boolean</span></code>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="paragraph mb-4">
                                                                                                <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the editor is dirty or not. It will get dirty if the user has made modifications to the contents.
                                                                                                    <br><br>
                                                                                                    The dirty state is automatically set to true when the user modifies editor content after initialization or the last editor.save() call. This includes changes made using undo or redo.
                                                                                                </p>
                                                                                            </div>

                                                                                            <div class="sect3 mb-6">

                                                                                                <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                                                                <div class="listingblock mb-4">
                                                                                                    <div class="content">
                                                                                                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                                            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                    <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                                <span class="text-blue-400">if</span> <span class="text-yellow-300">(</span><span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">isDirty</span><span class="text-yellow-300">())</span> <span class="text-yellow-300">{</span><br>
                                                                                                                <span class="text-purple-400 ml-4">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">"You must save your contents."</span><span class="text-yellow-300">);</span><br>
                                                                                                                <span class="text-yellow-300">}</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="sect3">
                                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                                    <div class="ulist">
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Boolean</code> - True/false if the editor is dirty or not. It will get dirty if the user has made modifications to the contents.</li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr class="my-6 border-gray-300">
                                                                                            </div>

                                                                                            <!-- isHidden -->
                                                                                            <div class="sect2 mb-10" id="isHidden">
                                                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">isHidden()</h3>
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
                                                                                                                    <span class="text-purple-400">isHidden</span>(): <span class="text-yellow-400">Boolean</span></code>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="paragraph mb-4">
                                                                                                    <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the editor is hidden or not.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div class="sect3">
                                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                                    <div class="ulist">
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Boolean</code> - True/false if the editor is hidden or not.</li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr class="my-6 border-gray-300">
                                                                                            </div>

                                                                                            <!-- load -->
                                                                                            <div class="sect2 mb-10" id="load">
                                                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">load()</h3>
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
                                                                                                                <code class="javascript"><span class="text-purple-400">load</span>(<span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>)</code>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="paragraph mb-4">
                                                                                                    <p class="text-gray-700 text-sm sm:text-base">Loads contents from the textarea, input or other element that got converted into an editor instance. This method will move the contents from that textarea, input or other element into the editor by using setContent so all events etc that method has will get dispatched as well.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div class="sect3">
                                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                    <div class="ulist">
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>args (Object)</code> - Optional content object, this gets passed around through the whole load process.</li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr class="my-6 border-gray-300">
                                                                                            </div>

                                                                                            <!-- nodeChanged -->
                                                                                            <div class="sect2 mb-10" id="nodeChanged">
                                                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">nodeChanged()</h3>
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
                                                                                                                <code class="javascript"><span class="text-purple-400">nodeChanged</span>(<span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>)</code>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="paragraph mb-4">
                                                                                                    <p class="text-gray-700 text-sm sm:text-base">Dispatches out a onNodeChange event to all observers. This method should be called when you need to update the UI states or element path etc.
                                                                                                    </p>
                                                                                                </div>

                                                                                                <div class="sect3">
                                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                    <div class="ulist">
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>args (Object)</code> - Optional args to pass to NodeChange event handlers.</li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr class="my-6 border-gray-300">
                                                                                            </div>

                                                                                            <!-- off Method -->
                                                                                            <div class="sect2 mb-10" id="off">
                                                                                                <h3 class="text-gray-700 text-sm sm:text-base mb-4">off()</h3>
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
                                                                                                                <code class="javascript"><span class="text-purple-400">off</span>(<span class="text-green-400">name</span>?: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>?: <span class="text-blue-400">Function</span>): <span class="text-yellow-400">Object</span></code>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="paragraph mb-4">
                                                                                                    <p class="text-gray-700 text-sm sm:text-base">Unbinds an event listener to a specific event by name. Consult the event reference for more details on each event.</p>
                                                                                                </div>

                                                                                                <div class="sect3 mb-6">

                                                                                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                                                                    <div class="listingblock mb-4">
                                                                                                        <div class="content">
                                                                                                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                                                <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                        <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                                    <span class="text-gray-300">// Unbind specific callback</span><br>
                                                                                                                    <span class="text-blue-400">instance</span><span class="text-yellow-300">.</span><span class="text-purple-400">off</span><span class="text-yellow-300">(</span><span class="text-green-400">'event'</span><span class="text-yellow-300">,</span> <span class="text-green-400">handler</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                    <span class="text-gray-300">// Unbind all listeners by name</span><br>
                                                                                                                    <span class="text-blue-400">instance</span><span class="text-yellow-300">.</span><span class="text-purple-400">off</span><span class="text-yellow-300">(</span><span class="text-green-400">'event'</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                    <span class="text-gray-300">// Unbind all events</span><br>
                                                                                                                    <span class="text-blue-400">instance</span><span class="text-yellow-300">.</span><span class="text-purple-400">off</span><span class="text-yellow-300">();</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="sect3">
                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <div class="ulist">
                                                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                                <li><code>name (String?)</code> - Name of the event to unbind.</li>
                                                                                                                <li><code>callback (Function?)</code> - Callback to unbind.</li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="sect3">
                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                                        <div class="ulist">
                                                                                                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                                <li><code>Object</code> - Current class instance.</li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <hr class="my-6 border-gray-300">
                                                                                                </div>

                                                                                                <!-- on Method -->
                                                                                                <div class="sect2 mb-10" id="on">
                                                                                                    <h3 class="text-gray-700 text-sm sm:text-base mb-4">on()</h3>
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
                                                                                                                    <span class="text-purple-400">on</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">prepend</span>: <span class="text-blue-400">Boolean</span>): <span class="text-yellow-400">Object</span></code>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="paragraph mb-4">
                                                                                                        <p class="text-gray-700 text-sm sm:text-base">Binds an event listener to a specific event by name. Consult the event reference for more details on each event.</p>
                                                                                                    </div>

                                                                                                    <div class="sect3 mb-6">

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                                        <span class="text-blue-400">instance</span><span class="text-yellow-300">.</span><span class="text-purple-400">on</span><span class="text-yellow-300">(</span><span class="text-green-400">'event'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">e</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                                                                                                        <span class="text-gray-300 ml-4">// Callback logic</span><br>
                                                                                                                        <span class="text-yellow-300">});</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="sect3">
                                                                                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                            <div class="ulist">
                                                                                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                                    <li><code>name (String?)</code> - Event name or space separated list of events to bind.</li>
                                                                                                                    <li><code>callback (Function?)</code> - Callback to be executed when the event occurs.</li>
                                                                                                                    <li><code>prepend (Boolean)</code> - Optional flag if the event should be prepended. Use this with care.</li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="sect3">
                                                                                                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                                                                                                            <div class="ulist">
                                                                                                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                                    <li><code>Object</code> - Current class instance.</li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- once Method -->
                                                                                                    <div class="sect2 mb-10" id="once">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">once()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
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

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript">
                                                                                                                            <span class="text-purple-400">once</span>(<span class="text-green-400">name</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>): <span class="text-yellow-400">Object</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Binds an event callback and removes it automatically after it fires once.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>name (String)</code> - Event name to bind.</li>
                                                                                                            <li><code>callback (Function)</code> - Function executed once.</li>
                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Object</code> - Current class instance.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>


                                                                                                    <!-- queryCommandState Method -->
                                                                                                    <div class="sect2 mb-10" id="queryCommandState">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">queryCommandState()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
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

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">queryCommandState</span>(<span class="text-green-400">cmd</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Returns the state of a command — for example, whether bold is active or not.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>cmd (String)</code> - Command name to query.</li>
                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Boolean</code> - Current state of the command.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- queryCommandSupported Method -->
                                                                                                    <div class="sect2 mb-10" id="queryCommandSupported">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">queryCommandSupported()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
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

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">queryCommandSupported</span>(<span class="text-green-400">cmd</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Returns true or false depending on whether the specified command is supported.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>cmd (String)</code> – Command name to check.</li>
                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Boolean</code> – Whether the command is supported.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- queryCommandValue Method -->
                                                                                                    <div class="sect2 mb-10" id="queryCommandValue">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">queryCommandValue()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">queryCommandValue</span>(<span class="text-green-400">cmd</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">String</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Returns a command-specific value, such as the current font size.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>cmd (String)</code> – Command to query value from.</li>
                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>String</code> – Command-specific value or empty string.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- remove Method -->
                                                                                                    <div class="sect2 mb-10" id="remove">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">remove()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">remove</span>()</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Removes the editor from the dom and editflo collection.
                                                                                                        </p>
                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- render Method -->
                                                                                                    <div class="sect2 mb-10" id="render">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">render()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">render</span>()</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Renders the editor/adds it to the page.
                                                                                                        </p>
                                                                                                        <hr class="my-6 border-gray-300">

                                                                                                    </div>

                                                                                                    <!-- resetContent Method -->
                                                                                                    <div class="sect2 mb-10" id="resetContent">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">resetContent()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">resetContent</span>(<span class="text-green-400">initialContent</span>: <span class="text-blue-400">String</span>)</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Resets the editors content, undo/redo history and dirty state. If initialContent isn’t specified, then the editor is reset back to the initial start content.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>initialContent (String)</code> – An optional string to use as the initial content of the editor.</li>
                                                                                                        </ul>



                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- save Method -->
                                                                                                    <div class="sect2 mb-10" id="save">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">save()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">save</span>(<span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">String</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Saves the contents from an editor out to the textarea or div element that got converted into an editor instance. This method will move the HTML contents from the editor into that textarea or div by getContent so all events etc that method has will get dispatched as well.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>args (Object)</code> – Optional content object, this gets passed around through the whole save process.</li>
                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>String</code> – HTML string that got set into the textarea/div.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- setContent Method -->
                                                                                                    <div class="sect2 mb-10" id="setContent">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">setContent()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">setContent</span>(<span class="text-green-400">content</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">args</span>: <span class="text-blue-400">Object</span>)</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Sets the specified content to the editor instance, this will cleanup the content before it gets set using the different cleanup rules options.
                                                                                                            <br><br>
                                                                                                            Note: The content return value was deprecated in editflo 6.0 and has been marked for removal in editflo 7.0.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Example</h4>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3   opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                                        <span class="text-gray-300">// Sets the HTML contents of the activeEditor editor</span><br>
                                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">setContent</span><span class="text-yellow-300">(</span><span class="text-green-400">'&lt;span&gt;some&lt;/span&gt; html'</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                        <span class="text-gray-300">// Sets the content of a specific editor (my_editor in this example)</span><br>
                                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'my_editor'</span><span class="text-yellow-300">).</span><span class="text-purple-400">setContent</span><span class="text-yellow-300">(</span><span class="text-green-400">data</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                        <span class="text-gray-300">// Sets the content of the activeEditor editor using the specified format</span><br>
                                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">setContent</span><span class="text-yellow-300">(</span><span class="text-green-400">'&lt;p&gt;Some html&lt;/p&gt;'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">{</span> <span class="text-purple-400">format</span>: <span class="text-green-400">'html'</span> <span class="text-yellow-300">});</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>content (String)</code> – Content to set to editor, normally HTML contents but can be other formats as well.</li>
                                                                                                            <li><code>args (Object)</code> - Optional content object, this gets passed around through the whole set process.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- setDirty Method -->
                                                                                                    <div class="sect2 mb-10" id="setDirty">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">setDirty()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript">
                                                                                                                            <span class="text-purple-400">setDirty</span>(<span class="text-green-400">state</span>: <span class="text-blue-400">Boolean</span>)</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Explicitly sets the dirty state. This will fire the dirty event if the editor dirty state is changed from false to true by invoking this method.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Example</h4>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3   opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                                        <span class="text-blue-400">const</span> <span class="text-green-400">ajaxSave</span> <span class="text-yellow-300">=</span> <span class="text-yellow-300">()</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                                                                                                        <span class="text-blue-400 ml-4">const</span> <span class="text-green-400">editor</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'elm1'</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                        <span class="text-gray-300 ml-4">// Save contents using some XHR call</span><br>
                                                                                                                        <span class="text-purple-400 ml-4">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">getContent</span><span class="text-yellow-300">());</span><br>

                                                                                                                        <span class="text-green-400 ml-4">editor</span><span class="text-yellow-300">.</span><span class="text-purple-400">setDirty</span><span class="text-yellow-300">(</span><span class="text-yellow-400">false</span><span class="text-yellow-300">);</span> <span class="text-gray-300">// Force not dirty state</span><br>
                                                                                                                        <span class="text-yellow-300">}</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>state (Boolean)</code> – True/false if the editor is considered dirty.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- setEditableRoot Method -->
                                                                                                    <div class="sect2 mb-10" id="setEditableRoot">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">setEditableRoot()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript">
                                                                                                                            <span class="text-purple-400">setEditableRoot</span>(<span class="text-green-400">state</span>: <span class="text-blue-400">Boolean</span>)</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Changes the editable state of the editor’s root element.
                                                                                                        </p>
                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>state (Boolean)</code> – State to set true for editable and false for non-editable.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- setProgressState Method -->
                                                                                                    <div class="sect2 mb-10" id="setProgressState">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">setProgressState()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">setProgressState</span>(<span class="text-green-400">state</span>: <span class="text-blue-400">Boolean</span>, <span class="text-green-400">time</span>: <span class="text-blue-400">Number</span>): <span class="text-yellow-400">Boolean</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Sets the progress state, this will display a throbber/progess for the editor. This is ideal for asynchronous operations like an AJAX save call.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Example</h4>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">

                                                                                                                        <span class="text-gray-300">// Show progress for the active editor</span><br>
                                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">setProgressState</span><span class="text-yellow-300">(</span><span class="text-yellow-400">true</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                        <span class="text-gray-300">// Hide progress for the active editor</span><br>
                                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">setProgressState</span><span class="text-yellow-300">(</span><span class="text-yellow-400">false</span><span class="text-yellow-300">);</span><br><br>

                                                                                                                        <span class="text-gray-300">// Show progress after 3 seconds</span><br>
                                                                                                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">activeEditor</span><span class="text-yellow-300">.</span><span class="text-purple-400">setProgressState</span><span class="text-yellow-300">(</span><span class="text-yellow-400">true</span><span class="text-yellow-300">,</span> <span class="text-green-400">3000</span><span class="text-yellow-300">);</span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>state (Boolean)</code> – Boolean state if the progress should be shown or hidden.</li>
                                                                                                            <li><code>time (Number)</code> – Optional time to wait before the progress gets shown.</li>
                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Boolean</code> – Same as the input state.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- show Method -->
                                                                                                    <div class="sect2 mb-10" id="show">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">show()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript">
                                                                                                                            <span class="text-purple-400">show</span>()</code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Shows the editor and hides any textarea/div that the editor is supposed to replace.
                                                                                                        </p>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- translate Method -->
                                                                                                    <div class="sect2 mb-10" id="translate">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">translate()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">translate</span>(<span class="text-green-400">text</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">String</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Translates the specified string by replacing variables with language pack items it will also check if there is a key matching the input.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>text (String)</code> – String to translate by the language pack data.</li>

                                                                                                        </ul>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>String</code> – Translated string.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                    <!-- uploadImages Method -->
                                                                                                    <div class="sect2 mb-10" id="uploadImages">
                                                                                                        <h3 class="text-gray-700 text-sm sm:text-base mb-4">uploadImages()</h3>

                                                                                                        <div class="listingblock mb-4">
                                                                                                            <div class="content">
                                                                                                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                                                                                                    <!-- Top bar -->
                                                                                                                    <div class="absolute top-2 right-2 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                                                                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>
                                                                                                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                                                                                                            <i class="fas fa-copy text-xs"></i> Copy
                                                                                                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                                                                                                Copied!
                                                                                                                            </div>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                                                                                                        <code class="javascript"><span class="text-purple-400">uploadImages</span>(): <span class="text-yellow-400">Promise</span></code>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <p class="text-gray-700 text-sm sm:text-base mb-4">
                                                                                                            Uploads all data uri/blob uri images in the editor contents to server.
                                                                                                        </p>

                                                                                                        <h4 class="text-lg font-semibold text-gray-800 mb-2 mt-4">Return value</h4>
                                                                                                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                                                                                            <li><code>Promise</code> – Promise instance with images and status for each image.</li>
                                                                                                        </ul>

                                                                                                        <hr class="my-6 border-gray-300">
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <script>
                                                                                        // Simple script to handle copy code buttons
                                                                                        document.addEventListener('DOMContentLoaded', function() {
                                                                                            const copyButtons = document.querySelectorAll('.copy-button');

                                                                                            copyButtons.forEach(button => {
                                                                                                button.addEventListener('click', function() {
                                                                                                    // Find the code element
                                                                                                    const codeBlock = this.closest('.group').querySelector('code');
                                                                                                    const code = codeBlock.textContent;

                                                                                                    // Copy to clipboard
                                                                                                    navigator.clipboard.writeText(code).then(() => {
                                                                                                        // Original content save करें
                                                                                                        const originalHTML = this.innerHTML;
                                                                                                        const originalBg = this.style.background;

                                                                                                        // Change button text and color
                                                                                                        this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                                                                                                        this.style.background = '#10B981'; // Green color

                                                                                                        // Reset after 2 seconds
                                                                                                        setTimeout(() => {
                                                                                                            this.innerHTML = originalHTML;
                                                                                                            this.style.background = originalBg;
                                                                                                        }, 2000);

                                                                                                    }).catch(err => {
                                                                                                        console.error('Copy failed:', err);

                                                                                                        // Fallback method for older browsers
                                                                                                        const textarea = document.createElement('textarea');
                                                                                                        textarea.value = code;
                                                                                                        document.body.appendChild(textarea);
                                                                                                        textarea.select();
                                                                                                        document.execCommand('copy');
                                                                                                        document.body.removeChild(textarea);

                                                                                                        // Same feedback for fallback
                                                                                                        const originalHTML = this.innerHTML;
                                                                                                        const originalBg = this.style.background;

                                                                                                        this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                                                                                                        this.style.background = '#10B981';

                                                                                                        setTimeout(() => {
                                                                                                            this.innerHTML = originalHTML;
                                                                                                            this.style.background = originalBg;
                                                                                                        }, 2000);
                                                                                                    });
                                                                                                });
                                                                                            });
                                                                                        });
                                                                                    </script>