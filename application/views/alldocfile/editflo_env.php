<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <article class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.Env</h1>
            <p class="text-gray-700 text-sm sm:text-base">This class contains various environment constants like browser versions etc. Normally you don’t want to sniff specific browser versions but sometimes you have to when it’s impossible to feature detect. So use this with care.
            </p>
        </div>

        <div class="sect1">
            <h2 id="summary" class="text-2xl font-bold text-gray-800 mb-1 pb-2">
                <a class="anchor" href="#summary">Summary</a>
            </h2>
            <div class="sectionbody">

                <div class="sect2">
                    <h3 id="properties" class="text-xl font-semibold text-gray-800 mb-3">
                        <a class="anchor" href="#properties">Properties</a>
                    </h3>

                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class=" divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">browser.current</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the current browser name.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Env</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">browser.version</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Object</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the current browser major and minor version.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Env</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">documentMode</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Number</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the IE document mode. For non IE browsers, this will fake IE 10 document mode.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Env</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">os.current</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">String</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the current operating system name.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Env</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">os.version</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Object</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns the current operating system major and minor version.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Env</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">transparentSrc</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Boolean</span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Transparent image data url.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">Env</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="sect2">
                    <h3 id="methods-summary" class="text-xl font-semibold text-gray-800 mb-3">
                        <a class="anchor" href="#methods-summary">Methods</a>
                    </h3>

                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Methods will be populated here -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#browser.isChromium" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">browser.isChromium()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Chromium based, such as Google Chrome or newer versions of Microsoft Edge.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#browser.isEdge" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">browser.isEdge()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Microsoft Edge Legacy. Does not return true for the newer Chromium-based Microsoft Edge.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#browser.isFirefox" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">browser.isFirefox()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Firefox.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#browser.isIE" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">browser.isIE()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Microsoft Internet Explorer.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#browser.isOpera" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">browser.isOpera()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Opera.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#browser.isSafari" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">browser.isSafari()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Safari.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isDesktop" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isDesktop()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a desktop device.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isPhone" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isPhone()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a phone.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isTablet" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isTablet()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a tablet.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isTouch" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isTouch()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a touch device.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isTouch" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isTouch()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a WebView device.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isiPad" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isiPad()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is an iPad.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#deviceType.isiPhone" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">deviceType.isiPhone()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is an iPhone.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isAndroid" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isAndroid()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Android.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isChromeOS" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isChromeOS()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is ChromeOS.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isFreeBSD" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isFreeBSD()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is FreeBSD.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 os.isLinuxdestroy" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isLinux()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Linux.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isMacOS" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isMacOS()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is macOS.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isSolaris" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isSolaris()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Solaris.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isWindows" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isWindows()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Microsoft Windows.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#os.isiOS" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">os.isiOS()</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is iOS.</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Env</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 whitespace-nowrap text-sm text-gray-900"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Methods Section -->
        <div class="sect1 mt-12">
            <h2 id="methods" class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b">
                <a class="anchor" href="#methods">Methods</a>
            </h2>
            <div class="sectionbody">

                <!-- browser.isChromium Method -->
                <div class="sect2 mb-10" id="browser.isChromium">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">browser.isChromium()</h3>
                    <div class="listingblock mb-4">
                        <div class="content">
                            <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">

                                <!-- Top bar (text + copy button ONLY visible on hover) -->
                                <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                    <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                    <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                        <i class="fas fa-copy text-xs"></i> Copy
                                        <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                            Copied!
                                        </div>
                                    </button>
                                </div>

                                <!-- Code Content (CENTERED vertically) -->
                                <div class="overflow-x-auto text-white-500">
                                    <code class="javascript">
                                        <pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">browser</span>.<span class="text-purple-400">isChromium</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Chromium based, such as Google Chrome or newer versions of Microsoft Edge.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s browser is Chromium based.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- browser.isEdge Method -->
                    <div class="sect2 mb-10" id="browser.isEdge">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">browser.isEdge()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">browser</span>.<span class="text-purple-400">isEdge</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Microsoft Edge Legacy. Does not return true for the newer Chromium-based Microsoft Edge.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s browser is Microsoft Edge Legacy.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- browser.isFirefox Method -->
                    <div class="sect2 mb-10" id="browser.isFirefox">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">browser.isFirefox()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">browser</span>.<span class="text-purple-400">isFirefox</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Firefox.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> –  Returns true if the user’s browser is Firefox.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- browser.isIE Method -->
                    <div class="sect2 mb-10" id="browser.isIE">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">browser.isIE()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">browser</span>.<span class="text-purple-400">isIE</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Microsoft Internet Explorer.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s browser is Microsoft Internet Explorer.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                        
                    </div>

                    <!-- browser.isOpera Method -->
                    <div class="sect2 mb-10" id="browser.isOpera">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">browser.isOpera()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">browser</span>.<span class="text-purple-400">isOpera</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Opera.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s browser is Opera.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- browser.isSafari Method -->
                    <div class="sect2 mb-10" id="browser.isSafari">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">browser.isSafari()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">browser</span>.<span class="text-purple-400">isSafari</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s browser is Safari.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s browser is Safari.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isDesktop Method -->
                    <div class="sect2 mb-10" id="deviceType.isDesktop">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isDesktop()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isDesktop</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a desktop device.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is a desktop device.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isPhone Method -->
                    <div class="sect2 mb-10" id="deviceType.isPhone">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isPhone()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isPhone</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a phone.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is a phone.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isTablet Method -->
                    <div class="sect2 mb-10" id="deviceType.isTablet">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isTablet()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isTablet</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a tablet.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is a tablet.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isTouch Method -->
                    <div class="sect2 mb-10" id="deviceType.isTouch">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isTouch()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isTouch</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a touch device.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is a touch device.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isWebView Method -->
                    <div class="sect2 mb-10" id="deviceType.isWebView">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isWebView()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isWebView</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is a WebView device.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is a WebView device.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isiPad Method -->
                    <div class="sect2 mb-10" id="deviceType.isiPad">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isiPad()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isiPad</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is an iPad.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is an iPad.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- deviceType.isiPhone Method -->
                    <div class="sect2 mb-10" id="deviceType.isiPhone">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">deviceType.isiPhone()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">deviceType</span>.<span class="text-purple-400">isiPhone</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s device is an iPhone.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s device is an iPhone.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isAndroid Method -->
                    <div class="sect2 mb-10" id="os.isAndroid">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isAndroid()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isAndroid</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Android.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is Android.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isChromeOS Method -->
                    <div class="sect2 mb-10" id="os.isChromeOS">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isChromeOS()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isChromeOS</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is ChromeOS.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is ChromeOS.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isFreeBSD Method -->
                    <div class="sect2 mb-10" id="os.isFreeBSD">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isFreeBSD()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isFreeBSD</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is FreeBSD.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is FreeBSD.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isLinux Method -->
                    <div class="sect2 mb-10" id="os.isLinux">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isLinux()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isLinux</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Linux.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is Linux.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isMacOS Method -->
                    <div class="sect2 mb-10" id="os.isMacOS">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isMacOS()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isMacOS</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is macOS.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is macOS.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isSolaris Method -->
                    <div class="sect2 mb-10" id="os.isSolaris">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isSolaris()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isSolaris</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Solaris.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is Solaris.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isWindows Method -->
                    <div class="sect2 mb-10" id="os.isWindows">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isWindows()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isWindows</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is Microsoft Windows.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is Microsoft Windows.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>

                    <!-- os.isiOS Method -->
                    <div class="sect2 mb-10" id="os.isiOS">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">os.isiOS()</h3>
                        <div class="listingblock mb-4">
                            <div class="content">
                                <div class="group bg-gray-900 rounded-lg overflow-hidden border border-gray-300 relative">
    
                                    <!-- Top bar (text + copy button ONLY visible on hover) -->
                                    <div class="absolute top-2 right-2 flex items-center gap-3 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-200">

                                        <div class="text-xs font-mono text-gray-600">JAVASCRIPT</div>

                                        <button class="copy-button bg-gray-700 hover:bg-gray-600 text-white px-2 py-1 rounded text-xs flex items-center gap-1">
                                            <i class="fas fa-copy text-xs"></i> Copy
                                            <div class="copy-toast absolute -top-8 right-0 bg-green-600 text-white px-2 py-1 rounded text-xs hidden z-50">
                                                Copied!
                                            </div>
                                        </button>
                                    </div>

                                    <!-- Code Content (CENTERED vertically) -->
                                    <div class="overflow-x-auto text-white-500">
                                         <code class="javascript"><pre class="px-6 py-4 text-sm leading-tight bg-gray-900 text-gray-100 rounded-lg flex items-center"><span class="text-blue-400">os</span>.<span class="text-purple-400">isiOS</span>(): <span class="text-yellow-400">Boolean</span></code>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="paragraph mb-4">
                            <p class="text-gray-700 text-sm sm:text-base">Returns true if the user’s operating system is iOS.</p>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                        <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                            <li><code>Boolean</code> – Returns true if the user’s operating system is iOS.</li>
                        </ul>

                        <hr class="my-6 border-gray-300">
                    </div>
                </div>
            </div>
    </article>
</div>

<script>
    // Simple script to handle copy code buttons
        document.addEventListener('DOMContentLoaded', function() {
        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            // Store original state
            const originalContent = button.innerHTML;
            const originalText = 'Copy';
            let isCopied = false;

            button.addEventListener('click', function() {
                if (isCopied) return; // Prevent multiple clicks
                
                // Find the code content
                const preElement = this.closest('.group').querySelector('pre');
                const code = preElement.textContent.trim();

                // Copy to clipboard
                navigator.clipboard.writeText(code).then(() => {
                    isCopied = true;
                    
                    // Change button to "Copied" state
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';
                    this.style.color = 'white';

                    // Automatically reset to "Copy" after 2 seconds
                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.style.backgroundColor = '';
                        this.style.color = '';
                        isCopied = false;
                    }, 2000);

                }).catch(err => {
                    console.error('Copy failed:', err);
                    
                    // Fallback method
                    const textarea = document.createElement('textarea');
                    textarea.value = code;
                    document.body.appendChild(textarea);
                    textarea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textarea);
                    
                    // Show success even with fallback
                    isCopied = true;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';
                    this.style.color = 'white';

                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.style.backgroundColor = '';
                        this.style.color = '';
                        isCopied = false;
                    }, 2000);
                });
            });
        });
    });
</script>

 