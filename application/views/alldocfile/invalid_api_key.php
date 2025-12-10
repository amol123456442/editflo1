<style>
    html {
        /* scroll-padding-top: 120px; - Adjusted to Tailwind's utility scale for consistency */
        scroll-padding-top: 10rem;
        /* ~80px, adjusting for common fixed header height */
    }

    /* Custom scroll-margin utility, replacing your .scroll-margin */
    .scroll-section {
        scroll-margin-top: 10rem;
    }
</style>

<div class="mb-6 sm:mb-8 max-w-4xl mx-auto">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Invalid API key</h2>
    <div class="bg-white rounded-lg overflow-hidden">

        <div class="bg-red-50 border-l-4 border-red-600 p-4" role="alert">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3 mt-1">
                    <svg class="h-8 w-8 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="none">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.104 0 2.228.423 2.964 1.185.34.34.673.693.992 1.077l.617.733c.099.117.159.261.159.408 0 .428-.415.75-.769.75h-.375a.75.75 0 01-.75-.75c0-.128.05-.251.139-.364l.582-.694c.365-.434.618-.844.755-1.127A2.839 2.839 0 0012.001 10.5c-1.287 0-2.348.802-2.73 1.956.17-.058.342-.103.516-.134l.288-.052c1.232-.224 2.26.046 2.652.541a.75.75 0 01-1.092.932l-.234-.278c-.287-.34-.732-.489-1.258-.489-.553 0-1.075.244-1.424.636-.35.392-.533.882-.533 1.488 0 .584.182 1.066.533 1.488.35.422.871.666 1.424.666.526 0 .971-.149 1.258-.489l.234-.278a.75.75 0 011.092.932c-.392.495-1.42.765-2.652.541l-.288-.052c-.174-.031-.346-.076-.516-.134-.382 1.154-1.443 1.956-2.73 1.956-1.504 0-2.724-1.22-2.724-2.724s1.22-2.724 2.724-2.724zM12 8.25a.75.75 0 01.75.75v3a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>
                </div>

                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-xl font-bold text-gray-800 leading-snug mb-2">
                        Important
                    </p>

                    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mt-1">
                        Starting in early 2024, all editors on our cloud platform will be required to have a valid API key. Without a valid API key, your editor will transition to read-only mode, limiting your ability to make changes.
                    </p>
                    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mt-3">
                        Affected users will receive a notification in their editor. If you receive this notification, please contact the Administrator for your application/site. Admins will need to get a valid API key and paste it into the code to continue using TinyMCE.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-blue-50 border-l-4 border-blue-500 p-4">
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-2">
        It only takes 2 minutes to create your free Tiny account and get the API key:
    </p>
    <div class="flex items-center gap-2 flex-wrap">
        <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
            <i class="fa-brands fa-google mr-2"></i>
            Sign in with Google
        </button>

        <button type="button" class="text-white bg-[#0f1419] hover:bg-[#0f1419]/90 focus:ring-4 focus:outline-none focus:ring-[#0f1419]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-[#24292F] dark:focus:ring-[#24292F]/55">
            <i class="fa-brands fa-github mr-2"></i>
            Sign in with Github
        </button>
    </div>
</div>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">How will I know if this change affects me?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-3 ">
        If Editflo detects an invalid API key, it will display a notification. If you know or suspect you have been actively hiding or suppressing this notification, please remove these overrides. If you then see a notification, please follow the instructions to resolve the issue. If no notification appears, you are not affected.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">How can I get an API key?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base">
        The Admin who owns your Editflo implementation will need to log in <a href="https://www.tiny.cloud/auth/login?redirect_to=%2Fmy-account%2Fintegrate%2F" class="text-primary-blue">here</a> to get your account’s API key. If you do not have an account yet, you can <a href="https://www.tiny.cloud/pricing/" class="text-primary-blue">sign up for a free API key</a>. Paid users can <a href="https://www.tiny.cloud/contact/" class="text-primary-blue">contact our Technical Support</a> team for help.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">What will happen if I don’t provide a valid API key?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base">
        All editors on our cloud platform without a valid API key will be set to read-only mode in the beginning of 2024. If you self-host TinyMCE, you will not be impacted.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">If Editflo is free and open source, why is an API key required?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        Editflo can be accessed through a variety of licensing and hosting methods, including both free and paid options.
    </p>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        The free, open source option for Editflo is available under the GNU General Public License Version 2 or later. Users must self-host Editflo to take advantage of the open source license. This type of license does not require an API key.
    </p>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        The cloud hosted option for Editflo is available under commercial license, as described <a href="https://www.tiny.cloud/legal/cloud-use-subscription-agreement/" class="text-primary-blue">here</a>. This type of license requires an active API key.
    </p>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        If you are receiving an error notification, you are using the cloud-hosted option of Editflo under a commercial license. If you want to continue using Editflo without an API key, you will need to either migrate to the free, open source, self-hosted option or use a 3rd party-hosted CDN option under an MIT license.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">I installed the NPM package, which I assumed would be self-hosted. Why am I getting a notification that an API key is required?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        Our integrations default to using the Editflo Cloud service. If you’re receiving the notification that an API key is required, it means that you’re using the cloud-hosted option for Editflo under commercial license which requires a valid API key and allows for 1,000 editor loads per month for free.
    </p>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        Please <a href="https://www.tiny.cloud/docs/tinymce/latest/installation/" class="text-primary-blue">read our docs</a> to learn how to self-host Editflo or <a href="https://www.tiny.cloud/pricing/" class="text-primary-blue">sign up here</a> to continue using Editflo Cloud.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">I’ve used Editflo for years. Why am I now receiving notification that an API key is required?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        Thank you for your long-term use of Editflo and for selecting it for your projects. If you’re suddenly receiving this notification, it means that previous versions of the notification were hidden within your Editflo editor. We are working to ensure that all active users of Editflo are aware of the API key requirement, including those that may have hidden these notifications in the past.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">What does the message "This domain is not registered with Tiny Cloud" mean?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        This message means that the domain attempting to use Editflo is not registered with Tiny Cloud. Starting in 2024, a registered domain will be required to continue using TinyMCE.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">How can I resolve the issue of an unregistered domain?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        To resolve this issue, please inform your administrator and request that they review the list of approved domains on your Tiny Account. If necessary, they will need to add the unregistered domain to the approved list. <a href="https://www.tiny.cloud/docs/tinymce/latest/cloud-troubleshooting/#This-domain-is-not-registered-with-Tiny-Cloud.-To-continue-using-TinyMCE-a-registered-domain-is-required-starting-2024.-Please-alert-your-admin-to-review-the-approved-domains-and-add-this-one-if-required." class="text-primary-blue">Learn more here</a>.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Where can I view the list of approved domains for my Tiny Cloud account?</h2>
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-4">
        You can view the list of approved domains by logging into your Tiny Account. The approved domains are stored against your API Key.
    </p>
</section>

<section class="mt-5 pt-3 mb-4">
    <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">I would prefer to self-host TinyMCE. What are my options?</h2>
    <ul class="text-gray-700 text-base mb-4 list-disc pl-5 space-y-2">
        <li>If you plan to use only open-source Editflo features, the open-source version is available under the GNU General Public License Version 2 or later license.</li>
        <li>If you want to self-host Editflo and use our Premium features, get in touch with our Sales team for a custom quote.</li>
    </ul>
</section>


<div class="max-w-4xl mx-auto mt-6 mb-5">
    <div class="flex items-start border border-blue-200 bg-blue-100 p-4 rounded-lg shadow-sm">

        <div class="flex-shrink-0 mr-3 mt-1">
            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
            </svg>
        </div>

        <div class="ml-3 flex-1 min-w-0">
            <p class="text-lg font-bold text-blue-800 leading-snug mb-1">
                Tip
            </p>

            <p class="text-gray-700 sm:mb-4 text-sm sm:text-base">
                For additional information on Troubleshooting Tiny Cloud visit: Cloud Troubleshooting.
            </p>
        </div>
    </div>
</div>

<h1 class="text-xl font-bold text-gray-800 mb-2">Getting Started with TinyMCE</h1>
<p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-2">Editflo is a rich text editor designed for web applications. To install TinyMCE, include the required script and initialize the editor with a minimal configuration. Upon registration, an API key is provided along with a corresponding code snippet for integration.</p>
<div class="bg-white rounded-lg border border-gray-200 p-6 mb-8">
    <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-6">
        Editflo 8 is a powerful and flexible rich text editor that can be embedded in web applications. This quick
        start covers how to add a Editflo editor to a web page using the Editflo Cloud.
    </p>

    <!-- Sign Up Section -->
    <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
        <p class="text-gray-700 sm:mb-4 text-sm sm:text-base mb-2">
            It only takes 2 minutes to create your free Tiny account and get the API key:
        </p>
        <div class="flex items-center gap-2 flex-wrap">
            <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
                <i class="fa-brands fa-google mr-2"></i>
                Sign in with Google
            </button>

            <button type="button" class="text-white bg-[#0f1419] hover:bg-[#0f1419]/90 focus:ring-4 focus:outline-none focus:ring-[#0f1419]/50 box-border border border-transparent font-medium leading-5 rounded-base text-sm px-4 py-2.5 text-center inline-flex items-center dark:hover:bg-[#24292F] dark:focus:ring-[#24292F]/55">
                <i class="fa-brands fa-github mr-2"></i>
                Sign in with Github
            </button>
        </div>
    </div>
</div>