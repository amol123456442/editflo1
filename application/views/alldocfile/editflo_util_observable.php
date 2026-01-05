<div class="min-h-screen w-full overflow-x-hidden px-4 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo.util.Observable</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            This mixin adds event binding logic to classes. Adapts the EventDispatcher class.
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
                            <a href="#dispatch" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">dispatch...</span> -->
                                <span>dispatch()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Dispatches the specified event by name. Consult the event reference for more details on each event.Dispatches the specified event by name. Consult the event reference for more details on each event.
                            <p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Observable
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#fire" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">fire...</span> -->
                                <span>fire()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Fires the specified event by name. Consult the event reference for more details on each event. <br>
                                Deprecated in editflo 6.0 and has been marked for removal in editflo 9.0. Use <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">dispatch</code>instead.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Observable
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#hasEventListeners" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">hasEvent...</span> -->
                                <span>hasEventListeners()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Returns true/false if the object has a event of the specified name.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Observable
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#off" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">off...</span> -->
                                <span>off()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Unbinds an event listener to a specific event by name. Consult the event reference for more details on each event.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Observable
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#on" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">on...</span> -->
                                <span>on()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Binds an event listener to a specific event by name. Consult the event reference for more details on each event.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Observable
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#once" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">once...</span> -->
                                <span>once()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Bind the event callback and once it fires the callback is removed. Consult the event reference for more details on each event.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    Observable
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
    <section id="dispatch" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">dispatch()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">dispatch</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, args: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">?, bubble:</span>
                        <span class="text-blue-400">Boolean </span>
                        <span class="text-green-300">?):</span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Dispatches the specified event by name. Consult the event reference for more details on each event.
            </p>
        </div>

        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">dispatch </span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'event'</span>
                        <span class="text-blue-400">, {...});</span>
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
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the event to dispatch.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">args (Object?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Event arguments.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">bubble (Boolean?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- True/false if the event is to be bubbled.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Event args instance passed in.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="fire" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">fire()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">fire</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, args: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">?, bubble:</span>
                        <span class="text-blue-400">Boolean </span>
                        <span class="text-green-300">?): </span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Fires the specified event by name. Consult the event reference for more details on each event. <br>
                Deprecated in editflo 6.0 and has been marked for removal in Editflo 9.0. Use <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">dispatch</code> instead.
            <p>
        </div>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">fire </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'event' </span>
                        <span class="text-blue-400">, {...});</span>
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
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the event to fire.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">args (Object?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Event arguments.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">bubble (Boolean?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- True/false if the event is to be bubbled.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Event args instance passed in.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="hasEventListeners" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">hasEventListeners()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">hasEventListeners</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if the object has a event of the specified name.
            <p>
        </div>
        <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">fire </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'event' </span>
                        <span class="text-blue-400">, {...});</span>
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
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the event to check for.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- true/false if the event exists or not.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="off" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">off()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">off</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">?, callback:</span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">?):</span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Unbinds an event listener to a specific event by name. Consult the event reference for more details on each event.
            <p>
        </div>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-yellow-400">// Unbind specific callback</span><br>
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">off </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'event' </span>
                        <span class="text-blue-400">, handler);</span>
                        <br>
                        <span class="text-yellow-400">// Unbind all listeners by name</span><br>
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">off </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'event' </span>
                        <span class="text-blue-400">);</span>
                        <br>
                        <span class="text-yellow-400">// Unbind all events</span><br>
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">off </span>
                        <span class="text-blue-400">()</span>
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
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the event to unbind.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Callback to unbind.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Current class instance.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="on" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">on()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">on</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">prepend:</span>
                        <span class="text-blue-400">Boolean </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Binds an event listener to a specific event by name. Consult the event reference for more details on each event.
            <p>
        </div>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <!-- <span class="text-yellow-400">// Unbind specific callback</span><br> -->
                        <span class="text-blue-400">instance.</span>
                        <span class="text-green-300">on </span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'event' </span>
                        <span class="text-blue-400">, (e) => {</span>
                        <br>
                        <span class="text-yellow-400">// Callback logic</span><br>
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
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Event name or space separated list of events to bind.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Callback to be executed when the event occurs.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">prepend (Boolean)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional flag if the event should be prepended. Use this with care.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Current class instance.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

     <section id="once" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">once()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">once</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, callback:</span>
                        <span class="text-blue-400">Function </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Object </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Bind the event callback and once it fires the callback is removed. Consult the event reference for more details on each event.
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the event to bind.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">callback (Function?)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Callback to bind only once.</span>
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
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Current class instance.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
</div>