<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.html.DomParser</h1>

        <!-- GPL License & Description -->
        <div class="mb-6 sm:mb-8 md:mb-10 w-full">
            <p class="text-gray-800 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
                This class parses HTML code into a DOM like structure of nodes it will remove redundant whitespace and make sure that the node tree is valid according to the specified schema. So for example:
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&#60;p/&#62;a&#60;p/&#62;b&#60;p/&#62;c&#60;p/&#62;</code>
                will become
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&#60;p/&#62;a&#60;p/&#62;b&#60;p/&#62;c&#60;p/&#62;</code>.
            </p>

            <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
                <p class="text-gray-700 text-sm sm:text-base font-medium mb-2">Example:</p>
                <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                    <div class="p-3 sm:p-4 overflow-x-auto">
                        <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                            <span class="text-blue-400">const parser = editflo.html.</span>
                            <span class="text-green-300">DomParser</span>
                            <span class="text-blue-400">({ validate: </span>
                            <span class="text-green-300">true</span>
                            <span class="text-blue-400">}, schema);</span>
                            <br>
                            <span class="text-blue-400">const rootNode = parser.</span>
                            <span class="text-green-300">parse</span>
                            <span class="text-blue-400">(</span>
                            <span class="text-red-300">'&lt;h1&gt;content&lt;/h1&gt;'</span>
                            <span class="text-blue-400">);</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methods Summary Section -->
    <section class="mb-5 sm:mb-5 md:mb-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-1 pb-2">Summary</h2>
        <p class="text-gray-800 text-lg sm:text-base font-medium mb-5">Methods:</p>
        <div class="rounded-lg border-gray-200 shadow-sm overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-md font-medium text-gray-700 uppercase tracking-wider w-[30%] md:w-auto">Name</th>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-md font-medium text-gray-700 uppercase tracking-wider w-[50%] md:w-auto">Summary</th>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-md font-medium text-gray-700 uppercase tracking-wider w-[20%] md:w-auto">Defined by</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#addAttributeFilter" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">addAttr...</span> -->
                                <span>addAttributeFilter()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800  md:line-clamp-none">
                                Adds an attribute filter function to the parser, the parser will collect nodes that has the specified attributes and then execute the callback once it has finished parsing the document.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    DomParser
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#addNodeFilter" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">addNode...</span> -->
                                <span>addNodeFilter()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800  md:line-clamp-none">
                                Adds a node filter function to the parser, the parser will collect the specified nodes by name and then execute the callback once it has finished parsing the document.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    DomParser
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#parse" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">parse...</span> -->
                                <span>parse()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-700  md:line-clamp-none">
                                Parses the specified HTML string into a DOM like node tree and returns the result.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    DomParser
                                </code>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#removeAttributeFilter" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">removeAttr...</span> -->
                                <span>removeAttributeFilter()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-sx md:text-sm text-gray-700  md:line-clamp-none">
                                Parses the specified HTML string into a DOM like node tree and returns the result.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    DomParser
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#removeNodeFilter" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">removeNodeFil...</span> -->
                                <span class="hidden md:inline">removeNodeFilter()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-700  md:line-clamp-none">
                                Parses the specified HTML string into a DOM like node tree and returns the result.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    DomParser
                                </code>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Method Details Sections -->

    <!-- addAttributeFilter Section -->
    <section id="addAttributeFilter" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Method</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">addAttributeFilter()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">addAttributeFilter</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Adds an attribute filter function to the parser, the parser will collect nodes that has the specified attributes and then execute the callback once it has finished parsing the document.
            </p>
        </div>

        <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
            <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm  inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">parser.</span>
                        <span class="text-green-300">addAttributeFilter</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'src,href'</span>
                        <span class="text-blue-400">, (nodes, name) => {</span>
                        <br>
                        <span class="text-blue-400">for (let i = 0; i < nodes.length; i++) {</span>
                                <br>
                                <span class="text-blue-400">console.</span>
                                <span class="text-green-300">log</span>
                                <span class="text-blue-400">(nodes[i].name);</span>
                                <br>
                                <span class="text-blue-400"> }</span>
                                <br>
                                <span class="text-blue-400">});</span>
                                <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Comma separated list of attributes to collect.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Callback function to execute once it has collected nodes.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- addNodeFilter Section -->
    <section id="addNodeFilter" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">addNodeFilter()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">addNodeFilter</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
                Adds a node filter function to the parser, the parser will collect the specified nodes by name and then execute the callback once it has finished parsing the document.
            </p>
        </div>
        <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
            <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">parser.</span>
                        <span class="text-green-300">addNodeFilter</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'p,h1'</span>
                        <span class="text-blue-400">, (nodes, name) => {</span>
                        <br>
                        <span class="text-blue-400">for (let i = 0; i < nodes.length; i++) {</span>
                                <br>
                                <span class="text-blue-400">console.</span>
                                <span class="text-green-300">log</span>
                                <span class="text-blue-400">(nodes[i].name);</span>
                                <br>
                                <span class="text-blue-400"> }</span>
                                <br>
                                <span class="text-blue-400">});</span>
                                <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="bg-gray-100 text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Comma separated list of attributes to collect.</span>
                    </li>
                    <li class="mb-2">
                        <code class="bg-gray-100 text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Callback function to execute once it has collected nodes.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- parse Section -->
    <section id="parse" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">parse()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full mb-5">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">parse</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, args:</span>
                        <span class="text-blue-400">Object</span>
                        <span class="text-green-300">): editflo.html.Node</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 w-full">
                Parses the specified HTML string into a DOM like node tree and returns the result.
            </p>
        </div>

        <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
            <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">const rootNode = editflo.html.</span>
                        <span class="text-green-300">DomParser</span>
                        <span class="text-blue-400">({...}).</span>
                        <span class="text-green-300">parse</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'&lt;b&gt;text&lt;/b&gt;'</span>
                        <span class="text-blue-400">)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">html (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Html string to sax parse.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">args (Object)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional args object that gets passed to all filter functions.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Root node containing the tree.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- removeAttributeFilter Section -->
    <section id="removeAttributeFilter" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">removeAttributeFilter()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">removeAttributeFilter</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
            Removes an attribute filter function or removes all filter functions from the parser for the attribute names provided.
        </p>
</div>

<div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
    <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
    <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
        <div class="p-3 sm:p-4 overflow-x-auto">
            <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                <span class="text-green-500">// Remove a single filter</span> <br>
                <span class="text-blue-400">parser.</span>
                <span class="text-green-300">removeAttributeFilter</span>
                <span class="text-blue-400">(</span>
                <span class="text-green-300">'src,href'</span>
                <span class="text-blue-400">, someCallback);</span>
                <br>
                <span class="text-green-500">// Remove all filters</span> <br>
                <span class="text-blue-400">parser.</span>
                <span class="text-green-300">removeAttributeFilter</span>
                <span class="text-blue-400">(</span>
                <span class="text-green-300">'src,href'</span>
                <span class="text-blue-400">);</span>
            </div>
        </div>
    </div>
</div>

<div class="w-full">
    <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
        <ul class="space-y-3 list-disc pl-5">
            <li class="mb-2">
                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Comma separated list of attribute names to remove filters for.</span>
            </li>
            <li class="mb-2">
                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function)</code>
                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional callback function to only remove a specific callback.</span>
            </li>
        </ul>
    </div>
</div>
</section>

<!-- removeNodeFilter Section -->
<section id="removeNodeFilter" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">removeNodeFilter()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">removeNodeFilter</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
            Removes a node filter function or removes all filter functions from the parser for the node names provided.
        </p>
    </div>

    <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
        <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-green-500">// Remove a single filter</span> <br>
                    <span class="text-blue-400">parser.</span>
                    <span class="text-green-300">removeNodeFilter</span>
                    <span class="text-blue-400">(</span>
                    <span class="text-green-300">'p,h1'</span>
                    <span class="text-blue-400">, someCallback);</span>
                    <br>
                    <span class="text-green-500">// Remove all filters</span> <br>
                    <span class="text-blue-400">parser.</span>
                    <span class="text-green-300">removeAttributeFilter</span>
                    <span class="text-blue-400">(</span>
                    <span class="text-green-300">'src,href'</span>
                    <span class="text-blue-400">);</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Comma separated list of attribute names to remove filters for.</span>
                </li>
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional callback function to only remove a specific callback.</span>
                </li>
            </ul>
        </div>
    </div>
</section>
</div>