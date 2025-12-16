<div class="min-h-screen w-full overflow-x-hidden px-4 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo.util.Tools</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            This class contains various utility functions. These are also exposed directly on the Editflo namespace.
        </p>
        <!-- <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
            <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">const</span>
                        <span class="text-green-300">Styles</span>
                        <span class="text-blue-400">= Editflo.html.</span>
                        <span class="text-green-300">Styles</span>
                        <span class="text-blue-400">({</span>
                        <br>
                        <span class="text-blue-400"> url_converter: (url) => {</span>
                        <br>
                        <span class="text-blue-400"> return url;</span>
                        <br>
                        <span class="text-blue-400">}</span>
                        <br>
                        <span class="text-blue-400">});</span>
                        <br>
                        <span class="text-blue-400">styles =</span>
                        <span class="text-green-300">Styles.parse</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'border: 1px solid red'</span>
                        <span class="text-blue-400">);</span>
                        <br>
                        <span class="text-blue-400">styles.color =</span>
                        <span class="text-green-300">'red'</span>
                        <span class="text-blue-400">;</span>
                        <br>
                        <span class="text-blue-400">console.</span>
                        <span class="text-green-300">log</span>
                        <span class="text-blue-400">(Editflo.html.</span>
                        <span class="text-green-300">Styles</span>
                        <span class="text-blue-400">().</span>
                        <span class="text-green-300">serialize</span>
                        <span class="text-blue-400">(styles));</span>
                    </div>
                </div>
            </div>
        </div> -->
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
                            <a href="#each" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">each...</span> -->
                                <span>each()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <!-- <p class="text-xs md:text-sm text-gray-900 line-clamp-3 md:line-clamp-none">
                                Parses the specified style value into an object collection. This parser will also merge and remove any redundant items that browsers might have added. URLs inside the styles will also be converted to absolute/relative based on the settings.
                            </p> -->
                            <!-- <span class="inline md:hidden">Performs an iteration of all items in a collection such as an object or array. This method will execute the callback function for each item in the collection, if the callback returns false the iteration will terminate. The callback has the following format: &lt;cb(value, key_or_index)&gt;</span> -->
                            <span>Performs an iteration of all items in a collection such as an object or array. This method will execute the callback function for each item in the collection, if the callback returns false the iteration will terminate. The callback has the following format: <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">cb(value, key_or_index)</code>.</span>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#explode" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">explode...</span> -->
                                <span>explode()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900 ">
                                Splits a string but removes the whitespace before and after each value.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#grep" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">grep...</span> -->
                                <span>grep()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900 ">
                                Filters out items from the input array by calling the specified function for each item. If the function returns false the item will be excluded if it returns true it will be included.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#hasOwnProperty" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">hasOwnPro...</span> -->
                                <span>hasOwnProperty()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <!-- <p class="text-xs md:text-sm text-gray-900 line-clamp-3 md:line-clamp-none">
                                Filters out items from the input array by calling the specified function for each item. If the function returns false the item will be excluded if it returns true it will be included.
                            </p> -->
                            <!-- <span class="inline md:hidden">JavaScript does not protect hasOwnProperty method, so it is possible to overwrite it. This is an object independent version. Checks if the input object &lt;obj&gt; has the property &lt;prop&gt;.</span> -->
                            <span>Performs an iteration of all items in a collection such as an object or array. This method will execute the callback function for each item in the collection, if the callback returns false the iteration will terminate. The callback has the following format: <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">cb(value, key_or_index)</code>.</span>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#inArray" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">inArray...</span> -->
                                <span>inArray()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Returns an index of the item or -1 if item is not present in the array.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#is" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">is...</span> -->
                                <span>is()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Checks if a object is of a specific type for example an array.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#isArray" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">isArray...</span> -->
                                <span>isArray()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Returns true/false if the object is an array or not.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#makeMap" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">makeMap...</span> -->
                                <span>makeMap()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Makes a name/object map out of an array with names.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#map" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">map...</span> -->
                                <span>map()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Creates a new array by the return value of each iteration function call. This enables you to convert one array list into another.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#resolve" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">resolve...</span> -->
                                <span>resolve()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Resolves a string and returns the object from a specific structure.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#toArray" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">toArray...</span> -->
                                <span>toArray()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Converts the specified object into a real JavaScript array.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#trim" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">trim...</span> -->
                                <span>trim()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Removes whitespace from the beginning and end of a string.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#walk" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">walk...</span> -->
                                <span>walk()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Executed the specified function for each item in a object tree.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Tools
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
    <section id="each" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">each()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">each</span>
                        <span class="text-green-300">(o: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">, cb:</span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">, s:</span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Performs an iteration of all items in a collection such as an object or array. This method will execute the callback function for each item in the collection, if the callback returns false the iteration will terminate. The callback has the following format: <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">cb(value, key_or_index)</code>
            </p>
        </div>

        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Iterate an array</span> <br>

                        <span class="text-blue-400">Editflo</span>
                        <span class="text-green-300">each </span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3</span>
                        <span class="text-blue-400">], (v, i) => { </span>
                        <br>
                        <span class="text-blue-400">console.</span>
                        <span class="text-green-300">debug </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">"Value: "</span>
                        <span class="text-blue-400">+ v + </span>
                        <span class="text-green-300">", Index: "</span>
                        <span class="text-blue-400">+ i);</span>
                        <br>
                        <span class="text-blue-400">});</span>
                        <br>
                        <span class="text-yellow-400">// Iterate an object</span> <br>

                        <span class="text-blue-400">Editflo</span>
                        <span class="text-green-300">each </span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">a: 1, b: 2, c: 3</span>
                        <span class="text-blue-400">}, (v, k) => { </span>
                        <br>
                        <span class="text-blue-400">console.</span>
                        <span class="text-green-300">debug </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">"Value: "</span>
                        <span class="text-blue-400">+ v + </span>
                        <span class="text-green-300">", Key: "</span>
                        <span class="text-blue-400">+ k);</span>
                        <br>
                        <span class="text-blue-400">});</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">o (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Collection to iterate.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">cb (Function)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Callback function to execute for each item.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">s (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional scope to execute the callback in.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Object</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object representation of that style. For example: <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">border:1px solid red;</code></span>
                        </li>
                    </ul>
                </div>
            </div> -->
    </section>

    <section id="explode" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">explode()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">explode</span>
                        <span class="text-green-300">(s </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, d </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Splits a string but removes the whitespace before and after each value.
            <p>
        </div>

        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Split a string into an array with a,b,c</span> <br>
                        <span class="text-blue-400">const arr = editflo.</span>
                        <span class="text-green-300">explode</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'a, b, c'</span>
                        <span class="text-blue-400">); </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">s (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- String to split.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">d (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Delimiter to split by.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- String representation of the style object. For example: <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">border:1px solid red;</code></span>
                        </li>
                    </ul>
                </div>
            </div> -->
    </section>

    <section id="grep" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">grep()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">grep</span>
                        <span class="text-green-300">(a </span>
                        <span class="text-blue-400">Array </span>
                        <span class="text-green-300">, f </span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">);</span>
                        <span class="text-blue-400">Array </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Filters out items from the input array by calling the specified function for each item. If the function returns false the item will be excluded if it returns true it will be included.
            <p>
        </div>

        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span> <br>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">a (Array)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array of items to loop though.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">f (Function)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Function to call for each item. Include/exclude depends on it’s return value.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Array</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- New array with values imported and filtered based in input.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="hasOwnProperty" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">hasOwnProperty()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">hasOwnProperty</span>
                        <span class="text-green-300">(obj: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">, prop:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">);</span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                JavaScript does not protect hasOwnProperty method, so it is possible to overwrite it. This is an object independent version. Checks if the input object <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">obj</code> has the property <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">prop</code>.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">obj (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object to check if the property exists.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">prop (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of a property on the object.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- true if the object has the specified property.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="inArray" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">inArray()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">inArray</span>
                        <span class="text-green-300">(item: any, arr: </span>
                        <span class="text-blue-400">Array </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Number </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns an index of the item or -1 if item is not present in the array.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">item (any)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Item to search for.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">arr (Array)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array to search in.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Number</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- index of the item or -1 if item was not found.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="is" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">is()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">is</span>
                        <span class="text-green-300">(obj: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">, type:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Checks if a object is of a specific type for example an array.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">obj (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object to check type of.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">type (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional type to check for.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- true/false if the object is of the specified type.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="isArray" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isArray()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">isArray</span>
                        <span class="text-green-300">(obj: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if the object is an array or not.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">obj (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object to check.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- true/false state if the object is an array or not.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="makeMap" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">makeMap()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">makeMap</span>
                        <span class="text-green-300">(items: </span>
                        <span class="text-blue-400">Array </span>
                        <span class="text-green-300">|</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, delim:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, map: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">): </span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Makes a name/object map out of an array with names.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">items (Array | String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Items to make map out of.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">delim (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional delimiter to split string by.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">map (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional map to add items to.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Object</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value map of items.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="map" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">map()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">map</span>
                        <span class="text-green-300">(array: </span>
                        <span class="text-blue-400">Array </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Array </span>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Creates a new array by the return value of each iteration function call. This enables you to convert one array list into another.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Filter out some items, this will return an array with 4 and 5</span>
                        <span class="text-blue-400">const items = Editflo.grep</span>
                        <span class="text-green-300">grep</span>
                        <span class="text-blue-400">([ </span>
                        <span class="text-green-300">1,2,3,4,5</span>
                        <span class="text-blue-400">], (v) => v > 3);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">array (Array)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array of items to iterate.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Function to call for each item. It’s return value will be the new value.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Array</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array with new values based on function return values.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="resolve" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">resolve()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">resolve</span>
                        <span class="text-green-300">(n: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, o:</span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Resolves a string and returns the object from a specific structure.
            <p>
        </div>

        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Resolve a path into an object reference</span> <br>
                        <span class="text-blue-400">const obj = Editflo.</span>
                        <span class="text-green-300">resolve</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'a.b.c.d'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">n (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Path to resolve for example a.b.c.d.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">o (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional object to search though, defaults to window.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Object</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Last object in path or null if it couldn’t be resolved.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="toArray" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">toArray()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">toArray</span>
                        <span class="text-green-300">(obj: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Array </span>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Converts the specified object into a real JavaScript array.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Resolve a path into an object reference</span> <br>
                        <span class="text-blue-400">const obj = Editflo.</span>
                        <span class="text-green-300">resolve</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'a.b.c.d'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">obj (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object to convert into array.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Array</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array object based in input.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="trim" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">trim()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">trim</span>
                        <span class="text-green-300">(s: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">String </span>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Removes whitespace from the beginning and end of a string.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Resolve a path into an object reference</span> <br>
                        <span class="text-blue-400">const obj = Editflo.</span>
                        <span class="text-green-300">resolve</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'a.b.c.d'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">s (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- String to remove whitespace from.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- New string with removed whitespace.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="walk" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">walk()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">walk</span>
                        <span class="text-green-300">(o: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">, f:</span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">, n:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, s:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Executed the specified function for each item in a object tree.
            <p>
        </div>

        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>
        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Resolve a path into an object reference</span> <br>
                        <span class="text-blue-400">const obj = Editflo.</span>
                        <span class="text-green-300">resolve</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'a.b.c.d'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">o (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Object tree to walk though.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">f (Function)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Function to call for each item.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">n (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional name of collection inside the objects to walk for example childNodes.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">s (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional scope to execute the function in.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- New string with removed whitespace.</span>
                        </li>
                    </ul>
                </div>
            </div> -->
    </section>
</div>