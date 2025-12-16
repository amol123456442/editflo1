<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo.html.Writer</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            This class is used to write HTML tags out it can be used with the Serializer.
        </p>
        <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
            <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">const writer = Editflo.html.</span>
                        <span class="text-green-300">Writer</span>
                        <span class="text-blue-400">({ indent: </span>
                        <span class="text-green-300">true </span>
                        <span class="text-blue-400"> });</span>
                        <br>
                        <span class="text-blue-400">writer.</span>
                        <span class="text-green-300">start </span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'node'</span>
                        <span class="text-blue-400">, { attr:</span>
                        <span class="text-green-300">'value'</span>
                        <span class="text-blue-400"> });</span>
                        <br>
                        <span class="text-blue-400">writer</span>
                        <span class="text-green-300">end </span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'node'</span>
                        <span class="text-blue-400">);</span>
                        <br>
                        <span class="text-blue-400">console.</span>
                        <span class="text-green-300">log </span>
                        <span class="text-blue-400">(writer.</span>
                        <span class="text-green-300">getContent</span>
                        <span class="text-blue-400">());</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methods Summary Section -->
    <section class="mb-8 sm:mb-5 md:mb-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-1 pb-2">Summary</h2>
        <p class="text-gray-700 text-lg sm:text-base font-medium mb-5">Methods:</p>
        <div class="rounded-lg border-gray-200 shadow-sm overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider w-[30%] md:w-auto">Name</th>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider w-[50%] md:w-auto">Summary</th>
                        <th class="px-3 py-2 md:px-4 md:py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider w-[20%] md:w-auto">Defined by</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#cdata" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span>cdata()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes a cdata node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;![CDATA[data]]&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#comment" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">comment...</span> -->
                                <span>comment()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes a comment node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded  text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;!-- Comment --&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#doctype" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">doctype...</span> -->
                                <span>doctype()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes a doctype node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 roundedtext-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;!DOCTYPE data&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#end" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">end...</span> -->
                                <span>end()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes an end element, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;p&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800  text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#getContent" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">getContent...</span> -->
                                <span>getContent()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Returns the contents that was serialized.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#pi" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">pi...</span> -->
                                <span>pi()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes a processing instruction (PI) node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;?xml attr="value" ?&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#reset" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">reset...</span> -->
                                <span>reset()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Resets the internal buffer. For example, if one wants to reuse the writer.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#start" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span>start...</span> -->
                                <span>start()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes a start element, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;p id="a"&gt;</code>.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#text" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">text...</span> -->
                                <span>text()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 ml-2 text-lg sm:text-base">
                                Writes a text node.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Styles
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
    <section id="cdata" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">cdata()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">cdata</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes a cdata node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;![CDATA[data]]&gt;</code>.
            </p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- String to write out inside the cdata.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="comment" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">comment()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">comment</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes a comment node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;!-- Comment --&gt;</code>.
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- String to write out inside the comment.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="doctype" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">doctype()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">doctype</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes a doctype node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;!DOCTYPE data&gt;</code>.
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- String to write out inside the doctype.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="end" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">end()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">end</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes an end element, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;p&gt;</code>.
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- Name of the element.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="getContent" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getContent()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getContent</span>
                        <span class="text-green-300">(): </span>
                        <span class="text-blue-400">String </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns the contents that was serialized.
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- HTML contents that got written down.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="pi" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">pi()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">pi</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes a processing instruction (PI) node, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;?xml attr="value" ?&gt;</code>
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- Name of the pi.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- String to write out inside the pi.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="reset" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">reset()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">reset</span>
                        <span class="text-green-300">()</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Resets the internal buffer. For example, if one wants to reuse the writer.
            <p>
        </div>
    </section>

    <section id="start" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">start()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">start</span>
                        <span class="text-green-300">(name:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">, attrs:</span>
                        <span class="text-blue-400">Array</span>
                        <span class="text-green-300">, empty:</span>
                        <span class="text-blue-400">Boolean</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes a start element, such as <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">&lt;p id="a"&gt;</code>
            <p>
            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                                <span class="text-gray-700 ml-2 text-lg sm:text-base">- Name of the element.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">attrs (String)</code>
                                <span class="text-gray-700 ml-2 text-lg sm:text-base">- Optional array of objects containing an attribute name and value, or undefined if the element has no attributes.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">empty (Boolean)</code>
                                <span class="text-gray-700 ml-2 text-lg sm:text-base">- Optional empty state if the tag should serialize as a void element. For example: <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">&lt;img /&gt;</code></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="text" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">text()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">text</span>
                        <span class="text-green-300">(text:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">, raw:</span>
                        <span class="text-blue-400">Boolean</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Writes a text node.
            <p>
            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                                <span class="text-gray-700 ml-2 text-lg sm:text-base">- String to write out.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">raw (Boolean)</code>
                                <span class="text-gray-700 ml-2 text-lg sm:text-base">- Optional raw state. If true, the contents won’t get encoded.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>