<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.html.Node</h1>
        <div class="mb-6 sm:mb-8 md:mb-10 w-full">
            <p class="text-gray-700 text-lg sm:text-base mb-5 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
                This class is a minimalistic implementation of a DOM like node used by the DomParser class.
            </p>

            <div class="mb-4 sm:mb-5 px-3 sm:px-0 w-full">
                <p class="text-gray-700 text-lg sm:text-base font-medium mb-2">Example:</p>
                <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                    <div class="p-3 sm:p-4 overflow-x-auto">
                        <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                            <span class="text-blue-400">const node = new tinymce.html.</span>
                            <span class="text-green-300">Node</span>
                            <span class="text-blue-400">(</span>
                            <span class="text-green-300">'strong'</span>
                            <span class="text-blue-400">,</span>
                            <span class="text-green-300">1</span>
                            <span class="text-blue-400">);</span>
                            <br>
                            <span class="text-blue-400">someRoot.</span>
                            <span class="text-green-300">append</span>
                            <span class="text-blue-400">(node);</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methods Summary Section -->
    <section class="mb-8 sm:mb-5 md:mb-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-1 pb-2">Summary</h2>
        <p class="text-gray-700 text-2xl sm:text-base font-medium mb-5">Constructors</p>
        <div class="rounded-lg border-gray-200 shadow-sm overflow-hidden mb-5">
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
                            <a href="#Node" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">Node...</span> -->
                                <span>Node()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Constructs a new Node instance.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="text-gray-700 text-sm sm:text-base font-medium mb-5">Methods</p>
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
                            <a href="#append" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">append...</span> -->
                                <span>append()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Appends a new node as a child of the current node.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#attr" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">attr...</span> -->
                                <span>attr()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Gets/sets or removes an attribute by name.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#children" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">children...</span> -->
                                <span>children()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Get all children of this node.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#clone" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">clone...</span> -->
                                <span>clone()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Does a shallow clones the node into a new node. It will also exclude id attributes since there should only be one id per document.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#create" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">create...</span> -->
                                <span>create()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Creates a node of a specific type.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#empty" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">empty...</span> -->
                                <span>empty()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Removes all children of the current node.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#getAll" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">getAll...</span> -->
                                <span>getAll()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Get all descendants by name.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#insert" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">insert...</span> -->
                                <span>insert()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Inserts a node at a specific position as a child of this node.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#isEmpty" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">isEmpty...</span> -->
                                <span>isEmpty()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Returns true/false if the node is to be considered empty or not.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#remove" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">remove...</span> -->
                                <span>remove()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Removes the node from it’s parent.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#replace" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">replace...</span> -->
                                <span>replace()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Replaces the current node with the specified one.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#unwrap" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">unwrap...</span> -->
                                <span>unwrap()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Unwraps the node in other words it removes the node but keeps the children.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
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
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Walks to the next or previous node and returns that node or null if it wasn’t found.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#wrap" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">wrap...</span> -->
                                <span>wrap()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900  md:line-clamp-none">
                                Wraps the node in in another node.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono text-xs md:text-sm font-medium block">
                                <code class="bg-gray-100 px-2 py-1 rounded border font-mono text-xs md:text-sm truncate md:truncate-none block">
                                    Node
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
    <section id="Node" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2  border-gray-200 break-words">Constructors</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Node</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">public constructor function</span>
                        <span class="text-green-300">Node </span>
                        <span class="text-blue-400">(name: </span>
                        <span class="text-green-300">String</span>
                        <span class="text-blue-400">, type:</span>
                        <span class="text-green-300">Number</span>
                        <span class="text-blue-400">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Constructs a new Node instance.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the node type.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">type (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Numeric type representing the node.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="append" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">append()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">append</span>
                        <span class="text-green-300">(node: tinymce.html.Node): tinymce.html.Node</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Appends a new node as a child of the current node.
            </p>
        </div>

        <div class="w-full mb-5">
            <h3 class="text-ld sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Examples</h3>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-xs sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">node.</span>
                        <span class="text-green-300">append</span>
                        <span class="text-blue-400">(someNode);</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">node (Node)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Node to append as a child of the current one.</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">node</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- The node that got appended.</span>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <section id="attr" class="mb-5 sm:mb-10 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">attr()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">attr</span>
                        <span class="text-green-300">(name:</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">, value: </span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">String</span>
                        <span class="text-green-300">| tinymce.html.Node</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Gets/sets or removes an attribute by name.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Examples</h3>
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-xs sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">someNode.</span>
                        <span class="text-green-300">attr</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'name', 'value'</span>
                        <span class="text-blue-400">);</span>
                        <span class="text-yellow-400">// Sets an attribute</span>
                        <br>
                        <span class="text-blue-400">console.</span>
                        <span class="text-green-300">log</span>
                        <span class="text-blue-400">( someNode.</span>
                        <span class="text-green-300">attr(</span>
                        <span class="text-blue-400">'name'</span>
                        <span class="text-green-300">));</span>
                        <span class="text-yellow-400">// Gets an attribute</span>
                        <br>
                        <span class="text-blue-400">someNode.</span>
                        <span class="text-green-300">attr</span>
                        <span class="text-blue-400">(</span>
                        <span class="text-green-300">'name'</span>
                        <span class="text-blue-400">, null);</span>
                        <span class="text-yellow-400"> // Removes an attribute</span>
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
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Attribute name to set or get.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">value (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional value to set.</span>
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
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- String or undefined on a get operation or the current node on a set operation.</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- String or undefined on a get operation or the current node on a set operation.</span>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <!-- addNodeFilter Section -->
    <section id="children" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">children()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">children</span>
                        <span class="text-green-300">(): </span>
                        <span class="text-blue-400">Array </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
                Get all children of this node.
            <p>
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Array</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array containing child nodes.</span>
                        </li>
                    </ul>
                </div>
            </div>

    </section>

    <!-- parse Section -->
    <section id="clone" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b ">
        <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">clone()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">clone</span>
                        <span class="text-green-300">(): tinymce.html.Node </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Does a shallow clones the node into a new node. It will also exclude id attributes since there should only be one id per document.
            </p>
        </div>


        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">const clonedNode = node.</span>
                        <span class="text-green-300">clone</span>
                        <span class="text-blue-400">();</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- New copy of the original node.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="create" class="mb-5 sm:mb-10 md:mb-5 px-3 sm:px-0 w-full">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-b border-gray-200 break-words">create()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">create</span>
                        <span class="text-green-300">(name: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, attrs:</span>
                        <span class="text-blue-400">Object</span>
                        <span class="text-green-300">):</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Creates a node of a specific type.
            </p>
        </div>


        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the node type to create for example "b" or "#text".</span>
                    </li>
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">attr (Object)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value collection of attributes that will be applied to elements.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- removeAttributeFilter Section -->
    <section id="empty" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">empty()</h2>

        <div class="mb-4 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-xl sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">empty</span>
                        <span class="text-green-300">(): tinymce.html.Node</span>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
            Removes all children of the current node.
        </p>
</div>


<div class="w-full">
    <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
        <ul class="space-y-3 list-disc pl-5">
            <li class="mb-2">
                <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                <span class="text-gray-700 text-lg sm:text-sm ml-2">- The current node that got cleared.</span>
            </li>
        </ul>
    </div>
</div>
</section>

<section id="getAll" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getAll()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">getAll</span>
                    <span class="text-green-300">(name:</span>
                    <span class="text-blue-400">String</span>
                    <span class="text-blue-400">):</span>
                    <span class="text-blue-400">Array</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Get all descendants by name.
    </p>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">name (String)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name of the descendant nodes to collect.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Array</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Array with descendant nodes matching the specified name.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="insert" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">insert()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">insert</span>
                    <span class="text-green-300">(node: tinymce.html.Node, refNode: tinymce.html.Node, before:</span>
                    <span class="text-blue-400">Boolean</span>
                    <span class="text-blue-400">): tinymce.html.Node</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Inserts a node at a specific position as a child of this node.
    </p>
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">parentNode.</span>
                    <span class="text-green-300">insert</span>
                    <span class="text-blue-400">(newChildNode, oldChildNode);</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">node (Node)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Node to insert as a child of this node.</span>
                </li>
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">refNode (Node)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Reference node to set node before/after.</span>
                </li>
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">before (Boolean)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional state to insert the node before the reference node.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- The node that got inserted.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="isEmpty" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isEmpty()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">isEmpty</span>
                    <span class="text-green-300">(elements:</span>
                    <span class="text-blue-400">Object</span>
                    <span class="text-blue-400">, whitespace:</span>
                    <span class="text-blue-400">Object</span>
                    <span class="text-blue-400">, predicate:</span>
                    <span class="text-blue-400">Function</span>
                    <span class="text-blue-400">):</span>
                    <span class="text-blue-400">Boolean</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Returns true/false if the node is to be considered empty or not.
    </p>
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">node.</span>
                    <span class="text-green-300">isEmpty</span>
                    <span class="text-blue-400">({ img:</span>
                    <span class="text-green-300">true </span>
                    <span class="text-blue-400">});</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">elements (Object)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value object with elements that are automatically treated as non empty elements.</span>
                </li>
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">whitespace (Object)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value object with elements that are automatically treated whitespace preservables.</span>
                </li>
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">predicate (Function)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional predicate that gets called after the other rules determine that the node is empty. Should return true if the node is a content node.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- true/false if the node is empty or not.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="remove" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">remove()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm font-mono inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">remove</span>
                    <span class="text-green-300">(): tinymce.html.Node</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Removes the node from it’s parent.
    </p>
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">node.</span>
                    <span class="text-green-300">remove</span>
                    <span class="text-blue-400">();</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Current node that got removed.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="replace" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">replace()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">replace</span>
                    <span class="text-green-300">(node: tinymce.html.Node): tinymce.html.Node</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-sm sm:text-base mb-5 mt-5 w-full">
        Replaces the current node with the specified one.
    </p>
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">someNode.</span>
                    <span class="text-green-300">replace</span>
                    <span class="text-blue-400">(someNewNode);</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">node (Node)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Node to replace the current node with.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- The old node that got replaced.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="unwrap" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">unwrap()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">unwrap</span>
                    <span class="text-green-300">()</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Unwraps the node in other words it removes the node but keeps the children.
    </p>
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">node.</span>
                    <span class="text-green-300">unwrap</span>
                    <span class="text-blue-400">();</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="walk" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">walk()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">walk</span>
                    <span class="text-green-300">(prev:</span>
                    <span class="text-blue-400">Boolean</span>
                    <span class="text-green-300">): tinymce.html.Node</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Unwraps the node in other words it removes the node but keeps the children.
    </p>
    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Parameters</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">prev (Boolean)</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Optional previous node state defaults to false.</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full">
        <h3 class="text-lg sm:text-lg font-bold text-gray-700 mb-2 sm:mb-3">Return value</h3>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Node</code>
                    <span class="text-gray-700 text-lg sm:text-sm ml-2">- Node that is next to or previous of the current node.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="wrap" class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full border-b">
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">wrap()</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">wrap</span>
                    <span class="text-green-300">()</span>
                </div>
            </div>
        </div>
    </div>

    <p class="text-gray-700 text-lg sm:text-base mb-5 mt-5 w-full">
        Wraps the node in in another node.
    </p>
    <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-700 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Examples</h2>

    <div class="mb-4 sm:mb-5 w-full">
        <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
            <div class="p-3 sm:p-4 overflow-x-auto">
                <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                    <span class="text-blue-400">node.</span>
                    <span class="text-green-300">wrap</span>
                    <span class="text-blue-400">(wrapperNode);</span>
                </div>
            </div>
        </div>
    </div>

</section>