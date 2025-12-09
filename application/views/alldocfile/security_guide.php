<div class="mx-auto min-h-screen">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Security Guide</h1>
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <p class="text-blue-700">
                        The following is general security advice that may be relevant to a website or application using Editflo.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Section with TOC -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Overview</h2>

        <!-- TOC Navigation Box -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-5 mb-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Quick Navigation</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <a href="#reporting-editflo-security-issues" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-shield-alt text-blue-500 mr-3"></i>
                    <span class="font-medium">Reporting Editflo security issues</span>
                </a>
                <a href="#what-we-do-to-maintain-security-for-editflo" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-tools text-blue-500 mr-3"></i>
                    <span class="font-medium">What we do to maintain security</span>
                </a>
                <a href="#enforcing-https-with-hsts" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-lock text-blue-500 mr-3"></i>
                    <span class="font-medium">Enforcing HTTPS with HSTS</span>
                </a>
                <a href="#configuring-content-security-policy-for-editflo" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all">
                    <i class="fas fa-cogs text-blue-500 mr-3"></i>
                    <span class="font-medium">Configuring Content Security Policy</span>
                </a>
                <a href="#general-security-risks-for-user-input-elements" class="flex items-center p-3 bg-white border border-gray-200 rounded hover:bg-blue-50 hover:border-blue-200 transition-all col-span-1 md:col-span-2">
                    <i class="fas fa-exclamation-triangle text-blue-500 mr-3"></i>
                    <span class="font-medium">General security risks for user input elements</span>
                </a>
            </div>

            <!-- Sub-points for General Security Risks -->
            <div class="mt-4 pl-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <a href="#cross-site-scripting-xss" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Cross-Site Scripting (XSS)
                    </a>
                    <a href="#injection" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Injection
                    </a>
                    <a href="#sanitizing-html-input-to-protect-against-xss-attacks" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Sanitizing HTML input
                    </a>
                    <a href="#insecure-transmission-and-storage-of-data" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Insecure Transmission and Storage
                    </a>
                    <a href="#broken-authentication-and-session-management" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Broken Authentication
                    </a>
                    <a href="#using-components-with-known-vulnerabilities" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Using Components with Known Vulnerabilities
                    </a>
                    <a href="#further-security-information" class="text-sm text-gray-600 hover:text-blue-600 hover:underline flex items-center md:col-span-2">
                        <i class="fas fa-chevron-right text-xs mr-2"></i>
                        Further security information
                    </a>
                </div>
            </div>
        </div>

        <!-- Original Overview Content -->
        <div class="space-y-4">
            <div class="flex items-start">
                <i class="fas fa-shield-alt text-blue-500 mt-1 mr-3"></i>
                <div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">
                        <a href="#reporting-editflo-security-issues" class="hover:text-blue-600 transition-colors">Reporting Editflo security issues</a>
                    </h3>
                    <p class="text-gray-700">How to report potential security vulnerabilities in Editflo.</p>
                </div>
            </div>

            <div class="flex items-start">
                <i class="fas fa-tools text-blue-500 mt-1 mr-3"></i>
                <div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">
                        <a href="#what-we-do-to-maintain-security-for-editflo" class="hover:text-blue-600 transition-colors">What we do to maintain security for Editflo</a>
                    </h3>
                    <p class="text-gray-700">Our security practices including scripts and XSS vulnerabilities, and keeping dependencies up-to-date.</p>
                    <div class="ml-6 mt-2 space-y-1">
                        <a href="#scripts-and-xss-vulnerabilities" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-code mr-2"></i>
                            Scripts and XSS vulnerabilities
                        </a>
                        <a href="#keeping-dependencies-up-to-date" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-sync-alt mr-2"></i>
                            Keeping dependencies up-to-date
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex items-start">
                <i class="fas fa-lock text-blue-500 mt-1 mr-3"></i>
                <div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">
                        <a href="#enforcing-https-with-hsts" class="hover:text-blue-600 transition-colors">Enforcing HTTPS with HSTS</a>
                    </h3>
                    <p class="text-gray-700">Recommendations for configuring HTTP Strict Transport Security.</p>
                </div>
            </div>

            <div class="flex items-start">
                <i class="fas fa-cogs text-blue-500 mt-1 mr-3"></i>
                <div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">
                        <a href="#configuring-content-security-policy-for-editflo" class="hover:text-blue-600 transition-colors">Configuring Content Security Policy (CSP) for Editflo</a>
                    </h3>
                    <p class="text-gray-700">How to configure CSP headers that work with Editflo.</p>
                </div>
            </div>

            <div class="flex items-start">
                <i class="fas fa-exclamation-triangle text-blue-500 mt-1 mr-3"></i>
                <div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">
                        <a href="#general-security-risks-for-user-input-elements" class="hover:text-blue-600 transition-colors">General security risks for user input elements</a>
                    </h3>
                    <p class="text-gray-700">Security risks including Cross-Site Scripting (XSS), Injection, and other vulnerabilities.</p>
                    <div class="ml-6 mt-2 grid grid-cols-1 md:grid-cols-2 gap-2">
                        <a href="#cross-site-scripting-xss" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-bug mr-2"></i>
                            Cross-Site Scripting (XSS)
                        </a>
                        <a href="#injection" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-syringe mr-2"></i>
                            Injection
                        </a>
                        <a href="#sanitizing-html-input-to-protect-against-xss-attacks" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-filter mr-2"></i>
                            Sanitizing HTML input
                        </a>
                        <a href="#insecure-transmission-and-storage-of-data" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-shield-virus mr-2"></i>
                            Insecure Transmission and Storage
                        </a>
                        <a href="#broken-authentication-and-session-management" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-user-shield mr-2"></i>
                            Broken Authentication
                        </a>
                        <a href="#using-components-with-known-vulnerabilities" class="text-sm text-blue-600 hover:underline block">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            Using Components with Known Vulnerabilities
                        </a>
                        <a href="#further-security-information" class="text-sm text-blue-600 hover:underline block md:col-span-2">
                            <i class="fas fa-book mr-2"></i>
                            Further security information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reporting Editflo security issues -->
    <div id="reporting-editflo-security-issues" class="bg-white rounded-lg border border-gray-200 p-6 mb-8 scroll-mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Reporting Editflo security issues</h2>
        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <p class="text-blue-700">
                        Editflo values the work of security researchers in improving the security of technology products worldwide. We welcome researchers who wish to responsibly disclose vulnerabilities in our products or systems.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <p class="text-yellow-700">
                        <strong>Note:</strong> We do not offer any "bug bounty" program or any form of payment for disclosed vulnerabilities.
                    </p>
                </div>
            </div>
        </div>

        <p class="text-gray-700 mb-4">
            To report a potential security vulnerability, contact our Security team at <strong>infosec@editflo.cloud</strong>.
        </p>

        <p class="text-gray-700 mb-4">
            In line with the United States National Infrastructure Advisory Council (NIAC) Vulnerability Disclosure Framework, Editflo requests community members reporting potential security vulnerabilities maintain the confidentiality of their report and discovery until Editflo has investigated the issue and taken action to fix it.
        </p>

        <p class="text-gray-700">
            Editflo will communicate with you regarding the status of your report and will, with your permission, publicly attribute the security issue's discovery to you after the issue has been fixed and disclosed.
        </p>
    </div>

    <!-- What we do to maintain security for Editflo -->
    <div id="what-we-do-to-maintain-security-for-editflo" class="bg-white rounded-lg border border-gray-200 p-6 mb-8 scroll-mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">What we do to maintain security for Editflo</h2>
        <p class="text-gray-700 mb-4">
            To protect Editflo users, we:
        </p>

        <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2 ml-4">
            <li>Patch Cross-Site Scripting (XSS) vulnerabilities</li>
            <li>Keep Editflo dependencies up to date</li>
            <li>Provide recommendations about enforcing HTTPS with HSTS</li>
            <li>Provide information about how to configure a Content Security Policy that works with Editflo</li>
        </ul>

        <!-- Scripts and XSS vulnerabilities -->
        <div id="scripts-and-xss-vulnerabilities" class="mt-6 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Scripts and XSS vulnerabilities</h3>
            <p class="text-gray-700 mb-3">
                Editflo filters content such as scripts from the editor content, however, client-side applications can be by-passed by attackers. We recommend processing received editor content through server-side filters.
            </p>
            <p class="text-gray-700 mb-3">
                SVGs (Scalable Vector Graphics) are not supported in Editflo to protect our users and their end-users. SVGs can be used to perform both client-side and server-side attacks.
            </p>
            <p class="text-gray-700">
                From the 1st of January 2020, Security Advisories for patched XSS vulnerabilities will be published on the Editflo GitHub repository Security page.
            </p>
        </div>

        <!-- Keeping dependencies up-to-date -->
        <div id="keeping-dependencies-up-to-date" class="mt-6 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Keeping dependencies up-to-date</h3>
            <p class="text-gray-700">
                To protect our users, Editflo ensures that the dependencies are updated before the next version (major or minor) is released.
            </p>
        </div>
    </div>

    <!-- Enforcing HTTPS with HSTS -->
    <div id="enforcing-https-with-hsts" class="bg-white rounded-lg border border-gray-200 p-6 mb-8 scroll-mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Enforcing HTTPS with HSTS</h2>
        <p class="text-gray-700 mb-4">
            The Editflo security team strongly recommends that customers embedding Editflo configure their web servers to include the HTTP Strict Transport Security (HSTS) header for websites served over HTTPS. This can be achieved by updating the server configurations to enable HSTS.
        </p>

        <p class="text-gray-700 mb-4">
            HSTS ensures that encrypted communications are exclusively used, mitigates downgrade attacks, and enhances the protection of user data. While integrating HSTS is optional for Editflo, adopting this best practice significantly reduces the risk of vulnerabilities in projects utilizing Editflo.
        </p>

        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-red-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <h4 class="text-sm font-medium text-red-800 mb-1">Security Risk Without HSTS</h4>
                    <p class="text-red-700 text-sm">
                        Without HSTS, users accessing a website may be vulnerable to man-in-the-middle (MITM) attacks. Attackers can exploit this vulnerability by intercepting unencrypted HTTP traffic, redirecting users to malicious sites, or executing downgrade attacks to force connections over HTTP instead of HTTPS. This lack of encryption jeopardizes sensitive user data, including credentials, session cookies, and personal information.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <h4 class="text-sm font-medium text-green-800 mb-1">Security Benefit With HSTS</h4>
                    <p class="text-green-700 text-sm">
                        By enabling HSTS, these risks are effectively mitigated, as the browser enforces secure HTTPS connections for all future interactions with the site.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg">
            <h4 class="text-md font-medium text-gray-800 mb-2">Resources</h4>
            <p class="text-gray-700 mb-2">For comprehensive guidance on implementing HSTS, refer to the following resources:</p>
            <ul class="list-disc list-inside text-gray-700 space-y-1 ml-4">
                <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">OWASP HSTS Cheat Sheet</a></li>
                <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">MDN Documentation on HSTS</a></li>
            </ul>
        </div>
    </div>

    <!-- Configuring Content Security Policy (CSP) for Editflo -->
    <div id="configuring-content-security-policy-for-editflo" class="bg-white rounded-lg border border-gray-200 p-6 mb-8 scroll-mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Configuring Content Security Policy (CSP) for Editflo</h2>
        <p class="text-gray-700 mb-4">
            Editflo can be used with a CSP header. When using a CSP, the following directives are required for Editflo to function:
        </p>

        <!-- CSP Table -->
        <div class="overflow-x-auto mb-6">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-medium text-gray-700">Policy directives</th>
                        <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-medium text-gray-700">Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b border-gray-300 text-sm font-mono text-gray-800">
                            script-src 'self' *.editflo.com *.editflo.cloud;
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300 text-sm text-gray-700">
                            Scripts are sometimes loaded as script element with an src attribute.
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b border-gray-300 text-sm font-mono text-gray-800">
                            connect-src 'self' *.editflo.com *.editflo.cloud blob:;
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300 text-sm text-gray-700">
                            XMLHttpRequest is required by some services such as spellchecking and PowerPaste.
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b border-gray-300 text-sm font-mono text-gray-800">
                            img-src 'self' *.editflo.com *.editflo.cloud data: blob:;
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300 text-sm text-gray-700">
                            Images within the editor are sometimes base64 encoded, blob URLs, or proxied through the Editflo Cloud service.
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b border-gray-300 text-sm font-mono text-gray-800">
                            style-src 'self' 'unsafe-inline' *.editflo.com *.editflo.cloud;
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300 text-sm text-gray-700">
                            Styles are used for inline formatting (such as underline, font colors, etc.) and the positioning of user interface elements.
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b border-gray-300 text-sm font-mono text-gray-800">
                            font-src 'self' *.editflo.com *.editflo.cloud;
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300 text-sm text-gray-700">
                            Fonts are used for icons in the UI and is loaded from external files.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-yellow-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <h4 class="text-sm font-medium text-yellow-800 mb-1">Important Note About Strict CSP</h4>
                    <p class="text-yellow-700 text-sm">
                        There is a hardened approach to CSP, commonly known as strict CSP. However, Editflo currently requires the <code class="bg-yellow-100 px-1 py-0.5 rounded text-xs">unsafe-inline</code> value in the style-src directive to present content other than plain-text. As a consequence, running Editflo from within a strict CSP configuration is not currently supported.
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Allowing External Content</h3>
            <p class="text-gray-700 mb-3">
                The required directives documented above prevent any content loading from external sources. To allow content from specific sources, add the source domains to the relevant directives. For example, to allow YouTube videos:
            </p>

            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
                <span class="text-green-400">media-src</span><span class="text-gray-300"> </span><span class="text-green-400">'self'</span><span class="text-gray-300"> </span><span class="text-yellow-300">*.youtube.com</span><span class="text-gray-300">;</span>
            </div>

            <p class="text-gray-700 mb-3">
                To allow content from any source, use the (*) wildcard. <strong>Note:</strong> Allowing all sources (using *) negates the security policy for the source type. For example:
            </p>

            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-4">
                <span class="text-green-400">media-src</span><span class="text-gray-300"> </span><span class="text-yellow-300">*</span><span class="text-gray-300">;</span>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 text-sm">
                    For information on Content Security Policies, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">MDN Web Docs - Content Security Policy (CSP)</a>.
                </p>
            </div>
        </div>

        <!-- CSP Header Examples -->
        <div class="space-y-6">
            <div>
                <h3 class="text-lg font-medium text-gray-800 mb-3">When using Editflo Cloud</h3>
                <p class="text-gray-700 mb-3">Use this CSP header:</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-blue-400">&lt;meta</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">http-equiv=</span><span class="text-yellow-300">"Content-Security-Policy"</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">content=</span><span class="text-yellow-300">"default-src 'none'; script-src 'self' *.editflo.com *.editflo.cloud; connect-src 'self' *.editflo.com *.editflo.cloud blob:; img-src 'self' *.editflo.com *.editflo.cloud data: blob:; style-src 'self' 'unsafe-inline' *.editflo.com *.editflo.cloud; font-src 'self' *.editflo.com *.editflo.cloud;"</span><br>
                    <span class="text-blue-400">/&gt;</span>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-800 mb-3">When self-hosting Editflo</h3>
                <p class="text-gray-700 mb-3">Use this CSP header (excludes the *.editflo.cloud domain):</p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-blue-400">&lt;meta</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">http-equiv=</span><span class="text-yellow-300">"Content-Security-Policy"</span><br>
                    <span class="text-gray-300 ml-4"></span><span class="text-green-400">content=</span><span class="text-yellow-300">"default-src 'none'; script-src 'self'; connect-src 'self' blob:; img-src 'self' data: blob:; style-src 'self' 'unsafe-inline'; font-src 'self';"</span><br>
                    <span class="text-blue-400">/&gt;</span>
                </div>
            </div>
        </div>
    </div>

    <!-- General security risks for user input elements -->
    <div id="general-security-risks-for-user-input-elements" class="bg-white rounded-lg border border-gray-200 p-6 mb-8 scroll-mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">General security risks for user input elements</h2>
        <p class="text-gray-700 mb-6">
            The following security risks are not Editflo specific, but are the main security risks associated with websites or applications which allow user inputs. Protecting your services and users from these risks requires server-side handling. Note that attackers will likely bypass any editor and attack the server directly, rather than use the text editor as a vector.
        </p>

        <!-- Cross-Site Scripting (XSS) -->
        <div id="cross-site-scripting-xss" class="mb-8 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Cross-Site Scripting (XSS)</h3>
            <p class="text-gray-700 mb-3">
                Cross-Site Scripting (XSS) involves using website or application inputs to inject malicious, client-side code. This code can then be used to attack your users.
            </p>
            <p class="text-gray-700 mb-3">
                Although Editflo filters content such as scripts from the editor content, precautions should be taken to protect your users, such as enabling a Content Security Policy (CSP) and server-side filtering.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 text-sm">
                    For information on Cross-Site Scripting and how to reduce the risk of an attack, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">OWASP Top Ten — Cross-Site Scripting (XSS)</a>.
                </p>
            </div>
        </div>

        <!-- Injection -->
        <div id="injection" class="mb-8 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Injection</h3>
            <p class="text-gray-700 mb-3">
                Injection attacks involve attackers using website or application inputs to run server-side code, such as SQL, NoSQL, or LDAP scripts.
            </p>
            <p class="text-gray-700 mb-3">
                If user inputs are not properly sanitized server-side, host devices and user data can be compromised.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 text-sm">
                    For information on Injection-related security issues and how to reduce the risk of an attack, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">OWASP Top Ten — Injection</a>.
                </p>
            </div>
        </div>

        <!-- Sanitizing HTML input -->
        <div id="sanitizing-html-input-to-protect-against-xss-attacks" class="mb-8 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Sanitizing HTML input to protect against XSS attacks</h3>
            <p class="text-gray-700 mb-3">
                Editflo uses the native browser API, <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">DOMParser()</code>, and the Free and Open Source XSS sanitizer for HTML, MathML and SVG, <strong>DOMPurify</strong>.
            </p>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-blue-700">
                            Editflo uses DOMPurify 3.x, which was current at the time Editflo 8 was developed.
                        </p>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 mb-4">
                Before HTML (or XML) content is passed to Editflo 8, the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">DOMParser</code> API parses the HTML (or XML) string into a DOM object. As part of this process, DOMParser attempts to correct malformed HTML.
            </p>

            <div class="mb-6">
                <h4 class="text-md font-medium text-gray-800 mb-2">Example: HTML correction by DOMParser</h4>
                <p class="text-gray-700 mb-2">Input string:</p>
                <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-sm overflow-x-auto mb-3">
                    <span class="text-yellow-300">&lt;p&gt;</span><br>
                    <span class="text-yellow-300 ml-4">&lt;a href="https://example.com"&gt;</span>Click here.<br>
                    <span class="text-yellow-300">&lt;/p&gt;</span>
                </div>
                <p class="text-gray-700 mb-2">After DOMParser correction:</p>
                <div class="bg-gray-900 text-gray-100 p-3 rounded-lg font-mono text-sm overflow-x-auto">
                    <span class="text-yellow-300">&lt;p&gt;</span><br>
                    <span class="text-yellow-300 ml-4">&lt;a href="https://example.com"&gt;</span>Click here.<span class="text-yellow-300">&lt;/a&gt;</span><br>
                    <span class="text-yellow-300">&lt;/p&gt;</span>
                </div>
            </div>

            <p class="text-gray-700 mb-4">
                Next, the, now correctly formed, DOM object is passed to DOMPurify. DOMPurify runs a security-focused ruleset over the DOM object to sanitize the HTML and protect Editflo, and applications using Editflo, against XSS attacks.
            </p>

            <!-- Turning DOMPurify off -->
            <div class="mb-8">
                <h4 class="text-md font-medium text-gray-800 mb-3">Turning DOMPurify off</h4>
                <p class="text-gray-700 mb-3">
                    DOMPurify sanitization is on by default. As of Editflo 6.4, it is possible to turn DOMPurify off using the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">xss_sanitization</code> option.
                </p>

                <div class="space-y-2 mb-4">
                    <div class="flex items-center">
                        <span class="text-gray-700 mr-3">Type:</span>
                        <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">Boolean</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-gray-700 mr-3">Default value:</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-medium">true</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-gray-700 mr-3">Possible values:</span>
                        <span class="space-x-2">
                            <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">true</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">false</span>
                        </span>
                    </div>
                </div>

                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-red-500 mt-1"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-red-700">
                                <strong>Warning:</strong> Turning DomPurify off leaves Editflo, and any application using Editflo, extremely vulnerable to XSS attacks. Only turn DomPurify off if alternative and equivalently capable HTML and XML sanitization and XSS protections are in place.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="text-gray-700 mb-2">Example: using xss_sanitization to turn DOMPurify off</p>
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                        <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                        <span class="text-gray-300 ml-4"></span><span class="text-blue-400">xss_sanitization</span><span class="text-gray-300">: </span><span class="text-orange-400">false</span><br>
                        <span class="text-gray-300">});</span>
                    </div>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-blue-700 text-sm">
                                Editflo 8.0.1 upgrades DOMPurify to version 3.2.6 and enables the SAFE_FOR_XML flag by default. This enforces stricter sanitization, which may remove or alter content that previously passed in Editflo 7.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Securing embedded external resources -->
            <div class="mb-8">
                <h4 class="text-md font-medium text-gray-800 mb-3">Securing embedded external resources</h4>

                <!-- sandbox_iframes option -->
                <div class="mb-6">
                    <h5 class="text-sm font-medium text-gray-800 mb-2">sandbox_iframes option</h5>
                    <p class="text-gray-700 mb-3">
                        This option allows control of whether <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;iframe&gt;</code> elements are sandboxed when inserted into the editor. When enabled, all <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;iframe&gt;</code> elements will be given the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">sandbox=""</code> attribute, applying all restrictions.
                    </p>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Type:</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">Boolean</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Default value:</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-medium">true</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Possible values:</span>
                            <span class="space-x-2">
                                <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">true</span>
                                <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">false</span>
                            </span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-700 mb-2">Example: using sandbox_iframes option</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">sandbox_iframes</span><span class="text-gray-300">: </span><span class="text-orange-400">false</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>

                <!-- convert_unsafe_embeds option -->
                <div class="mb-6">
                    <h5 class="text-sm font-medium text-gray-800 mb-2">convert_unsafe_embeds option</h5>
                    <p class="text-gray-700 mb-3">
                        This option controls whether an <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;object&gt;</code> and <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;embed&gt;</code> elements will be converted to more restrictive alternatives, namely <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;img&gt;</code> for image MIME types, <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;video&gt;</code> for video MIME types, <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;audio&gt;</code> for audio MIME types, or <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;iframe&gt;</code> for other or unspecified MIME types.
                    </p>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Type:</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">Boolean</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Default value:</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-medium">true</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Possible values:</span>
                            <span class="space-x-2">
                                <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">true</span>
                                <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">false</span>
                            </span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-700 mb-2">Example: using convert_unsafe_embeds option</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">, </span><span class="text-green-400">// change this value according to your HTML</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">convert_unsafe_embeds</span><span class="text-gray-300">: </span><span class="text-orange-400">false</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>

                    <p class="text-gray-700">
                        Enable the <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">sandbox_iframes</code> option in addition to ensure <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">&lt;iframe&gt;</code> conversions are also neutralised.
                    </p>
                </div>

                <!-- allow_html_in_comments option -->
                <div class="mb-6">
                    <h5 class="text-sm font-medium text-gray-800 mb-2">allow_html_in_comments option</h5>
                    <p class="text-gray-700 mb-3">
                        The <code class="bg-gray-100 px-1 py-0.5 rounded text-sm">allow_html_in_comments</code> option allows HTML-like content to be retained in comments within the editor content. By default, Editflo removes comments containing HTML-like content as a security measure.
                    </p>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Type:</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">Boolean</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Default value:</span>
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-sm font-medium">false</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-gray-700 mr-3">Possible values:</span>
                            <span class="space-x-2">
                                <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">true</span>
                                <span class="bg-gray-100 px-2 py-1 rounded text-sm font-medium">false</span>
                            </span>
                        </div>
                    </div>

                    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-triangle text-red-500 mt-1"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-red-700">
                                    <strong>Security Warning:</strong> Setting this option to <code class="bg-red-100 px-1 py-0.5 rounded text-xs">true</code> may expose your application to XSS vulnerabilities. The DOMPurify maintainers have identified potential security risks when HTML-like content is allowed in comments. Only enable this option if you trust your content sources and understand the security implications.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-700 mb-2">Example: using allow_html_in_comments</p>
                        <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                            <span class="text-purple-400">editflo</span><span class="text-gray-300">.</span><span class="text-yellow-300">init</span><span class="text-gray-300">({</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">selector</span><span class="text-gray-300">: </span><span class="text-green-400">'textarea'</span><span class="text-gray-300">,</span><br>
                            <span class="text-gray-300 ml-4"></span><span class="text-blue-400">allow_html_in_comments</span><span class="text-gray-300">: </span><span class="text-orange-400">true</span><span class="text-gray-300">, </span><span class="text-green-400">// Enable HTML in comments</span><br>
                            <span class="text-gray-300">});</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insecure Transmission and Storage of data -->
        <div id="insecure-transmission-and-storage-of-data" class="mb-8 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Insecure Transmission and Storage of data</h3>
            <p class="text-gray-700 mb-3">
                The transmission or storage of data without strong cryptographic protection leaves this content exposed to attackers.
            </p>
            <p class="text-gray-700 mb-3">
                Loading insecure content into the editor, or submitting content from the editor over an insecure connection exposes the user and the host server to attack.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 text-sm">
                    For information on Sensitive Data Exposure issues and how to reduce the risk of an attack, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">OWASP Top Ten — Sensitive Data Exposure</a>.
                </p>
            </div>
        </div>

        <!-- Broken Authentication and Session Management -->
        <div id="broken-authentication-and-session-management" class="mb-8 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Broken Authentication and Session Management</h3>
            <p class="text-gray-700 mb-3">
                Broken or incorrectly implemented authentication and session management exposes both user data and the server to attackers, allowing them to impersonate users, including administrators.
            </p>
            <p class="text-gray-700 mb-3">
                Broken Authentication or session management may allow attackers to change or submit data through the editor, or any input field, as the compromised user account.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 text-sm">
                    For information on Broken Authentication issues and how to reduce the risk of an attack, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">OWASP Top Ten — Broken Authentication</a>.
                </p>
            </div>
        </div>

        <!-- Using Components with Known Vulnerabilities -->
        <div id="using-components-with-known-vulnerabilities" class="mb-8 scroll-mt-6">
            <h3 class="text-lg font-medium text-gray-800 mb-3">Using Components with Known Vulnerabilities</h3>
            <p class="text-gray-700 mb-3">
                Using outdated components on your website or application allows attackers to exploit known vulnerabilities.
            </p>
            <p class="text-gray-700 mb-3">
                Editflo is patched when vulnerabilities are discovered. Keeping Editflo and your other dependencies up to date will protect you and your users from known vulnerabilities.
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 text-sm">
                    For information on issues related to using components with known issues and how to reduce the risk of an attack, see: <a href="#" class="text-blue-600 hover:text-blue-800 underline">OWASP Top Ten — Using Components with Known Vulnerabilities</a>.
                </p>
            </div>
        </div>

        <!-- Further security information -->
        <div id="further-security-information" class="bg-blue-50 border border-blue-200 rounded-lg p-6 scroll-mt-6">
            <div class="flex items-center mb-4">
                <i class="fas fa-book text-blue-500 text-xl mr-3"></i>
                <h3 class="text-lg font-medium text-gray-800">Further security information</h3>
            </div>
            <p class="text-gray-700 mb-3">
                For general security advice about securing your website or application, visit the Open Web Application Security Project (OWASP).
            </p>
            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                <span>Visit OWASP Website</span>
                <i class="fas fa-external-link-alt ml-2 text-sm"></i>
            </a>
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
                    window.scrollTo({
                        top: targetElement.offsetTop - 20,
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

    /* Scroll margin for sections to account for fixed header */
    [id] {
        scroll-margin-top: 40px;
    }
</style>