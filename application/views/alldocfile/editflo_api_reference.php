<div class="flex flex-col md:flex-row px-4">
    <!-- Main Content -->
    <div class="">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">Editflo</h1>
            <p class="text-lg text-gray-600">Editflo core class.</p>
        </div>


        <div class="sect1">
            <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-1 pb-2">
                <a class="anchor" href="#summary">Summary</a>
            </h2>
            <div class="sectionbody">
                <div class="sect2">
                    <h3 id="properties" class="text-xl font-semibold text-gray-800 mb-3">
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
                                            <span class="text-gray-700 text-sm sm:text-base">DOM</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">DOMUtils</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Global DOM instance.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">PluginManager</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">AddOnManager</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Global PluginManager instance. Instance of AddOnManager.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">ScriptLoader</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">ScriptLoader</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Global ScriptLoader instance.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">ThemeManager</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">AddOnManager</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base"></span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">activeEditor</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Editor</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Currently active editor instance.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">baseURI</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">URI</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Absolute baseURI for the installation path of editflo.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">baseURL</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Base URL where the root directory if editflo is located.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">defaultOptions</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Object</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Object containing the options that will be passed by default to the init method upon each initialization of an editor. These defaults will be shallow merged with other options passed to init.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">documentBaseURL</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Document base URL where the current document is located.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">i18n</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Object</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Collection of language pack data.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">majorVersion</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Major version of editflo build.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">minorVersion</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Minor version of editflo build.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">pageUid</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">A uuid string to anonymously identify the page editflo is loaded in</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">releaseDate</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Release date of editflo build.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">suffix</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Current suffix to add to each plugin/theme that gets loaded for example ".min".</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">editflo</td>
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
                                            <a href="#add" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">add()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Adds an editor instance to the editor collection. This will also set it as the active editor.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#addI18n" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">addI18n()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Adds a language pack, this gets called by the loaded language files like en.js.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#createEditor" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">createEditor()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Creates an editor instance and adds it to the EditorManager collection.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#each" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">each()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Performs an iteration of all items in a collection such as an object or array.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">execCommand()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Executes a specific command on the currently active editor.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">explode()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Splits a string but removes the whitespace before and after each value.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">get()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns an editor instance for a given id.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">grep()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Filters out items from the input array by calling the specified function for each item. If the function returns false the item will be excluded if it returns true it will be included.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">hasOwnProperty()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">JavaScript does not protect hasOwnProperty method, so it is possible to overwrite it. This is an object independent version. Checks if the input object obj has the property prop.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">inArray()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns an index of the item or -1 if item is not present in the array.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">init()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Initializes a set of editors. This method will create editors based on various settings.

                                                For information on basic usage of init, see: Basic setup.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">is()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Checks if a object is of a specific type for example an array.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">isArray()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the object is an array or not.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">makeMap()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Makes a name/object map out of an array with names.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">map()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Creates a new array by the return value of each iteration function call. This enables you to convert one array list into another.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">overrideDefaults()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Overrides the default options for editor instances. The overrideDefaults method replaces the defaultOptions, including any set by a previous call to the overrideDefaults method.
                                                <br><br>
                                                When using the Tiny Cloud, some of these defaults are required for the cloud-based editor to function.
                                                <br><br>
                                                Therefore, when using overrideDefaults with the cloud-based editor, any newly integrated options must be combined with the options in editflo.defaultOptions.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">remove()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Removes a editor or editors form page.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">resolve()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Resolves a string and returns the object from a specific structure.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">setActive()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Sets the active editor instance and fires the deactivate/activate events.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">toArray()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Converts the specified object into a real JavaScript array.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">translate()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Translates the specified string using the language pack items.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">triggerSave()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Calls the save method on all editor instances in the collection. This can be useful when a form is to be submitted.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">trim()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Removes whitespace from the beginning and end of a string.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#execCommand" class="text-blue-600 hover:text-blue-800 font-mono text-sm font-medium">walk()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Executed the specified function for each item in a object tree.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>editflo</code></td>
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

                <!-- Add Method -->
                <div class="sect2 mb-10" id="add">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">add()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (FIXED - proper height) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">add</span>(<span class="text-green-400">editor</span>: <span class="text-blue-400">editflo.Editor</span>): <span class="text-yellow-400">editflo.Editor</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds an editor instance to the editor collection. This will also set it as the active editor.</p>
                        </div>

                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist mb-4">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>editor (Editor)</code> - Editor instance to add to the collection.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>Editor</code> - The same instance that got passed in.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">
                </div>

                <!-- AddI18n Method -->
                <div class="sect2 mb-10" id="addI18n">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">addI18n()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">addI18n</span>(<span class="text-green-400">code</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">items</span>: <span class="text-blue-400">Object</span>)</code>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Adds a language pack, this gets called by the loaded language files like en.js.</p>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>code (String)</code> - Optional language code.</li>
                                <li><code>items (Object)</code> - Name/value object with translations.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">
                </div>

                <!-- createEditor Method -->
                <div class="sect2 mb-10" id="createEditor">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">createEditor()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">createEditor</span>(<span class="text-green-400">id</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">options</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">editflo.Editor</span></code>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Creates an editor instance and adds it to the EditorManager collection.</p>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist mb-4">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>id (String)</code> - Instance id to use for editor.</li>
                                <li><code>options (Object)</code> - Editor instance options.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Editor</code> - Editor instance that got created.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">
                </div>

                <!-- More methods would continue here -->

                <div class="sect2 mb-10" id="each">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">each()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">each</span>(<span class="text-green-400">o</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">cb</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">s</span>: <span class="text-blue-400">Object</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Performs an iteration of all items in a collection such as an object or array. This method will execute the callback function for each item in the collection. If the callback returns <code>false</code> the iteration will terminate.</p>
                    </div>



                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                    <div class="text-xs font-mono ">JAVASCRIPT</div>
                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                        </button>
                                    </div>
                                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    
                                        <span class="text-gray-300">// Iterate an array</span><br>
                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">each</span><span class="text-yellow-300">([</span> <span class="text-green-400">1</span><span class="text-yellow-300">,</span><span class="text-green-400">2</span><span class="text-yellow-300">,</span><span class="text-green-400">3</span> <span class="text-yellow-300">],</span> <span class="text-yellow-300">(</span><span class="text-green-400">v</span><span class="text-yellow-300">,</span> <span class="text-green-400">i</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                        <span class="text-purple-400 ml-4">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">debug</span><span class="text-yellow-300">(</span><span class="text-green-400">"Value: "</span> <span class="text-yellow-300">+</span> <span class="text-green-400">v</span> <span class="text-yellow-300">+</span> <span class="text-green-400">", Index: "</span> <span class="text-yellow-300">+</span> <span class="text-green-400">i</span><span class="text-yellow-300">);</span><br>
                                        <span class="text-yellow-300">});</span><br><br>

                                        <span class="text-gray-300">// Iterate an object</span>
                                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">each</span><span class="text-yellow-300">({</span> <span class="text-green-400">a</span>: <span class="text-green-400">1</span><span class="text-yellow-300">,</span> <span class="text-green-400">b</span>: <span class="text-green-400">2</span><span class="text-yellow-300">,</span> <span class="text-green-400">c</span>: <span class="text-green-400">3</span> <span class="text-yellow-300">},</span> <span class="text-yellow-300">(</span><span class="text-green-400">v</span><span class="text-yellow-300">,</span> <span class="text-green-400">k</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                        <span class="text-purple-400 ml-4">console</span><span class="text-yellow-300">.</span><span class="text-purple-400">debug</span><span class="text-yellow-300">(</span><span class="text-green-400">"Value: "</span> <span class="text-yellow-300">+</span> <span class="text-green-400">v</span> <span class="text-yellow-300">+</span> <span class="text-green-400">", Key: "</span> <span class="text-yellow-300">+</span> <span class="text-green-400">k</span><span class="text-yellow-300">);</span><br>
                                        <span class="text-yellow-300">});</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sect3 mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <div class="ulist mb-4">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>o (Object)</code> - Collection to iterate.</li>
                            <li><code>cb (Function)</code> - Callback function to execute for each item. The callback has the following format: <code>cb(value, key_or_index)</code>.</li>
                            <li><code>s (Object)</code> - Optional scope to execute the callback in.</li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-300">
                </div>

                <div class="sect2 mb-10" id="execCommand">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">execCommand()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-6 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">execCommand</span>(<span class="text-green-400">cmd</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">ui</span>: <span class="text-blue-400">Boolean</span>, <span class="text-green-400">value</span>: <span class="text-blue-400">Object | String | Number | Boolean</span>): <span class="text-yellow-400">Boolean</span></code>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Executes a specific command on the currently active editor.</p>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>cmd (String)</code> - Command to perform for example Bold.</li>
                                <li><code>ui (Boolean)</code> - Optional boolean state if a UI should be presented for the command or not.</li>
                                <li><code>value (Object | String | Number | Boolean)</code> - Optional value parameter like for example an URL to a link.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Boolean</code> - true/false if the command was executed or not.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">
                </div>



            <div class="sect2 mb-10" id="get">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">get()</h3>
                <div class="listingblock mb-4">
                    <div class="content">
                        <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                            <div class="absolute top-2 right-2 flex items-center gap-3 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                <div class="text-xs font-mono ">JAVASCRIPT</div>

                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                    <i class="fas fa-copy text-xs"></i> Copy
                                    <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                        Copied!
                                    </div>
                                </button>
                            </div>

                            <!-- Code Content (CENTERED vertically) -->
                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                               
                                    <span class="text-purple-400">get</span>(<span class="text-green-400">id</span>: <span class="text-blue-400">String | Number</span>): <span class="text-yellow-400">editflo.Editor | Array</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paragraph mb-4">
                    <p class="text-gray-700 text-sm sm:text-base">Returns an editor instance for a given id.</p>
                </div>



                <div class="sect3 mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                    <div class="listingblock mb-4">
                    <div class="content">
                        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
                            <div class="absolute top-2 right-2 flex items-center gap-3 
                                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <div class="text-xs font-mono ">JAVASCRIPT</div>
                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                    <i class="fas fa-copy text-xs"></i> Copy
                                </button>
                            </div>
                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                
                                    <span class="text-gray-300">// Adds an onclick event to an editor by id</span><br>
                                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'mytextbox'</span><span class="text-yellow-300">).</span><span class="text-purple-400">on</span><span class="text-yellow-300">(</span><span class="text-green-400">'click'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">e</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                    <span class="text-green-400 ml-4">ed</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello world!'</span><span class="text-yellow-300">);</span><br>
                                    <span class="text-yellow-300">});</span><br><br>

                                    <span class="text-gray-300">// Adds an onclick event to an editor by index</span>
                                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">0</span><span class="text-yellow-300">).</span><span class="text-purple-400">on</span><span class="text-yellow-300">(</span><span class="text-green-400">'click'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">e</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                    <span class="text-green-400 ml-4">ed</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello world!'</span><span class="text-yellow-300">);</span><br>
                                    <span class="text-yellow-300">});</span><br><br>

                                    <span class="text-gray-300">// Adds an onclick event to an editor by id (longer version)</span><br>
                                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">EditorManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">get</span><span class="text-yellow-300">(</span><span class="text-green-400">'mytextbox'</span><span class="text-yellow-300">).</span><span class="text-purple-400">on</span><span class="text-yellow-300">(</span><span class="text-green-400">'click'</span><span class="text-yellow-300">,</span> <span class="text-yellow-300">(</span><span class="text-green-400">e</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                                    <span class="text-green-400 ml-4">ed</span><span class="text-yellow-300">.</span><span class="text-blue-400">windowManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">alert</span><span class="text-yellow-300">(</span><span class="text-green-400">'Hello world!'</span><span class="text-yellow-300">);</span><br>
                                    <span class="text-yellow-300">});</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>id (String | Number)</code> - The id or index of the editor instance to return.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Editor</code> - Editor instance or an array of editor instances.</li>
                                <li><code>Array</code> - Editor instance or an array of editor instances.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>
            

                <div class="sect2 mb-10" id="grep">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">grep()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">grep</span>(<span class="text-green-400">a</span>: <span class="text-blue-400">Array</span>, <span class="text-green-400">f</span>: <span class="text-blue-400">Function</span>): <span class="text-yellow-400">Array</span></code>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paragraph mb-4">
                    <p class="text-gray-700 text-sm sm:text-base">Filters out items from the input array by calling the specified function for each item. If the function returns false the item will be excluded if it returns true it will be included.</p>
                </div>

                <div class="sect3 mb-6">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                    <div class="listingblock mb-4">
    <div class="content">
        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <div class="text-xs font-mono ">JAVASCRIPT</div>
                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                    <i class="fas fa-copy text-xs"></i> Copy
                </button>
            </div>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                
                        <span class="text-gray-300">// Filter out some items, this will return an array with 4 and 5</span><br>
                        <span class="text-blue-400">const</span> <span class="text-green-400">items</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">grep</span><span class="text-yellow-300">([</span> <span class="text-green-400">1</span><span class="text-yellow-300">,</span><span class="text-green-400">2</span><span class="text-yellow-300">,</span><span class="text-green-400">3</span><span class="text-yellow-300">,</span><span class="text-green-400">4</span><span class="text-yellow-300">,</span><span class="text-green-400">5</span> <span class="text-yellow-300">],</span> <span class="text-yellow-300">(</span><span class="text-green-400">v</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-green-400">v</span> <span class="text-yellow-300">></span> <span class="text-green-400">3</span><span class="text-yellow-300">);</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>a (Array)</code> - Array of items to loop though.</li>
                                <li><code>f (Function)</code> - Function to call for each item. Include/exclude depends on it’s return value.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Array</code> - New array with values imported and filtered based in input.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="hasOwnProperty">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">hasOwnProperty()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">hasOwnProperty</span>(<span class="text-green-400">obj</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">prop</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">JavaScript does not protect hasOwnProperty method, so it is possible to overwrite it. This is an object independent version. Checks if the input object obj has the property prop.</p>
                    </div>



                    <div class="sect3 mb-6">

                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>obj (Object)</code> - Object to check if the property exists.</li>
                                    <li><code>prop (String)</code> - Name of a property on the object.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>Boolean</code> - true if the object has the specified property.</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">

                    </div>

                    <div class="sect2 mb-10" id="inArray">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">inArray()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono ">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">inArray</span>(<span class="text-green-400">item</span>: <span class="text-blue-400">any</span>, <span class="text-green-400">arr</span>: <span class="text-blue-400">Array</span>): <span class="text-yellow-400">Number</span></code>
                                    </div>
                            </div>
                    </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Returns an index of the item or -1 if item is not present in the array.</p>
            </div>



            <div class="sect3 mb-6">

                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>item (any)</code> - Item to search for.</li>
                            <li><code>arr (Array)</code> - Array to search in.</li>
                        </ul>
                    </div>
                </div>
                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Number</code> - index of the item or -1 if item was not found.</li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-300">

            </div>

            <!-- Example of another method (init) -->
            <div class="sect2 mb-10" id="init">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">init()</h3>
                <div class="listingblock mb-4">
                    <div class="content">
                        <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                            <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                <div class="text-xs font-mono ">JAVASCRIPT</div>

                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                    <i class="fas fa-copy text-xs"></i> Copy
                                </button>
                            </div>

                            <!-- Code Content (CENTERED vertically) -->
                            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                <span class="text-purple-400">init</span>(<span class="text-green-400">options</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Promise</span></code>
                            </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Initializes a set of editors. This method will create editors based on various settings.
                    <br><br>
                    For information on basic usage of init, see: Basic setup.
                </p>
            </div>



            <div class="sect3 mb-6">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                <div class="listingblock mb-4">
    <div class="content">
        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <div class="text-xs font-mono ">JAVASCRIPT</div>
                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                    <i class="fas fa-copy text-xs"></i> Copy
                </button>
            </div>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                
                    <span class="text-gray-300">// Initializes a editor using the longer method</span><br>
                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">EditorManager</span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">({</span><br>
                    <span class="text-purple-400 ml-4">some_settings</span>: <span class="text-green-400">'some value'</span><br>
                    <span class="text-yellow-300">});</span><br><br>

                    <span class="text-gray-300">// Initializes a editor instance using the shorter version and with a promise</span>
                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">init</span><span class="text-yellow-300">({</span><br>
                    <span class="text-purple-400 ml-4">some_settings</span>: <span class="text-green-400">'some value'</span><br>
                    <span class="text-yellow-300">}).</span><span class="text-purple-400">then</span><span class="text-yellow-300">((</span><span class="text-green-400">editors</span><span class="text-yellow-300">)</span> <span class="text-yellow-300">=></span> <span class="text-yellow-300">{</span><br>
                    <span class="text-gray-300 ml-4">...</span><br>
                    <span class="text-yellow-300">});</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>options (Object)</code> - Options object to be passed to each editor instance.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Promise</code> - Promise that gets resolved with an array of editors when all editor instances are initialized.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="is">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">is()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">is</span>(<span class="text-green-400">obj</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">type</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">Boolean</span></code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Checks if a object is of a specific type for example an array.</p>
            </div>



            <div class="sect3 mb-6">

                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>obj (Object)</code> - Object to check type of.</li>
                            <li><code>type (String)</code> - Optional type to check for.</li>
                        </ul>
                    </div>
                </div>
                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> - true/false if the object is of the specified type.</li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-300">

            </div>

            <div class="sect2 mb-10" id="isArray">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">isArray()</h3>
            <div class="listingblock mb-4">
                <div class="content">
                    <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                        <!-- Top bar (text + copy button ONLY visible on hover) -->
                        <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                            <div class="text-xs font-mono ">JAVASCRIPT</div>

                            <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                <i class="fas fa-copy text-xs"></i> Copy
                                <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                    Copied!
                                </div>
                            </button>
                        </div>

                        <!-- Code Content (CENTERED vertically) -->
                        <div class="overflow-x-auto text-white-500">
                            <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">isArray</span>(<span class="text-green-400">obj</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Boolean</span></code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the object is an array or not.</p>
            </div>

            <div class="sect3 mb-6">

                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>obj (Object)</code> - Object to check.</li>
                           
                        </ul>
                    </div>
                </div>
                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> - Returns true/false if the object is an array or not.</li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-300">

            </div>

            <div class="sect2 mb-10" id="makeMap">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">makeMap()</h3>
                <div class="listingblock mb-4">
                    <div class="content">
                        <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                            <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                <div class="text-xs font-mono ">JAVASCRIPT</div>

                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                    <i class="fas fa-copy text-xs"></i> Copy
                                    <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                        Copied!
                                    </div>
                                </button>
                            </div>

                            <!-- Code Content (CENTERED vertically) -->
                            <div class="overflow-x-auto text-white-500">
                                <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">makeMap</span>(<span class="text-green-400">items</span>: <span class="text-blue-400">Array | String</span>, <span class="text-green-400">delim</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">map</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Object</span></code>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paragraph mb-4">
                    <p class="text-gray-700 text-sm sm:text-base">Makes a name/object map out of an array with names.</p>
                </div>



                <div class="sect3 mb-6">

                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>items (Array | String)</code> - Items to make map out of.</li>
                                <li><code>delim (String)</code> - Optional delimiter to split string by.</li>
                                <li><code>map (Object)</code> - Optional map to add items to.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Object</code> - Name/value map of items.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="map">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">map()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">map</span>(<span class="text-green-400">array</span>: <span class="text-blue-400">Array</span>, <span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>): <span class="text-yellow-400">Array</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Creates a new array by the return value of each iteration function call. This enables you to convert one array list into another.</p>
                    </div>



                    <div class="sect3 mb-6">

                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>array (Array)</code> - Array of items to iterate.</li>
                                    <li><code>callback (Function)</code> - Function to call for each item. It’s return value will be the new value.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>Array</code> - Array with new values based on function return values.</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">

                    </div>

                    <div class="sect2 mb-10" id="overrideDefaults">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">overrideDefaults()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono ">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">overrideDefaults</span>(<span class="text-green-400">defaultOptions</span>: <span class="text-blue-400">Object</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Overrides the default options for editor instances. The overrideDefaults method replaces the defaultOptions, including any set by a previous call to the overrideDefaults method.
                                <br><br>
                                When using the Tiny Cloud, some of these defaults are required for the cloud-based editor to function.
                                <br><br>
                                Therefore, when using overrideDefaults with the cloud-based editor, any newly integrated options must be combined with the options in editflo.defaultOptions.
                            </p>
                        </div>


                        <div class="sect3 mb-6">

                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                            <div class="listingblock mb-4">
    <div class="content">
        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <div class="text-xs font-mono ">JAVASCRIPT</div>
                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                    <i class="fas fa-copy text-xs"></i> Copy
                </button>
            </div>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                
                    <span class="text-blue-400">const</span> <span class="text-green-400">customOptions</span> <span class="text-yellow-300">=</span> <span class="text-yellow-300">{</span><br>
                    <span class="text-purple-400 ml-4">toolbar_sticky</span>: <span class="text-yellow-400">true</span><br>
                    <span class="text-yellow-300">};</span><br><br>

                    <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">overrideDefaults</span><span class="text-yellow-300">({</span><br>
                    <span class="text-gray-300 ml-4">...</span><span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-blue-400">defaultOptions</span><span class="text-yellow-300">,</span><br>
                    <span class="text-gray-300 ml-4">...</span><span class="text-green-400">customOptions</span><br>
                    <span class="text-yellow-300">});</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>idefaultOptions (Object)</code> - Default options object.</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="remove">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">remove()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">remove</span>(<span class="text-green-400">selector</span>: <span class="text-blue-400">editflo.Editor | String | Object</span>): <span class="text-yellow-400">editflo.Editor</span></code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Removes a editor or editors form page.
                </p>
            </div>


            <div class="sect3 mb-6">

                <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                <div class="listingblock mb-4">
    <div class="content">
        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <div class="text-xs font-mono ">JAVASCRIPT</div>
                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                    <i class="fas fa-copy text-xs"></i> Copy
                </button>
            </div>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                
                        <span class="text-gray-300">// Remove all editors bound to divs</span><br>
                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">remove</span><span class="text-yellow-300">(</span><span class="text-green-400">'div'</span><span class="text-yellow-300">);</span><br><br>

                        <span class="text-gray-300">// Remove all editors bound to textareas</span><br>
                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">remove</span><span class="text-yellow-300">(</span><span class="text-green-400">'textarea'</span><span class="text-yellow-300">);</span><br><br>

                        <span class="text-gray-300">// Remove all editors</span><br>
                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">remove</span><span class="text-yellow-300">();</span><br><br>

                        <span class="text-gray-300">// Remove specific instance by id</span><br>
                        <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">remove</span><span class="text-yellow-300">(</span><span class="text-green-400">'#id'</span><span class="text-yellow-300">);</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>selector (Editor | String | Object)</code> - selector (Editor | String | Object)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Editor</code> - The editor that got passed in will be return if it was found otherwise null.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>


                <div class="sect2 mb-10" id="resolve">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">resolve()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">resolve</span>(<span class="text-green-400">n</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">o</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Object</span></code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Resolves a string and returns the object from a specific structure.
                </p>
            </div>


            <div class="sect3 mb-6">

                <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                <div class="listingblock mb-4">
    <div class="content">
        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <div class="text-xs font-mono ">JAVASCRIPT</div>
                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                    <i class="fas fa-copy text-xs"></i> Copy
                </button>
            </div>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
               
                    <span class="text-gray-300">// Resolve a path into an object reference</span><br>
                    <span class="text-blue-400">const</span> <span class="text-green-400">obj</span> <span class="text-yellow-300">=</span> <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">resolve</span><span class="text-yellow-300">(</span><span class="text-green-400">'a.b.c.d'</span><span class="text-yellow-300">);</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>n (String)</code> - Path to resolve for example a.b.c.d.</li>
                                <li><code>o (Object)</code> - Optional object to search though, defaults to window.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Object</code> - Last object in path or null if it couldn’t be resolved.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="setActive">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">setActive()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">setActive</span>(<span class="text-green-400">editor</span>: <span class="text-blue-400">editflo.Editor</span>)</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Sets the active editor instance and fires the deactivate/activate events.
                </p>
            </div>


            <div class="sect3 mb-6">

                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>editor (Editor)</code> - Editor instance to set as the active instance.</li>

                        </ul>
                    </div>
                </div>

                <hr class="my-6 border-gray-300">

            </div>

            <div class="sect2 mb-10" id="toArray">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">toArray()</h3>
                <div class="listingblock mb-4">
                    <div class="content">
                        <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                            <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                <div class="text-xs font-mono ">JAVASCRIPT</div>

                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                    <i class="fas fa-copy text-xs"></i> Copy
                                    <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                        Copied!
                                    </div>
                                </button>
                            </div>

                            <!-- Code Content (CENTERED vertically) -->
                            <div class="overflow-x-auto text-white-500">
                                <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">toArray</span>(<span class="text-green-400">obj</span>: <span class="text-blue-400">Object</span>): <span class="text-yellow-400">Array</span></code>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paragraph mb-4">
                    <p class="text-gray-700 text-sm sm:text-base">Converts the specified object into a real JavaScript array.
                    </p>
                </div>


                <div class="sect3 mb-6">

                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>obj (Object)</code> - Object to convert into array.</li>

                            </ul>
                        </div>
                    </div>
                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>Array</code> - Array object based in input.</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="translate">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">translate()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">translate</span>(<span class="text-green-400">text</span>: <span class="text-blue-400">String | Array | Object</span>): <span class="text-yellow-400">String</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">Translates the specified string using the language pack items.
                        </p>
                    </div>


                    <div class="sect3 mb-6">

                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>text (String | Array | Object)</code> -String to translate</li>

                                </ul>
                            </div>
                        </div>
                        <div class="sect3">
                            <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                            <div class="ulist">
                                <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                    <li><code>String</code> - Translated string.</li>
                                </ul>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">

                    </div>

                    <div class="sect2 mb-10" id="triggerSave">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">triggerSave()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono ">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                        <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">triggerSave</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Calls the save method on all editor instances in the collection. This can be useful when a form is to be submitted.</p>
                        </div>


                        <div class="sect3 mb-6">

                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Examples</h4>

                            <div class="listingblock mb-4">
    <div class="content">
        <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
            <div class="absolute top-2 right-2 flex items-center gap-3 
                opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                <div class="text-xs font-mono ">JAVASCRIPT</div>
                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                    <i class="fas fa-copy text-xs"></i> Copy
                </button>
            </div>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                
                <span class="text-gray-300">// Saves all contents</span><br>
                <span class="text-blue-400">editflo</span><span class="text-yellow-300">.</span><span class="text-purple-400">triggerSave</span><span class="text-yellow-300">();</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-300">

                </div>

                <div class="sect2 mb-10" id="trim">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">trim()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono ">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">trim</span>(<span class="text-green-400">s</span>: <span class="text-blue-400">String</span>): <span class="text-yellow-400">String</span></code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph mb-4">
                <p class="text-gray-700 text-sm sm:text-base">Removes whitespace from the beginning and end of a string.

                </p>
            </div>


            <div class="sect3 mb-6">

                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>s (String)</code> - String to remove whitespace from.</li>

                        </ul>
                    </div>
                </div>
                <div class="sect3">
                    <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                    <div class="ulist">
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>String</code> - New string with removed whitespace..</li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-300">

            </div>

            <div class="sect2 mb-10" id="walk">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">walk()</h3>
                <div class="listingblock mb-4">
                    <div class="content">
                        <div class="group bg-gray-100 rounded-lg overflow-hidden border border-gray-300 relative">

                            <!-- Top bar (text + copy button ONLY visible on hover) -->
                            <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                <div class="text-xs font-mono ">JAVASCRIPT</div>

                                <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                    <i class="fas fa-copy text-xs"></i> Copy
                                    <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                        Copied!
                                    </div>
                                </button>
                            </div>

                            <!-- Code Content (CENTERED vertically) -->
                            <div class="overflow-x-auto text-white-500">
                                <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">walk</span>(<span class="text-green-400">o</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">f</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">n</span>: <span class="text-blue-400">String</span>, <span class="text-green-400">s</span>: <span class="text-blue-400">String</span>)</code>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paragraph mb-4">
                    <p class="text-gray-700 text-sm sm:text-base">Executed the specified function for each item in a object tree.

                    </p>
                </div>


                <div class="sect3 mb-6">

                    <div class="sect3">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <div class="ulist">
                            <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                                <li><code>o (Object)</code> - Object tree to walk though.</li>
                                <li><code>f (Function)</code> - Function to call for each item.</li>
                                <li><code>n (String)</code> - Optional name of collection inside the objects to walk for example childNodes.</li>
                                <li><code>s (String)</code> - Optional scope to execute the function in.</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-300">

                </div>
                <!-- Note: Additional methods would follow the same pattern -->

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


        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Update active nav link
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active', 'text-white');
                        link.classList.add('text-gray-700', 'hover:text-gray-900');
                    });

                    // Highlight current section in sidebar
                    if (this.classList.contains('nav-link')) {
                        this.classList.remove('text-gray-700', 'hover:text-gray-900');
                        this.classList.add('active', 'text-white');
                    }

                    // Scroll to target
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // AI Assistant buttons
        const aiButtons = document.querySelectorAll('.bg-white.border button, .bg-white.border');
        aiButtons.forEach(button => {
            button.addEventListener('click', function() {
                const question = this.textContent.trim();
                const input = document.querySelector('input[placeholder*="Ask me"]');
                if (input) {
                    input.value = question;
                    input.focus();
                }
            });
        });
    });
</script>