<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full">
        <h1 class="page text-3xl font-bold text-gray-800 mb-2">Using editflo from the Tiny Cloud CDN with the Blazor framework</h1>
        <p class="text-gray-700 text-sm sm:text-base mb-5">
            The Official editflo Blazor component integrates editflo into Blazor applications. This procedure creates a basic Blazor application and adds a editflo editor using the editflo Blazor integration. The basic Blazor application is based on the following tutorial: Microsoft .NET Blazor Tutorial - Build your first Blazor app.
        </p>
        <p class="text-gray-700 text-sm sm:text-base mb-2">
            Select from the following guides:
        </p>
        <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
            <ul class="space-y-3 list-disc pl-5">
                <li class="mb-2">
                    <a href="#Using-Visual-Studio-Code" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">
                        <span>Using Visual Studio Code (VS Code)</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#Using-Visual-Studio" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">
                        <span>Using Visual Studio</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#Using-a-command-prompt-or-terminal" class="text-blue-600 hover:text-blue-800 font-mono text-sm sm:text-base">
                        <span>Using a command prompt or terminal</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- VS Code Section -->
    <section id="Using-Visual-Studio-Code" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="page text-2xl font-bold text-gray-800 mb-4">Using Visual Studio Code (VS Code)</h2>

        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Prerequisites</h3>
            <p class="text-gray-700 text-sm sm:text-base mb-2">
                This procedure requires:
            </p>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-2 list-disc pl-5">
                    <li class="mb-2">
                        <span class="text-gray-700 text-sm sm:text-base">Visual Studio Code (VS Code)</span>
                    </li>
                    <li class="mb-2">
                        <span class="text-gray-700 text-sm sm:text-base">.NET SDK</span>
                    </li>
                    <li class="mb-2">
                        <span class="text-gray-700 text-sm sm:text-base">C# Dev Kit VS Code Extension</span>
                    </li>
                </ul>
            </div>
            <p class="text-gray-700 text-sm sm:text-base mt-4">
                Alternatively, the .NET WinGet Configuration file can be downloaded to install the necessary dependencies.
            </p>
        </div>

        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Procedure</h3>
            <ol class="space-y-3 list-decimal pl-5">
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    In VS Code, open the Command Palette by pressing <code class="border bg-gray-100 text-gray-700 p-1">Ctrl+Shift+P</code>. Find <code class="border bg-gray-100 text-gray-700 p-1">.NET: New Project</code> and select it to create a new project.
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Select Blazor Web App from the list of templates and follow the steps to set up the project.
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Using the Command Palette, find and select <code class="border bg-gray-100 text-gray-700 p-1">.NuGet: Add NuGet Package</code>. Enter <code class="border bg-gray-100 text-gray-700 p-1">editflo.Blazor</code> and select the package along with the version to install.
                </li>
            </ol>
        </div>
    </section>

    <!-- Visual Studio Section -->
    <section id="Using-Visual-Studio" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="page text-2xl font-bold text-gray-800 mb-4">Using Visual Studio</h2>

        <div class="mb-5">
            <h3 class="text-xl font-semibold text-gray-800">Prerequisites</h3>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-2 list-disc pl-5">
                    <li class="mb-2">
                        <span class="text-gray-700 text-sm sm:text-base">Microsoft Visual Studio</span>
                    </li>
                    <li class="mb-2">
                        <span class="text-gray-700 text-sm sm:text-base">Microsoft .NET</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Procedure</h3>
            <ol class="space-y-3 list-decimal pl-5">
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    On the Visual Studio toolbar, click the New Project button.
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Select the Blazor Web App template and follow the steps to set up the project.
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Use the NuGet package manager console to install the <code class="border bg-gray-100 text-gray-700 p-1">editflo.Blazor</code> package, such as:
                    <div class="bg-gray-900 text-gray-100 rounded-lg mt-2 p-3">
                        <code class="text-sm sm:text-base"><span class="text-yellow-300">Install-Package editflo.Blazor</span></code>
                    </div>
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    To test the application, run the application by pressing <code class="border bg-gray-100 text-gray-700 p-1">Ctrl+F5</code>.
                </li>
            </ol>

        </div>
    </section>

    <!-- Command Prompt/Terminal Section -->
    <section id="Using-a-command-prompt-or-terminal" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b pb-4">
        <h2 class="page text-2xl font-bold text-gray-800 mb-4">Using a command prompt or terminal</h2>

        <div class="">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Prerequisites</h3>
            <p class="text-gray-700 text-sm sm:text-base mt-4">
                This procedure requires:
            </p>
            <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                <ul class="space-y-2 list-disc pl-5">
                    <li class="mb-2">
                        <span class="text-gray-700 text-sm sm:text-base">Microsoft .NET</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Procedure</h3>

            <ol class="space-y-3 list-decimal pl-5">
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Create a new Blazor project:
                    <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5 mt-2">
    <code><span class="text-yellow-300">dotnet new blazor -o BlazorApp --no-https</span></code>
</div>
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Change into the new application directory:
                             <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5 mt-2">
    <code><span class="text-yellow-300">cd BlazorApp</span></code>
</div>
          
                </li>
                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Install the editflo Blazor integration:
                               <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5 mt-2">
    <code><span class="text-yellow-300">cd BlazorApp</span></code>
</div>
                </li>
                <li class="mb- text-gray-700 text-sm sm:text-base">
                    Test the application using the .NET development server.
                    <ul class="list-disc">
                        <li class="mt-3 text-gray-700 text-sm sm:text-base">To start the development server, in the project's root directory, run:</li>
                    </ul>
                                     <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5 mt-2">
    <code><span class="text-yellow-300">dotnet watch run</span></code>
</div>
                    <ul>
                        <li class="mt-3 text-gray-700 text-sm sm:text-base">This will start a local development server accessible at <code class="border bg-gray-100 text-gray-700 p-1">http://localhost:{PORT}</code>, where <code class="border bg-gray-100 text-gray-700 p-1">{PORT}</code> is specified in the project's <code class="border bg-gray-100 text-gray-700 p-1">Properties/launchSettings.json</code> file.</li>
                    </ul>
                    <ul class="list-disc">
                        <li class="mt-3 text-gray-700 text-sm sm:text-base">To stop the development server, select on the command line or command prompt and press Ctrl+C.</li>
                    </ul>


                </li>
            </ol>
        </div>
    </section>

    <!-- Post-installation Section -->
    <section id="Post-installation" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b pb-5">
        <h2 class="page text-2xl font-bold text-gray-800 mb-4">Post-installation</h2>
        <ol class="space-y-3 list-decimal pl-5">
            <li class="mb-2 text-gray-700 text-sm sm:text-base">
                Verify the installation by checking the ItemGroup references in the project file. For example, if the project is named BlazorApp, the relevant file would be <code class="border bg-gray-100 text-gray-700 p-1">BlazorApp.csproj</code> with the dependency referenced as follows:
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mt-2">
                    <span class="text-blue-400">&lt;script</span>
                    <span class="text-blue-400"> </span>
                    <span class="text-green-400">src</span>
                    <span class="text-blue-400">=</span>
                    <span class="text-yellow-300">"https://cdn.editflo.cloud/1/no-api-key/editflo/8/editflo.min.js"</span>
                    <span class="text-blue-400"> </span>
                    <span class="text-green-400">referrerpolicy</span>
                    <span class="text-blue-400">=</span>
                    <span class="text-yellow-300">"origin"</span>
                    <span class="text-blue-400"> </span>
                    <span class="text-green-400">crossorigin</span>
                    <span class="text-blue-400">=</span>
                    <span class="text-yellow-300">"anonymous"</span>
                    <span class="text-blue-400">&gt;&lt;/script&gt;</span>
                </div>
            </li>
            <li class="mb-2 text-gray-700 text-sm sm:text-base">
                Add the <code class="border bg-gray-100 text-gray-700 p-1">editflo-blazor.js</code> script to the main page. If using the Blazor Web App, add the script in <code class="border bg-gray-100 text-gray-700 p-1">Components/App.razor</code>, for example:
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mt-2">
                    <code><span class="text-blue-400">&lt;script</span> <span class="text-green-400">src</span><span class="text-blue-400">=</span><span class="text-yellow-300">"_framework/blazor.web.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span>
                        <span class="text-blue-400">&lt;script</span> <span class="text-green-400">src</span><span class="text-blue-400">=</span><span class="text-yellow-300">"_content/editflo.Blazor/editflo-blazor.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span></code>
                </div>
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-5 overflow-x-auto">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-700 sm:text-base mb-3">
                                The location of the script depends on the type of Blazor app, including Blazor Server and Blazor WebAssembly (WASM) which are not covered in this guide.
                            </p>
                            <ul class="list-disc">
                                <li class="mb-2 text-gray-700 text-sm sm:text-base"> If using Blazor Server, add the script in <code class="border bg-gray-100 text-gray-700 p-1">Pages/_Host.cshtml</code>, for example:</li>
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-2">
                                    <code><span class="text-blue-400">&lt;script</span> <span class="text-green-400">src</span><span class="text-blue-400">=</span><span class="text-yellow-300">"_framework/blazor.server.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span>
                                        <span class="text-blue-400">&lt;script</span> <span class="text-green-400">src</span><span class="text-blue-400">=</span><span class="text-yellow-300">"_content/editflo.Blazor/editflo-blazor.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span></code>
                                </div>

                                <li class="mb-2 text-gray-700 text-sm sm:text-base">If using WASM, add the script in <code class="border bg-gray-100 text-gray-700 p-1">wwwroot/index.html</code>, for example:</li>
                                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mt-2">
                                    <code><span class="text-blue-400">&lt;script</span> <span class="text-green-400">src</span><span class="text-blue-400">=</span><span class="text-yellow-300">"_content/editflo.Blazor/editflo-blazor.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span>
                                        <span class="text-blue-400">&lt;script</span> <span class="text-green-400">src</span><span class="text-blue-400">=</span><span class="text-yellow-300">"_framework/blazor.webassembly.js"</span><span class="text-blue-400">&gt;&lt;/script&gt;</span></code>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="mb-2 text-gray-700 text-sm sm:text-base">Add the <code class="border bg-gray-100 text-gray-700 p-1">Editor</code> component to a page by either:</li>
            <ul class="list-disc">
                <li class="mb-2 text-gray-700 text-sm sm:text-base">Using the <code class="border bg-gray-100 text-gray-700 p-1">using</code> directive:</li>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto">
                    <code><span class="text-green-400">@using</span> <span class="text-yellow-300">editflo.Blazor</span> <br>
                        <span class="text-blue-400">&lt;Editor /&gt;</span></code>
                </div>
                <p class="text-gray-700 text-sm sm:text-base mt-3">
                    For example:
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">
                    File:<code class="border bg-gray-100 text-gray-700 p-1">Pages/Index.razor</code>
                </p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5">
                    <code><span class="text-green-400">@page</span> <span class="text-yellow-300">"/"</span><br>
                        <span class="text-green-400">@rendermode</span> <span class="text-yellow-300">InteractiveServer</span><br>
                        <span class="text-green-400">@using</span> <span class="text-yellow-300">editflo.Blazor</span> <br>

                        <span class="text-blue-400">&lt;h1&gt;</span>Hello, world!<span class="text-blue-400">&lt;/h1&gt;</span> <br>
                        <span class="text-blue-400">&lt;h2&gt;</span>Welcome to your new app.<span class="text-blue-400">&lt;/h2&gt;</span><br>
                        <span class="text-blue-400">&lt;Editor /&gt;</span></code>
                </div>

                <li class="mb-2 text-gray-700 text-sm sm:text-base">Using the component with its namespace:</li>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5">
    <code><span class="text-blue-400">&lt;editflo.Blazor.Editor /&gt;</span></code>
</div>
                <p class="text-gray-700 text-sm sm:text-base mt-3">
                    For example:
                </p>
                <p class="text-gray-700 text-sm sm:text-base mb-2 font-medium">
                    File: <code class="border bg-gray-100 text-gray-700 p-1">Pages/Index.razor</code>
                </p>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5">
    <code >
        <span class="text-green-400">@page</span> <span class="text-yellow-300">"/"</span> <br>
        <span class="text-green-400">@rendermode</span> <span class="text-yellow-300">InteractiveServer</span> <br>
        <span class="text-green-400">@using</span> <span class="text-yellow-300">editflo.Blazor</span><br>
        <br>
        <span class="text-blue-400">&lt;h1&gt;</span>Hello, world!<span class="text-blue-400">&lt;/h1&gt;</span>
        <br>
        <span class="text-blue-400">&lt;h2&gt;</span>Welcome to your new app.<span class="text-blue-400">&lt;/h2&gt;</span>
        <br>
        <span class="text-blue-400">&lt;Editor /&gt;</span>
    </code>
</div>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mt-5 mb-5">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle text-red-500 mt-1"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-700 sm:text-base mb-3">
                                In a Blazor Web App, different render modes determine how components are rendered and how interactivity is handled. To enable JavaScript interactivity, ensure that @rendermode InteractiveServer is specified in a page component.
                            </p>

                        </div>
                    </div>
                </div>

                <li class="mb-2 text-gray-700 text-sm sm:text-base">
                    Update the <code class="border bg-gray-100 text-gray-700 p-1">ApiKey</code> option in the editor element and include your Tiny Cloud API key.
                </li>
                <div class="bg-gray-900 text-gray-100 p-4 rounded-lg font-mono text-sm overflow-x-auto mb-5">
    <code>
        <span class="text-blue-400">&lt;Editor</span> 
        <span class="text-green-400"> ApiKey</span><span class="text-blue-400">=</span><span class="text-yellow-300">"no-api-key"</span> 
        <span class="text-blue-400">/&gt;</span>
    </code>
</div>
            </ul>
        </ol>
    </section>
