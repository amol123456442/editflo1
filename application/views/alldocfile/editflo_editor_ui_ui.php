<div class="flex flex-col md:flex-row px-4">

    <!-- Main Content -->
    <div class="max-w-full">
        <div class="mb-8">
            <h1 class="page text-3xl font-bold text-gray-800 mb-2">editflo.editor.ui.Ui</h1>
            <p class="text-gray-700 text-sm sm:text-base">This editor ui instance.
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
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class=" divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">registry</span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">Registry</span>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Editor UI registry instance.</span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Ui</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">styleSheetLoader</span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="text-gray-700 text-sm sm:text-base">StyleSheetLoader</span>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">Editor UI stylesheet loader instance. StyleSheetLoader for styles in the editor UI. For content styles, use editor.dom.styleSheetLoader.</span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base">
                                            <code class="bg-gray-100 px-2 py-1 rounded text-gray-700 text-sm sm:text-base font-mono">Ui</code>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"></td>
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
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Summary</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Defined by</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- Methods will be populated here -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <a href="#editflo.editor.ui.hide" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">editflo.editor.ui.hide()</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Hides the editor user interface for inline editors. This method affects all user interface elements, including: menu bar, toolbar, notifications, and dialogs.
                                                <br><br>
                                                If the <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">toolbar_persist</span> option is set to <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span> and this method is used, the user interface will remain hidden, regardless of focus.
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Ui</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <a href="#editflo.editor.ui.isEnabled" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">editflo.editor.ui.isEnabled()</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Determines if the editor user interface is<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">enabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span>) or <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">disabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">false</span>)
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Ui</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <a href="#editflo.editor.ui.setEnabled" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">editflo.editor.ui.setEnabled()</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Sets the state of editor user interface as <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">enabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span>) or <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">disabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">false</span>). This method affects all user interface elements, including: menu bar, toolbar, notifications, and dialogs. Can not be set to 'true' when in readonly mode.</span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Ui</code></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <a href="#editflo.editor.ui.show" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">editflo.editor.ui.show()</a>
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="text-gray-700 text-sm sm:text-base">
                                                Reveals the editor user interface for inline editors. This method affects all user interface elements, including: menu bar, toolbar, notifications, and dialogs.
                                                <br><br>
                                                If the <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">toolbar_persist</span> option is set to <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span> and this method is used, the user interface will remain visible, regardless of focus.
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"><code>Ui</code></td>
                                    </tr>

                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 whitespace-nowrap text-gray-700 text-sm sm:text-base"></td>
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

                <!-- editflo.editor.ui.hide Method -->
                <div class="sect2 mb-10" id="editflo.editor.ui.hide">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">editflo.editor.ui.hide()</h3>
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
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript">
                                        <span class="text-blue-400">editflo.editor.ui.</span><span class="text-yellow-400">hide</span>()</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Hides the editor user interface for inline editors. This method affects all user interface elements, including: menu bar, toolbar, notifications, and dialogs.
                            <br><br>
                            If the <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">toolbar_persist</span> option is set to <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span> and this method is used, the user interface will remain hidden, regardless of focus.
                        </p>
                    </div>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- editflo.editor.ui.isEnabled Method -->
                <div class="sect2 mb-10" id="editflo.editor.ui.isEnabled">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">editflo.editor.ui.isEnabled()</h3>
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
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript"><span class="text-blue-400">editflo.editor.ui.</span><span class="text-yellow-400">isEnabled</span>(): <span class="text-green-400">Boolean</span></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Determines if the editor user interface is<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">enabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span>) or <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">disabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">false</span>)
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>Boolean</code> – true/false if the editor user interface is enabled (<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span>) or disabled (<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">false</span>).</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- editflo.editor.ui.setEnabled Method -->
                <div class="sect2 mb-10" id="editflo.editor.ui.setEnabled">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">editflo.editor.ui.setEnabled()</h3>
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
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript"><span class="text-blue-400">editflo.editor.ui.</span><span class="text-yellow-400">setEnabled</span>(state: <span class="text-green-400">Boolean</span>)</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Sets the state of editor user interface as <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">enabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span>) or <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">disabled</span>(<span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">false</span>). This method affects all user interface elements, including: menu bar, toolbar, notifications, and dialogs. Can not be set to 'true' when in readonly mode.
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Return value</h4>
                    <ul class="list-disc pl-5 text-gray-700 text-sm sm:text-base">
                        <li><code>state (Boolean)</code> – The state in which to set the user interface.</li>
                    </ul>

                    <hr class="my-6 border-gray-300">
                </div>

                <!-- editflo.editor.ui.show Method -->
                <div class="sect2 mb-10" id="editflo.editor.ui.show">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">editflo.editor.ui.show()</h3>
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
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                                    <code class="javascript"><span class="text-blue-400">editflo.editor.ui.</span><span class="text-yellow-400">show</span>()</code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="paragraph mb-4">
                        <p class="text-gray-700 text-sm sm:text-base">
                            Reveals the editor user interface for inline editors. This method affects all user interface elements, including: menu bar, toolbar, notifications, and dialogs.
                            <br><br>
                            If the <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">toolbar_persist</span> option is set to <span class="bg-gray-100 px-2 py-1 rounded text-gray-800 font-mono">true</span> and this method is used, the user interface will remain visible, regardless of focus.
                        </p>
                    </div>

                    <hr class="my-6 border-gray-300">
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.copy-button').forEach(button => {
            button.addEventListener('click', function() {
                const code = this.closest('.group').querySelector('.bg-gray-900 code').textContent.trim();

                navigator.clipboard.writeText(code).then(() => {
                    // Toast message
                    const toast = this.querySelector('.copy-toast');
                    if (toast) {
                        toast.classList.remove('hidden');
                        setTimeout(() => toast.classList.add('hidden'), 1500);
                    }

                    // Button change
                    const originalHTML = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-check text-xs"></i> Copied!';
                    this.style.backgroundColor = '#10B981';

                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.style.backgroundColor = '';
                    }, 2000);
                });
            });
        });
    });
</script>