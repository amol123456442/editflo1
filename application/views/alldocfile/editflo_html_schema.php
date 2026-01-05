<div class="min-h-screen w-full overflow-x-hidden px-4 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">Editflo.html.Schema</h1>
        <div class="mb-6 sm:mb-8 md:mb-10 w-full">
            <p class="text-gray-700 text-lg sm:text-base mb-5 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
                Schema validator class.
            </p>

            <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
                <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
                <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                    <div class="p-3 sm:p-4 overflow-x-auto">
                        <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                            <span class="text-blue-400">if (editflo.activeEditor.schema.</span>
                            <span class="text-green-300">isValidChild</span>
                            <span class="text-blue-400">(</span>
                            <span class="text-green-300">'p', 'span'</span>
                            <span class="text-blue-400">)) {/span>
                                <br>
                                <span class="text-blue-400">alert</span>
                                <span class="text-green-300">(</span>
                                <span class="text-blue-400">'span is valid child of p.'</span>
                                <span class="text-green-300">);</span>
                                <br>
                                <span class="text-green-300">}</span>
                                <br>
                                <span class="text-blue-400">if (editflo.activeEditor.schema.</span>
                                <span class="text-green-300">getElementRule</span>
                                <span class="text-blue-400">(</span>
                                <span class="text-green-300">'p'</span>
                                <span class="text-blue-400">)) {/span>
                                    <br>
                                    <span class="text-blue-400">alert</span>
                                    <span class="text-green-300">(</span>
                                    <span class="text-blue-400">'P is a valid element.'</span>
                                    <span class="text-green-300">);</span>
                                    <br>
                                    <span class="text-green-300">}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methods Summary Section -->
    <section class="mb-5 sm:mb-5 md:mb-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-1 pb-2">Summary</h2>
        <p class="text-gray-700 text-2xl sm:text-base font-medium mb-5">Methods</p>
        <div class="rounded-lg border-gray-200 shadow-sm overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider w-[10%] md:w-auto">Name</th>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider w-[80%] md:w-auto">Summary</th>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider w-[10%] md:w-auto">Defined by</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#addCustomElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                addCustomElements()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">
                                Adds custom non-HTML elements to the schema. For more information about adding custom elements see: custom_elements
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#addValidChildren" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                addValidChildren()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">
                                Parses a valid children string and adds them to the schema structure. The valid children format is for example<code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">element[child1]</code>.
                            </p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#addValidElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                addValidElements()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">


                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Parses a valid elements string and adds it to the schema. The valid elements format is for example &lt;ele[attr=def|oth]&gt;.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getBlockElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">
                                getBlockElements()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with block elements.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getBoolAttrs" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getBoolAttrs()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with boolean attributes.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getComponentUrls" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getComponentUrls()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns an object of all custom elements that have component URLs.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getCustomElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getCustomElements()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns an map object of all custom elements.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getElementRule" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getElementRule()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns true/false if the specified element is valid or not according to the schema.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getInvalidStyles" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getInvalidStyles()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Name/value map object with valid styles for each element.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getMoveCaretBeforeOnEnterElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getMoveCatBeforEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with elements that the caret should be moved in front of after enter is pressed.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getNonEmptyElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getNonEmptyElem()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with elements that should be treated as contents regardless if it has text content in them or not. For example: <br>
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;td&gt;</code>,
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;video&gt;</code> or <br>
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;img&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getSelfClosingElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getSelfClosingEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with self closing tags. For example: <br>
                                &lt;li&gt;.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getSpecialElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">
                                getSpecialElements()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with special elements. These are elements that needs to be parsed in a special way such as script, style, textarea etc. The map object values are regexps used to find the end of the element.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getTextBlockElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getTextBlockEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with text block elements. For example: <br>
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;p&gt;</code>,
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;h1&gt;</code> to
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;h6&gt;</code>,
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;div&gt;</code> or
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;address&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getTextInlineElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getTextInlineEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map of inline text format nodes. For example: <br>
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;strong&gt;</code>,
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;span&gt;</code> or
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;ins&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getTransparentElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getTransparentEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with elements that should be treated as transparent.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getValidClasses" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">
                                getValidClasses()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Name/value map object with valid classes for each element.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getValidStyles" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getValidStyles()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Name/value map object with valid styles for each element.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getVoidElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getVoidElements()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with void elements. For example:
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;br&gt;</code> or
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;img&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#getWhitespaceElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                getWhitespaceEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns a map with elements where white space is to be preserved. For example:
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;pre&gt;</code> or
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;script&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#isValid" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                isValid()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns true/false if the specified element name and optional attribute is valid according to the schema.</p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#isValidChild" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                isValidChild()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Returns true/false if the specified element and it’s child is valid or not according to the schema.</p>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="#setValidElements" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">

                                setValidEle()
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[80%] md:w-auto">

                            <p class="text-xs md:text-sm text-gray-800 md:line-clamp-none">Parses a valid elements string and sets it to the schema. The valid elements format is for example
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;ele[att=def|oth]&gt;</code>. Existing rules will be replaced with the ones specified, so this extends the schema.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-sm md:text-sm truncate md:truncate-none block">
                                    Schema
                                </code>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="addCustomElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2  border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">addCustomElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">addCustomElements</span>
                        <span class="text-green-300">(custom_elements: </span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">|</span>
                        <span class="text-blue-400">Object</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Adds custom non-HTML elements to the schema. For more information about adding custom elements see: custom_elements.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">custom_elements (String | Object)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Comma separated list or record of custom elements to add.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="addValidChildren" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">addValidChildren()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">addValidChildren</span>
                        <span class="text-green-300">(valid_children: </span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Parses a valid children string and adds them to the schema structure. The valid children format is for example <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">element[child1|child2]</code>.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">valid_children (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Valid children elements string to parse</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="addValidElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">addValidElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">addValidElements</span>
                        <span class="text-green-300">(valid_elements: </span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Parses a valid elements string and adds it to the schema. The valid elements format is for example <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">element[attr=default|otherattr]</code>. Existing rules will be replaced with the ones specified, so this extends the schema.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">valid_elements (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- String in the valid elements format to be parsed.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getBlockElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getBlockElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getBlockElements</span>
                        <span class="text-green-300">(): </span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with block elements.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for block elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getBoolAttrs" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getBoolAttrs()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getBoolAttrs</span>
                        <span class="text-green-300">(): </span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with boolean attributes.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for boolean attributes.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getComponentUrls" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getComponentUrls()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getComponentUrls</span>
                        <span class="text-green-300">(): </span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns an object of all custom elements that have component URLs.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object with where key is the component and the value is the url for that component.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getCustomElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getCustomElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getCustomElements</span>
                        <span class="text-green-300">(): </span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns an object of all custom elements that have component URLs.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value map object of all custom elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getElementRule" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getElementRule()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getElementRule</span>
                        <span class="text-green-300">(name:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if the specified element is valid or not according to the schema.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Element name to check for.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Element object or undefined if the element isn’t valid.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getInvalidStyles" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getInvalidStyles()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getInvalidStyles</span>
                        <span class="text-green-300">()</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Name/value map object with valid styles for each element.
            </p>
        </div>
    </section>

    <section id="getMoveCaretBeforeOnEnterElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-md sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getMoveCaretBeforeOnEnterElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-md sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getMoveCaretBeforeOnEnterElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with elements that the caret should be moved in front of after enter is pressed.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for elements to place the caret in front of.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getNonEmptyElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getNonEmptyElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getNonEmptyElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with elements that should be treated as contents regardless if it has text content in them or not. For example: <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;td&gt;</code>,
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;video&gt;</code>or<code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;img&gt;</code>.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for non empty elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getSelfClosingElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getSelfClosingElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getSelfClosingElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with self closing tags. For example: <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;li&gt;</code>.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for self closing tags elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getSpecialElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getSpecialElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getSpecialElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with special elements. These are elements that needs to be parsed in a special way such as script, style, textarea etc. The map object values are regexps used to find the end of the element.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for special elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getTextBlockElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getTextBlockElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getTextBlockElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with text block elements. For example: <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;p&gt;</code>,
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;h1&gt;</code> to
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;h6&gt;</code>,
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;div&gt;</code> or
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;address&gt;</code>.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for block elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getTextInlineElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getTextInlineElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getTextInlineElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map of inline text format nodes. For example: <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;strong&gt;</code>,
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;span&gt;</code> to
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;ins&gt;</code>.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for text format elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getTransparentElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getTransparentElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getTransparentElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with elements that should be treated as transparent.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for special elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getValidClasses" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getValidClasses()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getValidClasses</span>
                        <span class="text-green-300">()</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Name/value map object with valid classes for each element.
            </p>
        </div>
    </section>

    <section id="getVoidElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getVoidElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getVoidElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with void elements. For example: <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;br&gt;</code> or
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;img&gt;</code>.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for void elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="getWhitespaceElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getWhitespaceElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getWhitespaceElements</span>
                        <span class="text-green-300">();</span>
                        <span class="text-blue-400">Object</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns a map with elements where white space is to be preserved. For example: <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;pre&gt;</code> or
                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-lg sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;script&gt;</code>.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Object</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value lookup map for white space elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="isValid" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isValid()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">isValid</span>
                        <span class="text-green-300">(name:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">, attr</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if the specified element name and optional attribute is valid according to the schema.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of element to check.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">attr (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional attribute name to check for.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">

                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Boolean</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- True/false if the element and attribute is valid.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="isValidChild" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isValidChild()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">isValidChild</span>
                        <span class="text-green-300">(name:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">, child</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if the specified element and it’s child is valid or not according to the schema.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Element name to check for.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">child (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Element child to verify.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">

                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">Boolean</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- True/false if the element is a valid child of the specified parent.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="setValidElements" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">setValidElements()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">setValidElements</span>
                        <span class="text-green-300">(valid_elements:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">):</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Parses a valid elements string and sets it to the schema. The valid elements format is for example <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">element[attr=default|otherattr]</code>. Existing rules will be replaced with the ones specified, so this extends the schema.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100">valid_elements (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- String in the valid elements format to be parsed.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>