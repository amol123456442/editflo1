<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.UndoManager</h1>
            <p class="text-gray-700 text-sm sm:text-base">This class handles the undo/redo history levels for the editor. Since the built-in undo/redo has major drawbacks a custom one was needed.
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
                                            <a href="#add" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">add()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Adds a new undo level/snapshot to the undo list.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#beforeChange" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">beforeChange()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Stores away a bookmark to be used when performing an undo action so that the selection is before the change has been made.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#clear" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">clear()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Removes all undo levels.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#dispatchChange" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">dispatchChange()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Dispatch a change event with current editor status as level and current undoManager layer as lastLevel.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#extra" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">extra()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Adds an extra "hidden" undo level by first applying the first mutation and store that to the undo stack then roll back that change and do the second mutation on top of the stack. This will produce an extra undo level that the user doesn't see until they undo.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#hasRedo" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">hasRedo()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the undo manager has any redo levels.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#hasUndo" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">hasUndo()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true/false if the undo manager has any undo levels.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#ignore" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">ignore()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Executes the specified mutator function as an undo transaction. But without adding an undo level. Any logic within the translation that adds undo levels will be ignored. So a translation can include calls to execCommand or editor.insertContent.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#redo" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">redo()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Redoes the last action.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#reset" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">reset()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Resets the undo manager levels by clearing all levels and then adding an initial level.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#transact" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">transact()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Executes the specified mutator function as an undo transaction. The selection before the modification will be stored to the undo stack and if the DOM changes it will add a new undo level. Any logic within the translation that adds undo levels will be ignored. So a translation can include calls to execCommand or editor.insertContent.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#undo" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">undo()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Undoes the last action.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>UndoManager</code></td>
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

                <!-- add Method -->
                <div class="sect2 mb-10" id="add">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">add()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

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
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">add</span>(<span class="text-green-400">level</span>: <span class="text-blue-400">Object</span>, <span class="text-green-400">event</span>: <span class="text-blue-400">EditorEvent</span>): <span class="text-yellow-400">Object</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds a new undo level/snapshot to the undo list.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>level (Object)</code> – Optional undo level object to add.</li>
                            <li><code>event (EditorEvent)</code> – Optional event responsible for the creation of the undo level.</li>
                        </ul>
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Object</code> – Undo level that got added or null if a level wasn’t needed.</li>
                        </ul>
                        
                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- beforeChange Method -->
                    <div class="sect2 mb-10" id="beforeChange">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">beforeChange()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">beforeChange</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Stores away a bookmark to be used when performing an undo action so that the selection is before the change has been made.</p>
                        </div>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- clear Method -->
                    <div class="sect2 mb-10" id="clear">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">clear()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">clear</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Removes all undo levels.</p>
                        </div>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- dispatchChange Method -->
                    <div class="sect2 mb-10" id="dispatchChange">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">dispatchChange()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">dispatchChange</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Dispatch a change event with current editor status as level and current undoManager layer as lastLevel</p>
                        </div>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- extra Method -->
                    <div class="sect2 mb-10" id="extra">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">extra()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">extra</span>(<span class="text-green-400">callback1</span>: <span class="text-blue-400">Function</span>, <span class="text-green-400">callback2</span>: <span class="text-blue-400">Function</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Adds an extra "hidden" undo level by first applying the first mutation and store that to the undo stack then roll back that change and do the second mutation on top of the stack. This will produce an extra undo level that the user doesn’t see until they undo.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>callback1 (Function)</code> –  Function that does mutation but gets stored as a "hidden" extra undo level.</li>
                            <li><code>callback2 (Function)</code> – Function that does mutation but gets displayed to the user.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- hasRedo Method -->
                    <div class="sect2 mb-10" id="hasRedo">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">hasRedo()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">hasRedo</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the undo manager has any redo levels.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – true/false if the undo manager has any redo levels.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- hasUndo Method -->
                    <div class="sect2 mb-10" id="hasUndo">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">hasUndo()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">hasUndo</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true/false if the undo manager has any undo levels.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – true/false if the undo manager has any undo levels.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- ignore Method -->
                    <div class="sect2 mb-10" id="ignore">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">ignore()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">ignore</span>(<span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>)</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Executes the specified mutator function as an undo transaction. But without adding an undo level. Any logic within the translation that adds undo levels will be ignored. So a translation can include calls to execCommand or editor.insertContent.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>callback (Function)</code> – Function that gets executed and has dom manipulation logic in it.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- redo Method -->
                    <div class="sect2 mb-10" id="redo">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">redo()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">redo</span>(): <span class="text-yellow-400">Object</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Redoes the last action.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Object</code> – Redo level or null if no redo was performed.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- reset Method -->
                    <div class="sect2 mb-10" id="reset">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">reset()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">reset</span>()</code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Resets the undo manager levels by clearing all levels and then adding an initial level.</p>
                        </div>
                    
                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- transact Method -->
                    <div class="sect2 mb-10" id="transact">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">transact()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">transact</span>(<span class="text-green-400">callback</span>: <span class="text-blue-400">Function</span>): <span class="text-yellow-400">Object</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Executes the specified mutator function as an undo transaction. The selection before the modification will be stored to the undo stack and if the DOM changes it will add a new undo level. Any logic within the translation that adds undo levels will be ignored. So a translation can include calls to execCommand or editor.insertContent.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Parameters</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>callback (Function)</code> – Function that gets executed and has dom manipulation logic in it.</li>
                        </ul>
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Object</code> – Undo level that got added or null it a level wasn’t needed.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- undo Method -->
                    <div class="sect2 mb-10" id="undo">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">undo()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-700 text-sm sm:text-base">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-purple-400">undo</span>(): <span class="text-yellow-400">Object</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Undoes the last action.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mt-4">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Object</code> – Undo level or null if no undo was performed.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>
 
                </div>
            </div>
    </article>
</div>

<script>
    // Simple script to handle copy code buttons
        document.addEventListener('DOMContentLoaded', function() {
        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            // Store original state
            const originalContent = button.innerHTML;
            const originalText = 'Copy';
            let isCopied = false;

            button.addEventListener('click', function() {
                if (isCopied) return; // Prevent multiple clicks
                
                // Find the code content
                const preElement = this.closest('.group').querySelector('pre');
                const code = preElement.textContent.trim();

                // Copy to clipboard
                navigator.clipboard.writeText(code).then(() => {
                    isCopied = true;
                    
                    // Change button to "Copied" state
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';
                    this.style.color = 'white';

                    // Automatically reset to "Copy" after 2 seconds
                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.style.backgroundColor = '';
                        this.style.color = '';
                        isCopied = false;
                    }, 2000);

                }).catch(err => {
                    console.error('Copy failed:', err);
                    
                    // Fallback method
                    const textarea = document.createElement('textarea');
                    textarea.value = code;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);
                    
                    // Show success even with fallback
                    isCopied = true;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';
                    this.style.color = 'white';

                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.style.backgroundColor = '';
                        this.style.color = '';
                        isCopied = false;
                    }, 2000);
                });
            });
        });
    });
</script>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            this.innerHTML = menu.classList.contains('hidden') ?
                '<i class="fas fa-bars text-xl"></i>' :
                '<i class="fas fa-times text-xl"></i>';
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuToggle = document.getElementById('menu-toggle');
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
                    }

                    // Calculate offset based on screen size
                    const offset = window.innerWidth < 1024 ? 80 : 20;

                    window.scrollTo({
                        top: targetElement.offsetTop - offset,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    menuToggle.innerHTML = '<i class="fas fa-bars text-xl"></i>';
                }
            }
        });
    </script>