<main class="mx-auto min-h-screen px-3 sm:px-4 md:px-6 lg:px-4 ">
    <!-- Header Section -->
    <header class="text-start">
        <div class="flex items-center mb-3 sm:mb-4 md:mb-5">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-gray-800">Using Editflo from the Editflo Cloud CDN with the React framework</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            The Official Editflo React component integrates Editflo into React projects. This procedure creates a React SWC plugin containing a Editflo editor.
        </p>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-start">
            For examples of the Editflo integration, visit the Editflo-react storybook.
        </p>
    </header>

    <!-- Prerequisites Section -->
    <div class="py-4 sm:py-6 md:py-8 text-start">
        <div class="flex items-center mb-3 sm:mb-4">

            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Prerequisites</h2>
        </div>
        <p class="text-gray-600 text-sm sm:text-base mt-1 sm:mt-2 flex items-center">
            <i class="fab fa-node-js text-green-500 mr-2"></i>
            This procedure requires <a href="" class="text-blue-500 hover:underline ml-1">Node.js (and npm)</a>.
        </p>
    </div>

    <!-- Instructions Section -->
    <section class="bg-white rounded-lg sm:rounded-xl shadow-md p-4 sm:p-6 mb-6 sm:mb-8">
        <div class="flex items-center mb-3 sm:mb-4">

            <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Getting Started</h2>
        </div>
        <div class="space-y-3 sm:space-y-4">
            <!-- Step 1 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-plus text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Create React Project</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Use Vite and React SWC plugin to create a new project.</p>
                    <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 sm:mt-2 inline-block font-mono">npm create vite@latest editflo-react-demo -- --template react-swc</code>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-download text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Install Editflo React</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Install the Editflo React package in your project.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-cog text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Configure Editor</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Import and use the Editor component in your React application.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <!-- Step 4 -->
            <div class="flex items-start">

                <div class="flex-1 min-w-0 w-full">
                    <p class="text-gray-600 text-xs sm:text-sm mt-1 mb-2 sm:mb-4">Using a text editor, open and replace the contents with:</p>
                    <div class="mb-2 overflow-x-auto">
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono whitespace-nowrap">npm install @editflo/editflo-react</code>
                    </div>

                    <!-- COMPACT CODE BLOCK FOR MOBILE -->
                    <div class="relative w-full">
                        <div class="bg-gray-900 text-gray-100 rounded-lg font-mono overflow-x-auto border border-gray-700">
                            <!-- Code Header -->
                            <div class="sticky left-0 top-0 bg-gray-800 border-b border-gray-700 px-3 py-2 flex items-center justify-between z-10">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                </div>
                                <span class="text-gray-400 text-xs">App.jsx</span>
                            </div>

                            <!-- Code Content - Very compact for mobile -->
                            <div class="p-2 sm:p-3 text-[10px] sm:text-xs md:text-sm leading-tight">
                                <!-- Line 1 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">1</span>
                                    <span class="text-purple-400">import</span><span class="text-gray-300"> { useRef } from 'react';</span>
                                </div>
                                <!-- Line 2 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">2</span>
                                    <span class="text-purple-400">import</span><span class="text-gray-300"> { Editor } from '@editflo/editflo-react';</span>
                                </div>
                                <!-- Line 3 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">3</span>
                                    <span class="text-purple-400">import</span><span class="text-gray-300"> './App.css';</span>
                                </div>
                                <!-- Line 4 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">4</span>
                                </div>
                                <!-- Line 5 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">5</span>
                                    <span class="text-purple-400">export default function</span><span class="text-yellow-300"> App</span><span class="text-gray-300">() {</span>
                                </div>
                                <!-- Line 6 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">6</span>
                                    <span class="text-gray-300 ml-2"><span class="text-purple-400">const</span> editorRef = <span class="text-yellow-300">useRef</span>(<span class="text-blue-400">null</span>);</span>
                                </div>
                                <!-- Line 7 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">7</span>
                                    <span class="text-gray-300 ml-2"><span class="text-purple-400">const</span> log = <span class="text-purple-400">()</span> =&gt; {</span>
                                </div>
                                <!-- Line 8 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">8</span>
                                    <span class="text-gray-300 ml-4"><span class="text-purple-400">if</span> (editorRef.<span class="text-blue-400">current</span>) {</span>
                                </div>
                                <!-- Line 9 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">9</span>
                                    <span class="text-gray-300 ml-6"><span class="text-yellow-300">console</span>.<span class="text-yellow-300">log</span>(editorRef.<span class="text-blue-400">current</span>.<span class="text-yellow-300">getContent</span>());</span>
                                </div>
                                <!-- Line 10 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">10</span>
                                    <span class="text-gray-300 ml-4">}</span>
                                </div>
                                <!-- Line 11 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">11</span>
                                    <span class="text-gray-300 ml-2">};</span>
                                </div>
                                <!-- Line 12 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">12</span>
                                </div>
                                <!-- Line 13 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">13</span>
                                    <span class="text-gray-300 ml-2"><span class="text-purple-400">return</span> (</span>
                                </div>
                                <!-- Line 14 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">14</span>
                                    <span class="text-gray-300 ml-4">&lt;&gt;</span>
                                </div>
                                <!-- Line 15 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">15</span>
                                    <span class="text-gray-300 ml-6">&lt;<span class="text-yellow-300">Editor</span></span>
                                </div>
                                <!-- Line 16 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">16</span>
                                    <span class="text-gray-300 ml-8"><span class="text-blue-400">apiKey</span>='no-api-key'</span>
                                </div>
                                <!-- Line 17 -->
                                <div class="flex flex-wrap">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">17</span>
                                    <span class="text-gray-300 ml-8"><span class="text-blue-400">onInit</span>={<span class="text-gray-300">(<span class="text-blue-400">_evt</span>, <span class="text-blue-400">editor</span>) =&gt; editorRef.<span class="text-blue-400">current</span> = editor }</span>
                                </div>
                                <!-- Line 18 -->
                                <div class="flex flex-wrap">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">18</span>
                                    <span class="text-gray-300 ml-8"><span class="text-blue-400">initialValue</span>="&lt;p&gt;This is the initial content of the editor.&lt;/p&gt;"</span>
                                </div>
                                <!-- Line 19 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">19</span>
                                    <span class="text-gray-300 ml-8"><span class="text-blue-400">init</span>={{</span>
                    </div>
                    <!-- Line 20 -->
                    <div class="flex">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">20</span>
                        <span class="text-gray-300 ml-10"><span class="text-blue-400">height</span>: <span class="text-orange-400">500</span>,</span>
                    </div>
                    <!-- Line 21 -->
                    <div class="flex">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">21</span>
                        <span class="text-gray-300 ml-10"><span class="text-blue-400">menubar</span>: <span class="text-blue-400">false</span>,</span>
                    </div>
                    <!-- Line 22 -->
                    <div class="flex">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">22</span>
                        <span class="text-gray-300 ml-10"><span class="text-blue-400">plugins</span>: [</span>
                    </div>
                    <!-- Line 23 -->
                    <div class="flex flex-wrap">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">23</span>
                        <span class="text-gray-300 ml-12">'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',</span>
                    </div>
                    <!-- Line 24 -->
                    <div class="flex flex-wrap">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">24</span>
                        <span class="text-gray-300 ml-12">'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',</span>
                    </div>
                    <!-- Line 25 -->
                    <div class="flex flex-wrap">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">25</span>
                        <span class="text-gray-300 ml-12">'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'</span>
                    </div>
                    <!-- Line 26 -->
                    <div class="flex">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">26</span>
                        <span class="text-gray-300 ml-10">],</span>
                    </div>
                    <!-- Line 27 - Simplified toolbar -->
                    <div class="flex flex-wrap">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">27</span>
                        <span class="text-gray-300 ml-10"><span class="text-blue-400">toolbar</span>: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',</span>
                    </div>
                    <!-- Line 31 -->
                    <div class="flex flex-wrap">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">31</span>
                        <span class="text-gray-300 ml-10"><span class="text-blue-400">content_style</span>: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'</span>
                    </div>
                    <!-- Line 32 -->
                    <div class="flex">
                        <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">32</span>
                        <span class="text-gray-300 ml-8">}}</span>
                                </div>
                                <!-- Line 33 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">33</span>
                                    <span class="text-gray-300 ml-6">/&gt;</span>
                                </div>
                                <!-- Line 34 -->
                                <div class="flex flex-wrap">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">34</span>
                                    <span class="text-gray-300 ml-6">&lt;<span class="text-yellow-300">button</span> <span class="text-blue-400">onClick</span>={<span class="text-gray-300">log</span>}&gt;Log editor content&lt;/<span class="text-yellow-300">button</span>&gt;</span>
                                </div>
                                <!-- Line 35 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">35</span>
                                    <span class="text-gray-300 ml-4">&lt;/&gt;</span>
                                </div>
                                <!-- Line 36 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">36</span>
                                    <span class="text-gray-300 ml-2">);</span>
                                </div>
                                <!-- Line 37 -->
                                <div class="flex">
                                    <span class="text-gray-500 w-5 text-right pr-2 select-none shrink-0">37</span>
                                    <span class="text-gray-300">}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Scroll indicator for mobile -->
                        <div class="absolute right-2 bottom-2 bg-gray-800 text-gray-400 text-[8px] px-1 py-0.5 rounded sm:hidden">
                            ← scroll →
                        </div>
                    </div>

                    <p class="text-gray-600 text-xs sm:text-sm mt-2 sm:mt-3 flex items-start">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                        This JavaScript file will create a component "App" containing a editflo editor configured with basic features.
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-key text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Update the apiKey option</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mt-1">Update the apiKey option in the editor element and include your Editflo Cloud API key.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="flex items-start">
                <div class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 sm:mt-1 flex-shrink-0">
                    <i class="fas fa-vial text-xs sm:text-sm"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-medium text-gray-800 text-sm sm:text-base">Test the application</h3>
                    <div class="mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                        <p class="text-gray-600 text-xs sm:text-sm">To start the development server, navigate to the <code class="bg-gray-100 px-1 rounded text-xs">editflo-react-demo</code> directory and run:</p>
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm inline-block font-mono flex items-center">
                            <i class="fas fa-terminal text-gray-500 mr-2"></i>npm run dev
                        </code>
                        <p class="text-gray-600 text-xs sm:text-sm">To stop the development server, press <kbd class="bg-gray-200 px-1 sm:px-2 py-0.5 sm:py-1 rounded text-xs flex items-center">
                                <i class="fas fa-keyboard mr-1"></i>Ctrl+C
                            </kbd></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deployment Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">

                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Deploying the application</h3>
            </div>
            <p class="text-gray-600 text-xs sm:text-sm mb-3 sm:mb-4">The application will require further configuration before deployment. For information see: <a href="#" class="text-blue-600 hover:underline">Building for Production</a> or <a href="#" class="text-blue-600 hover:underline">Deploying a Static Site</a>.</p>

            <p class="text-gray-800 font-medium text-sm sm:text-base mb-2 sm:mb-3 flex items-center">
                <!-- <i class="fas fa-upload text-gray-600 mr-2"></i> -->
                To deploy to a local HTTP Server:
            </p>

            <div class="space-y-2 sm:space-y-3">
                <div class="flex items-start">
                    <div class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Navigate to the directory and run:</p>
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">npm run build</code>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Preview the production build:</p>
                        <code class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs sm:text-sm mt-1 inline-block font-mono">npm run preview</code>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="rounded-full w-5 h-5 sm:w-6 sm:h-6 flex items-center justify-center mr-2 sm:mr-3 mt-0.5 flex-shrink-0 text-xs">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-gray-600 text-xs sm:text-sm">Copy contents of <code class="bg-gray-100 px-1 rounded text-xs">editflo-react-demo/dist</code> to web server root.</p>
                    </div>
                </div>
            </div>

            <p class="text-gray-800 font-medium text-sm sm:text-base mt-3 sm:mt-4 flex items-center">
                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                The application has now been deployed.
            </p>

            <!-- Note Box -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 mt-3 sm:mt-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800 flex items-center">
                            <i class="fas fa-sticky-note mr-1"></i>
                            Note
                        </h3>
                        <div class="mt-1 text-xs sm:text-sm text-yellow-700">
                            <p>Additional configuration required for deployment outside web server root directory.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Next Steps Section -->
        <div class="border-t border-gray-200 pt-4 sm:pt-6 mt-4 sm:mt-6">
            <div class="flex items-center mb-3 sm:mb-4">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Next Steps</h3>
            </div>

            <div class="space-y-3 sm:space-y-4">
                <!-- First Item -->
                <div class="flex items-start bg-blue-50 rounded-lg p-3 sm:p-4">
                    <div class="flex-shrink-0 mt-0.5">
                        <i class="fas fa-book-open text-blue-500 text-sm sm:text-base"></i>
                    </div>
                    <div class="ml-3 flex-1 min-w-0">
                        <p class="text-gray-700 text-sm sm:text-base font-medium mb-1">Editflo React Examples</p>
                        <p class="text-gray-600 text-xs sm:text-sm">
                            For examples of Editflo React integration, see:
                            <a href="#" class="text-blue-600 hover:underline font-medium">the Editflo-react storybook</a>
                        </p>
                    </div>
                </div>

                <!-- Second Item -->
                <div class="bg-blue-50 rounded-lg p-3 sm:p-4">
                    <div class="flex items-start mb-2">
                        <div class="flex-shrink-0 mt-0.5">
                            <i class="fas fa-cogs text-blue-500 text-sm sm:text-base"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-700 text-sm sm:text-base font-medium">Customization Resources</p>
                        </div>
                    </div>

                    <div class="space-y-2 sm:space-y-3 ml-8 sm:ml-9">
                        <!-- Integration -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-code text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Editflo React:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">technical reference</a>
                                </p>
                            </div>
                        </div>

                        <!-- Editflo Setup -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fas fa-tools text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">Editflo Setup:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">Basic configuration</a>
                                </p>
                            </div>
                        </div>

                        <!-- Angular Guide -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-0.5">
                                <i class="fab fa-angular text-blue-400 text-xs"></i>
                            </div>
                            <div class="ml-2 flex-1 min-w-0">
                                <p class="text-gray-600 text-xs sm:text-sm">
                                    <span class="font-medium">React Application:</span>
                                    <a href="#" class="text-blue-600 hover:underline ml-1">React guide</a> or
                                    <a href="#" class="text-blue-600 hover:underline ml-1">React docs</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>