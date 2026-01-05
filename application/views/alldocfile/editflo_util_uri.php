<div class="min-h-screen w-full overflow-x-hidden px-4 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo.util.URI</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            This class handles parsing, modification and serialization of URI/URL strings.
        </p>

    </section>

    <!-- Methods Summary Section -->
    <section class="mb-8 sm:mb-5 md:mb-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-1 pb-2">Summary</h2>
        <p class="text-gray-700 text-lg sm:text-base font-medium mb-5">Constructors:</p>
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
                            <a href="#URI" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">URI...</span> -->
                                <span>URI()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Constructs a new URI instance.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                    URI
                                </code>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p class="text-gray-700 text-lg sm:text-base font-medium mb-5">Methods</p>
            <div class="rounded-lg border-gray-200 shadow-sm overflow-hidden">
                <table class="w-full divide-y divide-gray-200">
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
                                <a href="#getURI" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">getURI...</span> -->
                                    <span class="hidden md:inline">getURI()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Returns the full URI of the internal structure.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#isDomSafe" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">isDomSafe...</span> -->
                                    <span>isDomSafe()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Check to see if a URI is safe to use in the Document Object Model (DOM). This will return true if the URI can be used in the DOM without potentially triggering a security issue.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#isSameOrigin" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">isSameOrigin...</span>/ -->
                                    <span>isSameOrigin()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Determine whether the given URI has the same origin as this URI. Based on RFC-6454. Supports default ports for protocols listed in DEFAULT_PORTS. Unsupported protocols will fail safe: they won’t match, if the port specifications differ.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#setPath" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">setPath...</span> -->
                                    <span >setPath()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Sets the internal path part of the URI.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#toAbsPath" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">toAbsPath...</span> -->
                                    <span>toAbsPath()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Converts a relative path into a absolute path.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#toAbsolute" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">toAbsolute...</span> -->
                                    <span>toAbsolute()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Converts the specified URI into a absolute URI based on the current URI instance location.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#toRelPath" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">toRelPath...</span> -->
                                    <span>toRelPath()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Converts a absolute path into a relative path.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
                                    </code>
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                                <a href="#toRelative" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <!-- <span class="inline md:hidden">toRelative...</span> -->
                                    <span>toRelative()</span>
                                </a>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                                <p class="text-xs md:text-sm text-gray-900">
                                    Converts the specified URI into a relative URI based on the current URI instance location.
                                </p>
                            </td>
                            <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                                <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">
                                        URI
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
    <section id="URI" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Constructors</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">URI</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">public constructor function</span>
                        <span class="text-green-300">URI </span>
                        <span class="text-blue-400">(url: </span>
                        <span class="text-green-300">String </span>
                        <span class="text-blue-400">, settings: </span>
                        <span class="text-green-300">Object </span>
                        <span class="text-blue-400">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Constructs a new URI instance.
            </p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">url (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- URI string to parse.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">settings (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional settings object.</span>
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

    <section id="getURI" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getURI()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getURI</span>
                        <span class="text-green-300">(noProtoHost: </span>
                        <span class="text-blue-400">Boolean </span>
                        <span class="text-green-300">) </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns the full URI of the internal structure.
            <p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">noProtoHost (Boolean)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional no host and protocol part. Defaults to false.</span>
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

    <section id="isDomSafe" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isDomSafe()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">isDomSafe</span>
                        <span class="text-green-300">(uri: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, context: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">, options: </span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>
                            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Check to see if a URI is safe to use in the Document Object Model (DOM). This will return true if the URI can be used in the DOM without potentially triggering a security issue.
                <p>
</div>

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">uri (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- The URI to be validated.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">context (Object)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- An optional HTML tag name where the element is being used.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">options (Object)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- An optional set of options to use when determining if the URI is safe.</span>
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
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the URI is safe, otherwise false.</span>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>

    <section id="isSameOrigin" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isSameOrigin()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">isSameOrigin</span>
                        <span class="text-green-300">(uri: editflo.util.URI): </span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>
            
                <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Determine whether the given URI has the same origin as this URI. Based on RFC-6454. Supports default ports for protocols listed in DEFAULT_PORTS. Unsupported protocols will fail safe: they won’t match, if the port specifications differ.
                <p>
</div>

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">uri (URI)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Uri instance to compare.</span>
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
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the origins are the same.</span>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>

    <section id="setPath" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">setPath()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">setPath</span>
                        <span class="text-green-300">(path:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>
            
                <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Sets the internal path part of the URI.
                <p>
</div>

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">path (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Path string to set.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the origins are the same.</span>
                            </li>
                        </ul>
                    </div>
                </div> -->
    </section>

    <section id="toAbsPath" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">toAbsPath()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">toAbsPath</span>
                        <span class="text-green-300">(base:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, path: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>
            
                <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Converts a relative path into a absolute path.
                <p>
</div>

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">base (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Base point to convert the path from.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">path (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Relative path to convert into an absolute path.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the origins are the same.</span>
                            </li>
                        </ul>
                    </div>
                </div> -->
    </section>

    <section id="toAbsolute" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">toAbsolute()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">toAbsolute</span>
                        <span class="text-green-300">(uri:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, noHost: </span>
                        <span class="text-blue-400">Boolean </span>
                        <span class="text-green-300">);</span>
                        <span class="text-blue-400">String </span>
                    </div>
                </div>
            </div>
                            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Converts the specified URI into a absolute URI based on the current URI instance location.
                <p>
</div>

            <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-Yellow-400">// Converts an relative URL to an absolute URL url will be "http://www.site.com/dir/somedir/somefile.htm"</span> <br>
                        <span class="text-blue-400">const url = new Editflo.util.</span>
                        <span class="text-green-300">URI</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'http://www.site.com/dir/'</span>
                        <span class="text-blue-400">). </span>
                        <span class="text-green-300">toAbsolute</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'somedir/somefile.htm'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">uri (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- URI to convert into a relative path/URI.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">noHost (Boolean)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- No host and protocol prefix.</span>
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
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Absolute URI from the point specified in the current URI instance.</span>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>

    <section id="toRelPath" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">toRelPath()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">toRelPath</span>
                        <span class="text-green-300">(base:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, path: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>
                <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Converts a absolute path into a relative path.
                <p>
</div>

            <!-- <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                         <span class="text-Yellow-400">// Converts an relative URL to an absolute URL url will be http://www.site.com/dir/somedir/somefile.htm</span> <br>
                        <span class="text-blue-400">const url = new Editflo.util.</span>
                        <span class="text-green-300">URI</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'http://www.site.com/dir/'</span>
                        <span class="text-blue-400">). </span>
                        <span class="text-green-300">toAbsolute</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'somedir/somefile.htm'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div> -->

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">base (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Base point to convert the path from.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">path (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Absolute path to convert into a relative path.</span>
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
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Absolute URI from the point specified in the current URI instance.</span>
                            </li>
                        </ul>
                    </div>
                </div> -->
    </section>

    <section id="toRelative" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">toRelative()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">toRelative</span>
                        <span class="text-green-300">(uri:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">): </span>
                        <span class="text-blue-400">String </span>
                    </div>
                </div>
            </div>
                            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                    Converts the specified URI into a relative URI based on the current URI instance location.
                <p>
</div>

            <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-Yellow-400">// Converts an absolute URL to an relative URL url will be somedir/somefile.htm</span> <br>
                        <span class="text-blue-400">const url = new Editflo.util.</span>
                        <span class="text-green-300">URI</span>
                        <span class="text-blue-400">( </span>
                        <span class="text-green-300">'http://www.site.com/dir/'</span>
                        <span class="text-blue-400">). </span>
                        <span class="text-green-300">toRelative</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">''http://www.site.com/dir/somedir/somefile.htm'</span>
                        <span class="text-blue-400">);</span>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="w-full">
                    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                        <ul class="space-y-3 list-disc pl-5">
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">uri (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- URI to convert into a relative path/URI.</span>
                            </li>
                            <li class="mb-2">
                                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">path (String)</code>
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Absolute path to convert into a relative path.</span>
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
                                <span class="text-gray-700 text-lg sm:text-sm ml-2">- Relative URI from the point specified in the current URI instance.</span>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>
</div>