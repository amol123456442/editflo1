<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo..util.I18n</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            I18n class that handles translation of Editflo UI. Uses po style with csharp style parameters.
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
                            <a href="#add" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">add...</span> -->
                                <span>add()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Adds translations for a specific language code. Translation keys are set to be case insensitive.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    I18n
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#getCode" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">getCode...</span> -->
                                <span>getCode()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Returns the current language code.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    I18n
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#hasCode" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">hasCode...</span> -->
                                <span>hasCode()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Returns true/false if specified language pack exists.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    I18n
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#isRtl" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">isRtl...</span> -->
                                <span>isRtl()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Returns true/false if the currently active language pack is rtl or not.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    I18n
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#setCode" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">setCode...</span> -->
                                <span>setCode()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Sets the current language code.
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    I18n
                                </code>
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[30%] md:w-auto">
                            <a href="#translate" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">translate...</span> -->
                                <span>translate()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[50%] md:w-auto">
                            <p class="text-xs md:text-sm text-gray-900">
                                Translates the specified text. <br>
                                It has a few formats: I18n.translate("Text"); I18n.translate(["Text {0}/{1}", 0, 1]); I18n.translate({raw: "Raw string"});
                            </p>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    I18n
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
    <section id="add" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">add()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">add</span>
                        <span class="text-green-300">(code: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">, items:</span>
                        <span class="text-blue-400">Object </span>
                        <span class="text-green-300">):</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Adds translations for a specific language code. Translation keys are set to be case insensitive.
            </p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">code (String)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Language code like sv_SE.</span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">items (Object)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Name/value object where key is english and value is the translation.</span>
                        </li>
                    </ul>
                </div>
            </div>
    </section>

    <section id="getCode" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">getCode()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">getCode</span>
                        <span class="text-green-300">():</span>
                        <span class="text-blue-400">String </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns the current language code.
            <p>
        </div>

        <div class="w-full">

            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- Current language code. </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="hasCode" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">hasCode()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">hasCode</span>
                        <span class="text-green-300">(code: </span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">):</span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if specified language pack exists.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">code (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Code to check for.</span>
                    </li>
                </ul>
            </div>

            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the current language pack for the specified code exists.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="isRtl" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">isRtl()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">isRtl</span>
                        <span class="text-green-300">(); </span>
                        <span class="text-blue-400">Boolean </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Returns true/false if the currently active language pack is rtl or not.
            </p>
        </div>

        <div class="w-full">
            <!-- <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">code (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Code to check for.</span>
                    </li>
                </ul>
            </div> -->

            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the current language pack is rtl.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="setCode" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">setCode()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">setCode</span>
                        <span class="text-green-300">(newCode:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Sets the current language code.
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">newCode (String)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Current language code.</span>
                    </li>
                </ul>
            </div>

            <!-- <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">Boolean</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- True if the current language pack is rtl.</span>
                    </li>
                </ul>
            </div> -->
        </div>
    </section>

    <section id="translate" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">translate()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">translate</span>
                        <span class="text-green-300">(text:</span>
                        <span class="text-blue-400">String </span>
                        <span class="text-green-300">|</span>
                         <span class="text-blue-400">Object  </span>
                        <span class="text-green-300">|</span>
                         <span class="text-blue-400">Array  </span>
                        <span class="text-green-300">):</span>
                         <span class="text-blue-400">String  </span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Translates the specified text. <br>
                It has a few formats: I18n.translate("Text"); I18n.translate(["Text {0}/{1}", 0, 1]); I18n.translate({raw: "Raw string"});
            </p>
        </div>

        <div class="w-full">
            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">text (String | Object | Array)</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">- Text to translate.</span>
                    </li>
                </ul>
            </div>

            <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Return value</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-3 list-disc pl-5">
                    <li class="mb-2">
                        <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">String</code>
                        <span class="text-gray-700 text-lg sm:text-sm ml-2">-  String that got translated.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>