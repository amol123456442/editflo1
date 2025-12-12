<div class="mx-auto min-h-screen px-4 md:px-0">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Editflo 0.1 Release Notes</h1>
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <p class="text-blue-700 text-sm md:text-base">
                        These are the Editflo Cloud and Editflo Enterprise release notes. For information on the latest community version of Editflo, see the Editflo Changelog.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Section with TOC -->
    <div class="bg-white rounded-lg border border-gray-200 p-4 md:p-6 mb-8">
        <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-4 md:mb-6">Overview</h2>
        <p class="text-gray-700 mb-4 text-sm md:text-base">
            Editflo 0.1 was released for Editflo Enterprise and Editflo Cloud on Wednesday, July 23rd, 2025. These release notes provide an overview of the changes for Editflo 0.1, including:
        </p>

        <!-- TOC Navigation Box -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 md:p-5 mb-6">
            <h3 class="text-base md:text-lg font-semibold text-gray-800 mb-3">Quick Navigation</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="#new-premium-plugins" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-star text-blue-500 mr-3 text-sm"></i>
                    <span class="font-medium text-sm md:text-base">New Premium Plugins</span>
                </a>
                <a href="#premium-plugin-changes" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-sync-alt text-blue-500 mr-3 text-sm"></i>
                    <span class="font-medium text-sm md:text-base">Premium Plugin Changes</span>
                </a>
                <a href="#enhanced-skins-icon-packs" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-palette text-blue-500 mr-3 text-sm"></i>
                    <span class="font-medium text-sm md:text-base">Enhanced Skins & Icon Packs</span>
                </a>
                <a href="#improvements" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-wrench text-blue-500 mr-3 text-sm"></i>
                    <span class="font-medium text-sm md:text-base">Improvements</span>
                </a>
                <a href="#additions" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-plus-circle text-blue-500 mr-3 text-sm"></i>
                    <span class="font-medium text-sm md:text-base">Additions</span>
                </a>
                <a href="#deprecated" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-exclamation-triangle text-blue-500 mr-3 text-sm"></i>
                    <span class="font-medium text-sm md:text-base">Deprecated</span>
                </a>
            </div>
        </div>

        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <p class="text-yellow-700 text-sm md:text-base">
                        <strong class="block mb-1">Important:</strong> This release includes breaking changes to the license key system. All commercial self-hosted deployments must update their license keys to use the new E1LK: prefix format. For details on this and other breaking changes when considering upgrading, see Migrating from Editflo 0.0 to Editflo 0.1.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- New Premium Plugins -->
    <div id="new-premium-plugins" class="bg-white rounded-lg border border-gray-200 p-4 md:p-6 mb-8 scroll-mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-4">New Premium Plugins</h2>
        <p class="text-gray-700 mb-4 text-sm md:text-base">
            The following new Premium plugin was released alongside Editflo 0.1.
        </p>

        <div class="bg-green-50 border border-green-200 rounded-lg p-4 md:p-5">
            <h3 class="text-base md:text-lg font-medium text-green-800 mb-2">Suggested Edits</h3>
            <p class="text-gray-700 mb-3 text-sm md:text-base">
                The Editflo 0.1 release includes an accompanying release of the Suggested Edits premium plugin.
            </p>
            <p class="text-gray-700 text-sm md:text-base">
                The Suggested Edits plugin allows multiple users to collaborate on a document. The review window shows which user suggested which edits, whether they added, removed, modified, or replaced any content, and allows users to provide feedback on those suggestions or give a final review by accepting or rejecting them.
            </p>
            <p class="text-gray-700 mt-3 text-sm md:text-base">
                For information on the Suggested Edits plugin, see: Suggested Edits.
            </p>
        </div>
    </div>

    <!-- Premium Plugin Changes -->
    <div id="premium-plugin-changes" class="bg-white rounded-lg border border-gray-200 p-4 md:p-6 mb-8 scroll-mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-4">Accompanying Premium Plugin Changes</h2>
        <p class="text-gray-700 mb-4 text-sm md:text-base">
            The following premium plugin updates were released alongside Editflo 0.1.
        </p>

        <div class="space-y-6 md:space-y-8">
            <!-- Mentions -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-5">
                <h3 class="text-base md:text-lg font-medium text-gray-800 mb-3">Mentions</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The Editflo 0.1 release includes an accompanying release of the Mentions premium plugin.
                </p>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-3 md:p-4 mb-3">
                    <h4 class="text-sm font-medium text-blue-800 mb-1">Mentions username not updating with skin changes in dark mode</h4>
                    <p class="text-blue-700 md:text-sm">
                        Previously, the username displayed on the mentions card did not update correctly when switching between skins, particularly in dark mode. This issue caused the username to become invisible against the dark background, making it difficult for users to read.
                    </p>
                    <p class="text-blue-700 md:text-sm mt-2">
                        To resolve this, the styling for the username has been updated. The class now uses the @text-color variable for its default styling, ensuring that it inherits the correct color from its parent element when the item is active. This change guarantees that the username remains visible and readable in both light and dark themes.
                    </p>
                </div>

                <div class="bg-gray-50 border-l-4 border-gray-500 p-3 md:p-4">
                    <h4 class="text-sm font-medium text-gray-800 mb-1">Removed unused Mentions plugin stylesheet</h4>
                    <p class="text-gray-700 md:text-sm">
                        In 0.1, the unused mentions.css file was removed from the Mentions plugin. In earlier versions (such as 0.0), this empty CSS file was still being loaded, despite its contents having been moved to the Oxide theme in a prior update. This change ensures cleaner resource loading and avoids unnecessary network requests.
                    </p>
                    <p class="text-gray-700 md:text-sm mt-2">
                        The removal does not impact plugin functionality and applies to all editor modes.
                    </p>
                </div>
                <p class="text-gray-700 md:text-sm mt-3">
                    For information on the Mentions plugin, see: Mentions.
                </p>
            </div>

            <!-- Spell Checker -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-5">
                <h3 class="text-base md:text-lg font-medium text-gray-800 mb-3">Spell Checker</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The Editflo 0.1 release includes an accompanying release of the Spell Checker premium plugin.
                </p>

                <div class="space-y-4">
                    <div class="">
                        <h4 class="text-gray-900 text-sm sm:text-base text-sm sm:text-base mb-1">Content marked with lang attributes was sometimes not spellchecked correctly</h4>
                        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base ">
                            Previously, the spellchecker did not consistently handle content marked with different lang attributes, particularly when the language codes used different formats. This inconsistency led to missed spellchecking for words in spans that used alternate casing or separator conventions (e.g., en-GB vs en_GB).
                        </p>
                        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-2">
                            In 0.1, support for mixed-case and mixed-format language codes has been restored. The spellchecker now correctly identifies and handles variations in language attribute formatting, ensuring that content is reliably checked regardless of code style. This improvement enables accurate spellchecking for documents that include multiple languages and diverse regional conventions.
                        </p>
                    </div>

                    <div class="">
                        <h4 class="text-sm font-medium text-gray-900 mb-1">Input label for misspelled word was not announced by screen readers</h4>
                        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base">
                            In previous versions, the Spell Checker dialog's misspelled word input field lacked proper accessibility labeling, preventing screen readers from announcing its purpose. Editflo 0.1 resolves this accessibility limitation by adding the appropriate label association between the "Misspelled Word" text and its input field.
                        </p>
                    </div>

                    <div class="bg-green-50 border-l-4 border-green-500 p-3 md:p-4">
                        <h4 class="text-sm font-medium text-green-800 mb-1">Language code standardization to RFC5646/BCP47 format</h4>
                        <p class="text-green-700 md:text-sm">
                            The Editflo 0.1 release introduces standardized support for language codes using the RFC5646 (also known as BCP47) format. This update applies to all language-related configurations, including:
                        </p>
                        <ul class="list-disc list-inside text-green-700 md:text-sm mt-2 ml-2 md:ml-4">
                            <li>UI language packs (premium and community)</li>
                            <li>Spellchecker language codes</li>
                            <li>HTML lang attributes</li>
                            <li>Content language selection</li>
                        </ul>
                        <p class="text-green-700 md:text-sm mt-2">
                            <strong>Changes:</strong> Language codes now use hyphens (-) instead of underscores (_). For example:
                        </p>
                        <ul class="list-disc list-inside text-green-700 md:text-sm mt-2 ml-2 md:ml-4">
                            <li>'en-US' instead of 'en_US'</li>
                            <li>'zh-TW' instead of 'zh_TW'</li>
                            <li>'pt-BR' instead of 'pt_BR'</li>
                        </ul>
                        <p class="text-green-700 md:text-sm mt-2">
                            Base language codes without regions (e.g., 'en', 'es', 'fr') remain unchanged.
                        </p>
                    </div>

                    <div class="bg-gray-50 p-3 md:p-4 rounded-lg">
                        <h5 class="text-sm font-medium text-gray-800 mb-2">Migration</h5>
                        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2">Update language-related configuration in editflo.init:</p>
                        <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto mb-3">
                            <span class="text-blue-400">language</span><span class="text-gray-300">: </span><span class="text-green-400">'en-US'</span><span class="text-gray-300">,</span><br>
                            <span class="text-blue-400">spellchecker_language</span><span class="text-gray-300">: </span><span class="text-green-400">'en-US'</span>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base">
                            This standardization aligns Editflo with modern web standards and improves consistency across its multilingual features.
                        </p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                    For information on the Spell Checker premium plugin, see: Spell Checker plugin.
                </p>
            </div>

            <!-- Accessibility Checker -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-5">
                <h3 class="text-base md:text-lg font-medium text-gray-800 mb-3">Accessibility Checker</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The Editflo 0.1 release includes an accompanying release of the Accessibility Checker premium plugin.
                </p>

                <div class="space-y-4">
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-3 md:p-4">
                        <h4 class="text-sm font-medium text-blue-800 mb-1">Enhanced image accessibility checks in a11ychecker plugin</h4>
                        <p class="text-blue-700 md:text-sm">
                            Editflo 0.1 introduces four new image accessibility rules (Image rules) in the a11ychecker plugin to improve compliance and authoring guidance. These rules help identify common accessibility issues related to image use and provide actionable recommendations:
                        </p>
                        <ul class="list-disc list-inside text-blue-700 md:text-sm mt-2 ml-2 md:ml-4">
                            <li><strong>I1: Mixed Signals & Decorative Policy:</strong> Flags images with conflicting accessibility indicators (e.g., alt with role="presentation") and ensures decorative images comply with best practices.</li>
                            <li><strong>I2: Alt Attribute Requirement:</strong> Enforces the presence of the alt attribute on all &lt;img&gt; elements, regardless of other labeling mechanisms like aria-label, aria-labelledby, or title.</li>
                            <li><strong>I3: Filename Detection:</strong> Warns when alt text appears to be a filename (e.g., image123.jpg), including cases with URL encoding.</li>
                            <li><strong>I4: Alt Text Length:</strong> Detects alt text that exceeds a configurable maximum length, promoting concise descriptions. The default limit is 150 characters.</li>
                        </ul>
                    </div>

                    <div class="">
                        <h4 class="text-sm font-medium text-gray-800 mb-1">New a11ychecker_alt_text_max_length configuration option</h4>
                        <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base">
                            A new configuration option, a11ychecker_alt_text_max_length, has been added to the Accessibility Checker plugin. This option allows users to configure the maximum allowed length for image alt text descriptions. The default value is 150 characters.
                        </p>
                        <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto mt-3">
                            <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span class="text-gray-300">: </span><span class="text-green-400">'a11ychecker'</span><span class="text-gray-300">,</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">a11ychecker_alt_text_max_length</span><span class="text-gray-300">: </span><span class="text-orange-400">150</span><span class="text-gray-300"> </span><span class="text-green-400">// Set maximum length to 150 characters</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                    For more information on the Accessibility Checker plugin, see: Accessibility Checker.
                </p>
            </div>

            <!-- PowerPaste -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-5">
                <h3 class="text-base md:text-lg font-medium text-gray-800 mb-3">PowerPaste</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The Editflo 0.1 release includes an accompanying release of the PowerPaste premium plugin.
                </p>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-3 md:p-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-1">Word import of lists with a "lighter" level failed parsing</h4>
                    <p class="text-blue-700 md:text-sm">
                        When users pasted content from Microsoft Word documents containing lists styled with Word's "No List" setting into the editor with PowerPaste enabled, the operation failed due to a parsing error. As a result, the content was not inserted into the editor, causing disruption to content workflows.
                    </p>
                    <p class="text-blue-700 md:text-sm mt-2">
                        Editflo 0.1 addresses this issue by updating the PowerPaste parser to correctly handle lists with the "No List" style. As a result, users can now successfully paste such content into the editor without encountering errors.
                    </p>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                    For information on the PowerPaste plugin, see: PowerPaste.
                </p>
            </div>

            <!-- Comments -->
            <div class="border border-gray-200 rounded-lg p-4 md:p-5">
                <h3 class="text-base md:text-lg font-medium text-gray-800 mb-3">Comments</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The Editflo 0.1 release includes an accompanying release of the Comments premium plugin.
                </p>

                <div class="bg-gray-50 border-l-4 border-gray-500 p-3 md:p-4">
                    <h4 class="text-sm font-medium text-gray-800 mb-1">Removed unused Comments stylesheet</h4>
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base">
                        In 0.1, the unused editflocomments.css file was removed from the Comments plugin. In earlier versions (such as 0.0), this empty CSS file was still being loaded, despite its contents having been moved to the Oxide theme in a prior update. This change ensures cleaner resource loading and avoids unnecessary network requests.
                    </p>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                    For information on the Comments plugin, see: Introduction to Editflo Comments.
                </p>
            </div>
        </div>
    </div>

    <!-- Enhanced Skins & Icon Packs -->
    <div id="enhanced-skins-icon-packs" class="bg-white rounded-lg border border-gray-200 p-4 md:p-6 mb-8 scroll-mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-4">Accompanying Enhanced Skins & Icon Packs Changes</h2>

        <div class="border border-gray-200 rounded-lg p-4 md:p-5">
            <h3 class="text-base md:text-lg font-medium text-gray-800 mb-3">Enhanced Skins & Icon Packs</h3>
            <p class="text-gray-700 mb-3 text-sm md:text-base">
                The Enhanced Skins & Icon Packs release includes the following updates:
            </p>
            <p class="text-gray-700 text-sm md:text-base">
                The Enhanced Skins & Icon Packs were rebuilt to pull in the changes also incorporated into the default Editflo 0.1 skin, Oxide.
            </p>
            <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                For information on using Enhanced Skins & Icon Packs, see: Enhanced Skins & Icon Packs.
            </p>
        </div>
    </div>

    <!-- Improvements -->
    <div id="improvements" class=" mb-8 scroll-mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-4">Improvements</h2>
        <p class="text-gray-700 mb-4 text-sm md:text-base">
            Editflo 0.1 also includes the following improvements:
        </p>

        <div class="space-y-6">
            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Enhanced cross-origin resource handling</h4>
                <p class="text-gray-700 mb-2 text-sm md:text-base">
                    Added a new function-based crossorigin configuration option that provides granular control over cross-origin resource loading. The function receives the resource URL and type (script or stylesheet) as parameters and can return 'anonymous', 'use-credentials', or undefined to control the crossorigin attribute.
                </p>
                <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto mt-2">
                    <span class="text-blue-400">const</span><span class="text-gray-300"> crossOriginFunction = (url, resourceType) => {</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">// Returning 'anonymous' or 'use-credentials' here would explicitly set the attribute</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">return</span><span class="text-gray-300"> </span><span class="text-green-400">'anonymous'</span><span class="text-gray-300">;</span><br>
                    <span class="text-gray-300">};</span><br><br>
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">"textarea"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">crossorigin</span><span class="text-gray-300">: crossOriginFunction</span><br>
                    <span class="text-gray-300">});</span>
                </div>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Tooltips can now be closed by pressing the escape key</h4>
                <p class="text-gray-700 text-sm md:text-base">
                    Prior to 0.1, tooltips could not be dismissed using the keyboard, which posed an accessibility concern. As of Editflo 0.1, tooltips can now be closed via the escape key, improving accessibility.
                </p>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Screen reader announcements for interactive elements</h4>
                <p class="text-gray-700 text-sm md:text-base">
                    Instructions on how to navigate the color swatch, image select and insert table widget are now announced by screen readers.
                </p>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Resize handles accessibility improvements</h4>
                <p class="text-gray-700 text-sm md:text-base">
                    Resize handles are more accessible with role and aria-valuetext attributes.
                </p>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Focus restoration after closing dialogs</h4>
                <p class="text-gray-700 text-sm md:text-base">
                    Focus is now restored to a dialog after closing an alert, confirmation or another dialog.
                </p>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Added support for skip_focus option in ToggleToolbarDrawer command</h4>
                <p class="text-gray-700 mb-2 text-sm md:text-base">
                    The ToggleToolbarDrawer command now supports the standard skip_focus option, which allows opening the toolbar drawer without focusing the editor. This provides consistent behavior with other editor commands.
                </p>
                <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto mt-2">
                    <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">execCommand</span><span class="text-gray-300">(</span><span class="text-green-400">'ToggleToolbarDrawer'</span><span class="text-gray-300">, </span><span class="text-orange-400">false</span><span class="text-gray-300">, </span><span class="text-blue-400">null</span><span class="text-gray-300">, { </span><span class="text-blue-400">skip_focus</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><span class="text-gray-300"> });</span>
                </div>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Split buttons are now rendered as separate action and chevron buttons</h4>
                <p class="text-gray-700 text-sm md:text-base">
                    Split buttons in Editflo 0.1 now render as two independent, focusable components instead of a single composite element. The main button performs the primary action, while the chevron button controls the dropdown menu.
                </p>
            </div>

            <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Ellipsis character in translate API</h4>
                <p class="text-gray-700 text-sm md:text-base">
                    The translate API now automatically replaces three dots in a row with an ellipsis character.
                </p>
            </div>
        </div>
    </div>

    <!-- Additions -->
    <div id="additions" class="  mb-8 scroll-mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-4">Additions</h2>
        <p class="text-gray-700 mb-4 text-sm md:text-base">
            Editflo 0.1 also includes the following additions:
        </p>

        <div class="space-y-6">
            <div class=" ">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">New allow_html_in_comments option</h4>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    Comments containing HTML-like content are removed from the editor's content by default for security reasons. This is done during the sanitization process, which ensures that any HTML-like content in comments is stripped out.
                </p>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    Editflo introduces a new configuration option, allow_html_in_comments, to give users control over whether HTML-like content in comments should be retained or removed. By default, this content is removed for security, but setting the option to true allows HTML-like content in comments to be preserved when needed.
                </p>
            </div>

            <div class=" ">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">Split button tooltip configuration</h4>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The chevronTooltip property provides custom tooltip text for the chevron button portion of split buttons. When chevronTooltip is not specified, Editflo automatically generates tooltip text using the pattern "{tooltip} menu". The setTooltip method updates both main and chevron tooltips to maintain consistency.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base">
                    For more information, see Split toolbar buttons.
                </p>
            </div>

            <div class=" ">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">New User Lookup API</h4>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    Editflo 0.1 introduces a new User Lookup API that enables integrations to retrieve and cache user details (such as names and avatars) and identify the current user within the editor. This API is particularly useful when building features that rely on user context, such as commenting systems or displaying lists of elements containing user information.
                </p>

                <div class="bg-gray-50 p-3 md:p-4 rounded-lg mb-3">
                    <h5 class="text-sm md:text-md font-medium text-gray-800 mb-2">Basic configuration</h5>
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2">The API requires two main configuration options:</p>
                    <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto">
                        <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">user_id</span><span class="text-gray-300">: </span><span class="text-green-400">'alextaylor'</span><span class="text-gray-300">, </span><span class="text-green-400">// Set the current user's unique identifier</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">fetch_users</span><span class="text-gray-300">: (userIds) => {</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-green-400">// Return a Promise that resolves to an array of user objects</span><br>
                        <span class="text-gray-300 ml-8"></span><span class="text-blue-400">return</span><span class="text-gray-300"> </span><span class="text-yellow-300">Promise</span><span class="text-gray-300">.</span><span class="text-yellow-300">all</span><span class="text-gray-300">(</span><br>
                        <span class="text-gray-300 ml-12"></span>userIds.<span class="text-yellow-300">map</span>(userId =><br>
                        <span class="text-gray-300 ml-16"></span><span class="text-yellow-300">fetch</span>(<span class="text-green-400">`/users/${userId}`</span>)<br>
                        <span class="text-gray-300 ml-20"></span>.<span class="text-yellow-300">then</span>(response => response.<span class="text-yellow-300">json</span>())<br>
                        <span class="text-gray-300 ml-20"></span>.<span class="text-yellow-300">catch</span>(() => ({ <span class="text-blue-400">id</span>: userId })) <span class="text-green-400">// Fallback for failed requests</span><br>
                        <span class="text-gray-300 ml-12"></span>)<br>
                        <span class="text-gray-300 ml-8"></span>);<br>
                        <span class="text-gray-300 ml-4"></span>}<br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-3 md:p-4 rounded-lg">
                    <h5 class="text-sm md:text-md font-medium text-gray-800 mb-2">API usage</h5>
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mb-2">Once configured, the API provides two main methods:</p>
                    <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto">
                        <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">on</span><span class="text-gray-300">(</span><span class="text-green-400">'init'</span><span class="text-gray-300">, () => {</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-green-400">// Get current user ID</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-yellow-300">console</span><span class="text-gray-300">.</span><span class="text-yellow-300">log</span><span class="text-gray-300">(</span><span class="text-green-400">'Current user:'</span><span class="text-gray-300">, </span><span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-blue-400">userLookup</span><span class="text-gray-300">.</span><span class="text-blue-400">userId</span><span class="text-gray-300">);</span><br><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-green-400">// Fetch multiple users</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">const</span><span class="text-gray-300"> users = </span><span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-blue-400">userLookup</span><span class="text-gray-300">.</span><span class="text-yellow-300">fetchUsers</span><span class="text-gray-300">([</span><span class="text-green-400">'user-1'</span><span class="text-gray-300">, </span><span class="text-green-400">'user-2'</span><span class="text-gray-300">]);</span><br><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-green-400">// Handle individual user promises</span><br>
                        <span class="text-gray-300 ml-4"></span>users[<span class="text-green-400">'user-1'</span>].<span class="text-yellow-300">then</span>(user => {<br>
                        <span class="text-gray-300 ml-8"></span><span class="text-yellow-300">console</span><span class="text-gray-300">.</span><span class="text-yellow-300">log</span><span class="text-gray-300">(</span><span class="text-green-400">'User 1 name:'</span><span class="text-gray-300">, user.</span><span class="text-blue-400">name</span><span class="text-gray-300">);</span><br>
                        <span class="text-gray-300 ml-4"></span>});<br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                    For comprehensive documentation and examples, see: User Lookup API.
                </p>
            </div>

            <div class="border border-gray-200 rounded-lg p-4 md:p-5">
                <h4 class="text-base md:text-lg font-medium text-gray-800 mb-2">New list_max_depth option</h4>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    Editflo 0.1 introduced a new list_max_depth option that allows configuration of the maximum indent depth for list items. This setting accepts a non-negative integer value, where 0 permits list creation without any indentation, and higher values set the maximum allowable indent depth. Negative values are invalid and will trigger an error.
                </p>
                <div class="bg-gray-900 text-gray-100 p-2 md:p-3 rounded-lg font-mono md:text-sm overflow-x-auto">
                    <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">"textarea"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">plugins</span><span class="text-gray-300">: [</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">"advlist"</span><span class="text-gray-300">, </span><span class="text-green-400">"anchor"</span><span class="text-gray-300">, </span><span class="text-green-400">"autolink"</span><span class="text-gray-300">, </span><span class="text-green-400">"charmap"</span><span class="text-gray-300">, </span><span class="text-green-400">"code"</span><span class="text-gray-300">, </span><span class="text-green-400">"fullscreen"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">"help"</span><span class="text-gray-300">, </span><span class="text-green-400">"image"</span><span class="text-gray-300">, </span><span class="text-green-400">"insertdatetime"</span><span class="text-gray-300">, </span><span class="text-green-400">"link"</span><span class="text-gray-300">, </span><span class="text-green-400">"lists"</span><span class="text-gray-300">, </span><span class="text-green-400">"media"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-8"></span><span class="text-green-400">"preview"</span><span class="text-gray-300">, </span><span class="text-green-400">"searchreplace"</span><span class="text-gray-300">, </span><span class="text-green-400">"table"</span><span class="text-gray-300">, </span><span class="text-green-400">"visualblocks"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span>],<br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">list_max_depth</span><span class="text-gray-300">: </span><span class="text-orange-400">2</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-blue-400">toolbar</span><span class="text-gray-300">: </span><span class="text-green-400">"undo redo | styles | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"</span><span class="text-gray-300">,</span><br>
                    <span class="text-gray-300">});</span>
                </div>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-3">
                    For more information, see: User formatting - List max depth.
                </p>
            </div>
        </div>
    </div>

    <!-- Deprecated -->
    <div id="deprecated" class=" mb-8 scroll-mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 mb-4"><i class="fa-solid fa-ban text-red-500 mr-2"></i>Deprecated</h2>
        <p class="text-gray-700 mb-4 text-sm md:text-base">
            Editflo 0.1 includes the following deprecations:
        </p>

        <div class="space-y-6">
            <div class="">
                <h3 class="text-base md:text-lg font-medium text-gray-700 mb-2">Java Swing integration has been deprecated</h3>
                <p class="text-gray-700 text-sm md:text-base">
                    Editflo's Java Swing integration has been deprecated in Editflo 0.1 and will reach end-of-life as of December 31, 2025.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-2">
                    For information about the Java Swing integration, see: Editflo for Java Swing integration
                </p>
            </div>
            <hr>
            <div class="">
                <h3 class="text-base md:text-lg font-medium text-gray-700 mb-2">Java application server-based server components have been deprecated</h3>
                <p class="text-gray-700 text-sm md:text-base">
                    Editflo 0.1 deprecates the Java application server-based deployment method for self-hosted services. Docker containers are now the only supported deployment method for self-hosted services.
                </p>
            </div>
            <hr>
            <div class="">
                <h3 class="text-base md:text-lg font-medium text-gray-700 mb-2">The ToggleToolbarDrawer command's skipFocus option has been deprecated</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The ToggleToolbarDrawer command previously accepted a non-standard skipFocus option to prevent the editor from receiving focus when the command was executed. This behavior differed from other editor commands, which use the generic skip_focus option for the same purpose.
                </p>
                <hr>
                <div class="p-2 md:p-3 rounded-lg mb-3">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base font-medium mb-1">Before deprecation using the skipFocus option:</p>
                    <div class="bg-gray-900 text-gray-100 p-2 rounded-lg font-mono md:text-sm overflow-x-auto">
                        <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">execCommand</span><span class="text-gray-300">(</span><span class="text-green-400">'ToggleToolbarDrawer'</span><span class="text-gray-300">, </span><span class="text-orange-400">false</span><span class="text-gray-300">, { </span><span class="text-blue-400">skipFocus</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><span class="text-gray-300"> });</span>
                    </div>
                </div>
                <div class="p-2 md:p-3 rounded-lg">
                    <p class="text-gray-800 md:text-sm font-medium mb-1">After deprecation using the skip_focus option:</p>
                    <div class="bg-gray-900 text-gray-100 p-2 rounded-lg font-mono md:text-sm overflow-x-auto">
                        <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">execCommand</span><span class="text-gray-300">(</span><span class="text-green-400">'ToggleToolbarDrawer'</span><span class="text-gray-300">, </span><span class="text-orange-400">false</span><span class="text-gray-300">, </span><span class="text-blue-400">null</span><span class="text-gray-300">, { </span><span class="text-blue-400">skip_focus</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><span class="text-gray-300"> });</span>
                    </div>
                </div>
            </div>

            <div class="border border-orange-200 rounded-lg p-4 md:p-5 bg-orange-50">
                <h3 class="text-base md:text-lg font-medium text-gray-700 mb-2">Deprecated fire() method for event handling</h3>
                <p class="text-gray-700 mb-3 text-sm md:text-base">
                    The fire() method was originally deprecated in Editflo 6 in favor of the dispatch() method for event handling. Editflo 0.1 now displays a deprecation warning when the fire() method is used.
                </p>
                <div class="bg-orange-100 p-2 md:p-3 rounded-lg mb-3">
                    <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base font-medium mb-1">Deprecated approach for dispatching custom events:</p>
                    <div class="bg-gray-900 text-gray-100 p-2 rounded-lg font-mono md:text-sm overflow-x-auto">
                        <span class="text-green-400">// Deprecated in Editflo 0.1, will be removed in 0.2</span><br>
                        <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">fire</span><span class="text-gray-300">(</span><span class="text-green-400">'someEvent'</span><span class="text-gray-300">);</span>
                    </div>
                </div>
                <div class="">
                    <p class="text-green-800 md:text-sm font-medium mb-1">New approach for dispatching custom events:</p>
                    <div class="bg-gray-900 text-gray-100 p-2 rounded-lg font-mono md:text-sm overflow-x-auto">
                        <span class="text-green-400">// Use dispatch() instead</span><br>
                        <span class="text-purple-400">editor</span><span class="text-gray-300">.</span><span class="text-yellow-300">dispatch</span><span class="text-gray-300">(</span><span class="text-green-400">'someEvent'</span><span class="text-gray-300">);</span>
                    </div>
                </div>
            </div>

            <div class="">
                <h3 class="text-base md:text-lg font-medium text-gray-700 mb-2"><i class="fa-solid fa-triangle-exclamation mr-2 text-yellow-500"></i>Deprecated editor.selection.setContent API</h3>
                <p class="text-gray-700 text-sm md:text-base">
                    The editor.selection.setContent method has been deprecated in Editflo 0.1. This low-level API was never intended for external use and does not guarantee consistent behavior when inserting complex content structures, such as lists. Integrators are advised to use the supported editor.insertContent method for reliable content insertion.
                </p>
                <p class="text-gray-700 text-sm sm:text-base text-sm sm:text-base mt-2">
                    This deprecation helps reduce confusion and aligns content insertion with Editflo's supported APIs.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    // Calculate offset based on screen size
                    const offset = window.innerWidth < 768 ? 30 : 50;

                    window.scrollTo({
                        top: targetElement.offsetTop - offset,
                        behavior: 'smooth'
                    });

                    // Update URL hash without scrolling
                    history.pushState(null, null, '#' + targetId);
                }
            });
        });
    });
</script>

<style>
    /* Smooth scroll behavior for the whole page */
    html {
        scroll-behavior: smooth;
    }

    /* Responsive scroll margin for sections */
    [id] {
        scroll-margin-top: 70px;
    }

    @media (min-width: 768px) {
        [id] {
            scroll-margin-top: 70px;
        }
    }
</style>