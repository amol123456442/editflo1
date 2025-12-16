<div class="min-h-screen w-full overflow-x-hidden px-3 sm:px-4 md:px-6">
    <!-- Header Section -->
    <section class="mb-5 sm:mb-10 md:mb-12 px-3 sm:px-0 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-1 pb-2">editflo.util.ImageUploader</h1>
        <p class="text-gray-700 text-lg sm:text-base mb-3 sm:mb-4 leading-relaxed px-3 sm:px-0 w-full">
            This class handles uploading images to a back-end server.
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
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[20%] md:w-auto">
                            <a href="#upload" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <!-- <span class="inline md:hidden">uplo...</span> -->
                                <span>upload()</span>
                            </a>
                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[70%] md:w-auto">
                            <!-- <p class="text-xs md:text-sm text-gray-900 line-clamp-3 md:line-clamp-none">
                                Uploads images to the configured image upload URL (<code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">images_upload_url</code>) or passes the images to the defined image upload handler function (<code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">images_upload_handler</code>).
                            </p> -->
                            <!-- <span class="inline md:hidden">Uploads images to the configured img upload URL <br> (&lt;img_upload_url&gt;) <br>or passes the img to the defined img upload handler <br>(&lt;img_uplo_handle&gt;)</span> -->
                            <span>Uploads images to the configured image upload URL (<code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">images_upload_url</code>) or passes the images to the defined image upload handler function (<code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">images_upload_handler</code>).</span>

                        </td>
                        <td class="px-3 py-2 md:px-4 md:py-3 align-top w-[10%] md:w-auto">
                            <a href="" class="text-blue-600 hover:text-blue-800 font-mono  text-sm sm:text-base">
                                <code class="bg-gray-100 px-2 py-1 rounded border text-xs md:text-sm truncate md:truncate-none block">
                                    ImgUpload
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
    <section id="upload" class="mb-5 sm:mb-5 md:mb-5 px-3 sm:px-0 w-full border-b">
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">Methods</h2>
        <h2 class="text-2xl sm:text-xl md:text-2xl font-bold text-gray-800 mb-3 sm:mb-4 pb-2 border-gray-200 break-words">upload()</h2>

        <div class="mb-5 sm:mb-5 w-full">
            <div class="bg-gray-900 text-gray-100 rounded-lg w-full">
                <div class="p-3 sm:p-4 overflow-x-auto">
                    <div class="text-lg sm:text-sm inline-block min-w-full sm:min-w-0">
                        <span class="text-blue-400">upload</span>
                        <span class="text-green-300">(blobInfos: </span>
                        <span class="text-blue-400">Array </span>
                        <span class="text-green-300">, showNotification:</span>
                        <span class="text-blue-400">Boolean</span>
                        <span class="text-green-300">)</span>
                    </div>
                </div>
            </div>

            <p class="text-gray-700 text-lg sm:text-base mb-4 mt-5 w-full">
                Uploads images to the configured image upload URL (<code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">img_upload_url</code>) or passes the images to the defined image upload handler function (<code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">img_upload_handler</code>)
            </p>
        </div>

        <div class="w-full">
            <div class="w-full">
                <h3 class="text-lg sm:text-lg font-bold text-gray-800 mb-2 sm:mb-3">Parameters</h3>
                <div class="bg-gray-50 p-3 sm:p-4 rounded-lg w-full">
                    <ul class="space-y-3 list-disc pl-5">
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">blobInfos (Array)</code>
                            <span class="inline md:hidden text-gray-700 text-lg sm:text-sm ml-2">- A BlobInfo array containing the image data to upload. A BlobInfo can be created by calling 
                                <!-- <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">editor.editorUpload.blobCache.create()</code>. -->
                            </span>
                            <span class="hidden md:inline text-gray-700 text-lg sm:text-sm ml-2">- A BlobInfo array containing the image data to upload. A BlobInfo can be created by calling 
                                <code class="inline-block border bg-gray-100 px-1.5 py-0.5 rounded text-md sm:text-sm border-gray-300 mx-1 my-1 break-words max-w-full">editor.editorUpload.blobCache.create()</code>.
                            </span>
                        </li>
                        <li class="mb-2">
                            <code class="text-md text-gray-600 border border-gray-300 bg-gray-100 p-1">showNotification (Boolean)</code>
                            <span class="text-gray-700 text-lg sm:text-sm ml-2">- (Optional) When set to true, a notification with a progress bar will be shown during image uploads.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>