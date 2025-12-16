<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo.html.Serializer</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            This class is used to serialize down the DOM tree into a string using a Writer instance.
        </p>
        <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
            <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">Editflo.html</span>
                        <span class="text-green-300">Serializer</span>
                        <span class="text-blue-400">().</span>
                        <span class="text-green-300">serialize</span>
                        <span class="text-blue-400">(editflo.html.</span>
                        <span class="text-green-300">DomParser</span>
                        <span class="text-blue-400">().</span>
                        <span class="text-green-300">parse</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'&lt;p&gt;text&lt;/p&gt;'</span>
                        <span class="text-blue-400">));</span>
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
                            <a href="#serialize" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">serialize...</span> -->
                                <span class="">serialize()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-gray-700 text-lg sm:text-base ">
                                Serializes the specified node into a string.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Serializer
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
    <section id="serialize" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">serialize()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">serialize</span>
                        <span class="text-green-300">(node: Editflo.html.Node): </span>
                        <span class="text-blue-400">String </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Serializes the specified node into a string.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Examples</h3>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto mb-5">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">Editflo.html.</span>
                        <span class="text-green-300">Serializer</span>
                        <span class="text-blue-400">().</span>
                        <span class="text-green-300">serialize</span>
                        <span class="text-blue-400">(editflo.html.</span>
                        <span class="text-green-300">DomParser</span>
                        <span class="text-blue-400">().</span>
                        <span class="text-green-300">parse</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'&lt;p&gt;text&lt;/p&gt;'</span>
                        <span class="text-blue-400">));</span>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">node (Node)</code>
                            <span class="text-gray-700 ml-2 text-lg sm:text-base ">- Node instance to serialize.</span>
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
                            <span class="text-gray-700 ml-2 text-lg sm:text-base">- String with HTML based on the DOM tree.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
</div>