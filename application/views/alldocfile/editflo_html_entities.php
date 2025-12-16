<div class="min-h-screen w-full overflow-x-hidden px-4 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.html.Entities</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            Entity encoder class.
        </p>
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
                            <a href="#decode" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span class="">decode()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Decodes the specified string, this will replace entities with raw UTF characters.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Entities
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#encodeAllRaw" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span class="">encodeAllRaw()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Encoded the specified text with both the attributes and text entities. This function will produce larger text contents since it doesn’t know if the context is within an attribute or text node. This was added for compatibility and is exposed as the <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-xs sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">DOMUtils.encode</code> function.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Entities
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#encodeNamed" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span class="">encodeNamed()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Encodes the specified string using named entities. The core entities will be encoded as named ones but all non lower ascii characters will be encoded into named entities.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Entities
                                </code>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#encodeNumeric" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span class="">encodeNumeric()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Encodes the specified string using numeric entities. The core entities will be encoded as named ones but all non lower ascii characters will be encoded into numeric entities.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Entities
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#encodeRaw" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span class="">encodeRaw()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Encodes the specified string using raw entities. This means only the required XML base entities will be encoded.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Entities
                                </code>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#getEncodeFunc" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <span class="">getEncodeFunc()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Returns an encode function based on the name(s) and it’s optional entities.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Entities
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
    <section id="decode" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">decode()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">decode</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">) :</span>
                        <span class="text-blue-400">String</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Decodes the specified string, this will replace entities with raw UTF characters.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Text to entity decode.</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Entity decoded string.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="encodeAllRaw" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">encodeAllRaw()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">encodeAllRaw</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">) :</span>
                        <span class="text-blue-400">String</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Encoded the specified text with both the attributes and text entities. This function will produce larger text contents since it doesn’t know if the context is within an attribute or text node. This was added for compatibility and is exposed as the <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded font-mono text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">DOMUtils.encode</code> function.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Text to entity decode.</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Entity decoded string.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- addNodeFilter Section -->
    <section id="encodeNamed" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">encodeNamed()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">encodeNamed</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, attr:</span>
                        <span class="text-blue-400">Boolean</span>
                        <span class="text-green-300">, entities:</span>
                        <span class="text-blue-400">Object</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400"> String</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
                Encodes the specified string using named entities. The core entities will be encoded as named ones but all non lower ascii characters will be encoded into named entities.
            </p>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Text to encode.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">attr (Boolean)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional flag to specify if the text is attribute contents.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">entities (Object)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional parameter with entities to use.</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Entity encoded text.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- parse Section -->
    <section id="encodeNumeric" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">encodeNumeric()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">encodeNumeric</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, attr:</span>
                        <span class="text-blue-400">Boolean</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">String</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Encodes the specified string using numeric entities. The core entities will be encoded as named ones but all non lower ascii characters will be encoded into numeric entities.
            </p>
        </div>


        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Text to encode.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">attr (Boolean)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional flag to specify if the text is attribute contents.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Entity encoded text.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="encodeRaw" class="mb-5 sm:mb-4 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">encodeRaw()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">encodeRaw</span>
                        <span class="text-green-300">(text: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, attr:</span>
                        <span class="text-blue-400">Boolean</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">String</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Encodes the specified string using raw entities. This means only the required XML base entities will be encoded.
            </p>
        </div>


        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Text to encode.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">attr (Boolean)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional flag to specify if the text is attribute contents.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Entity encoded text.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- removeAttributeFilter Section -->
    <section id="getEncodeFunc" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getEncodeFunc()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getEncodeFunc</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, entities:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">);</span>
                        <span class="text-blue-400">Function</span>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
            Returns an encode function based on the name(s) and it’s optional entities.
        </p>
</div>


<div class="w-full">
    <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
        <ul class="space-y-3 list-disc pl-5">
            <li class="mb-2">
                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Comma separated list of encoders for example named,numeric.</span>
            </li>
            <li class="mb-2">
                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">entities (String)</code>
                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional parameter with entities to use instead of the built in set.</span>
            </li>
        </ul>
    </div>
</div>

<div class="w-full">
    <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
        <ul class="space-y-3 list-disc pl-5">
            <li class="mb-2">
                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Function</code>
                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Encode function to be used.</span>
            </li>
        </ul>
    </div>
</div>
</section>